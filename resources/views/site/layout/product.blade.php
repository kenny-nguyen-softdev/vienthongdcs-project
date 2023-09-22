<div class="item-inner">
    <div class="images-container">
        @if ($product->price != 0 && $product->sale_price != 0 && $product->price > $product->sale_price)
            @php
                $discount_percentage = 0;
                $discount_percentage = (($product->price - $product->sale_price) * 100) / $product->price;
            @endphp
            <div class="label-pro-sale">
                <span>-{{ ceil($discount_percentage) }}%</span>
            </div>
        @endif

        @php
            $end = Carbon::parse($product->created_date);

            $current = Carbon::now();
            $length = $current->diffInDays($end);
        @endphp

        @if ($length < 60)
            <div class="label-pro-new">
                <span>Mới</span>
            </div>
        @endif

        <a class="product-image" href="{{ route('site.product.show', [$product->slug]) }}">
            <div class="product-image">
                <img class="img-r" src="{{ asset("storage/uploads/$product->hover_featured_image") }}"
                    alt="{{ $product->name }}" />
                <img src="{{ asset("storage/uploads/$product->featured_image") }}" alt="{{ $product->name }}" />
            </div>
        </a>

        <div class="quick-view">
            <a class="qv-button-container" title="xem nhanh" data-toggle="tooltip"><button class="btn-quickview"
                    type="button" onclick="showQuickView('{{ $product->id }}')">
                    <i class="icon-magnifier"></i><span>Xem Nhanh</span>
                </button></a>
        </div>
    </div>
    <!-- image -->

    <div class="des-container">
        <h2 class="product-name">
            <a href="{{ route('site.product.show', [$product->slug]) }}"
                title="{{ $product->name }}">{{ App\Helpers\StrHelper::substrwords(ucwords(mb_strtolower($product->name, 'UTF-8')), 45) }}</a>
        </h2>
        <div class="ratings">
            <div class="rating-box">
                <div class="rating{{ $product->star }}">
                    rating
                </div>
            </div>
        </div>

        @if ($product->price == 0 && $product->sale_price == 0)
            <div class="price-box">
                <p class="special-price">
                    <span class="price">Liên
                        hệ</span>
                </p>
            </div>
        @else
            @if ($product->price > $product->sale_price)
                <div class="price-box">
                    <p class="special-price">
                        <span class="price">{{ number_format($product->sale_price) }}₫</span>
                    </p>
                    <p class="old-price">
                        <span class="price">{{ number_format($product->price) }}₫</span>
                    </p>
                </div>
            @else
                <div class="price-box">
                    <p class="special-price">
                        <span class="price">{{ number_format($product->sale_price) }}₫</span>
                    </p>
                </div>
            @endif
        @endif

        <div class="actions">

            @if ($product->inventory_qty > 0)
                @if ($product->price != 0 && $product->sale_price != 0)
                    <form class="button-form" action="{{ route('site.cart.create') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="qty_in_cart" value="1">
                        <button class="button btn-cart" type="submit" data-toggle="tooltip" title="Thêm giỏ hàng">
                            <span>Thêm giỏ hàng</span>
                        </button>
                    </form>
                @else
                    <form class="button-form" action="javascript:void(0)" method="post">
                        <button class="button btn-cart" type="button" data-toggle="tooltip" title="Liên Hệ"
                            style="background-color: #FFD700;">
                            <span>Liên Hệ</span>
                        </button>
                    </form>
                @endif
            @else
                <form class="button-form" action="javascript:void(0)" method="post">
                    <button class="button btn-cart" type="button" data-toggle="tooltip" title="Hết Hàng"
                        style="background-color: red;">
                        <span>Hết Hàng</span>
                    </button>
                </form>
            @endif
        </div>
        <!-- actions -->
    </div>
    <!-- des -->
</div>
