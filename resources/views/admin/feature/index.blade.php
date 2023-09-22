@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả tính năng</h4>
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
                                        <th>Tên tính năng</th>
                                        @can('Chỉnh sửa tính năng')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa tính năng')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($features as $key => $feature)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $feature->name }}</td>
                                            @can('Chỉnh sửa tính năng')
                                                <td><a href="{{ route('admin.feature.edit', [$feature->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa tính năng')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.feature.destroy', $feature->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên tính năng</th>
                                        @can('Chỉnh sửa tính năng')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa tính năng')
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
