<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SecondSubCategory\SecondSubCategoryAddFormRequest;
use App\Http\Requests\Admin\SecondSubCategory\SecondSubCategoryEditFormRequest;
use App\Http\Services\FirstSubCategory\FirstSubCategoryService;
use App\Http\Services\SecondSubCategory\SecondSubCategoryService;
use App\Models\SecondSubCategory;
use Illuminate\Http\Request;

class SecondSubCategoryController extends Controller
{
    protected $secondSubCategoryService;
    protected $firstSubCategoryService;

    public function __construct(SecondSubCategoryService $secondSubCategoryService, FirstSubCategoryService $firstSubCategoryService)
    {
        $this->secondSubCategoryService = $secondSubCategoryService;
        $this->firstSubCategoryService = $firstSubCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secondSubCategories = $this->secondSubCategoryService->getAllSubCategories();

        return view('admin.secondSubCategory.index', [
            'secondSubCategories' => $secondSubCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $firstSubCategories = $this->firstSubCategoryService->getAllSubCategories();

        return view('admin.secondSubCategory.create', [
            'firstSubCategories' => $firstSubCategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SecondSubCategoryAddFormRequest $request)
    {
        $secondSubCategory = $this->secondSubCategoryService->save($request);

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
    public function edit(SecondSubCategory $secondSubCategory)
    {
        $firstSubCategories = $this->firstSubCategoryService->getAllSubCategories();

        return view('admin.secondSubCategory.edit', [
            'secondSubCategory' => $secondSubCategory,
            'firstSubCategories' => $firstSubCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SecondSubCategoryEditFormRequest $request, SecondSubCategory $secondSubCategory)
    {
        $result = $this->secondSubCategoryService->update($request, $secondSubCategory);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.secondSubCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondSubCategory $secondSubCategory)
    {
        $result = $this->secondSubCategoryService->deleteById($secondSubCategory->id);

        return redirect()->back();
    }
}