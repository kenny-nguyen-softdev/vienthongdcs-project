@extends('site.layout.main')

@section('content')

    <body class="about-us-page ">
        <div class="site-wrapper has-popup" id="site-wrapper">
            @include('site.layout.header')
            <!-- START:: MENU MOBILE SIDEBAR (P) -->

            <!-- END:: MENU MOBILE SIDEBAR (P) -->

            <main class="site-main site-about-us">
                <section class="about-us-head">
                    <div class="container container--small">
                        <h1 class="section-heading">{{ $about->title }}</h1>
                        <p class="section-description">
                            {!! $about->description !!}
                        </p>
                    </div>
                    <div class="container-full">
                        <div class="about-us-head__banner">
                            <img src="{{ asset("storage/uploads/$about->banner_1") }}" alt="{{ $about->title }}">
                            <span class="image-element">

                            </span>
                        </div>
                    </div>
                </section>
                <section class="about-us-content">
                    <div class="content">
                        <div class="container container--small">
                            <div class="description">
                                {!! $about->description_1 !!}
                            </div>
                        </div>
                    </div>
                    <div class="content-banner">
                        <div class="container container--small">
                            <div class="wrapper">
                                <div class="description">
                                    {!! $about->description_2 !!}
                                </div>
                                <div class="banner">
                                    <div class="image">
                                        <img src="{{ asset("storage/uploads/$about->banner_4") }}"
                                            alt="{{ $about->title }}">
                                        <span class="image-element">
                                            <img src="{{ asset("storage/uploads/$about->banner_3") }}"
                                                alt="{{ $about->title }}">
                                        </span>
                                        <span class="image-element bottom">

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="container container--small">
                            <div class="description">
                                {!! $about->description_3 !!}
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="container container--medium">
                            <img class="one-whole" src="{{ asset("storage/uploads/$about->banner_5") }}"
                                alt="{{ $about->title }}">
                        </div>
                        <div class="container container--small">
                            <div class="description">
                                {!! $about->description_4 !!}
                            </div>
                        </div>
                    </div>
                    <div class="content-banner">
                        <div class="container container--small">
                            <div class="wrapper">
                                <div class="banner">
                                    <div class="image">
                                        <img src="{{ asset("storage/uploads/$about->banner_6") }}"
                                            alt="{{ $about->title }}">
                                        <span class="image-element">

                                        </span>
                                    </div>
                                </div>
                                <div class="description">
                                    {!! $about->description_5 !!}
                                    <div class="article-social">
                                        <span class="label">
                                            Chia sẻ:
                                        </span>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem"
                                            class="item" target="_blank" rel="noopener noreferrer nofollow">
                                            <svg width="16" height="16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M10.665 2.657h1.46V.113A18.862 18.862 0 009.997 0C7.891 0 6.45 1.325 6.45 3.76V6H4.125v2.844h2.324V16h2.849V8.845h2.23L11.882 6H9.297V4.04c0-.822.222-1.384 1.367-1.384z"
                                                        fill="currentColor"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <path fill="#fff" d="M0 0h16v16H0z"></path>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem"
                                            class="item" target="_blank" rel="noopener noreferrer nofollow">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem"
                                            class="item" target="_blank" rel="noopener noreferrer nofollow">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-us-content__element left">
                        <img src="{{ asset("storage/uploads/$about->banner_2") }}" alt="{{ $about->title }}">
                    </div>
                    <div class="about-us-content__element bottom">
                        <img src="{{ asset("storage/uploads/$about->banner_7") }}" alt="{{ $about->title }}">
                    </div>
                </section>

                @if (!empty($brands) && count($brands) > 0)
                    @include('site.layout.brands')
                @endif
            </main>


            @include('site.layout.footer')
    </body>
@endsection
