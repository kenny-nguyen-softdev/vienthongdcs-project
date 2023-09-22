window.onload = function () {
    const menu_btn = $(".hamburger");
    const mobile_menu = $(".mobile-nav");
    menu_btn.click(() => {
        menu_btn.toggleClass("is-active");
        mobile_menu.parent().addClass("background-black");
        mobile_menu.toggleClass("is-active");
    });

    $(document).click((e) => {
        var $div = $(e.target).offset().left;
        if ($div == 0) {
            menu_btn.removeClass("is-active");
            mobile_menu.removeClass("is-active");
            $(".background-black").removeClass("background-black");
        }
    });
    $(".tab-content .tab-pane.active p").each(function () {
        var h = $(this).height();
        console.log(h);
        if (h > 492) {
            $(this).css({ height: "492px", overflow: "hidden" });
            $(this).next().css("display", "block");
        }
    });
    $(".product-info-detailed .nav-tabs li").click(function () {
        $(".tab-content .tab-pane.active p").each(function () {
            var h = $(this).height();
            console.log(h);
            if (h > 492) {
                $(this).css({ height: "492px", overflow: "hidden" });
                $(this).next().css("display", "block");
            }
        });
    });

    $(".read-more").click(function () {
        $(this).parent().toggleClass("is-active");
        var replace = $(this).parent().hasClass("is-active")
            ? "Thu gọn"
            : "Xem thêm...";
        $(this).text(replace);
    });

    $("input#payment_method_bacs").click(() => {
        $(".payment_box.payment_method_bacs").slideToggle("slow");
        $(".payment_box.payment_method_cod").hide({ Speed: "slow" });
    });
    $("input#payment_method_cod").click(() => {
        $(".payment_box.payment_method_cod").slideToggle("slow");
        $(".payment_box.payment_method_bacs").hide({ Speed: "slow" });
    });

    $('input.input-qty').each(function() {
        var $this = $(this),
          qty = $this.parent().find('.is-form'),
          min = Number($this.attr('min'))
          
        if (min == 0) {
          var d = 0
        } else d = min
        $(qty).on('click', function() {
          if ($(this).hasClass('sub')) {
            if (d > min) d += -1
          } else if ($(this).hasClass('add')) {
            var x = Number($this.val()) + 1
            d += 1
          }
          $this.attr('value', d).val(d)
        })
      })
};
