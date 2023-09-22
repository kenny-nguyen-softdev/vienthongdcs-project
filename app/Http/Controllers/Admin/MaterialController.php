<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Material\MaterialService;
use App\Http\Services\Product\ProductService;
use App\Models\Material;

class MaterialController extends Controller
{
    protected $materialService;
    protected $productService;

    public function __construct(MaterialService $materialService, ProductService $productService)
    {
        $this->materialService = $materialService;
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = $this->materialService->getAllMaterialList();

        return view('admin.material.index', [
            'materials' => $materials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->productService->getAllProducts();

        return view('admin.material.create', [
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = $this->materialService->save($request);

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
    public function edit(Material $material)
    {
        $products = $this->productService->getAllProducts();

        return view('admin.material.edit', [
            'material' => $material,
            'products' => $products,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $result = $this->materialService->update($request, $material);

        if (!$result) {
            return redirect()->back();
        }

        return redirect()->route('admin.material.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $result = $this->materialService->deleteById($material->id);

        return redirect()->back();
    }
}