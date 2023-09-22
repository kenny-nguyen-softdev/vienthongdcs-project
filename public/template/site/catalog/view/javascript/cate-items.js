$(document).ready(function () {
    var flag = false;
    var ajax_search_enable = $("#ajax-search-enable").val();
  
    var current_cate_value = $("ul.cate-items li.selected").data("value");
    var current_cate_text = $("ul.cate-items li.selected").html();
  
    $(".cate-selected").attr("data-value", current_cate_value);
    $(".cate-selected").html(current_cate_text);
  
    $(".hover-cate p").click(function () {
      $(".cate-items").toggle("slow").toggleClass("is-active");
    });
    $(document).click((e) => {
      
      if (e.target.className != "cate-selected" && e.target.className != "fa fa-angle-down" && e.target.className != "hover-cate-btn") {
        $(".cate-items.is-active").toggle("slow").removeClass("is-active");
      }
    });
  
    $(".ajax-result-container").hover(
      function () {
        flag = true;
      },
      function () {
        flag = false;
      }
    );
  
    $(".hover-cate").hover(
      function () {
        flag = true;
      },
      function () {
        flag = false;
      }
    );
  
    $("#search-by-category").focusout(function () {
      if (flag == true) {
        $(".ajax-result-container").show();
      } else {
        $(".ajax-result-container").hide();
      }
    });
  
    $("#search-by-category").focusin(function () {
      $(".ajax-result-container").show();
    });
  
    $("#btn-search-category").click(function () {
      var url = "index64b3.html?route=product/search";
      var text_search = $("#text-search").val();
      if (text_search) {
        url += "&search=" + encodeURIComponent(text_search);
      }
  
      var category_search = $(".cate-selected").attr("data-value");
      if (category_search) {
        url += "&category_id=" + encodeURIComponent(category_search);
      }
  
      location = url;
    });
  
    if (ajax_search_enable == "1") {
      $("#text-search").keyup(function (e) {
        var text_search = $(this).val();
        var cate_search = $(".cate-selected").attr("data-value");
        if (text_search != null && text_search != "") {
          ajaxSearch(text_search, cate_search);
        } else {
          $(".ajax-result-container").html("");
          $(".ajax-loader-container").hide();
        }
      });
      $("#text-search").on("keydown", function (e) {
        if (e.keyCode == 13) {
          $("#btn-search-category").trigger("click");
        }
      });
      $("ul.cate-items li.item-cate").click(function () {
        var cate_search = $(this).data("value");
        var text_search = $("#text-search").val();
        $(".cate-selected").attr("data-value", cate_search);
        $(".cate-selected").html($(this).html());
        if (text_search != null && text_search != "") {
          ajaxSearch(text_search, cate_search);
        } else {
          $(".ajax-result-container").html("");
          $(".ajax-loader-container").hide();
        }
        $(".cate-items").hide();
        $("#text-search").focus();
      });
    }
  
    function ajaxSearch(text_search, cate_search) {
      $.ajax({
        url: "http://bigone3.demo.towerthemes.com/index.php?route=extension/module/ocsearchcategory/ajaxSearch",
        type: "post",
        data: {
          text_search: text_search,
          cate_search: cate_search,
        },
        beforeSend: function () {
          $(".ajax-loader-container").show();
        },
        success: function (json) {
          if (json["success"] == true) {
            $(".ajax-result-container").html(json["result_html"]);
            $(".ajax-loader-container").hide();
          }
        },
      });
    }
  });
  