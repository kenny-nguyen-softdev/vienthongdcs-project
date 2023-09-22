@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category">

            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.customer.login') }}">Đăng nhập</a>
                </li>
            </ul>
            <div class="row">
                <div class="wrapper_full col-md-12">
                    <div class="wrapper_full_1 wrapper_full_5 box-module col-md-8">
                        <div class="register_user clearfix">
                            <form class="login_form_user" method="post" action="{{ route('site.customer.checkLogin') }}">
                                @csrf
                                @method('POST')
                                <div class="title_user clearfix">
                                    <h1>{{ $company->name }}</h1>
                                    <p>Đăng ký và mua sắm</p>
                                </div>

                                @include('site.layout.alert')

                                <div class="wp_input_user_login">

                                    <input type="text" name="email" class="input_user col-md-12" placeholder="Email">
                                    <input type="password" name="password" class="input_user" placeholder="Password">
                                    <div class="form-check"> <input type="checkbox" name="remember" id="remember"
                                            class="form-check-input"> <label for="remember" class="form-check-label">Ghi
                                            nhớ</label> </div>

                                </div>
                                <div class="wp_input_user2 clearfix">

                                    <div class="forgot_pass">Quên mật khẩu? Nhấn vào <a
                                            href="{{ route('site.customer.forget.password.get') }}">đây</a>
                                    </div>

                                    <a href="{{ route('site.customer.register') }}" class="a_dangky "> <i
                                            class="fa fa-user-plus" aria-hidden="true"></i> <span>Đăng ký</span> </a>

                                    <div class="btn_login "> <span>Đăng nhập</span><i class="fa fa-sign-in"
                                            aria-hidden="true"></i>
                                        <input type="submit" value>
                                    </div>

                                </div>
                                <div class="wp_input_user2 clearfix">
                                    <a href="{{ route('site.customer.login.facebook') }}" class="login_face">Login
                                        facebook<i></i></a>
                                    <a href="{{ route('site.customer.login.google') }}" class="login_gmail">Login google
                                        +<i></i></a>
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
