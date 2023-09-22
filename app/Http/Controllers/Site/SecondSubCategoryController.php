<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\FirstSubCategory\FirstSubCategoryService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\SecondSubCategory\SecondSubCategoryService;
use App\Models\FirstSubCategory;
use Illuminate\Http\Request;

class SecondSubCategoryController extends Controller
{
    protected $parentCategoryService;
    protected $secondSubCategoryService;
    protected $productService;
    protected $brandService;
    protected $firstSubCategoryService;

    public function __construct(ParentCategoryService $parentCategoryService, FirstSubCategoryService $firstSubCategoryService, SecondSubCategoryService $secondSubCategoryService, ProductService $productService, BrandService $brandService)
    {
        $this->parentCategoryService = $parentCategoryService;
        $this->secondSubCategoryService = $secondSubCategoryService;
        $this->productService = $productService;
        $this->brandService = $brandService;
        $this->firstSubCategoryService = $firstSubCategoryService;
    }

    public function index(Request $request, $parentCategorySlug, $firstSubCategorySlug, $secondSubCategorySlug)
    {
        $parentCategory = $this->parentCategoryService->getParentCategoryBySlug($parentCategorySlug);

        if (empty($parentCategory)) {
            return redirect()->route('site.home');
        }

        $firstSubCategory = $this->firstSubCategoryService->getFirstSubCategoryBySlug($firstSubCategorySlug);

        if (empty($firstSubCategory)) {
            return redirect()->route('site.home');
        }

        $secondSubCategory = $this->secondSubCategoryService->getSecondSubCategoryBySlug($secondSubCategorySlug);

        if (empty($secondSubCategory)) {
            return redirect()->route('site.home');
        }

        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;

        $products = $this->productService->getAllProductListBySecondSubCategoryId($request, $secondSubCategory);

        $item_per_page = $request->input('limit') ?? 16;
        $productsOnePage = $this->productService->getProductListBySecondSubCategoryIdHavingPagination($request, $index_page, $item_per_page, $secondSubCategory);

        $total = count($products);
        $page_number = ceil($total / $item_per_page);

        $firstSubCategories = $this->secondSubCategoryService->getAllSubCategories();

        return view('site.secondSubCategory.index', [
            'parentCategory' => $parentCategory,
            'firstSubCategory' => $firstSubCategory,
            'secondSubCategory' => $secondSubCategory,
            'firstSubCategories' => $firstSubCategories,
            'productsOnePage' => $productsOnePage,
            'page' => $page,
            'total' => $total,
            'page_number' => $page_number,
        ]);
    }
}