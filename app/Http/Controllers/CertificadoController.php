<?php

namespace App\Http\Controllers;

use App\DataTables\CertificadoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCertificadoRequest;
use App\Http\Requests\UpdateCertificadoRequest;
use App\Models\Certificado;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\DB;
use App\Models\LogErrore;

class CertificadoController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:certificados.index')->only(['index', 'show']);
        $this->middleware('can:certificados.create')->only(['create', 'store']);
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
        return view('admin.certificados.create');
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

            /** @var Certificado $certificado */
            $certificado = Certificado::create($input);

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
}