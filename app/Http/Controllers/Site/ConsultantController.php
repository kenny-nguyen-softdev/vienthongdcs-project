<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\Consultant\ConsultantService;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    protected $consultantService;
    protected $companyService;

    public function __construct(ConsultantService $consultantService, CompanyService $companyService)
    {
        $this->consultantService = $consultantService;
        $this->companyService = $companyService;
    }

    public function index()
    {
        $company = $this->companyService->getCompanyAllInformation();
        return view('site.consultant.index', [
            'company' => $company
        ]);
    }

    public function sendEmail(Request $request)
    {
        $result = $this->consultantService->save($request);

        if (!$result) {
            return response()->json([
                'isSuccess' => false,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
        ]);
    }
}