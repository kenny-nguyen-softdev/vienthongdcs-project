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
                            <h4 class="page-title mb-0">Cấu Hình - <span class="fw-normal">Thông Tin Cấu Hình</span>
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
                                <a href="{{ route('admin.dashboard.index') }}" class="breadcrumb-item"><i
                                        class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard.index') }}" class="breadcrumb-item">Home</a>/
                                <a href="{{ route('admin.config.index') }}" class="breadcrumb-item">Thông Tin Cấu Hình</a>
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
                            <h5 class="mb-0">Thông Tin Cấu Hình</h5>
                        </div>

                        <form class="form-validate-jquery" action="{{ route('admin.config.update', [$config->id]) }}"
                            novalidate="novalidate" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body">

                                <div class="mb-4">
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề trên Top <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="top_content" class="form-control" required=""
                                                    placeholder="Tiêu đề trên Top..." value="{{ $config->top_content }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn trên top <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="top_url" class="form-control" required=""
                                                    placeholder="Đường dẫn trên top..." value="{{ $config->top_url }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề 1 bên phải <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="right_menu_content_1" class="form-control"
                                                    required="" placeholder="Tiêu đề 1 bên phải..."
                                                    value="{{ $config->right_menu_content_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn 1 bên phải <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="right_menu_url_1" class="form-control"
                                                    required="" placeholder="Đường dẫn 1 bên phải..."
                                                    value="{{ $config->right_menu_url_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề 2 bên phải <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="right_menu_content_2" class="form-control"
                                                    required="" placeholder="Tiêu đề 2 bên phải..."
                                                    value="{{ $config->right_menu_content_2 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn 2 bên phải <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="right_menu_url_2" class="form-control"
                                                    required="" placeholder="Đường dẫn 2 bên phải..."
                                                    value="{{ $config->right_menu_url_2 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Mô tả ngắn của minh bạch nguyên liệu <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <textarea name="description_in_main_ingredients" class="form-control" id="content0" rows="10" cols="80">{{ $config->description_in_main_ingredients }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Mô tả dài của minh bạch nguyên liệu <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <textarea name="long_description_in_main_ingredients" class="form-control" id="content1" rows="10"
                                                    cols="80">{{ $config->long_description_in_main_ingredients }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Đường dẫn xem thêm minh bạch nguyên liệu
                                            <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="see_more_url_in_main_ingredients"
                                                    class="form-control" required=""
                                                    placeholder="Đường dẫn xem thêm minh bạch nguyên liệu..."
                                                    value="{{ $config->see_more_url_in_main_ingredients }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Lưu ý ở footer <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="warning_in_footer" class="form-control"
                                                    required="" placeholder="Lưu ý ở footer..."
                                                    value="{{ $config->warning_in_footer }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề 1 ở trang chủ <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_in_home_page_1" class="form-control"
                                                    required="" placeholder="Tiêu đề 1 ở trang chủ..."
                                                    value="{{ $config->title_in_home_page_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Icon 1 ở trang chủ (30px x 30px)<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="file" name="icon_in_home_page_1"
                                                    class="file-input-preview icon_in_home_page_1" data-show-remove="true"
                                                    id="8hrftuzeck">

                                                <input type="hidden" name="icon_in_home_page_1" class="file_name"
                                                    value="{{ $config->icon_in_home_page_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề 1 ở Footer <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_1_in_footer" class="form-control"
                                                    required="" placeholder="Tiêu đề 1 ở Footer..."
                                                    value="{{ $config->title_1_in_footer }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề 2 ở Footer <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_2_in_footer" class="form-control"
                                                    required="" placeholder="Tiêu đề 2 ở Footer..."
                                                    value="{{ $config->title_2_in_footer }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề 3 ở Footer <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_3_in_footer" class="form-control"
                                                    required="" placeholder="Tiêu đề 3 ở Footer..."
                                                    value="{{ $config->title_3_in_footer }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề 4 ở Footer <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_4_in_footer" class="form-control"
                                                    required="" placeholder="Tiêu đề 4 ở Footer..."
                                                    value="{{ $config->title_4_in_footer }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Trao đổi miễn phí <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="free_exchange" class="form-control"
                                                    required="" placeholder="Trao đổi miễn phí..."
                                                    value="{{ $config->free_exchange }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề block 1 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_in_block_1" class="form-control"
                                                    required="" placeholder="Trao đổi miễn phí..."
                                                    value="{{ $config->title_in_block_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề con block 1 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="sub_title_1_in_block_1" class="form-control"
                                                    required="" placeholder="Tiêu đề con block 1..."
                                                    value="{{ $config->sub_title_1_in_block_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề con block 1 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="sub_title_2_in_block_1" class="form-control"
                                                    required="" placeholder="Tiêu đề con block 1..."
                                                    value="{{ $config->sub_title_2_in_block_1 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề block 2 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_in_block_2" class="form-control"
                                                    required="" placeholder="Trao đổi miễn phí..."
                                                    value="{{ $config->title_in_block_2 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề con block 2 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="sub_title_1_in_block_2" class="form-control"
                                                    required="" placeholder="Tiêu đề con block 2..."
                                                    value="{{ $config->sub_title_1_in_block_2 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề con block 2 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="sub_title_2_in_block_2" class="form-control"
                                                    required="" placeholder="Tiêu đề con block 2..."
                                                    value="{{ $config->sub_title_2_in_block_2 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề block 3 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="title_in_block_3" class="form-control"
                                                    required="" placeholder="Trao đổi miễn phí..."
                                                    value="{{ $config->title_in_block_3 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề con block 3 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="sub_title_1_in_block_3" class="form-control"
                                                    required="" placeholder="Tiêu đề con block 3..."
                                                    value="{{ $config->sub_title_1_in_block_3 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tiêu đề con block 3 <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="sub_title_2_in_block_3" class="form-control"
                                                    required="" placeholder="Tiêu đề con block 3..."
                                                    value="{{ $config->sub_title_2_in_block_3 }}">
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
        CKEDITOR.replace('content0', {
            extraPlugins: 'embed,uploadimage,image2',
            height: 300,
            width: "100%",

            // Upload images to a CKFinder connector (note that the response type is set to JSON).
            uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",

            // The following options are not necessary and are used here for presentation purposes only.
            // They configure the Styles drop-down list and widgets to use classes.

            // stylesSet: [{
            //         name: 'Narrow image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-narrow'
            //         }
            //     },
            //     {
            //         name: 'Wide image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-wide'
            //         }
            //     }
            // ],

            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                CKEDITOR.basePath + 'contents.css',
                'assets/css/widgetstyles.css'
            ],

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',


            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                'http://cdn.ckeditor.com/4.20.0/full-all/contents.css',
                'https://ckeditor.com/docs/ckeditor4/4.20.0/examples/assets/css/widgetstyles.css'
            ],
            // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',
        });

        CKEDITOR.replace('content1', {
            extraPlugins: 'embed,uploadimage,image2',
            height: 300,
            width: "100%",

            // Upload images to a CKFinder connector (note that the response type is set to JSON).
            uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",

            // The following options are not necessary and are used here for presentation purposes only.
            // They configure the Styles drop-down list and widgets to use classes.

            // stylesSet: [{
            //         name: 'Narrow image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-narrow'
            //         }
            //     },
            //     {
            //         name: 'Wide image',
            //         type: 'widget',
            //         widget: 'image',
            //         attributes: {
            //             'class': 'image-wide'
            //         }
            //     }
            // ],

            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                CKEDITOR.basePath + 'contents.css',
                'assets/css/widgetstyles.css'
            ],

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',


            // Load the default contents.css file plus customizations for this sample.
            contentsCss: [
                'http://cdn.ckeditor.com/4.20.0/full-all/contents.css',
                'https://ckeditor.com/docs/ckeditor4/4.20.0/examples/assets/css/widgetstyles.css'
            ],
            // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

            // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
            // resizer (because image size is controlled by widget styles or the image takes maximum
            // 100% of the editor width).
            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
            image2_disableResizer: true,
            removeButtons: 'PasteFromWord',
        });
    </script>
    @include('ckfinder::setup')

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

                $(".file-input-preview.icon_in_home_page_1").fileinput({
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
                        "/storage/uploads/{{ $config->icon_in_home_page_1 }}",
                    ],
                    initialPreviewConfig: [{
                        caption: "{{ $config->icon_in_home_page_1 }}",
                    }, ],
                    initialPreviewAsData: true,
                    overwriteInitial: false,
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
