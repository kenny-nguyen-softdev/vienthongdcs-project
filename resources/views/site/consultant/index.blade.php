@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        <link
            href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/khao-sat-tu-van.css') }}?v=<?= time() ?>"
            rel="stylesheet" />

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container layer-category">
            <div class="flexJus headpage">
                <div class="flex">
                    <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="{{ route('site.home') }}" title="Trang Chủ"><span itemprop="name">Trang
                                    chủ</span></a>
                            <meta itemprop="position" content="1" />
                        </li>

                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="{{ route('site.consultant.index') }}"
                                title="Hỗ trợ tư vấn miễn phí"><span itemprop="name">Hỗ trợ tư vấn miễn phí</span></a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content survey">
                <p>
                    <img alt="{{ $company->survey_title }}" src="{{ asset("storage/uploads/$company->survey_img_1") }}" />
                </p>
                <p>
                    <img alt="{{ $company->survey_title }}" src="{{ asset("storage/uploads/$company->survey_img_2") }}" />
                </p>
                <p>
                    <img alt="{{ $company->survey_title }}" src="{{ asset("storage/uploads/$company->survey_img_3") }}" />
                </p>

                <form id="consultant_form" class="form-top f" action="{{ route('site.consultant.sendEmail') }}"
                    method="POST">
                    @csrf
                    @method('POST')
                    <div class="box-form-register">
                        <div class="formTopLeft">
                            <h3 class="txt tx02 cen">ĐĂNG KÝ NHẬN HỖ TRỢ TƯ VẤN</h3>
                            <div class="form-group">
                                <input name="fullname" type="text" class="form-controls" placeholder="Nhập họ tên" />
                            </div>
                            <div class="form-group">
                                <input type="tel" title="Có 10 hoặc 11 số bắt đầu bằng 0" name="mobile"
                                    class="form-controls" placeholder="Nhập số điện thoại." />
                            </div>
                            <div class="form-group">
                                <input type="text" name="product_name" class="form-controls"
                                    placeholder="Nhập sản phẩm cần tư vấn." />
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-controls" placeholder="Nhập địa chỉ." />
                            </div>

                            <div class="form-group col-md-12 mb-3 mt-2 send-loading" style="display: none;">

                            </div>

                            <input type="submit" name="_w_action[RegisterServicesPOST]" class="btn-register-top"
                                value="ĐĂNG KÝ NGAY" />
                            <small style="display: block" class="cen">Cam kết mọi thông tin của bạn sẽ được bảo
                                mật</small>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @include('site.layout.footer')
    </body>
@endsection
