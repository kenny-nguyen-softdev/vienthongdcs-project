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
                            <h4 class="page-title mb-0">Minh Bạch Nguyên Liệu - <span class="fw-normal">Danh Sách Minh Bạch
                                    Nguyên Liệu</span>
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
                                <a href="{{ route('admin.mainIngredient.index') }}" class="breadcrumb-item">Danh Sách
                                    Minh Bạch Nguyên Liệu</a>
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
                            <h5 class="mb-0">Danh Sách Tất Cả Minh Bạch Nguyên Liệu</h5>
                        </div>

                        <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                            <div class="datatable-scroll">
                                <table
                                    class="table datatable-responsive table-bordered table-hover datatable-highlight dataTable no-footer"
                                    id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting">Tên nguyên liệu</th>
                                            <th class="sorting">Hình ảnh (226px × 228px)</th>
                                            <th class="sorting">Màu Sắc</th>
                                            <th class="sorting">Thứ tự sắp xếp</th>
                                            <th class="sorting">Kích hoạt</th>
                                            <th class="sorting">Chức Năng</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mainIngredients as $key => $mainIngredient)
                                            @if ($key % 2 == 0)
                                                <tr class="odd">
                                                    <td class="sorting_1">{{ $mainIngredient->name }}</td>
                                                    @php
                                                        $featured_image = $mainIngredient->featured_image;
                                                    @endphp
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$featured_image") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$featured_image") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1"><span
                                                            style="background-color: {{ $mainIngredient->color }}; padding: 5px">{{ $mainIngredient->color }}</span>
                                                    </td>
                                                    <td class="sorting_1">{{ $mainIngredient->sort_by }}</td>
                                                    <td class="sorting_1">{!! $mainIngredient->active == 1
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
                                                                            href="{{ route('admin.mainIngredient.edit', [$mainIngredient->id]) }}">
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
                                                                            data-url="{{ route('admin.mainIngredient.destroy', $mainIngredient->id) }}">
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
                                                    <td class="sorting_1">{{ $mainIngredient->name }}</td>
                                                    @php
                                                        $featured_image = $mainIngredient->featured_image;
                                                    @endphp
                                                    <td class="sorting_1 text-center">
                                                        <a href="{{ asset("storage/uploads/$featured_image") }}"
                                                            target="_blank"><img
                                                                src="{{ asset("storage/uploads/$featured_image") }}"
                                                                width="70px"></a>
                                                    </td>
                                                    <td class="sorting_1"><span
                                                            style="background-color: {{ $mainIngredient->color }}; padding: 5px">{{ $mainIngredient->color }}</span>
                                                    </td>
                                                    <td class="sorting_1">{{ $mainIngredient->sort_by }}</td>
                                                    <td class="sorting_1">{!! $mainIngredient->active == 1
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
                                                                            href="{{ route('admin.mainIngredient.edit', [$mainIngredient->id]) }}">
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
                                                                            data-url="{{ route('admin.mainIngredient.destroy', $mainIngredient->id) }}">
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
