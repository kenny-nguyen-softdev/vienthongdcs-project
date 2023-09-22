<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\About\AboutService;
use App\Http\Services\Brand\BrandService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $aboutService;
    protected $brandService;

    public function __construct(AboutService $aboutService, BrandService $brandService)
    {
        $this->aboutService = $aboutService;
        $this->brandService = $brandService;
    }

    public function show($aboutSlug)
    {
        $about = $this->aboutService->getAboutBySlug($aboutSlug);

        if (empty($about)) {
            return redirect()->route('site.home');
        }

        $brands = $this->brandService->getAllBrands();

        return view('site.about.show', [
            'about' => $about,
            'brands' => $brands
        ]);
    }
}