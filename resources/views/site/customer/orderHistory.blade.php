@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category info_account">

            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.customer.orderHistory') }}">Lịch Sử Đơn Hàng</a>
                </li>
            </ul>
            <div class="row">
                <div class="wrapper_full ">
                    <div class="wrapper_full_1">
                        <div class="left_account_user col-md-4 col-sm-12">
                            @include('site.layout.accountSideBar')
                        </div>

                        <div class="right_account_user col-md-8 col-sm-12">
                            <div class="right_account_user1">
                                <p class="h1_2 col-md-12">Thông tin thành viên</p>
                                <span class="span_tt_1 col-md-12">
                                    <p>Email: <strong>{{ Auth::guard('customer')->user()->email }}</strong></p>

                                </span>
                                <span class="span_tt_1 col-md-12">
                                    <p>Họ tên: <strong>{{ Auth::guard('customer')->user()->name }}</strong></p>

                                </span>
                                <span class="span_tt_1 col-md-12">
                                    <p>Địa chỉ: <strong>{{ Auth::guard('customer')->user()->housenumber_street }}</strong>
                                    </p>

                                </span>
                                <span class="span_tt_1 col-md-12">
                                    <p>Tỉnh thành:
                                        <strong>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->province->name : '' }}</strong>
                                    </p>

                                </span>
                                <span class="span_tt_1 col-md-12">
                                    <p>Quận
                                        huyện:
                                        <strong>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->name : '' }}</strong>
                                    </p>

                                </span>
                                <span class="span_tt_1 col-md-12">
                                    <p>Phường
                                        xã:
                                        <strong>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->name : '' }}</strong>
                                    </p>

                                </span>
                            </div>
                            <div class="right_account_user2 pb-5 ">
                                <p class="title_tt_3">Danh sách đơn hàng</p>
                                <table class="tablle_donhang_history history_order_tpl">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua hàng</th>
                                            <th>Trạng thái</th>
                                            <th>Giảm giá</th>
                                            <th>Phí giao hàng</th>
                                            <th>Tổng tiền</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                            @php
                                                $subTotal = 0;
                                                $total_price = 0;
                                            @endphp
                                            @foreach ($order->orderItems as $orderItem)
                                                @php
                                                    $subTotal += $orderItem->total_price;
                                                @endphp
                                            @endforeach
                                            @php
                                                $total_price = $subTotal - (!empty($order->discountCode) ? $order->discountCode->discount_price : 0) + $order->shipping_fee;
                                            @endphp
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <p class="code_cart">{{ $order->id }}</p>
                                                </td>
                                                <td>
                                                    <p class="text_cart_history">{{ $order->created_date }}</p>
                                                </td>
                                                <td>
                                                    <p class="text_cart_history">{{ $order->orderStatus->description }}</p>
                                                </td>
                                                <td>
                                                    <p class="text_cart_history">
                                                        {{ !empty($order->discountCode) ? number_format($order->discountCode->discount_price) : 0 }}
                                                        VND
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text_cart_history">{{ number_format($order->shipping_fee) }}
                                                        VND</p>
                                                </td>
                                                <td>
                                                    <p class="text_cart_history">{{ number_format($total_price) }} VND</p>
                                                </td>
                                                <td><a href="{{ route('site.customer.orderDetails', [$order->id]) }}"
                                                        class="view_cart btn">Xem
                                                        chi tiết</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('site.layout.footer')
    </body>
@endsection
