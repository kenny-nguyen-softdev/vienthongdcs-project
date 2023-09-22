@extends('site.layout.main')

@section('content')

    <body class="blog-blog home1">
        <link
            href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/ocblog.css') }}?v=<?= time() ?>"
            rel="stylesheet" />

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang Chủ</a></li>
                <li><a href="{{ route('site.blog.index', [$blog->slug]) }}">{{ $blog->name }}</a></li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div id="ajax-login-block"></div>

                    <div class="news">
                        <div class="article-page box-module col-md-8 col-sm-12">
                            <div class="group-title group-title-news">
                                <a title="{{ $blog->name }}" href="{{ route('site.blog.index', [$blog->slug]) }}"><i
                                        class="fa fa-newspaper-o" style="margin-right: 5px;" aria-hidden="true"></i>
                                    {{ $blog->name }}</a>
                            </div>

                            @foreach ($posts as $post)
                                <div class="article-layout article-list col-md-4 col-sm-6">
                                    <div class="article-item odd">
                                        <div class="article-item-inner row">
                                            <div class="col-sm-12">
                                                <a href="{{ route('site.post.show', [$blog->slug, $post->slug]) }}">
                                                    <img class="lazy"
                                                        src="{{ asset("storage/uploads/$post->featured_image") }}"
                                                        alt="{{ $post->title }}" />
                                                </a>
                                            </div>
                                            <div class="article-intro col-sm-12">
                                                <div class="article-name">
                                                    <a
                                                        href="{{ route('site.post.show', [$blog->slug, $post->slug]) }}">{{ App\Helpers\StrHelper::substrwords($post->title, 120) }}</a>
                                                </div>
                                                <p class="articledate">
                                                    <i class="fa fa-clock-o"
                                                        aria-hidden="true"></i>{{ $post->created_date }}
                                                    / Tác Giả: {{ $post->author }}
                                                </p>
                                                <div class="intro-content">
                                                    <p>
                                                        {!! strlen($post->description) > 0
                                                            ? App\Helpers\StrHelper::substrwords(strip_tags($post->description), 120)
                                                            : '' !!}
                                                    </p>
                                                </div>
                                                <a class="readmore-page"
                                                    href="{{ route('site.post.show', [$blog->slug, $post->slug]) }}">Xem
                                                    Thêm...<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="menu-recent news-wrap-item box-module col-md-4 col-sm-12">
                            <div class="heading group-title">
                                <a title="{{ $blog->name }} Mới Nhất"
                                    href="{{ route('site.blog.index', [$blog->slug]) }}"><i class="fa fa-newspaper-o"
                                        style="margin-right: 5px;" aria-hidden="true"></i>
                                    {{ $blog->name }} Mới Nhất</a>
                                <a href="{{ route('site.blog.index', [$blog->slug]) }}">Xem tất cả <i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                            @include('site.layout.lastestPost')
                        </div>
                    </div>


                    <div class="toolbar toolbar-products toolbar-bottom">
                        <div class="toolbar-amount">
                            <span>Đang hiện {{ count($posts) }}/{{ $total }} sản phẩm
                                ({{ $page_number }}
                                Trang)</span>
                        </div>
                        <div class="pages">
                            <ul class="pagination">
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
                                        <a
                                            href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
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
            </div>
        </div>

        @include('site.layout.footer')
    </body>
@endsection
