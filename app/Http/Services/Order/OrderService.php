<?php

namespace App\Http\Services\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Http\Services\DiscountCode\DiscountCodeService;
use App\Http\Services\OrderItem\OrderItemService;
use App\Http\Services\Package\PackageService;
use App\Models\Customer;
use App\Models\CustomerDiscountCode;
use App\Models\OrderItem;
use App\Models\Transport;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function getAll()
    {
        $orders = Order::all();

        return $orders;
    }

    public function getAllOrderByCreatedDateDesc()
    {
        $orders = Order::orderBy('created_date', 'DESC')->get();

        return $orders;
    }

    public function getAllOrderByIdDesc()
    {
        $orders = Order::orderBy('id', 'DESC')->get();

        return $orders;
    }

    public function create($request)
    {
        try {
            $currentDatetime = Carbon::now();
            $currentDatetime->toDateTimeString();

            $order_status_id = 1; //chờ xử lý
            $shipping_status_id = 1; // chờ lấy hàng

            $customer_id = 1; // khách vãng lai
            if (Auth::guard('customer')->check()) {
                $customer_id = Auth::guard('customer')->user()->id;
            }

            $delivered_date = Carbon::now()->addDays(3);

            $id = 'DCSTelecom' . '-' . Carbon::now()->format('YmdHis') . '-' . Carbon::now()->format('s');

            $order = Order::create([
                'id' => $id,
                'created_date' => (string) $currentDatetime,
                'order_status_id' => $order_status_id,
                'shipping_status_id' => $shipping_status_id,
                'customer_id' => $customer_id,
                'shipping_fullname' => (string) $request->input('fullname'),
                'shipping_mobile' => (string) $request->input('mobile'),
                'shipping_email' => (string) $request->input('email'),
                'payment_method' => $request->input('payment_method'),
                'shipping_ward_id' => $request->input('ward_id'),
                'shipping_housenumber_street' => (string) $request->input('housenumber_street'),
                'note' => (string) $request->input('note'),
                'delivered_date' => (string) $delivered_date->toDateTimeString(),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            Session::flash('success', 'Thanh toán đơn hàng thành công');
            return $order;
        } catch (\Exception $err) {
            Session::flash('error', 'Thanh toán đơn hàng thất bại');
            return false;
        }
        return true;
    }

    public function update($order, $request)
    {
        try {
            $order_id = $order->id;
            $order_status = $request->input('order_status');
            $shipping_status = $request->input('shipping_status');
            $customer_id = $request->input('customer');
            $shipping_fullname = $request->input('shipping_name');
            $shipping_mobile = $request->input('shipping_mobile');
            $shipping_email = $request->input('shipping_email');
            $payment_method = $request->input('payment_method');
            $shipping_housenumber_street = $request->input('housenumber_street');
            $delivered_date = $request->input('delivered_date');

            $ward_id = $request->input('ward');

            Order::where('id', $order_id)
                ->update([
                    'order_status_id' => (string) $order_status,
                    'shipping_status_id' => (string) $shipping_status,
                    'customer_id' => (string) $customer_id,
                    'shipping_fullname' => (string) $shipping_fullname,
                    'shipping_mobile' => (string) $shipping_mobile,
                    'shipping_email' => (string) $shipping_email,
                    'payment_method' => (string) $payment_method,
                    'shipping_ward_id' => (string) $ward_id,
                    'shipping_housenumber_street' => (string) $shipping_housenumber_street,
                    'delivered_date' => (string) $delivered_date,
                    'note' => (string) $request->input('note'),
                ]);

            $ids = $request->input('ids');
            $order = Order::find($order_id);

            foreach ($order->orderItems as $orderItem) {
                if (empty($ids) || (!in_array($orderItem->product_id, $ids))) {
                    OrderItem::where('order_id', $order_id)
                        ->where('product_id', $orderItem->product_id)
                        ->delete();
                }
            }

            $unit_prices = $request->input('unit_price');
            $quantity = $request->input('quantity');

            if (!empty($ids)) {
                for ($i = 0; $i < count($ids); $i++) {
                    $product_id = $ids[$i];
                    $unit_price = $unit_prices[$i];
                    $qty = $quantity[$i];

                    $orderItem = OrderItem::where('order_id', $order_id)
                        ->where('product_id', $product_id)
                        ->update([
                            'qty' => $qty,
                            'unit_price' => $unit_price,
                            'total_price' => $unit_price * $qty
                        ]);
                }
            }

            // Add items
            $packageService = new PackageService();
            $items = $packageService->fetch();

            if (!empty($items)) {
                foreach ($items as $item) {
                    $product_id = $item->id;
                    $qty =  $item->qty;
                    $unit_price = $item->price;
                    $total_price = $item->subtotal;

                    $orderItemService = new OrderItemService();
                    $orderItem = $orderItemService->getOrderItemByOrderIdAndProductId($order_id, $product_id);

                    // Nếu sản phẩm đã tồn tại trong đơn hàng thi chỉ cập nhật số lượng
                    if (!empty($orderItem)) {
                        OrderItem::where('order_id', $orderItem->order_id)
                            ->where('product_id', $orderItem->product_id)
                            ->update([
                                'qty' => $orderItem->qty + $qty,
                                'total_price' => $orderItem->unit_price * ($orderItem->qty + $qty)
                            ]);

                        continue;
                    }

                    OrderItem::create(
                        [
                            'order_id' => (string) $order_id,
                            'product_id' => (string) $product_id,
                            'qty' => (string) $qty,
                            'unit_price' => (string) $unit_price,
                            'total_price' => (string) $total_price
                        ]
                    );
                }
                Cart::instance('adminWishlist')->destroy();
            }

            Session::flash('success', 'Cập nhật đơn hàng thành công');
            return true;
        } catch (\Exception $error) {
            Session::flash('error', "Cập nhật đơn hàng thất bại");
            return false;
        }
    }

    public function save($request)
    {
        try {
            $currentDatetime = Carbon::now();
            $currentDatetime->toDateTimeString();

            $order_status = $request->input('order_status');
            $shipping_status = $request->input('shipping_status');
            $customer_id = $request->input('customer');
            $shipping_fullname = $request->input('shipping_name');
            $shipping_mobile = $request->input('shipping_mobile');
            $shipping_email = $request->input('shipping_email');
            $payment_method = $request->input('payment_method');
            $shipping_housenumber_street = $request->input('housenumber_street');
            $delivered_date = $request->input('delivered_date');

            $ward_id = $request->input('ward');

            $ward_id = $request->input('ward');
            $delivered_date = Carbon::now()->addDays(3);

            $id = 'DCSTelecom' . '-' . Carbon::now()->format('YmdHis') . '-' . Carbon::now()->format('s');

            $order = Order::create([
                'id' => $id,
                'created_date' => (string) $currentDatetime,
                'order_status_id' => $order_status,
                'shipping_status_id' => $shipping_status,
                'customer_id' => $customer_id,
                'shipping_fullname' => (string) $shipping_fullname,
                'shipping_mobile' => (string) $shipping_mobile,
                'shipping_email' => (string) $shipping_email,
                'payment_method' => $payment_method,
                'shipping_ward_id' => $ward_id,
                'shipping_housenumber_street' => (string) $shipping_housenumber_street,
                'note' => (string) $request->input('note'),
                'delivered_date' => (string) $delivered_date->toDateTimeString(),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            $order_id = $order->id;
            $packageService = new PackageService();
            $items = $packageService->fetch();

            if (!empty($items)) {
                foreach ($items as $item) {
                    $product_id = $item->id;
                    $qty =  $item->qty;
                    $unit_price = $item->price;
                    $total_price = $item->subtotal;

                    OrderItem::create(
                        [
                            'order_id' => (string) $order_id,
                            'product_id' => (string) $product_id,
                            'qty' => (string) $qty,
                            'unit_price' => (string) $unit_price,
                            'total_price' => (string) $total_price
                        ]
                    );
                }
                Cart::instance('adminWishlist')->destroy();
            }

            Session::flash('success', 'Tạo mới đơn hàng thành công');
            return $order;
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo mới đơn hàng thất bại');
            return false;
        }
    }

    function getOrderByCustomerId($customer_id)
    {
        $orders = Order::where('customer_id', $customer_id)->get();

        return $orders;
    }

    function deleteById($order_id)
    {
        try {
            $order = Order::find($order_id);
            if (count($order->orderItems) > 0) {
                Session::flash('error', 'Đơn hàng đã có sản phẩm được mua. Vui lòng xóa sản phẩm được mua trước !');
                return false;
            }

            Order::where('id', $order_id)->delete();

            Session::flash('success', 'Xóa đơn hàng thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa đơn hàng thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}