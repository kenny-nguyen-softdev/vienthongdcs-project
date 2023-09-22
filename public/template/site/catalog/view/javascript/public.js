$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(function () {
    // Ajax search
    var timeout = null;
    $(".top-search #form_search #text-search").keyup(function (event) {
        $(".ajax-result-container").hide();
        clearTimeout(timeout);
        var pattern = $(this).val();

        $(".ajax-result-container").html("");

        timeout = setTimeout(function () {
            if (pattern) {
                $.ajax({
                    url: "/ajax/ajaxSearchProducts",
                    type: "GET",
                    data: { pattern: pattern },
                    dataType: "JSON",
                }).done(function (data) {
                    if (data.isSuccess) {
                        $(".ajax-result-container").html(data.html); //update data are returned
                        $(".ajax-result-container").show(); //display all list are searching
                    } else {
                        $(".ajax-result-container").html(data.message); //update data are returned
                        $(".ajax-result-container").show(); //display all list are searching
                    }
                });
            }
        }, 500);
    });

    //Validate change password form
    $("#reset_password_form").validate({
        rules: {
            email: {
                required: true,
                maxlength: 50,
                email: true,
                remote: "/ajax/checkExistEmailInLoginForm", //Check email duplicate
            },
            password: {
                required: true,
                // regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },

            password_confirmation: {
                required: true,
                equalTo: "[name=password]",
            },
        },

        messages: {
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email không tồn tại !!",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                // regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },

            password_confirmation: {
                required: "Vui lòng nhập lại mật khẩu",
                equalTo: "Nhập lại mật khẩu phải trùng khớp",
            },
        },
    });

    //Validate account information form
    $("#account_information_form").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            mobile: {
                required: true,
                regex: /^0([0-9]{9,9})$/,
            },

            email: {
                required: true,
                maxlength: 50,
                email: true,
            },

            housenumber_street: {
                required: true,
            },
            province_id: {
                required: true,
            },
            district_id: {
                required: true,
            },
            ward_id: {
                required: true,
            },
        },

        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                regex: "Vui lòng nhập số và ký tự đặc biệt",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại",
                regex: "Vui lòng nhập 10 con số bắt đầu là 0",
            },
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email đã tồn tại",
            },
            housenumber_street: {
                required: "Vui lòng nhập địa chỉ",
            },
            province_id: {
                required: "Vui lòng chọn tỉnh/thành phố",
            },

            district_id: {
                required: "Vui lòng chọn quận/huyện",
            },

            ward_id: {
                required: "Vui lòng chọn phường/xã",
            },
        },
    });

    //Validate change password form
    $("#change_password_form").validate({
        rules: {
            current_password: {
                required: true,
                regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
                remote: "/ajax/checkExistCurrentPassword", //Check email duplicate
            },

            password: {
                required: true,
                regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },

            password_confirmation: {
                required: true,
                equalTo: "[name=password]",
            },
        },

        messages: {
            current_password: {
                required: "Vui lòng nhập mật khẩu hiện tại",
                regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
                remote: "Password không tồn tại !!!",
            },

            password: {
                required: "Vui lòng nhập mật khẩu",
                regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },

            password_confirmation: {
                required: "Vui lòng nhập lại mật khẩu",
                equalTo: "Nhập lại mật khẩu phải trùng khớp",
            },
        },
    });

    //Validate register form
    $(".login_form_user").validate({
        rules: {
            email: {
                required: true,
                maxlength: 50,
                email: true,
                remote: "/ajax/checkExistEmailInLoginForm", //Check email duplicate
            },
            mobile: {
                required: true,
                regex: /^0([0-9]{9,9})$/,
                remote: "/ajax/checkExistMobileInLoginForm", //Check mobile duplicate
            },
            password: {
                required: true,
                regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },
        },

        messages: {
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email không tồn tại !!",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại",
                regex: "Vui lòng nhập 10 con số bắt đầu là 0",
                remote: "Số điện thoại không tồn tại !!",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },
        },
    });

    //Validate register form
    $(".register_form_user").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            mobile: {
                required: true,
                regex: /^0([0-9]{9,9})$/,
                remote: "/ajax/notExistingMobile", //Check mobile duplicate
            },

            email: {
                required: true,
                maxlength: 50,
                email: true,
                remote: "/ajax/notExistingEmail", //Check email duplicate
            },

            address: {
                required: true,
            },

            password: {
                required: true,
                regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,
            },

            password_confirmation: {
                required: true,
                equalTo: "[name=password]",
            },
        },

        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                regex: "Vui lòng nhập số và ký tự đặc biệt",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại",
                regex: "Vui lòng nhập 10 con số bắt đầu là 0",
                remote: "Số điện thoại đã tồn tại",
            },
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email đã tồn tại",
            },
            address: {
                required: "Vui lòng nhập địa chỉ",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                regex: "Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
            },

            password_confirmation: {
                required: "Vui lòng nhập lại mật khẩu",
                equalTo: "Nhập lại mật khẩu phải trùng khớp",
            },

            // hiddenRecaptcha: {
            //     required: "Vui lòng xác nhận Google reCAPTCHA",
            // },
        },
    });

    //Validate order form
    $("#frm_order").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            mobile: {
                required: true,
                regex: /^0([0-9]{9,9})$/,
            },

            email: {
                required: true,
                maxlength: 50,
                email: true,
            },
            housenumber_street: {
                required: true,
            },
            province_id: {
                required: true,
            },
            district_id: {
                required: true,
            },
            ward_id: {
                required: true,
            },
        },

        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                regex: "Vui lòng nhập số và ký tự đặc biệt",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại",
                regex: "Vui lòng nhập 10 con số bắt đầu là 0",
            },
            email: {
                required: "Vui lòng nhập email",
                maxlength: "Vui lòng nhập không quá 50 ký tự",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
                remote: "Email đã tồn tại",
            },
            housenumber_street: {
                required: "Vui lòng số nhà, tên đường ...",
            },
            province_id: {
                required: "Vui lòng chọn tỉnh/thành phố",
            },

            district_id: {
                required: "Vui lòng chọn quận/huyện",
            },

            ward_id: {
                required: "Vui lòng chọn phường/xã",
            },
        },
    });

    $("#consultant_form").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                // regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            mobile: {
                required: true,
                // regex: /^0([0-9]{9,9})$/,
                maxlength: 13,
            },
            address: {
                required: true,
            },
            product_name: {
                required: true,
            },
        },
        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên !",
                maxlength: "Vui lòng không nhập họ và tên quá 50 kí tự !",
                // regex: "Vui lòng nhập số và ký tự đặc biệt !",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại cá nhân !",
                // regex: "Vui lòng nhập 10 con số bắt đầu là 0 !",
                maxlength: "Vui lòng nhập số điện thoại không quá 13 số !",
            },
            address: {
                required: "Vui lòng nhập địa chỉ lắp đặt !",
            },
            product_name: {
                required: "Vui lòng nhập tên sản phẩm !",
            },
        },
        submitHandler: function (form) {
            var post_url = $(form).attr("action"); //get form action url
            var request_method = $(form).attr("method"); //get form GET/POST method

            //Lấy tất cả dữ liệu trong thẻ form và mã hóa
            var form_data = $(form).serialize(); //Encode form elements for submission

            $("#consultant_form .send-loading").html(
                '<div class="bg bg-warning"><span class="text text-white"><strong>Vui lòng đợi trong vài giây !</strong> <i class="fas fa-sync fa-spin"></i></span></div>'
            );
            $("#consultant_form .send-loading").show();

            $.ajax({
                type: request_method,
                url: post_url,
                data: form_data,
                dataType: "JSON",
                success: function (response) {
                    if (response.isSuccess) {
                        $("#consultant_form .send-loading").html(
                            '<div class="bg bg-success"><span class="text text-white"><strong>Gửi đăng ký dịch vụ thành công !</strong></div>'
                        );
                    } else {
                        $("#consultant_form .send-loading").html(
                            '<div class="bg bg-danger"><span class="text text-white"><strong>Gửi đăng ký dịch vụ thất bại !!!</strong></div>'
                        );
                    }
                },
            });
        },
    });

    // contact form jquery validation
    $("#contactform").validate({
        rules: {
            // simple rule, converted to {required:true}
            fullname: {
                required: true,
                maxlength: 50,
                // regex: /^[a-zAZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
            },
            email: {
                required: true,
                maxlength: 50,
                email: true,
            },
            mobile: {
                required: true,
                // regex: /^0([0-9]{9,9})$/,
                maxlength: 13,
            },
            content: {
                required: true,
            },
        },
        messages: {
            fullname: {
                required: "Vui lòng nhập họ và tên !",
                maxlength: "Vui lòng không nhập họ và tên quá 50 kí tự !",
                // regex: "Vui lòng nhập số và ký tự đặc biệt !",
            },
            email: {
                required: "Vui lòng nhập email !",
                maxlength: "Vui lòng nhập không quá 50 ký tự !",
                email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
            },
            mobile: {
                required: "Vui lòng nhập số điện thoại cá nhân !",
                // regex: "Vui lòng nhập 10 con số bắt đầu là 0 !",
                maxlength: "Vui lòng nhập số điện thoại không quá 13 số !",
            },
            content: {
                required: "Vui lòng nhập nội dung tư vấn !",
            },
        },
        submitHandler: function (form) {
            var post_url = $(form).attr("action"); //get form action url
            var request_method = $(form).attr("method"); //get form GET/POST method

            //Lấy tất cả dữ liệu trong thẻ form và mã hóa
            var form_data = $(form).serialize(); //Encode form elements for submission

            $("#contactform .send-loading").html(
                '<div class="bg bg-warning"><span class="text text-white"><strong>Vui lòng đợi trong vài giây !</strong> <i class="fas fa-sync fa-spin"></i></span></div>'
            );
            $("#contactform .send-loading").show();

            $.ajax({
                type: request_method,
                url: post_url,
                data: form_data,
                dataType: "JSON",
                success: function (response) {
                    if (response.isSuccess) {
                        $("#contactform .send-loading").html(
                            '<div class="bg bg-success"><span class="text text-white"><strong>Gửi mail thành công !</strong></div>'
                        );
                    } else {
                        $("#contactform .send-loading").html(
                            '<div class="bg bg-danger"><span class="text text-white"><strong>Gửi mail thất bại !!!</strong></div>'
                        );
                    }
                },
            });
        },
    });

    //Thay đổi province
    $("#province").change(function (e) {
        e.preventDefault();

        var provinceId = $(this).val();

        $.ajax({
            type: "POST",
            url: "/ajax/address/districts",
            data: { province_id: provinceId },
            dataType: "JSON",
        }).done(function (data) {
            //   alert(data.districts);
            updateSelectBox(data.districts, "#district");
        });

        $("#district").change(function (e) {
            e.preventDefault();
            var districtId = $(this).val();

            $.ajax({
                type: "POST",
                url: "/ajax/address/wards",
                data: { district_id: districtId },
                dataType: "JSON",
            }).done(function (data) {
                //   alert(data.districts);
                updateSelectBox(data.wards, "#ward");
            });
        });
    });

    var minimum = 1;
    $("#input-quantity").change(function () {
        if ($(this).val() < minimum) {
            alert("Minimum Quantity: " + minimum);
            $("#input-quantity").val(minimum);
        }
    });

    $("#minus").click(function () {
        minus(minimum);
    });
    $("#plus").click(function () {
        plus();
    });

    $("#input-quantity").change(function (e) {
        e.preventDefault();

        const qty = $(this).val();
        $("input[name=qty_in_cart]").val(qty);
    });

    $("#minus").click(function (e) {
        e.preventDefault();

        const qty = $(this).next().val();
        $("input[name=qty_in_cart]").val(qty);
    });

    $("#plus").click(function (e) {
        e.preventDefault();

        const qty = $(this).prev().val();
        $("input[name=qty_in_cart]").val(qty);
    });

    $(".img_click_minus1").click(function (e) {
        e.preventDefault();
        var number_cart_input = $(this).next(".number_cart_input");
        var qty = parseInt(number_cart_input.val());

        if (qty <= 1) {
            number_cart_input.val(1);
            return;
        }
        number_cart_input.val(qty - 1);
    });

    $(".img_click_plus1").click(function (e) {
        e.preventDefault();
        var number_cart_input = $(this).prev(".number_cart_input");
        var qty = parseInt(number_cart_input.val());

        number_cart_input.val(qty + 1);
    });

    $(".toolbar .sorter select#input-sort").change(function (e) {
        e.preventDefault();
        const url = $(
            ".toolbar .sorter select#input-sort option:selected"
        ).attr("data-url");

        window.location.href = url;
    });

    $(".toolbar .limiter select#input-limit").change(function (e) {
        e.preventDefault();
        const url = $(
            ".toolbar .limiter select#input-limit option:selected"
        ).attr("data-url");

        window.location.href = url;
    });

    $(".a-qv-close").click(function (e) {
        e.preventDefault();
        $("#quickview-bg-block").hide();
        $("#quickview-content").hide();
        $(".quickview-load-img").hide();
        $(".a-qv-close").hide();
    });

    $("#quickview-bg-block").click(function (e) {
        e.preventDefault();
        $("#quickview-bg-block").hide();
        $("#quickview-content").hide();
        $(".quickview-load-img").hide();
        $(".a-qv-close").hide();
    });

    rating_submit();
});

