

let thumbnails = $(".product-single-thumbnails");
let thumbs = $(".product-single-thumbs");

function productThumbnail(e) {
  if (thumbnails.length <= 0 || thumbs.length <= 0) return;
  $(".product-single__thumbs .image").show();
  $(".product-single-thumbnails .image").show();
  $(".product-single-thumbnails .grid__column").show();
  thumbnails.slick({
    asNavFor: ".product-single-thumbs",
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          arrows: false,
          variableWidth: true,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  let args_thumbs = {
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: ".product-single-thumbnails",
    dots: false,
    arrows: false,
    vertical: true,
    adaptiveHeight: true,
    focusOnSelect: true,
    infinite: false,
  };

  if (thumbs.children().length <= 5) {
    args_thumbs = {
      ...args_thumbs,
      slidesToScroll: 5,
    };
  }

  thumbs.slick(args_thumbs);
}

function addToCart() {
  $(".btn-addtocart").click(function (e) {
    e.preventDefault();
    let html = $(this).html();
    let url = "",
      button_loading = '<span class="loading-data loading-data--white"></span>';

    if ($(this).hasClass("btn-addtocart--cart")) {
      url = "/cart";
      button_loading = '<span class="loading-data"></span>';
    }

    const id = $("input[name='id']").val();
    const product_id = `611b624d76aa9673340eac92`;
    const quantity = $("input[name='quantity']").val();

    if (!id) return;

    const settings = {
      variant_id: id,
      product_id: product_id,
      quantity: parseInt(quantity),
      replace: url,
      button_loading: button_loading,
      button_text: html,
      button_element: $(this),
    };
    theme.AddItem(settings);
    // Facebook pixel event
    fbq("track", "AddToCart", {
      content_name: "Kem nền Hây Hây - Trang điểm tối giản đẹp xinh",
      content_category: "Kem nền",
      content_ids: ["611b624d76aa9673340eac92"],
      content_type: "product",
      value: parseInt("210000"),
      currency: "VND",
    });
    //Google tag
    dataLayer.push({
      event: "addToCart",
      ecommerce: {
        currencyCode: "VND",
        add: {
          products: [
            {
              name: "Kem nền Hây Hây - Trang điểm tối giản đẹp xinh",
              id: "611b624d76aa9673340eac92",
              price: "210000",
              brand: "Cỏ mềm",
              category: "Kem nền",
              variant: "01 Light",
              quantity: parseInt(quantity),
            },
          ],
        },
      },
    });

    //Iteable
    const em_email = localStorage.getItem("em_email");
    if (em_email) {
      const data = {
        _token: window.settings._TOKEN,
        em_email: em_email,
        device_token: window.settings.DEVICE_TOKEN,
        type: "abandoned_cart",
        products: [
          {
            id: "611b624d76aa9673340eac92",
            sku: id,
            name: "Kem nền Hây Hây - Trang điểm tối giản đẹp xinh",
            description:
              "Kem nền Hây Hây giúp các nàng trang điểm đẹp tự nhiên. Kết cấu mỏng nhẹ, thấm nhanh, thoáng da và không để lại vệt trắng. Thành phần an toàn cho da, không gây cảm giác bí tắc và không gây dầu mụn.",
            categories: ["Kem nền"],
            price: "210000",
            quantity: parseInt(quantity),
            imageUrl:
              "https://static/uploads/September2022/kem-nen-tu-nhien-co-mem-mau-nude_sp2x.png",
            url: "https://comem.vn/sp/kem-nen-hay-hay",
          },
        ],
      };
      theme.trackIterable(data);
    }
    // ===== START:: Notify Custom
    let xhtmlOptions = "";
    $(".options .option input:checked").each(function () {
      xhtmlOptions += "<div>" + $(this).val() + "</div>";
    });
    let titleP = "Kem nền Hây Hây - Trang điểm tối giản đẹp xinh";
    let imgP =
      "../assets/images/uploads/September2022/kem-nen-tu-nhien-co-mem-mau-nude_sp.png";
    let priceP = $(".product-single__prices ins").html();
    let quantityP = parseInt(quantity);
    $.ajax({
      url: "/notifyCart",
      dataType: "html",
      type: "get",
      data: {
        title: titleP,
        image: imgP,
        price: priceP,
        quantity: quantityP,
        options: xhtmlOptions,
      },
    }).done(function (data) {
      setTimeout(() => {
        let widthS = $(window).width();
        let heightS = $(window).height();
        if (widthS < 567) {
          $("#notifyCustom").html(data).css({
            opacity: "1",
            "z-index": "200",
            display: "block",
          });
          $(".notifyCustom_box").css({
            width: "calc(100% - 20px)",
            top:
              "calc(50% - " +
              parseInt($(".notifyCustom_box").outerHeight() / 2) +
              "px)",
            left:
              "calc(50% - " +
              parseInt($(".notifyCustom_box").outerWidth() / 2) +
              "px)",
          });
        } else {
          $("#notifyCustom").html(data).css({
            width: "400px",
            opacity: "1",
            "z-index": "200",
            display: "block",
          });
        }
      }, 1);
      setTimeout(() => {
        closeNotifyCustom();
      }, 4000);
    });
    // ===== END:: Notify Custom
  });
}

function closeNotifyCustom() {
  $("#notifyCustom").css({
    width: "0",
    opacity: "0",
    "z-index": "-1",
    display: "none",
  });
  $(".notifyCustom_box").css({
    width: "0",
  });
}

function getProductReviews(star) {
  const productID = $(".product-single").data("id");
  if (!star) star = "all";
  $.ajax({
    url: "https://comem.vn/reviews?product_id=" + productID + "&score=" + star,
    type: "GET",
  }).done(function (res) {
    $(".product-single--reviews").html(res.html);
  });
}

function getProductReviewItem(star) {
  const productID = $(".product-single").data("id");
  const elementProductReview = $(".reviews-content");
  const htmlLoading = `<div class="loading-data"></div>`;

  if (!star) star = "all";

  elementProductReview.html(htmlLoading);

  $.ajax({
    url:
      "https://comem.vn/reviews?product_id=" +
      productID +
      "&score=" +
      star +
      "&get_item=true",
    type: "GET",
  }).done(function (res) {
    elementProductReview.html(res.html);
  });
}

function filterReview(star, el) {
  $(".filter > a.item.is-active").removeClass("is-active");
  $(el).addClass("is-active");
  getProductReviewItem(star);
}

function filterReviewSelect() {
  $(document).on("click", ".filter-select .btn", function (e) {
    e.preventDefault();
    filterReview("all", this);
  });

  $(document).on("change", ".filter-select select", function (e) {
    const _this = $(this),
      val = _this.val();
    if (val != "all") _this.addClass("star");
    else _this.removeClass("star");
    getProductReviewItem(val);
  });
}

function infomationLoadMore() {
  const infomation = $(".infomations__descriptions");
  const contentHeight = infomation.height();
  // console.log(contentHeight,`12312`);

  if (contentHeight < 10) {
    infomation.addClass("is-active");
    $(".infomations-loadmore").hide();
  }
  $(".infomations-collapse").hide();

  $(document).on("click", ".infomations-loadmore", function (e) {
    e.preventDefault();
    $(this).siblings(".infomations__descriptions").addClass("is-active");
    $(this).hide();

    if ($(".infomations__descriptions").hasClass("is-active")) {
      $(".infomations-collapse").show();
      $(".infomations-collapse").on("click", function (e) {
        e.preventDefault();
        $(this).siblings(".infomations__descriptions").removeClass("is-active");
        $(this).hide();
        let siteHeaderHeight = $(".site-header").innerHeight();
        siteHeaderHeight = siteHeaderHeight + 15;
        $("html,body").animate(
          {
            scrollTop: $("#thong-tin-san-pham").offset().top - siteHeaderHeight,
          },
          "slow"
        );
        $(".infomations-loadmore").show();
      });
    }
  });
}
function changeQuantity() {
  $(document).on("click", ".product-quantity-change .plus", function (e) {
    e.preventDefault();

    const input = $(this).siblings('input[type="number"]');
    const max = input.attr("max");
    let oldValue = parseFloat(input.val());

    if (oldValue >= max) {
      var newVal = max;
    } else {
      var newVal = oldValue + 1;
    }
    1;
    input.val(newVal);
    input.trigger("change");
  });

  $(document).on("click", ".product-quantity-change .minus", function (e) {
    e.preventDefault();
    const input = $(this).siblings('input[type="number"]');
    const min = input.attr("min");
    let oldValue = parseFloat(input.val());

    if (oldValue <= min) {
      var newVal = min;
    } else {
      var newVal = oldValue - 1;
    }

    input.val(newVal);
    input.trigger("change");
  });
}

function productSuggestedSlide() {
  $(".product-suggested--slide").slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
}

function getProductsRelated() {
  let ids = $(".product-single__suggested").data("related");
  $.ajax({
    url: "https://comem.vn/related-products",
    type: "GET",
    data: { ids },
  }).done(function (res) {
    const { success, html } = res;

    if (success && html) {
      $(".product-single__suggested").html(res.html);
      productSuggestedSlide();
    } else {
      $(".product-single__suggested").html("");
      $(".product-single__suggested").hide();
    }
  });
}

function blogSlide() {
  const _slider = $(".product-related-slide");
  if (_slider.length <= 0) return;
  _slider.slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });
}

