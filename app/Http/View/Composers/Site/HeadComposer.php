<?php

namespace App\Http\View\Composers\Site;

use App\Http\Services\Company\CompanyService;
use Illuminate\View\View;

class HeadComposer
{

    protected $companyService;
    protected $parentCategoryService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function compose(View $view)
    {
        $headerData = [];
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name', 'favicon', 'script_header']);
        $headerData['company'] = $company;

        $headerData = (object) $headerData;

        $view->with('headerData', $headerData);
    }
}