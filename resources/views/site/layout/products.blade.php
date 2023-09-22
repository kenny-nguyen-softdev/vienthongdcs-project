<div class="custom-category">
    {{-- <div class="link-compare">
        <a href="index6431.html?route=product/compare" id="compare-total">Product Compare (0)</a>
    </div> --}}
    <div class="toolbar toolbar-products">
        <div class="modes">
            <div class="btn-group">
                <button type="button" id="grid-view" class="btn">
                    <i class="fa fa-th"></i>
                </button>
                <button type="button" id="list-view" class="btn">
                    <i class="fa fa-th-list"></i>
                </button>
            </div>
        </div>
        <div class="toolbar-amount">
            <span>Đang hiện {{ count($productsOnePage) }}/{{ $total }} sản phẩm
                ({{ $page_number }}
                Trang)</span>
        </div>
        @include('site.layout.arrangementFilter')
    </div>
    <div class="custom-products quickview-add">
        @foreach ($productsOnePage as $product)
            <div class="product-layout product-list">
                <div class="item item1">
                    @include('site.layout.product')
                </div>
            </div>
        @endforeach
    </div>
    <div class="toolbar toolbar-products toolbar-bottom">
        <div class="toolbar-amount">
            <span>Đang hiện {{ count($productsOnePage) }}/{{ $total }} sản phẩm
                ({{ $page_number }}
                Trang)</span>
        </div>
        <div class="pages">
            <ul class="paginations">
                @if ($page > 1)
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}">|&lt;</a>
                    </li>
                @endif

                @php
                    $j = request()->input('page') ?? 1;
                    $start = $j < 5 ? 1 : ($j >= $page_number - 4 ? ($page_number - $j == 4 ? $j : ($page_number - $j == 3 ? $j - 1 : ($page_number - $j == 2 ? $j - 2 : ($page_number - $j == 1 ? $j - 3 : $j - 4)))) : $j);

                    $end = $j < $page_number ? ($j < 5 ? ($page_number < 5 ? $page_number : 5) : ($j < $page_number ? ($j >= $page_number - 4 ? $page_number : $j + 4) : $page_number)) : $page_number;
                @endphp
                @for ($i = $start; $i <= $end; $i++)
                    <li class="{{ (empty($page) && $i == 1) || $page == $i ? 'button_active' : '' }}">
                        <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($page < $page_number && $page_number > 1)
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}">&gt;|</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
