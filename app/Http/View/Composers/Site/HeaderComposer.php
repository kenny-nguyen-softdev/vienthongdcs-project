<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\Cart\CartService;
use App\Http\Services\Blog\BlogService;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\HeaderPost\HeaderPostService;
use App\Http\Services\Introduction\IntroductionService;
use App\Http\Services\ParentCategory\ParentCategoryService;
use Illuminate\View\View;

class HeaderComposer
{

    protected $companyService;
    protected $parentCategoryService;
    protected $headerPostService;
    protected $blogService;
    protected $introductionService;
    protected $cartService;

    public function __construct(CompanyService $companyService, ParentCategoryService $parentCategoryService, HeaderPostService $headerPostService, BlogService $blogService, IntroductionService $introductionService, CartService $cartService)
    {
        $this->companyService = $companyService;
        $this->parentCategoryService = $parentCategoryService;
        $this->headerPostService = $headerPostService;
        $this->blogService = $blogService;
        $this->introductionService = $introductionService;
        $this->cartService = $cartService;
    }

    public function compose(View $view)
    {
        $headerData = [];
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['logo', 'name']);
        $parentCategories = $this->parentCategoryService->getAllParentCategories();
        $headerPosts = $this->headerPostService->getAllHeaderPosts();
        $blogs = $this->blogService->getAllBlogs();
        $introductions = $this->introductionService->getAllIntroductions();
        $carts = $this->cartService->fetch();

        $headerData['company'] = $company;
        $headerData['parentCategories'] = $parentCategories;
        $headerData['headerPosts'] = $headerPosts;
        $headerData['blogs'] = $blogs;
        $headerData['introductions'] = $introductions;
        $headerData['carts'] = $carts;
        $headerData = (object) $headerData;

        $view->with('headerData', $headerData);
    }
}