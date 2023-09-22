<?php

namespace App\Http\View\Composers\Admin;

// use App\Http\Services\Page\PageService;

use App\Http\Services\Blog\BlogService;
use App\Http\Services\Page\PageService;
use Illuminate\View\View;

class SideBarComposer
{

    protected $pageService;
    public function __construct(PageService $pageService, BlogService $blogService)
    {
        $this->pageService = $pageService;
    }

    public function compose(View $view)
    {
        $headerData = [];
        $pages = $this->pageService->getAllPages();
        $headerData['pages'] = $pages;

        $headerData = (object) $headerData;

        $view->with('sidebarData', $headerData);
    }
}