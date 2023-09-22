<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Banner\BannerService;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class ParentCategoryController extends Controller
{
    protected $parentCategoryService;
    protected $productService;
    protected $bannerService;
    protected $brandService;

    public function __construct(ParentCategoryService $parentCategoryService, ProductService $productService, BannerService $bannerService, BrandService $brandService)
    {
        $this->parentCategoryService = $parentCategoryService;
        $this->productService = $productService;
        $this->bannerService = $bannerService;
        $this->brandService = $brandService;
    }

    public function index(Request $request, $parentCategorySlug)
    {
        $parentCategory = $this->parentCategoryService->getParentCategoryBySlug($parentCategorySlug);

        if (empty($parentCategory)) {
            return redirect()->route('site.home');
        }

        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;

        $products = $this->productService->getAllProductListByParentCategory($request, $parentCategory);

        $item_per_page = $request->input('limit') ?? 16;
        $productsOnePage = $this->productService->getProductListByParentCategoryHavingPagination($request, $index_page, $item_per_page, $parentCategory);

        $total = count($products);
        $page_number = ceil($total / $item_per_page);

        if (empty($parentCategory)) {
            return redirect()->route('site.home');
        }

        $brands = $this->brandService->getAllBrands();

        return view('site.parentCategory.index', [
            'banners' => $parentCategory->parentCategorySliders,
            'parentCategory' => $parentCategory,
            'productsOnePage' => $productsOnePage,
            'total' => $total,
            'page' => $page,
            'page_number' => $page_number,
            'posts' => $parentCategory->posts,
            'brands' => $brands,
        ]);
    }
}