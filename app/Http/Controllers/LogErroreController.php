<?php

namespace App\Http\Controllers;

use App\DataTables\LogErroreDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLogErroreRequest;
use App\Http\Requests\UpdateLogErroreRequest;
use App\Models\LogErrore;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\DB;
use App\Models\LogErrore;

class LogErroreController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:logErrores.index')->only(['index', 'show']);
        $this->middleware('can:logErrores.create')->only(['create', 'store']);
        $this->middleware('can:logErrores.edit')->only(['edit', 'update']);
        $this->middleware('can:logErrores.destroy')->only('destroy');
    }
    /**
     * Display a listing of the LogErrore.
     *
     * @param LogErroreDataTable $logErroreDataTable
     * @return Response
     */
    public function index(LogErroreDataTable $logErroreDataTable)
    {
        return $logErroreDataTable->render('admin.log_errores.index');
    }

    /**
     * Show the form for creating a new LogErrore.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.log_errores.create');
    }

    /**
     * Store a newly created LogErrore in storage.
     *
     * @param CreateLogErroreRequest $request
     *
     * @return Response
     */
    public function store(CreateLogErroreRequest $request)
    {
        $input = $request->all();

        try {
            DB::beginTransaction();

            /** @var LogErrore $logErrore */
            $logErrore = LogErrore::create($input);

            Flash::success('Nuevo registro creado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => LogErrore::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('logErrores.index'));
    }

    /**
     * Display the specified LogErrore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var LogErrore $logErrore */
        $logErrore = LogErrore::find($id);

        if (empty($logErrore)) {
            Flash::error('Log Errore Registro no econtrado.');

            return redirect(route('logErrores.index'));
        }

        return view('admin.log_errores.show')->with('logErrore', $logErrore);
    }

    /**
     * Show the form for editing the specified LogErrore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var LogErrore $logErrore */
        $logErrore = LogErrore::find($id);

        if (empty($logErrore)) {
            Flash::error('Log Errore Registro no econtrado.');

            return redirect(route('logErrores.index'));
        }

        return view('admin.log_errores.edit')->with('logErrore', $logErrore);
    }

    /**
     * Update the specified LogErrore in storage.
     *
     * @param  int              $id
     * @param UpdateLogErroreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLogErroreRequest $request)
    {
        /** @var LogErrore $logErrore */
        $logErrore = LogErrore::find($id);

        if (empty($logErrore)) {
            Flash::error('Log Errore Registro no econtrado.');

            return redirect(route('logErrores.index'));
        }

        try {
            DB::beginTransaction();

            $logErrore->fill($request->all());
            $logErrore->save();

            Flash::success('Registro actualizado correctamente.');
            
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => LogErrore::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('logErrores.index'));
    }

    /**
     * Remove the specified LogErrore from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var LogErrore $logErrore */
        $logErrore = LogErrore::find($id);

        if (empty($logErrore)) {
            Flash::error('Log Errore Registro no econtrado.');

            return redirect(route('logErrores.index'));
        }

        try {
            DB::beginTransaction();
            
            $logErrore->delete();
            Flash::success('Registro borrado correctamente.');
        } catch (\Exception $exception) {
            DB::rollBack();
            LogErrore::create([
                'description' => $exception->getMessage(),
                'modelo' => LogErrore::class,
                'user_id' => auth()->user()->id,
                'sucursal_id' => session('sucursal_selected')[0] ?? null,
                'caja_id' => session('caja_selected') ?? null
            ]);
            Flash::success('[ERROR] Ocurrio un error al realizar la transaccion]');
        }
        DB::commit();

        return redirect(route('logErrores.index'));
    }
}
