<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\FirstSubCategory\FirstSubCategoryService;
use Illuminate\Http\Request;

class FirstSubCategoryController extends Controller
{
    protected $parentCategoryService;
    protected $firstSubCategoryService;
    protected $productService;
    protected $brandService;

    public function __construct(ParentCategoryService $parentCategoryService, FirstSubCategoryService $firstSubCategoryService, ProductService $productService, BrandService $brandService)
    {
        $this->parentCategoryService = $parentCategoryService;
        $this->firstSubCategoryService = $firstSubCategoryService;
        $this->productService = $productService;
        $this->brandService = $brandService;
    }

    function index(Request $request, $parentCategorySlug, $firstSubCategorySlug)
    {
        $parentCategory = $this->parentCategoryService->getParentCategoryBySlug($parentCategorySlug);

        if (empty($parentCategory)) {
            return redirect()->route('site.home');
        }

        $firstSubCategory = $this->firstSubCategoryService->getFirstSubCategoryBySlug($firstSubCategorySlug);

        if (empty($firstSubCategory)) {
            return redirect()->route('site.home');
        }

        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;

        $products = $this->productService->getAllProductListByFirstSubCategoryId($request, $firstSubCategory);

        $item_per_page = $request->input('limit') ?? 16;
        $productsOnePage = $this->productService->getProductListByFirstSubCategoryIdHavingPagination($request, $index_page, $item_per_page, $firstSubCategory);

        $total = count($products);
        $page_number = ceil($total / $item_per_page);

        $firstSubCategories = $this->firstSubCategoryService->getAllSubCategories();

        return view('site.firstSubCategory.index', [
            'parentCategory' => $parentCategory,
            'firstSubCategory' => $firstSubCategory,
            'firstSubCategories' => $firstSubCategories,
            'productsOnePage' => $productsOnePage,
            'page' => $page,
            'total' => $total,
            'page_number' => $page_number,
        ]);
    }
}
