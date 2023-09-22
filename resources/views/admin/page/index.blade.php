@extends('admin.layout.main')

@section('content')
    <!-- Page content -->
    <div class="page-content">

        @include('admin.layout.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="page-header page-header-light shadow">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex">
                            <h4 class="page-title mb-0">Trang Thông Tin - <span class="fw-normal">Danh Sách Trang Thông
                                    Tin</span>
                            </h4>

                            <a href="#page_header"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="breadcrumb py-2">
                                <a href="{{ route('admin.company.index') }}" class="breadcrumb-item"><i
                                        class="ph-house"></i></a>
                                <a href="{{ route('admin.company.index') }}" class="breadcrumb-item">Home</a>/
                                <a href="{{ route('admin.page.index') }}" class="breadcrumb-item">Danh Sách
                                    Trang Thông Tin</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /page header -->

                @include('admin.layout.alert')

                <div class="content">

                    <!-- Highlighting rows and columns -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Danh Sách Tất Cả Trang Thông Tin</h5>
                        </div>

                        <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="datatable-scroll">
                                <table
                                    class="table datatable-responsive table-bordered table-hover datatable-highlight dataTable no-footer"
                                    id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting">Tiêu đề trang</th>
                                            <th class="sorting">Chức Năng</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pages as $key => $page)
                                            @if ($key % 2 == 0)
                                                <tr class="odd">
                                                    <td class="sorting_1">{{ $page->title }}</td>

                                                    <td class="sorting_1 text-center">
                                                        <div class="d-inline-flex">
                                                            <div class="dropdown">
                                                                <a href="#" class="text-body"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="ph-list"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <div class="text-center mb-2">
                                                                        <a
                                                                            href="{{ route('admin.page.edit', [$page->id]) }}">
                                                                            <button type="button"
                                                                                class="btn btn-flat-warning btn-labeled btn-labeled-start">
                                                                                <span
                                                                                    class="btn-labeled-icon bg-warning text-white">
                                                                                    <i class="ph-pencil"></i>
                                                                                </span>
                                                                                Edit
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                    <div class="text-center mb-2">
                                                                        <button type="button"
                                                                            class="btn btn-flat-danger btn-labeled btn-labeled-start destroy"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#modal_theme_danger"
                                                                            data-url="{{ route('admin.page.destroy', $page->id) }}">
                                                                            <span
                                                                                class="btn-labeled-icon bg-danger text-white">
                                                                                <i class="ph-trash"></i>
                                                                            </span>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="even">
                                                    <td class="sorting_1">{{ $page->title }}</td>

                                                    <td class="sorting_1 text-center">
                                                        <div class="d-inline-flex">
                                                            <div class="dropdown">
                                                                <a href="#" class="text-body"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="ph-list"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <div class="text-center mb-2">
                                                                        <a
                                                                            href="{{ route('admin.page.edit', [$page->id]) }}">
                                                                            <button type="button"
                                                                                class="btn btn-flat-warning btn-labeled btn-labeled-start">
                                                                                <span
                                                                                    class="btn-labeled-icon bg-warning text-white">
                                                                                    <i class="ph-pencil"></i>
                                                                                </span>
                                                                                Edit
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                    <div class="text-center mb-2">
                                                                        <button type="button"
                                                                            class="btn btn-flat-danger btn-labeled btn-labeled-start destroy"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#modal_theme_danger"
                                                                            data-url="{{ route('admin.page.destroy', $page->id) }}">
                                                                            <span
                                                                                class="btn-labeled-icon bg-danger text-white">
                                                                                <i class="ph-trash"></i>
                                                                            </span>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- /highlighting rows and columns -->

                </div>


                <!-- Footer -->
                @include('admin.layout.footer')
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
@endsection
