function scrollKolReviews(idD, action = "previous") {
    var count = parseInt($("#scrollKolReviews_count").val());
    var listChild = $("#" + idD).children();
    if (action === "previous") {
        var widthChild = $(listChild[count - 1]).outerWidth();
        var marginChild = parseInt(
            $(listChild[parseInt(count)]).css("margin-left")
        );
    } else {
        var widthChild = $(listChild[count]).outerWidth();
        var marginChild = parseInt(
            $(listChild[parseInt(count + 1)]).css("margin-left")
        );
    }
    var valS = parseInt(widthChild + marginChild);
    var scrollLeftE = $("#" + idD).scrollLeft();
    var maxScrollLeft = $("#" + idD).prop("scrollWidth") - $("#" + idD).width();
    // console.log(count);
    // console.log(valS);
    // console.log(parseInt(maxScrollLeft - scrollLeftE));

    if (!isNaN(valS)) {
        if (action === "previous") {
            $("#" + idD).animate({ scrollLeft: scrollLeftE - valS }, 500);
            $("#scrollKolReviews_count").val(parseInt(count - 1));
        }
    }
    if (!isNaN(valS) && parseInt(maxScrollLeft - scrollLeftE) !== 0) {
        if (action === "next") {
            $("#" + idD).animate({ scrollLeft: scrollLeftE + valS }, 500);
            $("#scrollKolReviews_count").val(parseInt(count + 1));
        }
    }
}

function productReviewImageGallery() {
    const reviewGallery = ".reviews--gallery";

    $(document).on("click", reviewGallery + " .image", function (e) {
        e.preventDefault();
        const _this = $(this),
            elementGallery = _this.parents(reviewGallery),
            elementImages = elementGallery.find(".image"),
            index = _this.attr("data-index");
        const pswpElement = document.querySelectorAll(".pswp")[0];
        let items = [];

        elementImages.each(function (e) {
            items.push({
                src: $(this).attr("data-image"),
                w: 1200,
                h: 1200,
            });
        });

        if (!items.length) return;

        // define options (if needed)
        const options = {
            index: Number(index),
        };

        // Initializes and opens PhotoSwipe
        const gallery = new PhotoSwipe(
            pswpElement,
            PhotoSwipeUI_Default,
            items,
            options
        );
        gallery.init();
    });
}

jQuery(document).ready(function ($) {
    productReviewImageGallery();
    bannerComboSlide();
    relatedProductSlide();
    detailProductSlider();
    // // START:: fix lỗi nhảy ảnh (Mobile)
    // var i   = 0;
    // setTimeout(() => {
    //     $('.detail-slproduct .detail-slproduct__wrapper .grid .grid__column').each(function(){
    //         if(i>0) $(this).attr('style', 'display: block !important');
    //         ++i;
    //     });
    // }, 1);
    // // START:: fix lỗi nhảy ảnh (Desktop)
    // // thumb
    // var i   = 0;
    // $('.product-single__images .product-single__thumbs .image').each(function(){
    //     if(i>0) $(this).attr('style', 'display: block !important');
    //     ++i;
    // });
    // // thumbnails
    // var i   = 0;
    // setTimeout(() => {
    //     $('.product-single__images .product-single__thumbnails .image').each(function(){
    //         if(i>0) $(this).attr('style', 'display: block !important');
    //         ++i;
    //     });
    //     setTimeout(() => {
    //         $('.product-single__images .product-single__thumbnails .slick-arrow').attr('style', 'display: inline-block !important');
    //     }, 1);
    // }, 1);
});

const detailProductSlider = function () {
    const _slide = $(".detail-product--slider");
    if (_slide.length <= 0) return;
    _slide.slick({
        variableWidth: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        swipeToSlide: true,
        touchMove: true,
    });
};

function relatedProductSlide() {
    const _slider = $(".product-related__detailslide");
    // if (_slider.length <= 0) return;
    _slider.slick({
        variableWidth: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScrol1: 1,
        // dots: false,
        // arrows: true,
        swipeToSlide: true,
        touchMove: true,
    });
}

