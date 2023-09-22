@extends('site.layout.main')

@section('content')

    <body class="common-home home1">
        @include('site.layout.script_body')

        @include('site.layout.header')

        <div id="content">
            <!-- end row 1-->
            <div class="main-row slider-group">
                <div class="container">
                    <div class="row">
                        <div class="main-col col-sm-12 col-md-12">
                            <div class="row sub-row">
                                <div class="sub-col col-sm-12 col-md-3">
                                    <div id="ajax-login-block"></div>
                                </div>
                                <!-- sub-col -->
                                <div class="sub-col col-sm-12 col-md-9">
                                    <div class="banner7">
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
                                                        <div class="banner7-content slider-{{ $key + 1 }}">
                                                            <div class="text-content">
                                                                <h1 class="title1">{{ $banner->title }}</h1>
                                                                <h2 class="sub-title">{{ $banner->sub_title }}</h2>
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
            <!-- end row 2-->
            <div class="main-row">
                <div class="container">
                    <div class="row">
                        <div class="main-col col-sm-12 col-md-12">
                            <div class="row sub-row">
                                <div class="sub-col col-sm-12 col-md-12">
                                    <script type="text/javascript">
                                        if (typeof OC == "undefined") OC = {};
                                        OC.Countdown = {
                                            TEXT_YEARS: "Years",
                                            TEXT_MONTHS: "Months",
                                            TEXT_WEEKS: "Weeks",
                                            TEXT_DAYS: "Days",
                                            TEXT_HOURS: "Hours",
                                            TEXT_MINUTES: "Mins",
                                            TEXT_SECONDS: "Secs",
                                        };
                                    </script>
                                    <script type="text/javascript" src="catalog/view/javascript/jquery.countdown.js"></script>
                                    <div class="occountdown_module module-nav2 box-module col-md-8">
                                        <div class="countdown-title group-title">
                                            <h2>Sản phẩm mới nhất</h2>
                                        </div>
                                        <div class="owl-container">
                                            <div class="countdown-product-inner">
                                                @for ($i = 1; $i <= count($lastestProducts) - 1; $i++)
                                                    <div class="row_items">
                                                        @for ($j = $i - 1; $j <= $i; $j++)
                                                            <div class="item">
                                                                <div class="item-inner">
                                                                    <div class="images-container">
                                                                        @if ($lastestProducts[$j]->price != 0 &&
                                                                            $lastestProducts[$j]->sale_price != 0 &&
                                                                            $lastestProducts[$j]->price > $lastestProducts[$j]->sale_price)
                                                                            @php
                                                                                $discount_percentage = 0;
                                                                                $discount_percentage = (($lastestProducts[$j]->price - $lastestProducts[$j]->sale_price) * 100) / $lastestProducts[$j]->price;
                                                                            @endphp
                                                                            <div class="label-pro-sale">
                                                                                <span>-{{ ceil($discount_percentage) }}%</span>
                                                                            </div>
                                                                        @endif
                                                                        @php
                                                                            $end = Carbon::parse($lastestProducts[$j]->created_date);

                                                                            $current = Carbon::now();
                                                                            $length = $current->diffInDays($end);
                                                                        @endphp

                                                                        @if ($length < 60)
                                                                            <div class="label-pro-new">
                                                                                <span>Mới</span>
                                                                            </div>
                                                                        @endif
                                                                        <a class="product-image"
                                                                            href="{{ route('site.product.show', [$lastestProducts[$j]->slug]) }}">
                                                                            @php
                                                                                $hover_featured_image = $lastestProducts[$j]->hover_featured_image;
                                                                                $featured_image = $lastestProducts[$j]->featured_image;
                                                                            @endphp
                                                                            <img class="img-r"
                                                                                src="{{ asset("storage/uploads/$hover_featured_image") }}"
                                                                                alt="{{ $lastestProducts[$j]->name }}" />
                                                                            <img src="{{ asset("storage/uploads/$featured_image") }}"
                                                                                alt="{{ $lastestProducts[$j]->name }}" />
                                                                        </a>

                                                                        <div class="actions"></div>
                                                                        <!-- actions -->
                                                                    </div>
                                                                    <!-- image -->

                                                                    <div class="des-container">
                                                                        <h2 class="product-name">
                                                                            <a href="{{ route('site.product.show', [$lastestProducts[$j]->slug]) }}"
                                                                                title="{{ $lastestProducts[$j]->name }}">{{ App\Helpers\StrHelper::substrwords(ucwords(mb_strtolower($lastestProducts[$j]->name, 'UTF-8')), 45) }}</a>
                                                                        </h2>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div
                                                                                    class="rating{{ $lastestProducts[$j]->star }}">
                                                                                    rating</div>
                                                                            </div>
                                                                        </div>

                                                                        @if ($lastestProducts[$j]->price == 0 && $lastestProducts[$j]->sale_price == 0)
                                                                            <div class="price-box box-special">
                                                                                <p class="special-price">
                                                                                    <span class="price">Liên hệ</span>
                                                                                </p>
                                                                            </div>
                                                                        @else
                                                                            @if ($lastestProducts[$j]->price > $lastestProducts[$j]->sale_price)
                                                                                <div class="price-box box-special">
                                                                                    <p class="special-price">
                                                                                        <span
                                                                                            class="price">{{ number_format($lastestProducts[$j]->sale_price) }}₫</span>
                                                                                    </p>
                                                                                    <p class="old-price">
                                                                                        <span
                                                                                            class="price">{{ number_format($lastestProducts[$j]->price) }}₫</span>
                                                                                    </p>
                                                                                </div>
                                                                            @else
                                                                                <div class="price-box box-special">
                                                                                    <p class="special-price">
                                                                                        <span
                                                                                            class="price">{{ number_format($lastestProducts[$j]->sale_price) }}₫</span>
                                                                                    </p>
                                                                                </div>
                                                                            @endif
                                                                        @endif

                                                                        <p class="available">
                                                                            Tình Trạng:<span
                                                                                class="ex-text">{{ $lastestProducts[$j]->inventory_qty > 0 ? 'Còn hàng' : 'Hết hàng' }}</span>
                                                                        </p>
                                                                        <p class="description">
                                                                            {!! strlen($lastestProducts[$j]->description) > 0
                                                                                ? App\Helpers\StrHelper::substrwords(strip_tags($lastestProducts[$j]->description), 80)
                                                                                : '' !!}
                                                                        </p>
                                                                        <div class="actions">
                                                                            @if ($lastestProducts[$j]->inventory_qty > 0)
                                                                                @if ($lastestProducts[$j]->price != 0 && $lastestProducts[$j]->sale_price != 0)
                                                                                    <form class="button-form"
                                                                                        action="{{ route('site.cart.create') }}"
                                                                                        method="post">
                                                                                        @csrf
                                                                                        <input type="hidden"
                                                                                            name="product_id"
                                                                                            value="{{ $lastestProducts[$j]->id }}">
                                                                                        <input type="hidden"
                                                                                            name="qty_in_cart"
                                                                                            value="1">
                                                                                        <button class="button btn-cart"
                                                                                            type="submit"
                                                                                            data-toggle="tooltip"
                                                                                            title="Thêm giỏ hàng">
                                                                                            <span>Thêm giỏ hàng</span>
                                                                                        </button>
                                                                                    </form>
                                                                                @else
                                                                                    <form class="button-form"
                                                                                        action="javascript:void(0)"
                                                                                        method="post">
                                                                                        <button class="button btn-cart"
                                                                                            type="button"
                                                                                            data-toggle="tooltip"
                                                                                            title="Liên Hệ"
                                                                                            style="background-color: #FFD700;">
                                                                                            <span>Liên Hệ</span>
                                                                                        </button>
                                                                                    </form>
                                                                                @endif
                                                                            @else
                                                                                <form class="button-form"
                                                                                    action="javascript:void(0)"
                                                                                    method="post">
                                                                                    <button class="button btn-cart"
                                                                                        type="button" data-toggle="tooltip"
                                                                                        title="Hết Hàng"
                                                                                        style="background-color: red;">
                                                                                        <span>Hết Hàng</span>
                                                                                    </button>
                                                                                </form>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-recent news-wrap-item box-module col-md-4">
                                        <div class="heading group-title">
                                            <a title="{{ $blogs[0]->name }}"
                                                href="{{ route('site.blog.index', [$blogs[0]->slug]) }}"><i
                                                    class="fa fa-newspaper-o" aria-hidden="true"
                                                    style="margin-right: 5px;"></i>{{ $blogs[0]->name }}</a>
                                            <a href="{{ route('site.blog.index', [$blogs[0]->slug]) }}">Xem tất cả <i
                                                    class="fa fa-angle-double-right">
                                                </i>
                                            </a>
                                        </div>
                                        <div class="sh-blog-shortcode style-1">
                                            <div class="row_items">
                                                @php
                                                    $count = 1;
                                                @endphp
                                                @foreach ($blogs[0]->posts as $post)
                                                    @php
                                                        if ($count > 4) {
                                                            break;
                                                        }
                                                    @endphp
                                                    <div class="articles-inner">
                                                        <div class="articles-image">
                                                            <a
                                                                href="{{ route('site.post.show', [$blogs[0]->slug, $post->slug]) }}"><img
                                                                    src="{{ asset("storage/uploads/$post->featured_image") }}"
                                                                    alt="{{ $post->title }}" /></a>
                                                        </div>
                                                        <div class="aritcles-content">
                                                            <a href="{{ route('site.post.show', [$blogs[0]->slug, $post->slug]) }}"
                                                                class="articles-name" title="{{ $post->title }}">
                                                                {{ App\Helpers\StrHelper::substrwords($post->title, 55) }}
                                                            </a>
                                                            <div class="news-excerpt">
                                                                <p>
                                                                    {!! strlen($post->description) > 0 ? App\Helpers\StrHelper::substrwords(strip_tags($post->description), 80) : '' !!}
                                                                </p>

                                                                <a class="read-more"
                                                                    href="{{ route('site.post.show', [$blogs[0]->slug, $post->slug]) }}">Xem
                                                                    thêm...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $count++;
                                                    @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(".countdown-product-inner").owlCarousel({
                                            autoPlay: false,
                                            items: 2,
                                            itemsDesktop: [1199, 1],
                                            itemsDesktopSmall: [991, 1],
                                            itemsTablet: [767, 1],
                                            itemsMobile: [479, 1],
                                            slideSpeed: 1000,
                                            paginationSpeed: 3000,
                                            navigation: true,
                                            stopOnHover: true,
                                            pagination: false,
                                            scrollPerPage: true,
                                            addClassActive: true,
                                            lazyLoad: true,
                                            afterAction: function() {
                                                $(
                                                    ".countdown-product-inner  .owl-wrapper .owl-item"
                                                ).removeClass("first");
                                                $(
                                                    ".countdown-product-inner  .owl-wrapper .owl-item.active:first"
                                                ).addClass("first");
                                            },
                                            afterMove: function() {
                                                x = $(
                                                    ".countdown-tab-content .owl-pagination .owl-page"
                                                ).index(
                                                    $(".countdown-tab-content .owl-pagination .active")
                                                );
                                                var thumbinner = ".thumbinner" + x;
                                                $(".list-thumb .thumb li").removeClass("active");
                                                $(thumbinner).addClass("active");
                                            },
                                        });

                                        var owltimerslider = $(".countdown-product-inner").data(
                                            "owlCarousel"
                                        );

                                        function timerslider(x) {
                                            owltimerslider.goTo(x);
                                        }
                                    </script>

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
                                    @foreach ($parentCategories as $key => $parentCategory)
                                        <div
                                            class="product-tabs-container-slider module-nav2 quickview-add box-module module-style1 col-md-12">
                                            <div class="title-product-tabs group-title">
                                                <h2>{{ $parentCategory->name }}</h2>

                                                <ul class="tabs">

                                                    @foreach ($parentCategory->firstSubCategories as $firstSubCategory)
                                                        @if ($firstSubCategory->is_active == 1)
                                                            <li rel="tab_mostviewed{{ $firstSubCategory->id }}_product">
                                                                <span
                                                                    class="tab_mostviewed{{ $firstSubCategory->id }}_product">{{ $firstSubCategory->name }}</span>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                    <a
                                                        href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">Xem
                                                        tất cả <i class="fa fa-angle-double-right"></i></a>
                                                </ul>
                                            </div>
                                            <div class="owl-container">
                                                <div class="tab_container" id="{{ $key }}">
                                                    @foreach ($parentCategory->firstSubCategories as $firstSubCategory)
                                                        @if ($firstSubCategory->is_active == 1)
                                                            <div id="tab_mostviewed{{ $firstSubCategory->id }}_product"
                                                                class="tab_content">
                                                                <div class="owl-demo-tabproduct">
                                                                    @foreach ($firstSubCategory->products as $product)
                                                                        <div class="row_items">
                                                                            <div class="item">
                                                                                @include('site.layout.product')

                                                                                <!-- item-inner -->
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- .tab_container -->
                                        </div>
                                    @endforeach
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $(
                                                ".product-tabs-container-slider .tabs li:first"
                                            ).addClass("active");
                                            $(".owl-demo-tabproduct").owlCarousel({
                                                items: 5,
                                                autoPlay: false,
                                                slideSpeed: 1000,
                                                navigation: true,
                                                paginationNumbers: true,
                                                pagination: false,
                                                stopOnHover: false,
                                                itemsDesktop: [1199, 3],
                                                itemsDesktopSmall: [991, 2],
                                                itemsTablet: [767, 2],
                                                itemsMobile: [479, 1],
                                                addClassActive: true,
                                                scrollPerPage: false,
                                                afterAction: function() {
                                                    $(
                                                        ".owl-demo-tabproduct .owl-wrapper .owl-item"
                                                    ).removeClass("first");
                                                    $(
                                                        ".owl-demo-tabproduct .owl-wrapper .owl-item"
                                                    ).removeClass("last");
                                                    $(".owl-demo-tabproduct .owl-item").removeClass(
                                                        "before-active"
                                                    );
                                                    $(
                                                        ".owl-demo-tabproduct .owl-wrapper .owl-item.active:nth-child(1)"
                                                    ).addClass("first");
                                                    $(
                                                        ".owl-demo-tabproduct .owl-wrapper .owl-item.active:last"
                                                    ).addClass("last");
                                                    $(
                                                            ".owl-demo-tabproduct .owl-wrapper .owl-item.active:first"
                                                        )
                                                        .prev()
                                                        .addClass("before-active");
                                                },
                                            });

                                        });
                                    </script>

                                    <div class="banner-static static-bottom-bigone3"></div>

                                    <div class="brand-slider">
                                        <div class="brand title-product-tabs group-title">
                                            <h2>Các thương hiệu hàng đầu của chúng tôi</h2>
                                        </div>
                                        <div class="container-inner">
                                            <div class="owl-container">
                                                <div id="carousel0" class="owl-carousel">
                                                    @foreach ($brands as $brand)
                                                        <div class="item text-center">
                                                            <a href="#"><img
                                                                    src="{{ asset("storage/uploads/$brand->represented_image") }}"
                                                                    alt="{{ $brand->name }}" height="40"
                                                                    width="150" class="img-responsive" /></a>
                                                        </div>
                                                    @endforeach
                                                    <div class="item text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('storage/uploads/brand/2022-10-19-153405-05_fanvil_brand.png') }}";
                                                                alt="br3" class="img-responsive" /></a>
                                                    </div>
                                                    <div class="item text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('storage/uploads/brand/2022-10-19-153405-05_fanvil_brand.png') }}"
                                                                alt="br1" class="img-responsive" /></a>
                                                    </div>
                                                    <div class="item text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('storage/uploads/brand/2022-10-19-153405-05_fanvil_brand.png') }}"
                                                                alt="br4" class="img-responsive" /></a>
                                                    </div>
                                                    <div class="item text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('storage/uploads/brand/2022-10-19-153405-05_fanvil_brand.png') }}"
                                                                alt="br5" class="img-responsive" /></a>
                                                    </div>
                                                    <div class="item text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('storage/uploads/brand/2022-10-19-153405-05_fanvil_brand.png') }}"
                                                                alt="br6" class="img-responsive" /></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        //
                                        $("#carousel0").owlCarousel({
                                            items: 5,
                                            autoPlay: true,
                                            autoplayTimeout: 2000,
                                            autoplayHoverPause: true,

                                            navigation: true,
                                            pagination: false,
                                            itemsDesktop: [1199, 5],
                                            itemsDesktopSmall: [991, 4],
                                            itemsTablet: [767, 3],
                                            itemsMobile: [479, 2],
                                        });


                                        //
                                    </script>
                                </div>
                                <!-- sub-col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row 3-->
            @include('site.layout.blogs')
        </div>

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