function homeResources() {
  const _slider = $(".home-resources--slide");

  if (_slider.length <= 0) return;
  _slider.slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
    ],
  });
}


const getOptionsSelected = function () {
  let currentOptions;
  const options = $(".product-single__options");

  currentOptions = options.map(function (index, element) {
    let currentOption = {};
    currentOption.value = $(element).find(".options input:checked").val();
    currentOption.index = $(element).attr("data-index");
    return currentOption;
  });

  currentOptions = compact(currentOptions);

  return currentOptions;
};

const getProductData = function () {
  let variants = JSON.parse(document.querySelector("#product-data").innerHTML);
  variants.map((v, index) => {
    if (v.hide === true) {
      variants[index].quantity = 0;
    }
  });
  return variants;
};

const getVariantSelect = function () {
  const variants_data = getProductData();
  let found;
  let selected_values = getOptionsSelected();

  found = find(variants_data, function (variant) {
    return selected_values.every(function (values) {
      return isEqual(
        theme.stringToSlug(variant[values.index]),
        theme.stringToSlug(values.value)
      );
    });
  });

  return found;
};

const updateBuyNow = function (variant) {
  const _button = $(".product-single__actions");
  let text = "Thêm vào giỏ hàng",
    text_disabled = "Sản phẩm hết hàng";
  if (variant) {
    const { quantity } = variant;
    if (quantity <= 0) {
      _button.addClass("is-disabled");
      _button
        .find(".product-single__quantity .btn-addtocart")
        .html(text_disabled);
    } else {
      _button.removeClass("is-disabled");
      _button.find(".product-single__quantity .btn-addtocart").html(text);
    }
  } else {
    _button.addClass("is-disabled");
    _button
      .find(".product-single__quantity .btn-addtocart")
      .html(text_disabled);
  }
};

