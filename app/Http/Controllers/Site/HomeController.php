<?php

namespace App\Http\Controllers\Site;

use App\Events\SendRegistrationEmailEvent;
use App\Http\Controllers\Controller;
use App\Http\Services\Banner\BannerService;
use App\Http\Services\Blog\BlogService;
use App\Http\Services\Brand\BrandService;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use App\Http\Services\Product\ProductService;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Requests\Site\Home\SendRegistrationFormRequest;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $companyService;
    protected $bannerService;
    protected $parentCategoryService;
    protected $brandService;
    protected $productService;
    protected $blogService;

    public function __construct(CompanyService $companyService, BannerService $bannerService, ParentCategoryService $parentCategoryService, BrandService $brandService, ProductService $productService, BlogService $blogService)
    {
        $this->companyService = $companyService;
        $this->bannerService = $bannerService;
        $this->parentCategoryService = $parentCategoryService;
        $this->brandService = $brandService;
        $this->productService = $productService;
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = $this->bannerService->getAllBannerOrderBySortByAsc();
        $parentCategories = $this->parentCategoryService->getAllParentCategoriesInHomePage();
        $brands = $this->brandService->getBrandListsOrderByIdDescHavingLimit(12);
        $lastestProducts = $this->productService->getLastestProductListHavingLimit(20);
        $blogs = $this->blogService->getAllBlogs();
        $products = $this->productService->getAllProductListOrderByCreatedDateDesc();

        return view('site.home.index', [
            'banners' => $banners,
            'parentCategories' => $parentCategories,
            'brands' => $brands,
            'lastestProducts' => $lastestProducts,
            'products' => $products,
            'blogs' => $blogs,
        ]);
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

    // public function sendRegistrationEmail(SendRegistrationFormRequest $request)
    // {
    //     try {
    //         $data = [];
    //         $data['send_email_to'] = env('MAIL_SHOPOWNER');
    //         $data['send_email_from'] = $request->input('email');
    //         $data['name'] = $request->input('name');
    //         $data['mobile'] = $request->input('mobile');

    //         event(new SendRegistrationEmailEvent($data));

    //         Session::flash('success', 'Đăng ký nhận thông tin và ưu đãi thành công');
    //     } catch (\Throwable $th) {
    //         Session::flash('error', 'Đăng ký nhận thông tin và ưu đãi thất bại');
    //     }

    //     return redirect()->back();
    // }

    public function searchProduct(Request $request)
    {
        $page = $request->input('page') ?? 1;
        $index_page = $page - 1;

        $pattern = $request->input('q');
        $parentCategory_id = $request->input('cate');

        $secondSubCategoryIds = [];
        if (!empty($parentCategory_id)) {
            $parentCategory = ParentCategory::find($parentCategory_id);

            foreach ($parentCategory->secondSubCategories as $secondSubCategory) {
                $secondSubCategoryIds[] = $secondSubCategory->id;
            }
        } else {
            $parentCategories = $this->parentCategoryService->getAllParentCategories();

            foreach ($parentCategories as $parentCategory) {
                foreach ($parentCategory->subCategories as $secondSubCategory) {
                    $secondSubCategoryIds[] = $secondSubCategory->id;
                }
            }
        }
        $brands = $this->brandService->getAllBrands();

        $item_per_page = $request->input('limit') ?? 16;

        $productList = $this->productService->getAllProductListByPattern($request, $pattern, $secondSubCategoryIds);

        $productsOnePage = $this->productService->getProductListByPatternHavingPagination($request, $index_page, $item_per_page, $pattern, $secondSubCategoryIds);

        $total = count($productList);
        $page_number = ceil($total / $item_per_page);

        return view('site.home.searchProduct', [
            'productsOnePage' => $productsOnePage,
            'brands' => $brands,
            'page' => $page,
            'total' => $total,
            'page_number' => $page_number,
        ]);
    }
}
