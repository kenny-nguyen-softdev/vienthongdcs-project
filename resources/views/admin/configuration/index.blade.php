@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả cấu hình</h4>
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
                                        <th>cấu hình</th>
                                        @can('Chỉnh sửa cấu hình')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa cấu hình')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($configurations as $key => $configuration)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $configuration->name }}</td>
                                            @can('Chỉnh sửa cấu hình')
                                                <td><a href="{{ route('admin.configuration.edit', [$configuration->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa cấu hình')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.configuration.destroy', $configuration->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>cấu hình</th>
                                        @can('Chỉnh sửa cấu hình')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa cấu hình')
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