function formatToCurrency(amount) {
    // return amount.toFixed(0).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function rating_submit() {
    let form = $("#frm-product-rating");
    form.submit(function (e) {
        e.preventDefault();
        let rating_message = $("#rating-message");
        let rating = form.find($("input[name=rating]")).val();
        let review_name = form.find($("input[name=review_name]")).val();
        let review_phone = form.find($("input[name=review_phone]")).val();
        let review_email = form.find($("input[name=review_email]")).val();
        let review_body = form.find($("textarea[name=review_body]")).val();
        // const phone_regex = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
        if (rating == "" || rating == 0) {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Bạn chưa đánh giá điểm sao, vui lòng đánh giá." +
                    "</div>"
            );
            return false;
        }
        if (review_body == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập nội dung đánh giá về sản phẩm." +
                    "</div>"
            );
            form.find($("textarea[name=review_body]")).focus();
            return false;
        }
        // } else if (review_body.length < 40) {
        //     rating_message.html(
        //         '<div class="show_error w3-right-align">' +
        //             "Nội dung đánh giá quá ít. Vui lòng nhập thêm nội dung đánh giá về sản phẩm." +
        //             "</div>"
        //     );
        //     form.find($("textarea[name=review_body]")).focus();
        //     return false;
        // }
        if (review_name == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập họ tên." +
                    "</div>"
            );
            form.find($("input[name=review_name]")).focus();
            return false;
        }
        if (review_phone == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập số điện thoại." +
                    "</div>"
            );
            form.find($("input[name=review_phone]")).focus();
            return false;
        }
        if (review_email == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập email." +
                    "</div>"
            );
            form.find($("textarea[name=review_email]")).focus();
            return false;
        }
        if (review_body == "") {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng nhập nội dung bình luận đánh giá." +
                    "</div>"
            );
            form.find($("textarea[name=review_body]")).focus();
            return false;
        }
        if (rating == 0) {
            rating_message.html(
                '<div class="show_error w3-right-align">' +
                    "Vui lòng chọn số sao đánh giá." +
                    "</div>"
            );
            form.find($("textarea[name=rating]")).focus();
            return false;
        }
        // } else if (!phone_regex.test(review_phone)) {
        //     rating_message.html(
        //         '<div class="show_error w3-right-align">' +
        //             "Số điện thoại không hợp lệ." +
        //             "</div>"
        //     );
        //     form.find($("input[name=phone]")).focus();
        //     return false;
        // }
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
            dataType: "JSON",
            success: function (result) {
                if (result.isSuccess) {
                    rating_message.html(
                        '<div class="txt_success w3-right-align text text-success">' +
                            result.message +
                            "</div>"
                    );
                    form.find(
                        "input[type=text], input[type=email], textarea, select"
                    ).val("");
                } else {
                    rating_message.html(
                        '<div class="show_error w3-right-align text text-danger">' +
                            result.message +
                            "</div>"
                    );
                }
            },
        });
    });
}

