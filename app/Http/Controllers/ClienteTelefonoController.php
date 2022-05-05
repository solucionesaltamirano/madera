<?php

namespace App\Http\Controllers;

use App\DataTables\ClienteTelefonoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClienteTelefonoRequest;
use App\Http\Requests\UpdateClienteTelefonoRequest;
use App\Models\ClienteTelefono;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\DB;
use App\Models\LogErrore;

class ClienteTelefonoController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:clienteTelefonos.index')->only(['index', 'show']);
        $this->middleware('can:clienteTelefonos.create')->only(['create', 'store']);
        $this->middleware('can:clienteTelefonos.edit')->only(['edit', 'update']);
        $this->middleware('can:clienteTelefonos.destroy')->only('destroy');
    }
    /**
     * Display a listing of the ClienteTelefono.
     *
     * @param ClienteTelefonoDataTable $clienteTelefonoDataTable
     * @return Response
     */
    public function index(ClienteTelefonoDataTable $clienteTelefonoDataTable)
    {
        return $clienteTelefonoDataTable->render('admin.cliente_telefonos.index');
    }

    /**
     * Show the form for creating a new ClienteTelefono.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.cliente_telefonos.create');
    }

    /**
     * Store a newly created ClienteTelefono in storage.
     *
     * @param CreateClienteTelefonoRequest $request
     *
     * @return Response
     */
    public function store(CreateClienteTelefonoRequest $request)
    {
        $input = $request->all();

        try {
            DB::beginTransaction();

            /** @var ClienteTelefono $clienteTelefono */
            $clienteTelefono = ClienteTelefono::create($input);

            Flash::success('Nuevo registro creado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => ClienteTelefono::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clienteTelefonos.index'));
    }

    /**
     * Display the specified ClienteTelefono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ClienteTelefono $clienteTelefono */
        $clienteTelefono = ClienteTelefono::find($id);

        if (empty($clienteTelefono)) {
            Flash::error('Cliente Telefono Registro no econtrado.');

            return redirect(route('clienteTelefonos.index'));
        }

        return view('admin.cliente_telefonos.show')->with('clienteTelefono', $clienteTelefono);
    }

    /**
     * Show the form for editing the specified ClienteTelefono.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ClienteTelefono $clienteTelefono */
        $clienteTelefono = ClienteTelefono::find($id);

        if (empty($clienteTelefono)) {
            Flash::error('Cliente Telefono Registro no econtrado.');

            return redirect(route('clienteTelefonos.index'));
        }

        return view('admin.cliente_telefonos.edit')->with('clienteTelefono', $clienteTelefono);
    }

    /**
     * Update the specified ClienteTelefono in storage.
     *
     * @param  int              $id
     * @param UpdateClienteTelefonoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClienteTelefonoRequest $request)
    {
        /** @var ClienteTelefono $clienteTelefono */
        $clienteTelefono = ClienteTelefono::find($id);

        if (empty($clienteTelefono)) {
            Flash::error('Cliente Telefono Registro no econtrado.');

            return redirect(route('clienteTelefonos.index'));
        }

        try {
            DB::beginTransaction();

            $clienteTelefono->fill($request->all());
            $clienteTelefono->save();

            Flash::success('Registro actualizado correctamente.');
            
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => ClienteTelefono::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clienteTelefonos.index'));
    }

    /**
     * Remove the specified ClienteTelefono from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ClienteTelefono $clienteTelefono */
        $clienteTelefono = ClienteTelefono::find($id);

        if (empty($clienteTelefono)) {
            Flash::error('Cliente Telefono Registro no econtrado.');

            return redirect(route('clienteTelefonos.index'));
        }

        try {
            DB::beginTransaction();
            
            $clienteTelefono->delete();
            Flash::success('Registro borrado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => ClienteTelefono::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clienteTelefonos.index'));
    }
}
