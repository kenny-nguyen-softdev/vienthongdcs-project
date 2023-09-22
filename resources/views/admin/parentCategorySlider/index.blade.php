@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Slider Của Danh Mục Chính</h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên slider của danh mục chính</th>
                                        <th>Danh mục chính</th>
                                        <th>Đường dẫn</th>
                                        <th>Hình ảnh</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Tiêu đề</th>
                                        {{-- <th>Tiêu đề phụ</th> --}}
                                        <th>Mô tả</th>
                                        <th>Tên button</th>
                                        <th>Kích hoạt</th>
                                        @can('Chỉnh sửa slider của danh mục chính')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa slider của danh mục chính')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parentCategorySliders as $key => $parentCategorySlider)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $parentCategorySlider->name }}</td>
                                            <td>{{ $parentCategorySlider->parentCategory->name }}</td>
                                            <td>{{ $parentCategorySlider->url }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$parentCategorySlider->thumb") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$parentCategorySlider->thumb") }}"
                                                        width="80px"></a>
                                            </td>
                                            <td>{{ $parentCategorySlider->sort_by }}</td>
                                            <td>{{ $parentCategorySlider->title }}</td>
                                            {{-- <td>{{ $parentCategorySlider->sub_title }}</td> --}}
                                            <td>{{ $parentCategorySlider->description }}</td>
                                            <td>{{ $parentCategorySlider->button_name }}</td>
                                            <td>
                                                {!! $parentCategorySlider->active == 1
                                                    ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Chỉnh sửa slider của danh mục chính')
                                                <td><a href="{{ route('admin.parentCategorySlider.edit', [$parentCategorySlider->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa slider của danh mục chính')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.parentCategorySlider.destroy', $parentCategorySlider->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên slider của danh mục chính</th>
                                        <th>Danh mục chính</th>
                                        <th>Đường dẫn</th>
                                        <th>Hình ảnh</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Tiêu đề</th>
                                        {{-- <th>Tiêu đề phụ</th> --}}
                                        <th>Mô tả</th>
                                        <th>Tên button</th>
                                        <th>Kích hoạt</th>

                                        @can('Chỉnh sửa slider của danh mục chính')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa slider của danh mục chính')
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
