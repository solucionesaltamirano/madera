<?php

namespace App\Http\Controllers;

use App\DataTables\ClienteEmpresaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClienteEmpresaRequest;
use App\Http\Requests\UpdateClienteEmpresaRequest;
use App\Models\ClienteEmpresa;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Cliente;
use Response;
use Illuminate\Support\Facades\DB;
use App\Models\LogErrore;

class ClienteEmpresaController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:clienteEmpresas.index')->only(['index', 'show']);
        $this->middleware('can:clienteEmpresas.create')->only(['create', 'store']);
        $this->middleware('can:clienteEmpresas.edit')->only(['edit', 'update']);
        $this->middleware('can:clienteEmpresas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the ClienteEmpresa.
     *
     * @param ClienteEmpresaDataTable $clienteEmpresaDataTable
     * @return Response
     */
    public function index(ClienteEmpresaDataTable $clienteEmpresaDataTable)
    {
        return $clienteEmpresaDataTable->render('admin.cliente_empresas.index');
    }

    /**
     * Show the form for creating a new ClienteEmpresa.
     *
     * @return Response
     */
    public function create()
    {
        $clientes = Cliente::get();
        
        return view('admin.cliente_empresas.create',[
            'clientes' => $clientes
        ]);
    }

    /**
     * Store a newly created ClienteEmpresa in storage.
     *
     * @param CreateClienteEmpresaRequest $request
     *
     * @return Response
     */
    public function store(CreateClienteEmpresaRequest $request)
    {
        $input = $request->all();

        try {
            DB::beginTransaction();

            /** @var ClienteEmpresa $clienteEmpresa */
            $clienteEmpresa = ClienteEmpresa::create($input);

            Flash::success('Nuevo registro creado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => ClienteEmpresa::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clienteEmpresas.index'));
    }

    /**
     * Display the specified ClienteEmpresa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ClienteEmpresa $clienteEmpresa */
        $clienteEmpresa = ClienteEmpresa::find($id);

        if (empty($clienteEmpresa)) {
            Flash::error('Cliente Empresa Registro no econtrado.');

            return redirect(route('clienteEmpresas.index'));
        }

        return view('admin.cliente_empresas.show')->with('clienteEmpresa', $clienteEmpresa);
    }

    /**
     * Show the form for editing the specified ClienteEmpresa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ClienteEmpresa $clienteEmpresa */
        $clienteEmpresa = ClienteEmpresa::find($id);

        $clientes = Cliente::get();

        if (empty($clienteEmpresa)) {
            Flash::error('Cliente Empresa Registro no econtrado.');

            return redirect(route('clienteEmpresas.index'));
        }

        return view('admin.cliente_empresas.edit',[
            'clienteEmpresa' => $clienteEmpresa,
            'clientes' => $clientes
        ]);
    }

    /**
     * Update the specified ClienteEmpresa in storage.
     *
     * @param  int              $id
     * @param UpdateClienteEmpresaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClienteEmpresaRequest $request)
    {
        /** @var ClienteEmpresa $clienteEmpresa */
        $clienteEmpresa = ClienteEmpresa::find($id);

        if (empty($clienteEmpresa)) {
            Flash::error('Cliente Empresa Registro no econtrado.');

            return redirect(route('clienteEmpresas.index'));
        }

        try {
            DB::beginTransaction();

            $clienteEmpresa->fill($request->all());
            $clienteEmpresa->save();

            Flash::success('Registro actualizado correctamente.');
            
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => ClienteEmpresa::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clienteEmpresas.index'));
    }

    /**
     * Remove the specified ClienteEmpresa from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ClienteEmpresa $clienteEmpresa */
        $clienteEmpresa = ClienteEmpresa::find($id);

        if (empty($clienteEmpresa)) {
            Flash::error('Cliente Empresa Registro no econtrado.');

            return redirect(route('clienteEmpresas.index'));
        }

        try {
            DB::beginTransaction();
            
            $clienteEmpresa->delete();
            Flash::success('Registro borrado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => ClienteEmpresa::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clienteEmpresas.index'));
    }
}
