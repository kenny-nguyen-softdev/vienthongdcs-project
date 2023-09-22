@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa danh mục chính có mã <span
                            style="color: red;">#{{ $parentCategory->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon"
                        action="{{ route('admin.parentCategory.update', [$parentCategory->id]) }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-label">Tên danh mục chính</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Danh mục chính.." value="{{ $parentCategory->name }}">
                            </div>
                            @if (!empty($errors->first('name')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Thứ tự sắp xếp</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-sort-numeric-asc"
                                            aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="sort_by"
                                    placeholder="Thứ tự sắp xếp.." value="{{ $parentCategory->sort_by }}">
                            </div>
                            @if (!empty($errors->first('sort_by')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('sort_by') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button">Hình icon</button>
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <input type="hidden" name="icon_image" value="{{ $parentCategory->icon_image }}">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('icon_image')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('icon_image') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="parent_category_image">

                            <div id="image_show" style="background-color: #004aad !important;">
                                @php
                                    $icon_image = $parentCategory->icon_image;
                                @endphp
                                <a href="{{ asset("storage/uploads/$icon_image") }}" target="_blank">
                                    <img id="upload-image" src="{{ asset("storage/uploads/$icon_image") }}" width="35%"
                                        height="300px">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <h4 class="card-title">Danh sách các tiêu chí đã chọn</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Xuất xứ</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-list">
                                    @foreach ($parentCategory->origins as $origin)
                                        <tr class="no-data">
                                            <input type="hidden" name="origin_ids[]" value="{{ $origin->id }}">
                                            <td>{{ $origin->id }}</td>
                                            <td>{{ $origin->name }}</td>
                                            <td><a class="btn btn-danger remove-origin" href="javascript:void(0)"
                                                    onclick="deleteItemInBoughtList(this)"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Cấu hình</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-list">
                                    @foreach ($parentCategory->configurations as $configuration)
                                        <tr class="no-data">
                                            <input type="hidden" name="configuration_ids[]"
                                                value="{{ $configuration->id }}">
                                            <td>{{ $configuration->id }}</td>
                                            <td>{{ $configuration->name }}</td>
                                            <td><a class="btn btn-danger remove-configuration" href="javascript:void(0)"
                                                    onclick="deleteItemInBoughtList(this)"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tính năng</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-list">
                                    @foreach ($parentCategory->features as $feature)
                                        <tr class="no-data">
                                            <input type="hidden" name="feature_ids[]" value="{{ $feature->id }}">
                                            <td>{{ $feature->id }}</td>
                                            <td>{{ $feature->name }}</td>
                                            <td><a class="btn btn-danger remove-feature" href="javascript:void(0)"
                                                    onclick="deleteItemInBoughtList(this)"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group">
                            <h4 class="card-title">Thêm Các Tiêu Chí Cho Bộ Lọc</h4>
                        </div>

                        <div class="form-group">
                            <label class="text-label">Xuất xứ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-globe" aria-hidden="true"></i></span>
                                </div>
                                <select class="form-control" name="origin" id="origin">
                                    <option value="">Vui lòng chọn xuất xứ</option>
                                    @foreach ($origins as $origin)
                                        <option value="{{ $origin->id }}">
                                            {{ $origin->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if (!empty($errors->first('origin')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('origin') }}</div>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm"
                                id="origin_table">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Xuất xứ</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-list">
                                    <tr class="no-data">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group">
                            <label class="text-label">Cấu hình</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-text-height"
                                            aria-hidden="true"></i></span>
                                </div>
                                <select class="form-control" name="configuration" id="configuration">
                                    <option value="">Vui lòng chọn cấu hình</option>
                                    @foreach ($configurations as $configuration)
                                        <option value="{{ $configuration->id }}">
                                            {{ $configuration->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if (!empty($errors->first('configuration')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('configuration') }}</div>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm"
                                id="configuration_table">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Cấu hình</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-list">
                                    <tr class="no-data">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group">
                            <label class="text-label">Tính năng</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-bookmark-o"
                                            aria-hidden="true"></i></span>
                                </div>
                                <select class="form-control" name="feature" id="feature">
                                    <option value="">Vui lòng chọn tính năng</option>
                                    @foreach ($features as $feature)
                                        <option value="{{ $feature->id }}">
                                            {{ $feature->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if (!empty($errors->first('feature')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('feature') }}</div>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm"
                                id="feature_table">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tính năng</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-list">
                                    <tr class="no-data">
                                        <td>No data</td>
                                        <td>No data</td>
                                        <td>No data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group">
                            <label class="text-label">Title Seo</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="title_seo"
                                    placeholder="Title Seo.." value="{{ $parentCategory->title_seo }}">
                            </div>
                            @if (!empty($errors->first('title_seo')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('title_seo') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Meta des</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="meta_des"
                                    placeholder="Meta des.." value="{{ $parentCategory->meta_des }}">
                            </div>
                            @if (!empty($errors->first('meta_des')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('meta_des') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Meta key</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="meta_key"
                                    placeholder="Meta key.." value="{{ $parentCategory->meta_key }}">
                            </div>
                            @if (!empty($errors->first('meta_key')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('meta_key') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="is_active" class="form-check-input" value="1"
                                        {{ $parentCategory->is_active == 1 ? 'checked' : '' }}>Hiển thị
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="is_active_home" class="form-check-input" value="1"
                                        {{ $parentCategory->is_active_home == 1 ? 'checked' : '' }}>Hiển thị ở trang chủ
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <script>
        CKEDITOR.replace('content0', {
            extraPlugins: 'embed,image2',
            height: 400,
            // Upload images to a CKFinder connector (note that the response type is set to JSON).
            uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            // Configure your file manager integration. This example uses CKFinder 3 for PHP.
            // filebrowserBrowseUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/ckfinder.html',
            // filebrowserImageBrowseUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
            filebrowserUploadUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'https://ckeditor.com/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',

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