function showQuickView(product_id) {
    $("#quickview-bg-block").show();
    $(".quickview-load-img").show();
    $.ajax({
        type: "GET",
        url: "/ajax/ajaxShowQuickViewProduct",
        data: { product_id },
        dataType: "JSON",
        success: function (res) {
            if (res.isSuccess) {
                // console.log(res.product);
                updateQuickViewContent(
                    res.product,
                    res.images,
                    res.parentCategory,
                    res.origin,
                    res.configuration,
                    res.feature,
                    res.hotline
                );
                $(".quickview-load-img").hide();
                $(".a-qv-close").show();
                $("#quickview-content").show();
            } else {
                alert(console.log(res.message));
                $("#quickview-bg-block").hide();
                $(".quickview-load-img").hide();
                $("#quickview-content").hide();
            }
        },
    });
}

function updateQuickViewContent(
    data,
    images,
    parentCategory,
    origin,
    configuration,
    feature,
    hotline
) {
    let imagesHtml = "";

    images.forEach((image) => {
        imagesHtml += `<a class="thumbnail" style="display: none" href="/san-pham/${data.slug}.html"
        data-image="/storage/uploads/${image.name}"
        data-zoom-image="/storage/uploads/${image.name}"
        title="${image.name}"><img src="/storage/uploads/${image.name}"
            title="${image.name}" alt="${image.name}" />
    </a>`;
    });

    let priceHtml = "";

    if (data.price == 0 && data.sale_price == 0) {
        priceHtml += `<p class="special-price"><span class="price">Liên Hệ</span></p>`;
    } else {
        if (data.price > data.sale_price) {
            priceHtml += `<p class="special-price"><span class="price">${formatToCurrency(
                data.sale_price
            )}₫</span></p>
            <p class="old-price"><span class="price">${formatToCurrency(
                data.price
            )}₫</span></p>`;
        } else {
            priceHtml += `<p class="special-price"><span class="price">${formatToCurrency(
                data.sale_price
            )}₫</span></p>`;
        }
    }

    const html = `<div class="col-1 col-sm-6">
    <div class="thumbnails">
        <a href="/san-pham/${data.slug}.html" class="thumbnail" title="${
        data.name
    }">
            <img src="/storage/uploads/${data.featured_image}"
                data-zoom-image="/storage/uploads/${data.featured_image}"
                title="${data.name}" />
        </a>
    </div>
    <div class="image-additional-container owl-style3">
        <div class="owl-container">
            <div class="image-additional" id="gallery_01">

                <a class="thumbnail" style="display: none" href="/san-pham/${
                    data.slug
                }.html"
                    data-image="/storage/uploads/${data.featured_image}"
                    data-zoom-image="/storage/uploads/${data.featured_image}"
                    title="${data.name}"><img src="/storage/uploads/${
        data.featured_image
    }"
                        title="${data.name}" alt="${data.name}" />
                </a>

                ${imagesHtml}

            </div>
        </div>
    </div>
</div>
<div class="col-2 col-sm-6 product-info-main">
    <h1 class="product-name">${data.name}</h1>

    <div class="ratings">
        <div class="rating-box">
            <div class="rating${data.star}">rating</div>
        </div>
    </div>

    ${data.description}
    <div class="box-options">
    <ul class="list-unstyled">
    <li>Phân loại: <span class="ex-text">${parentCategory.name}</span></li>
  </ul>
  <ul class="list-unstyled">
    <li>
      Xuất xứ:
      <a href="javascript:void(0)"><span
          class="ex-text">${
              origin == undefined ? "Chưa xác định" : origin?.name
          }</span></a>
    </li>
    <li>Cấu hình: <span class="ex-text">${
        configuration == undefined ? "Chưa xác định" : configuration?.name
    }</span></li>
    <li>Tính năng: <span class="ex-text">${
        feature == undefined ? "Chưa xác định" : feature?.name
    }</span></li>
    <li>Bảo hành: <span class="ex-text">${data.insurance}</span></li>
    <li>Tình trạng: <span class="ex-text">${
        data.inventory_qty ? "Còn Hàng" : "Hết Hàng"
    }</span></li>
  </ul>
    </div>
    <div class="price-box box-special">
    ${priceHtml}
    </div>
    <div class="form-group">
        <div class="col-md-12 quantity">
            <label class="control-label" for="input-quantity">Số lượng:
            </label>
            <div class="quantity-box">
                <input type="button" id="minus" value="-" class="form-control" onClick="minusQuantity(
                    this
                )"/>
                <input type="text" name="quantity" value="1" size="2" id="input-quantity"
                    class="form-control" onChange="changeQuantity(this)"/>
                <input type="button" id="plus" value="&#43;" class="form-control" onClick="plusQuantity(
                    this
                )"/>
            </div>
        </div>
        <form class="button-form" action="/gio-hang/tao-moi.html" method="post">
        <input type="hidden" name="_token" value="${$(
            'meta[name="csrf-token"]'
        ).attr("content")}">
            <input type="hidden" name="product_id" value="${data.id}" />
            <input type="hidden" name="qty_in_cart" value="1" />
            <button class="button button-cart col-md-6 col-sm-12" type="submit" id="button-cart"
                data-loading-text="Loading...">
                <i class="fa fa-shopping-cart"></i>
                <span>THÊM GIỎ HÀNG</span>
            </button>
        </form>

        <form class="button-form" action="/mua-ngay.html" method="post">
        <input type="hidden" name="_token" value="${$(
            'meta[name="csrf-token"]'
        ).attr("content")}">
            <input type="hidden" name="product_id" value="${data.id}" />
            <input type="hidden" name="qty_in_cart" value="1" />
            <button class="button button-cart button-buy col-md-6 col-sm-12" type="submit" id="button-cart"
                data-loading-text="Loading...">
                <i class="fa fa-shopping-cart"></i>
                <span>MUA NGAY</span>
            </button>
        </form>

        <button class="button button-cart help_advise col-md-12 col-sm-12">
            <div class="advise-text">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>HỖ TRỢ TƯ VẤN</span>
            </div>
            <div class="hotline">
                Hotline:
                <a href="tel: ${hotline}" style="color: #fff">${hotline}</a>
            </div>
        </button>
    </div>
</div>`;

    $("#quickview-content").html("");
    $("#quickview-content").html(html);
}

