@extends('admin.layout.main')

@section('head')
    <script src="{{ asset('template/admin/assets/js/vendor/ckeditor/ckeditor.js') }}?v=<?= time() ?>"></script>
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/config.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/assets/js/vendor/ckeditor/skins/moono-lisa/editor.css?t=M9E9') }}?v=<?= time() ?>">
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/styles.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/embed/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/autoembed/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/image2/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/embedbase/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/autolink/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>

    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/lang/en.js?t=M9E9') }}?v=<?= time() ?>">
    </script>

    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/image2/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/scayt/dialogs/dialog.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/tableselection/styles/tableselection.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/dialog/styles/dialog.css?t=M9E9') }}?v=<?= time() ?>">
    <script type="text/javascript"
        src="{{ asset('template/admin/assets/js/vendor/ckeditor/plugins/image2/lang/en.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
@endsection

@section('content')
    <!-- Page content -->
    <div class="page-content">

        @include('admin.layout.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="page-header page-header-light shadow">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex">
                            <h4 class="page-title mb-0">Thành Viên - <span class="fw-normal">Tạo Mới Thành Viên</span>
                            </h4>

                            <a href="#page_header"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="breadcrumb py-2">
                                <a href="{{ route('admin.member.index') }}" class="breadcrumb-item"><i
                                        class="ph-house"></i></a>
                                <a href="{{ route('admin.member.index') }}" class="breadcrumb-item">Danh Sách
                                    Thành Viên</a>/
                                <a href="{{ route('admin.member.create') }}" class="breadcrumb-item">Tạo Mới Thành Viên</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                @include('admin.layout.alert')

                <!-- Content area -->
                <div class="content">

                    <!-- Form validation -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Tạo Mới Thành Viên</h5>
                        </div>

                        <form class="form-validate-jquery" action="{{ route('admin.member.store') }}"
                            novalidate="novalidate" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('POST')

                            <div class="card-body">

                                <div class="mb-4">

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tên Thành Viên <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="name" class="form-control" required=""
                                                    placeholder="Tên Thành Viên...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-envelope"></i></span>
                                                <input type="email" name="email" class="form-control" required=""
                                                    placeholder="Email...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tên Người Dùng <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-user-circle"></i></span>
                                                <input type="text" name="username" class="form-control" required=""
                                                    placeholder="Tên Người Dùng...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Số Điện Thoại <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="mobile" class="form-control" required=""
                                                    placeholder="Số Điện Thoại...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Mật Khẩu <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-password"></i></span>
                                                <input type="password" name="password" class="form-control"
                                                    required="" placeholder="Mật Khẩu...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh nổi bật <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="private_image"
                                                    class="file-input-preview private_image" data-show-remove="true"
                                                    id="8hrftuzeck">

                                                <input type="hidden" name="private_image" class="file_name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh bìa <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="cover_image"
                                                    class="file-input-preview cover_image" data-show-remove="true"
                                                    id="8hrftuzeck">

                                                <input type="hidden" name="cover_image" class="file_name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Kích hoạt </label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <label class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input" name="is_active"
                                                        value="1" checked>
                                                    <span class="form-check-label">Kích hoạt</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end">
                                <button type="reset" class="btn btn-light" id="reset">Làm mới</button>
                                <button type="submit" class="btn btn-primary ms-3">Thêm <i
                                        class="ph-paper-plane-tilt ms-2"></i></button>
                            </div>

                        </form>
                    </div>
                    <!-- /form validation -->

                </div>
                <!-- /content area -->

                @include('admin.layout.footer')

            </div>
            <!-- /inner content -->

            <div class="btn-to-top"><button class="btn btn-secondary btn-icon rounded-pill" type="button"><i
                        class="ph-arrow-up"></i></button></div>
        </div>
        <!-- /main content -->

    </div>
    <!-- /user content -->

    <script>
        /* ------------------------------------------------------------------------------
         *
         *  # Bootstrap multiple file uploader
         *
         *  Demo JS code for uploader_bootstrap.html page
         *
         * ---------------------------------------------------------------------------- */

        // Setup module
        // ------------------------------

        const FileUpload = (function() {
            //
            // Setup module components
            //

            // Bootstrap file upload
            const _componentFileUpload = function() {
                if (!$().fileinput) {
                    console.warn("Warning - fileinput.min.js is not loaded.");
                    return;
                }

                //
                // Define variables
                //

                // Buttons inside zoom modal
                const previewZoomButtonClasses = {
                    rotate: "btn btn-light btn-icon btn-sm",
                    toggleheader: "btn btn-light btn-icon btn-header-toggle btn-sm",
                    fullscreen: "btn btn-light btn-icon btn-sm",
                    borderless: "btn btn-light btn-icon btn-sm",
                    close: "btn btn-light btn-icon btn-sm",
                };

                // Icons inside zoom modal classes
                const previewZoomButtonIcons = {
                    prev: document.dir == "rtl" ?
                        '<i class="ph-arrow-right"></i>' : '<i class="ph-arrow-left"></i>',
                    next: document.dir == "rtl" ?
                        '<i class="ph-arrow-left"></i>' : '<i class="ph-arrow-right"></i>',
                    rotate: '<i class="ph-arrow-clockwise"></i>',
                    toggleheader: '<i class="ph-arrows-down-up"></i>',
                    fullscreen: '<i class="ph-corners-out"></i>',
                    borderless: '<i class="ph-frame-corners"></i>',
                    close: '<i class="ph-x"></i>',
                };

                // File actions
                const fileActionSettings = {
                    zoomClass: "",
                    zoomIcon: '<i class="ph-magnifying-glass-plus"></i>',
                    dragClass: "p-2",
                    dragIcon: '<i class="ph-dots-six"></i>',
                    removeClass: "",
                    removeErrorClass: "text-danger",
                    removeIcon: '<i class="ph-trash"></i>',
                    indicatorNew: '<i class="ph-file-plus text-success"></i>',
                    indicatorSuccess: '<i class="ph-check file-icon-large text-success"></i>',
                    indicatorError: '<i class="ph-x text-danger"></i>',
                    indicatorLoading: '<i class="ph-spinner spinner text-muted"></i>',
                };

                //
                // Basic example
                //

                $(".file-input").fileinput({
                    browseLabel: "Browse",
                    browseIcon: '<i class="ph-file-plus me-2"></i>',
                    uploadIcon: '<i class="ph-file-arrow-up me-2"></i>',
                    removeIcon: '<i class="ph-x fs-base me-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                    },
                    uploadClass: "btn btn-light",
                    removeClass: "btn btn-light",
                    initialCaption: "No file selected",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                //
                // Custom layout
                //

                $(".file-input-custom").fileinput({
                    previewFileType: "image",
                    browseLabel: "Select",
                    browseClass: "btn btn-secondary",
                    browseIcon: '<i class="ph-image me-2"></i>',
                    removeLabel: "Remove",
                    removeClass: "btn btn-danger",
                    removeIcon: '<i class="ph-x-square me-2"></i>',
                    uploadClass: "btn btn-teal",
                    uploadIcon: '<i class="ph-upload-simple me-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                    },
                    initialCaption: "Please select image",
                    mainClass: "input-group",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                //
                // Hidden caption
                //

                $(".file-input-caption").fileinput({
                    browseLabel: "Browse",
                    browseIcon: '<i class="ph-file-plus me-2"></i>',
                    uploadIcon: '<i class="ph-file-arrow-up me-2"></i>',
                    removeIcon: '<i class="ph-x fs-base me-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                    },
                    uploadClass: "btn btn-light",
                    removeClass: "btn btn-light",
                    initialCaption: "No file selected",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                    showCaption: false,
                    dropZoneEnabled: false,
                });

                //
                // Template modifications
                //

                $(".file-input-advanced").fileinput({
                    browseLabel: "Browse",
                    browseClass: "btn btn-light",
                    removeClass: "btn btn-light",
                    uploadClass: "btn btn-success",
                    browseIcon: '<i class="ph-file-plus me-2"></i>',
                    uploadIcon: '<i class="ph-file-arrow-up me-2"></i>',
                    removeIcon: '<i class="ph-x fs-base me-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                        main1: "{preview}\n" +
                            "<div class='input-group {class}'>\n" +
                            "{browse}\n" +
                            "{caption}\n" +
                            "{upload}\n" +
                            "{remove}\n" +
                            "</div>",
                    },
                    initialCaption: "No file selected",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                //
                // Always display preview
                //

                $(".file-input-preview.private_image").fileinput({
                    browseLabel: "Browse",
                    browseIcon: '<i class="ph-file-plus me-2"></i>',
                    uploadIcon: '<i class="ph-file-arrow-up me-2"></i>',
                    removeIcon: '<i class="ph-x fs-base me-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                    },
                    uploadClass: "btn btn-light",
                    removeClass: "btn btn-light",
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    maxFileSize: 100000000,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                $(".file-input-preview.cover_image").fileinput({
                    browseLabel: "Browse",
                    browseIcon: '<i class="ph-file-plus me-2"></i>',
                    uploadIcon: '<i class="ph-file-arrow-up me-2"></i>',
                    removeIcon: '<i class="ph-x fs-base me-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                    },
                    uploadClass: "btn btn-light",
                    removeClass: "btn btn-light",
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    maxFileSize: 100000000,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                //
                // Display preview on load
                //

                $(".file-input-overwrite").fileinput({
                    browseLabel: "Browse",
                    browseIcon: '<i class="ph-file-plus me-2"></i>',
                    uploadIcon: '<i class="ph-file-arrow-up me-2"></i>',
                    removeIcon: '<i class="ph-x fs-base me-2"></i>',
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                    },
                    uploadClass: "btn btn-light",
                    removeClass: "btn btn-light",
                    initialPreview: [
                        "../../../assets/images/demo/images/1.png",
                        "../../../assets/images/demo/images/2.png",
                    ],
                    initialPreviewConfig: [{
                        caption: "Jane.jpg",
                        size: 930321,
                        key: 1,
                        url: "{$url}"
                    }, ],
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                //
                // AJAX upload
                //

                $(".file-input-ajax").fileinput({
                    browseLabel: "Browse",
                    uploadUrl: "http://localhost", // server upload action
                    uploadAsync: true,
                    maxFileCount: 5,
                    initialPreview: [],
                    browseIcon: '<i class="ph-file-plus me-2"></i>',
                    uploadIcon: '<i class="ph-file-arrow-up me-2"></i>',
                    removeIcon: '<i class="ph-x fs-base me-2"></i>',
                    fileActionSettings: {
                        removeIcon: '<i class="ph-trash"></i>',
                        removeClass: "",
                        uploadIcon: '<i class="ph-upload-simple"></i>',
                        uploadClass: "",
                        zoomIcon: '<i class="ph-magnifying-glass-plus"></i>',
                        zoomClass: "",
                        indicatorNew: '<i class="ph-file-plus text-success"></i>',
                        indicatorSuccess: '<i class="ph-check file-icon-large text-success"></i>',
                        indicatorError: '<i class="ph-x text-danger"></i>',
                        indicatorLoading: '<i class="ph-spinner spinner text-muted"></i>',
                    },
                    layoutTemplates: {
                        icon: '<i class="ph-check"></i>',
                    },
                    uploadClass: "btn btn-light",
                    removeClass: "btn btn-light",
                    initialCaption: "No file selected",
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                });

                //
                // Misc
                //

                // Disable/enable button
                $("#btn-modify").on("click", function() {
                    $btn = $(this);
                    if ($btn.text() == "Disable file input") {
                        $("#file-input-methods").fileinput("disable");
                        $btn.html("Enable file input");
                        alert(
                            "Hurray! I have disabled the input and hidden the upload button."
                        );
                    } else {
                        $("#file-input-methods").fileinput("enable");
                        $btn.html("Disable file input");
                        alert(
                            "Hurray! I have reverted back the input to enabled with the upload button."
                        );
                    }
                });
            };

            //
            // Return objects assigned to module
            //

            return {
                init: function() {
                    _componentFileUpload();
                },
            };
        })();

        // Initialize module
        // ------------------------------

        document.addEventListener("DOMContentLoaded", function() {
            FileUpload.init();
        });
    </script>
@endsection
