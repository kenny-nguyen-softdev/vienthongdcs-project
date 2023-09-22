<nav id="top">
    <div class="container">
        <ul class="box box-left">
            @foreach ($headerData->headerPosts as $headerPost)
                <li id="menu-item-8572" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8572">
                    <a href="{{ route('site.headerPost.show', [$headerPost->slug]) }}">{!! $headerPost->icon_code !!}
                        {{ $headerPost->name }}</a>
                </li>
            @endforeach
            <li id="menu-item-8573" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8573">
                <a href="{{ route('site.consultant.index') }}"><i class="fa fa-comment"></i> Tư vấn miễn phí</a>
            </li>
            {{-- <li id="menu-item-8574" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8574">
                <a href="cua-hang/index.html"><i class="fa fa-check-circle"></i> Sản phẩm chính hãng</a>
            </li> --}}
            <li id="menu-item-8575" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8575">
                <a href="{{ route('site.cart.show') }}"><i class="fa fa-shopping-cart"></i> Thông tin giỏ hàng</a>
            </li>
            <li id="menu-item-8576" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8576">
                <a href="{{ route('site.product.passsedProduct') }}"><i class="fa fa-eye"></i> Sản phẩm đã xem</a>
            </li>
        </ul>
        <ul class="box box-right">
            <li>
                <div class="btn-group">
                    @if (Auth::guard('customer')->check())
                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::guard('customer')->user()->name }}
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu" id="top-links">
                            <ul class="ul-account list-unstyled">
                                <li>
                                    <a id="a-register-link" href="{{ route('site.customer.accountInformation') }}">Thông
                                        tin tài khoản</a>
                                </li>
                                <li>
                                    {{-- <a id="a-login-link" href="{{ route('site.customer.login') }}">Đăng nhập</a> --}}
                                    <form action="{{ route('site.customer.logout') }}" class="logout-form"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="log_out" id="logout-button">
                                            <p class="icon_dx_mb"></p><b
                                                style="display: inline-block; margin-top: 5px; user-select: auto;">Thoát</b>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user" aria-hidden="true"></i> Tài khoản
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu" id="top-links">
                            <ul class="ul-account list-unstyled">
                                <li>
                                    <a id="a-register-link" href="{{ route('site.customer.register') }}">Đăng kí</a>
                                </li>
                                <li>
                                    <a id="a-login-link" href="{{ route('site.customer.login') }}">Đăng nhập</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="">
    <nav class="mobile-nav">
        <div class="">
            <div class="user">
                <img src="{{ asset('template/site/image/catalog/icon_account_white.svg') }}" />
                <div class="info">
                    <a href="{{ route('site.customer.login') }}">ĐĂNG NHẬP</a>
                    /
                    <a href="{{ route('site.customer.register') }}">ĐĂNG KÝ</a>
                </div>
            </div>
            <div class="mobile-menu">
                <a id="taga" href="{{ route('site.home') }}"><span>Trang chủ</span></a>

                <a id="taga" href="javascript:void(0)"><span>Giới thiệu</span>
                    <i class="fa fa-chevron-down btn" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample"></i>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            @foreach ($headerData->introductions as $introduction)
                                <a id="taga1"
                                    href="{{ route('site.introduction.show', [$introduction->slug]) }}"><span>{{ $introduction->title }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>

                @foreach ($headerData->blogs as $blog)
                    <a id="taga"
                        href="{{ route('site.blog.index', [$blog->slug]) }}"><span>{{ $blog->name }}</span></a>
                @endforeach

                <a id="taga" href="{{ route('site.consultant.index') }}"><span>Tư vấn</span></a>
                <a id="taga" href="{{ route('site.contact.index') }}"><span>Liên Hệ</span></a>

            </div>
            <div class="desc">
                @foreach ($headerData->headerPosts as $headerPost)
                    <a
                        href="{{ route('site.headerPost.show', [$headerPost->slug]) }}">{!! $headerPost->icon_code !!}{{ $headerPost->name }}</a>
                @endforeach

                <a href="{{ route('site.consultant.index') }}"><i class="fa fa-comment"></i> Tư vấn miễn phí</a>
                <a href="{{ route('site.cart.show') }}"><i class="fa fa-shopping-cart"></i> Thông tin giỏ hàng</a>
                <a href="{{ route('site.product.passsedProduct') }}"><i class="fa fa-eye"></i> Sản phẩm đã xem</a>
            </div>
        </div>
    </nav>
</div>

<header>
    <div class="header-inner">
        <div class="container">
            <div class="container-inner">
                <div class="logo-container">
                    @php
                        $logo = $headerData->company->logo;
                    @endphp
                    <div id="logo">
                        <a href="{{ route('site.home') }}">
                            <img src="{{ asset("storage/uploads/$logo") }}" title="{{ $headerData->company->name }}"
                                alt="{{ $headerData->company->name }}" class="img-responsive" /></a>
                    </div>
                    <button class="hamburger">
                        <div class="bar"></div>
                    </button>
                    <div class="box-cart-mobile">
                        <div id="cart" class="btn-group btn-block">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                <i class="fa fa-shopping-cart"></i>
                                <span id="cart-total"><span
                                        class="item-cart">{{ !empty($headerData->carts) && count($headerData->carts) > 0 && count($headerData->carts) > Cart::instance('wishlist')->count() ? count($headerData->carts) : Cart::instance('wishlist')->count() }}</span></span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li class="has-scroll">
                                    <table class="table">
                                        <tbody>
                                            @php
                                                $subTotal = 0;
                                            @endphp
                                            @if (!empty($headerData->carts) && count($headerData->carts) > 0)
                                                @foreach ($headerData->carts as $cart)
                                                    @php
                                                        $subTotal += $cart->subtotal;
                                                    @endphp
                                                    <tr>
                                                        <td class="text-center">
                                                            @php
                                                                $featured_image = $cart->options['img'];
                                                            @endphp
                                                            <a
                                                                href="{{ route('site.product.show', [$cart->options['slug']]) }}"><img
                                                                    src="{{ asset("storage/uploads/$featured_image") }}"
                                                                    alt="{{ $cart->name }}"
                                                                    title="{{ $cart->name }}" height="80px"
                                                                    width="80px"></a>
                                                        </td>
                                                        <td class="text-left info-item">
                                                            <a class="cart-name"
                                                                href="{{ route('site.product.show', [$cart->options['slug']]) }}">{{ $cart->name }}</a>
                                                            <p class="cart-quantity">Số Lượng: {{ $cart->qty }}</p>
                                                            <p class="cart-price">{{ number_format($cart->price) }}đ
                                                            </p>
                                                        </td>
                                                        <td class="text-center cart-close"><button type="button"
                                                                onclick="deleteItemInCart('{{ route('site.cart.destroy') }}','{{ $cart->rowId }}')"
                                                                title="Remove" class="btn btn-danger btn-xs"><i
                                                                    class="fa fa-times"></i></button></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <p class="text-center cart-empty" style="user-select: auto;">
                                                    Giỏ hàng của bạn trống!
                                                </p>
                                            @endif

                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-right"><strong>Tạm Tính :</strong></td>
                                                    <td class="text-right">{{ number_format($subTotal) }}đ</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Tổng Cộng :</strong></td>
                                                    <td class="text-right">
                                                        {{ !empty($headerData->carts) && count($headerData->carts) > 0 ? Cart::subtotal(0, '.', ',') : 0 }}đ
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <p class="text-center cart-button"><a
                                            href="{{ route('site.cart.show') }}"><strong>Xew Giỏ Hàng<i
                                                    class="fa fa-angle-right"></i></strong></a><a
                                            href="{{ route('site.payment.checkout') }}"><strong>Thanh Toán<i
                                                    class="fa fa-angle-right"></i></strong></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-search">
                    <div class="top-search">
                        <div id="search-by-category">
                            <form id="form_search" action="{{ route('site.search.searchProduct') }}"
                                class="clearfix" method="GET">
                                <div class="search-container">
                                    <input type="text" name="q" id="text-search"
                                        value="{{ Request::input('q') }}" placeholder="Tìm kiếm sản phẩm..."
                                        class="" />
                                    <!-- <div class="categories-container">
                                        <div class="hover-cate">
                                            <p class="hover-cate-btn">
                                                <span class="cate-selected" data-value="0">Tất cả</span><i
                                                    class="fa fa-angle-down"></i>
                                            </p>
                                            
                                        </div>
                                    </div> -->
                                    <select class="categories-container" name="cate">
                                        <option class="item-cate" data-value="0"
                                            {{ empty(request()->input('cate')) ? 'active' : '' }}>
                                            Tất cả
                                        </option>
                                        @foreach ($headerData->parentCategories as $parentCategory)
                                            <option data-value="{{ $parentCategory->id }}" class="item-cate"
                                                value="{{ $parentCategory->id }}"
                                                {{ request()->input('cate') == $parentCategory->id ? 'active' : '' }}>
                                                {{ $parentCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div id="sp-btn-search" class="">
                                    <button type="submit" id="btn-search-category" class="btn btn-default btn-lg">
                                        Search
                                    </button>
                                </div>
                            </form>
                            <div class="search-ajax">
                                <div class="ajax-loader-container" style="display: none">
                                    <img src="{{ asset('template/site/image/catalog/AjaxLoader.gif') }}"
                                        class="ajax-load-img" width="30" height="30" alt="" />
                                </div>
                                <div class="ajax-result-container">
                                    <!-- Content of search results -->
                                </div>
                            </div>
                            <input type="hidden" id="ajax-search-enable" value="1" />
                        </div>


                    </div>
                    <div class="box-cart">
                        <div id="cart" class="btn-group btn-block">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                <i class="fa fa-shopping-cart"></i>
                                <span id="cart-total"><span
                                        class="item-cart">{{ !empty($headerData->carts) && count($headerData->carts) > 0 && count($headerData->carts) > Cart::instance('wishlist')->count() ? count($headerData->carts) : Cart::instance('wishlist')->count() }}</span></span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li class="has-scroll">
                                    <table class="table">
                                        <tbody>
                                            @php
                                                $subTotal = 0;
                                            @endphp
                                            @if (!empty($headerData->carts) && count($headerData->carts) > 0)

                                                @foreach ($headerData->carts as $cart)
                                                    @php
                                                        $subTotal += $cart->subtotal;
                                                    @endphp
                                                    <tr>
                                                        <td class="text-center">
                                                            @php
                                                                $featured_image = $cart->options['img'];
                                                            @endphp
                                                            <a
                                                                href="{{ route('site.product.show', [$cart->options['slug']]) }}"><img
                                                                    src="{{ asset("storage/uploads/$featured_image") }}"
                                                                    alt="{{ $cart->name }}"
                                                                    title="{{ $cart->name }}" height="100px"
                                                                    width="100px"></a>
                                                        </td>
                                                        <td class="text-left info-item">
                                                            <a class="cart-name"
                                                                href="{{ route('site.product.show', [$cart->options['slug']]) }}">{{ $cart->name }}</a>
                                                            <p class="cart-quantity">Số Lượng: {{ $cart->qty }}</p>
                                                            <p class="cart-price">{{ number_format($cart->price) }}đ
                                                            </p>
                                                        </td>
                                                        <td class="text-center cart-close"><button type="button"
                                                                onclick="deleteItemInCart('{{ route('site.cart.destroy') }}','{{ $cart->rowId }}')"
                                                                title="Remove" class="btn btn-danger btn-xs"><i
                                                                    class="fa fa-times"></i></button></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <p class="text-center cart-empty" style="user-select: auto;">
                                                    Giỏ hàng của bạn trống!
                                                </p>
                                            @endif

                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-right"><strong>Tạm Tính :</strong></td>
                                                    <td class="text-right">{{ number_format($subTotal) }}đ</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>Tổng Cộng :</strong></td>
                                                    <td class="text-right">
                                                        {{ !empty($headerData->carts) && count($headerData->carts) > 0 ? Cart::subtotal(0, '.', ',') : 0 }}đ
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <p class="text-center cart-button"><a
                                            href="{{ route('site.cart.show') }}"><strong>Xew Giỏ Hàng<i
                                                    class="fa fa-angle-right"></i></strong></a><a
                                            href="{{ route('site.payment.checkout') }}"><strong>Thanh Toán<i
                                                    class="fa fa-angle-right"></i></strong></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col col-md-3 col-xs-12 col-menu">
                    <div class="vermagemenu visible-lg visible-md">
                        <div class="content-vermagemenu">
                            <h2><i class="fa fa-align-justify"></i>Tất cả danh mục</h2>
                            <div class="navleft-container">
                                <div id="pt_vmegamenu" class="pt_vmegamenu">

                                    @foreach ($headerData->parentCategories as $key => $parentCategory)
                                        <div id="pt_ver_menu{{ $key + 1 }}"
                                            class="pt_ver_menu nav-{{ $key + 1 }} {{ !empty($parentCategory->firstSubCategories) && count($parentCategory->firstSubCategories) > 0 ? 'had-child' : 'pt_ver_menu_no_child' }} {{ $key + 1 >= 10 ? 'over-menu' : '' }}">
                                            <img src="{{ asset("storage/uploads/$parentCategory->icon_image") }}"
                                                alt="{{ $parentCategory->name }}" />
                                            <div class="parentMenu">
                                                <a
                                                    href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">
                                                    <span>{{ $parentCategory->name }}</span>
                                                </a>
                                            </div>
                                            <div id="popup56" class="popup" style="display: none; width: 815px">
                                                <div class="content-popup">
                                                    @if (!empty($parentCategory->firstSubCategories) && count($parentCategory->firstSubCategories) > 0)
                                                        <div class="arrow-left-menu"></div>
                                                        <div class="block1" id="block156">
                                                            @foreach ($parentCategory->firstSubCategories as $firstSubCategory)
                                                                <div class="column first col1">
                                                                    <div class="itemMenu level1">
                                                                        <a class="itemMenuName level0 actParent"
                                                                            href="{{ route('site.firstSubCategory.index', [$parentCategory->slug, $firstSubCategory->slug]) }}"><strong>{{ $firstSubCategory->name }}</strong></a>
                                                                        <div class="itemSubMenu level0">
                                                                            <div class="itemMenu level1">
                                                                                @foreach ($firstSubCategory->secondSubCategories as $secondSubCategory)
                                                                                    <a class="itemMenuName level0 act"
                                                                                        href="{{ route('site.secondSubCategory.index', [$parentCategory->slug, $firstSubCategory->slug, $secondSubCategory->slug]) }}"><span>{{ $secondSubCategory->name }}</span>
                                                                                    </a>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <div class="clearBoth"></div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @if (count($headerData->parentCategories) > 9)
                                        <div class="more-wrap pt_ver_menu">
                                            <div class="parentMenu">
                                                <a href="javascript:void(0);" class="more-ver-menu"><span><i
                                                            class="fa fa-plus"></i>Danh mục khác</span></a>
                                            </div>
                                        </div>
                                        <div class="close-wrap pt_ver_menu over-menu">
                                            <div class="parentMenu">
                                                <a href="javascript:void(0);" class="close-ver-menu"><span><i
                                                            class="fa fa-minus"></i>Close Menu</span></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        //<![CDATA[
                        var CUSTOMMENU_POPUP_EFFECT = 0;
                        var CUSTOMMENU_POPUP_TOP_OFFSET = 20; //]]>
                        $(".vermagemenu h2").click(function() {
                            $(".navleft-container").slideToggle();
                        });
                    </script>

                </div>
                <div class="col col-md-9 col-xs-12 hoz-menu">
                    <div class="hozmenu-container">
                        <div class="ma-nav-mobile-container">
                            <div id="navbar-inner" class="navbar-inner navbar-inactive">
                                <div class="menu-mobile">
                                    <a class="btn btn-navbar navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>
                                    <span class="brand navbar-brand">Tất cả danh mục</span>
                                </div>

                                <ul id="ma-mobilemenu" class="mobilemenu nav-collapse collapse">
                                    @foreach ($headerData->parentCategories as $parentCategory)
                                        <li>
                                            <span
                                                class="button-view1 {{ !empty($parentCategory->firstSubCategories) && count($parentCategory->firstSubCategories) > 0 ? 'collapse1' : 'no-close' }}"><a
                                                    href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">{{ $parentCategory->name }}</a></span>
                                            <ul class="level2">
                                                @if (!empty($parentCategory->firstSubCategories) && count($parentCategory->firstSubCategories) > 0)
                                                    @foreach ($parentCategory->firstSubCategories as $firstSubCategory)
                                                        <li>
                                                            <span
                                                                class="button-view2 {{ !empty($firstSubCategory->secondSubCategories) && count($firstSubCategory->secondSubCategories) > 0 ? 'collapse1' : 'no-close' }}"><a
                                                                    href="{{ route('site.firstSubCategory.index', [$parentCategory->slug, $firstSubCategory->slug]) }}">{{ $firstSubCategory->name }}</a></span>
                                                            <ul class="level3">
                                                                @foreach ($firstSubCategory->secondSubCategories as $secondSubCategory)
                                                                    <li>
                                                                        <span class="no-close"><a
                                                                                href="{{ route('site.secondSubCategory.index', [$parentCategory->slug, $firstSubCategory->slug, $secondSubCategory->slug]) }}">{{ $secondSubCategory->name }}</a></span>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="nav-container visible-lg visible-md">
                            <div class="nav1">
                                <div class="nav2">
                                    <div id="pt_custommenu" class="pt_custommenu">
                                        <div id="pt_menu_home" class="pt_menu act">
                                            <div class="parentMenu">
                                                <a href="index9328.html?route=common/home"><span>Trang chủ</span></a>
                                            </div>
                                        </div>
                                        <div id="pt_menu113" class="pt_menu nav-3 pt_menu_had_child">
                                            <div class="parentMenu">
                                                <a href="javascript:void(0)">
                                                    <span>Giới thiệu</span>
                                                </a>
                                            </div>
                                            <div id="popup113" class="popup" style="display: none; width: 1250px;">
                                                <div class="inner-popup">
                                                    <div class="block1" id="block1113">
                                                        <div class="column first col1">

                                                            @foreach ($headerData->introductions as $introduction)
                                                                <div class="itemMenu level1"
                                                                    style="padding-bottom: 8px;">
                                                                    <a class="itemMenuName level0 actParent"
                                                                        href="{{ route('site.introduction.show', [$introduction->slug]) }}"><span>{{ $introduction->title }}</span>
                                                                    </a>
                                                                </div>
                                                            @endforeach

                                                        </div>

                                                        <div class="clearBoth"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach ($headerData->blogs as $blog)
                                            <div id="pt_menu_link30" class="pt_menu">
                                                <div class="parentMenu">
                                                    <a
                                                        href="{{ route('site.blog.index', [$blog->slug]) }}"><span>{{ $blog->name }}</span></a>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- <div id="pt_menu133" class="pt_menu nav-2 pt_menu_no_child">
                                            <div class="parentMenu">
                                                <a href="index8248.html?route=product/category&amp;path=133">
                                                    <span>Giải pháp</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="pt_menu133" class="pt_menu nav-2 pt_menu_no_child">
                                            <div class="parentMenu">
                                                <a href="index8248.html?route=product/category&amp;path=133">
                                                    <span>Hỗ trợ kỹ thuật</span>
                                                </a>
                                            </div>
                                        </div> --}}
                                        <div id="pt_menu_link30" class="pt_menu">
                                            <div class="parentMenu">
                                                <a href="{{ route('site.consultant.index') }}"><span>Tư vấn</span></a>
                                            </div>
                                        </div>
                                        <div id="pt_menu_link34" class="pt_menu">
                                            <div class="parentMenu">
                                                <a href="{{ route('site.contact.index') }}"><span>Liên
                                                        hệ</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            //<![CDATA[
                            var body_class = $("body").attr("class");
                            if (body_class.search("common-home") != -1) {
                                $("#pt_menu_home").addClass("act");
                            }

                            var CUSTOMMENU_POPUP_EFFECT = 0;
                            var CUSTOMMENU_POPUP_TOP_OFFSET = 70;
                            //]]>
                        </script>

                    </div>
                </div>
            </div>
        </div>
</header>

<script type="text/javascript">
    $(document).ready(function() {
        $("#static_top_bigone1").owlCarousel({
            autoPlay: false,
            slideSpeed: 1000,
            navigation: false,
            stopOnHover: true,
            pagination: false,
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [991, 2],
            itemsTablet: [767, 2],
            itemsMobile: [567, 1],
            addClassActive: true,
            scrollPerPage: false,
        });
        $("#static_middle_bigone1").owlCarousel({
            autoPlay: false,
            slideSpeed: 1000,
            navigation: false,
            stopOnHover: true,
            pagination: false,
            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [991, 2],
            itemsTablet: [767, 1],
            itemsMobile: [479, 1],
            addClassActive: true,
            scrollPerPage: false,
        });
        $(".ma-corporate-about").owlCarousel({
            autoPlay: false,
            slideSpeed: 1000,
            navigation: false,
            stopOnHover: true,
            pagination: false,
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [991, 3],
            itemsTablet: [767, 2],
            itemsMobile: [479, 1],
            addClassActive: true,
            scrollPerPage: false,
            afterAction: function() {
                $(".ma-corporate-about .owl-wrapper .owl-item").removeClass("last");
                $(".ma-corporate-about .owl-wrapper .owl-item").removeClass(
                    "first"
                );
                $(".ma-corporate-about .owl-wrapper .owl-item").removeClass(
                    "before-active"
                );
                $(
                    ".ma-corporate-about .owl-wrapper .owl-item.active:first"
                ).addClass("first");
                $(
                    ".ma-corporate-about .owl-wrapper .owl-item.active:last"
                ).addClass("last");
                $(".ma-corporate-about .owl-wrapper .owl-item.active:first")
                    .prev()
                    .addClass("before-active");
            },
        });
    });
</script>
