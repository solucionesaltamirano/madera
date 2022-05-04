<?php

namespace App\Http\Controllers;

use App\DataTables\BusinessConfigurationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBusinessConfigurationRequest;
use App\Http\Requests\UpdateBusinessConfigurationRequest;
use App\Models\BusinessConfiguration;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BusinessConfigurationController extends AppBaseController
{
    public function __construct(){
        $this->middleware('can:businessConfigurations.index')->only(['index', 'show']);
        $this->middleware('can:businessConfigurations.create')->only(['create', 'store']);
        $this->middleware('can:businessConfigurations.edit')->only(['edit', 'update']);
        $this->middleware('can:businessConfigurations.destroy')->only('destroy');
    }
    /**
     * Display a listing of the BusinessConfiguration.
     *
     * @param BusinessConfigurationDataTable $businessConfigurationDataTable
     * @return Response
     */
    public function index(BusinessConfigurationDataTable $businessConfigurationDataTable)
    {
        return $businessConfigurationDataTable->render('admin.business_configurations.index');
    }

    /**
     * Show the form for creating a new BusinessConfiguration.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.business_configurations.create');
    }

    /**
     * Store a newly created BusinessConfiguration in storage.
     *
     * @param CreateBusinessConfigurationRequest $request
     *
     * @return Response
     */
    public function store(CreateBusinessConfigurationRequest $request)
    {
        $input = $request->all();

        /** @var BusinessConfiguration $businessConfiguration */
        $businessConfiguration = BusinessConfiguration::create($input);

        Flash::success('Business Configuration saved successfully.');

        return redirect(route('businessConfigurations.index'));
    }

    /**
     * Display the specified BusinessConfiguration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var BusinessConfiguration $businessConfiguration */
        $businessConfiguration = BusinessConfiguration::find($id);

        if (empty($businessConfiguration)) {
            Flash::error('Business Configuration not found');

            return redirect(route('businessConfigurations.index'));
        }

        return view('admin.business_configurations.show')->with('businessConfiguration', $businessConfiguration);
    }

    /**
     * Show the form for editing the specified BusinessConfiguration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var BusinessConfiguration $businessConfiguration */
        $businessConfiguration = BusinessConfiguration::find($id);

        if (empty($businessConfiguration)) {
            Flash::error('Business Configuration not found');

            return redirect(route('businessConfigurations.index'));
        }

        return view('admin.business_configurations.edit')->with('businessConfiguration', $businessConfiguration);
    }

    /**
     * Update the specified BusinessConfiguration in storage.
     *
     * @param  int              $id
     * @param UpdateBusinessConfigurationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBusinessConfigurationRequest $request)
    {
        /** @var BusinessConfiguration $businessConfiguration */
        $businessConfiguration = BusinessConfiguration::find($id);

        if (empty($businessConfiguration)) {
            Flash::error('Business Configuration not found');

            return redirect(route('businessConfigurations.index'));
        }

        $businessConfiguration->fill($request->all());
        $businessConfiguration->save();

        Flash::success('Business Configuration updated successfully.');

        return redirect(route('businessConfigurations.index'));
    }

    /**
     * Remove the specified BusinessConfiguration from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var BusinessConfiguration $businessConfiguration */
        $businessConfiguration = BusinessConfiguration::find($id);

        if (empty($businessConfiguration)) {
            Flash::error('Business Configuration not found');

            return redirect(route('businessConfigurations.index'));
        }

        $businessConfiguration->delete();

        Flash::success('Business Configuration deleted successfully.');

        return redirect(route('businessConfigurations.index'));
    }
}
