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
                            <h4 class="page-title mb-0">Bài Viết Của Chúng Tôi - <span class="fw-normal">Danh Sách Bài Viết
                                    Của Chúng Tôi</span>
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
                                <a href="{{ route('admin.about.index') }}" class="breadcrumb-item">Danh Sách Bài Viết Của
                                    Chúng Tôi</a>
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
                            <h5 class="mb-0">Danh Sách Tất Cả Bài Viết Của Chúng Tôi</h5>
                        </div>

                        <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="datatable-scroll">
                                <table
                                    class="table datatable-responsive table-bordered table-hover datatable-highlight dataTable no-footer"
                                    id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting">Tiêu đề</th>
                                            <th class="sorting">Hình ảnh nổi bật</th>
                                            <th class="sorting">Banner 1 (1380px x 919px)</th>
                                            <th class="sorting">Banner 2 (70px x 106px)</th>
                                            <th class="sorting">Banner 3 (257px x 303px)</th>
                                            <th class="sorting">Banner 4 (550px x 400px)</th>
                                            <th class="sorting">Banner 5 (995px x 343px)</th>
                                            <th class="sorting">Banner 6 (550px x 283px)</th>
                                            <th class="sorting">Banner 7 (503px x 689px)</th>
                                            <th class="sorting">Nổi bật</th>
                                            <th class="sorting">Chức Năng</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abouts as $key => $about)
                                            @if ($key % 2 == 0)
                                                <tr class="odd">
                                                    <td class="sorting_1">{{ $about->title }}</td>
                                                    @php
                                                        $featured_image = $about->featured_image;
                                                        $banner_1 = $about->banner_1;
                                                        $banner_2 = $about->banner_2;
                                                        $banner_3 = $about->banner_3;
                                                        $banner_4 = $about->banner_4;
                                                        $banner_5 = $about->banner_5;
                                                        $banner_6 = $about->banner_6;
                                                        $banner_7 = $about->banner_7;
                                                    @endphp
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$featured_image") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$featured_image") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_1") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_1") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_2") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_2") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_3") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_3") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_4") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_4") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_5") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_5") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_6") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_6") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_7") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_7") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1">{!! $about->featured == 1
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
                                                                        <a href="{{ route('site.about.show', [$about->slug]) }}"
                                                                            target="_blank" rel="noopener noreferrer">
                                                                            <button type="button"
                                                                                class="btn btn-flat-success btn-labeled btn-labeled-start">
                                                                                <span
                                                                                    class="btn-labeled-icon bg-success text-white">
                                                                                    <i class="ph-eye"></i>
                                                                                </span>
                                                                                Preview
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                    <div class="text-center mb-2">
                                                                        <a
                                                                            href="{{ route('admin.about.edit', [$about->id]) }}">
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
                                                                            data-url="{{ route('admin.about.destroy', $about->id) }}">
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
                                                    <td class="sorting_1">{{ $about->title }}</td>
                                                    @php
                                                        $featured_image = $about->featured_image;
                                                        $banner_1 = $about->banner_1;
                                                        $banner_2 = $about->banner_2;
                                                        $banner_3 = $about->banner_3;
                                                        $banner_4 = $about->banner_4;
                                                        $banner_5 = $about->banner_5;
                                                        $banner_6 = $about->banner_6;
                                                        $banner_7 = $about->banner_7;
                                                    @endphp
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$featured_image") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$featured_image") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_1") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_1") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_2") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_2") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_3") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_3") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_4") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_4") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_5") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_5") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_6") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_6") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$banner_7") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$banner_7") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1">{!! $about->featured == 1
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
                                                                        <a href="{{ route('site.about.show', [$about->slug]) }}"
                                                                            target="_blank" rel="noopener noreferrer">
                                                                            <button type="button"
                                                                                class="btn btn-flat-success btn-labeled btn-labeled-start">
                                                                                <span
                                                                                    class="btn-labeled-icon bg-success text-white">
                                                                                    <i class="ph-eye"></i>
                                                                                </span>
                                                                                Preview
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                    <div class="text-center mb-2">
                                                                        <a
                                                                            href="{{ route('admin.about.edit', [$about->id]) }}">
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
                                                                            data-url="{{ route('admin.about.destroy', $about->id) }}">
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