function bannerComboSlide() {
    const _slider = $(".bannerCombo");
    _slider.slick({
        variableWidth: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScrol1: 1,
        // dots: false,
        arrows: false,
        swipeToSlide: true,
        touchMove: true,
    });
}

////// show hide click
$(".wrap-title").on("click", function (e) {
    var carDetailsDiv = $(event.currentTarget).next();
    if ($(carDetailsDiv).hasClass("collapsed")) {
        $(carDetailsDiv).removeClass("collapsed");

        $(this).addClass("rotate-arrow");
        $(carDetailsDiv).addClass("act-content");
    } else {
        $(carDetailsDiv).addClass("collapsed");
        $(this).removeClass("rotate-arrow");

        $(carDetailsDiv).removeClass("act-content");
    }

    event.preventDefault();
    return false;
});

dataLayer.push({
    ecommerce: {
        detail: {
            actionField: { list: "Kem nền" },
            products: [
                {
                    name: "Kem nền Hây Hây - Trang điểm tối giản đẹp xinh",
                    id: "611b624d76aa9673340eac92",
                    price: "210000",
                    brand: "Cỏ mềm",
                    category: "Kem nền",
                    variant: "01 Light",
                },
            ],
        },
    },
});

function scrollHeaderMenu(idD) {
    let valS = parseInt($("#" + idD).scrollLeft() + 150);
    $("#" + idD).animate({ scrollLeft: valS }, 150);
}
// function showHideSearchBox(idE, actionE = "show") {
//   if (actionE == "show") {
//     $("#" + idE)
//       .css({ opacity: "1", width: "100%", "z-index": "999999" })
//       .unbind();
//   } else if (actionE == "hide") {
//     $("#" + idE)
//       .css({ opacity: "0", width: "0", "z-index": "-1" })
//       .unbind();
//   }
// }
// $(window).scroll(function () {
//   showHideSearchBox("searchBox-mobile", "hide");
// });
$(window).scroll(function () {
    let scrollTopD = $(document).scrollTop();
    let heightS = $(".site-header__top-sale").outerHeight();
    if (scrollTopD < heightS) {
        $(".site-header__top-sale").css("display", "block");
    } else {
        $(".site-header__top-sale").css("display", "none");
    }
});
function showHideListMenuMobile(thisD) {
    let elemtC = $(thisD).parent().find("ul");
    let displayC = elemtC.css("display");
    if (displayC == "none") {
        elemtC.css("display", "block");
        $(thisD).html('<i class="fas fa-chevron-down"></i>');
    } else {
        elemtC.css("display", "none");
        $(thisD).html('<i class="fas fa-chevron-right"></i>');
    }
}

function openCloseElemt(idElemt) {
    let displayE = $("#" + idElemt).css("display");
    if (displayE == "none") {
        $("#" + idElemt).css("display", "block");
        $("body").css("overflow", "hidden");
    } else {
        $("#" + idElemt).css("display", "none");
        $("body").css("overflow", "unset");
    }
}

function loadMegaMenuProduct(thisD) {
    var idD = $(thisD).data("menu");
    var idWrite = $(thisD).data("write");
    // bật selected
    var parentD = $(thisD).parent();
    parentD.children().each(function () {
        $(this).removeClass("selected");
    });
    $(thisD).addClass("selected");
    if ($("#" + idD).length) {
        // === trường hợp đã load rồi => không load nữa
        // ẩn tất cả
        $("#" + idWrite)
            .children()
            .each(function () {
                $(this).css("display", "none");
            });
        // hiển thị lại 1
        $("#" + idD).css({
            display: "flex",
            height: "100%",
            "flex-direction": "column",
            "justify-content": "flex-end",
        });
    } else {
        // bật loading
        $("#" + idWrite + " .loading-megaMenu").css("display", "flex");
        // cố định height
        let heightWrite = $("#" + idWrite).height();
        $("#" + idWrite).css("height", heightWrite);
        // trường hợp chưa load => bắt đầu tải
        var url = "/collection/customProducts/" + idD;
        $.ajax({
            url: url,
            type: "GET",
        }).done(function (dataJson) {
            setTimeout(function () {
                // ẩn tất cả
                $("#" + idWrite)
                    .children()
                    .each(function () {
                        $(this).css("display", "none");
                    });
                // append thông tin vào
                $("#" + idWrite).append(
                    '<div id="' +
                        idD +
                        '" style="display:flex;height:100%;flex-direction:column;justify-content:flex-end;">' +
                        dataJson.data +
                        "</div>"
                );
            }, 1);
        });
    }
}

