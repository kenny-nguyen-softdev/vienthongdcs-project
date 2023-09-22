<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\FeatureAddFormRequest;
use App\Http\Requests\Admin\Feature\FeatureEditFormRequest;
use App\Http\Services\Feature\FeatureService;
use App\Http\Services\Address\AddressService;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    protected $featureService;
    protected $addressService;

    public function __construct(FeatureService $featureService, AddressService $addressService)
    {
        $this->featureService = $featureService;
        $this->addressService = $addressService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = $this->featureService->getAllFeatures();

        return view('admin.feature.index', [
            'features' => $features
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

        return view('admin.feature.create', [
            'provinces' => $provinces,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeatureAddFormRequest $request)
    {
        $feature = $this->featureService->save($request);

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
    public function edit(Feature $feature)
    {
        $provinces = $this->addressService->getAllProvinces();

        return view('admin.feature.edit', [
            'feature' => $feature,
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
    public function update(FeatureEditFormRequest $request, Feature $feature)
    {
        $result = $this->featureService->update($request, $feature);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.feature.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $result = $this->featureService->deleteById($feature->id);

        return redirect()->back();
    }
}