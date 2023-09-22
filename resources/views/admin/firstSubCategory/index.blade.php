@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Danh Mục Phụ 1</h4>
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
                                        <th>Danh Mục Chính</th>
                                        <th>Hiển Thị</th>
                                        @can('Chỉnh sửa danh mục phụ 1')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục phụ 1')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($firstSubCategories as $firstSubCategory)
                                        <tr>
                                            <td>{{ $firstSubCategory->id }}</td>
                                            <td>{{ $firstSubCategory->name }}</td>

                                            <td>{{ $firstSubCategory->parentCategory->name }}</td>
                                            <td>
                                                {!! $firstSubCategory->is_active == 1
                                                    ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Chỉnh sửa danh mục phụ 1')
                                                <td><a href="{{ route('admin.firstSubCategory.edit', [$firstSubCategory->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa danh mục phụ 1')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.firstSubCategory.destroy', $firstSubCategory->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên danh mục</th>
                                        <th>Danh Mục Chính</th>
                                        <th>Hiển Thị</th>
                                        @can('Chỉnh sửa danh mục phụ 1')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục phụ 1')
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
