@extends('site.layout.main')

@section('content')

    <body class="blog-article home1">
        <link
            href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/ocblog.css') }}?v=<?= time() ?>"
            rel="stylesheet" />

        @include('site.layout.script_body')

        @include('site.layout.header')

        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('site.home') }}">Trang Chủ</a></li>
                <li><a href="{{ route('site.blog.index', [$blog->slug]) }}">{{ $blog->name }}</a></li>
                <li><a href="{{ route('site.post.show', [$blog->slug, $post->slug]) }}">{{ $post->name }}</a></li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div id="ajax-login-block">
                    </div>

                    <div class="article-container col-md-8">
                        <img class=" lazy" src="{{ asset("storage/uploads/$post->featured_image") }}"
                            alt="{{ $post->title }}" />
                        <div class="article-title">
                            {{ $post->title }} </div>
                        <div class="article-date">
                            Tác Giả: {{ $post->author }} - {{ $post->created_date }}</div>
                        <div class="article-description">
                            <article>
                                {!! $post->description !!}
                                <p>
                                <p>
                                    {!! $post->content !!}
                                </p>
                                </p>
                            </article>
                        </div>
                        <div class="related-posts">
                            <h4 class="related-title"><span>{{ $blog->name }} Liên Quan</span></h4>
                            <ul>
                                @foreach ($relatedPosts as $relatedPost)
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="{{ route('site.post.show', [$blog->slug, $relatedPost->slug]) }}"
                                            title="{{ $relatedPost->title }}">{{ $relatedPost->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="menu-recent news-wrap-item box-module col-md-4 col-sm-12">
                        <div class="heading group-title">
                            <a title="{{ $blog->name }} Mới Nhất"
                                href="{{ route('site.blog.index', [$blog->slug]) }}"><i class="fa fa-newspaper-o"
                                    aria-hidden="true"></i>
                                {{ $blog->name }} Mới Nhất</a>
                            <a href="{{ route('site.blog.index', [$blog->slug]) }}">Xem tất cả <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                        @include('site.layout.lastestPost')
                    </div>
                </div>
            </div>
        </div>

        @include('site.layout.footer')
    </body>
@endsection
