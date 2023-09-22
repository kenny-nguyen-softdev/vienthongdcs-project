@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category">

            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.customer.register') }}">Đăng ký</a>
                </li>
            </ul>
            <div class="row">
                <div class="wrapper_full col-md-12">
                    <div class="wrapper_full_1 box-module col-md-8">
                        <div class="register_user clearfix">
                            <form class="register_form_user" method="post"
                                action="{{ route('site.customer.checkRegister') }}">
                                @csrf
                                @method('post')
                                <div class="title_user clearfix">
                                    <h1>{{ $company->name }}</h1>
                                    <p>Đăng ký và mua sắm</p>
                                </div>

                                @include('site.layout.alert')

                                <div class="wp_input_user">
                                    <input type="email" name="email" class="input_user" placeholder="Email">

                                    <input type="password" name="password" class="input_user" placeholder="Mật khẩu">

                                    <input type="password" name="password_confirmation" class="input_user"
                                        placeholder="Xác nhận mật khẩu">

                                    <input type="text" name="fullname" class="input_user" placeholder="Họ &amp; tên">

                                    <input type="text" name="address" class="input_user" placeholder="Địa chỉ">

                                    <input type="text" name="mobile" class="input_user" placeholder="Số điện thoại"
                                        pattern="0([0-9]{9,10})">
                                </div>
                                <div class="wp_input_user1 clearfix box_login_register">

                                    <div class="btn_register"> <i class="fa fa-user-plus" aria-hidden="true"></i> <span>Đăng
                                            ký</span>
                                        <input type="submit">
                                    </div>

                                    <div class="btn_login btn_login_p"> <a href="{{ route('site.customer.login') }}">
                                            <span>Đăng nhập</span><i class="fa fa-sign-in" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('site.layout.footer')
    </body>
@endsection
