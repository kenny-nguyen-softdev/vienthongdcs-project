@extends('site.layout.main')

@section('content')

    <body class="product-category-57 home1">
        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="{{ route('site.cart.show') }}">Giỏ hàng</a></li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div id="ajax-login-block"></div>

                    <h1>Giỏ hàng</h1>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center">Hình ảnh</td>
                                        <td class="text-left">Tên sản phẩm</td>
                                        <td class="text-left">Thương Hiệu</td>
                                        <td class="text-left">Số lượng</td>
                                        <td class="text-right">Giá</td>
                                        <td class="text-right">Tổng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $subTotal = 0;
                                    @endphp
                                    @foreach ($carts as $cart)
                                        @php
                                            $subTotal += $cart->subtotal;
                                        @endphp
                                        <tr>
                                            @php
                                                $img = $cart->options['img'];
                                            @endphp
                                            <td class="text-center">
                                                <a href="{{ route('site.product.show', $cart->options['slug']) }}"><img
                                                        src="{{ asset("storage/uploads/$img") }}" alt="{{ $cart->name }}"
                                                        title="{{ $cart->name }}" class="img-thumbnail" height="180px"
                                                        width="180px" /></a>
                                            </td>
                                            <td class="text-left">
                                                <a
                                                    href="{{ route('site.product.show', $cart->options['slug']) }}">{{ $cart->name }}</a>
                                            </td>
                                            <td class="text-left">{{ $cart->options['brand_name'] }}</td>
                                            <td class="text-left">
                                                <div class="input-group btn-block" style="max-width: 200px">
                                                    <button type="button" class="sub is-form img_click_minus1"
                                                        onclick="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')"
                                                        value="-"><i class="fa fa-minus"
                                                            aria-hidden="true"></i></button>

                                                    <input type="text" name="quantity" min="1"
                                                        value="{{ $cart->qty }}" size="1"
                                                        class="form-control number_cart_input"
                                                        onchange="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')"
                                                        id="quantity" />

                                                    <button type="button" class="add is-form img_click_plus1"
                                                        onclick="updateQtyInCart('{{ route('site.cart.update') }}', this, '{{ $cart->rowId }}')"
                                                        value="+"><i class="fa fa-plus"
                                                            aria-hidden="true"></i></button>

                                                    <span class="input-group-btn">

                                                        <button type="button" data-toggle="tooltip" title="Remove"
                                                            class="btn btn-danger"
                                                            onclick="deleteItemInCart('{{ route('site.cart.destroy') }}','{{ $cart->rowId }}')">
                                                            <i class="fa fa-times-circle"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right">{{ number_format($cart->price) }}đ</td>
                                            <td class="text-right" id="item_sub_total">
                                                {{ number_format($cart->subtotal) }}đ
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>

                    <br />
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Tổng tiền:</strong></td>
                                        <td class="text-right" id="sub_total">{{ number_format($subTotal) }}đ</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Tiền thanh toán:</strong></td>
                                        <td class="text-right" id="total_price">{{ Cart::subtotal(0, '.', ',') }}đ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="buttons clearfix">
                        <div class="pull-left">
                            <a href="{{ route('site.home') }}" class="btn btn-default">Tiếp tục mua sắm</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('site.payment.checkout') }}" class="btn btn-primary">Thanh Toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('site.layout.footer')
    </body>
@endsection