function menuActionEnd(menu) {
    $(document).on("click", function (e) {
        let target = $(e.target);
        if (!target.hasClass("open-popup")) return;
        e.preventDefault();

        if ($(menu).hasClass("is-active")) {
            const dataMenuActive = $(menu).attr("data-menu-active");
            $(menu).removeClass("is-active");
            $('[data-menu-id="' + dataMenuActive + '"]').removeClass(
                "is-active"
            );
            theme.openPopup("remove");
        }
    });
}

function menuToggle(e) {
    const menuListing = ".mobile-menu--listing",
        menuActions = ".header-actions--menu";

    theme.menuToggle(
        menuActions,
        function (e) {
            const menu = $(menuListing),
                dataMenuActive = menu.attr("data-menu-active");
            theme.openPopup("add");
            menu.removeClass("is-active");
            const menuActive = $('[data-menu-id="' + dataMenuActive + '"]');
            menuActive.removeClass("is-active");
            $(".mobile-menu").removeClass("is-active");
        },
        menuActionEnd(menuActions)
    );

    theme.menuToggle(menuListing);

    $(document).on("mousedown touchstart", function (e) {
        let _target = $(e.target);
        if (
            _target.parents("[data-menu-id]").length <= 0 &&
            !_target.attr("data-menu-active") &&
            !_target.attr("data-menu-id") &&
            _target.parents("[data-menu-active]").length <= 0
        ) {
            $("[data-menu-id]").removeClass("is-active");
            setTimeout(function (e) {
                $(".mobile-menu").removeClass("is-active");
                theme.openPopup("remove");
            }, 100);
        }
    });

    $(document).on("click", ".menu-close", function (e) {
        $("[data-menu-id]").removeClass("is-active");
        $("[data-menu-active]").removeClass("is-active");
        $(".mobile-menu").removeClass("is-active");
        theme.openPopup("remove");
    });
}

function handleSearchSpotlight(element, value, callback) {
    let url = settings.APP_URL + "/search";
    $.ajax({
        url: url,
        type: "get",
        data: {
            keyword: value,
            ajax: true,
        },
        dataType: "json",
    }).done(function (res) {
        const { html, success } = res;
        if (success && html) {
            element.html(html);
            let keywords = localStorage.getItem("search_keywords");
            if (!keywords) keywords = [];
            else keywords = JSON.parse(keywords);

            if (value) {
                keywords.unshift(value);
                if (keywords.length > 5) keywords.pop();
                localStorage.setItem(
                    "search_keywords",
                    JSON.stringify(keywords)
                );
            } else searchHistory();

            if (typeof callback === "function") {
                callback();
            }
        }
    });
}

function searchSpotlight() {
    let timeOut;

    $(document).on("keyup focus", "#spotlight-search", function (e) {
        const _this = $(this),
            headerSpotlightSearch = $("#header-spotlight-search"),
            element = headerSpotlightSearch.find(".sportlight-search"),
            value = _this.val();
        headerSpotlightSearch.addClass("is-active");
        if (timeOut) {
            clearTimeout(timeOut);
        }
        if (value.length !== 0) {
            if (!element.hasClass("is-search")) {
                element.addClass("is-search");
                element.html(`<div class="loading-data"></div>`);
            }

            timeOut = setTimeout(function (e) {
                handleSearchSpotlight(element, value, function () {
                    element.removeClass("is-search");
                });
            }, 500);
        } else {
            element.removeClass("is-searching");
            element.empty();
            $(
                '<div class="spotlight__content spotlight__searched" id="spotLightSearchHistory"></div>'
            ).appendTo(element);
            searchHistory();
        }
    });

    $(window).scroll(function () {
        const headerSpotlightSearch = $("#header-spotlight-search");
        if (headerSpotlightSearch.hasClass("is-active")) {
            headerSpotlightSearch.removeClass("is-active");
        }
    });

    $(document).on("click", function (e) {
        const _this = $(this);
        const headerSpotlightSearch = $("#header-spotlight-search");
        if (
            _this.closest("#header-spotlight-search").length <= 0 &&
            headerSpotlightSearch.hasClass("is-active") &&
            $(e.target).attr("id") !== "spotlight-search"
        ) {
            headerSpotlightSearch.removeClass("is-active");
        }
    });
}

