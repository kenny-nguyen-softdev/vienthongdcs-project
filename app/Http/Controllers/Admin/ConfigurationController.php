<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Configuration\ConfigurationAddFormRequest;
use App\Http\Requests\Admin\Configuration\ConfigurationEditFormRequest;
use App\Http\Services\Configuration\ConfigurationService;
use App\Http\Services\Address\AddressService;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    protected $configurationService;
    protected $addressService;

    public function __construct(ConfigurationService $configurationService, AddressService $addressService)
    {
        $this->configurationService = $configurationService;
        $this->addressService = $addressService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configurations = $this->configurationService->getAllConfigurations();

        return view('admin.configuration.index', [
            'configurations' => $configurations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.configuration.create', [
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfigurationAddFormRequest $request)
    {
        $configuration = $this->configurationService->save($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuration $configuration)
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.configuration.edit', [
            'configuration' => $configuration,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigurationEditFormRequest $request, Configuration $configuration)
    {
        $result = $this->configurationService->update($request, $configuration);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.configuration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuration $configuration)
    {
        $result = $this->configurationService->deleteById($configuration->id);

        return redirect()->back();
    }
}