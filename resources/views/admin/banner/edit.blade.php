@extends('admin.layout.main')

@section('content')
    <style>
        .list-images {
            width: 50%;
            margin-top: 20px;
            display: inline-block;
        }

        .hidden {
            display: none;
        }

        .box-image {
            width: 100px;
            height: 108px;
            position: relative;
            float: left;
            margin-left: 5px;
        }

        .box-image img {
            width: 100px;
            height: 100px;
        }

        .wrap-btn-delete {
            position: absolute;
            top: -8px;
            right: 0;
            height: 2px;
            font-size: 20px;
            font-weight: bold;
            color: red;
        }

        .btn-delete-image {
            cursor: pointer;
        }

        /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    .table {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        width: 15%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } */
    </style>

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
                            <h4 class="page-title mb-0">Banner - <span class="fw-normal">Chỉnh Sửa Banner Có Mã
                                    #{{ $banner->id }}</span>
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
                                <a href="{{ route('admin.banner.index') }}" class="breadcrumb-item"><i
                                        class="ph-house"></i></a>
                                <a href="{{ route('admin.banner.index') }}" class="breadcrumb-item">Danh Sách Banner</a>/
                                <a href="{{ route('admin.banner.edit', [$banner->id]) }}" class="breadcrumb-item">Chỉnh
                                    Sửa Banner Có
                                    Mã
                                    #{{ $banner->id }}</a>
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
                            <h5 class="mb-0">Chỉnh Sửa Banner Có Mã #{{ $banner->id }}</h5>
                        </div>

                        <form class="form-validate-jquery" action="{{ route('admin.banner.update', [$banner->id]) }}"
                            novalidate="novalidate" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body">

                                <div class="mb-4">
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tên banner <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="name" class="form-control" required=""
                                                    placeholder="Tên banner..." value="{{ $banner->name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh banner dài <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="long_image"
                                                    class="file-input-preview long_image" data-show-remove="true"
                                                    id="8hrftuzeck">

                                                <input type="hidden" name="long_image" class="file_name"
                                                    value="{{ $banner->long_image }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh banner 1 ngắn <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="short_image_1"
                                                    class="file-input-preview short_image_1" data-show-remove="true"
                                                    id="8hrftuzeck">

                                                <input type="hidden" name="short_image_1" class="file_name"
                                                    value="{{ $banner->short_image_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh banner 2 ngắn <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="short_image_2"
                                                    class="file-input-preview short_image_2" data-show-remove="true"
                                                    id="8hrftuzeck">

                                                <input type="hidden" name="short_image_2" class="file_name"
                                                    value="{{ $banner->short_image_2 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh banner dài mobile <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="long_image_mobile"
                                                    class="file-input-preview long_image_mobile" data-show-remove="true"
                                                    id="8hrftuzeck">

                                                <input type="hidden" name="long_image_mobile" class="file_name"
                                                    value="{{ $banner->long_image_mobile }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh banner 1 ngắn mobile <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="short_image_1_mobile"
                                                    class="file-input-preview short_image_1_mobile"
                                                    data-show-remove="true" id="8hrftuzeck">

                                                <input type="hidden" name="short_image_1_mobile" class="file_name"
                                                    value="{{ $banner->short_image_1_mobile }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Ảnh banner 2 ngắn mobile <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="short_image_2_mobile"
                                                    class="file-input-preview short_image_2_mobile"
                                                    data-show-remove="true" id="8hrftuzeck">

                                                <input type="hidden" name="short_image_2_mobile" class="file_name"
                                                    value="{{ $banner->short_image_2_mobile }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn của banner dài <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-sort-ascending"></i></span>
                                                <input type="text" name="long_image_url" class="form-control"
                                                    required="" placeholder="Đường dẫn của banner dài..."
                                                    value="{{ $banner->long_image_url }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn của banner dài mobile <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-sort-ascending"></i></span>
                                                <input type="text" name="long_image_url_mobile" class="form-control"
                                                    required="" placeholder="Đường dẫn của banner dài mobile..."
                                                    value="{{ $banner->long_image_url_mobile }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn của banner 1 ngắn <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-sort-ascending"></i></span>
                                                <input type="text" name="short_image_1_url" class="form-control"
                                                    required="" placeholder="Đường dẫn của banner 1 ngắn..."
                                                    value="{{ $banner->short_image_1_url }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn của banner 1 ngắn mobile <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-sort-ascending"></i></span>
                                                <input type="text" name="short_image_1_url_mobile"
                                                    class="form-control" required=""
                                                    placeholder="Đường dẫn của banner 1 ngắn mobile..."
                                                    value="{{ $banner->short_image_1_url_mobile }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn của banner 2 ngắn <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-sort-ascending"></i></span>
                                                <input type="text" name="short_image_2_url" class="form-control"
                                                    required="" placeholder="Đường dẫn của banner 2 ngắn..."
                                                    value="{{ $banner->short_image_2_url }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn của banner 2 ngắn mobile <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-sort-ascending"></i></span>
                                                <input type="text" name="short_image_2_url_mobile"
                                                    class="form-control" required=""
                                                    placeholder="Đường dẫn của banner 2 ngắn mobile..."
                                                    value="{{ $banner->short_image_2_url_mobile }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Hiển thị banner dài </label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <label class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="active_long_banner" value="1"
                                                        {{ $banner->active_long_banner == 1 ? 'checked' : '' }}>
                                                    <span class="form-check-label">Hiển thị banner dài</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Hiển thị banner ngắn </label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <label class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="active_short_banner" value="1"
                                                        {{ $banner->active_short_banner == 1 ? 'checked' : '' }}>
                                                    <span class="form-check-label">Hiển thị banner ngắn</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Hiển thị banner dài mobile </label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <label class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="active_long_banner_mobile" value="1"
                                                        {{ $banner->active_long_banner_mobile == 1 ? 'checked' : '' }}>
                                                    <span class="form-check-label">Hiển thị banner dài mobile</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Hiển thị banner ngắn mobile </label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <label class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="active_short_banner_mobile" value="1"
                                                        {{ $banner->active_short_banner_mobile == 1 ? 'checked' : '' }}>
                                                    <span class="form-check-label">Hiển thị banner ngắn mobile</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end">
                                <button type="reset" class="btn btn-light" id="reset">Làm mới</button>
                                <button type="submit" class="btn btn-primary ms-3">Cập nhật <i
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
    <!-- /page content -->

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

                $(".file-input-preview.long_image").fileinput({
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
                        "/storage/uploads/{{ $banner->long_image }}",
                    ],
                    initialPreviewConfig: [{
                        caption: "{{ $banner->long_image }}",
                    }, ],
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    maxFileSize: 100000000,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                $(".file-input-preview.short_image_1").fileinput({
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
                        "/storage/uploads/{{ $banner->short_image_1 }}",
                    ],
                    initialPreviewConfig: [{
                        caption: "{{ $banner->short_image_1 }}",
                    }, ],
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    maxFileSize: 100000000,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                $(".file-input-preview.short_image_2").fileinput({
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
                        "/storage/uploads/{{ $banner->short_image_2 }}",
                    ],
                    initialPreviewConfig: [{
                        caption: "{{ $banner->short_image_2 }}",
                    }, ],
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    maxFileSize: 100000000,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                $(".file-input-preview.long_image_mobile").fileinput({
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
                        "/storage/uploads/{{ $banner->long_image_mobile }}",
                    ],
                    initialPreviewConfig: [{
                        caption: "{{ $banner->long_image_mobile }}",
                    }, ],
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    maxFileSize: 100000000,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                $(".file-input-preview.short_image_1_mobile").fileinput({
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
                        "/storage/uploads/{{ $banner->short_image_1_mobile }}",
                    ],
                    initialPreviewConfig: [{
                        caption: "{{ $banner->short_image_1_mobile }}",
                    }, ],
                    initialPreviewAsData: true,
                    overwriteInitial: true,
                    maxFileSize: 100000000,
                    previewZoomButtonClasses: previewZoomButtonClasses,
                    previewZoomButtonIcons: previewZoomButtonIcons,
                    fileActionSettings: fileActionSettings,
                });

                $(".file-input-preview.short_image_2_mobile").fileinput({
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
                        "/storage/uploads/{{ $banner->short_image_2_mobile }}",
                    ],
                    initialPreviewConfig: [{
                        caption: "{{ $banner->short_image_2_mobile }}",
                    }, ],
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
