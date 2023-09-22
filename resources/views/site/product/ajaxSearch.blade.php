<ul class="ajax-result-list">
    @foreach ($products as $product)
        <li class="ajax-result-item col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="product-info">
                <a class="product-image" href="{{ route('site.product.show', [$product->slug]) }}">
                    <div class="product-image">
                        <img src="{{ asset("storage/uploads/$product->featured_image") }}" alt="{{ $product->name }}">
                    </div>
                </a>
                <div class="detail">
                    <h2 class="product-name">
                        <a href="{{ route('site.product.show', [$product->slug]) }}">{{ $product->name }}</a>
                    </h2>
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
                </div>
            </div>
        </li>
    @endforeach

</ul>
