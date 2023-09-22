<?php

namespace App\Http\View\Composers\Admin;

use App\Http\Services\Company\CompanyService;
use Illuminate\View\View;

class NavbarComposer
{

    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function compose(View $view)
    {
        $navbarData = [];
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['logo']);
        $navbarData['company'] = $company;

        $navbarData = (object) $navbarData;

        $view->with('navbarData', $navbarData);
    }
}