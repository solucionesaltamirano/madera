<?php

namespace App\Http\Controllers;

use App\DataTables\ClienteEmpresaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClienteEmpresaRequest;
use App\Http\Requests\UpdateClienteEmpresaRequest;
use App\Models\ClienteEmpresa;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

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
        return view('admin.cliente_empresas.create');
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

        /** @var ClienteEmpresa $clienteEmpresa */
        $clienteEmpresa = ClienteEmpresa::create($input);

        Flash::success('Cliente Empresa saved successfully.');

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
            Flash::error('Cliente Empresa not found');

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

        if (empty($clienteEmpresa)) {
            Flash::error('Cliente Empresa not found');

            return redirect(route('clienteEmpresas.index'));
        }

        return view('admin.cliente_empresas.edit')->with('clienteEmpresa', $clienteEmpresa);
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
            Flash::error('Cliente Empresa not found');

            return redirect(route('clienteEmpresas.index'));
        }

        $clienteEmpresa->fill($request->all());
        $clienteEmpresa->save();

        Flash::success('Cliente Empresa updated successfully.');

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
            Flash::error('Cliente Empresa not found');

            return redirect(route('clienteEmpresas.index'));
        }

        $clienteEmpresa->delete();

        Flash::success('Cliente Empresa deleted successfully.');

        return redirect(route('clienteEmpresas.index'));
    }
}
