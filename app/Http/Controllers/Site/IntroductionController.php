<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Introduction\IntroductionService;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    protected $introductionService;

    public function __construct(IntroductionService $introductionService)
    {
        $this->introductionService = $introductionService;
    }

    function show($introductionSlug)
    {
        $introduction = $this->introductionService->getIntroductionBySlug($introductionSlug);

        if (empty($introduction)) {
            return redirect()->route('site.home');
        }

        return view('site.introduction.show', [
            'introduction' => $introduction
        ]);
    }
}