function updateItemInCart(tag, url, rowId) {
    let qty = $(tag).parent().parent().find("#quantity").val();

    $.ajax({
        type: "PUT",
        url: url,
        data: { rowId, qty },
        dataType: "JSON",
        success: function (res) {
            if (res.isSuccess) {
                window.location.reload();
            } else {
                alert("Cập nhật sản phẩm mua thất bại !!");
            }
        },
    });
}

function deleteItemInCart(url, rowId) {
    $.ajax({
        type: "DELETE",
        url: url,
        data: { rowId },
        dataType: "JSON",
        success: function (res) {
            if (res.isSuccess) {
                window.location.reload();
            } else {
                alert("Xóa sản phẩm mua thất bại !!");
            }
        },
    });
}

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

// increase number of product
function minusQuantity(tag) {
    var currentval = parseInt($("#input-quantity").val());
    $("#input-quantity").val(currentval - 1);
    $("input[name=qty_in_cart]").val(currentval - 1);
    if ($("#input-quantity").val() <= 0 || $("#input-quantity").val() < 1) {
        alert("Minimum Quantity: " + 1);
        $("#input-quantity").val(1);
    }
}
// decrease of product
function plusQuantity(tag) {
    var currentval = parseInt($("#input-quantity").val());
    $("#input-quantity").val(currentval + 1);

    $("input[name=qty_in_cart]").val(currentval + 1);
}

