@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa parentCategorySlider có mã <span
                            style="color: red;">#{{ $parentCategorySlider->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon"
                        action="{{ route('admin.parentCategorySlider.update', $parentCategorySlider->id) }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-label">Tên slider của danh mục chính</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-sliders" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Tên slider của danh mục chính.." value="{{ $parentCategorySlider->name }}">
                            </div>
                            @if (!empty($errors->first('name')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Danh mục chính</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-list" aria-hidden="true"></i></span>
                                </div>
                                <select class="form-control" name="parentCategory">
                                    <option value="">Vui lòng chọn danh mục chính</option>
                                    @foreach ($parentCategories as $parentCategory)
                                        <option value="{{ $parentCategory->id }}"
                                            {{ $parentCategorySlider->parentCategory->id == $parentCategory->id ? 'selected' : '' }}>
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
                            <label class="text-label">Hình ảnh (880px x 500px)</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" type="button">slider</button>
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <input type="hidden" name="thumb" value="{{ $parentCategorySlider->thumb }}">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('thumb')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('thumb') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="parentCategorySlider_image">

                            <div id="image_show">
                                <a href="{{ asset("storage/uploads/$parentCategorySlider->thumb") }}" target="_blank">
                                    <img id="upload-image"
                                        src="{{ asset("storage/uploads/$parentCategorySlider->thumb") }}" width="35%"
                                        height="300px">
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-label">Đường dẫn</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-link" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="url"
                                    placeholder="Đường dẫn.." value="{{ $parentCategorySlider->url }}">
                            </div>
                            @if (!empty($errors->first('url')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('url') }}</div>
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
                                    placeholder="Thứ tự sắp xếp.." value="{{ $parentCategorySlider->sort_by }}">
                            </div>
                            @if (!empty($errors->first('sort_by')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('sort_by') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Tiêu đề</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-font" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="title"
                                    placeholder="Tiêu đề.." value="{{ $parentCategorySlider->title }}">
                            </div>
                            @if (!empty($errors->first('title')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('title') }}</div>
                            @endif
                        </div>


                        {{-- <div class="form-group">
                            <label class="text-label">Tiêu đề phụ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-font" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="sub_title"
                                    placeholder="Tiêu đề phụ.." value="{{ $parentCategorySlider->sub_title }}">
                            </div>
                            @if (!empty($errors->first('sub_title')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('sub_title') }}</div>
                            @endif
                        </div> --}}


                        <div class="form-group">
                            <label class="text-label">Mô tả</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-font" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="description"
                                    placeholder="Mô tả.." value="{{ $parentCategorySlider->description }}">
                            </div>
                            @if (!empty($errors->first('description')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('description') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-label">Tên button</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-font" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="button_name"
                                    placeholder="Tên button.." value="{{ $parentCategorySlider->button_name }}">
                            </div>
                            @if (!empty($errors->first('button_name')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('button_name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="active" class="form-check-input" value="1"
                                        {{ $parentCategorySlider->active = 1 ? 'checked' : '' }}>Kích
                                    hoạt
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
