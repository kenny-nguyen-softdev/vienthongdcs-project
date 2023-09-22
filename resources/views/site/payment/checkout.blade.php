@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">
        @include('site.layout.script_body')

        @include('site.layout.header')

        <div id="content" class="site-content container">
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.payment.checkout') }}">Thanh Toán</a>
                </li>
            </ul>

            @include('site.layout.alert')

            <div class="row">
                <div id="primary" class="content-sidebar-wrap">

                    <div class="container">

                        <div class="main-content">
                            <main id="main" class="site-main" role="main">

                                <article id="post-193" class="post-193 page type-page status-publish hentry">

                                    <div class="entry-content">
                                        <div class="woocommerce">

                                            <form id="frm_order" name="checkout" method="POST"
                                                class="checkout woocommerce-checkout"
                                                action="{{ route('site.payment.proceed') }}" enctype="multipart/form-data"
                                                novalidate="novalidate">
                                                @csrf
                                                @method('POST')

                                                @if (Auth::guard('customer')->check())
                                                <div class="col2-set col-md-6" id="customer_details">
                                                    <div class="col-1">
                                                        <div class="woocommerce-billing-fields">

                                                            <h3>Thông tin thanh toán</h3>

                                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                                <p class="form-row form-row-first validate-required col-md-12 col-sm-12"
                                                                    id="fullname" data-priority="10"><label for="fullname"
                                                                        class="">Họ và
                                                                        Tên&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="text" class="input-text "
                                                                            name="fullname" id="fullname" placeholder=""
                                                                            value="{{ Auth::guard('customer')->user()->name }}" autocomplete="off"></span></p>

                                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                                    id="mobile" data-priority="100"><label for="mobile"
                                                                        class="">Số điện
                                                                        thoại&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="tel" class="input-text "
                                                                            name="mobile" id="mobile" placeholder=""
                                                                            value="{{ Auth::guard('customer')->user()->mobile }}" autocomplete="off"></span></p>

                                                                <p class="form-row form-row-wide validate-required validate-email"
                                                                    id="email" data-priority="110"><label for="email"
                                                                        class="">Địa chỉ
                                                                        email&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="email" class="input-text "
                                                                            name="email" id="email" placeholder=""
                                                                            value="{{ Auth::guard('customer')->user()->email }}" autocomplete="off"></span></p>

                                                                <p class="form-row form-row-first validate-required col-md-12 col-sm-12"
                                                                    id="housenumber_street" data-priority="10"><label
                                                                        for="housenumber_street" class="">Số nhà, tên
                                                                        đường&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="text" class="input-text "
                                                                            name="housenumber_street"
                                                                            id="housenumber_street"
                                                                            placeholder="Số nhà, tên đường" value="{{ Auth::guard('customer')->user()->housenumber_street }}"
                                                                            autocomplete="off"></span></p>

                                                                @include('site.layout.address')
                                                                </p>
                                                            </div>

                                                        </div>

                                                        <div class="woocommerce-account-fields">
                                                            <div class="create-account" style="display: none;">
                                                                <p class="form-row validate-required"
                                                                    id="account_password_field" data-priority=""><label
                                                                        for="account_password" class="">Tạo mật khẩu
                                                                        của tài
                                                                        khoản&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper password-input"><input
                                                                            type="password" class="input-text "
                                                                            name="account_password" id="account_password"
                                                                            placeholder="Mật khẩu" value=""
                                                                            autocomplete="off"><span
                                                                            class="show-password-input"></span></span></p>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="woocommerce-shipping-fields">
                                                        </div>
                                                        <div class="woocommerce-additional-fields">
                                                            <h3>Thông tin bổ sung</h3>

                                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                                <p class="form-row notes" id="order_comments_field"
                                                                    data-priority=""><label for="order_comments"
                                                                        class="">Ghi chú đơn hàng&nbsp;<span
                                                                            class="optional">(tuỳ chọn)</span></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <textarea name="note" class="input-text " id="order_comments"
                                                                            placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2"
                                                                            cols="5"></textarea>
                                                                    </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col2-set col-md-6" id="customer_details">
                                                    <div class="col-1">
                                                        <div class="woocommerce-billing-fields">

                                                            <h3>Thông tin thanh toán</h3>

                                                            <p class="tk_p_login">Bạn đã có tài khoản ? <a
                                                                    href="">Đăng
                                                                    nhập</a></p>

                                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                                <p class="form-row form-row-first validate-required col-md-12 col-sm-12"
                                                                    id="fullname" data-priority="10"><label for="fullname"
                                                                        class="">Họ và
                                                                        Tên&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="text" class="input-text "
                                                                            name="fullname" id="fullname" placeholder=""
                                                                            value="" autocomplete="off"></span></p>

                                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                                    id="mobile" data-priority="100"><label for="mobile"
                                                                        class="">Số điện
                                                                        thoại&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="tel" class="input-text "
                                                                            name="mobile" id="mobile" placeholder=""
                                                                            value="" autocomplete="off"></span></p>

                                                                <p class="form-row form-row-wide validate-required validate-email"
                                                                    id="email" data-priority="110"><label for="email"
                                                                        class="">Địa chỉ
                                                                        email&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="email" class="input-text "
                                                                            name="email" id="email" placeholder=""
                                                                            value="" autocomplete="off"></span></p>

                                                                <p class="form-row form-row-first validate-required col-md-12 col-sm-12"
                                                                    id="housenumber_street" data-priority="10"><label
                                                                        for="housenumber_street" class="">Số nhà, tên
                                                                        đường&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="text" class="input-text "
                                                                            name="housenumber_street"
                                                                            id="housenumber_street"
                                                                            placeholder="Số nhà, tên đường" value=""
                                                                            autocomplete="off"></span></p>

                                                                @include('site.layout.address')
                                                                </p>
                                                            </div>

                                                        </div>

                                                        <div class="woocommerce-account-fields">
                                                            <div class="create-account" style="display: none;">
                                                                <p class="form-row validate-required"
                                                                    id="account_password_field" data-priority=""><label
                                                                        for="account_password" class="">Tạo mật khẩu
                                                                        của tài
                                                                        khoản&nbsp;<abbr class="required"
                                                                            title="bắt buộc">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper password-input"><input
                                                                            type="password" class="input-text "
                                                                            name="account_password" id="account_password"
                                                                            placeholder="Mật khẩu" value=""
                                                                            autocomplete="off"><span
                                                                            class="show-password-input"></span></span></p>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="woocommerce-shipping-fields">
                                                        </div>
                                                        <div class="woocommerce-additional-fields">
                                                            <h3>Thông tin bổ sung</h3>

                                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                                <p class="form-row notes" id="order_comments_field"
                                                                    data-priority=""><label for="order_comments"
                                                                        class="">Ghi chú đơn hàng&nbsp;<span
                                                                            class="optional">(tuỳ chọn)</span></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <textarea name="note" class="input-text " id="order_comments"
                                                                            placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2"
                                                                            cols="5"></textarea>
                                                                    </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif

                                                <div class="col3-set col-md-6 box-module">
                                                    <h3 id="order_review_heading" class="">Đơn hàng của bạn</h3>


                                                    <div id="order_review " class="woocommerce-checkout-review-order ">
                                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-name">Sản phẩm</th>
                                                                    <th class="product-total">Tạm tính</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $subTotal = 0;
                                                                @endphp
                                                                @foreach ($carts as $cart)
                                                                    @php
                                                                        $img = $cart->options['img'];
                                                                        $subTotal += $cart->subtotal;
                                                                    @endphp
                                                                    <tr class="cart_item">
                                                                        <td class="product-name">
                                                                            {{ $cart->name }} <strong
                                                                                class="product-quantity">×&nbsp;{{ $cart->qty }}</strong>
                                                                        </td>
                                                                        <td class="product-total">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount"><bdi>{{ number_format($cart->price) }}<span
                                                                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>

                                                                <tr class="cart-subtotal">
                                                                    <th>Tạm tính</th>
                                                                    <td><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($subTotal) }}<span
                                                                                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                                    </td>
                                                                </tr>

                                                                <tr class="order-total">
                                                                    <th>Tổng</th>
                                                                    <td><strong><span
                                                                                class="woocommerce-Price-amount amount"><bdi>{{ Cart::subtotal(0, '.', ',') }}<span
                                                                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></strong>
                                                                    </td>
                                                                </tr>


                                                            </tfoot>
                                                        </table>

                                                        <div id="payment" class="woocommerce-checkout-payment">
                                                            <ul class="wc_payment_methods payment_methods methods">
                                                                <li class="wc_payment_method payment_method_bacs">
                                                                    <input id="payment_method_bacs" type="radio"
                                                                        class="input-radio"
                                                                        name="payment_method"checked="checked"
                                                                        value="0">

                                                                    <label for="payment_method_bacs">
                                                                        Chuyển khoản ngân hàng </label>
                                                                    <div class="payment_box payment_method_bacs ">
                                                                        <p>Tên ngân hàng: <b>{{ $company->bank_name }}</b>
                                                                        </p>
                                                                        <p>Số Tài Khoản: <b>{{ $company->account_no }}</b>
                                                                        <p>*Ghi chú chuyển khoản là tên và chụp hình gửi lại
                                                                            cho shop dễ kiểm tra ạ
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li class="wc_payment_method payment_method_cod">
                                                                    <input id="payment_method_cod" type="radio"
                                                                        class="input-radio payment_method_code_check"
                                                                        name="payment_method" value="1">

                                                                    <label for="payment_method_cod">
                                                                        Trả tiền mặt khi nhận hàng </label>
                                                                    <div class="payment_box payment_method_cod"
                                                                        style="">
                                                                        <p>Trả tiền mặt khi giao hàng</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="form-row place-order">

                                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                                    <div class="woocommerce-privacy-policy-text"></div>
                                                                </div>

                                                                <button type="submit" class="button alt"
                                                                    name="woocommerce_checkout_place_order"
                                                                    id="place_order" value="Đặt hàng"
                                                                    data-value="Đặt hàng">Đặt hàng</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div><!-- .entry-content -->

                                </article><!-- #post-## -->

                            </main><!-- #main -->
                        </div>


                    </div>
                </div>
            </div>


        </div>

        @include('site.layout.footer')
    </body>
@endsection