const updateSubTitleByVariant = function (variant) {
  const _caption = $(".product-single__heading .caption");
  const text = _caption.attr("data-sub-title-default");

  if (variant) {
    const { sub_title } = variant;
    if (sub_title) {
      _caption.html(sub_title);
    } else {
      _caption.html(text);
    }
  } else {
    _caption.html(text);
  }
};

const updateLimitQuantity = function (variant) {
  if (typeof variant !== "object") return;

  let max = variant.quantity > 0 ? variant.quantity : 1;

  const input = $('input[name="quantity"]');
  input.parent(".quantity").removeClass("is-disabled");

  if (input.val() > max) input.val(max);
  input.attr("max", max);
};

const updatePricesByVariant = function (variant) {
  let { compare_price, regular_price } = variant;

  const $price = $(".product-single__prices ins");
  const $sale_price = $(".product-single__prices del");
  if (compare_price > 0 && regular_price == 0) {
    $price.html(theme.formatMoney(compare_price));
    $sale_price.html("");
  } else if (
    compare_price > 0 &&
    regular_price > 0 &&
    compare_price !== regular_price
  ) {
    $price.html(theme.formatMoney(regular_price));
    $sale_price.html(theme.formatMoney(compare_price));
  } else if (compare_price == 0 && regular_price > 0) {
    $price.html(theme.formatMoney(regular_price));
    $sale_price.html("");
  } else if (regular_price == compare_price) {
    $price.html(theme.formatMoney(regular_price));
    $sale_price.html("");
  }
};

const updateImageByVariant = function (variant) {
  const { image } = variant;
  if (!image || image == "") return;
  const index = thumbnails
    .find('.image[data-id="' + image + '"]')
    .attr("data-slick-index");
  thumbnails.slick("slickGoTo", index);
};

function optionChange() {
  const option = $(".product-single--options .option input");
  if (option.length < 0) return;

  option.on("change", function (e) {
    updateVariantSelect();
  });
}

