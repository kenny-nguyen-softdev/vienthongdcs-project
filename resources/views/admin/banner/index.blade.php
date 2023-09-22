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
                            <h4 class="page-title mb-0">Banner - <span class="fw-normal">Danh Sách Banner</span>
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
                                <a href="{{ route('admin.banner.index') }}" class="breadcrumb-item">Danh Sách
                                    Banner</a>
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
                            <h5 class="mb-0">Danh Sách Tất Cả Banner</h5>
                        </div>

                        <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="datatable-scroll">
                                <table class="table datatable-responsive table-bordered table-hover dataTable no-footer"
                                    id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting">Tên banner</th>
                                            <th class="sorting">Hình ảnh banner dài</th>
                                            <th class="sorting">Hình ảnh banner 1 ngắn</th>
                                            <th class="sorting">Hình ảnh banner 2 ngắn</th>
                                            <th class="sorting">Hình ảnh banner dài mobile</th>
                                            <th class="sorting">Hình ảnh banner 1 ngắn mobile</th>
                                            <th class="sorting">Hình ảnh banner 2 ngắn mobile</th>
                                            <th class="sorting">Đường dẫn của banner dài</th>
                                            <th class="sorting">Đường dẫn của banner dài mobile</th>
                                            <th class="sorting">Đường dẫn của banner 1 ngắn </th>
                                            <th class="sorting">Đường dẫn của banner 1 ngắn mobile</th>
                                            <th class="sorting">Đường dẫn của banner 2 ngắn</th>
                                            <th class="sorting">Đường dẫn của banner 2 ngắn mobile</th>
                                            <th class="sorting">Kích hoạt banner dài</th>
                                            <th class="sorting">Kích hoạt banner ngắn</th>
                                            <th class="sorting">Kích hoạt banner dài mobile</th>
                                            <th class="sorting">Kích hoạt banner ngắn mobile</th>
                                            <th class="sorting">Chức Năng</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $key => $banner)
                                            @if ($key % 2 == 0)
                                                <tr class="odd">
                                                    <td class="sorting_1">{{ $banner->name }}</td>
                                                    @php
                                                        $long_image = $banner->long_image;
                                                        $short_image_1 = $banner->short_image_1;
                                                        $short_image_2 = $banner->short_image_2;
                                                        $long_image_mobile = $banner->long_image_mobile;
                                                        $short_image_1_mobile = $banner->short_image_1_mobile;
                                                        $short_image_2_mobile = $banner->short_image_2_mobile;
                                                    @endphp
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$long_image") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$long_image") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_1") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_1") }}"
                                                                width="70px"></a>
                                                    </td>

                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_2") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_2") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$long_image_mobile") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$long_image_mobile") }}"
                                                                width="70px"></a>
                                                    </td>

                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_1_mobile") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_1_mobile") }}"
                                                                width="70px"></a>
                                                    </td>

                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_2_mobile") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_2_mobile") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1">{{ $banner->long_image_url }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_1_url }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_2_url }}</td>
                                                    <td class="sorting_1">{{ $banner->long_image_url_mobile }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_1_url_mobile }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_2_url_mobile }}</td>
                                                    <td class="sorting_1">{!! $banner->active_long_banner == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>
                                                    <td class="sorting_1">{!! $banner->active_short_banner == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>
                                                    <td class="sorting_1">{!! $banner->active_long_banner_mobile == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>

                                                    <td class="sorting_1">{!! $banner->active_short_banner_mobile == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>
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
                                                                            href="{{ route('admin.banner.edit', [$banner->id]) }}">
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

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="even">
                                                    <td class="sorting_1">{{ $banner->name }}</td>
                                                    @php
                                                        $long_image = $banner->long_image;
                                                        $short_image_1 = $banner->short_image_1;
                                                        $short_image_2 = $banner->short_image_2;
                                                        $long_image_mobile = $banner->long_image_mobile;
                                                        $short_image_1_mobile = $banner->short_image_1_mobile;
                                                        $short_image_2_mobile = $banner->short_image_2_mobile;
                                                    @endphp
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$long_image") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$long_image") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_1") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_1") }}"
                                                                width="70px"></a>
                                                    </td>

                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_2") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_2") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$long_image_mobile") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$long_image_mobile") }}"
                                                                width="70px"></a>
                                                    </td>

                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_1_mobile") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_1_mobile") }}"
                                                                width="70px"></a>
                                                    </td>

                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$short_image_2_mobile") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$short_image_2_mobile") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1">{{ $banner->long_image_url }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_1_url }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_2_url }}</td>
                                                    <td class="sorting_1">{{ $banner->long_image_url_mobile }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_1_url_mobile }}</td>
                                                    <td class="sorting_1">{{ $banner->short_image_2_url_mobile }}</td>
                                                    <td class="sorting_1">{!! $banner->active_long_banner == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>
                                                    <td class="sorting_1">{!! $banner->active_short_banner == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>
                                                    <td class="sorting_1">{!! $banner->active_long_banner_mobile == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>

                                                    <td class="sorting_1">{!! $banner->active_short_banner_mobile == 1
                                                        ? '<i class="ph-check-square text-bg-success"></i>'
                                                        : '<i class="ph-prohibit text-bg-danger"></i>' !!}</td>
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
                                                                            href="{{ route('admin.banner.edit', [$banner->id]) }}">
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
