<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\HeaderPost\HeaderPostService;
use Illuminate\Http\Request;

class HeaderPostController extends Controller
{
    protected $headerPostService;

    public function __construct(HeaderPostService $headerPostService)
    {
        $this->headerPostService = $headerPostService;
    }

    public function show($headerPostSlug)
    {
        $headerPost = $this->headerPostService->getHeaderPostBySlug($headerPostSlug);

        if (empty($headerPost)) {
            return redirect()->route('site.home');
        }

        return view('site.headerPost.show', [
            'headerPost' => $headerPost
        ]);
    }
}