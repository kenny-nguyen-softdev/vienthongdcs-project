@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Bài Viết</h4>
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
                                        <th>Hình ảnh nổi bật</th>
                                        <th>Danh mục bài viết</th>
                                        <th>Danh mục chính</th>
                                        <th>Xem Preview</th>

                                        @can('Chỉnh sửa bài viết')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa bài viết')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->created_date }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$post->featured_image") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$post->featured_image") }}"
                                                        width="80px"></a>
                                            </td>
                                            <td>{{ $post->blog->name }}</td>
                                            <td>{{ $post->parentCategory->name }}</td>
                                            <td>
                                                <a href="{{ route('site.post.show', [$post->blog->slug, $post->slug]) }}"
                                                    class="btn btn-success" target="_blank">Preview</a>

                                            </td>
                                            @can('Chỉnh sửa bài viết')
                                                <td><a href="{{ route('admin.post.edit', [$post->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa bài viết')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.post.destroy', $post->id) }}">Xóa</button>
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
                                        <th>Hình ảnh nổi bật</th>
                                        <th>Danh mục bài viết</th>
                                        <th>Danh mục chính</th>
                                        <th>Xem Preview</th>

                                        @can('Chỉnh sửa bài viết')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa bài viết')
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
