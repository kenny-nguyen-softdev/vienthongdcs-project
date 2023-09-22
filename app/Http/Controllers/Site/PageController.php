<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Page\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function show($pageSlug)
    {
        $page = $this->pageService->getPageBySlug($pageSlug);

        if (empty($page)) {
            return redirect()->route('site.home');
        }

        return view('site.page.show', [
            'page' => $page
        ]);
    }
}