function getViewedProducts() {
    let timeOut;
    $("#viewedProducts").mouseenter(function (e) {
        $("#viewedProducts_items").html(
            '<div class="cart-list"><span class="loading-data"></span></div>'
        );
        if (timeOut) {
            clearTimeout(timeOut);
        }
        timeOut = setTimeout(function (e) {
            $.ajax({
                url: "https://comem.vn/viewed-items",
                type: "get",
                data: {
                    ids: "611c6d6a0a1fbd22d747bd95,611b7fa81c1895379b1786be,611b7fa81c1895379b1786be",
                },
                dataType: "json",
            }).done(function (res) {
                if (res.html.length > 0)
                    $("#viewedProducts_items").html(res.html);
                else
                    $("#viewedProducts_items").html(
                        "<div class='cart-list'>Bạn chưa xem sản phẩm nào</div>"
                    );
            });
        }, 500);
    });
}

function showMiniCart() {
    let timeOut;

    $("#headerMiniCart").mouseenter(function (e) {
        $("#miniCart").html(
            '<div class="cart-list"><span class="loading-data"></span></div>'
        );
        if (timeOut) {
            clearTimeout(timeOut);
        }
        timeOut = setTimeout(function (e) {
            $.ajax({
                url: "https://comem.vn/cart",
                type: "get",
                dataType: "json",
            }).done(function (res) {
                if (res.html.length > 0) $("#miniCart").html(res.html);
                else
                    $("#miniCart").html(
                        "<div class='cart-list'>Giỏ hàng của bạn đang trống</div>"
                    );
            });
        });
    });
}

function mobileSearchActive() {
    if (!theme.isMobile()) return;
    let firstScrollPoint = 0;

    $(document).on("click", ".header-actions--search", function (e) {
        e.preventDefault();
        const headerSearch = $(".header-search");
        headerSearch.addClass("is-active");
        setTimeout(function (e) {
            $("#spotlight-search").trigger("touchstart");
        }, 100);
        firstScrollPoint = $(window).scrollTop();
    });

    $(window).scroll(function () {
        const headerSpotlightSearch = $(".header-search");
        let scroll = $(window).scrollTop();
        if (
            headerSpotlightSearch.hasClass("is-active") &&
            (firstScrollPoint + 200 < scroll || firstScrollPoint - 200 > scroll)
        ) {
            headerSpotlightSearch.removeClass("is-active");
        }
    });
}

function searchHistory() {
    let keywords = localStorage.getItem("search_keywords");
    if (keywords) keywords = JSON.parse(keywords);
    let wrapper = $("#spotLightSearchHistory");
    wrapper.empty();
    if (keywords === null) {
        $("#header-spotlight-search").removeClass("is-active");
        return;
    }
    keywords.forEach(function (item, key) {
        let itemEl = $(
            '<a href="' +
                encodeURI("/cm/search?keyword=" + item) +
                '" class="sportlight-search__item">' +
                '<div class="thumbnail"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">' +
                '<path d="M225.773.616C101.283.616 0 101.622 0 225.773S101.284 450.93 225.773 450.93s225.774-101.006 225.774-225.157S350.263.616 225.773.616zm0 413.301c-104.084 0-188.761-84.406-188.761-188.145 0-103.745 84.677-188.145 188.761-188.145s188.761 84.4 188.761 188.145c.001 103.739-84.676 188.145-188.761 188.145z"/>' +
                '<path d="M506.547 479.756L385.024 358.85c-7.248-7.205-18.963-7.174-26.174.068-7.205 7.248-7.174 18.962.068 26.174l121.523 120.906a18.457 18.457 0 0013.053 5.385 18.45 18.45 0 0013.121-5.453c7.205-7.249 7.174-18.963-.068-26.174z"/>' +
                "</svg></div>" +
                '<div class="content">' +
                item +
                "</div>" +
                "</a>"
        );
        itemEl.appendTo(wrapper);
    });
}

