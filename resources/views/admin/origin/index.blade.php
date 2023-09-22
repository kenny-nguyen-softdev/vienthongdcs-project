@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Xuất Xứ</h4>
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
                                        <th>Xuất xứ</th>
                                        @can('Chỉnh sửa xuất xứ')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa xuất xứ')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($origins as $key => $origin)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $origin->name }}</td>
                                            @can('Chỉnh sửa xuất xứ')
                                                <td><a href="{{ route('admin.origin.edit', [$origin->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa xuất xứ')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.origin.destroy', $origin->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Xuất xứ</th>
                                        @can('Chỉnh sửa xuất xứ')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa xuất xứ')
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
