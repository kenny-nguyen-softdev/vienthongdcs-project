<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\Ajax\AjaxService;
use App\Http\Controllers\Controller;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\User\UserService;
use App\Models\FirstSubCategory;
use App\Models\ParentCategory;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Services\Feature\FeatureService;
use App\Http\Services\Origin\OriginService;
use App\Http\Services\Configuration\ConfigurationService;
use App\Models\Configuration;
use App\Models\Feature;

class AjaxController extends Controller
{
    protected $userService;
    protected $ajaxService;
    protected $addressService;
    protected $productService;
    protected $originService;
    protected $configurationService;
    protected $featureService;

    public function __construct(UserService $userService, AjaxService $ajaxService, AddressService $addressService, ProductService $productService, OriginService $originService, ConfigurationService $configurationService, FeatureService $featureService)
    {
        $this->userService = $userService;
        $this->ajaxService = $ajaxService;
        $this->addressService = $addressService;
        $this->productService = $productService;
        $this->originService = $originService;
        $this->configurationService = $configurationService;
        $this->featureService = $featureService;
    }
    function checkExistEmailInLoginForm()
    {
        $email = $_GET["email"];
        $user = $this->userService->getUserByEmail($email);

        if (!$user) {
            echo "false";
            return;
        }
        echo "true";
        return;
    }

    function uploadCompanyFile(Request $request)
    {
        $urlArr = $this->ajaxService->companyFileStore($request);

        if (!empty($urlArr['path']) && !empty($urlArr['storedName'])) {
            return response()->json([
                'isSuccess' => true,
                'url'   => $urlArr['path'],
                'storedName'   => $urlArr['storedName'],
            ]);
        }

        return response()->json(['isSuccess' => false]);
    }

    function notExistingEmail()
    {
        $email = $_GET["email"];
        $user = $this->userService->getUserByEmail($email);

        if (!$user) {
            echo "true"; //not exist email
            return;
        }
        echo "false"; //exist email
        return;
    }

    public function getDistricts(Request $request)
    {
        $districts = $this->addressService->getDistrictByProvinceId($request);

        return response()->json([
            'districts' => $districts
        ]);
    }

    public function getWards(Request $request)
    {
        $wards = $this->addressService->getWardByDistrictId($request);

        return response()->json([
            'wards' => $wards
        ]);
    }

    public function getProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product = $this->productService->getProductById($product_id);

        if (!empty($product)) {
            return response()->json([
                'isSuccess' => true,
                'product' => $product
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'product' => null
        ]);
    }

    public function getFirstSubCategories(Request $request)
    {
        $parentCategory_id = $request->input('parentCategory_id');
        $parentCategory = ParentCategory::find($parentCategory_id);

        if (!empty($parentCategory)) {
            return response()->json([
                'isSuccess' => true,
                'firstSubCategories' => $parentCategory->firstSubCategories
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'firstSubCategories' => null
        ]);
    }

    public function getSecondSubCategories(Request $request)
    {
        $firstSubCategory_id = $request->input('firstSubCategory_id');
        $firstSubCategory = FirstSubCategory::find($firstSubCategory_id);

        if (!empty($firstSubCategory)) {
            return response()->json([
                'isSuccess' => true,
                'secondSubCategories' => $firstSubCategory->secondSubCategories
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'secondSubCategories' => null
        ]);
    }

    function ajaxSearchProducts()
    {
        $pattern = $_GET["pattern"];
        $type = $_GET["type"];
        $products = $this->productService->getByPattern($pattern);

        if (count($products) > 0) {
            $html = view('admin.product.ajaxSearch', compact('products', 'type'))->render();

            return response()->json([
                'isSuccess' => true,
                'html' => $html,
            ]);
        }

        return response()->json([
            'isSuccess' => false,
            'message' => 'Không tìm thấy sản phẩm nào',
        ]);
    }

    public function getCustomer(Request $request)
    {
        $customer_id = $request->input('customer_id');

        $customer = Customer::find($customer_id);

        $provinces = $this->addressService->getAllProvinces();

        $districts = null;
        $wards = null;
        $selected_ward_id = null;
        $selected_district_id = null;
        $selected_province_id = null;
        if (!empty($customer->ward_id)) {
            $provinceOfCustomer = $customer->ward->district->province;
            $districtOfCustomer = $customer->ward->district;
            $districts = $provinceOfCustomer->districts;
            $wards = $districtOfCustomer->wards;
            $selected_ward_id = $customer->ward_id;
            $selected_district_id = $customer->ward->district->id;
            $selected_province_id = $customer->ward->district->province->id;
        }
    }

    function getOrigin(Request $request)
    {
        $origin_id = $request->input('origin_id');
        $origin = $this->originService->getOriginById($origin_id);

        if (empty($origin)) {
            return response()->json([
                'isSuccess' => false,
                'origin' => null,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
            'origin' => $origin,
        ]);
    }

    function getConfiguration(Request $request)
    {
        $configuration_id = $request->input('configuration_id');
        $configuration = Configuration::find($configuration_id);

        if (empty($configuration)) {
            return response()->json([
                'isSuccess' => false,
                'configuration' => null,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
            'configuration' => $configuration,
        ]);
    }

    function getFeature(Request $request)
    {
        $feature_id = $request->input('feature_id');
        $feature = Feature::find($feature_id);

        if (empty($feature)) {
            return response()->json([
                'isSuccess' => false,
                'feature' => null,
            ]);
        }

        return response()->json([
            'isSuccess' => true,
            'feature' => $feature,
        ]);
    }
}