@extends('site.layout.main')

@section('content')

    <body class="product-product-52 home1">
        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a
                        href="{{ route('site.parentCategory.index', [$mainProduct->secondSubCategory->firstSubCategory->parentCategory->slug]) }}">{{ $mainProduct->secondSubCategory->firstSubCategory->parentCategory->name }}</a>
                </li>
                <li>
                    <a
                        href="{{ route('site.firstSubCategory.index', [$mainProduct->secondSubCategory->firstSubCategory->parentCategory->slug, $mainProduct->secondSubCategory->firstSubCategory->slug]) }}">{{ $mainProduct->secondSubCategory->firstSubCategory->name }}</a>
                </li>
                <li>
                    <a
                        href="{{ route('site.firstSubCategory.index', [$mainProduct->secondSubCategory->firstSubCategory->parentCategory->slug, $mainProduct->secondSubCategory->firstSubCategory->slug, $mainProduct->secondSubCategory->slug]) }}">{{ $mainProduct->secondSubCategory->name }}</a>
                </li>
                <li>
                    <a href="{{ route('site.product.show', [$mainProduct->slug]) }}">{{ $mainProduct->name }}</a>
                </li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div id="ajax-login-block"></div>
                    <div id="ajax-loader">
                        <img src="image/catalog/AjaxLoader.gif" alt="" />
                    </div>
                    <div class="row">
                        <div class="col-1 col-sm-6">
                            <div class="thumbnails">
                                <a class="thumbnail thumbnail-main" title="{{ $mainProduct->name }}">
                                    <img src="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                        data-zoom-image="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                        title="{{ $mainProduct->name }}" alt="{{ $mainProduct->name }}" />
                                </a>
                            </div>
                            <div class="image-additional-container owl-style3">
                                <div class="owl-container">
                                    <div class="image-additional" id="gallery_01">
                                        <a class="thumbnail thumbnail-child" style="display: none" href="#"
                                            data-image="{{ asset("storage/uploads/$mainProduct->hover_featured_image") }}"
                                            data-zoom-image="{{ asset("storage/uploads/$mainProduct->hover_featured_image") }}"
                                            title="{{ $mainProduct->name }}"><img
                                                src="{{ asset("storage/uploads/$mainProduct->hover_featured_image") }}"
                                                title="{{ $mainProduct->name }}" alt="{{ $mainProduct->name }}" />
                                        </a>
                                        <a class="thumbnail thumbnail-child" style="display: none"
                                            href="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                            data-image="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                            data-zoom-image="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                            title="{{ $mainProduct->name }}"><img
                                                src="{{ asset("storage/uploads/$mainProduct->featured_image") }}"
                                                title="{{ $mainProduct->name }}" alt="{{ $mainProduct->name }}" />
                                        </a>
                                        @foreach ($mainProduct->images as $image)
                                            <a class="thumbnail thumbnail-child" style="display: none"
                                                href="{{ asset("storage/uploads/$image->name") }}"
                                                data-image="{{ asset("storage/uploads/$image->name") }}"
                                                data-zoom-image="{{ asset("storage/uploads/$image->name") }}"
                                                title="{{ $mainProduct->name }}"><img
                                                    src="{{ asset("storage/uploads/$image->name") }}"
                                                    title="{{ $mainProduct->name }}" alt="{{ $mainProduct->name }}" />
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-sm-6 product-info-main">
                            <h1 class="product-name">{{ $mainProduct->name }}</h1>

                            <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating{{ $mainProduct->star }}">rating</div>
                                </div>
                            </div>

                            <p class="short-des">
                                {!! $mainProduct->description !!}
                            </p>
                            <div class="box-options">
                                <ul class="list-unstyled">
                                    <li>Phân loại: <span
                                            class="ex-text">{{ $mainProduct->secondSubCategory->firstSubCategory->parentCategory->name }}</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled">
                                    @if (!empty($mainProduct->origin))
                                        <li>
                                            Xuất xứ:
                                            <a href="javascript:void(0)"><span
                                                    class="ex-text">{{ $mainProduct->origin->name }}</span></a>
                                        </li>
                                    @endif
                                    @if (!empty($mainProduct->configuration))
                                        <li>Cấu Hình: <span class="ex-text">{{ $mainProduct->configuration->name }}</span>
                                        </li>
                                    @endif
                                    @if (!empty($mainProduct->feature))
                                        <li>Tính Năng: <span class="ex-text">{{ $mainProduct->feature->name }}</span></li>
                                    @endif
                                    <li>Bảo hành: <span class="ex-text">{{ $mainProduct->insurance }}</span></li>
                                    <li>Tình trạng: <span class="ex-text"
                                            style="color:red;">{{ $mainProduct->inventory_qty > 0 ? 'Còn Hàng' : 'Hết Hàng' }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-box box-special">
                                @if ($mainProduct->price == 0 && $mainProduct->sale_price == 0)
                                    <p class="special-price"><span class="price">Liên Hệ</span></p>
                                @else
                                    @if ($mainProduct->price > $mainProduct->sale_price)
                                        <p class="special-price">Giá bán: <span
                                                class="price">{{ number_format($mainProduct->sale_price) }}₫</span></p>
                                        <p class="old-price">Giá gốc: <span
                                                class="price">{{ number_format($mainProduct->price) }}₫</span></p>
                                    @else
                                        <p class="special-price"> <span
                                                class="price">{{ number_format($mainProduct->sale_price) }}₫</span></p>
                                    @endif
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 quantity">
                                    <label class="control-label" for="input-quantity">Số lượng:
                                    </label>
                                    <div class="quantity-box">
                                        <input type="button" id="minus" value="-" class="form-control" />
                                        <input type="text" name="quantity" value="1" size="2"
                                            id="input-quantity" class="form-control" />
                                        <input type="button" id="plus" value="&#43;" class="form-control" />
                                    </div>
                                </div>
                                @if ($mainProduct->inventory_qty > 0)
                                    @if ($mainProduct->price != 0 && $mainProduct->sale_price != 0)
                                        <form class="button-form" action="{{ route('site.cart.create') }}"
                                            method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                                            <input type="hidden" name="qty_in_cart" value="1">
                                            <button class="button button-cart col-md-6 col-sm-12" type="submit"
                                                id="button-cart" data-loading-text="Loading...">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>THÊM GIỎ HÀNG</span>
                                            </button>
                                        </form>
                                        <form class="button-form" action="{{ route('site.payment.buyNow') }}"
                                            method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                                            <input type="hidden" name="qty_in_cart" value="1">
                                            <button class="button button-cart button-buy col-md-6 col-sm-12"
                                                type="submit" id="button-cart" data-loading-text="Loading...">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>MUA NGAY</span>
                                            </button>
                                        </form>
                                    @else
                                        <form class="button-form" action="javascript:void(0)" method="post">
                                            <button class="button button-cart col-md-12 col-sm-12" type="button"
                                                id="button-cart" style="background-color: #FFD700;">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>LIÊN HỆ</span>
                                            </button>
                                        </form>
                                    @endif
                                @else
                                    <form class="button-form" action="javascript:void(0)" method="post">
                                        <button class="button button-cart col-md-12 col-sm-12" type="button"
                                            id="button-cart" style="background-color: red;">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>HẾT HÀNG</span>
                                        </button>
                                    </form>
                                @endif

                                <button class="button button-cart help_advise col-md-12 col-sm-12">
                                    <div class="advise-text">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span><strong>HỖ TRỢ TƯ VẤN</strong></span>
                                    </div>
                                    <div class="hotline">
                                        Hotline:
                                        <a href="tel: {{ $company->hotline }}"
                                            style="color: #fff">{{ $company->hotline }}</a>
                                        -
                                        Số điện thoại:
                                        <a href="tel: {{ $company->phone_number }}"
                                            style="color: #fff">{{ $company->phone_number }}</a>
                                    </div>
                                </button>
                            </div>

                            <input type="hidden" name="product_id" value="52" />

                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style"
                                data-url="index9048.html?route=product/product&amp;product_id=52">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_pinterest_pinit"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                            <!-- AddThis Button END -->
                        </div>
                    </div>
                    <div class="col-3 product-info-detailed">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab-description" data-toggle="tab">Mô tả</a>
                            </li>
                            <li>
                                <a href="#tab-specification" data-toggle="tab">thông số kỹ thuật</a>
                            </li>
                            <li>
                                <a href="#tab-review" data-toggle="tab">Bình luận và đánh giá(0)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-description">
                                <p>
                                    {!! $mainProduct->description_detail !!}

                                </p>
                                <a class="read-more">Xem thêm...</a>
                            </div>
                            <div class="tab-pane" id="tab-specification">
                                <p>
                                    {!! $mainProduct->technical_statistics !!}

                                </p>
                                <a class="read-more">Xem thêm...</a>
                            </div>
                            <div class="tab-pane" id="tab-review">
                                <form id="frm-product-rating" class="form-horizontal" id="form-review"
                                    action="{{ route('site.comment.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="product_id" value="{{ $mainProduct->id }}">
                                    <div id="review"></div>
                                    <h2>Bình luận về Acer Aspire VX 15</h2>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label" for="input-name">Họ tên</label>
                                            <input type="text" name="review_name" value="" id="input-name"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label" for="input-name">Số điện thoại</label>
                                            <input type="text" name="review_phone" value=""
                                                id="input-number-phone" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label" for="input-name">Email</label>
                                            <input type="email" name="review_email" value="" id="input-email"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label" for="input-review">Bình luận và đánh giá</label>
                                            <textarea name="review_body" rows="5" id="input-review" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="starRating col-sm-12">
                                            Đánh giá:
                                            <input id="rating5" type="radio" name="rating" value="5" />
                                            <label for="rating5" id="rt5">5</label>
                                            <input id="rating4" type="radio" name="rating" value="4" />
                                            <label for="rating4" id="rt4">4</label>
                                            <input id="rating3" type="radio" name="rating" value="3" />
                                            <label for="rating3" id="rt3">3</label>
                                            <input id="rating2" type="radio" name="rating" value="2" />
                                            <label for="rating2" id="rt2">2</label>
                                            <input id="rating1" type="radio" name="rating" value="1" />
                                            <label for="rating1" id="rt1">1</label>
                                        </div>
                                    </div>
                                    <div class="buttons clearfix">
                                        <div class="pull-left">
                                            <button type="submit" id="button-review" data-loading-text="Loading..."
                                                class="btn btn-primary">
                                                Bình luận
                                            </button>
                                            <div id="rating-message" class="w3-right-align"></div>
                                        </div>
                                    </div>

                                    @foreach ($comments as $comment)
                                        <div class="media cs0">
                                            <label>
                                                {{ $comment->fullname }}
                                            </label>
                                            <div class="combody">
                                                <b>{{ $comment->fullname }}</b>
                                                <p>{{ $comment->description }}</p>
                                                <figure>
                                                    <i>{{ $comment->created_date }}</i>
                                                    <u data-repid="2515" class="reply">Trả lời</u>
                                                </figure>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- <div class="toolbar toolbar-products toolbar-bottom">
                                        <div class="toolbar-amount">
                                            <span>Đang hiện 16/17 bình luận (2 Trang)</span>
                                        </div>
                                        <div class="pages">
                                            <ul class="pagination">
                                                <li class="active"><span>1</span></li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        onclick='oclayerednavigationajax.filter("index12a8.json?route=extension/module/oclayerednavigation/category&amp;path=56&amp;page=2")'>2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        onclick='oclayerednavigationajax.filter("index12a8.json?route=extension/module/oclayerednavigation/category&amp;path=56&amp;page=2")'>&gt;</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        onclick='oclayerednavigationajax.filter("index12a8.json?route=extension/module/oclayerednavigation/category&amp;path=56&amp;page=2")'>&gt;|</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="cta" class="">
                        <div class="row">
                            <ul class="col-sm-12 col-md-8 desc-advice box-module">
                                <li class="col-4 col-sm-2 col-md-2 img-advise">
                                    <img src="{{ asset("storage/uploads/$company->survey_featured_image") }}"
                                        alt="{{ $company->surver_title }}" />
                                </li>
                                <li class="col-8 col-sm-10  col-md-10 content-advise">
                                    <label>{{ $company->survey_title }}</label>
                                    <p style="margin-left: 0; margin-right: 0; text-align: center">
                                        {!! $company->survey_content !!}
                                    </p>
                                    <button style="border: none" class="btn4 bcam" href="#"
                                        title="Hỗ Trợ Tư Vấn Miễn Phí" rel="nofollow">Hỗ Trợ Tư Vấn Miễn Phí</button>
                                </li>
                            </ul>
                            <div class="col-sm-12 col-md-4  hotline-advice box-module">
                                <label>CHÚNG TÔI LUÔN Ở ĐÂY ĐỂ HỖ TRỢ BẠN</label>
                                <p>Hỗ trợ miễn phí<strong>{{ $company->hotline }}</strong></p>
                                <span class="tnh"><label>HOẶC</label></span>
                                <ul>
                                    <li><span>Sđt tư vấn: </span><strong>{{ $company->phone_number }}</strong>
                                    </li>
                                    <li>
                                        <span>Sđt giao dịch:
                                        </span><strong>{{ $company->delivery_phone_number }}&nbsp;&nbsp;</strong>
                                        (24/7)
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-4">
                        <div class="related-product-container quickview-add module-nav2 box-module module-style1">
                            <div class="group-title">
                                <h2>
                                    <span> Sản phẩm liên quan</span>
                                </h2>
                            </div>
                            <div class="owl-container">
                                <div class="related-product">
                                    @foreach ($relatedProducts as $product)
                                        <div class="row_items">
                                            <div class="item">
                                                @include('site.layout.product')
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <script type="text/javascript">
            $("select[name='recurring_id'], input[name=\"quantity\"]").change(
                function() {
                    $.ajax({
                        url: "index.php?route=product/product/getRecurringDescription",
                        type: "post",
                        data: $(
                            "input[name='product_id'], input[name='quantity'], select[name='recurring_id']"
                        ),
                        dataType: "json",
                        beforeSend: function() {
                            $("#recurring-description").html("");
                        },
                        success: function(json) {
                            $(".alert, .text-danger").remove();

                            if (json["success"]) {
                                $("#recurring-description").html(json["success"]);
                            }
                        },
                    });
                }
            );
            //-->
        </script> --}}

        {{-- <script type="text/javascript">
            $("#button-cart").on("click", function() {
                $.ajax({
                    url: "index.php?route=checkout/cart/add",
                    type: "post",
                    data: $(
                        "input[name='product_id'], #input-quantity, #product input[type='text'], #product input[type='hidden'], #product input[type='radio']:checked, #product input[type='checkbox']:checked, #product select, #product textarea"
                    ),
                    dataType: "json",
                    beforeSend: function() {
                        $("#button-cart").button("loading");
                    },
                    complete: function() {
                        $("#button-cart").button("reset");
                    },
                    success: function(json) {
                        $(".alert, .text-danger").remove();
                        $(".form-group").removeClass("has-error");

                        if (json["error"]) {
                            if (json["error"]["option"]) {
                                for (i in json["error"]["option"]) {
                                    var element = $("#input-option" + i.replace("_", "-"));

                                    if (element.parent().hasClass("input-group")) {
                                        element
                                            .parent()
                                            .after(
                                                '<div class="text-danger">' +
                                                json["error"]["option"][i] +
                                                "</div>"
                                            );
                                    } else {
                                        element.after(
                                            '<div class="text-danger">' +
                                            json["error"]["option"][i] +
                                            "</div>"
                                        );
                                    }
                                }
                            }

                            if (json["error"]["recurring"]) {
                                $("select[name='recurring_id']").after(
                                    '<div class="text-danger">' +
                                    json["error"]["recurring"] +
                                    "</div>"
                                );
                            }

                            // Highlight any found errors
                            $(".text-danger").parent().addClass("has-error");
                        }

                        if (json["success"]) {
                            $("body").before(
                                '<div class="alert alert-success">' +
                                json["success"] +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'
                            );

                            $("#cart-total").html(json["total"]);

                            $("html, body").animate({
                                scrollTop: 0
                            }, "slow");

                            // $("#cart > ul").load(
                            //     "index1e1c.html?route=common/cart/info%20ul%20li"
                            // );
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        // alert(
                        //   thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText
                        // );
                    },
                });
            });
            //-->
        </script> --}}

        <script type="text/javascript">
            $(".date").datetimepicker({
                pickTime: false,
            });

            $(".datetime").datetimepicker({
                pickDate: true,
                pickTime: true,
            });

            $(".time").datetimepicker({
                pickDate: false,
            });

            $("button[id^='button-upload']").on("click", function() {
                var node = this;

                $("#form-upload").remove();

                $("body").prepend(
                    '<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>'
                );

                $("#form-upload input[name='file']").trigger("click");

                if (typeof timer != "undefined") {
                    clearInterval(timer);
                }

                timer = setInterval(function() {
                    if ($("#form-upload input[name='file']").val() != "") {
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
                                $(".text-danger").remove();

                                if (json["error"]) {
                                    $(node)
                                        .parent()
                                        .find("input")
                                        .after(
                                            '<div class="text-danger">' + json["error"] + "</div>"
                                        );
                                }

                                if (json["success"]) {
                                    alert(json["success"]);

                                    $(node).parent().find("input").attr("value", json["code"]);
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
            });
            //-->
        </script>

        <script type="text/javascript">
            $("#review").delegate(".pagination a", "click", function(e) {
                e.preventDefault();

                $("#review").fadeOut("slow");

                $("#review").load(this.href);

                $("#review").fadeIn("slow");
            });

            // var minimum = 1;
            // $("#input-quantity").change(function() {
            //     if ($(this).val() < minimum) {
            //         alert("Minimum Quantity: " + minimum);
            //         $("#input-quantity").val(minimum);
            //     }
            // });
            // // increase number of product
            // function minus(minimum) {
            //     var currentval = parseInt($("#input-quantity").val());
            //     $("#input-quantity").val(currentval - 1);
            //     if (
            //         $("#input-quantity").val() <= 0 ||
            //         $("#input-quantity").val() < minimum
            //     ) {
            //         alert("Minimum Quantity: " + minimum);
            //         $("#input-quantity").val(minimum);
            //     }
            // }
            // // decrease of product
            // function plus() {
            //     var currentval = parseInt($("#input-quantity").val());
            //     $("#input-quantity").val(currentval + 1);
            // }
            // $("#minus").click(function() {
            //     minus(minimum);
            // });
            // $("#plus").click(function() {
            //     plus();
            // });
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
            $(".owl-carousel").each(function(index, el) {
                var containerHeight = $(el).height();
                $(el).find("img").each(function(index, img) {
                        var w = $(img).prop('naturalWidth');
                        var h = $(img).prop('naturalHeight');
                        $(img).css({
                            'width': Math.round(containerHeight * w / h) + 'px',
                            'height': containerHeight + 'px'
                        });
                    }),
                    $(el).owlCarousel({
                        autoWidth: true
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

        @include('site.layout.blogsInParentCategory')

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

        @include('site.layout.footer')
    </body>
@endsection
