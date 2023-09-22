@extends('admin.layout.main')

@section('content')
    <style>
        .list-images {
            width: 50%;
            margin-top: 20px;
            display: inline-block;
        }

        .hidden {
            display: none;
        }

        .box-image {
            width: 100px;
            height: 108px;
            position: relative;
            float: left;
            margin-left: 5px;
        }

        .box-image img {
            width: 100px;
            height: 100px;
        }

        .wrap-btn-delete {
            position: absolute;
            top: -8px;
            right: 0;
            height: 2px;
            font-size: 20px;
            font-weight: bold;
            color: red;
        }

        .btn-delete-image {
            cursor: pointer;
        }

        /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        .table {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            width: 15%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } */
    </style>

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
                            <h4 class="page-title mb-0">Thành Phần Nguyên Liệu - <span class="fw-normal">Chỉnh Sửa Thành Phần
                                    Nguyên Liệu Có
                                    Mã
                                    #{{ $component->id }}</span>
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
                                <a href="{{ route('admin.component.index') }}" class="breadcrumb-item"><i
                                        class="ph-house"></i></a>
                                <a href="{{ route('admin.component.index') }}" class="breadcrumb-item">Danh Sách Thành Phần
                                    Nguyên Liệu</a>/
                                <a href="{{ route('admin.component.edit', [$component->id]) }}"
                                    class="breadcrumb-item">Chỉnh
                                    Sửa Thành Phần Nguyên Liệu Có
                                    Mã
                                    #{{ $component->id }}</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /page header -->

                @include('admin.layout.alert')

                <!-- Content area -->
                <div class="content">

                    <!-- Form validation -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Chỉnh Sửa Thành Phần Nguyên Liệu Có Mã #{{ $component->id }}</h5>
                        </div>

                        <form class="form-validate-jquery" action="{{ route('admin.component.update', [$component->id]) }}"
                            novalidate="novalidate" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body">

                                <div class="mb-4">
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Tên Thành Phần Nguyên Liệu <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="ph-text-aa"></i></span>
                                                <input type="text" name="name" class="form-control" required=""
                                                    placeholder="Tên Thành Phần Nguyên Liệu..."
                                                    value="{{ $component->name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Minh Bạch Nguyên Liệu <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <select class="form-control" name="mainIngredient" id="mainIngredient">
                                                    <option value="">Vui lòng chọn minh bạch nguyên liệu</option>
                                                    @foreach ($mainIngredients as $mainIngredient)
                                                        <option value="{{ $mainIngredient->id }}"
                                                            {{ $component->mainIngredient->id == $mainIngredient->id ? 'selected' : '' }}>
                                                            {{ $mainIngredient->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end">
                                <button type="reset" class="btn btn-light" id="reset">Làm mới</button>
                                <button type="submit" class="btn btn-primary ms-3">Cập nhật <i
                                        class="ph-paper-plane-tilt ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- /form validation -->

                </div>
                <!-- /content area -->

                @include('admin.layout.footer')

            </div>
            <!-- /inner content -->

            <div class="btn-to-top"><button class="btn btn-secondary btn-icon rounded-pill" type="button"><i
                        class="ph-arrow-up"></i></button></div>
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
@endsection
