<div class="main-row">
    <div class="container">
        <div class="row">
            <div class="main-col col-sm-12 col-md-12">
                <div
                    class="menu-recent product-tabs-container-slider module-nav2 quickview-add box-module module-style1 module1">
                    <div class="heading title-product-tabs group-title">
                        <ul class="tabs">
                            @php
                                $tmp = [];
                            @endphp
                            @foreach ($parentCategory->blogs as $blog)
                                @php
                                    if (in_array($blog->id, $tmp)) {
                                        continue;
                                    }
                                @endphp
                                <li rel="tab_{{ $blog->id }}">
                                    <span class="tab_{{ $blog->id }}">{{ $blog->name }}</span>
                                </li>
                                @php
                                    $tmp[] += $blog->id;
                                @endphp
                            @endforeach
                        </ul>
                        <a href="#">Xem tất cả <i
                                class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="owl-container">
                        <div class="tab_container">
                            @php
                                $tmp = [];
                            @endphp
                            @foreach ($parentCategory->blogs as $blog)
                                @php
                                    if (in_array($blog->id, $tmp)) {
                                        continue;
                                    }
                                @endphp
                                <div id="tab_{{ $blog->id }}" class="tab_content">
                                    <div class="row">
                                        @for ($i = 0; $i < 3; $i++)
                                            @if ($i === 0)
                                                <div class="col-md-4 first-post">
                                                    <div class="news-item">
                                                        <div class="news-img">
                                                            @php
                                                                $featured_image = $blog->posts[$i]->featured_image;
                                                            @endphp
                                                            <a
                                                                href="{{ route('site.post.show', [$blog->slug, $blog->posts[$i]->slug]) }}">
                                                                <img src="{{ asset("storage/uploads/$featured_image") }}"
                                                                    alt="{{ $featured_image }}" loading="lazy" />
                                                            </a>
                                                        </div>

                                                        <div class="news-meta">
                                                            <a href="{{ route('site.post.show', [$blog->slug, $blog->posts[$i]->slug]) }}"
                                                                class="articles-name"
                                                                title="{{ $blog->posts[$i]->title }}">
                                                                {{ App\Helpers\StrHelper::substrwords($blog->posts[$i]->title, 55) }}
                                                            </a>
                                                            <div class="news-excerpt">
                                                                <p>
                                                                    {!! strlen($blog->posts[$i]->description) > 0
                                                                        ? App\Helpers\StrHelper::substrwords(strip_tags($blog->posts[$i]->description), 250)
                                                                        : '' !!}
                                                                </p>
                                                            </div>
                                                            <a class="read-more"
                                                                href="{{ route('site.post.show', [$blog->slug, $blog->posts[$i]->slug]) }}"
                                                                style="margin-top: 10px">Xem thêm...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($i === 1)
                                                <div class="col-md-4 second-post">
                                                    @for ($j = $i; $j <= $i + 2; $j++)
                                                        <div class="articles-inner">
                                                            <div class="articles-image">
                                                                @php
                                                                    $featured_image = $blog->posts[$j]->featured_image;
                                                                @endphp
                                                                <img src="{{ asset("storage/uploads/$featured_image") }}"
                                                                    alt="{{ $featured_image }}" loading="lazy" />
                                                            </div>

                                                            <div class="aritcles-content">
                                                                <a href="huong-dan-mua-dien-thoai-ban-ip/index.html"
                                                                    class="articles-name"
                                                                    title="{{ $blog->posts[$j]->title }}">
                                                                    {{ App\Helpers\StrHelper::substrwords($blog->posts[$j]->title, 55) }}
                                                                </a>
                                                                <div class="news-excerpt">
                                                                    <p>
                                                                        {!! strlen($blog->posts[$j]->description) > 0
                                                                            ? App\Helpers\StrHelper::substrwords(strip_tags($blog->posts[$j]->description), 80)
                                                                            : '' !!}
                                                                    </p>

                                                                    <a class="read-more" href="#">Xem
                                                                        thêm...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            @endif

                                            @if ($i === 2)
                                                <div class="col-md-4 second-post">
                                                    @for ($j = $i + 2; $j <= $i + 4; $j++)
                                                        <div class="articles-inner">
                                                            <div class="articles-image">
                                                                @php
                                                                    $featured_image = $blog->posts[$j]->featured_image;
                                                                @endphp
                                                                <img src="{{ asset("storage/uploads/$featured_image") }}"
                                                                    alt="{{ $featured_image }}" loading="lazy" />
                                                            </div>

                                                            <div class="aritcles-content">
                                                                <a href="huong-dan-mua-dien-thoai-ban-ip/index.html"
                                                                    class="articles-name"
                                                                    title="{{ $blog->posts[$j]->title }}">
                                                                    {{ App\Helpers\StrHelper::substrwords($blog->posts[$j]->title, 55) }}
                                                                </a>
                                                                <div class="news-excerpt">
                                                                    <p>
                                                                        {!! strlen($blog->posts[$j]->description) > 0
                                                                            ? App\Helpers\StrHelper::substrwords(strip_tags($blog->posts[$j]->description), 80)
                                                                            : '' !!}
                                                                    </p>

                                                                    <a class="read-more" href="#">Xem
                                                                        thêm...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                @php
                                    $tmp[] += $blog->id;
                                @endphp
                            @endforeach
                        </div>
                    </div>
                    <!-- .tab_container -->
                </div>
            </div>
        </div>
    </div>
</div>
