<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\Comment\CommentService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\SubCategory\SubCategoryService;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    protected $companyService;
    protected $commentService;
    protected $parentCategoryService;
    protected $brandService;

    public function __construct(ProductService $productService, CompanyService $companyService, CommentService $commentService, ParentCategoryService $parentCategoryService, BrandService $brandService)
    {
        $this->productService = $productService;
        $this->companyService = $companyService;
        $this->commentService = $commentService;
        $this->parentCategoryService = $parentCategoryService;
        $this->brandService = $brandService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $productSlug)
    {
        $product = $this->productService->getProductBySlug($productSlug);

        if (empty($product)) {
            return redirect()->route('site.home');
        }

        $company = $this->companyService->getCompanyAllInformation();

        $item_per_page = 25;
        $relatedProducts = $this->productService->getRelatedProductBySubCategoryId($item_per_page, $product->secondSubCategory->id);

        $comments = $this->commentService->getCommentListByProductIdOrderByCreatedDateDesc($product->id);

        $passedProductIds = [];
        $oldPassedProducts = unserialize($request->cookie('name'));

        if (!empty($oldPassedProducts)) {
            $passedProductIds = $oldPassedProducts;
        }
        if (!in_array($product->id, $passedProductIds)) {
            $passedProductIds[] = $product->id;
        }
        // $passedProductIds[] = $product->id;

        $cookie = cookie('name', serialize($passedProductIds), 24 * 60 * 60);

        return response()
            ->view('site.product.show', [
                'parentCategory' => $product->secondSubCategory->firstSubCategory->parentCategory,
                'mainProduct' => $product,
                'company' => $company,
                'relatedProducts' => $relatedProducts,
                'comments' => $comments,
                // 'seoKeyword' => $product->description,
                'title' => !empty($product->title_seo) ? $product->title_seo : $product->name,
            ])
            ->cookie($cookie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAllProduct(Request $request)
    {
        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;

        $products = $this->productService->getAllProductList($request);

        $item_per_page = 16;
        $productsOnePage = $this->productService->getAllProductListHavingPagination($request, $index_page, $item_per_page);

        $total = count($products);
        $page_number = ceil($total / $item_per_page);

        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        $brands = $this->brandService->getAllBrands();

        return view('site.product.showAll', [
            'parentCategories' => $parentCategories,
            'brands' => $brands,
            'productsOnePage' => $productsOnePage,
            'page' => $page,
            'page_number' => $page_number,
        ]);
    }

    public function passsedProduct(Request $request)
    {
        $passedProductIds = [];
        $oldPassedProducts = unserialize($request->cookie('name'));

        if (!empty($oldPassedProducts)) {
            $passedProductIds = $oldPassedProducts;
        }

        $cookie = cookie('name', serialize($passedProductIds), 24 * 60 * 60);

        return response()
            ->view('site.product.passedProducts', [
                // 'productsOnePage' => $productsOnePage,
                // 'page' => $page,
                // 'page_number' => $page_number,
                'passedProductIds' => $passedProductIds,
            ])->cookie($cookie);
    }
}