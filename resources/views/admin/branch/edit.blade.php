@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh Sửa Chi Nhánh <span style="color: red;">{{ $branch->name }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.branch.update', $branch->id) }}"
                            method="POST" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">Tên chi nhánh</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-home" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên chi nhánh.." value="{{ $branch->name }}">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Đường dây nóng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-volume-control-phone"
                                                aria-hidden="true"></i> </span>
                                    </div>
                                    <input type="phone" class="form-control" id="val-username1" name="hotline"
                                        placeholder="Đường dây nóng cửa hàng.." value="{{ $branch->hotline }}">
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
                                    <input type="phone" class="form-control" id="val-username1" name="tel"
                                        placeholder="Số Điện thoại.." value="{{ $branch->tel }}">
                                </div>
                                @if (!empty($errors->first('tel')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('tel') }}</div>
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
                                        value="{{ $branch->delivery_phone_number }}">
                                </div>
                                @if (!empty($errors->first('delivery_phone_number')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('delivery_phone_number') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Vị trí chi nhánh</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list" aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="branchLocation">
                                        <option value="">Vui lòng chọn danh mục chính</option>
                                        @foreach ($branchLocations as $branchLocation)
                                            <option value="{{ $branchLocation->id }}"
                                                {{ $branchLocation->id == $branch->branchLocation->id ? 'selected' : '' }}>
                                                {{ $branchLocation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('branchLocation')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('branchLocation') }}</div>
                                @endif
                            </div>

                            @include('admin.layout.address')

                            <div class="form-group">
                                <label class="text-label">Số nhà, tên đường của công ty</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="housenumber_street"
                                        value="{{ $branch->housenumber_street }}"
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
                                if (!empty($branch)) {
                                    $districts = [];
                                    $wards = [];
                                    $selected_ward = $branch->deliveryWard;
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
                                        value="{{ $branch->delivery_housenumber_street }}"
                                        placeholder="Số nhà, tên đường giao nhận..">
                                </div>
                                @if (!empty($errors->first('delivery_housenumber_street')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('delivery_housenumber_street') }}</div>
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
                                        placeholder="Liên kết bản đồ.." value="{{ $branch->map_url }}">
                                </div>
                                @if (!empty($errors->first('map_url')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('map_url') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Bản đồ</label>
                                <div class="input-group">
                                    <textarea name="map" class="form-control" id="note" cols="30" rows="7">{{ $branch->map }}</textarea>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
