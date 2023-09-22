@extends('admin.layout.main')

@section('head')
    <script src="{{ asset('template/admin/vendor/ckeditor/ckeditor.js') }}?v=<?= time() ?>"></script>
    <script type="text/javascript" src="{{ asset('template/admin/vendor/ckeditor/config.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/skins/moono-lisa/editor.css?t=M9E9') }}?v=<?= time() ?>">
    <script type="text/javascript" src="{{ asset('template/admin/vendor/ckeditor/styles.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/embed/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/autoembed/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/image2/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/embedbase/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/autolink/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>

    <script type="text/javascript" src="{{ asset('template/admin/vendor/ckeditor/lang/en.js?t=M9E9') }}?v=<?= time() ?>">
    </script>

    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/image2/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/scayt/dialogs/dialog.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/tableselection/styles/tableselection.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/dialog/styles/dialog.css?t=M9E9') }}?v=<?= time() ?>">
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/image2/lang/en.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Thông tin về <span style="color: red;">{{ $company->name }}</span></h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.company.update', $company->id) }}"
                            method="POST" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">Tên công ty</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-home" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên công ty.." value="{{ $company->name }}">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Mã số thuế</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-qrcode"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="tax_code"
                                        placeholder="Mã số thuế.." value="{{ $company->tax_code }}">
                                </div>
                                @if (!empty($errors->first('tax_code')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('tax_code') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="email"
                                        placeholder="Email công ty.." value="{{ $company->email }}">
                                </div>
                                @if (!empty($errors->first('email')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Đường dây nóng (Hotline)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-volume-control-phone"
                                                aria-hidden="true"></i> </span>
                                    </div>
                                    <input type="phone" class="form-control" id="val-username1" name="hotline"
                                        placeholder="Đường dây nóng công ty.." value="{{ $company->hotline }}">
                                </div>
                                @if (!empty($errors->first('hotline')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('hotline') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số Điện thoại</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-volume-control-phone"
                                                aria-hidden="true"></i> </span>
                                    </div>
                                    <input type="phone" class="form-control" id="val-username1" name="phone_number"
                                        placeholder="Số Điện thoại.." value="{{ $company->phone_number }}">
                                </div>
                                @if (!empty($errors->first('phone_number')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('phone_number') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số điện thoại giao dịch</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="phone" class="form-control" id="val-username1"
                                        name="delivery_phone_number" placeholder="Số điện thoại giao dịch.."
                                        value="{{ $company->delivery_phone_number }}">
                                </div>
                                @if (!empty($errors->first('delivery_phone_number')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('delivery_phone_number') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số điện thoại Zalo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="phone" class="form-control" id="val-username1"
                                        name="zalo_phone_number" placeholder="Số điện thoại Zalo.."
                                        value="{{ $company->zalo_phone_number }}">
                                </div>
                                @if (!empty($errors->first('zalo_phone_number')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('zalo_phone_number') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Logo (151px x 40px)</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="logo" value="{{ $company->logo }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('logo')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('logo') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="company_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$company->logo") }}" target="_blank">
                                        <img id="upload-image" src="{{ asset("storage/uploads/$company->logo") }}"
                                            width="35%" height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Favicon</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="favicon" value="{{ $company->favicon }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('favicon')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('favicon') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="company_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$company->favicon") }}" target="_blank">
                                        <img id="upload-image" src="{{ asset("storage/uploads/$company->favicon") }}"
                                            width="35%" height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Địa chỉ của công ty</label>
                            </div>

                            @include('admin.layout.address')

                            <div class="form-group">
                                <label class="text-label">Số nhà, tên đường của công ty</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-map-marker"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1"
                                        name="housenumber_street" value="{{ $company->housenumber_street }}"
                                        placeholder="Số nhà, tên đường của công ty..">
                                </div>
                                @if (!empty($errors->first('housenumber_street')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('housenumber_street') }}</div>
                                @endif
                            </div>

                            <div class="form-group mt-4">
                                <label class="text-label">Địa chỉ giao-nhận</label>
                            </div>

                            @php
                                if (!empty($company)) {
                                    $districts = [];
                                    $wards = [];
                                    $selected_ward = $company->deliveryWard;
                                    $selected_province_id = null;
                                    $selected_district_id = null;
                                    $selected_ward_id = null;
                                    $shipping_fee = 0;

                                    if (!empty($selected_ward)) {
                                        $selected_ward_id = $selected_ward->id; // 2 selected_ward_id
                                        $selected_district = $selected_ward->district;
                                        $selected_district_id = $selected_district->id; //3 selected_district_id
                                        $selected_province = $selected_district->province;
                                        $selected_province_id = $selected_province->id; //4 selected_province_id

                                        $districts = $selected_province->districts; // 5 districts
                                        $wards = $selected_district->wards; //6 wards
                                    }
                                }
                            @endphp

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="text-label">Tỉnh / Thành Phố giao nhận</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-location-arrow"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </div>

                                            <select class="form-control" name="delivery_province" id="delivery_province">
                                                <option value="">Vui lòng chọn tỉnh, thành phố giao nhận</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}"
                                                        {{ !empty($customer->ward_id) && $customer->ward->district->province->id == $province->id ? 'selected' : '' }}
                                                        {{ !empty($company->ward_id) && $company->ward->district->province->id == $province->id ? 'selected' : '' }}
                                                        {{ !empty($order->shipping_ward_id) && $order->ward->district->province->id == $province->id ? 'selected' : '' }}
                                                        {{ !empty($branch->ward_id) && $branch->ward->district->province->id == $province->id ? 'selected' : '' }}>
                                                        {{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if (!empty($errors->first('delivery_province')))
                                            <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                                {{ $errors->first('delivery_province') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="text-label">Quận / Huyện giao nhận</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-location-arrow"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </div>

                                            <select class="form-control" name="delivery_district" id="delivery_district">
                                                <option value="">Vui lòng chọn quận, huyện giao nhận</option>
                                                @if (!empty($districts))
                                                    @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}"
                                                            {{ !empty($selected_district_id) && $selected_district_id == $district->id ? 'selected' : '' }}>
                                                            {{ $district->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @if (!empty($errors->first('delivery_district')))
                                            <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                                {{ $errors->first('delivery_district') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="text-label">Phường / Xã giao nhận</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-location-arrow"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </div>

                                            <select class="form-control" name="delivery_ward" id="delivery_ward">
                                                <option value="">Vui lòng chọn phường, xã giao nhận</option>
                                                @if (!empty($districts))
                                                    @foreach ($wards as $ward)
                                                        <option value="{{ $ward->id }}"
                                                            {{ !empty($selected_ward_id) && $selected_ward_id == $ward->id ? 'selected' : '' }}>
                                                            {{ $ward->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @if (!empty($errors->first('delivery_ward')))
                                            <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                                {{ $errors->first('delivery_ward') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số nhà, tên đường giao nhận</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-map-marker"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1"
                                        name="delivery_housenumber_street"
                                        value="{{ $company->delivery_housenumber_street }}"
                                        placeholder="Số nhà, tên đường giao nhận..">
                                </div>
                                @if (!empty($errors->first('delivery_housenumber_street')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('delivery_housenumber_street') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Liên kết Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="facebook_url"
                                        placeholder="Liên kết Facebook.." value="{{ $company->facebook_url }}">
                                </div>
                                @if (!empty($errors->first('facebook_url')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('facebook_url') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Liên kết Zalo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-link" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="zalo_url"
                                        placeholder="Liên kết Zalo.." value="{{ $company->zalo_url }}">
                                </div>
                                @if (!empty($errors->first('zalo_url')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('zalo_url') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Liên kết Youtube</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-youtube-play"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="youtube_url"
                                        placeholder="Liên kết Youtube.." value="{{ $company->youtube_url }}">
                                </div>
                                @if (!empty($errors->first('youtube_url')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('youtube_url') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Liên kết Twitter</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="twitter_url"
                                        placeholder="Liên kết Twitter.." value="{{ $company->twitter_url }}">
                                </div>
                                @if (!empty($errors->first('twitter_url')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('twitter_url') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số tài khoản ngân hàng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-credit-card"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="account_no"
                                        placeholder="Số tài khoản ngân hàng.." value="{{ $company->account_no }}">
                                </div>
                                @if (!empty($errors->first('account_no')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('account_no') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Tên ngân hàng thụ hưởng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-university"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="bank_name"
                                        placeholder="Tên ngân hàng thụ hưởng.." value="{{ $company->bank_name }}">
                                </div>
                                @if (!empty($errors->first('bank_name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('bank_name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Liên kết Bản Đồ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-map" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="map_url"
                                        placeholder="Liên kết bản đồ.." value="{{ $company->map_url }}">
                                </div>
                                @if (!empty($errors->first('map_url')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('map_url') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Bản đồ</label>
                                <div class="input-group">
                                    <textarea name="map" class="form-control" id="note" cols="30" rows="7">{{ $company->map }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Tiêu đề hỗ trợ tư vấn miễn phí</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="survey_title"
                                        placeholder="Tiêu đề hỗ trợ tư vấn miễn phí.."
                                        value="{{ $company->survey_title }}">
                                </div>
                                @if (!empty($errors->first('survey_title')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('survey_title') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="content1">Nội dung hỗ trợ tư vấn miễn phí</label>
                                <textarea name="survey_content" class="form-control" id="content1" rows="10" cols="80">{{ $company->survey_content }}</textarea>

                                @if (!empty($errors->first('survey_content')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('survey_content') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Hình ảnh nổi bật hỗ trợ tư vấn miễn
                                            phí</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="survey_featured_image"
                                            value="{{ $company->survey_featured_image }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('survey_featured_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('survey_featured_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="company_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$company->survey_featured_image") }}"
                                        target="_blank">
                                        <img id="upload-image"
                                            src="{{ asset("storage/uploads/$company->survey_featured_image") }}"
                                            width="35%" height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Hình ảnh banner 1 hỗ trợ tư vấn
                                            miễn phí</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="survey_img_1" value="{{ $company->survey_img_1 }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('survey_img_1')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('survey_img_1') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="company_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$company->survey_img_1") }}" target="_blank">
                                        <img id="upload-image"
                                            src="{{ asset("storage/uploads/$company->survey_img_1") }}" width="35%"
                                            height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Hình ảnh banner 2 hỗ trợ tư vấn
                                            miễn phí</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="survey_img_2" value="{{ $company->survey_img_2 }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('survey_img_2')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('survey_img_2') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="company_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$company->survey_img_2") }}" target="_blank">
                                        <img id="upload-image"
                                            src="{{ asset("storage/uploads/$company->survey_img_2") }}" width="35%"
                                            height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Hình ảnh banner 3 hỗ trợ tư vấn
                                            miễn phí</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="survey_img_3" value="{{ $company->survey_img_3 }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('survey_img_3')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('survey_img_3') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="company_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$company->survey_img_3") }}" target="_blank">
                                        <img id="upload-image"
                                            src="{{ asset("storage/uploads/$company->survey_img_3") }}" width="35%"
                                            height="300px">
                                    </a>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <label for="content2">Nội dung tại sao mua hàng tại công ty</label>
                                <textarea name="why_buy_in" class="form-control" id="content2" rows="10" cols="80">{{ $company->why_buy_in }}</textarea>

                                @if (!empty($errors->first('why_buy_in')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('why_buy_in') }}</div>
                                @endif
                            </div> --}}

                            <div class="form-group">
                                <label class="text-label">Script Head</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="script_head"
                                        placeholder="Script Head.." value="{{ $company->script_head }}">
                                </div>
                                @if (!empty($errors->first('script_head')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('script_head') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Script Body</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="script_body"
                                        placeholder="Script Body.." value="{{ $company->script_body }}">
                                </div>
                                @if (!empty($errors->first('script_body')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('script_body') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Script Footer</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="script_footer"
                                        placeholder="Script Footer.." value="{{ $company->script_footer }}">
                                </div>
                                @if (!empty($errors->first('script_footer')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('script_footer') }}</div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <script>
        CKEDITOR.replace('content1', {
            extraPlugins: 'embed,uploadimage,image2',
            height: 300,

            // Upload images to a CKFinder connector (note that the response type is set to JSON).
            uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",

            // The following options are not necessary and are used here for presentation purposes only.
            // They configure the Styles drop-down list and widgets to use classes.

            // stylesSet: [{
            //         name: 'Narrow image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-narrow'
            //         }
            //     },
            //     {
            //         name: 'Wide image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-wide'
            //         }
            //     }
            // ],

            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                CKEDITOR.basePath + 'contents.css',
                'assets/css/widgetstyles.css'
            ],

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',


            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                'http://cdn.ckeditor.com/4.20.0/full-all/contents.css',
                'https://ckeditor.com/docs/ckeditor4/4.20.0/examples/assets/css/widgetstyles.css'
            ],
            // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',
        });

        CKEDITOR.replace('content2', {
            extraPlugins: 'embed,uploadimage,image2',
            height: 300,

            // Upload images to a CKFinder connector (note that the response type is set to JSON).
            uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",

            // The following options are not necessary and are used here for presentation purposes only.
            // They configure the Styles drop-down list and widgets to use classes.

            // stylesSet: [{
            //         name: 'Narrow image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-narrow'
            //         }
            //     },
            //     {
            //         name: 'Wide image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-wide'
            //         }
            //     }
            // ],

            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                CKEDITOR.basePath + 'contents.css',
                'assets/css/widgetstyles.css'
            ],

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',


            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                'http://cdn.ckeditor.com/4.20.0/full-all/contents.css',
                'https://ckeditor.com/docs/ckeditor4/4.20.0/examples/assets/css/widgetstyles.css'
            ],
            // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',
        });
    </script>
@endsection
