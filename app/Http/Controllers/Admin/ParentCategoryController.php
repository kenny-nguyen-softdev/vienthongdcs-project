<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ParentCategory\ParentCategoryAddFormRequest;
use App\Http\Requests\Admin\ParentCategory\ParentCategoryEditFormRequest;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Services\Feature\FeatureService;
use App\Http\Services\Origin\OriginService;
use App\Http\Services\Configuration\ConfigurationService;

class ParentCategoryController extends Controller
{
    protected $parentCategoryService;
    protected $originService;
    protected $configurationService;
    protected $featureService;

    public function __construct(ParentCategoryService $parentCategoryService, OriginService $originService, ConfigurationService $configurationService, FeatureService $featureService)
    {
        $this->parentCategoryService = $parentCategoryService;
        $this->originService = $originService;
        $this->configurationService = $configurationService;
        $this->featureService = $featureService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.parentCategory.index', [
            'parentCategories' => $parentCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $origins = $this->originService->getAllOrigins();
        $configurations = $this->configurationService->getAllConfigurations();
        $features = $this->featureService->getAllFeatures();

        return view('admin.parentCategory.create', [
            'origins' => $origins,
            'configurations' => $configurations,
            'features' => $features,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParentCategoryAddFormRequest $request)
    {
        $parentCategory = $this->parentCategoryService->save($request);

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
    public function edit(ParentCategory $parentCategory)
    {
        $origins = $this->originService->getAllOrigins();
        $configurations = $this->configurationService->getAllConfigurations();
        $features = $this->featureService->getAllFeatures();

        return view('admin.parentCategory.edit', [
            'parentCategory' => $parentCategory,
            'origins' => $origins,
            'configurations' => $configurations,
            'features' => $features,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParentCategoryEditFormRequest $request, ParentCategory $parentCategory)
    {
        $result = $this->parentCategoryService->update($request, $parentCategory);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.parentCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentCategory $parentCategory)
    {
        $result = $this->parentCategoryService->deleteById($parentCategory->id);

        return redirect()->back();
    }
}