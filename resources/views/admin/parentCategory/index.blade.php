@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Danh Mục Chính</h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên danh mục</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Icon</th>
                                        <th>Hiển Thị</th>
                                        <th>Hiển Thị Ở Trang Chủ</th>
                                        @can('Chỉnh sửa danh mục chính')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục chính')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parentCategories as $parentCategory)
                                        <tr>
                                            <td>{{ $parentCategory->id }}</td>
                                            <td>{{ $parentCategory->name }}</td>
                                            <td>{{ $parentCategory->sort_by }}</td>
                                            @php
                                                $icon_image = $parentCategory->icon_image;
                                            @endphp
                                            <td class="text-center" style="background-color: #004aad !important;">
                                                <a href="{{ asset("storage/uploads/$icon_image") }}" target="_blank"><img
                                                        src="{{ asset("storage/uploads/$icon_image") }}" width="70px"></a>
                                            </td>
                                            <td>
                                                {!! $parentCategory->is_active == 1
                                                    ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            <td>
                                                {!! $parentCategory->is_active_home == 1
                                                    ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Chỉnh sửa danh mục chính')
                                                <td><a href="{{ route('admin.parentCategory.edit', [$parentCategory->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa danh mục chính')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.parentCategory.destroy', $parentCategory->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên danh mục</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Icon</th>
                                        <th>Hiển Thị</th>
                                        <th>Hiển Thị Ở Trang Chủ</th>
                                        @can('Chỉnh sửa danh mục chính')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục chính')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
