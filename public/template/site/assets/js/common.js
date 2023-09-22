mybutton = document.getElementById("gotoTop");
window.onscroll = function () {
  scrollFunction();
};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function gotoTop() {
  $("html, body").animate({ scrollTop: 0 }, 500);
}
jQuery(document).ready(function ($) {
  homeSlider();
  homeBannerSecondSlide();
  homeResources();
  newspapersSlide();
  testimonialsSlide();
  homeBlogSlide();
  homeAboutSlide();
  loadCollectionProducts();
  homeProductSlider();
  header();
});
function loadCollectionProducts() {
  const selected = $(".home-collections__item.is-active");
  const slug = $(selected).data("collection");
  const collection_product = $("#collection-products");
  collection_product.html(
    '<div class="loading-data loading-data--white"></div>'
  );
  $.ajax({
    url: "collection/products/" + slug,
    type: "GET",
  }).done(function (res) {
    collection_product.html(res.data);
    collection_product
      .next(".home-collections__button")
      .find("a")
      .attr("href", "/cm/" + slug);
  });
}

function handleSelectCollection(el) {
  $(".home-collections__item.is-active").removeClass("is-active");
  $(el).addClass("is-active");
  loadCollectionProducts();
}

const homeSlider = function () {
  const _slider = $(".home-banner--slide");
  if (_slider.length <= 0) return;
  $(".home-banner--slide .banner-slide").show(10, function () {
    _slider.slick({
      dots: true,
      arrows: true,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 5000,
      lazyLoad: "ondemand",
    });
  });
};

const homeAboutSlide = function () {
  const _slider = $(".home-abouts--slide");
  if (_slider.length <= 0) return;
  _slider.slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: true,
    arrows: false,
    appendDots: $("#abouts-dots"),
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
};
function header() {
  const _slider = $(".header-menu__nav1");
  
  if (_slider.length <= 0) return;
  _slider.slick({
    infinite: false,
    slidesToShow: 7,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
          arrows: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
        },
      },
      // {
      //   breakpoint: 426,
      //   settings: {
      //     slidesToShow: ,
      //     slidesToScroll: 1,
      //     arrows: false,
      //   },
      // },
    ],
  });
}
const homeResources = function () {
  const _slider = $(".home-resources--slide");
  if (_slider.length <= 0) return;
  _slider.slick({
    autoplay: true,
    autoplaySpeed: 2000,
    // infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    variableWidth: true,
    // dots: false,
    
    prevArrow: $("#resources-slide-prev"),
    nextArrow: $("#resources-slide-next"),
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 1850,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
};

const newspapersSlide = function () {
  const _slider = $(".home-newspapers--slide");
  if (_slider.length <= 0) return;
  _slider.slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 5,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
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
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });
};

const testimonialsSlide = function () {
  const _slider = $(".home-testimonials--slide");
  if (_slider.length <= 0) return;
  _slider.slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: false,
          dots: true,
        },
      },
    ],
  });
};

const homeBlogSlide = function () {
  const _slide = $(".home-blogs--slide");
  if (_slide.length <= 0) return;
  _slide.slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          arrows: false,
          dots: true,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
          dots: true,
        },
      },
      {
        breakpoint: 9999,
        settings: {
          infinite: false,
          slidesToShow: 4,
          slidesToScroll: 4,
          dots: true,
          arrows: false,
          appendDots: $("#blog-dots"),
        },
      },
    ],
  });
};

const homeBannerSecondSlide = function () {
  const _slide = $(".bannerSecond--slide");
  if (_slide.length <= 0) return;
  _slide.slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          arrows: false,
          dots: true,
        },
      },
    ],
  });
};

const homeProductSlider = function () {
  const _slide = $(".home-product--slider");
  
  
  if (_slide.length <=0 ) return;
  _slide.each( function(){
    let d = ($(this).find("div.product-box_item").length)/4;
    if($(this).find("div.product-box_item").length < 2){
      // $(this).removeClass("home-product--slider");
      $(this).slick({
        
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        responsive: [
          {
            breakpoint: 577,
            settings: {
              slidesToShow: 0.98,
              slidesToScroll: 1,
              nfinite: false,
              arrows: false,
            },
          },
          {
            breakpoint: 770,
            settings: {
              slidesToShow: 0.75,
              slidesToScroll: 1,
              nfinite: false,
              arrows: false,
            },
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 0.25,
              slidesToScroll: 1,
              nfinite: false,
              arrows: false,
            },
          },
        ],
        
      });
    }
    else if($(this).find("div.product-box_item").length < 4){
      // $(this).removeClass("home-product--slider");
      $(this).slick({
        
        infinite: false,
        slidesToShow: $(this).find("div.product-box_item").length,
        slidesToScroll: $(this).find("div.product-box_item").length,
        dots: false,
        arrows: true,
        responsive: [
          {
            breakpoint: 577,
            settings: {
              slidesToShow: $(this).find("div.product-box_item").length-($(this).find("div.product-box_item").length)/3+($(this).find("div.product-box_item").length)/10,
              slidesToScroll: 1,
              nfinite: false,
              arrows: false,
            },
          },
          {
            breakpoint: 770,
            settings: {
              slidesToShow: $(this).find("div.product-box_item").length-($(this).find("div.product-box_item").length)/3,
              slidesToScroll: $(this).find("div.product-box_item").length-($(this).find("div.product-box_item").length)/3,
              nfinite: false,
              arrows: false,
            },
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: $(this).find("div.product-box_item").length-0.18,
              slidesToScroll: $(this).find("div.product-box_item").length,
              nfinite: false,
              arrows: false,
            },
          },
        ],
        
      });
    }
    else {
      $(this).slick({
        infinite: false,
        slidesToShow: 3.99,
        slidesToScroll: 4,
        dots: false,
        arrows: true,
        responsive: [
          {
            breakpoint: 577,
            settings: {
              slidesToShow: 2.2,
              slidesToScroll: 1,
              nfinite: false,
              arrows: false,
            },
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2.6,
              slidesToScroll: 2,
              nfinite: false,
              arrows: false,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3.6,
              slidesToScroll: 3.6,
            },
          },
        ],
      });
    }
  })
  
};

function scrollHeaderMenu(idD) {
  let valS = parseInt($("#" + idD).scrollLeft() + 150);
  $("#" + idD).animate({ scrollLeft: valS }, 150);
}
function showHideSearchBox(idE, actionE = "show") {
  if (actionE == "show") {
    $("#" + idE)
      .css({ opacity: "1", width: "100%", "z-index": "999999" })
      .unbind();
  } else if (actionE == "hide") {
    $("#" + idE)
      .css({ opacity: "0", width: "0", "z-index": "-1" })
      .unbind();
  }
}
$(window).scroll(function () {
  showHideSearchBox("searchBox-mobile", "hide");
});
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
    $("#" + idElemt).children().addClass("active_nav");
    $("body").css("overflow", "hidden");
  } else {
    $("#" + idElemt).css("display", "none");
    $("#" + idElemt).children().removeClass("active_nav");
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
      $('[data-menu-id="' + dataMenuActive + '"]').removeClass("is-active");
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
        localStorage.setItem("search_keywords", JSON.stringify(keywords));
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
        data: { ids: "" },
        dataType: "json",
      }).done(function (res) {
        if (res.html.length > 0) $("#viewedProducts_items").html(res.html);
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
});

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
