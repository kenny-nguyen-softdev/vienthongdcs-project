<?php

namespace App\Http\Controllers\Site;

use App\Events\ThankYouForBuyingEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Payment\CheckOutFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Company\CompanyService;
use App\Http\Services\Address\AddressService;
use App\Http\Services\Cart\CartService;
use App\Http\Services\Order\OrderService;
use App\Http\Services\OrderItem\OrderItemService;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    protected $companyService;
    protected $addressService;
    protected $cartService;
    protected $orderService;
    protected $orderItemService;

    public function __construct(CompanyService $companyService, AddressService $addressService, CartService $cartService, OrderService $orderService, OrderItemService $orderItemService)
    {
        $this->companyService = $companyService;
        $this->addressService = $addressService;
        $this->cartService = $cartService;
        $this->orderService = $orderService;
        $this->orderItemService = $orderItemService;
    }

    function checkout()
    {
        $carts = $this->cartService->fetch();

        if ($carts == null) {
            return redirect()->route('site.home');
        }

        $total_price = 0;
        if (Cart::instance('wishlist')->subtotal() > 0) {
            $total_price = intval(str_replace(',', '', Cart::instance('wishlist')->subtotal()));
        }

        $company = $this->companyService->getCompanyInformationBySelectAttributes(['account_no', 'bank_name']);
        $provinces = $this->addressService->getAllProvinces();

        return view('site.payment.checkout', [
            'carts' => $carts,
            'company' => $company,
            'provinces' => $provinces,
            'total_price' => $total_price,
        ]);
    }

    function proceed(CheckOutFormRequest $request)
    {
        $order = $this->orderService->create($request);

        if ($order == false) {
            return redirect()->back();
        }

        $order_id = $order->id;

        $orderItem = $this->orderItemService->create($order_id);

        if ($orderItem == false) {
            return redirect()->back();
        }

        $company = $this->companyService->getCompanyAllInformation();

        $data = [];
        $data['send_email_to'] = $request->input('email');
        $data['customer_name'] = $order->shipping_name;
        $data['company'] = $company;
        $data['orderItems'] = $order->orderItems;
        $data['order'] = $order;

        event(new ThankYouForBuyingEvent($data));


        if (Auth::guard('customer')->check() && (!empty(Auth::guard('customer')->user()->id))) {
            Cart::instance('wishlist')->erase(Auth::guard('customer')->user()->id);
        }
        Cart::instance('wishlist')->destroy();

        return redirect()->route('site.payment.success', [$order_id]);
    }

    function success(Order $order)
    {
        $company = $this->companyService->getCompanyInformationBySelectAttributes(['name']);

        return view('site.payment.success', [
            'order' => $order,
            'company' => $company,
        ]);
    }

    function buyNow(Request $request)
    {
        $result = $this->cartService->create($request);

        if ($result == false) {
            // return response()->json([
            //     'isSuccess' => false,
            //     'products' => []
            // ]);

            return redirect()->back();
        }

        // $carts = $this->cartService->fetch();

        // if ($carts == null) {
        //     return response()->json([
        //         'isSuccess' => false,
        //     ]);
        // }

        // return response()->json([
        //     'isSuccess' => true,
        // ]);

        return redirect()->route('site.payment.checkout');
    }
}