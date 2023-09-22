@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Bài Viết Trên Header</h4>
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
                                        <th>Tên bài viết</th>
                                        <th>Ngày tạo</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Icon</th>
                                        <th>Kích hoạt</th>
                                        <th>Xem Preview</th>

                                        @can('Chỉnh sửa bài viết trên header')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa bài viết trên header')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($headerPosts as $headerPost)
                                        <tr>
                                            <td>{{ $headerPost->id }}</td>
                                            <td>{{ $headerPost->name }}</td>
                                            <td>{{ $headerPost->created_date }}</td>
                                            <td>{{ $headerPost->sort_by }}</td>
                                            <td>{!! $headerPost->icon_code !!}</td>
                                            <td>
                                                {!! $headerPost->is_active == 1
                                                    ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>'
                                                    : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            <td>
                                                <a href="{{ route('site.headerPost.show', [$headerPost->slug]) }}"
                                                    class="btn btn-success" target="_blank">Preview</a>

                                            </td>
                                            @can('Chỉnh sửa bài viết trên header')
                                                <td><a href="{{ route('admin.headerPost.edit', [$headerPost->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa bài viết trên header')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.headerPost.destroy', $headerPost->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên bài viết</th>
                                        <th>Ngày tạo</th>
                                        <th>Thứ tự sắp xếp</th>
                                        <th>Icon</th>
                                        <th>Kích hoạt</th>
                                        <th>Xem Preview</th>

                                        @can('Chỉnh sửa bài viết trên header')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa bài viết trên header')
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
