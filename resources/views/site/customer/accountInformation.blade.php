@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category info_account">

            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.customer.accountInformation') }}">Thông Tin Tài Khoản</a>
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
                                <h1 class="h1_2 col-md-12">Thông tin tài khoản</h1>
                                @include('site.layout.alert')
                                <form id="account_information_form" method="POST"
                                    action="{{ route('site.customer.updateAccountInformation') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="update_div_input">
                                        <p class="col-md-4">Email</p>
                                        <div class="input_update_frm col-md-8"> <i onclick="enable_edit('email')"></i>
                                            <input type="email" class="input_update"
                                                value="{{ Auth::guard('customer')->user()->email }}" 
                                                name="email">
                                        </div>
                                    </div>

                                    <div class="update_div_input">
                                        <p class="col-md-4">Họ Tên</p>
                                        <div class="input_update_frm col-md-8"> <i onclick="enable_edit('fullname')"></i>
                                            <input type="text" class="input_update"
                                                value="{{ Auth::guard('customer')->user()->name }}" 
                                                name="fullname">
                                        </div>
                                    </div>

                                    <div class="update_div_input">
                                        <p class="col-md-4">Địa chỉ</p>
                                        <div class="input_update_frm col-md-8"> <i
                                                onclick="enable_edit('housenumber_street')"></i>
                                            <input type="text" class="input_update"
                                                value="{{ Auth::guard('customer')->user()->housenumber_street }}"
                                                 name="housenumber_street">
                                        </div>
                                    </div>

                                    <div class="update_div_input">
                                        <p class="col-md-4">Điên thoại ( <b>*</b> )</p>
                                        <div class="input_update_frm col-md-8"> <i onclick="enable_edit('mobile')"></i>
                                            <input type="text" class="input_update"
                                                value="{{ Auth::guard('customer')->user()->mobile }}" 
                                                name="mobile">
                                        </div>
                                    </div>

                                    @include('site.layout.accountAddress')
                                    <div class="update_div_input col-md-12 btn_update">
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
