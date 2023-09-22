@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Hỗ Trợ Tư Vấn Miễn Phí</h4>
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
                                        <th>Họ tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Tên sản phẩm cần hỗ trợ</th>
                                        <th>Địa chỉ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultants as $consultant)
                                        <tr>
                                            <td>{{ $consultant->id }}</td>
                                            <td>{{ $consultant->fullname }}</td>
                                            <td>{{ $consultant->mobile }}</td>
                                            <td>{{ $consultant->product_name }}</td>
                                            <td>{{ $consultant->address }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Họ tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Tên sản phẩm cần hỗ trợ</th>
                                        <th>Địa chỉ</th>
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
