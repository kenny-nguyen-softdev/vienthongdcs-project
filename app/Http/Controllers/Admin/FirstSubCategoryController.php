<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FirstSubCategory\FirstSubCategoryAddFormRequest;
use App\Http\Requests\Admin\FirstSubCategory\FirstSubCategoryEditFormRequest;
use App\Http\Services\FirstSubCategory\FirstSubCategoryService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Models\FirstSubCategory;
use Illuminate\Http\Request;

class FirstSubCategoryController extends Controller
{
    protected $firstSubCategoryService;
    protected $parentCategoryService;

    public function __construct(FirstSubCategoryService $firstSubCategoryService, ParentCategoryService $parentCategoryService)
    {
        $this->firstSubCategoryService = $firstSubCategoryService;
        $this->parentCategoryService = $parentCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstSubCategories = $this->firstSubCategoryService->getAllSubCategories();

        return view('admin.firstSubCategory.index', [
            'firstSubCategories' => $firstSubCategories
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

        return view('admin.firstSubCategory.create', [
            'parentCategories' => $parentCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FirstSubCategoryAddFormRequest $request)
    {
        $firstSubCategory = $this->firstSubCategoryService->save($request);

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
    public function edit(FirstSubCategory $firstSubCategory)
    {
        $parentCategories = $this->parentCategoryService->getAllParentCategories();

        return view('admin.firstSubCategory.edit', [
            'firstSubCategory' => $firstSubCategory,
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
    public function update(FirstSubCategoryEditFormRequest $request, FirstSubCategory $firstSubCategory)
    {
        $result = $this->firstSubCategoryService->update($request, $firstSubCategory);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.firstSubCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstSubCategory $firstSubCategory)
    {
        $result = $this->firstSubCategoryService->deleteById($firstSubCategory->id);

        return redirect()->back();
    }
}