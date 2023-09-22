@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category info_account">

            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.customer.changePassword') }}">Đổi Mật Khẩu</a>
                </li>
            </ul>
            <div class="row">
                <div class="wrapper_full ">
                    <div class="wrapper_full_1">
                        <div class="left_account_user col-md-4 col-sm-12">
                            @include('site.layout.accountSideBar')
                        </div>

                        <div class="right_account_user col-md-8 col-sm-12 ">
                            <div class="right_account_user1">
                                <h1 class="h1_2 col-md-12">Đổi Mật Khẩu</h1>
                                @include('site.layout.alert')
                                <form id="change_password_form" method="POST"
                                    action="{{ route('site.customer.updateChangePassword') }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="update_div_input">
                                        <p class="col-md-4">Mật khẩu hiện tại ( <b>*</b> )</p>
                                        <div class="input_update_frm col-md-8"> <input type="password"
                                                name="current_password" class="input_update" value=""> </div>
                                        <span class="error-message"
                                            style="color:red; margin-bottom:20px; display:inline-block;">{{ $errors->first('current_password') }}</span>
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
                                        <p></p>
                                        <input type="submit" class="submit_update" name="" value="Cập nhập">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('site.layout.footer')
    </body>
@endsection
