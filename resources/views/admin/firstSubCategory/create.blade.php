@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới danh mục phụ 1</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.firstSubCategory.store') }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="text-label">Tên danh mục phụ 1</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Tên danh mục phụ 1.." value="">
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
                                    <span class="input-group-text"> <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <select class="form-control" name="parentCategory">
                                    <option value="">Vui lòng chọn danh mục chính</option>
                                    @foreach ($parentCategories as $parentCategory)
                                        <option value="{{ $parentCategory->id }}">
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
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="is_active" class="form-check-input" value="1"
                                        checked>Hiển thị
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-label">Title Seo</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="title_seo"
                                    placeholder="Title Seo.." value="">
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
                                    placeholder="Meta des.." value="">
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
                                    placeholder="Meta key.." value="">
                            </div>
                            @if (!empty($errors->first('meta_key')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('meta_key') }}</div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
