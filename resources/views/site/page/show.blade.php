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
                <li><a href="{{ route('site.page.show', [$page->slug]) }}">{{ $page->title }}</a>
                </li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div id="ajax-login-block">
                    </div>

                    <div class="article-container col-md-12">

                        <div class="article-title text-center">{{ $page->title }}</div>
                        <div class="article-date">{{ $page->created_date }}</div>
                        <div class="article-description">
                            <div>
                                <article>
                                    {!! $page->content !!}
                                </article>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        @include('site.layout.footer')
    </body>
@endsection
