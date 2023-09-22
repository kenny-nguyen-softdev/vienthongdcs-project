<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ParentCategorySlider\ParentCategorySliderAddFormRequest;
use App\Http\Requests\Admin\ParentCategorySlider\ParentCategorySliderEditFormRequest;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\ParentCategorySlider\ParentCategorySliderService;
use Illuminate\Http\Request;
use App\Models\ParentCategorySlider;

class ParentCategorySliderController extends Controller
{
    protected $parentCategorySliderService;
    protected $parentCategoryService;

    public function __construct(ParentCategorySliderService $parentCategorySliderService, ParentCategoryService $parentCategoryService)
    {
        $this->parentCategorySliderService = $parentCategorySliderService;
        $this->parentCategoryService = $parentCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentCategorySliders = $this->parentCategorySliderService->getAllParentCategorySliders();

        return view('admin.parentCategorySlider.index', [
            'parentCategorySliders' => $parentCategorySliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.parentCategorySlider.create', [
            'parentCategories' => $parentCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParentCategorySliderAddFormRequest $request)
    {
        $parentCategorySlider = $this->parentCategorySliderService->save($request);

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
    public function edit(ParentCategorySlider $parentCategorySlider)
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.parentCategorySlider.edit', [
            'parentCategorySlider' => $parentCategorySlider,
            'parentCategories' => $parentCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParentCategorySliderEditFormRequest $request, ParentCategorySlider $parentCategorySlider)
    {
        $result = $this->parentCategorySliderService->update($request, $parentCategorySlider);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.parentCategorySlider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentCategorySlider $parentCategorySlider)
    {
        $result = $this->parentCategorySliderService->deleteById($parentCategorySlider->id);

        return redirect()->back();
    }
}