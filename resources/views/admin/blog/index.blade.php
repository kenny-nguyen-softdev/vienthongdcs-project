@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Danh Mục Bài Viết</h4>
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
                                        <th>Tên danh mục bài viết</th>

                                        @can('Chỉnh sửa danh mục bài viết')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục bài viết')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->name }}</td>

                                            @can('Chỉnh sửa danh mục bài viết')
                                                <td><a href="{{ route('admin.blog.edit', [$blog->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa danh mục bài viết')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.blog.destroy', $blog->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên danh mục bài viết</th>

                                        @can('Chỉnh sửa danh mục bài viết')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa danh mục bài viết')
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
