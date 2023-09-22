@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">

        @include('site.layout.script_body')

        @include('site.layout.header')
        <div class="map-contacts">
            <div class="col-md-12">
                <div class="map-north map-contact" style="margin-bottom: 18px;">
                    {!! $company->map !!}
                </div>
            </div>
        </div>
        <div id="content" class="site-content container">
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ route('site.contact.index') }}">Liên hệ</a>
                </li>
            </ul>

            <div class="row">

                <div id="primary" class="content-sidebar-wrap">
                    <div class="container">
                        <div class="main-content">
                            <main id="main" class="site-main" role="main">
                                <article id="post-9" class="post-9 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div role="form" class="wpcf7" id="wpcf7-f8578-p9-o1" lang="vi"
                                                    dir="ltr">
                                                    <div class="screen-reader-response">
                                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>
                                                    <form id="contactform" action="{{ route('site.contact.sendContact') }}"
                                                        method="POST" class="wpcf7-form init" novalidate="novalidate"
                                                        data-status="init">
                                                        @csrf
                                                        @method('POST')
                                                        <div style="display:none;"> <input type="hidden" name="_wpcf7"
                                                                value="8578" autocomplete="off"> <input type="hidden"
                                                                name="_wpcf7_version" value="5.4.2" autocomplete="off">
                                                            <input type="hidden" name="_wpcf7_locale" value="vi"
                                                                autocomplete="off"> <input type="hidden"
                                                                name="_wpcf7_unit_tag" value="wpcf7-f8578-p9-o1"
                                                                autocomplete="off"> <input type="hidden"
                                                                name="_wpcf7_container_post" value="9"
                                                                autocomplete="off"> <input type="hidden"
                                                                name="_wpcf7_posted_data_hash" value=""
                                                                autocomplete="off">
                                                        </div>
                                                        <div class="form-group"><span
                                                                class="wpcf7-form-control-wrap your-name"><input
                                                                    type="text" name="fullname" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Họ tên" autocomplete="off"></span></div>
                                                        <div class="form-group"><span
                                                                class="wpcf7-form-control-wrap your-phone"><input
                                                                    type="phone" name="mobile" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Số điện thoại" autocomplete="off"></span>
                                                        </div>
                                                        <div class="form-group"><span
                                                                class="wpcf7-form-control-wrap your-email"><input
                                                                    type="email" name="email" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Email" autocomplete="off"></span></div>
                                                        <div class="form-group"><span
                                                                class="wpcf7-form-control-wrap your-message">
                                                                <textarea name="content" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control"
                                                                    aria-invalid="false" placeholder="Nội dung"></textarea>
                                                            </span></div>
                                                        <div class="form-group col-md-12 mb-3 mt-2 send-loading w-100"
                                                            style="padding: 0;">

                                                        </div>
                                                        <div class="form-group"><button type="submit"
                                                                class="btn btn-contact wpcf7-form-control wpcf7-submit">Gửi
                                                                đi
                                                                <i class="fa fa-arrow-circle-right"
                                                                    aria-hidden="true"></i></button><span
                                                                class="ajax-loader"></span></div><input type="hidden"
                                                            class="wpcf7-pum"
                                                            value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}"
                                                            autocomplete="off">
                                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    @foreach ($branchLocations as $branchLocation)
                                                        <div class="col-md-12">
                                                            <div class="contact-box">
                                                                <div class="contact-header"> <i class="fa fa-map-marker"
                                                                        aria-hidden="true"></i>
                                                                    {{ $branchLocation->name }}</div>
                                                                @foreach ($branchLocation->branches as $branch)
                                                                    <div class="contact-content">
                                                                        <p>{{ $branch->name }}:
                                                                            {{ $branch->housenumber_street . ', ' . $branch->ward->name . ', ' . $branch->ward->district->name . ', ' . $branch->ward->district->province->name }}
                                                                        </p>
                                                                        <p>VPGD:
                                                                            {{ $branch->delivery_housenumber_street . ', ' . $branch->deliveryWard->name . ', ' . $branch->deliveryWard->district->name . ', ' . $branch->deliveryWard->district->province->name }}
                                                                            - {{ $branch->delivery_phone_number }}
                                                                        </p>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="contact-box">
                                                            <div class="contact-header"> <i class="fa fa-phone"
                                                                    aria-hidden="true"></i> Điện
                                                                thoại </div>
                                                            <div class="contact-content">
                                                                <p><span>Hotline: </span>{{ $company->hotline }}</p>
                                                                <p><span>Số điện thoại: </span>{{ $company->phone_number }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="contact-box">
                                                            <div class="contact-header"> <i class="fa fa-envelope"
                                                                    aria-hidden="true"></i>
                                                                Email </div>
                                                            <div class="contact-content">
                                                                <p>{{ $company->email }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </article>
                            </main>
                        </div>


                    </div>
                </div>
            </div>


        </div>

        @include('site.layout.footer')
    </body>
@endsection
