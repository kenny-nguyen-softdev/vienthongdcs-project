@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới danh mục chính</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.parentCategory.store') }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="text-label">Tên danh mục chính</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-header" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="val-username1" name="name"
                                    placeholder="Danh mục chính.." value="">
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
                                    placeholder="Thứ tự sắp xếp.." value="">
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
                                    <input type="hidden" name="icon_image" value="">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                @if (!empty($errors->first('icon_image')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('icon_image') }}</div>
                                @endif
                            </div>
                            <input type="hidden" id="image_type" value="parent_category_image">

                            <div id="image_show" style="background-color: #004aad !important;">

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

                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="is_active" class="form-check-input" value="1"
                                        checked>Hiển thị
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="is_active_home" class="form-check-input" value="1"
                                        checked>Hiển thị ở trang chủ
                                </label>
                            </div>
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

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