function fbPixelViewContent() {
  // Facebook pixel event
  fbq("track", "ViewContent", {
    content_name: "Kem nền Hây Hây - Trang điểm tối giản đẹp xinh",
    content_category: "Kem nền",
    content_ids: ["611b624d76aa9673340eac92"],
    content_type: "product",
    value: parseInt("210000"),
    currency: "VND",
  });
}

function updateVariantSelect() {
  const variant = getVariantSelect();
  updateBuyNow(variant);
  updateSubTitleByVariant(variant);

  if (!variant) return;

  updateImageByVariant(variant);
  updateLimitQuantity(variant);
  updatePricesByVariant(variant);

  $('input[name="id"]').val(variant.id);
}

function updateReviewPage() {
  $(document).on(
    "click",
    ".product-reviews .pagination .pagination__item",
    function (e) {
      e.preventDefault();
      const elementProductReview = $(".reviews-content");
      const htmlLoading = `<div class="loading-data"></div>`;
      elementProductReview.html(htmlLoading);

      $.ajax({
        url: $(this).attr("href") + "&get_item=true",
        type: "GET",
      }).done(function (res) {
        elementProductReview.html(res.html);
      });
    }
  );
}

function productDetailSlide() {
  const _slider = $(".detail-slproduct--slide");
  if (_slider.length <= 0) return;
  _slider.slick({
    variableWidth: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    swipeToSlide: true,
    touchMove: true,
    // responsive: [
    //     {
    //         breakpoint: 768,
    //         settings: {
    //             slidesToShow: 1,
    //         }
    //     },
    //     {
    //         breakpoint: 991,
    //         settings: {
    //             slidesToShow: 4,
    //             slidesToScroll: 4,
    //         }
    //     },
    // ]
  });
}

function listenClassHeart() {
  if ($("#detailprod-heart").hasClass("active")) {
    pulseHeartNumber($(".number-pulse-hearts-product").last());
  } else {
    minusHeartNumber($(".number-pulse-hearts-product").last());
  }

  $("#detailprod-heart").click(function () {
    if ($(this).hasClass("active")) {
      minusHeartNumber($(".number-pulse-hearts-product").last());
    } else {
      pulseHeartNumber($(".number-pulse-hearts-product").last());
    }
  });
}

function pulseHeartNumber(j) {
  var n = parseInt(j.text(), 10);
  j.text(n + 1);
}

function minusHeartNumber(j) {
  var n = parseInt(j.text(), 10);
  j.text(n - 1);
}

jQuery(document).ready(function ($) {
  /*delayLoad(function () {
            fbq('track', 'ViewContent', {
                content_name: 'Kem nền Hây Hây - Trang điểm tối giản đẹp xinh',
                content_category: 'Kem nền',
                content_ids: ['611b624d76aa9673340eac92'],
                content_type: 'product',
                value: parseInt('210000'),
                currency: 'VND'
            });
        }, 600);*/
  productThumbnail();
  getProductsRelated();
  getProductReviews();
  addToCart();
  infomationLoadMore();
  changeQuantity();
  blogSlide();
  homeResources();
  filterReviewSelect();
  updateVariantSelect();
  optionChange();
  updateReviewPage();
  fbPixelViewContent();

  productDetailSlide();
  listenClassHeart();
  

  $(window).on("load", function () {
    const em_email = localStorage.getItem("em_email");
    const em_push_product_id = localStorage.getItem("em_push_product_id");
    const productID = $(".product-single").data("id");
    const data = {
      _token: window.settings._TOKEN,
      em_email: em_email,
      device_token: window.settings.DEVICE_TOKEN,
      type: "abandoned_browse",
      productID: productID,
      products: [
        {
          id: productID,
          sku: productID,
          name: "Kem nền Hây Hây - Trang điểm tối giản đẹp xinh",
          description:
            "Kem nền Hây Hây giúp các nàng trang điểm đẹp tự nhiên. Kết cấu mỏng nhẹ, thấm nhanh, thoáng da và không để lại vệt trắng. Thành phần an toàn cho da, không gây cảm giác bí tắc và không gây dầu mụn.",
          categories: ["Kem nền"],
          price: "210000",
          imageUrl:
            "https://static/uploads/September2022/kem-nen-tu-nhien-co-mem-mau-nude_sp2x.png",
          url: "https://comem.vn/sp/kem-nen-hay-hay",
        },
      ],
    };

    //if(em_email && em_push_product_id != productID) {
    if (em_email) {
      theme.trackIterable(data);
    }
  });
});
