<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\Company\CompanyService;
use Illuminate\View\View;

class MainComposer
{

    protected $companyService;
    protected $parentCategoryService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function compose(View $view)
    {
        $mainData = [];
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['script_body']);
        $mainData['company'] = $company;

        $mainData = (object) $mainData;

        $view->with('mainData', $mainData);
    }
}