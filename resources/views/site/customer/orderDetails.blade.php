@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category info_account">

            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.customer.orderDetails', [$order->id]) }}">Chi Tiết Đơn Hàng</a>
                </li>
            </ul>
            <div class="row">
                <div class="wrapper_full ">
                    <div class="wrapper_full_1">
                        <div class="left_account_user col-md-4 col-sm-12">
                            @include('site.layout.accountSideBar')

                            <div>
                                <a class="w3-left w3-btn" href="{{ route('site.customer.orderHistory') }}">❮ Quay lại</a>
                            </div>
                        </div>

                        <div class="right_account_user col-md-8 col-sm-12">
                            <div class="right_account_user1">
                                <p class="h1_2 col-md-12">Chi Tiết Đơn Hàng</p>
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
                                    <p>Quận huyện:
                                        <strong>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->name : '' }}</strong>
                                    </p>
                                </span>
                                <span class="span_tt_1 col-md-12">
                                    <p>Phường xã:
                                        <strong>{{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->name : '' }}</strong>
                                    </p>
                                </span>
                            </div>

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
                                $total_price = $subTotal - (!empty($order->discountCode) ? $order->discountCode->discount_price : 0);
                            @endphp

                            <div class="right_account_user2 mgrb_20">
                                <p class="h1_2 col-md-12">Thông tin đơn hàng</p> <span class="span_tt_1 col-md-12">
                                    <p>Mã đơn hàng: <strong>{{ $order->id }}</strong></p>
                                </span> <span class="span_tt_1 col-md-12">
                                    <p>Thời gian đặt hàng: <strong>{{ $order->created_date }}</strong></p>
                                </span> <span class="span_tt_1 col-md-12">
                                    <p>Địa chỉ giao hàng:
                                        <strong>{{ $order->shipping_housenumber_street . ', ' . $order->ward->name . ', ' . $order->ward->district->name . ', ' . $order->ward->district->province->name }}</strong>
                                    </p>

                                </span> <span class="span_tt_1 col-md-12">
                                    <p>Tổng tiền: <strong>{{ number_format($total_price) }} VND</strong></p>
                                </span> <span class="span_tt_1 col-md-12">
                                    <p>Tình trạng: <strong>{{ $order->orderStatus->description }}</strong></p>
                                </span>
                            </div>
                            <div class="right_account_user2 pb-5 ">
                                <p class="title_tt_3">Danh sách đơn hàng</p>
                                <table class="tablle_donhang_history history_order_detail_tpl">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->orderItems as $key => $orderItem)
                                            @php
                                                $featured_image = $orderItem->product->featured_image;
                                            @endphp
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><a href="{{ route('site.product.show', [$orderItem->product->slug]) }}"
                                                        target="_blank"
                                                        class="text_cart_history">{{ $orderItem->product->name }}</a></td>
                                                <td><a href="{{ route('site.product.show', [$orderItem->product->slug]) }}"
                                                        target="_blank" class="text_cart_history"><img
                                                            src="{{ asset("storage/uploads/$featured_image") }}"
                                                            alt="{{ $orderItem->product->name }}"
                                                            style="width: 80px; user-select: auto;"></a></td>
                                                <td>
                                                    <p class="text_cart_history">{{ $orderItem->qty }}</p>
                                                </td>
                                                <td>
                                                    <p class="text_cart_history">
                                                        {{ number_format($orderItem->unit_price) }}
                                                        VND</p>
                                                </td>

                                                <td>
                                                    <p class="text_cart_history">
                                                        {{ number_format($orderItem->total_price) }}
                                                        VND</p>
                                                </td>
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
