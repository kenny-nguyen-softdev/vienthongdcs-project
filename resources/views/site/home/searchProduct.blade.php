@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">
        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container ">
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang chủ</a></li>
                <li>
                    <a href="javascript:void(0)">Tìm kiếm</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-order">
                    <div id="content" class="col-sm-12">

                        <div class="link-compare">
                            <h1 id="compare-total">Tìm kiếm</h1>
                            <p>Danh sách {{ count($productsOnePage) }} sản phẩm được tìm thấy cho
                                <strong>{{ Request::input('q') }}</strong>
                            </p>
                        </div>
                        <div class="toolbar toolbar-products">
                            <div class="modes">
                                <div class="btn-group">
                                    <button type="button" id="grid-view" class="btn selected"><i
                                            class="fa fa-th"></i></button>
                                    <button type="button" id="list-view" class="btn"><i
                                            class="fa fa-th-list"></i></button>
                                </div>
                            </div>
                            <div class="toolbar-amount">
                                <span>Đang hiện {{ count($productsOnePage) }}/{{ $total }} sản phẩm
                                    ({{ $page_number }} trang)</span>
                            </div>
                            @include('site.layout.arrangementFilter')
                        </div>
                        <div class="custom-products quickview-add">

                            @foreach ($productsOnePage as $product)
                                <div
                                    class="product-layout product-grid module-style1 col-md-3 col-sm-6 col-xs-6 four-items">
                                    <div class="item item1">
                                        @include('site.layout.product')
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="toolbar toolbar-products toolbar-bottom">
                            <div class="toolbar-amount">
                                <span>Danh sách {{ count($productsOnePage) }}/{{ $total }} sản phẩm được tìm thấy cho
                                    <strong>{{ Request::input('q') }}</strong></span>
                            </div>
                            <div class="pages">
                                <ul class="pagination">
                                    @if ($page > 1)
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}"
                                                rel="next" aria-label="Next »">&lsaquo;</a>
                                        </li>
                                    @endif

                                    @php
                                        $j = request()->input('page') ?? 1;
                                        $start = $j < 5 ? 1 : ($j >= $page_number - 4 ? ($page_number - $j == 4 ? $j : ($page_number - $j == 3 ? $j - 1 : ($page_number - $j == 2 ? $j - 2 : ($page_number - $j == 1 ? $j - 3 : $j - 4)))) : $j);

                                        $end = $j < $page_number ? ($j < 5 ? ($page_number < 5 ? $page_number : 5) : ($j < $page_number ? ($j >= $page_number - 4 ? $page_number : $j + 4) : $page_number)) : $page_number;
                                    @endphp
                                    @for ($i = $start; $i <= $end; $i++)
                                        <li class="page-item {{ (empty($page) && $i == 1) || $page == $i ? 'active' : '' }}"
                                            aria-current="page">
                                            <a class="page-link"
                                                href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if ($page < $page_number && $page_number > 1)
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}"
                                                rel="next" aria-label="Next »">&rsaquo;</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('site.layout.footer')

    </body>
@endsection