jQuery(document).ready(function (e) {
    // active menu
    menuToggle();
    searchSpotlight();
    getViewedProducts();
    showMiniCart();
    mobileSearchActive();
    header();
    headerRight();
});
// function header() {
//   const _slider = $(".header-menu__nav1");
//   console.log(_slider.length);
//   if (_slider.length <= 0) return;
//   _slider.slick({
//     infinite: false,
//     slidesToShow: 7,
//     slidesToScroll: 1,
//     dots: false,
//     arrows: true,
//     responsive: [
//       {
//         breakpoint: 1025,
//         settings: {
//           slidesToShow: 5,
//           slidesToScroll: 2,
//           arrows: false,
//         },
//       },
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 3,
//           slidesToScroll: 3,
//           arrows: false,
//         },
//       },
//       // {
//       //   breakpoint: 426,
//       //   settings: {
//       //     slidesToShow: ,
//       //     slidesToScroll: 1,
//       //     arrows: false,
//       //   },
//       // },
//     ],
//   });
// }
// function headerRight() {
//   const _slider = $(".header-menu__nav2");
//   console.log(_slider.length);
//   if (_slider.length <= 0) return;
//   _slider.slick({
//     infinite: false,
//     slidesToShow: 2,
//     slidesToScroll: 1,
//     dots: false,
//     arrows: true,
//     // responsive: [
//     //   {
//     //     breakpoint: 768,
//     //     settings: {
//     //       slidesToShow: 4,
//     //       slidesToScroll: 4,
//     //       arrows: false,
//     //     },
//     //   },
//     // ],
//   });
// }
// Open - Close footer menu
function openCloseFooterMenu(elemt) {
    let widthS = $(window).width();
    if (widthS < 421) {
        let menuE = $(elemt).parent().find("ul");
        let disE = menuE.css("display");
        let iconE = $(elemt).find("i");
        if (disE == "none") {
            menuE.css("display", "block");
            iconE.removeClass("fa-chevron-down").addClass("fa-chevron-up");
        } else {
            menuE.css("display", "none");
            iconE.removeClass("fa-chevron-up").addClass("fa-chevron-down");
        }
    }
}
jQuery(document).ready(function (e) {
    $(document).on("submit", ".footer-form-subscribers", function (e) {
        e.preventDefault();
        const _this = $(this);
        const _url = _this.attr("action");
        const data = _this.serializeArray();
        const form__message = _this.find(".footer-form__message");
        const form_field = _this.find(".footer-form__field");
        form_field.addClass("is-loading");
        $.ajax({
            url: _url,
            method: "POST",
            data: data,
            dataType: "json",
            success: function (response) {
                const { success, messages } = response;
                if (messages) form__message.html(messages);
                if (success) form__message.addClass("success");
                else form__message.removeClass("success");
                form_field.removeClass("is-loading");
            },
            error: function (response) {
                form__message.html("Gửi đăng ký không thành công");
                form__message.removeClass("success");
                form_field.removeClass("is-loading");
            },
        });
    });

    //
    var modal2 = document.getElementById("modal-popup__sale");
    $(".site-header__top-sale").on("click", ".content", function () {
        modal2.classList.add("show");
    });

    var span2 = document.getElementsByClassName("close")[0];

    span2.onclick = function () {
        modal2.classList.remove("show");
    };

    window.onclick = function (event) {
        if (event.target === modal2) {
            modal2.classList.remove("show");
        }
    };
});
