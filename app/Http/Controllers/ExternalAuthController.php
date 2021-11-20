<?php

namespace App\Http\Controllers;

use App\DataTables\ExternalAuthDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateExternalAuthRequest;
use App\Http\Requests\UpdateExternalAuthRequest;
use App\Models\ExternalAuth;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ExternalAuthController extends AppBaseController
{

    public function __construct(){
        // $this->middleware('can:external_auths.show')->only(['index', 'show']);
        // $this->middleware('can:external_auths.create')->only(['create', 'store']);
        // $this->middleware('can:external_auths.edit')->only(['edit', 'update']);
        // $this->middleware('can:external_auths.destroy')->only('destroy');
    }

    /**
     * Display a listing of the ExternalAuth.
     *
     * @param ExternalAuthDataTable $externalAuthDataTable
     * @return Response
     */
    public function index(ExternalAuthDataTable $externalAuthDataTable)
    {
        return $externalAuthDataTable->render('admin.external_auths.index');
    }

    /**
     * Show the form for creating a new ExternalAuth.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.external_auths.create');
    }

    /**
     * Store a newly created ExternalAuth in storage.
     *
     * @param CreateExternalAuthRequest $request
     *
     * @return Response
     */
    public function store(CreateExternalAuthRequest $request)
    {
        $input = $request->all();

        /** @var ExternalAuth $externalAuth */
        $externalAuth = ExternalAuth::create($input);

        Flash::success('External Auth saved successfully.');

        return redirect(route('externalAuths.index'));
    }

    /**
     * Display the specified ExternalAuth.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ExternalAuth $externalAuth */
        $externalAuth = ExternalAuth::find($id);

        if (empty($externalAuth)) {
            Flash::error('External Auth not found');

            return redirect(route('externalAuths.index'));
        }

        return view('admin.external_auths.show')->with('externalAuth', $externalAuth);
    }

    /**
     * Show the form for editing the specified ExternalAuth.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ExternalAuth $externalAuth */
        $externalAuth = ExternalAuth::find($id);

        if (empty($externalAuth)) {
            Flash::error('External Auth not found');

            return redirect(route('externalAuths.index'));
        }

        return view('admin.external_auths.edit')->with('externalAuth', $externalAuth);
    }

    /**
     * Update the specified ExternalAuth in storage.
     *
     * @param  int              $id
     * @param UpdateExternalAuthRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExternalAuthRequest $request)
    {
        /** @var ExternalAuth $externalAuth */
        $externalAuth = ExternalAuth::find($id);

        if (empty($externalAuth)) {
            Flash::error('External Auth not found');

            return redirect(route('externalAuths.index'));
        }

        $externalAuth->fill($request->all());
        $externalAuth->save();

        Flash::success('External Auth updated successfully.');

        return redirect(route('externalAuths.index'));
    }

    /**
     * Remove the specified ExternalAuth from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ExternalAuth $externalAuth */
        $externalAuth = ExternalAuth::find($id);

        if (empty($externalAuth)) {
            Flash::error('External Auth not found');

            return redirect(route('externalAuths.index'));
        }

        $externalAuth->delete();

        Flash::success('External Auth deleted successfully.');

        return redirect(route('externalAuths.index'));
    }
}
