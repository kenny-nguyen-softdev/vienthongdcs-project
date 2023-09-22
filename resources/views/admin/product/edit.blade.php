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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa sản phẩm có mã <span style="color: red;">#{{ $product->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.product.update', [$product->id]) }}"
                            method="POST" novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">Tên sản phẩm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-archive" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên sản phẩm.." value="{{ $product->name }}">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Barcode</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-barcode" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="barcode"
                                        placeholder="Barcode.." value="{{ $product->barcode }}">
                                </div>
                                @if (!empty($errors->first('barcode')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('barcode') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Model</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-barcode" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="model"
                                        placeholder="Barcode.." value="{{ $product->model }}">
                                </div>
                                @if (!empty($errors->first('model')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('model') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Ngày tạo sản phẩm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="date-format1" name="created_date"
                                        class="form-control date-time-1" placeholder="Ngày tạo sản phẩm.."
                                        data-dtp="dtp_qv6YX"
                                        value="{{ date('d-m-Y h:m:s', strtotime($product->created_date)) }}">
                                </div>
                                @if (!empty($errors->first('created_date')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('created_date') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Xuất xứ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-globe"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="origin">
                                        <option value="">Vui lòng chọn xuất xứ</option>
                                        @foreach ($origins as $origin)
                                            <option value="{{ $origin->id }}"
                                                {{ !empty($product->origin) && $product->origin->id == $origin->id ? 'selected' : '' }}>
                                                {{ $origin->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('origin')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('origin') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Cấu hình</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-cog"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="configuration">
                                        <option value="">Vui lòng chọn cấu hình</option>
                                        @foreach ($configurations as $configuration)
                                            <option value="{{ $configuration->id }}"
                                                {{ !empty($product->configuration) && $product->configuration->id == $configuration->id ? 'selected' : '' }}>
                                                {{ $configuration->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('configuration')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('configuration') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Tính năng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-bookmark-o"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="feature">
                                        <option value="">Vui lòng chọn tính năng</option>
                                        @foreach ($features as $feature)
                                            <option value="{{ $feature->id }}"
                                                {{ !empty($product->feature) && $product->feature->id == $feature->id ? 'selected' : '' }}>
                                                {{ $feature->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('feature')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('feature') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Thời hạn bảo hành</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="insurance"
                                        placeholder="Thời hạn bảo hành.." value="{{ $product->insurance }}">
                                </div>
                                @if (!empty($errors->first('insurance')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('insurance') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số lượng tồn kho</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-th" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="inventory_qty"
                                        value="{{ $product->inventory_qty }}" placeholder="Số lượng tồn kho..">
                                </div>
                                @if (!empty($errors->first('inventory_qty')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('inventory_qty') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Giá gốc</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="price"
                                        placeholder="Giá gốc.." value="{{ $product->price }}">
                                </div>
                                @if (!empty($errors->first('price')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('price') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Giá giảm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="sale_price"
                                        placeholder="Giá giảm.." value="{{ $product->sale_price }}">
                                </div>
                                @if (!empty($errors->first('sale_price')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('sale_price') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số sao</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="star"
                                        value="{{ $product->star }}" placeholder="Số sao..">
                                </div>
                                @if (!empty($errors->first('star')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('star') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Danh mục chính</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="parentCategory">
                                        <option value="">Vui lòng chọn danh mục chính</option>
                                        @foreach ($parentCategories as $parentCategory)
                                            <option value="{{ $parentCategory->id }}"
                                                {{ $product->secondSubCategory->firstSubCategory->parentCategory->id == $parentCategory->id ? 'selected' : '' }}>
                                                {{ $parentCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('parentCategory')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('parentCategory') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Danh mục phụ 1</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="firstSubCategory">
                                        <option value="">Vui lòng chọn danh mục phụ 1</option>
                                        @foreach ($product->secondSubCategory->firstSubCategory->parentCategory->firstSubCategories as $firstSubCategory)
                                            <option value="{{ $firstSubCategory->id }}"
                                                {{ $product->secondSubCategory->firstSubCategory->id == $firstSubCategory->id ? 'selected' : '' }}>
                                                {{ $firstSubCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('firstSubCategory')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('firstSubCategory') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Danh mục phụ 2</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-list"
                                                aria-hidden="true"></i></span>
                                    </div>
                                    <select class="form-control" name="secondSubCategory">
                                        <option value="">Vui lòng chọn danh mục phụ 2</option>
                                        @foreach ($product->secondSubCategory->firstSubCategory->parentCategory->secondSubCategories as $secondSubCategory)
                                            <option value="{{ $secondSubCategory->id }}"
                                                {{ $product->secondSubCategory->id == $secondSubCategory->id ? 'selected' : '' }}>
                                                {{ $secondSubCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('secondSubCategory')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('secondSubCategory') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Thương hiệu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-th-list" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <select class="form-control" name="brand">
                                        <option value="">Vui lòng chọn thương hiệu</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}"
                                                {{ !empty($product->brand) && $product->brand->id == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('brand')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('brand') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Ảnh nổi bật 1 (600px x
                                            600px)</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="featured_image"
                                            value="{{ $product->featured_image }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('featured_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('featured_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="product_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$product->featured_image") }}" target="_blank">
                                        <img id="upload-image"
                                            src="{{ asset("storage/uploads/$product->featured_image") }}" width="35%"
                                            height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Ảnh nổi bật 2 (600px x
                                            600px)</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="hover_featured_image"
                                            value="{{ $product->hover_featured_image }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('hover_featured_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('hover_featured_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="product_image">

                                <div id="image_show">
                                    <a href="{{ asset("storage/uploads/$product->hover_featured_image") }}"
                                        target="_blank">
                                        <img id="upload-image"
                                            src="{{ asset("storage/uploads/$product->hover_featured_image") }}"
                                            width="35%" height="300px">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Hình ảnh liên quan của sản phẩm (600px x 600px)</label>
                                <div class="input-group hdtuto control-group lst increment">
                                    <div class="list-input-hidden-upload">
                                        <input type="file" name="filenames[]" id="file_upload"
                                            class="myfrm form-control hidden">
                                    </div>
                                    <div class="input-group-btn">
                                        <button class="btn btn-success btn-add-image" type="button"><i
                                                class="fldemo glyphicon glyphicon-plus"></i>+Add image</button>
                                    </div>
                                </div>

                                <div class="list-images">
                                    @if (isset($product->images) && !empty($product->images))
                                        @foreach ($product->images as $key => $img)
                                            <div class="box-image">
                                                <input type="hidden" name="images_uploaded[]"
                                                    value="{{ $img->id }}" id="img-{{ $key }}">

                                                <img src="{{ asset('storage/uploads/' . $img->name) }}"
                                                    class="picture-box">

                                                <div class="wrap-btn-delete"><span data-id="img-{{ $key }}"
                                                        class="btn-delete-image">x</span></div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="content1">Mô tả</label>
                                <textarea name="description" class="form-control" id="content0" rows="10" cols="80">{{ $product->description }}</textarea>

                                @if (!empty($errors->first('description')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="content2">Mô tả chi tiết</label>
                                <textarea name="description_detail" class="form-control" id="content2" rows="10" cols="80"></textarea>

                                @if (!empty($errors->first('description_detail')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('description_detail') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="content3">Thông số kĩ thuật</label>
                                <textarea name="technical_statistics" class="form-control" id="content3" rows="10" cols="80"></textarea>

                                @if (!empty($errors->first('technical_statistics')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('technical_statistics') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Title Seo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="title_seo"
                                        placeholder="Title Seo.." value="{{ $product->title_seo }}">
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
                                        placeholder="Meta des.." value="{{ $product->meta_des }}">
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
                                        placeholder="Meta key.." value="{{ $product->meta_key }}">
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
                                            {{ $product->is_active == 1 ? 'checked' : '' }}>Kích hoạt
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="featured" class="form-check-input" value="1"
                                            {{ $product->featured == 1 ? 'checked' : '' }}>Nổi bật
                                    </label>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <h4 class="card-title">Danh sách sản phẩm khuyến mại</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá trị</th>
                                            <th>Số lượng</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->promotions as $promotion)
                                            <tr class="{{ $promotion->id }}-{{ $product->id }}">
                                                <input type="hidden" name="ids[]" value="{{ $promotion->id }}">
                                                <td>{{ $promotion->id }}</td>
                                                <td>{{ $promotion->name }}</td>
                                                <td>{{ number_format($promotion->value) }}</td>
                                                <td>1</td>
                                                <td>
                                                    <a class="btn btn-danger remove-product" href="javascript:void(0)"
                                                        onclick="deleteItemInBoughtList(this)">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <h4 class="card-title">Thêm Sản Phẩm Khuyến Mại Mới</h4>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Nhập tên sản phẩm khuyến mại</label>
                                <div class="input-group">
                                    <input type="hidden" class="promotion_quantity" value="1">
                                    <input type="hidden" class="adding-type" value="promotion-item">
                                    <input type="text" class="form-control search_promotion_name" id="val-username1"
                                        name="promotion_name" placeholder="Tên sản phẩm khuyến mại.." value="">
                                </div>
                                <div class="search-result">
                                </div>
                            </div>

                            <div class="table-responsive form-group mb-5">
                                <label for="example1">Danh sách sản phẩm khuyến mại</label>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá trị</th>
                                            <th>Số lượng</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-productlist">
                                        <tr class="no-data">
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}

                            <button type="submit" class="btn btn-primary mr-5">Cập nhật</button>

                            <a href="{{ route('admin.product.comments', $product->id) }}" target="_blank">
                                <button type="button" class="btn btn-warning mr-2">Đánh giá sản phẩm</button>
                            </a>

                            <a href="{{ route('admin.product.imageItems', $product->id) }}" target="_blank">
                                <button type="button" class="btn btn-secondary mr-2">Hình ảnh liên
                                    quan</button>
                            </a>

                            {{-- <a href="{{ route('site.product.show', [$product->slug]) }}" target="_blank">
                                <button type="button" class="btn btn-success" style="user-select: auto;">Preview
                                    <span class="btn-icon-right" style="user-select: auto;"><i class="fa fa-check"
                                            style="user-select: auto;"></i></span>
                                </button>
                            </a> --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <script>
        CKEDITOR.replace('content0', {
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

        CKEDITOR.replace('content2', {
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

        CKEDITOR.replace('content3', {
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

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-add-image").click(function() {
                $('#file_upload').trigger('click');
            });

            $('.list-input-hidden-upload').on('change', '#file_upload', function(event) {
                let today = new Date();
                let time = today.getTime();
                let image = event.target.files[0];
                let file_name = event.target.files[0].name;
                let box_image = $('<div class="box-image"></div>');
                box_image.append('<img src="' + URL.createObjectURL(image) + '" class="picture-box">');
                box_image.append('<div class="wrap-btn-delete"><span data-id=' + time +
                    ' class="btn-delete-image">x</span></div>');
                $(".list-images").append(box_image);

                $(this).removeAttr('id');
                $(this).attr('id', time);
                let input_type_file =
                    '<input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">';
                $('.list-input-hidden-upload').append(input_type_file);
            });

            $(".list-images").on('click', '.btn-delete-image', function() {
                let id = $(this).data('id');
                $('#' + id).remove();
                $(this).parents('.box-image').remove();
            });
        });
    </script>
@endsection
