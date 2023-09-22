$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(function () {
    // Ajax search
    var timeout = null;
    $("#spotlight-search").keyup(function (event) {
        $("#header-spotlight-search .sportlight-search").hide();
        clearTimeout(timeout);
        var pattern = $(this).val();
        let type = $(this).prev(".adding-type").val();

        $("#header-spotlight-search .sportlight-search").html("");

        $("#header-spotlight-search .sportlight-search").html(
            "<div class='loading-data'></div>"
        );

        timeout = setTimeout(function () {
            if (pattern) {
                $.ajax({
                    url: "/ajax/ajaxSearchProducts",
                    type: "GET",
                    data: { pattern: pattern, type },
                    dataType: "JSON",
                }).done(function (data) {
                    if (data.isSuccess) {
                        $(
                            "#header-spotlight-search .sportlight-search .loading-data"
                        ).hide();

                        $("#header-spotlight-search .sportlight-search").html(
                            data.html
                        ); //update data are returned
                        $("#header-spotlight-search .sportlight-search").show(); //display all list are searching
                    } else {
                        $(
                            "#header-spotlight-search .sportlight-search .loading-data"
                        ).hide();
                        $("#header-spotlight-search .sportlight-search").html(
                            data.message
                        ); //update data are returned
                        $("#header-spotlight-search .sportlight-search").show(); //display all list are searching
                    }
                });
            }
        }, 500);
    });
});
