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
                            <form class="login_form_user" method="POST"
                                action="{{ route('site.customer.forget.password.post') }}">
                                @csrf
                                <div class="title_user clearfix">
                                    <h1>{{ $company->name }}</h1>
                                    <p>Quên mật khẩu</p>
                                </div>
                                @include('site.layout.alert')

                                <div class="wp_input_user_login" style="margin-bottom: 12px;">
                                    <input type="email" name="email" value="" class="input_user"
                                        placeholder="Nhập địa chỉ Email bạn đăng ký">
                                </div>
                                <div class="wp_input_user2 text-center mt-3"> <input type="submit"
                                        class="submit_update btn" id="btn_forgot" value="Gửi">
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
