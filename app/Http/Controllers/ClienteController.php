<?php

namespace App\Http\Controllers;

use App\DataTables\ClienteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\ClienteTelefono;
use Response;
use Illuminate\Support\Facades\DB;
use App\Models\LogErrore;
use App\Models\User;

class ClienteController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:clientes.index')->only(['index', 'show']);
        $this->middleware('can:clientes.create')->only(['create', 'store']);
        $this->middleware('can:clientes.edit')->only(['edit', 'update']);
        $this->middleware('can:clientes.destroy')->only('destroy');
    }
    /**
     * Display a listing of the Cliente.
     *
     * @param ClienteDataTable $clienteDataTable
     * @return Response
     */
    public function index(ClienteDataTable $clienteDataTable)
    {
        return $clienteDataTable->render('admin.clientes.index');
    }

    /**
     * Show the form for creating a new Cliente.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created Cliente in storage.
     *
     * @param CreateClienteRequest $request
     *
     * @return Response
     */
    public function store(CreateClienteRequest $request)
    {
        $input = $request->all();

        // dd($input);

        try {
            DB::beginTransaction();

            /** @var User $user */
            $user = User::create([
                'name' => $input['nombre_representante_legal'],
                'username' => $input['username'],
                'email' => $input['email'],
                'password' => bcrypt($input['password']),
            ]);

            if($request->media){
                $user->addMedia($request->media)->toMediaCollection();
                $user->save();
                $user->profile_photo_path = $user->getMedia()->last()->getUrl();
                $user->save();
            }

            $user->roles()->sync([5]);

            /** @var Cliente $cliente */
            $cliente = Cliente::create([
                'user_id' => $user->id,
                'codigo' => $input['codigo'],
                'nombre_empresa' => $input['nombre_empresa'],
                'direccion' => $input['direccion'],
                'fecha_registro' => $input['fecha_registro'],
                'fecha_vencimiento' => $input['fecha_vencimiento'],
                'nombre_representante_legal' => $input['nombre_representante_legal'],
            ]);

            foreach($input['item'] as $telefono){
                ClienteTelefono::create([
                    'cliente_id' => $cliente->id,
                    'telefono' => $telefono['numero'],
                    'nombre' => $telefono['nombre'],
                    'puesto' => $telefono['puesto'] ?? null,
                ]);
            }

            Flash::success('Nuevo Cliente creado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => Cliente::class,
                'user_id' => auth()->user()->id
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified Cliente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Cliente $cliente */
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            Flash::error('Cliente Registro no econtrado.');

            return redirect(route('clientes.index'));
        }

        return view('admin.clientes.show')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified Cliente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Cliente $cliente */
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            Flash::error('Cliente Registro no econtrado.');

            return redirect(route('clientes.index'));
        }

        return view('admin.clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified Cliente in storage.
     *
     * @param  int              $id
     * @param UpdateClienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClienteRequest $request)
    {
        /** @var Cliente $cliente */
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            Flash::error('Cliente Registro no econtrado.');

            return redirect(route('clientes.index'));
        }

        try {
            DB::beginTransaction();

            $cliente->fill($request->all());
            $cliente->save();

            Flash::success('Registro actualizado correctamente.');
            
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => Cliente::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified Cliente from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Cliente $cliente */
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            Flash::error('Cliente Registro no econtrado.');

            return redirect(route('clientes.index'));
        }

        try {
            DB::beginTransaction();
            
            $cliente->delete();
            Flash::success('Registro borrado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => Cliente::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('clientes.index'));
    }
}
