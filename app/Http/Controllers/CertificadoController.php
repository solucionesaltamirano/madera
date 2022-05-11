<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\Models\LogErrore;
use App\Models\Certificado;
use App\Models\ClienteEmpresa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\DataTables\CertificadoDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateCertificadoRequest;
use App\Http\Requests\UpdateCertificadoRequest;

class CertificadoController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:certificados.index')->only(['index', 'show']);
        $this->middleware('can:certificados.create')->only(['create', 'store', 'emitPdf']);
        $this->middleware('can:certificados.edit')->only(['edit', 'update']);
        $this->middleware('can:certificados.destroy')->only('destroy');
    }
    /**
     * Display a listing of the Certificado.
     *
     * @param CertificadoDataTable $certificadoDataTable
     * @return Response
     */
    public function index(CertificadoDataTable $certificadoDataTable)
    {
        return $certificadoDataTable->render('admin.certificados.index');
    }

    /**
     * Show the form for creating a new Certificado.
     *
     * @return Response
     */
    public function create()
    {
        if(auth()->user()->hasRole('ADMIN')){
            $empresas = ClienteEmpresa::all();
        }else{
            $empresas = ClienteEmpresa::where('cliente_id', auth()->user()->empresa()->first()->id)->get();
        }
        return view('admin.certificados.create',[
            'empresas' => $empresas
        ]);
    }

    /**
     * Store a newly created Certificado in storage.
     *
     * @param CreateCertificadoRequest $request
     *
     * @return Response
     */
    public function store(CreateCertificadoRequest $request)
    {
        $input = $request->all();

        try {
            DB::beginTransaction();

            $secuencial = Certificado::where('cliente_id', $input['cliente_id'])
            ->max('secuencial') + 1 ?? 1;

            /** @var Certificado $certificado */
            $certificado = Certificado::create([
                'cliente_id' => $input['cliente_id'],
                'empresa_id' => $input['empresa_id'],
                'secuencial' => $secuencial,
                'fecha' => today(),
                'descripcion' => $input['descripcion'],
                'cantidad' => $input['cantidad'],
                'humedad' => $input['humedad'],
                'fecha_inicio'  => $input['fecha_inicio'],
                'fecha_fin' => $input['fecha_fin'],
                'hora_inicio' => $input['hora_inicio'],
                'hora_fin' => $input['hora_fin'],
                'temperatura_inicio' => $input['temperatura_inicio'],
                'temperatura_fin' => $input['temperatura_fin'],
            ]);

            Flash::success('Nuevo registro creado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => Certificado::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('certificados.index'));
    }

    /**
     * Display the specified Certificado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Certificado $certificado */
        $certificado = Certificado::find($id);

        if (empty($certificado)) {
            Flash::error('Certificado Registro no econtrado.');

            return redirect(route('certificados.index'));
        }

        return view('admin.certificados.show')->with('certificado', $certificado);
    }

    /**
     * Show the form for editing the specified Certificado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Certificado $certificado */
        $certificado = Certificado::find($id);

        if (empty($certificado)) {
            Flash::error('Certificado Registro no econtrado.');

            return redirect(route('certificados.index'));
        }

        return view('admin.certificados.edit')->with('certificado', $certificado);
    }

    /**
     * Update the specified Certificado in storage.
     *
     * @param  int              $id
     * @param UpdateCertificadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCertificadoRequest $request)
    {
        /** @var Certificado $certificado */
        $certificado = Certificado::find($id);

        if (empty($certificado)) {
            Flash::error('Certificado Registro no econtrado.');

            return redirect(route('certificados.index'));
        }

        try {
            DB::beginTransaction();

            $certificado->fill($request->all());
            $certificado->save();

            Flash::success('Registro actualizado correctamente.');
            
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => Certificado::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('certificados.index'));
    }

    /**
     * Remove the specified Certificado from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Certificado $certificado */
        $certificado = Certificado::find($id);

        if (empty($certificado)) {
            Flash::error('Certificado Registro no econtrado.');

            return redirect(route('certificados.index'));
        }

        try {
            DB::beginTransaction();
            
            $certificado->delete();
            Flash::success('Registro borrado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => Certificado::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('certificados.index'));
    }

    /**
     * Export the specified Certificado from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function emitPdf($hash)
    {
        $id = Crypt::decrypt($hash);
        /** @var Certificado $certificado */
        $certificado = Certificado::find($id);

        $html = view('admin.certificados.export.certificado',[
            'certificado' => $certificado,
            'hash' => $hash,
        ])->render();

        $pdf = \PDF::loadHtml($html)
                ->setPaper('letter')
                ->setOption('margin-top', 10)
                ->setOption('margin-bottom', 10)
                ->setOption('margin-right', 5)
                ->setOption('margin-left', 20)
                ;

        return $pdf->download( 'Certificado '. $hash . '.pdf');
        return view('admin.certificados.export.certificado',[
            'certificado' => $certificado,
            'hash' => $hash,
        ]);

    }

    /**
     * Find the specified Certificado from url QR.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function findQr($hash)
    {
        $id = Crypt::decrypt($hash);

        /** @var Certificado $certificado */
        $certificado = Certificado::find($id);

        return view('admin.certificados.export.certificado',[
            'certificado' => $certificado,
            'hash' => $hash,
        ]);

    }
}
