@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category">

            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.customer.reset.password.get', $token) }}">Reset Mật Khẩu</a>
                </li>
            </ul>
            <div class="row">
                <div class="wrapper_full col-md-12">
                    <div class="wrapper_full_1 wrapper_full_5 box-module col-md-8">
                        <div class="register_user clearfix">

                            <form id="reset_password_form" method="POST"
                                action="{{ route('site.customer.reset.password.post') }}">
                                @csrf
                                @method('PUT')
                                <div class="title_user clearfix">
                                    <h1>{{ $company->name }}</h1>
                                    <p>Reset Mật Khẩu</p>
                                </div>
                                @include('site.layout.alert')

                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="update_div_input">
                                    <p class="col-md-4">Email ( <b>*</b> )</p>
                                    <div class="input_update_frm col-md-8"> <input type="email" name="email"
                                            value="" class="input_update"
                                            placeholder="Nhập địa chỉ Email bạn đăng ký">
                                    </div>
                                    <span class="error-message"
                                        style="color:red; margin-bottom:20px; display:inline-block;">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="update_div_input">
                                    <p class="col-md-4">Mật khẩu mới ( <b>*</b> )</p>
                                    <div class="input_update_frm col-md-8"> <input type="password" name="password"
                                            class="input_update" value=""> </div>
                                    <span class="error-message"
                                        style="color:red; margin-bottom:20px; display:inline-block;">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="update_div_input">
                                    <p class="col-md-4">Xác nhận mật khẩu mới ( <b>*</b> )</p>
                                    <div class="input_update_frm col-md-8"> <input type="password"
                                            name="password_confirmation" class="input_update" value=""> </div>
                                    <span class="error-message"
                                        style="color:red; margin-bottom:20px; display:inline-block;">{{ $errors->first('password_confirmation') }}</span>
                                </div>
                                <div class="update_div_input">
                                    <input type="submit" class="submit_update" name="" value="Cập nhập">
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
