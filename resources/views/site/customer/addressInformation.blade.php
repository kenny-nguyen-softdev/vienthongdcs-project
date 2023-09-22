@extends('site.layout.main')

@section('content')

    <body id="template-customers[addresses]">
        @include('site.layout.header')

        <section class="bread-crumb mb-3">
            <span class="crumb-border"></span>
            <div class="container px-md-0">
                <div class="row">
                    <div class="col-12 a-left">
                        <ul class="breadcrumb m-0 px-0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a href="{{ route('site.home') }}" target="_self" itemprop="item"><span
                                        itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1">
                                <span class="mr_lr">&nbsp;/&nbsp;</span>
                            </li>

                            <li>
                                <a href="{{ route('site.customer.accountInformation') }}" target="_self">
                                    <span> Tài khoản </span></a>
                                <span class="mr_lr">&nbsp;/&nbsp;</span>
                            </li>
                            <li class="active"><span>Ðịa chỉ</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        @include('site.layout.alert')
        <div class="op_address"></div>

        <section class="address section">
            <div class="container card p-3 page_address margin-bottom-20">
                <div class="row">
                    @include('site.layout.accountLeftSideBar')
                    <div class="col-12 col-lg-9">

                        <h1 class="title-head">Địa chỉ của bạn</h1>

                        <div class="row total_address">
                            <div id="view_address_1104839182"
                                class="customer_address col-xs-12 col-lg-12 col-md-12 col-xl-12">
                                <div class="address_info"
                                    style="border-top: 1px solid rgb(235, 235, 235); padding-top: 16px; margin-top: 20px; user-select: auto;">
                                    <div class="address-group">
                                        <div class="address form-signup">
                                            <p><strong>Họ tên: </strong>{{ Auth::guard('customer')->user()->name }}

                                                <span class="address-default"><i class="far fa-check-circle"></i>Địa chỉ
                                                    mặc định

                                                </span>
                                            </p>
                                            <p>
                                                <strong>Địa chỉ: </strong>
                                                {{ !empty(Auth::guard('customer')->user()->ward_id) ? Auth::guard('customer')->user()->ward->district->province->name : '' }}

                                            </p>

                                            <p><strong>Số điện thoại:</strong>
                                                {{ Auth::guard('customer')->user()->mobile }}</p>

                                            <p><strong>Email:</strong> {{ Auth::guard('customer')->user()->mobile }}</p>
                                        </div>
                                    </div>
                                    <div id="tool_address_1104839182" class="btn-address">
                                        <p class="btn-row">
                                            <button class="btn-edit-addr btn btn-primary btn-edit" type="button"
                                                data-form="edit_address_1104839182" aria-controls="edit_address_1104839182">
                                                Chỉnh sửa địa chỉ
                                            </button>
                                            <button class="hidden btn btn-dark-address btn-edit-addr btn-delete"
                                                type="button"
                                                onclick="Haravan.CustomerAddress.destroy(1104839182);return false"><span>Xóa</span></button>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div id="edit_address_1104839182" class="form-list modal_address modal modal_edit_address">
                                <div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
                                <h2 class="title_pop">
                                    Chỉnh sửa địa chỉ
                                </h2>

                                <form id="account_information_form"
                                    action="{{ route('site.customer.updateAddressInformation') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="pop_bottom">
                                        <div class="form_address">
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" name="fullname" class="form-control has-content"
                                                        value="{{ Auth::guard('customer')->user()->name }}">
                                                    <label>Họ & Tên</label>
                                                </fieldset>
                                                @if (!empty($errors->first('fullname')))
                                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                                        {{ $errors->first('fullname') }}</div>
                                                @endif
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="number" class="form-control has-content" id="Phone"
                                                        name="mobile"
                                                        value="{{ Auth::guard('customer')->user()->mobile }}">
                                                    <label>Số điện thoại</label>
                                                </fieldset>
                                                @if (!empty($errors->first('mobile')))
                                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                                        {{ $errors->first('mobile') }}</div>
                                                @endif
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="email"
                                                        value="{{ Auth::guard('customer')->user()->email }}">
                                                    <label>Email</label>
                                                </fieldset>
                                                @if (!empty($errors->first('email')))
                                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                                        {{ $errors->first('email') }}</div>
                                                @endif
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="housenumber_street"
                                                        value="{{ Auth::guard('customer')->user()->housenumber_street }}">
                                                    <label>Số nhà, tên đường</label>
                                                </fieldset>
                                                @if (!empty($errors->first('housenumber_street')))
                                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                                        {{ $errors->first('housenumber_street') }}</div>
                                                @endif
                                            </div>

                                            <div class="group-country">
                                                @include('site.layout.customerAddress')
                                            </div>

                                        </div>
                                        <div class="btn-row">
                                            <button class="btn btn-dark-address btn-fix-addr btn-close" type="button"
                                                data-form="edit_address_1104839182">
                                                Hủy
                                            </button>
                                            <button type="submit" class="btn btn-primary btn-submit"
                                                id="update"><span>Cập nhật địa
                                                    chỉ</span></button>

                                        </div>
                                    </div>
                                </form>
                            </div>


                            {{-- <div id="edit_address_1104839541" class="form-list modal_address modal modal_edit_address">
                                <div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
                                <h2 class="title_pop">
                                    Chỉnh sửa địa chỉ
                                </h2>
                                <form accept-charset="UTF-8" action="/account/addresses/1104839541"
                                    id="address_form_1104839541" method="post" class="has-validation-callback">
                                    <input name="form_type" type="hidden" value="customer_address">
                                    <input name="utf8" type="hidden" value="✓">

                                    <div class="pop_bottom">
                                        <div class="form_address">
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" name="fullname"
                                                        class="form-control has-content"
                                                        value="{{ Auth::guard('customer')->user()->name }}"
                                                        autocapitalize="words">
                                                    <label>Họ & Tên</label>
                                                </fieldset>
                                                <p class="error-msg"></p>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="number" pattern="\d+" class="form-control has-content"
                                                        id="Phone" name="mobile" maxlength="12"
                                                        value="{{ Auth::guard('customer')->user()->mobile }}">
                                                    <label>Số điện thoại</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="number" pattern="\d+" class="form-control has-content"
                                                        id="email" name="email" maxlength="12"
                                                        value="{{ Auth::guard('customer')->user()->email }}">
                                                    <label>Email</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control has-content"
                                                        name="address[address1]" value="1 vo van ngan, quận thủ đức">
                                                    <label>Số nhà, tên đường</label>
                                                </fieldset>
                                            </div>
                                            <div class="group-country">
                                                <fieldset class="form-group select-field">
                                                    <select name="address[country]"
                                                        class="form-control mySelect2 has-content"
                                                        id="mySelect2_1104839541" data-default="Vietnam"
                                                        value="">Vietnam<option value""="" data-provinces="[]">-
                                                            Please Select --</option>
                                                        <option value="Vietnam"
                                                            data-provinces="[&quot;Hồ Chí Minh&quot;,&quot;Hà Nội&quot;,&quot;Đà Nẵng&quot;,&quot;An Giang&quot;,&quot;Bà Rịa - Vũng Tàu&quot;,&quot;Bình Dương&quot;,&quot;Bình Phước&quot;,&quot;Bình Thuận&quot;,&quot;Bình Định&quot;,&quot;Bạc Liêu&quot;,&quot;Bắc Giang&quot;,&quot;Bắc Kạn&quot;,&quot;Bắc Ninh&quot;,&quot;Bến Tre&quot;,&quot;Cao Bằng&quot;,&quot;Cà Mau&quot;,&quot;Cần Thơ&quot;,&quot;Gia Lai&quot;,&quot;Hà Giang&quot;,&quot;Hà Nam&quot;,&quot;Hà Tĩnh&quot;,&quot;Hòa Bình&quot;,&quot;Hưng Yên&quot;,&quot;Hải Dương&quot;,&quot;Hải Phòng&quot;,&quot;Hậu Giang&quot;,&quot;Khánh Hòa&quot;,&quot;Kiên Giang&quot;,&quot;Kon Tum&quot;,&quot;Lai Châu&quot;,&quot;Long An&quot;,&quot;Lào Cai&quot;,&quot;Lâm Đồng&quot;,&quot;Lạng Sơn&quot;,&quot;Nam Định&quot;,&quot;Nghệ An&quot;,&quot;Ninh Bình&quot;,&quot;Ninh Thuận&quot;,&quot;Phú Thọ&quot;,&quot;Phú Yên&quot;,&quot;Quảng Bình&quot;,&quot;Quảng Nam&quot;,&quot;Quảng Ngãi&quot;,&quot;Quảng Ninh&quot;,&quot;Quảng Trị&quot;,&quot;Sóc Trăng&quot;,&quot;Sơn La&quot;,&quot;Thanh Hóa&quot;,&quot;Thái Bình&quot;,&quot;Thái Nguyên&quot;,&quot;Thừa Thiên Huế&quot;,&quot;Tiền Giang&quot;,&quot;Trà Vinh&quot;,&quot;Tuyên Quang&quot;,&quot;Tây Ninh&quot;,&quot;Vĩnh Long&quot;,&quot;Vĩnh Phúc&quot;,&quot;Yên Bái&quot;,&quot;Điện Biên&quot;,&quot;Đắk Lắk&quot;,&quot;Đắk Nông&quot;,&quot;Đồng Nai&quot;,&quot;Đồng Tháp&quot;]">
                                                            Vietnam</option>
                                                        <option value="United States"
                                                            data-provinces="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;American Samoa&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;Armed Forces Americas&quot;,&quot;Armed Forces Europe&quot;,&quot;Armed Forces Pacific&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;District of Columbia&quot;,&quot;Federated States of Micronesia&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Guam&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Marshall Islands&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Carolina&quot;,&quot;North Dakota&quot;,&quot;Northern Mariana Islands&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Palau&quot;,&quot;Pennsylvania&quot;,&quot;Puerto Rico&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virgin Islands&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">
                                                            United States</option>
                                                        <option value="Thailand"
                                                            data-provinces="[&quot;Amnat Charoen&quot;,&quot;Ang Thong&quot;,&quot;Bangkok&quot;,&quot;Bueng Kan&quot;,&quot;Buriram&quot;,&quot;Chachoengsao&quot;,&quot;Chai Nat&quot;,&quot;Chaiyaphum&quot;,&quot;Chanthaburi&quot;,&quot;Chiang Mai&quot;,&quot;Chiang Rai&quot;,&quot;Chon Buri&quot;,&quot;Chumphon&quot;,&quot;Kalasin&quot;,&quot;Kamphaeng Phet&quot;,&quot;Kanchanaburi&quot;,&quot;Khon Kaen&quot;,&quot;Krabi&quot;,&quot;Lampang&quot;,&quot;Lamphun&quot;,&quot;Loei&quot;,&quot;Lopburi&quot;,&quot;Mae Hong Son&quot;,&quot;Maha Sarakham&quot;,&quot;Mukdahan&quot;,&quot;Nakhon Nayok&quot;,&quot;Nakhon Pathom&quot;,&quot;Nakhon Phanom&quot;,&quot;Nakhon Ratchasima&quot;,&quot;Nakhon Sawan&quot;,&quot;Nakhon Si Thammarat&quot;,&quot;Nan&quot;,&quot;Narathiwat&quot;,&quot;Nong Bua Lam Phu&quot;,&quot;Nong Khai&quot;,&quot;Nonthaburi&quot;,&quot;Pathum Thani&quot;,&quot;Pattani&quot;,&quot;Pattaya&quot;,&quot;Phangnga&quot;,&quot;Phatthalung&quot;,&quot;Phayao&quot;,&quot;Phetchabun&quot;,&quot;Phetchaburi&quot;,&quot;Phichit&quot;,&quot;Phitsanulok&quot;,&quot;Phra Nakhon Si Ayutthaya&quot;,&quot;Phrae&quot;,&quot;Phuket&quot;,&quot;Prachin Buri&quot;,&quot;Prachuap Khiri Khan&quot;,&quot;Ranong&quot;,&quot;Ratchaburi&quot;,&quot;Rayong&quot;,&quot;Roi Et&quot;,&quot;Sa Kaeo&quot;,&quot;Sakon Nakhon&quot;,&quot;Samut Prakan&quot;,&quot;Samut Sakhon&quot;,&quot;Samut Songkhram&quot;,&quot;Saraburi&quot;,&quot;Satun&quot;,&quot;Sing Buri&quot;,&quot;Sisaket&quot;,&quot;Songkhla&quot;,&quot;Sukhothai&quot;,&quot;Suphan Buri&quot;,&quot;Surat Thani&quot;,&quot;Surin&quot;,&quot;Tak&quot;,&quot;Trang&quot;,&quot;Trat&quot;,&quot;Ubon Ratchathani&quot;,&quot;Udon Thani&quot;,&quot;Uthai Thani&quot;,&quot;Uttaradit&quot;,&quot;Yala&quot;,&quot;Yasothon&quot;]">
                                                            Thailand</option>
                                                    </select>
                                                    <label>Quốc gia</label>
                                                </fieldset>
                                                <fieldset id="address_province_container_1104839541"
                                                    class="form-group select-field not-vn">
                                                    <select name="address[province]" value="Bình Định"
                                                        data-default="Bình Định"
                                                        class="form-control add province myselect has-content"
                                                        id="mySelect3_1104839541" data-address-type="province"
                                                        data-address-zone="1104839541"
                                                        data-select2-id="select2-data-billingProvince">
                                                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                                        <option value="Hà Nội">Hà Nội</option>
                                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                                        <option value="An Giang">An Giang</option>
                                                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                                        <option value="Bình Dương">Bình Dương</option>
                                                        <option value="Bình Phước">Bình Phước</option>
                                                        <option value="Bình Thuận">Bình Thuận</option>
                                                        <option value="Bình Định">Bình Định</option>
                                                        <option value="Bạc Liêu">Bạc Liêu</option>
                                                        <option value="Bắc Giang">Bắc Giang</option>
                                                        <option value="Bắc Kạn">Bắc Kạn</option>
                                                        <option value="Bắc Ninh">Bắc Ninh</option>
                                                        <option value="Bến Tre">Bến Tre</option>
                                                        <option value="Cao Bằng">Cao Bằng</option>
                                                        <option value="Cà Mau">Cà Mau</option>
                                                        <option value="Cần Thơ">Cần Thơ</option>
                                                        <option value="Gia Lai">Gia Lai</option>
                                                        <option value="Hà Giang">Hà Giang</option>
                                                        <option value="Hà Nam">Hà Nam</option>
                                                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                        <option value="Hòa Bình">Hòa Bình</option>
                                                        <option value="Hưng Yên">Hưng Yên</option>
                                                        <option value="Hải Dương">Hải Dương</option>
                                                        <option value="Hải Phòng">Hải Phòng</option>
                                                        <option value="Hậu Giang">Hậu Giang</option>
                                                        <option value="Khánh Hòa">Khánh Hòa</option>
                                                        <option value="Kiên Giang">Kiên Giang</option>
                                                        <option value="Kon Tum">Kon Tum</option>
                                                        <option value="Lai Châu">Lai Châu</option>
                                                        <option value="Long An">Long An</option>
                                                        <option value="Lào Cai">Lào Cai</option>
                                                        <option value="Lâm Đồng">Lâm Đồng</option>
                                                        <option value="Lạng Sơn">Lạng Sơn</option>
                                                        <option value="Nam Định">Nam Định</option>
                                                        <option value="Nghệ An">Nghệ An</option>
                                                        <option value="Ninh Bình">Ninh Bình</option>
                                                        <option value="Ninh Thuận">Ninh Thuận</option>
                                                        <option value="Phú Thọ">Phú Thọ</option>
                                                        <option value="Phú Yên">Phú Yên</option>
                                                        <option value="Quảng Bình">Quảng Bình</option>
                                                        <option value="Quảng Nam">Quảng Nam</option>
                                                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                        <option value="Quảng Ninh">Quảng Ninh</option>
                                                        <option value="Quảng Trị">Quảng Trị</option>
                                                        <option value="Sóc Trăng">Sóc Trăng</option>
                                                        <option value="Sơn La">Sơn La</option>
                                                        <option value="Thanh Hóa">Thanh Hóa</option>
                                                        <option value="Thái Bình">Thái Bình</option>
                                                        <option value="Thái Nguyên">Thái Nguyên</option>
                                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                        <option value="Tiền Giang">Tiền Giang</option>
                                                        <option value="Trà Vinh">Trà Vinh</option>
                                                        <option value="Tuyên Quang">Tuyên Quang</option>
                                                        <option value="Tây Ninh">Tây Ninh</option>
                                                        <option value="Vĩnh Long">Vĩnh Long</option>
                                                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                        <option value="Yên Bái">Yên Bái</option>
                                                        <option value="Điện Biên">Điện Biên</option>
                                                        <option value="Đắk Lắk">Đắk Lắk</option>
                                                        <option value="Đắk Nông">Đắk Nông</option>
                                                        <option value="Đồng Nai">Đồng Nai</option>
                                                        <option value="Đồng Tháp">Đồng Tháp</option>
                                                    </select>
                                                    <label>Tỉnh thành</label>
                                                </fieldset>
                                                <!-- <fieldset class="form-group select-field not-vn">
                                                                <select name="District" class="form-control add  district myselect" data-default="" value="" id="mySelect4_1104839541" data-address-type="district" data-address-zone="1104839541" data-select2-id="select2-data-billingDistrict"></select>
                                                                <label>Quận huyện</label>
                                                            </fieldset>
                                                            <fieldset class="form-group select-field not-vn">
                                                                <select name="Ward" class="form-control add ward myselect" data-default=""value="" id="mySelect5_1104839541" data-address-type="ward" data-address-zone="1104839541" data-select2-id="select2-data-billingWard"></select>
                                                                <label>Phường xã</label>
                                                            </fieldset> -->
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="address[zip]"
                                                        value="">
                                                    <label>Mã Zip</label>
                                                </fieldset>
                                            </div>

                                        </div>
                                        <div class="checkbox ">
                                            <label class="c-input c-checkbox"
                                                style="padding-left: 20px; user-select: auto;">
                                                <input type="checkbox" id="address_default_address_1104839541"
                                                    name="address[default]" value="1">
                                                <span class="c-indicator">Đặt là địa chỉ mặc định?</span>
                                            </label>
                                        </div>
                                        <div class="btn-row">
                                            <button class="btn btn-dark-address btn-fix-addr btn-close" type="button"
                                                data-form="edit_address_1104839541">
                                                Hủy
                                            </button>
                                            <button class="btn btn-primary btn-submit" id="update"><span>Cập nhật địa
                                                    chỉ</span></button>

                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="edit_address_1104839542" class="form-list modal_address modal modal_edit_address">
                                <div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
                                <h2 class="title_pop">
                                    Chỉnh sửa địa chỉ
                                </h2>
                                <form accept-charset="UTF-8" action="/account/addresses/1104839542"
                                    id="address_form_1104839542" method="post" class="has-validation-callback">
                                    <input name="form_type" type="hidden" value="customer_address">
                                    <input name="utf8" type="hidden" value="✓">

                                    <div class="pop_bottom">
                                        <div class="form_address">
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" name="address[last_name]"
                                                        class="form-control has-content" value="Kenny Mark"
                                                        autocapitalize="words">
                                                    <label>Họ</label>
                                                </fieldset>
                                                <p class="error-msg"></p>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" name="address[first_name]"
                                                        class="form-control has-content" value="Mark"
                                                        autocapitalize="words">
                                                    <label>Tên</label>
                                                </fieldset>
                                                <p class="error-msg"></p>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="number" pattern="\d+" class="form-control has-content"
                                                        id="Phone" name="address[phone]" maxlength="12"
                                                        value="09858585858">
                                                    <label>Số điện thoại</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="address[company]"
                                                        value="">
                                                    <label>Công ty</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control has-content"
                                                        name="address[address1]" value="1 vo van ngan, quận thủ đức">
                                                    <label>Địa chỉ</label>
                                                </fieldset>
                                            </div>
                                            <div class="group-country">
                                                <fieldset class="form-group select-field">
                                                    <select name="address[country]"
                                                        class="form-control mySelect2 has-content"
                                                        id="mySelect2_1104839542" data-default="Vietnam"
                                                        value="">Vietnam<option value""="" data-provinces="[]">-
                                                            Please Select --</option>
                                                        <option value="Vietnam"
                                                            data-provinces="[&quot;Hồ Chí Minh&quot;,&quot;Hà Nội&quot;,&quot;Đà Nẵng&quot;,&quot;An Giang&quot;,&quot;Bà Rịa - Vũng Tàu&quot;,&quot;Bình Dương&quot;,&quot;Bình Phước&quot;,&quot;Bình Thuận&quot;,&quot;Bình Định&quot;,&quot;Bạc Liêu&quot;,&quot;Bắc Giang&quot;,&quot;Bắc Kạn&quot;,&quot;Bắc Ninh&quot;,&quot;Bến Tre&quot;,&quot;Cao Bằng&quot;,&quot;Cà Mau&quot;,&quot;Cần Thơ&quot;,&quot;Gia Lai&quot;,&quot;Hà Giang&quot;,&quot;Hà Nam&quot;,&quot;Hà Tĩnh&quot;,&quot;Hòa Bình&quot;,&quot;Hưng Yên&quot;,&quot;Hải Dương&quot;,&quot;Hải Phòng&quot;,&quot;Hậu Giang&quot;,&quot;Khánh Hòa&quot;,&quot;Kiên Giang&quot;,&quot;Kon Tum&quot;,&quot;Lai Châu&quot;,&quot;Long An&quot;,&quot;Lào Cai&quot;,&quot;Lâm Đồng&quot;,&quot;Lạng Sơn&quot;,&quot;Nam Định&quot;,&quot;Nghệ An&quot;,&quot;Ninh Bình&quot;,&quot;Ninh Thuận&quot;,&quot;Phú Thọ&quot;,&quot;Phú Yên&quot;,&quot;Quảng Bình&quot;,&quot;Quảng Nam&quot;,&quot;Quảng Ngãi&quot;,&quot;Quảng Ninh&quot;,&quot;Quảng Trị&quot;,&quot;Sóc Trăng&quot;,&quot;Sơn La&quot;,&quot;Thanh Hóa&quot;,&quot;Thái Bình&quot;,&quot;Thái Nguyên&quot;,&quot;Thừa Thiên Huế&quot;,&quot;Tiền Giang&quot;,&quot;Trà Vinh&quot;,&quot;Tuyên Quang&quot;,&quot;Tây Ninh&quot;,&quot;Vĩnh Long&quot;,&quot;Vĩnh Phúc&quot;,&quot;Yên Bái&quot;,&quot;Điện Biên&quot;,&quot;Đắk Lắk&quot;,&quot;Đắk Nông&quot;,&quot;Đồng Nai&quot;,&quot;Đồng Tháp&quot;]">
                                                            Vietnam</option>
                                                        <option value="United States"
                                                            data-provinces="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;American Samoa&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;Armed Forces Americas&quot;,&quot;Armed Forces Europe&quot;,&quot;Armed Forces Pacific&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;District of Columbia&quot;,&quot;Federated States of Micronesia&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Guam&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Marshall Islands&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Carolina&quot;,&quot;North Dakota&quot;,&quot;Northern Mariana Islands&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Palau&quot;,&quot;Pennsylvania&quot;,&quot;Puerto Rico&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virgin Islands&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">
                                                            United States</option>
                                                        <option value="Thailand"
                                                            data-provinces="[&quot;Amnat Charoen&quot;,&quot;Ang Thong&quot;,&quot;Bangkok&quot;,&quot;Bueng Kan&quot;,&quot;Buriram&quot;,&quot;Chachoengsao&quot;,&quot;Chai Nat&quot;,&quot;Chaiyaphum&quot;,&quot;Chanthaburi&quot;,&quot;Chiang Mai&quot;,&quot;Chiang Rai&quot;,&quot;Chon Buri&quot;,&quot;Chumphon&quot;,&quot;Kalasin&quot;,&quot;Kamphaeng Phet&quot;,&quot;Kanchanaburi&quot;,&quot;Khon Kaen&quot;,&quot;Krabi&quot;,&quot;Lampang&quot;,&quot;Lamphun&quot;,&quot;Loei&quot;,&quot;Lopburi&quot;,&quot;Mae Hong Son&quot;,&quot;Maha Sarakham&quot;,&quot;Mukdahan&quot;,&quot;Nakhon Nayok&quot;,&quot;Nakhon Pathom&quot;,&quot;Nakhon Phanom&quot;,&quot;Nakhon Ratchasima&quot;,&quot;Nakhon Sawan&quot;,&quot;Nakhon Si Thammarat&quot;,&quot;Nan&quot;,&quot;Narathiwat&quot;,&quot;Nong Bua Lam Phu&quot;,&quot;Nong Khai&quot;,&quot;Nonthaburi&quot;,&quot;Pathum Thani&quot;,&quot;Pattani&quot;,&quot;Pattaya&quot;,&quot;Phangnga&quot;,&quot;Phatthalung&quot;,&quot;Phayao&quot;,&quot;Phetchabun&quot;,&quot;Phetchaburi&quot;,&quot;Phichit&quot;,&quot;Phitsanulok&quot;,&quot;Phra Nakhon Si Ayutthaya&quot;,&quot;Phrae&quot;,&quot;Phuket&quot;,&quot;Prachin Buri&quot;,&quot;Prachuap Khiri Khan&quot;,&quot;Ranong&quot;,&quot;Ratchaburi&quot;,&quot;Rayong&quot;,&quot;Roi Et&quot;,&quot;Sa Kaeo&quot;,&quot;Sakon Nakhon&quot;,&quot;Samut Prakan&quot;,&quot;Samut Sakhon&quot;,&quot;Samut Songkhram&quot;,&quot;Saraburi&quot;,&quot;Satun&quot;,&quot;Sing Buri&quot;,&quot;Sisaket&quot;,&quot;Songkhla&quot;,&quot;Sukhothai&quot;,&quot;Suphan Buri&quot;,&quot;Surat Thani&quot;,&quot;Surin&quot;,&quot;Tak&quot;,&quot;Trang&quot;,&quot;Trat&quot;,&quot;Ubon Ratchathani&quot;,&quot;Udon Thani&quot;,&quot;Uthai Thani&quot;,&quot;Uttaradit&quot;,&quot;Yala&quot;,&quot;Yasothon&quot;]">
                                                            Thailand</option>
                                                    </select>
                                                    <label>Quốc gia</label>
                                                </fieldset>
                                                <fieldset id="address_province_container_1104839542"
                                                    class="form-group select-field not-vn">
                                                    <select name="address[province]" value="Bình Dương"
                                                        data-default="Bình Dương"
                                                        class="form-control add province myselect has-content"
                                                        id="mySelect3_1104839542" data-address-type="province"
                                                        data-address-zone="1104839542"
                                                        data-select2-id="select2-data-billingProvince">
                                                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                                        <option value="Hà Nội">Hà Nội</option>
                                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                                        <option value="An Giang">An Giang</option>
                                                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                                        <option value="Bình Dương">Bình Dương</option>
                                                        <option value="Bình Phước">Bình Phước</option>
                                                        <option value="Bình Thuận">Bình Thuận</option>
                                                        <option value="Bình Định">Bình Định</option>
                                                        <option value="Bạc Liêu">Bạc Liêu</option>
                                                        <option value="Bắc Giang">Bắc Giang</option>
                                                        <option value="Bắc Kạn">Bắc Kạn</option>
                                                        <option value="Bắc Ninh">Bắc Ninh</option>
                                                        <option value="Bến Tre">Bến Tre</option>
                                                        <option value="Cao Bằng">Cao Bằng</option>
                                                        <option value="Cà Mau">Cà Mau</option>
                                                        <option value="Cần Thơ">Cần Thơ</option>
                                                        <option value="Gia Lai">Gia Lai</option>
                                                        <option value="Hà Giang">Hà Giang</option>
                                                        <option value="Hà Nam">Hà Nam</option>
                                                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                        <option value="Hòa Bình">Hòa Bình</option>
                                                        <option value="Hưng Yên">Hưng Yên</option>
                                                        <option value="Hải Dương">Hải Dương</option>
                                                        <option value="Hải Phòng">Hải Phòng</option>
                                                        <option value="Hậu Giang">Hậu Giang</option>
                                                        <option value="Khánh Hòa">Khánh Hòa</option>
                                                        <option value="Kiên Giang">Kiên Giang</option>
                                                        <option value="Kon Tum">Kon Tum</option>
                                                        <option value="Lai Châu">Lai Châu</option>
                                                        <option value="Long An">Long An</option>
                                                        <option value="Lào Cai">Lào Cai</option>
                                                        <option value="Lâm Đồng">Lâm Đồng</option>
                                                        <option value="Lạng Sơn">Lạng Sơn</option>
                                                        <option value="Nam Định">Nam Định</option>
                                                        <option value="Nghệ An">Nghệ An</option>
                                                        <option value="Ninh Bình">Ninh Bình</option>
                                                        <option value="Ninh Thuận">Ninh Thuận</option>
                                                        <option value="Phú Thọ">Phú Thọ</option>
                                                        <option value="Phú Yên">Phú Yên</option>
                                                        <option value="Quảng Bình">Quảng Bình</option>
                                                        <option value="Quảng Nam">Quảng Nam</option>
                                                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                        <option value="Quảng Ninh">Quảng Ninh</option>
                                                        <option value="Quảng Trị">Quảng Trị</option>
                                                        <option value="Sóc Trăng">Sóc Trăng</option>
                                                        <option value="Sơn La">Sơn La</option>
                                                        <option value="Thanh Hóa">Thanh Hóa</option>
                                                        <option value="Thái Bình">Thái Bình</option>
                                                        <option value="Thái Nguyên">Thái Nguyên</option>
                                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                        <option value="Tiền Giang">Tiền Giang</option>
                                                        <option value="Trà Vinh">Trà Vinh</option>
                                                        <option value="Tuyên Quang">Tuyên Quang</option>
                                                        <option value="Tây Ninh">Tây Ninh</option>
                                                        <option value="Vĩnh Long">Vĩnh Long</option>
                                                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                        <option value="Yên Bái">Yên Bái</option>
                                                        <option value="Điện Biên">Điện Biên</option>
                                                        <option value="Đắk Lắk">Đắk Lắk</option>
                                                        <option value="Đắk Nông">Đắk Nông</option>
                                                        <option value="Đồng Nai">Đồng Nai</option>
                                                        <option value="Đồng Tháp">Đồng Tháp</option>
                                                    </select>
                                                    <label>Tỉnh thành</label>
                                                </fieldset>
                                                <!-- <fieldset class="form-group select-field not-vn">
                                                                <select name="District" class="form-control add  district myselect" data-default="Huyện Phú Giáo" value="Huyện Phú Giáo" id="mySelect4_1104839542" data-address-type="district" data-address-zone="1104839542" data-select2-id="select2-data-billingDistrict"></select>
                                                                <label>Quận huyện</label>
                                                            </fieldset>
                                                            <fieldset class="form-group select-field not-vn">
                                                                <select name="Ward" class="form-control add ward myselect" data-default="Xã An Thái"value="Xã An Thái" id="mySelect5_1104839542" data-address-type="ward" data-address-zone="1104839542" data-select2-id="select2-data-billingWard"></select>
                                                                <label>Phường xã</label>
                                                            </fieldset> -->
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control has-content"
                                                        name="address[zip]" value="70000">
                                                    <label>Mã Zip</label>
                                                </fieldset>
                                            </div>

                                        </div>
                                        <div class="checkbox ">
                                            <label class="c-input c-checkbox"
                                                style="padding-left: 20px; user-select: auto;">
                                                <input type="checkbox" id="address_default_address_1104839542"
                                                    name="address[default]" value="1">
                                                <span class="c-indicator">Đặt là địa chỉ mặc định?</span>
                                            </label>
                                        </div>
                                        <div class="btn-row">
                                            <button class="btn btn-dark-address btn-fix-addr btn-close" type="button"
                                                data-form="edit_address_1104839542">
                                                Hủy
                                            </button>
                                            <button class="btn btn-primary btn-submit" id="update"><span>Cập nhật địa
                                                    chỉ</span></button>

                                        </div>
                                    </div>
                                </form>
                            </div> --}}

                        </div>


                    </div>
                </div>
            </div>
        </section>

        {{-- <script>
            ! function(a, b) {
                "function" == typeof define && define.amd ? define(["jquery"], function(a) {
                    return b(a)
                }) : "object" == typeof exports ? module.exports = b(require("jquery")) : b(jQuery)
            }(this, function(a) {
                ! function(a, b) {
                    "use strict";

                    function c(b) {
                        b && "custom" === b.errorMessagePosition && "function" == typeof b.errorMessageCustom && (a
                            .formUtils.warn(
                                "Use of deprecated function errorMessageCustom, use config.submitErrorMessageCallback instead"
                            ), b.submitErrorMessageCallback = function(a, c) {
                                b.errorMessageCustom(a, b.language.errorTitle, c, b)
                            })
                    }

                    function d(b) {
                        if (b.errorMessagePosition && "object" == typeof b.errorMessagePosition) {
                            a.formUtils.warn(
                                "Deprecated use of config parameter errorMessagePosition, use config.submitErrorMessageCallback instead"
                            );
                            var c = b.errorMessagePosition;
                            b.errorMessagePosition = "top", b.submitErrorMessageCallback = function() {
                                return c
                            }
                        }
                    }

                    function e(b) {
                        var c = b.find("[data-validation-if-checked]");
                        c.length && a.formUtils.warn(
                            'Detected use of attribute "data-validation-if-checked" which is deprecated. Use "data-validation-depends-on" provided by module "logic"'
                        ), c.on("beforeValidation", function() {
                            var c = a(this),
                                d = c.valAttr("if-checked"),
                                e = a('input[name="' + d + '"]', b),
                                f = e.is(":checked"),
                                g = (a.formUtils.getValue(e) || "").toString(),
                                h = c.valAttr("if-checked-value");
                            (!f || h && h !== g) && c.valAttr("skipped", !0)
                        })
                    }
                    a.fn.validateForm = function(b, c) {
                        return a.formUtils.warn("Use of deprecated function $.validateForm, use $.isValid instead"),
                            this.isValid(b, c, !0)
                    }, a(window).on("validatorsLoaded formValidationSetup", function(b, f, g) {
                        f || (f = a("form")), c(g), d(g), e(f)
                    })
                }(a),
                function(a) {
                    "use strict";
                    var b = {
                        resolveErrorMessage: function(a, b, c, d, e) {
                            var f = d.validationErrorMsgAttribute + "-" + c.replace("validate_", ""),
                                g = a.attr(f);
                            return g || (g = a.attr(d.validationErrorMsgAttribute), g || (g = "function" != typeof b
                                .errorMessageKey ? e[b.errorMessageKey] : e[b.errorMessageKey(d)], g || (g =
                                    b.errorMessage))), g
                        },
                        getParentContainer: function(b) {
                            if (b.valAttr("error-msg-container")) return a(b.valAttr("error-msg-container"));
                            var c = b.parent();
                            if (!c.hasClass("form-group") && !c.closest("form").hasClass("form-horizontal")) {
                                var d = c.closest(".form-group");
                                if (d.length) return d.eq(0)
                            }
                            return c
                        },
                        applyInputErrorStyling: function(a, b) {
                            a.addClass(b.errorElementClass).removeClass("valid"), this.getParentContainer(a)
                                .addClass(b.inputParentClassOnError).removeClass(b.inputParentClassOnSuccess),
                                "" !== b.borderColorOnError && a.css("border-color", b.borderColorOnError)
                        },
                        applyInputSuccessStyling: function(a, b) {
                            a.addClass("valid"), this.getParentContainer(a).addClass(b.inputParentClassOnSuccess)
                        },
                        removeInputStylingAndMessage: function(a, c) {
                            a.removeClass("valid").removeClass(c.errorElementClass).css("border-color", "");
                            var d = b.getParentContainer(a);
                            if (d.removeClass(c.inputParentClassOnError).removeClass(c.inputParentClassOnSuccess),
                                "function" == typeof c.inlineErrorMessageCallback) {
                                var e = c.inlineErrorMessageCallback(a, !1, c);
                                e && e.html("")
                            } else d.find("." + c.errorMessageClass).remove()
                        },
                        removeAllMessagesAndStyling: function(c, d) {
                            if ("function" == typeof d.submitErrorMessageCallback) {
                                var e = d.submitErrorMessageCallback(c, d);
                                e && e.html("")
                            } else c.find("." + d.errorMessageClass + ".alert").remove();
                            c.find("." + d.errorElementClass + ",.valid").each(function() {
                                b.removeInputStylingAndMessage(a(this), d)
                            })
                        },
                        setInlineMessage: function(b, c, d) {
                            this.applyInputErrorStyling(b, d);
                            var e, f = document.getElementById(b.attr("name") + "_err_msg"),
                                g = !1,
                                h = function(d) {
                                    a.formUtils.$win.trigger("validationErrorDisplay", [b, d]), d.html(c)
                                },
                                i = function() {
                                    var f = !1;
                                    g.find("." + d.errorMessageClass).each(function() {
                                        return this.inputReferer === b[0] ? (f = a(this), !1) : void 0
                                    }), f ? c ? h(f) : f.remove() : "" !== c && (e = a('<div class="' + d
                                        .errorMessageClass + ' alert"></div>'), h(e), e[0].inputReferer = b[
                                        0], g.prepend(e))
                                };
                            if (f) a.formUtils.warn("Using deprecated element reference " + f.id), g = a(f), i();
                            else if ("function" == typeof d.inlineErrorMessageCallback) {
                                if (g = d.inlineErrorMessageCallback(b, c, d), !g) return;
                                i()
                            } else {
                                var j = this.getParentContainer(b);
                                e = j.find("." + d.errorMessageClass + ".help-block"), 0 === e.length && (e = a(
                                        "<span></span>").addClass("help-block").addClass(d.errorMessageClass), e
                                    .appendTo(j)), h(e)
                            }
                        },
                        setMessageInTopOfForm: function(b, c, d, e) {
                            var f =
                                '<div class="{errorMessageClass} alert alert-danger"><strong>{errorTitle}</strong><ul>{fields}</ul></div>',
                                g = !1;
                            if ("function" != typeof d.submitErrorMessageCallback || (g = d
                                    .submitErrorMessageCallback(b, c, d))) {
                                var h = {
                                    errorTitle: e.errorTitle,
                                    fields: "",
                                    errorMessageClass: d.errorMessageClass
                                };
                                a.each(c, function(a, b) {
                                    h.fields += "<li>" + b + "</li>"
                                }), a.each(h, function(a, b) {
                                    f = f.replace("{" + a + "}", b)
                                }), g ? g.html(f) : b.children().eq(0).before(a(f))
                            }
                        }
                    };
                    a.formUtils = a.extend(a.formUtils || {}, {
                        dialogs: b
                    })
                }(a),
                function(a, b, c) {
                    "use strict";
                    var d = 0;
                    a.fn.validateOnBlur = function(b, c) {
                        var d = this,
                            e = this.find("*[data-validation]");
                        return e.each(function() {
                            var e = a(this);
                            if (e.is("[type=radio]")) {
                                var f = d.find('[type=radio][name="' + e.attr("name") + '"]');
                                f.bind("blur.validation", function() {
                                    e.validateInputOnBlur(b, c, !0, "blur")
                                }), c.validateCheckboxRadioOnClick && f.bind("click.validation",
                                    function() {
                                        e.validateInputOnBlur(b, c, !0, "click")
                                    })
                            }
                        }), e.bind("blur.validation", function() {
                            a(this).validateInputOnBlur(b, c, !0, "blur")
                        }), c.validateCheckboxRadioOnClick && this.find(
                            "input[type=checkbox][data-validation],input[type=radio][data-validation]").bind(
                            "click.validation",
                            function() {
                                a(this).validateInputOnBlur(b, c, !0, "click")
                            }), this
                    }, a.fn.validateOnEvent = function(b, c) {
                        var d = "FORM" === this[0].nodeName ? this.find("*[data-validation-event]") : this;
                        return d.each(function() {
                            var d = a(this),
                                e = d.valAttr("event");
                            e && d.unbind(e + ".validation").bind(e + ".validation", function(d) {
                                9 !== (d || {}).keyCode && a(this).validateInputOnBlur(b, c, !0, e)
                            })
                        }), this
                    }, a.fn.showHelpOnFocus = function(b) {
                        return b || (b = "data-validation-help"), this.find(".has-help-txt").valAttr("has-keyup-event",
                            !1).removeClass("has-help-txt"), this.find("textarea,input").each(function() {
                            var c = a(this),
                                e = "jquery_form_help_" + ++d,
                                f = c.attr(b);
                            f && c.addClass("has-help-txt").unbind("focus.help").bind("focus.help", function() {
                                var b = c.parent().find("." + e);
                                0 === b.length && (b = a("<span />").addClass(e).addClass("help")
                                    .addClass("help-block").text(f).hide(), c.after(b)), b.fadeIn()
                            }).unbind("blur.help").bind("blur.help", function() {
                                a(this).parent().find("." + e).fadeOut("slow")
                            })
                        }), this
                    }, a.fn.validate = function(b, c, d) {
                        var e = a.extend({}, a.formUtils.LANG, d || {});
                        this.each(function() {
                            var d = a(this),
                                f = d.closest("form").get(0).validationConfig || {};
                            d.one("validation", function(a, c) {
                                "function" == typeof b && b(c, this, a)
                            }), d.validateInputOnBlur(e, a.extend({}, f, c || {}), !0)
                        })
                    }, a.fn.willPostponeValidation = function() {
                        return (this.valAttr("suggestion-nr") || this.valAttr("postpone") || this.hasClass(
                            "hasDatepicker")) && !b.postponedValidation
                    }, a.fn.validateInputOnBlur = function(c, d, e, f) {
                        if (a.formUtils.eventType = f, this.willPostponeValidation()) {
                            var g = this,
                                h = this.valAttr("postpone") || 200;
                            return b.postponedValidation = function() {
                                g.validateInputOnBlur(c, d, e, f), b.postponedValidation = !1
                            }, setTimeout(function() {
                                b.postponedValidation && b.postponedValidation()
                            }, h), this
                        }
                        c = a.extend({}, a.formUtils.LANG, c || {}), a.formUtils.dialogs.removeInputStylingAndMessage(
                            this, d);
                        var i = this,
                            j = i.closest("form"),
                            k = a.formUtils.validateInput(i, c, d, j, f);
                        return e && i.unbind("keyup.validation"), k.shouldChangeDisplay && (k.isValid ? a.formUtils
                            .dialogs.applyInputSuccessStyling(i, d) : a.formUtils.dialogs.setInlineMessage(i, k
                                .errorMsg, d)), !k.isValid && e && i.bind("keyup.validation", function(b) {
                            9 !== b.keyCode && a(this).validateInputOnBlur(c, d, !1, "keyup")
                        }), this
                    }, a.fn.valAttr = function(a, b) {
                        return b === c ? this.attr("data-validation-" + a) : b === !1 || null === b ? this.removeAttr(
                            "data-validation-" + a) : (a = a.length > 0 ? "-" + a : "", this.attr(
                            "data-validation" + a, b))
                    }, a.fn.isValid = function(b, c, d) {
                        if (a.formUtils.isLoadingModules) {
                            var e = this;
                            return setTimeout(function() {
                                e.isValid(b, c, d)
                            }, 200), null
                        }
                        c = a.extend({}, a.formUtils.defaultConfig(), c || {}), b = a.extend({}, a.formUtils.LANG, b ||
                            {}), d = d !== !1, a.formUtils.errorDisplayPreventedWhenHalted && (delete a.formUtils
                                .errorDisplayPreventedWhenHalted, d = !1), a.formUtils.isValidatingEntireForm = !0, a
                            .formUtils.haltValidation = !1;
                        var f = function(b, e) {
                                a.inArray(b, h) < 0 && h.push(b), i.push(e), e.attr("current-error", b), d && a
                                    .formUtils.dialogs.applyInputErrorStyling(e, c)
                            },
                            g = [],
                            h = [],
                            i = [],
                            j = this,
                            k = function(b, d) {
                                return "submit" === d || "button" === d || "reset" === d ? !0 : a.inArray(b, c.ignore ||
                                    []) > -1
                            };
                        if (d && a.formUtils.dialogs.removeAllMessagesAndStyling(j, c), j.find("input,textarea,select")
                            .filter(':not([type="submit"],[type="button"])').each(function() {
                                var d = a(this),
                                    e = d.attr("type"),
                                    h = "radio" === e || "checkbox" === e,
                                    i = d.attr("name");
                                if (!k(i, e) && (!h || a.inArray(i, g) < 0)) {
                                    h && g.push(i);
                                    var l = a.formUtils.validateInput(d, b, c, j, "submit");
                                    l.isValid ? l.isValid && l.shouldChangeDisplay && (d.valAttr("current-error", !
                                        1), a.formUtils.dialogs.applyInputSuccessStyling(d, c)) : f(l.errorMsg,
                                        d)
                                }
                            }), "function" == typeof c.onValidate) {
                            var l = c.onValidate(j);
                            a.isArray(l) ? a.each(l, function(a, b) {
                                f(b.message, b.element)
                            }) : l && l.element && l.message && f(l.message, l.element)
                        }
                        return a.formUtils.isValidatingEntireForm = !1, !a.formUtils.haltValidation && i.length > 0 ? (
                            d && ("top" === c.errorMessagePosition ? a.formUtils.dialogs.setMessageInTopOfForm(j, h,
                                c, b) : a.each(i, function(b, d) {
                                a.formUtils.dialogs.setInlineMessage(d, d.attr("current-error"), c)
                            }), c.scrollToTopOnError && a.formUtils.$win.scrollTop(j.offset().top - 20)), !1) : (!
                            d && a.formUtils.haltValidation && (a.formUtils.errorDisplayPreventedWhenHalted = !0), !
                            a.formUtils.haltValidation)
                    }, a.fn.restrictLength = function(b) {
                        return new a.formUtils.lengthRestriction(this, b), this
                    }, a.fn.addSuggestions = function(b) {
                        var c = !1;
                        return this.find("input").each(function() {
                            var d = a(this);
                            c = a.split(d.attr("data-suggestions")), c.length > 0 && !d.hasClass(
                                "has-suggestions") && (a.formUtils.suggest(d, c, b), d.addClass(
                                "has-suggestions"))
                        }), this
                    }
                }(a, window),
                function(a) {
                    "use strict";
                    a.formUtils = a.extend(a.formUtils || {}, {
                        isLoadingModules: !1,
                        loadedModules: {},
                        loadModules: function(b, c, d) {
                            if (a.formUtils.isLoadingModules) return void setTimeout(function() {
                                a.formUtils.loadModules(b, c, d)
                            }, 10);
                            var e = !1,
                                f = function(b, c) {
                                    var f = a.split(b),
                                        g = f.length,
                                        h = function() {
                                            g--, 0 === g && (a.formUtils.isLoadingModules = !1, d && e &&
                                                "function" == typeof d && d())
                                        };
                                    g > 0 && (a.formUtils.isLoadingModules = !0);
                                    var i = "?_=" + (new Date).getTime(),
                                        j = document.getElementsByTagName("head")[0] || document
                                        .getElementsByTagName("body")[0];
                                    a.each(f, function(b, d) {
                                        if (d = a.trim(d), 0 === d.length) h();
                                        else {
                                            var f = c + d + (".js" === d.slice(-3) ? "" : ".js"),
                                                g = document.createElement("SCRIPT");
                                            f in a.formUtils.loadedModules ? h() : (a.formUtils
                                                .loadedModules[f] = 1, e = !0, g.type =
                                                "text/javascript", g.onload = h, g.src = f + (
                                                    ".dev.js" === f.slice(-7) ? i : ""), g.onerror =
                                                function() {
                                                    a.formUtils.warn(
                                                        "Unable to load form validation module " +
                                                        f)
                                                }, g.onreadystatechange = function() {
                                                    "complete" !== this.readyState && "loaded" !==
                                                        this.readyState || (h(), this.onload = null,
                                                            this.onreadystatechange = null)
                                                }, j.appendChild(g))
                                        }
                                    })
                                };
                            if (c) f(b, c);
                            else {
                                var g = function() {
                                    var c = !1;
                                    return a('script[src*="form-validator"]').each(function() {
                                        return c = this.src.substr(0, this.src.lastIndexOf("/")) +
                                            "/", "/" === c && (c = ""), !1
                                    }), c !== !1 ? (f(b, c), !0) : !1
                                };
                                g() || a(g)
                            }
                        }
                    })
                }(a),
                function(a) {
                    "use strict";
                    a.split = function(b, c) {
                        if ("function" != typeof c) {
                            if (!b) return [];
                            var d = [];
                            return a.each(b.split(c ? c : /[,|\-\s]\s*/g), function(b, c) {
                                c = a.trim(c), c.length && d.push(c)
                            }), d
                        }
                        b && a.each(b.split(/[,|\-\s]\s*/g), function(b, d) {
                            return d = a.trim(d), d.length ? c(d, b) : void 0
                        })
                    }, a.validate = function(b) {
                        var c = a.extend(a.formUtils.defaultConfig(), {
                            form: "form",
                            validateOnEvent: !1,
                            validateOnBlur: !0,
                            validateCheckboxRadioOnClick: !0,
                            showHelpOnFocus: !0,
                            addSuggestions: !0,
                            modules: "",
                            onModulesLoaded: null,
                            language: !1,
                            onSuccess: !1,
                            onError: !1,
                            onElementValidate: !1
                        });
                        if (b = a.extend(c, b || {}), b.lang && "en" !== b.lang) {
                            var d = "lang/" + b.lang + ".js";
                            b.modules += b.modules.length ? "," + d : d
                        }
                        a(b.form).each(function(c, d) {
                            d.validationConfig = b;
                            var e = a(d);
                            e.trigger("formValidationSetup", [e, b]), e.find(".has-help-txt").unbind(
                                    "focus.validation").unbind("blur.validation"), e.removeClass(
                                    "has-validation-callback").unbind("submit.validation").unbind(
                                    "reset.validation").find("input[data-validation],textarea[data-validation]")
                                .unbind("blur.validation"), e.bind("submit.validation", function(c) {
                                    var d = a(this),
                                        e = function() {
                                            return c.stopImmediatePropagation(), !1
                                        };
                                    if (a.formUtils.haltValidation) return e();
                                    if (a.formUtils.isLoadingModules) return setTimeout(function() {
                                        d.trigger("submit.validation")
                                    }, 200), e();
                                    var f = d.isValid(b.language, b);
                                    if (a.formUtils.haltValidation) return e();
                                    if (!f || "function" != typeof b.onSuccess) return f || "function" !=
                                        typeof b.onError ? f ? !0 : e() : (b.onError(d), e());
                                    var g = b.onSuccess(d);
                                    return g === !1 ? e() : void 0
                                }).bind("reset.validation", function() {
                                    a.formUtils.dialogs.removeAllMessagesAndStyling(e, b)
                                }).addClass("has-validation-callback"), b.showHelpOnFocus && e
                                .showHelpOnFocus(), b.addSuggestions && e.addSuggestions(), b.validateOnBlur &&
                                (e
                                    .validateOnBlur(b.language, b), e.bind("html5ValidationAttrsFound",
                                        function() {
                                            e.validateOnBlur(b.language, b)
                                        })), b.validateOnEvent && e.validateOnEvent(b.language, b)
                        }), "" !== b.modules && a.formUtils.loadModules(b.modules, !1, function() {
                            "function" == typeof b.onModulesLoaded && b.onModulesLoaded();
                            var c = "string" == typeof b.form ? a(b.form) : b.form;
                            a.formUtils.$win.trigger("validatorsLoaded", [c, b])
                        })
                    }
                }(a),
                function(a, b) {
                    "use strict";
                    var c = a(b);
                    a.formUtils = a.extend(a.formUtils || {}, {
                        $win: c,
                        defaultConfig: function() {
                            return {
                                ignore: [],
                                errorElementClass: "error",
                                borderColorOnError: "#b94a48",
                                errorMessageClass: "form-error",
                                validationRuleAttribute: "data-validation",
                                validationErrorMsgAttribute: "data-validation-error-msg",
                                errorMessagePosition: "inline",
                                errorMessageTemplate: {
                                    container: '<div class="{errorMessageClass} alert alert-danger">{messages}</div>',
                                    messages: "<strong>{errorTitle}</strong><ul>{fields}</ul>",
                                    field: "<li>{msg}</li>"
                                },
                                scrollToTopOnError: !0,
                                dateFormat: "yyyy-mm-dd",
                                addValidClassOnAll: !1,
                                decimalSeparator: ".",
                                inputParentClassOnError: "has-error",
                                inputParentClassOnSuccess: "has-success",
                                validateHiddenInputs: !1,
                                inlineErrorMessageCallback: !1,
                                submitErrorMessageCallback: !1
                            }
                        },
                        validators: {},
                        _events: {
                            load: [],
                            valid: [],
                            invalid: []
                        },
                        haltValidation: !1,
                        isValidatingEntireForm: !1,
                        addValidator: function(a) {
                            var b = 0 === a.name.indexOf("validate_") ? a.name : "validate_" + a.name;
                            void 0 === a.validateOnKeyUp && (a.validateOnKeyUp = !0), this.validators[b] = a
                        },
                        warn: function(a) {
                            "console" in b ? "function" == typeof b.console.warn ? b.console.warn(a) :
                                "function" == typeof b.console.log && b.console.log(a) : alert(a)
                        },
                        getValue: function(a, b) {
                            var c = b ? b.find(a) : a;
                            if (c.length > 0) {
                                var d = c.eq(0).attr("type");
                                return "radio" === d || "checkbox" === d ? c.filter(":checked").val() : c.val()
                            }
                            return !1
                        },
                        validateInput: function(b, c, d, e, f) {
                            d = d || a.formUtils.defaultConfig(), c = c || a.formUtils.LANG;
                            var g = this.getValue(b);
                            b.valAttr("skipped", !1).one("beforeValidation", function() {
                                (b.attr("disabled") || !b.is(":visible") && !d.validateHiddenInputs) &&
                                b.valAttr("skipped", 1)
                            }).trigger("beforeValidation", [g, d, c]);
                            var h = "true" === b.valAttr("optional"),
                                i = !g && h,
                                j = b.attr(d.validationRuleAttribute),
                                k = !0,
                                l = "",
                                m = {
                                    isValid: !0,
                                    shouldChangeDisplay: !0,
                                    errorMsg: ""
                                };
                            if (!j || i || b.valAttr("skipped")) return m.shouldChangeDisplay = d
                                .addValidClassOnAll, m;
                            var n = b.valAttr("ignore");
                            return n && a.each(n.split(""), function(a, b) {
                                    g = g.replace(new RegExp("\\" + b), "")
                                }), a.split(j, function(h) {
                                    0 !== h.indexOf("validate_") && (h = "validate_" + h);
                                    var i = a.formUtils.validators[h];
                                    if (!i) throw new Error('Using undefined validator "' + h +
                                        '". Maybe you have forgotten to load the module that "' +
                                        h + '" belongs to?');
                                    return "validate_checkbox_group" === h && (b = e.find('[name="' + b
                                            .attr("name") + '"]:eq(0)')), ("keyup" !== f || i
                                            .validateOnKeyUp) && (k = i.validatorFunction(g, b, d, c, e)),
                                        k ? void 0 : (l = a.formUtils.dialogs.resolveErrorMessage(b, i, h,
                                            d, c), !1)
                                }, " "), k === !1 ? (b.trigger("validation", !1), m.errorMsg = l, m.isValid = !
                                    1, m.shouldChangeDisplay = !0) : null === k ? m.shouldChangeDisplay = !1 : (
                                    b.trigger("validation", !0), m.shouldChangeDisplay = !0), "function" ==
                                typeof d.onElementValidate && null !== l && d.onElementValidate(m.isValid, b, e,
                                    l), b.trigger("afterValidation", [m, f]), m
                        },
                        parseDate: function(b, c, d) {
                            var e, f, g, h, i = c.replace(/[a-zA-Z]/gi, "").substring(0, 1),
                                j = "^",
                                k = c.split(i || null);
                            if (a.each(k, function(a, b) {
                                    j += (a > 0 ? "\\" + i : "") + "(\\d{" + b.length + "})"
                                }), j += "$", d) {
                                var l = [];
                                a.each(b.split(i), function(a, b) {
                                    1 === b.length && (b = "0" + b), l.push(b)
                                }), b = l.join(i)
                            }
                            if (e = b.match(new RegExp(j)), null === e) return !1;
                            var m = function(b, c, d) {
                                for (var e = 0; e < c.length; e++)
                                    if (c[e].substring(0, 1) === b) return a.formUtils.parseDateInt(d[e +
                                        1]);
                                return -1
                            };
                            return g = m("m", k, e), f = m("d", k, e), h = m("y", k, e), 2 === g && f > 28 && (
                                    h % 4 !== 0 || h % 100 === 0 && h % 400 !== 0) || 2 === g && f > 29 && (h %
                                    4 === 0 || h % 100 !== 0 && h % 400 === 0) || g > 12 || 0 === g ? !1 : this
                                .isShortMonth(g) && f > 30 || !this.isShortMonth(g) && f > 31 || 0 === f ? !1 :
                                [h, g, f]
                        },
                        parseDateInt: function(a) {
                            return 0 === a.indexOf("0") && (a = a.replace("0", "")), parseInt(a, 10)
                        },
                        isShortMonth: function(a) {
                            return a % 2 === 0 && 7 > a || a % 2 !== 0 && a > 7
                        },
                        lengthRestriction: function(b, c) {
                            var d = parseInt(c.text(), 10),
                                e = 0,
                                f = function() {
                                    var a = b.val().length;
                                    if (a > d) {
                                        var f = b.scrollTop();
                                        b.val(b.val().substring(0, d)), b.scrollTop(f)
                                    }
                                    e = d - a, 0 > e && (e = 0), c.text(e)
                                };
                            a(b).bind("keydown keyup keypress focus blur", f).bind("cut paste", function() {
                                setTimeout(f, 100)
                            }), a(document).bind("ready", f)
                        },
                        numericRangeCheck: function(b, c) {
                            var d = a.split(c),
                                e = parseInt(c.substr(3), 10);
                            return 1 === d.length && -1 === c.indexOf("min") && -1 === c.indexOf("max") && (
                                    d = [c, c]), 2 === d.length && (b < parseInt(d[0], 10) || b > parseInt(d[1],
                                    10)) ? ["out", d[0], d[1]] : 0 === c.indexOf("min") && e > b ? ["min", e] :
                                0 === c.indexOf("max") && b > e ? ["max", e] : ["ok"]
                        },
                        _numSuggestionElements: 0,
                        _selectedSuggestion: null,
                        _previousTypedVal: null,
                        suggest: function(b, d, e) {
                            var f = {
                                    css: {
                                        maxHeight: "150px",
                                        background: "#FFF",
                                        lineHeight: "150%",
                                        textDecoration: "underline",
                                        overflowX: "hidden",
                                        overflowY: "auto",
                                        border: "#CCC solid 1px",
                                        borderTop: "none",
                                        cursor: "pointer"
                                    },
                                    activeSuggestionCSS: {
                                        background: "#E9E9E9"
                                    }
                                },
                                g = function(a, b) {
                                    var c = b.offset();
                                    a.css({
                                        width: b.outerWidth(),
                                        left: c.left + "px",
                                        top: c.top + b.outerHeight() + "px"
                                    })
                                };
                            e && a.extend(f, e), f.css.position = "absolute", f.css["z-index"] = 9999, b.attr(
                                "autocomplete", "off"), 0 === this._numSuggestionElements && c.bind(
                                "resize",
                                function() {
                                    a(".jquery-form-suggestions").each(function() {
                                        var b = a(this),
                                            c = b.attr("data-suggest-container");
                                        g(b, a(".suggestions-" + c).eq(0))
                                    })
                                }), this._numSuggestionElements++;
                            var h = function(b) {
                                var c = b.valAttr("suggestion-nr");
                                a.formUtils._selectedSuggestion = null, a.formUtils._previousTypedVal =
                                    null, a(".jquery-form-suggestion-" + c).fadeOut("fast")
                            };
                            return b.data("suggestions", d).valAttr("suggestion-nr", this
                                ._numSuggestionElements).unbind("focus.suggest").bind("focus.suggest",
                                function() {
                                    a(this).trigger("keyup"), a.formUtils._selectedSuggestion = null
                                }).unbind("keyup.suggest").bind("keyup.suggest", function() {
                                var c = a(this),
                                    d = [],
                                    e = a.trim(c.val()).toLocaleLowerCase();
                                if (e !== a.formUtils._previousTypedVal) {
                                    a.formUtils._previousTypedVal = e;
                                    var i = !1,
                                        j = c.valAttr("suggestion-nr"),
                                        k = a(".jquery-form-suggestion-" + j);
                                    if (k.scrollTop(0), "" !== e) {
                                        var l = e.length > 2;
                                        a.each(c.data("suggestions"), function(a, b) {
                                            var c = b.toLocaleLowerCase();
                                            return c === e ? (d.push("<strong>" + b +
                                                "</strong>"), i = !0, !1) : void((0 === c
                                                .indexOf(e) || l && c.indexOf(e) > -1
                                            ) && d.push(b.replace(new RegExp(e,
                                                "gi"), "<strong>$&</strong>")))
                                        })
                                    }
                                    i || 0 === d.length && k.length > 0 ? k.hide() : d.length > 0 &&
                                        0 === k.length ? (k = a("<div></div>").css(f.css).appendTo(
                                            "body"), b.addClass("suggestions-" + j), k.attr(
                                            "data-suggest-container", j).addClass(
                                            "jquery-form-suggestions").addClass(
                                            "jquery-form-suggestion-" + j)) : d.length > 0 && !k.is(
                                            ":visible") && k.show(), d.length > 0 && e.length !== d[0]
                                        .length && (g(k, c), k.html(""), a.each(d, function(b, d) {
                                            a("<div></div>").append(d).css({
                                                    overflow: "hidden",
                                                    textOverflow: "ellipsis",
                                                    whiteSpace: "nowrap",
                                                    padding: "5px"
                                                }).addClass("form-suggest-element").appendTo(k)
                                                .click(function() {
                                                    c.focus(), c.val(a(this).text()), c
                                                        .trigger("change"), h(c)
                                                })
                                        }))
                                }
                            }).unbind("keydown.validation").bind("keydown.validation", function(b) {
                                var c, d, e = b.keyCode ? b.keyCode : b.which,
                                    g = a(this);
                                if (13 === e && null !== a.formUtils._selectedSuggestion) {
                                    if (c = g.valAttr("suggestion-nr"), d = a(
                                            ".jquery-form-suggestion-" + c), d.length > 0) {
                                        var i = d.find("div").eq(a.formUtils._selectedSuggestion)
                                            .text();
                                        g.val(i), g.trigger("change"), h(g), b.preventDefault()
                                    }
                                } else {
                                    c = g.valAttr("suggestion-nr"), d = a(".jquery-form-suggestion-" +
                                        c);
                                    var j = d.children();
                                    if (j.length > 0 && a.inArray(e, [38, 40]) > -1) {
                                        38 === e ? (null === a.formUtils._selectedSuggestion ? a
                                                .formUtils._selectedSuggestion = j.length - 1 : a
                                                .formUtils._selectedSuggestion--, a.formUtils
                                                ._selectedSuggestion < 0 && (a.formUtils
                                                    ._selectedSuggestion = j.length - 1)) : 40 === e &&
                                            (null === a.formUtils._selectedSuggestion ? a.formUtils
                                                ._selectedSuggestion = 0 : a.formUtils
                                                ._selectedSuggestion++, a.formUtils
                                                ._selectedSuggestion > j.length - 1 && (a.formUtils
                                                    ._selectedSuggestion = 0));
                                        var k = d.innerHeight(),
                                            l = d.scrollTop(),
                                            m = d.children().eq(0).outerHeight(),
                                            n = m * a.formUtils._selectedSuggestion;
                                        return (l > n || n > l + k) && d.scrollTop(n), j.removeClass(
                                                "active-suggestion").css("background", "none").eq(a
                                                .formUtils._selectedSuggestion).addClass(
                                                "active-suggestion").css(f.activeSuggestionCSS), b
                                            .preventDefault(), !1
                                    }
                                }
                            }).unbind("blur.suggest").bind("blur.suggest", function() {
                                h(a(this))
                            }), b
                        },
                        LANG: {
                            errorTitle: "Form submission failed!",
                            requiredField: "This is a required field",
                            requiredFields: "You have not answered all required fields",
                            badTime: "You have not given a correct time",
                            badEmail: "You have not given a correct e-mail address",
                            badTelephone: "You have not given a correct phone number",
                            badSecurityAnswer: "You have not given a correct answer to the security question",
                            badDate: "You have not given a correct date",
                            lengthBadStart: "The input value must be between ",
                            lengthBadEnd: " characters",
                            lengthTooLongStart: "The input value is longer than ",
                            lengthTooShortStart: "The input value is shorter than ",
                            notConfirmed: "Input values could not be confirmed",
                            badDomain: "Incorrect domain value",
                            badUrl: "The input value is not a correct URL",
                            badCustomVal: "The input value is incorrect",
                            andSpaces: " and spaces ",
                            badInt: "The input value was not a correct number",
                            badSecurityNumber: "Your social security number was incorrect",
                            badUKVatAnswer: "Incorrect UK VAT Number",
                            badUKNin: "Incorrect UK NIN",
                            badUKUtr: "Incorrect UK UTR Number",
                            badStrength: "The password isn't strong enough",
                            badNumberOfSelectedOptionsStart: "You have to choose at least ",
                            badNumberOfSelectedOptionsEnd: " answers",
                            badAlphaNumeric: "The input value can only contain alphanumeric characters ",
                            badAlphaNumericExtra: " and ",
                            wrongFileSize: "The file you are trying to upload is too large (max %s)",
                            wrongFileType: "Only files of type %s is allowed",
                            groupCheckedRangeStart: "Please choose between ",
                            groupCheckedTooFewStart: "Please choose at least ",
                            groupCheckedTooManyStart: "Please choose a maximum of ",
                            groupCheckedEnd: " item(s)",
                            badCreditCard: "The credit card number is not correct",
                            badCVV: "The CVV number was not correct",
                            wrongFileDim: "Incorrect image dimensions,",
                            imageTooTall: "the image can not be taller than",
                            imageTooWide: "the image can not be wider than",
                            imageTooSmall: "the image was too small",
                            min: "min",
                            max: "max",
                            imageRatioNotAccepted: "Image ratio is not be accepted",
                            badBrazilTelephoneAnswer: "The phone number entered is invalid",
                            badBrazilCEPAnswer: "The CEP entered is invalid",
                            badBrazilCPFAnswer: "The CPF entered is invalid",
                            badPlPesel: "The PESEL entered is invalid",
                            badPlNip: "The NIP entered is invalid",
                            badPlRegon: "The REGON entered is invalid",
                            badreCaptcha: "Please confirm that you are not a bot"
                        }
                    })
                }(a, window),
                function(a) {
                    a.formUtils.addValidator({
                        name: "email",
                        validatorFunction: function(b) {
                            var c = b.toLowerCase().split("@"),
                                d = c[0],
                                e = c[1];
                            if (d && e) {
                                if (0 === d.indexOf('"')) {
                                    var f = d.length;
                                    if (d = d.replace(/\"/g, ""), d.length !== f - 2) return !1
                                }
                                return a.formUtils.validators.validate_domain.validatorFunction(c[1]) && 0 !== d
                                    .indexOf(".") && "." !== d.substring(d.length - 1, d.length) && -1 === d
                                    .indexOf("..") && !/[^\w\+\.\-\#\-\_\~\!\$\&\'\(\)\*\+\,\;\=\:]/.test(d)
                            }
                            return !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badEmail"
                    }), a.formUtils.addValidator({
                        name: "domain",
                        validatorFunction: function(a) {
                            return a.length > 0 && a.length <= 253 && !/[^a-zA-Z0-9]/.test(a.slice(-2)) && !
                                /[^a-zA-Z0-9]/.test(a.substr(0, 1)) && !/[^a-zA-Z0-9\.\-]/.test(a) && 1 === a
                                .split("..").length && a.split(".").length > 1
                        },
                        errorMessage: "",
                        errorMessageKey: "badDomain"
                    }), a.formUtils.addValidator({
                        name: "required",
                        validatorFunction: function(b, c, d, e, f) {
                            switch (c.attr("type")) {
                                case "checkbox":
                                    return c.is(":checked");
                                case "radio":
                                    return f.find('input[name="' + c.attr("name") + '"]').filter(":checked")
                                        .length > 0;
                                default:
                                    return "" !== a.trim(b)
                            }
                        },
                        errorMessage: "",
                        errorMessageKey: function(a) {
                            return "top" === a.errorMessagePosition || "function" == typeof a
                                .errorMessagePosition ? "requiredFields" : "requiredField"
                        }
                    }), a.formUtils.addValidator({
                        name: "length",
                        validatorFunction: function(b, c, d, e) {
                            var f = c.valAttr("length"),
                                g = c.attr("type");
                            if (void 0 === f) return alert('Please add attribute "data-validation-length" to ' +
                                c[0].nodeName + " named " + c.attr("name")), !0;
                            var h, i = "file" === g && void 0 !== c.get(0).files ? c.get(0).files.length : b
                                .length,
                                j = a.formUtils.numericRangeCheck(i, f);
                            switch (j[0]) {
                                case "out":
                                    this.errorMessage = e.lengthBadStart + f + e.lengthBadEnd, h = !1;
                                    break;
                                case "min":
                                    this.errorMessage = e.lengthTooShortStart + j[1] + e.lengthBadEnd, h = !1;
                                    break;
                                case "max":
                                    this.errorMessage = e.lengthTooLongStart + j[1] + e.lengthBadEnd, h = !1;
                                    break;
                                default:
                                    h = !0
                            }
                            return h
                        },
                        errorMessage: "",
                        errorMessageKey: ""
                    }), a.formUtils.addValidator({
                        name: "url",
                        validatorFunction: function(b) {
                            var c =
                                /^(https?|ftp):\/\/((((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])(\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])(\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/(((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|\[|\]|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#(((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
                            if (c.test(b)) {
                                var d = b.split("://")[1],
                                    e = d.indexOf("/");
                                return e > -1 && (d = d.substr(0, e)), a.formUtils.validators.validate_domain
                                    .validatorFunction(d)
                            }
                            return !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badUrl"
                    }), a.formUtils.addValidator({
                        name: "number",
                        validatorFunction: function(a, b, c) {
                            if ("" !== a) {
                                var d, e, f = b.valAttr("allowing") || "",
                                    g = b.valAttr("decimal-separator") || c.decimalSeparator,
                                    h = !1,
                                    i = b.valAttr("step") || "",
                                    j = !1,
                                    k = b.attr("data-sanitize") || "",
                                    l = k.match(/(^|[\s])numberFormat([\s]|$)/i);
                                if (l) {
                                    if (!window.numeral) throw new ReferenceError(
                                        "The data-sanitize value numberFormat cannot be used without the numeral library. Please see Data Validation in http://www.formvalidator.net for more information."
                                    );
                                    a.length && (a = String(numeral().unformat(a)))
                                }
                                if (-1 === f.indexOf("number") && (f += ",number"), -1 === f.indexOf(
                                        "negative") && 0 === a.indexOf("-")) return !1;
                                if (f.indexOf("range") > -1 && (d = parseFloat(f.substring(f.indexOf("[") + 1, f
                                        .indexOf(";"))), e = parseFloat(f.substring(f.indexOf(";") + 1, f
                                        .indexOf("]"))), h = !0), "" !== i && (j = !0), "," === g) {
                                    if (a.indexOf(".") > -1) return !1;
                                    a = a.replace(",", ".")
                                }
                                if ("" === a.replace(/[0-9-]/g, "") && (!h || a >= d && e >= a) && (!j || a %
                                        i === 0)) return !0;
                                if (f.indexOf("float") > -1 && null !== a.match(new RegExp(
                                        "^([0-9-]+)\\.([0-9]+)$")) && (!h || a >= d && e >= a) && (!j || a %
                                        i === 0)) return !0
                            }
                            return !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badInt"
                    }), a.formUtils.addValidator({
                        name: "alphanumeric",
                        validatorFunction: function(b, c, d, e) {
                            var f = "^([a-zA-Z0-9",
                                g = "]+)$",
                                h = c.valAttr("allowing"),
                                i = "";
                            if (h) {
                                i = f + h + g;
                                var j = h.replace(/\\/g, "");
                                j.indexOf(" ") > -1 && (j = j.replace(" ", ""), j += e.andSpaces || a.formUtils
                                        .LANG.andSpaces), this.errorMessage = e.badAlphaNumeric + e
                                    .badAlphaNumericExtra + j
                            } else i = f + g, this.errorMessage = e.badAlphaNumeric;
                            return new RegExp(i).test(b)
                        },
                        errorMessage: "",
                        errorMessageKey: ""
                    }), a.formUtils.addValidator({
                        name: "custom",
                        validatorFunction: function(a, b) {
                            var c = new RegExp(b.valAttr("regexp"));
                            return c.test(a)
                        },
                        errorMessage: "",
                        errorMessageKey: "badCustomVal"
                    }), a.formUtils.addValidator({
                        name: "date",
                        validatorFunction: function(b, c, d) {
                            var e = c.valAttr("format") || d.dateFormat || "yyyy-mm-dd",
                                f = "false" === c.valAttr("require-leading-zero");
                            return a.formUtils.parseDate(b, e, f) !== !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badDate"
                    }), a.formUtils.addValidator({
                        name: "checkbox_group",
                        validatorFunction: function(b, c, d, e, f) {
                            var g = !0,
                                h = c.attr("name"),
                                i = a('input[type=checkbox][name^="' + h + '"]', f),
                                j = i.filter(":checked").length,
                                k = c.valAttr("qty");
                            if (void 0 === k) {
                                var l = c.get(0).nodeName;
                                alert('Attribute "data-validation-qty" is missing from ' + l + " named " + c
                                    .attr("name"))
                            }
                            var m = a.formUtils.numericRangeCheck(j, k);
                            switch (m[0]) {
                                case "out":
                                    this.errorMessage = e.groupCheckedRangeStart + k + e.groupCheckedEnd, g = !
                                        1;
                                    break;
                                case "min":
                                    this.errorMessage = e.groupCheckedTooFewStart + m[1] + e.groupCheckedEnd,
                                        g = !1;
                                    break;
                                case "max":
                                    this.errorMessage = e.groupCheckedTooManyStart + m[1] + e.groupCheckedEnd,
                                        g = !1;
                                    break;
                                default:
                                    g = !0
                            }
                            if (!g) {
                                var n = function() {
                                    i.unbind("click", n), i.filter("*[data-validation]")
                                        .validateInputOnBlur(e, d, !1, "blur")
                                };
                                i.bind("click", n)
                            }
                            return g
                        }
                    })
                }(a)
            });
        </script> --}}

        <!-- Script in order to open modal -->
        <script type="text/javascript" charset="utf-8" style="user-select: auto;">
            //JS address with json

            (function(window) {
                var allProvince = [];
                var allDistrict = [];
                var allWard = [];
                var loadedData = false;

                // function setProvince(zone, province) {
                //     $province = $("select[data-address-type='province'][data-address-zone='" + zone + "']");
                //     if (!$province) {
                //         return;
                //     }
                //     var list = ['<option value="" hidden>---</option>'];
                //     for (var i = 0; i < allProvince.length; i++) {
                //         var p = allProvince[i];
                //         if (p.name == province) {
                //             list.push("<option value='" + p.name + "' selected>" + p.name + "</option>");
                //             continue;
                //         }
                //         list.push("<option value='" + p.name + "'>" + p.name + "</option>");
                //     }

                //     $province.html(list.join(''));
                // };

                // function setDistrict(zone, province, district) {
                //     var $district = $("select[data-address-type='district'][data-address-zone='" + zone + "']");
                //     if (!$district) {
                //         return;
                //     }
                //     if (!province) {
                //         $district.val('');
                //         $district.attr('disabled', 'disabled');
                //         $district.html('');
                //         return;
                //     }
                //     var provinceObj = allProvince.find(function(p) {
                //         return p.name == province;
                //     });
                //     var districts = allDistrict.filter(function(d) {
                //         return d.province_id == provinceObj.id;
                //     });
                //     var list = ['<option value="" hidden>---</option>'];
                //     for (var i = 0; i < districts.length; i++) {
                //         var d = districts[i];
                //         if (d.name == district) {
                //             list.push("<option value='" + d.name + "' selected>" + d.name + "</option>");
                //             continue;
                //         }
                //         list.push("<option value='" + d.name + "'>" + d.name + "</option>");
                //     }
                //     $district.removeAttr('disabled');
                //     $district.html(list.join(''));
                // };

                // function setWard(zone, district, ward) {
                //     var $ward = $("select[data-address-type='ward'][data-address-zone='" + zone + "']");
                //     if (!$ward) {
                //         return;
                //     }
                //     if (!district) {
                //         $ward.val('');
                //         $ward.attr('disabled', 'disabled');
                //         $ward.html('');
                //         return;
                //     }
                //     var list = ['<option value="" hidden>---</option>'];
                //     var districtObj = allDistrict.find(function(d) {
                //         return d.name == district;
                //     });
                //     var wards = allWard.filter(function(w) {
                //         return w.district_id == districtObj.id;
                //     });
                //     for (var i = 0; i < wards.length; i++) {
                //         var w = wards[i];
                //         if (w.name == ward) {
                //             list.push("<option value='" + w.name + "' selected>" + w.name + "</option>");
                //             continue;
                //         }
                //         list.push("<option value='" + w.name + "'>" + w.name + "</option>");
                //     }
                //     $ward.removeAttr('disabled');
                //     $ward.html(list.join(''));
                // };


                function loadData() {
                    if (loadedData) {
                        return {
                            then: function(f) {
                                return f();
                            }
                        };
                    }
                    return fetch('/checkout/addresses.json')
                        .then(function(rs) {
                            return rs.json();
                        })
                        .then(function(rs) {
                            allProvince = rs.provinces;
                            allDistrict = rs.districts;
                            allWard = rs.wards;
                            loadedData = true;
                        });
                };

                function Address() {

                }

                function triggerChange(zone, type) {
                    $('select[data-address-type="' + type + '"][data-address-zone="' + zone + '"]').trigger(
                        'address:change');
                }

                Address.prototype.bind = function() {
                    $('body')
                        .on('change', 'select[data-address-type]', function(e) {
                            var type = e.target.getAttribute('data-address-type');
                            var zone = e.target.getAttribute('data-address-zone');
                            if (type === 'province') {
                                // triggerChange(zone, 'province');
                                // setDistrict(zone, e.target.value, undefined);
                                // triggerChange(zone, 'district');
                                // setWard(zone, '', undefined);
                                // triggerChange(zone, 'ward');
                            } else if (type === 'district') {
                                // triggerChange(zone, 'district');
                                // setWard(zone, e.target.value, undefined);
                                // triggerChange(zone, 'ward');
                            }
                        })
                    return this;
                };

                Address.prototype.refresh = function(callback) {
                    var zones = {};
                    $('[data-address-zone]').each(function() {
                        var $this = $(this);
                        var type = $this.data('address-type');
                        if (!type) {
                            return;
                        }
                        var zoneName = $this.data('address-zone');
                        var zone = zones[zoneName] || (zones[zoneName] = {});
                        zone[type] = $this.val() || $this.attr('value');
                    });
                    var zoneNames = Object.keys(zones);
                    if (zoneNames.length == 0) {
                        return;
                    }
                    /*	loadData().then(function () {
                            zoneNames.forEach(function (zoneName) {
                                var zone = zones[zoneName];
                                setProvince(zoneName, zone.province);
                                triggerChange(zoneName, 'province');
                                // setDistrict(zoneName, zone.province, zone.district);
                                // triggerChange(zoneName, 'district');
                                // setWard(zoneName, zone.district, zone.ward);
                                // triggerChange(zoneName, 'ward');
                            });
                            if (callback) {
                                callback();
                            }
                        }); */
                };

                window.Address = new Address();

            })(window)


            //Page address

            // new Haravan.CountryProvinceSelector('mySelect1', 'mySelect2', {
            //     hideElement: 'address_province_container_new'
            // });

            // new Haravan.CountryProvinceSelector('mySelect2_1104839182', 'mySelect3_1104839182', {
            //     hideElement: 'address_province_container_1104839182'
            // });

            // new Haravan.CountryProvinceSelector('mySelect2_1104839541', 'mySelect3_1104839541', {
            //     hideElement: 'address_province_container_1104839541'
            // });

            // new Haravan.CountryProvinceSelector('mySelect2_1104839542', 'mySelect3_1104839542', {
            //     hideElement: 'address_province_container_1104839542'
            // });


            $(document).ready(function() {

                var elements = $("input, select, textarea");
                for (var i = 0; i < elements.length; i++) {
                    elements[i].oninvalid = function(e) {
                        e.target.setCustomValidity("");
                        if (!e.target.validity.valid) {
                            e.target.setCustomValidity(e.target.getAttribute("requiredmsg"));
                        }
                    };
                    elements[i].oninput = function(e) {
                        e.target.setCustomValidity("");
                    };
                }
                $('.mySelect2').each(function() {
                    var old = $(this).attr('data-default');
                    $(this).val(old);
                    $(this).change();
                })

                $('.btn-close').on('click', function(e) {
                    e.preventDefault();
                    $('.op_address').removeClass('opened');
                    $('.modal_address').hide();
                    $('html').removeClass('no-scroll');
                    $('.not-vn').removeClass('hidden');
                    Address.bind().refresh();
                    $('.mySelect2').each(function() {
                        var old = $(this).attr('data-default');
                        $(this).val(old);
                        $(this).change();
                    })
                    setTimeout(function() {
                        $('input').prop('selected', false);
                    }, 500)
                    $('.form-group input').each(function() {
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                });
                $('.btn-fix-addr').click(function(e) {
                    $(this).parents('.collapse').removeClass('in').hide();
                })
            })

            $('fieldset').click(function() {
                $(this).find('input').focus();
            });

            $(document).on('click', '.btn-more', function(e) {
                $('.op_address').toggleClass('opened');
                $('#add_address').show();
                $('html').toggleClass('no-scroll');
                $('.mySelect2').each(function() {
                    var old = $(this).attr('data-default');
                    $(this).val(old);
                    $(this).change();
                })
                // if ($("#customer_address select[name='address[country]'] option:selected").val() != 'Vietnam') {
                //     $('.not-vn').addClass('hidden');
                // } else {
                //     $('.not-vn').removeClass('hidden');
                // }

                Address.bind().refresh();
                $('.form-group input').each(function() {
                    if ($(this).val() != "") {
                        $(this).addClass("has-content");
                    } else {
                        $(this).removeClass("has-content");
                    }
                })
            });


            $(function() {
                $("select[name='address[country]']").change(function() {
                    $('.not-vn').removeClass('hidden');
                });
            });


            $(document).on('click', '.btn-edit', function(e) {
                $('.op_address').toggleClass('opened');
                var ctr = $(this).attr('aria-controls');
                $('#' + ctr).show();
                $('html').toggleClass('no-scroll');
                Address.bind().refresh();
                var idform = $(this).data('form');
                $('.mySelect2').each(function() {
                    var old = $(this).attr('data-default');
                    $(this).val(old);
                    $(this).change();
                })
                // if ($('#' + idform).find("select[name='address[country]']").data('default') != 'Vietnam') {
                //     $('.not-vn').addClass('hidden');
                // } else {
                //     $('.not-vn').removeClass('hidden');
                // }
                // $('#' + idform).each(function() {
                //     var thisform = $(this);
                //     $(thisform).find('.province').each(function() {
                //         if ($(thisform).find('.province').data('default') != "") {
                //             let val = $(thisform).find('.province').data('default')
                //             $(thisform).find('.province').addClass("has-content");
                //             $(thisform).find('.province').val(val).change()
                //             $(thisform).find(`.province option[value="${val}"]`).attr('selected', true)
                //         } else {
                //             $(thisform).find('.province').removeClass("has-content");
                //         }
                //     })
                //     $(thisform).find('.district').each(function() {
                //         if ($(thisform).find('.district').data('default') != "") {
                //             $(thisform).find('.district').addClass("has-content");
                //         } else {
                //             $(thisform).find('.district').removeClass("has-content");
                //         }
                //     })
                //     $(thisform).find('.ward').each(function() {
                //         if ($(thisform).find('.ward').data('default') != "") {
                //             $(thisform).find('.ward').addClass("has-content");
                //         } else {
                //             $(thisform).find('.ward').removeClass("has-content");
                //         }
                //     })
                // });
            });
            $(window).load(function() {
                setTimeout(function() {
                    $('.form-group input').each(function() {
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                    $('.form-group select').each(function() {
                        //$('.form-group .add').val("Vietnam").change();
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                    $(".form-group input,.form-group select").focusout(function() {
                        if ($(this).val() != "") {
                            $(this).addClass("has-content");
                        } else {
                            $(this).removeClass("has-content");
                        }
                    })
                }, 500);
                return false;
            });
        </script>
    @endsection