function changeQuantity(tag) {
    var currentVal = parseInt($(tag).val());
    $("#input-quantity").val(currentval);

    $("input[name=qty_in_cart]").val(currentval);
}

function email_subscribe() {
    $.ajax({
        type: "POST",
        url: "/ajax/subscribeByEmail",
        data: $("#subscribe-normal").serialize(),
        dataType: "JSON",
        success: function (res) {
            if (res.isSuccess) {
                $("#notification-normal").html(
                    `<div class="success">Đăng ký nhận bản tin thành công!</div>`
                );
            } else {
                alert("Đăng ký nhận bản tin thất bại !");
            }
        },
    });
}

function updateQtyInCart(url, tag, rowId) {
    if ($(tag).hasClass("img_click_minus1")) {
        const number_cart_input = $(tag).next(".number_cart_input");
        var qty = parseInt(number_cart_input.val());
        qty--;

        $.ajax({
            type: "PUT",
            url: url,
            data: { rowId, qty },
            dataType: "JSON",
            success: function (res) {
                if (res.isSuccess) {
                    var total_price = res.total_price;
                    var oneCart = res.oneCart;
                    var product_qty = res.product_qty;

                    $(tag)
                        .parent()
                        .parent()
                        .parent()
                        .find("#item_sub_total")
                        .html(
                            formatToCurrency(
                                Number(oneCart.price) * Number(oneCart.qty)
                            ) + " đ"
                        );

                    $("#sub_total").html(total_price + " đ");
                    $("#total_price").html(total_price + " đ");
                } else {
                    alert("Cập nhật số lượng sản phẩm mua thất bại !!");
                }
            },
        });
    } else if ($(tag).hasClass("img_click_plus1")) {
        var number_cart_input = $(tag).prev(".number_cart_input");
        var qty = parseInt(number_cart_input.val());
        qty++;

        $.ajax({
            type: "PUT",
            url: url,
            data: { rowId, qty },
            dataType: "JSON",
            success: function (res) {
                var total_price = res.total_price;
                var oneCart = res.oneCart;
                var product_qty = res.product_qty;

                if (res.isSuccess) {
                    $(tag)
                        .parent()
                        .parent()
                        .parent()
                        .find("#item_sub_total")
                        .html(
                            formatToCurrency(
                                Number(oneCart.price) * Number(oneCart.qty)
                            ) + " đ"
                        );

                    $("#sub_total").html(total_price + " đ");
                    $("#total_price").html(total_price + " đ");
                } else {
                    alert("Cập nhật số lượng sản phẩm mua thất bại !!");
                }
            },
        });
    } else {
        var number_cart_input = $(tag);
        var qty = parseInt(number_cart_input.val());

        $.ajax({
            type: "PUT",
            url: url,
            data: { rowId, qty },
            dataType: "JSON",
            success: function (res) {
                var total_price = res.total_price;
                var oneCart = res.oneCart;
                var product_qty = res.product_qty;

                if (res.isSuccess) {
                    if (res.isSuccess) {
                        $(tag)
                            .parent()
                            .parent()
                            .parent()
                            .find("#item_sub_total")
                            .html(
                                formatToCurrency(
                                    Number(oneCart.price) * Number(oneCart.qty)
                                ) + " đ"
                            );

                        $("#sub_total").html(total_price + " đ");
                        $("#total_price").html(total_price + " đ");
                    } else {
                        alert("Cập nhật số lượng sản phẩm mua thất bại !!");
                    }
                } else {
                    alert("Cập nhật số lượng sản phẩm mua thất bại !!");
                }
            },
        });
    }
}
