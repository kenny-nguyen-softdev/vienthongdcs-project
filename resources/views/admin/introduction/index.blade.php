@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Bài Giới Thiệu</h4>
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
                                        <th>Tiêu đề</th>
                                        <th>Ngày tạo</th>
                                        <th>Xem Preview</th>

                                        @can('Chỉnh sửa bài giối thiệu')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa bài giối thiệu')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($introductions as $introduction)
                                        <tr>
                                            <td>{{ $introduction->id }}</td>
                                            <td>{{ $introduction->title }}</td>
                                            <td>{{ $introduction->created_date }}</td>
                                            <td>
                                                <a href="{{ route('site.introduction.show', [$introduction->slug]) }}"
                                                    class="btn btn-success" target="_blank">Preview</a>

                                            </td>
                                            @can('Chỉnh sửa bài giối thiệu')
                                                <td><a href="{{ route('admin.introduction.edit', [$introduction->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa bài giối thiệu')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.introduction.destroy', $introduction->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tiêu đề</th>
                                        <th>Ngày tạo</th>
                                        <th>Xem Preview</th>

                                        @can('Chỉnh sửa bài giối thiệu')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa bài giối thiệu')
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
