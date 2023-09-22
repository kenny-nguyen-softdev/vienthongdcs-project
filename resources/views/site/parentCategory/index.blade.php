@extends('site.layout.main')

@section('content')

    <body class="product-category-56 home1">
        @include('site.layout.script_body')

        @include('site.layout.header')
        <div class="container layer-category">
            <div class="layered-navigation-block"></div>
            <div class="ajax-loader">
                <img src="image/catalog/AjaxLoader.gif" alt="" />
            </div>
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>
                    <a
                        href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">{{ $parentCategory->name }}</a>
                </li>
            </ul>

            <div class="row">
                <div class="col-order">
                    <aside id="column-left" class="col-sm-12 col-md-3">
                        <div class="layernavigation-module layernavigation1">
                            <div class="panel panel-default">
                                <div class="layered-heading module-title">
                                    <h2>{{ $parentCategory->name }}</h2>
                                </div>
                                <div class="layered">
                                    <div class="list-group">
                                        <div class="filter-attribute-container filter-attribute-remove-container"></div>

                                        <div class="filter-attribute-container filter-category">
                                            <label><strong>Danh mục</strong></label>
                                            <div class="list-group-item">
                                                <div id="filter-group3">
                                                    @foreach ($parentCategory->firstSubCategories as $firstSubCategory)
                                                        <a class="a-filter add-filter"
                                                            href="{{ route('site.firstSubCategory.index', [$parentCategory->slug, $firstSubCategory->slug]) }}"
                                                            name="18"><i
                                                                class="fa fa-square-o"></i>{{ $firstSubCategory->name }}
                                                            ({{ count($firstSubCategory->products) }})
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- <script type="text/javascript">
                                var filter_url = "";
                                var ids = [];
                                var min_price = parseFloat("60");
                                var max_price = parseFloat("2000");
                                var current_min_price = parseFloat($("#price-from").val());
                                var current_max_price = parseFloat($("#price-to").val());

                                $("#slider-price").slider({
                                    range: true,
                                    min: min_price,
                                    max: max_price,
                                    values: [current_min_price, current_max_price],
                                    slide: function(event, ui) {
                                        $("#price-from").val(ui.values[0]);
                                        $("#price-to").val(ui.values[1]);
                                        current_min_price = ui.values[0];
                                        current_max_price = ui.values[1];
                                    },
                                    stop: function(event, ui) {
                                        filter_url = $(".price-url").val();
                                        filter_url +=
                                            "&price=" + current_min_price + "," + current_max_price;
                                        oclayerednavigationajax.filter(filter_url);
                                    },
                                });

                                // $(".a-filter").click(function() {
                                //     var id = $(this).attr("name");
                                //     var filter_ids = "";
                                //     filter_url = $(".filter-url").val();
                                //     if ($(this).hasClass("add-filter") == true) {
                                //         ids.push(id);
                                //     } else if ($(this).hasClass("remove-filter") == true) {
                                //         ids = $.grep(ids, function(value) {
                                //             return value != id;
                                //         });
                                //     }
                                //     filter_ids = ids.join(",");
                                //     filter_url += "&filter=" + filter_ids;
                                //     oclayerednavigationajax.filter(filter_url);
                                // });

                                $(".clear-filter").click(function() {
                                    ids = [];
                                });

                                $(document).ajaxComplete(function() {
                                    var current_min_price = parseFloat($("#price-from").val());
                                    var current_max_price = parseFloat($("#price-to").val());

                                    $("#slider-price").slider({
                                        range: true,
                                        min: min_price,
                                        max: max_price,
                                        values: [current_min_price, current_max_price],
                                        slide: function(event, ui) {
                                            $("#price-from").val(ui.values[0]);
                                            $("#price-to").val(ui.values[1]);
                                            current_min_price = ui.values[0];
                                            current_max_price = ui.values[1];
                                        },
                                        stop: function(event, ui) {
                                            filter_url = $(".price-url").val();
                                            filter_url +=
                                                "&price=" + current_min_price + "," + current_max_price;
                                            oclayerednavigationajax.filter(filter_url);
                                        },
                                    });
                                    // $(".a-filter").click(function() {
                                    //     var id = $(this).attr("name");
                                    //     var filter_ids = "";
                                    //     filter_url = $(".filter-url").val();

                                    //     if ($(this).hasClass("add-filter") == true) {
                                    //         ids.push(id);
                                    //     } else if ($(this).hasClass("remove-filter") == true) {
                                    //         ids = $.grep(ids, function(value) {
                                    //             return value != id;
                                    //         });
                                    //     }
                                    //     filter_ids = ids.join(",");
                                    //     filter_url += "&filter=" + filter_ids;
                                    //     oclayerednavigationajax.filter(filter_url);
                                    // });

                                    $(".clear-filter").click(function() {
                                        ids = [];
                                    });
                                });
                                $(".layered .filter-attribute-container label").click(
                                    function() {
                                        $(this).next().slideToggle();
                                    }
                                );
                            </script> --}}
                        </div>

                        <div class="layernavigation-module layernavigation2">
                            <div class="panel panel-default">
                                <div class="layered-heading module-title">
                                    <h2>BỘ LỌC</h2>
                                </div>

                                <div class="layered">
                                    <div class="list-group">
                                        <form id="filter-price"
                                            action="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                                            class="price-range-filter width_common filter-attribute-container filter-price">
                                            <div class="title_fillter filter-group__header price-range-filter__header">
                                                Khoảng giá</div>
                                            <div class="filter-group__body price-range-filter__edit">
                                                <div class="price-range-filter__inputs">
                                                    <input type="text" name="price_from" min="0" pattern="[0-9]*"
                                                        maxlength="13" class="price-range-filter__input filter__input_from"
                                                        placeholder="₫ TỪ" value="{{ request()->input('price_from') }}">
                                                    <span class="price-range-filter__range-line"></span>
                                                    <input type="text" name="price_to" min="0" pattern="[0-9]*"
                                                        maxlength="13" class="price-range-filter__input filter__input_to"
                                                        placeholder="₫ ĐẾN" value="{{ request()->input('price_to') }}">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn_site_2 width_common search_price">Áp
                                                dụng</button>
                                        </form>

                                        <div class="filter-attribute-container filter-brand">
                                            <label><strong>Thương Hiệu</strong></label>
                                            <div class="list-group-item">
                                                <div id="filter-group1">
                                                    @foreach ($brands as $brand)
                                                        <a class="a-filter add-filter {{ request()->input('brand_id') == $brand->id ? 'active' : 'unactive' }}"
                                                            href="{{ request()->fullUrlWithQuery(['brand_id' => $brand->id]) }}"
                                                            name="{{ $brand->id }}"><i
                                                                class="fa fa-square-o"></i>{{ $brand->name }}
                                                            {{-- ({{ count($brand->products) }}) --}}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        @if (!empty($parentCategory->origins) && count($parentCategory->origins) > 0)
                                            <div class="filter-attribute-container filter-origin">
                                                <label><strong>Xuất Xứ</strong></label>
                                                <div class="list-group-item">
                                                    <div id="filter-group2">
                                                        @foreach ($parentCategory->origins as $origin)
                                                            <a class="a-filter add-filter {{ request()->input('origin') == $origin->id ? 'active' : 'unactive' }}"
                                                                href="{{ request()->fullUrlWithQuery(['origin' => $origin->id]) }}"
                                                                name="12"><i
                                                                    class="fa fa-square-o"></i>{{ $origin->name }}
                                                                {{-- ({{ count($origin->products) }}) --}}
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (!empty($parentCategory->configurations) && count($parentCategory->configurations) > 0)
                                            <div class="filter-attribute-container filter-origin">
                                                <label><strong>Cấu Hình</strong></label>
                                                <div class="list-group-item">
                                                    <div id="filter-group2">
                                                        @foreach ($parentCategory->configurations as $configuration)
                                                            <a class="a-filter add-filter {{ request()->input('configuration') == $configuration->id ? 'active' : 'unactive' }}"
                                                                href="{{ request()->fullUrlWithQuery(['configuration' => $configuration->id]) }}"
                                                                name="12"><i
                                                                    class="fa fa-square-o"></i>{{ $configuration->name }}
                                                                {{-- ({{ count($configuration->products) }}) --}}
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (!empty($parentCategory->features) && count($parentCategory->features) > 0)
                                            <div class="filter-attribute-container filter-origin">
                                                <label><strong>Tính Năng</strong></label>
                                                <div class="list-group-item">
                                                    <div id="filter-group2">
                                                        @foreach ($parentCategory->features as $feature)
                                                            <a class="a-filter add-filter {{ request()->input('feature') == $feature->id ? 'active' : 'unactive' }}"
                                                                href="{{ request()->fullUrlWithQuery(['feature' => $feature->id]) }}"
                                                                name="12"><i
                                                                    class="fa fa-square-o"></i>{{ $feature->name }}
                                                                {{-- ({{ count($feature->products) }}) --}}
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                var filter_url = "";
                                var ids = [];
                                var min_price = parseFloat("60");
                                var max_price = parseFloat("2000");
                                var current_min_price = parseFloat($("#price-from").val());
                                var current_max_price = parseFloat($("#price-to").val());

                                $("#slider-price").slider({
                                    range: true,
                                    min: min_price,
                                    max: max_price,
                                    values: [current_min_price, current_max_price],
                                    slide: function(event, ui) {
                                        $("#price-from").val(ui.values[0]);
                                        $("#price-to").val(ui.values[1]);
                                        current_min_price = ui.values[0];
                                        current_max_price = ui.values[1];
                                    },
                                    stop: function(event, ui) {
                                        filter_url = $(".price-url").val();
                                        filter_url +=
                                            "&price=" + current_min_price + "," + current_max_price;
                                        oclayerednavigationajax.filter(filter_url);
                                    },
                                });

                                // $(".a-filter").click(function() {
                                //     var id = $(this).attr("name");
                                //     var filter_ids = "";
                                //     filter_url = $(".filter-url").val();
                                //     if ($(this).hasClass("add-filter") == true) {
                                //         ids.push(id);
                                //     } else if ($(this).hasClass("remove-filter") == true) {
                                //         ids = $.grep(ids, function(value) {
                                //             return value != id;
                                //         });
                                //     }
                                //     filter_ids = ids.join(",");
                                //     filter_url += "&filter=" + filter_ids;
                                //     oclayerednavigationajax.filter(filter_url);
                                // });

                                $(".clear-filter").click(function() {
                                    ids = [];
                                });

                                $(document).ajaxComplete(function() {
                                    var current_min_price = parseFloat($("#price-from").val());
                                    var current_max_price = parseFloat($("#price-to").val());

                                    $("#slider-price").slider({
                                        range: true,
                                        min: min_price,
                                        max: max_price,
                                        values: [current_min_price, current_max_price],
                                        slide: function(event, ui) {
                                            $("#price-from").val(ui.values[0]);
                                            $("#price-to").val(ui.values[1]);
                                            current_min_price = ui.values[0];
                                            current_max_price = ui.values[1];
                                        },
                                        stop: function(event, ui) {
                                            filter_url = $(".price-url").val();
                                            filter_url +=
                                                "&price=" + current_min_price + "," + current_max_price;
                                            oclayerednavigationajax.filter(filter_url);
                                        },
                                    });
                                    // $(".a-filter").click(function() {
                                    //     var id = $(this).attr("name");
                                    //     var filter_ids = "";
                                    //     filter_url = $(".filter-url").val();

                                    //     if ($(this).hasClass("add-filter") == true) {
                                    //         ids.push(id);
                                    //     } else if ($(this).hasClass("remove-filter") == true) {
                                    //         ids = $.grep(ids, function(value) {
                                    //             return value != id;
                                    //         });
                                    //     }
                                    //     filter_ids = ids.join(",");
                                    //     filter_url += "&filter=" + filter_ids;
                                    //     oclayerednavigationajax.filter(filter_url);
                                    // });

                                    $(".clear-filter").click(function() {
                                        ids = [];
                                    });
                                });
                                $(".layered .filter-attribute-container label").click(
                                    function() {
                                        $(this).next().slideToggle();
                                    }
                                );
                            </script>
                        </div>
                    </aside>

                    <div id="content" class="col-md-9 col-sm-12">
                        <div id="ajax-login-block"></div>
                        {{-- <div id="ajax-loader">
                            <img src="image/catalog/AjaxLoader.gif" alt="" />
                        </div> --}}
                        {{-- <div class="ajax-body-login">
                            <div class="account-login">
                                <a href="javascript:void(0);" class="a-close-frm"
                                    onclick="ocajaxlogin.closeForm();"><span>X</span></a>
                                <div class="ajax-content">
                                    <div class="ajax-container">
                                        <div class="login-form-content">
                                            <h2>Returning Customer</h2>
                                            <p><strong>I am a returning customer</strong></p>
                                            <form action="#" method="post" id="ajax-login-form"
                                                enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="control-label" for="input-email">E-Mail Address</label>
                                                    <input type="text" name="email" value=""
                                                        placeholder="E-Mail Address" id="input-email"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="input-password">Password</label>
                                                    <input type="password" name="password" value=""
                                                        placeholder="Password" id="input-password"
                                                        class="form-control" />
                                                    <a class="forgotten"
                                                        href="indexacda.html?route=account/forgotten">Forgotten
                                                        Password</a>
                                                </div>
                                                <div class="action">
                                                    <button class="button" type="button"
                                                        onclick="ocajaxlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)">
                                                        <span>Login</span>
                                                    </button>
                                                    <button class="button" type="button"
                                                        onclick="ocajaxlogin.appendRegisterForm()">
                                                        <span>Create an account</span>
                                                    </button>
                                                    <img class="ajax-load-img" alt=""
                                                        src="image/catalog/AjaxLoader.gif" width="30"
                                                        height="30" />
                                                </div>
                                                <input type="hidden" name="redirect"
                                                    value="indexe223.html?route=account/wishlist" />
                                            </form>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            var keycode = "";

                                            $("#input-email").keypress(function(e) {
                                                keycode = e.keyCode ? e.keyCode : e.which;
                                                if (keycode == "13") {
                                                    ocajaxlogin.loginAction(
                                                        ocajaxlogin.loginAction(
                                                            document.getElementById("input-email").value,
                                                            document.getElementById("input-password").value
                                                        )
                                                    );
                                                }
                                            });

                                            $("#input-password").keypress(function(e) {
                                                keycode = e.keyCode ? e.keyCode : e.which;
                                                if (keycode == "13") {
                                                    ocajaxlogin.loginAction(
                                                        ocajaxlogin.loginAction(
                                                            document.getElementById("input-email").value,
                                                            document.getElementById("input-password").value
                                                        )
                                                    );
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="account-register">
                                <a href="javascript:void(0);" class="a-close-frm"
                                    onclick="ocajaxlogin.closeForm();"><span>X</span></a>
                                <div class="ajax-content">
                                    <div class="ajax-container">
                                        <div class="register-form-content">
                                            <h1>Register Account</h1>
                                            <p>
                                                If you already have an account with us, please login at
                                                the
                                                <a onclick="ocajaxlogin.appendLoginForm()"
                                                    href="javascript:void(0);">login
                                                    form</a>.
                                            </p>
                                            <form
                                                action="http://bigone3.demo.towerthemes.com/index.php?route=extension/module/ajaxregister"
                                                method="post" id="ajax-register-form" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <fieldset id="account">
                                                    <legend>Your Personal Details</legend>
                                                    <div class="form-group required" style="display: none">
                                                        <label class="col-sm-2 control-label">Customer Group</label>
                                                        <div class="col-sm-10">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="customer_group_id"
                                                                        value="1" checked="checked" />
                                                                    Default</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label" for="input-firstname">First
                                                            Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="firstname" value=""
                                                                placeholder="First Name" id="input-firstname"
                                                                class="form-control" />
                                                            <!-- Error First Name -->
                                                            <div class="for-error error-firstname"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label" for="input-lastname">Last
                                                            Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="lastname" value=""
                                                                placeholder="Last Name" id="input-lastname"
                                                                class="form-control" />
                                                            <!-- Error Last Name -->
                                                            <div class="for-error error-lastname"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-register-email">E-Mail</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" name="email" value=""
                                                                placeholder="E-Mail" id="input-register-email"
                                                                class="form-control" />
                                                            <!-- Error Email -->
                                                            <div class="for-error error-email"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-telephone">Telephone</label>
                                                        <div class="col-sm-10">
                                                            <input type="tel" name="telephone" value=""
                                                                placeholder="Telephone" id="input-telephone"
                                                                class="form-control" />
                                                            <!-- Error Phone -->
                                                            <div class="for-error error-telephone"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label" for="input-fax">Fax</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="fax" value=""
                                                                placeholder="Fax" id="input-fax" class="form-control" />
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset id="address">
                                                    <legend>Your Address</legend>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-company">Company</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="company" value=""
                                                                placeholder="Company" id="input-company"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-address-1">Address
                                                            1</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="address_1" value=""
                                                                placeholder="Address 1" id="input-address-1"
                                                                class="form-control" />
                                                            <!-- Error Address -->
                                                            <div class="for-error error-address"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-address-2">Address
                                                            2</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="address_2" value=""
                                                                placeholder="Address 2" id="input-address-2"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-city">City</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="city" value=""
                                                                placeholder="City" id="input-city"
                                                                class="form-control" />
                                                            <!-- Error City -->
                                                            <div class="for-error error-city"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label" for="input-postcode">Post
                                                            Code</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="postcode" value=""
                                                                placeholder="Post Code" id="input-postcode"
                                                                class="form-control" />
                                                            <!-- Error Post Code -->
                                                            <div class="for-error error-postcode"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-country">Country</label>
                                                        <div class="col-sm-10">
                                                            <select name="country_id" id="input-country"
                                                                class="form-control">
                                                                <option value="">--- Please Select ---</option>
                                                                <option value="244">Aaland Islands</option>
                                                                <option value="1">Afghanistan</option>
                                                                <option value="2">Albania</option>
                                                                <option value="3">Algeria</option>
                                                                <option value="4">American Samoa</option>
                                                                <option value="5">Andorra</option>
                                                                <option value="6">Angola</option>
                                                                <option value="7">Anguilla</option>
                                                                <option value="8">Antarctica</option>
                                                                <option value="9">Antigua and Barbuda</option>
                                                                <option value="10">Argentina</option>
                                                                <option value="11">Armenia</option>
                                                                <option value="12">Aruba</option>
                                                                <option value="252">
                                                                    Ascension Island (British)
                                                                </option>
                                                                <option value="13">Australia</option>
                                                                <option value="14">Austria</option>
                                                                <option value="15">Azerbaijan</option>
                                                                <option value="16">Bahamas</option>
                                                                <option value="17">Bahrain</option>
                                                                <option value="18">Bangladesh</option>
                                                                <option value="19">Barbados</option>
                                                                <option value="20">Belarus</option>
                                                                <option value="21">Belgium</option>
                                                                <option value="22">Belize</option>
                                                                <option value="23">Benin</option>
                                                                <option value="24">Bermuda</option>
                                                                <option value="25">Bhutan</option>
                                                                <option value="26">Bolivia</option>
                                                                <option value="245">
                                                                    Bonaire, Sint Eustatius and Saba
                                                                </option>
                                                                <option value="27">
                                                                    Bosnia and Herzegovina
                                                                </option>
                                                                <option value="28">Botswana</option>
                                                                <option value="29">Bouvet Island</option>
                                                                <option value="30">Brazil</option>
                                                                <option value="31">
                                                                    British Indian Ocean Territory
                                                                </option>
                                                                <option value="32">Brunei Darussalam</option>
                                                                <option value="33">Bulgaria</option>
                                                                <option value="34">Burkina Faso</option>
                                                                <option value="35">Burundi</option>
                                                                <option value="36">Cambodia</option>
                                                                <option value="37">Cameroon</option>
                                                                <option value="38">Canada</option>
                                                                <option value="251">Canary Islands</option>
                                                                <option value="39">Cape Verde</option>
                                                                <option value="40">Cayman Islands</option>
                                                                <option value="41">
                                                                    Central African Republic
                                                                </option>
                                                                <option value="42">Chad</option>
                                                                <option value="43">Chile</option>
                                                                <option value="44">China</option>
                                                                <option value="45">Christmas Island</option>
                                                                <option value="46">
                                                                    Cocos (Keeling) Islands
                                                                </option>
                                                                <option value="47">Colombia</option>
                                                                <option value="48">Comoros</option>
                                                                <option value="49">Congo</option>
                                                                <option value="50">Cook Islands</option>
                                                                <option value="51">Costa Rica</option>
                                                                <option value="52">Cote D'Ivoire</option>
                                                                <option value="53">Croatia</option>
                                                                <option value="54">Cuba</option>
                                                                <option value="246">Curacao</option>
                                                                <option value="55">Cyprus</option>
                                                                <option value="56">Czech Republic</option>
                                                                <option value="237">
                                                                    Democratic Republic of Congo
                                                                </option>
                                                                <option value="57">Denmark</option>
                                                                <option value="58">Djibouti</option>
                                                                <option value="59">Dominica</option>
                                                                <option value="60">Dominican Republic</option>
                                                                <option value="61">East Timor</option>
                                                                <option value="62">Ecuador</option>
                                                                <option value="63">Egypt</option>
                                                                <option value="64">El Salvador</option>
                                                                <option value="65">Equatorial Guinea</option>
                                                                <option value="66">Eritrea</option>
                                                                <option value="67">Estonia</option>
                                                                <option value="68">Ethiopia</option>
                                                                <option value="69">
                                                                    Falkland Islands (Malvinas)
                                                                </option>
                                                                <option value="70">Faroe Islands</option>
                                                                <option value="71">Fiji</option>
                                                                <option value="72">Finland</option>
                                                                <option value="74">France, Metropolitan</option>
                                                                <option value="75">French Guiana</option>
                                                                <option value="76">French Polynesia</option>
                                                                <option value="77">
                                                                    French Southern Territories
                                                                </option>
                                                                <option value="126">FYROM</option>
                                                                <option value="78">Gabon</option>
                                                                <option value="79">Gambia</option>
                                                                <option value="80">Georgia</option>
                                                                <option value="81">Germany</option>
                                                                <option value="82">Ghana</option>
                                                                <option value="83">Gibraltar</option>
                                                                <option value="84">Greece</option>
                                                                <option value="85">Greenland</option>
                                                                <option value="86">Grenada</option>
                                                                <option value="87">Guadeloupe</option>
                                                                <option value="88">Guam</option>
                                                                <option value="89">Guatemala</option>
                                                                <option value="256">Guernsey</option>
                                                                <option value="90">Guinea</option>
                                                                <option value="91">Guinea-Bissau</option>
                                                                <option value="92">Guyana</option>
                                                                <option value="93">Haiti</option>
                                                                <option value="94">
                                                                    Heard and Mc Donald Islands
                                                                </option>
                                                                <option value="95">Honduras</option>
                                                                <option value="96">Hong Kong</option>
                                                                <option value="97">Hungary</option>
                                                                <option value="98">Iceland</option>
                                                                <option value="99">India</option>
                                                                <option value="100">Indonesia</option>
                                                                <option value="101">
                                                                    Iran (Islamic Republic of)
                                                                </option>
                                                                <option value="102">Iraq</option>
                                                                <option value="103">Ireland</option>
                                                                <option value="254">Isle of Man</option>
                                                                <option value="104">Israel</option>
                                                                <option value="105">Italy</option>
                                                                <option value="106">Jamaica</option>
                                                                <option value="107">Japan</option>
                                                                <option value="257">Jersey</option>
                                                                <option value="108">Jordan</option>
                                                                <option value="109">Kazakhstan</option>
                                                                <option value="110">Kenya</option>
                                                                <option value="111">Kiribati</option>
                                                                <option value="253">Kosovo, Republic of</option>
                                                                <option value="114">Kuwait</option>
                                                                <option value="115">Kyrgyzstan</option>
                                                                <option value="116">
                                                                    Lao People's Democratic Republic
                                                                </option>
                                                                <option value="117">Latvia</option>
                                                                <option value="118">Lebanon</option>
                                                                <option value="119">Lesotho</option>
                                                                <option value="120">Liberia</option>
                                                                <option value="121">
                                                                    Libyan Arab Jamahiriya
                                                                </option>
                                                                <option value="122">Liechtenstein</option>
                                                                <option value="123">Lithuania</option>
                                                                <option value="124">Luxembourg</option>
                                                                <option value="125">Macau</option>
                                                                <option value="127">Madagascar</option>
                                                                <option value="128">Malawi</option>
                                                                <option value="129">Malaysia</option>
                                                                <option value="130">Maldives</option>
                                                                <option value="131">Mali</option>
                                                                <option value="132">Malta</option>
                                                                <option value="133">Marshall Islands</option>
                                                                <option value="134">Martinique</option>
                                                                <option value="135">Mauritania</option>
                                                                <option value="136">Mauritius</option>
                                                                <option value="137">Mayotte</option>
                                                                <option value="138">Mexico</option>
                                                                <option value="139">
                                                                    Micronesia, Federated States of
                                                                </option>
                                                                <option value="140">
                                                                    Moldova, Republic of
                                                                </option>
                                                                <option value="141">Monaco</option>
                                                                <option value="142">Mongolia</option>
                                                                <option value="242">Montenegro</option>
                                                                <option value="143">Montserrat</option>
                                                                <option value="144">Morocco</option>
                                                                <option value="145">Mozambique</option>
                                                                <option value="146">Myanmar</option>
                                                                <option value="147">Namibia</option>
                                                                <option value="148">Nauru</option>
                                                                <option value="149">Nepal</option>
                                                                <option value="150">Netherlands</option>
                                                                <option value="151">
                                                                    Netherlands Antilles
                                                                </option>
                                                                <option value="152">New Caledonia</option>
                                                                <option value="153">New Zealand</option>
                                                                <option value="154">Nicaragua</option>
                                                                <option value="155">Niger</option>
                                                                <option value="156">Nigeria</option>
                                                                <option value="157">Niue</option>
                                                                <option value="158">Norfolk Island</option>
                                                                <option value="112">North Korea</option>
                                                                <option value="159">
                                                                    Northern Mariana Islands
                                                                </option>
                                                                <option value="160">Norway</option>
                                                                <option value="161">Oman</option>
                                                                <option value="162">Pakistan</option>
                                                                <option value="163">Palau</option>
                                                                <option value="247">
                                                                    Palestinian Territory, Occupied
                                                                </option>
                                                                <option value="164">Panama</option>
                                                                <option value="165">Papua New Guinea</option>
                                                                <option value="166">Paraguay</option>
                                                                <option value="167">Peru</option>
                                                                <option value="168">Philippines</option>
                                                                <option value="169">Pitcairn</option>
                                                                <option value="170">Poland</option>
                                                                <option value="171">Portugal</option>
                                                                <option value="172">Puerto Rico</option>
                                                                <option value="173">Qatar</option>
                                                                <option value="174">Reunion</option>
                                                                <option value="175">Romania</option>
                                                                <option value="176">Russian Federation</option>
                                                                <option value="177">Rwanda</option>
                                                                <option value="178">
                                                                    Saint Kitts and Nevis
                                                                </option>
                                                                <option value="179">Saint Lucia</option>
                                                                <option value="180">
                                                                    Saint Vincent and the Grenadines
                                                                </option>
                                                                <option value="181">Samoa</option>
                                                                <option value="182">San Marino</option>
                                                                <option value="183">
                                                                    Sao Tome and Principe
                                                                </option>
                                                                <option value="184">Saudi Arabia</option>
                                                                <option value="185">Senegal</option>
                                                                <option value="243">Serbia</option>
                                                                <option value="186">Seychelles</option>
                                                                <option value="187">Sierra Leone</option>
                                                                <option value="188">Singapore</option>
                                                                <option value="189">Slovak Republic</option>
                                                                <option value="190">Slovenia</option>
                                                                <option value="191">Solomon Islands</option>
                                                                <option value="192">Somalia</option>
                                                                <option value="193">South Africa</option>
                                                                <option value="194">
                                                                    South Georgia &amp; South Sandwich Islands
                                                                </option>
                                                                <option value="113">South Korea</option>
                                                                <option value="248">South Sudan</option>
                                                                <option value="195">Spain</option>
                                                                <option value="196">Sri Lanka</option>
                                                                <option value="249">St. Barthelemy</option>
                                                                <option value="197">St. Helena</option>
                                                                <option value="250">
                                                                    St. Martin (French part)
                                                                </option>
                                                                <option value="198">
                                                                    St. Pierre and Miquelon
                                                                </option>
                                                                <option value="199">Sudan</option>
                                                                <option value="200">Suriname</option>
                                                                <option value="201">
                                                                    Svalbard and Jan Mayen Islands
                                                                </option>
                                                                <option value="202">Swaziland</option>
                                                                <option value="203">Sweden</option>
                                                                <option value="204">Switzerland</option>
                                                                <option value="205">
                                                                    Syrian Arab Republic
                                                                </option>
                                                                <option value="206">Taiwan</option>
                                                                <option value="207">Tajikistan</option>
                                                                <option value="208">
                                                                    Tanzania, United Republic of
                                                                </option>
                                                                <option value="209">Thailand</option>
                                                                <option value="210">Togo</option>
                                                                <option value="211">Tokelau</option>
                                                                <option value="212">Tonga</option>
                                                                <option value="213">Trinidad and Tobago</option>
                                                                <option value="255">Tristan da Cunha</option>
                                                                <option value="214">Tunisia</option>
                                                                <option value="215">Turkey</option>
                                                                <option value="216">Turkmenistan</option>
                                                                <option value="217">
                                                                    Turks and Caicos Islands
                                                                </option>
                                                                <option value="218">Tuvalu</option>
                                                                <option value="219">Uganda</option>
                                                                <option value="220">Ukraine</option>
                                                                <option value="221">
                                                                    United Arab Emirates
                                                                </option>
                                                                <option value="222" selected="selected">
                                                                    United Kingdom
                                                                </option>
                                                                <option value="223">United States</option>
                                                                <option value="224">
                                                                    United States Minor Outlying Islands
                                                                </option>
                                                                <option value="225">Uruguay</option>
                                                                <option value="226">Uzbekistan</option>
                                                                <option value="227">Vanuatu</option>
                                                                <option value="228">
                                                                    Vatican City State (Holy See)
                                                                </option>
                                                                <option value="229">Venezuela</option>
                                                                <option value="230">Viet Nam</option>
                                                                <option value="231">
                                                                    Virgin Islands (British)
                                                                </option>
                                                                <option value="232">
                                                                    Virgin Islands (U.S.)
                                                                </option>
                                                                <option value="233">
                                                                    Wallis and Futuna Islands
                                                                </option>
                                                                <option value="234">Western Sahara</option>
                                                                <option value="235">Yemen</option>
                                                                <option value="238">Zambia</option>
                                                                <option value="239">Zimbabwe</option>
                                                            </select>
                                                            <!-- Error Country -->
                                                            <div class="for-error error-country"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label" for="input-zone">Region /
                                                            State</label>
                                                        <div class="col-sm-10">
                                                            <select name="zone_id" id="input-zone"
                                                                class="form-control"></select>
                                                            <!-- Error Zone -->
                                                            <div class="for-error error-zone"></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>Your Password</legend>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label"
                                                            for="input-register-password">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" value=""
                                                                placeholder="Password" id="input-register-password"
                                                                class="form-control" />
                                                            <!-- Error Password -->
                                                            <div class="for-error error-password"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="col-sm-2 control-label" for="input-confirm">Password
                                                            Confirm</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="confirm" value=""
                                                                placeholder="Password Confirm" id="input-confirm"
                                                                class="form-control" />
                                                            <!-- Error Confirm Password -->
                                                            <div class="for-error error-confirm"></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>Newsletter</legend>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Subscribe</label>
                                                        <div class="col-sm-10">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="newsletter" value="1" />
                                                                Yes</label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="newsletter" value="0"
                                                                    checked="checked" />
                                                                No</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="buttons">
                                                    <div class="pull-right">
                                                        <button type="button" onclick="ocajaxlogin.registerAction();"
                                                            class="button">
                                                            <span>Continue</span>
                                                        </button>
                                                        <img class="ajax-load-img" alt=""
                                                            src="image/catalog/AjaxLoader.gif" width="30"
                                                            height="30" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="alert alert-danger for-error error-warning">
                                            <i class="fa fa-exclamation-circle"></i><span></span>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        // Sort the custom fields
                                        $("#account .form-group[data-sort]")
                                            .detach()
                                            .each(function() {
                                                if (
                                                    $(this).attr("data-sort") >= 0 &&
                                                    $(this).attr("data-sort") <=
                                                    $("#account .form-group").length
                                                ) {
                                                    $("#account .form-group")
                                                        .eq($(this).attr("data-sort"))
                                                        .before(this);
                                                }

                                                if (
                                                    $(this).attr("data-sort") >
                                                    $("#account .form-group").length
                                                ) {
                                                    $("#account .form-group:last").after(this);
                                                }

                                                if (
                                                    $(this).attr("data-sort") <
                                                    -$("#account .form-group").length
                                                ) {
                                                    $("#account .form-group:first").before(this);
                                                }
                                            });

                                        $("#address .form-group[data-sort]")
                                            .detach()
                                            .each(function() {
                                                if (
                                                    $(this).attr("data-sort") >= 0 &&
                                                    $(this).attr("data-sort") <=
                                                    $("#address .form-group").length
                                                ) {
                                                    $("#address .form-group")
                                                        .eq($(this).attr("data-sort"))
                                                        .before(this);
                                                }

                                                if (
                                                    $(this).attr("data-sort") >
                                                    $("#address .form-group").length
                                                ) {
                                                    $("#address .form-group:last").after(this);
                                                }

                                                if (
                                                    $(this).attr("data-sort") <
                                                    -$("#address .form-group").length
                                                ) {
                                                    $("#address .form-group:first").before(this);
                                                }
                                            });

                                        $("input[name='customer_group_id']").on(
                                            "change",
                                            function() {
                                                $.ajax({
                                                    url: "index.php?route=account/register/customfield&customer_group_id=" +
                                                        this.value,
                                                    dataType: "json",
                                                    success: function(json) {
                                                        $(".custom-field").hide();
                                                        $(".custom-field").removeClass("required");

                                                        for (i = 0; i < json.length; i++) {
                                                            custom_field = json[i];

                                                            $(
                                                                "#custom-field" +
                                                                custom_field["custom_field_id"]
                                                            ).show();

                                                            if (custom_field["required"]) {
                                                                $(
                                                                    "#custom-field" +
                                                                    custom_field["custom_field_id"]
                                                                ).addClass("required");
                                                            }
                                                        }
                                                    },
                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                        // alert(
                                                        //   thrownError +
                                                        //     "\r\n" +
                                                        //     xhr.statusText +
                                                        //     "\r\n" +
                                                        //     xhr.responseText
                                                        // );
                                                    },
                                                });
                                            }
                                        );

                                        $("input[name='customer_group_id']:checked").trigger(
                                            "change"
                                        );
                                        //-->
                                    </script>
                                    <script type="text/javascript">
                                        $("button[id^='button-custom-field']").on(
                                            "click",
                                            function() {
                                                var node = this;

                                                $("#form-upload").remove();

                                                $("body").prepend(
                                                    '<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>'
                                                );

                                                $("#form-upload input[name='file']").trigger("click");

                                                timer = setInterval(function() {
                                                    if (
                                                        $("#form-upload input[name='file']").val() != ""
                                                    ) {
                                                        clearInterval(timer);

                                                        $.ajax({
                                                            url: "index.php?route=tool/upload",
                                                            type: "post",
                                                            dataType: "json",
                                                            data: new FormData($("#form-upload")[0]),
                                                            cache: false,
                                                            contentType: false,
                                                            processData: false,
                                                            beforeSend: function() {
                                                                $(node).button("loading");
                                                            },
                                                            complete: function() {
                                                                $(node).button("reset");
                                                            },
                                                            success: function(json) {
                                                                $(node).parent().find(".text-danger").remove();

                                                                if (json["error"]) {
                                                                    $(node)
                                                                        .parent()
                                                                        .find("input")
                                                                        .after(
                                                                            '<div class="text-danger">' +
                                                                            json["error"] +
                                                                            "</div>"
                                                                        );
                                                                }

                                                                if (json["success"]) {
                                                                    alert(json["success"]);

                                                                    $(node)
                                                                        .parent()
                                                                        .find("input")
                                                                        .attr("value", json["code"]);
                                                                }
                                                            },
                                                            error: function(xhr, ajaxOptions, thrownError) {
                                                                // alert(
                                                                //   thrownError +
                                                                //     "\r\n" +
                                                                //     xhr.statusText +
                                                                //     "\r\n" +
                                                                //     xhr.responseText
                                                                // );
                                                            },
                                                        });
                                                    }
                                                }, 500);
                                            }
                                        );
                                        //-->
                                    </script>
                                    <script type="text/javascript">
                                        $(".date").datetimepicker({
                                            pickTime: false,
                                        });

                                        $(".time").datetimepicker({
                                            pickDate: false,
                                        });

                                        $(".datetime").datetimepicker({
                                            pickDate: true,
                                            pickTime: true,
                                        });
                                        //-->
                                    </script>
                                    <script type="text/javascript">
                                        $("select[name='country_id']").on("change", function() {
                                            $.ajax({
                                                url: "index.php?route=account/account/country&country_id=" +
                                                    this.value,
                                                dataType: "json",
                                                beforeSend: function() {
                                                    $("select[name='country_id']").after(
                                                        ' <i class="fa fa-circle-o-notch fa-spin"></i>'
                                                    );
                                                },
                                                complete: function() {
                                                    $(".fa-spin").remove();
                                                },
                                                success: function(json) {
                                                    if (json["postcode_required"] == "1") {
                                                        $("input[name='postcode']")
                                                            .parent()
                                                            .parent()
                                                            .addClass("required");
                                                    } else {
                                                        $("input[name='postcode']")
                                                            .parent()
                                                            .parent()
                                                            .removeClass("required");
                                                    }

                                                    html =
                                                        '<option value=""> --- Please Select --- </option>';

                                                    if (json["zone"] != "") {
                                                        for (i = 0; i < json["zone"].length; i++) {
                                                            html +=
                                                                '<option value="' +
                                                                json["zone"][i]["zone_id"] +
                                                                '"';

                                                            if (json["zone"][i]["zone_id"] == "") {
                                                                html += ' selected="selected"';
                                                            }

                                                            html +=
                                                                ">" + json["zone"][i]["name"] + "</option>";
                                                        }
                                                    } else {
                                                        html +=
                                                            '<option value="0" selected="selected"> --- None --- </option>';
                                                    }

                                                    $("select[name='zone_id']").html(html);
                                                },
                                                error: function(xhr, ajaxOptions, thrownError) {
                                                    //   alert(
                                                    //     thrownError +
                                                    //       "\r\n" +
                                                    //       xhr.statusText +
                                                    //       "\r\n" +
                                                    //       xhr.responseText
                                                    //   );
                                                },
                                            });
                                        });

                                        $("select[name='country_id']").trigger("change");
                                        //-->
                                    </script>
                                </div>
                            </div>
                            <div class="account-success">
                                <div class="ajax-content">
                                    <div class="ajax-container">
                                        <div class="success-content">
                                            <div class="page-title">
                                                <h1>Your Account Has Been Created!</h1>
                                            </div>
                                            <p>
                                                Congratulations! Your new account has been successfully
                                                created!
                                            </p>
                                            <p>
                                                You can now take advantage of member privileges to
                                                enhance your online shopping experience with us.
                                            </p>
                                            <p>
                                                If you have ANY questions about the operation of this
                                                online shop, please e-mail the store owner.
                                            </p>
                                            <p>
                                                A confirmation has been sent to the provided e-mail
                                                address. If you have not received it within the hour,
                                                please
                                                <a href="index2724.html?route=information/contact">contact us</a>.
                                            </p>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <button class="button"
                                                        onclick="window.location.href='indexe223.html?route=account/account'">
                                                        <span>Continue</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="logout-success">
                                <div class="ajax-content">
                                    <div class="ajax-container">
                                        <div class="success-content">
                                            <div class="page-title">
                                                <h1>Account Logout</h1>
                                            </div>
                                            <p>
                                                You have been logged off your account. It is now safe to
                                                leave the computer.
                                            </p>
                                            <p>
                                                Your shopping cart has been saved, the items inside it
                                                will be restored whenever you log back into your
                                                account.
                                            </p>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <button class="button"
                                                        onclick="window.location.href='index9328.html?route=common/home'">
                                                        <span>Continue</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="opc-hidden">
                            <input type="hidden" id="input-opc-status" value="1" />
                        </div> --}}
                        <div class="main-row slider-group" style="margin-bottom: 36px;">
                            <div class="">
                                <div class="row">
                                    <div class="main-col col-sm-12 col-md-12">
                                        <div class="row sub-row">

                                            <!-- sub-col -->
                                            <div class="sub-col col-sm-12 col-md-12">
                                                <div class="banner7" style="margin-top: 0 !important">
                                                    <div class="oc-banner7-container">
                                                        <div class="flexslider oc-nivoslider">
                                                            <div class="oc-loading"></div>
                                                            @if (!empty($banners) && count($banners) > 0)
                                                                @include('site.layout.slider')
                                                            @endif

                                                            @foreach ($banners as $key => $banner)
                                                                <div id="banner7-caption{{ $key + 1 }}"
                                                                    class="banner7-caption nivo-html-caption nivo-caption">
                                                                    <div class="timeloading"></div>
                                                                    <div
                                                                        class="banner7-content slider-{{ $key + 1 }}">
                                                                        <div class="text-content">
                                                                            <h1 class="title1">{{ $banner->title }}</h1>
                                                                            {{-- <h2 class="sub-title">{{ $banner->sub_title }} --}}
                                                                            </h2>
                                                                            <div class="banner7-des">
                                                                                <p>{{ $banner->description }}</p>
                                                                            </div>
                                                                            <div class="banner7-readmore">
                                                                                <a href="{{ $banner->url }}"
                                                                                    title="{{ $banner->button_name }}">{{ $banner->button_name }}</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- banner7 -->
                                                <script type="text/javascript">
                                                    $(window).load(function() {
                                                        $("#oc-inivoslider").nivoSlider({
                                                            effect: "random",
                                                            slices: 15,
                                                            boxCols: 8,
                                                            boxRows: 4,
                                                            manualAdvance: false,
                                                            animSpeed: 500,
                                                            pauseTime: "5000",
                                                            startSlide: 0,
                                                            controlNav: true,
                                                            directionNav: false,
                                                            controlNavThumbs: false,
                                                            pauseOnHover: true,
                                                            prevText: '<i class="fa fa-angle-left"></i>',
                                                            nextText: '<i class="fa fa-angle-right"></i>',
                                                            afterLoad: function() {
                                                                $(".oc-loading").css("display", "none");
                                                                $(".timeloading").css("animation-duration", "5000ms");
                                                            },
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('site.layout.products')
                    </div>
                </div>
            </div>
        </div>

        @if (!empty($parentCategory->blogs) && count($parentCategory->blogs) > 0)
            @include('site.layout.blogsInParentCategory')
        @endif

        <script type="text/javascript">
            $(document).ready(function() {
                $(".tab_container").each(() => {
                    $(this).find(".tab_content").hide();
                    $(this).find(".tab_content:nth-child(1)").show();
                });
                $("ul.tabs").each(() => {
                    $(this).find("li:nth-child(1)").addClass("active");
                });

                $("ul.tabs li").click(function() {
                    $(this).parent().find("li").removeClass("active");

                    $(this).addClass("active");

                    // $(".tab_content").hide();
                    // $(".tab_content").removeClass("animate1 wiggle");
                    var activeTab = $(this).attr("rel");
                    $("#" + activeTab)
                        .parent()
                        .find(".tab_content")
                        .hide()
                        .removeClass("animate1 wiggle");
                    $("#" + activeTab).addClass("animate1 wiggle");
                    $("#" + activeTab).fadeIn();
                });
            });
        </script>

        <script type="text/javascript">
            $("#review").delegate(".pagination a", "click", function(e) {
                e.preventDefault();

                $("#review").fadeOut("slow");

                $("#review").load(this.href);

                $("#review").fadeIn("slow");
            });

            $("#review").load(
                "index4d4c.html?route=product/product/review&amp;product_id=52"
            );

            $("#button-review").on("click", function() {
                $.ajax({
                    url: "index.php?route=product/product/write&product_id=52",
                    type: "post",
                    dataType: "json",
                    data: $("#form-review").serialize(),
                    beforeSend: function() {
                        $("#button-review").button("loading");
                    },
                    complete: function() {
                        $("#button-review").button("reset");
                    },
                    success: function(json) {
                        $(".alert-success, .alert-danger").remove();

                        if (json["error"]) {
                            $("#review").after(
                                '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' +
                                json["error"] +
                                "</div>"
                            );
                        }

                        if (json["success"]) {
                            $("#review").after(
                                '<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' +
                                json["success"] +
                                "</div>"
                            );

                            $("input[name='name']").val("");
                            $("textarea[name='text']").val("");
                            $("input[name='rating']:checked").prop("checked", false);
                        }
                    },
                });
            });
            var minimum = 1;
            $("#input-quantity").change(function() {
                if ($(this).val() < minimum) {
                    alert("Minimum Quantity: " + minimum);
                    $("#input-quantity").val(minimum);
                }
            });
            // increase number of product
            function minus(minimum) {
                var currentval = parseInt($("#input-quantity").val());
                $("#input-quantity").val(currentval - 1);
                if (
                    $("#input-quantity").val() <= 0 ||
                    $("#input-quantity").val() < minimum
                ) {
                    alert("Minimum Quantity: " + minimum);
                    $("#input-quantity").val(minimum);
                }
            }
            // decrease of product
            function plus() {
                var currentval = parseInt($("#input-quantity").val());
                $("#input-quantity").val(currentval + 1);
            }
            $("#minus").click(function() {
                minus(minimum);
            });
            $("#plus").click(function() {
                plus();
            });
            // zoom
            $(".thumbnails img").elevateZoom({
                zoomType: "window",
                cursor: "crosshair",
                gallery: "gallery_01",
                galleryActiveClass: "active",
                imageCrossfade: true,
                responsive: true,
                zoomWindowOffetx: 0,
                zoomWindowOffety: 0,
            });
            // slider
            $(".image-additional").owlCarousel({
                navigation: true,
                pagination: false,
                slideSpeed: 500,
                lazyLoad: true,
                goToFirstSpeed: 1500,
                addClassActive: true,
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [1024, 3],
                itemsTablet: [640, 3],
                itemsMobile: [480, 3],

                afterInit: function() {
                    $("#gallery_01 .owl-wrapper .owl-item:first-child").addClass(
                        "active"
                    );
                },
                beforeInit: function() {
                    $(".image-additional .thumbnail").show();
                },
            });
            $("#gallery_01 .owl-item .thumbnail:first").addClass("active2");
            $("#gallery_01 .owl-item .thumbnail").each(function() {
                $(this).click(function() {
                    $("#gallery_01 .owl-item").removeClass("active2");
                    $(this).parent().addClass("active2");
                });
            });
            // related products
            $(".related-product").owlCarousel({
                navigation: true,
                pagination: false,
                addClassActive: true,
                lazyLoad: true,
                slideSpeed: 500,
                goToFirstSpeed: 1500,
                items: 5,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [991, 3],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1],

                afterInit: function() {
                    this.$owlItems.removeClass("first");
                    this.$owlItems.removeClass("last");
                    this.$owlItems.eq(this.currentItem).addClass("first");
                    this.$owlItems
                        .eq(this.currentItem + (this.owl.visibleItems.length - 1))
                        .addClass("last");
                },
                afterAction: function(el) {
                    this.$owlItems.removeClass("first");
                    this.$owlItems.removeClass("last");
                    this.$owlItems.eq(this.currentItem).addClass("first");
                    this.$owlItems
                        .eq(this.currentItem + (this.owl.visibleItems.length - 1))
                        .addClass("last");
                },
            });
            //-->
        </script>

        @include('site.layout.footer')
    </body>
@endsection
