@extends('admin.layout.main')

@section('head')
    <script src="{{ asset('template/admin/vendor/ckeditor/ckeditor.js') }}?v=<?= time() ?>"></script>
    <script type="text/javascript" src="{{ asset('template/admin/vendor/ckeditor/config.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/skins/moono-lisa/editor.css?t=M9E9') }}?v=<?= time() ?>">
    <script type="text/javascript" src="{{ asset('template/admin/vendor/ckeditor/styles.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/embed/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/autoembed/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/image2/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/embedbase/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/autolink/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>

    <script type="text/javascript" src="{{ asset('template/admin/vendor/ckeditor/lang/en.js?t=M9E9') }}?v=<?= time() ?>">
    </script>

    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/image2/plugin.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/scayt/dialogs/dialog.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/tableselection/styles/tableselection.css?t=M9E9') }}?v=<?= time() ?>">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/admin/vendor/ckeditor/plugins/dialog/styles/dialog.css?t=M9E9') }}?v=<?= time() ?>">
    <script type="text/javascript"
        src="{{ asset('template/admin/vendor/ckeditor/plugins/image2/lang/en.js?t=M9E9') }}?v=<?= time() ?>">
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới bài giới thiệu
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.introduction.store') }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="text-label">Tiêu đề</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="title"
                                    placeholder="Tiêu đề.." value="">
                            </div>
                            @if (!empty($errors->first('title')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('title') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <textarea name="content" class="form-control" id="content" rows="10" cols="80"></textarea>

                            @if (!empty($errors->first('content')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('content') }}</div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <script>
        CKEDITOR.replace('content', {
            extraPlugins: 'embed,uploadimage,image2',
            height: 300,

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
@endsection
