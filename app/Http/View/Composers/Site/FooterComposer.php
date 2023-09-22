<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\BranchLocation\BranchLocationService;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\Introduction\IntroductionService;
use App\Models\BranchLocation;
use Illuminate\View\View;
use App\Http\Services\Page\PageService;

class FooterComposer
{
    protected $companyService;
    protected $branchLocationService;
    protected $pageService;
    protected $introductionService;

    public function __construct(CompanyService $companyService, BranchLocationService $branchLocationService, PageService $pageService, IntroductionService $introductionService)
    {
        $this->companyService = $companyService;
        $this->branchLocationService = $branchLocationService;
        $this->pageService = $pageService;
        $this->introductionService = $introductionService;
    }

    public function compose(View $view)
    {
        $footerData = [];
        $company = $this->companyService->getCompanyAllInformation();
        $branchLocations = $this->branchLocationService->getAllBranchLocations();
        $customerTutorialPages = $this->pageService->getPageByType('customer_tutorials');
        $policyPages = $this->pageService->getPageByType('policy');
        $introductions = $this->introductionService->getAllIntroductions();

        $footerData['company'] = $company;
        $footerData['branchLocations'] = $branchLocations;
        $footerData['customerTutorialPages'] = $customerTutorialPages;
        $footerData['policyPages'] = $policyPages;
        $footerData['introductions'] = $introductions;

        $view->with('footerData', $footerData);
    }
}