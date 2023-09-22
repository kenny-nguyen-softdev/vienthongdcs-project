<?php

namespace App\Http\Controllers\Site;

use App\Events\CustomerContactEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Contact\ContactFormRequest;
use App\Http\Services\Branch\BranchService;
use App\Http\Services\BranchLocation\BranchLocationService;
use App\Http\Services\Company\CompanyService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $companyService;
    protected $branchController;
    protected $branchLocationService;

    public function __construct(CompanyService $companyService, BranchService $branchController, BranchLocationService $branchLocationService)
    {
        $this->companyService = $companyService;
        $this->branchController = $branchController;
        $this->branchLocationService = $branchLocationService;
    }

    function index()
    {
        $company = $this->companyService->getCompanyAllInformation();
        $branchLocations = $this->branchLocationService->getAllBranchLocations();

        return view('site.contact.index', [
            'company' => $company,
            'branchLocations' => $branchLocations
        ]);
    }

    function sendContact(ContactFormRequest $request)
    {
        $data = [];
        $data['send_email_to'] = env('MAIL_SHOPOWNER');
        $data['send_email_from'] = $request->input('email');
        $data['fullname'] = $request->input('fullname');
        $data['mobile'] = $request->input('mobile');
        $data['content'] = $request->input('content');

        event(new CustomerContactEvent($data));

        return response()->json([
            'isSuccess' => true,
        ]);
    }
}