@extends('site.layout.main')

@section('content')

    <body class="blog-routing-page ">
        <div class="site-wrapper has-popup" id="site-wrapper">
            @include('site.layout.header')
            <!-- START:: MENU MOBILE SIDEBAR (P) -->

            <!-- END:: MENU MOBILE SIDEBAR (P) -->

            <main class="site-blogs">
                <section class="site-blogs__breadcrumb">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__list">
                                <a class="breadcrumb__item" href="{{ route('site.home') }}">
                                    <span class="breadcrumb__home">
                                        <span class="breadcrumb__icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.13478 20.7733V17.7156C9.13478 16.9351 9.77217 16.3023 10.5584 16.3023H13.4326C13.8102 16.3023 14.1723 16.4512 14.4393 16.7163C14.7063 16.9813 14.8563 17.3408 14.8563 17.7156V20.7733C14.8539 21.0978 14.9821 21.4099 15.2124 21.6402C15.4427 21.8705 15.7561 22 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0008C21.1356 20.3588 21.5 19.487 21.5 18.5778V9.86686C21.5 9.13246 21.1721 8.43584 20.6046 7.96467L13.934 2.67587C12.7737 1.74856 11.1111 1.7785 9.98539 2.74698L3.46701 7.96467C2.87274 8.42195 2.51755 9.12064 2.5 9.86686V18.5689C2.5 20.4639 4.04738 22 5.95617 22H7.87229C8.55123 22 9.103 21.4562 9.10792 20.7822L9.13478 20.7733Z"
                                                    fill="#200E32"></path>
                                            </svg>
                                        </span>
                                        <span class="text">Trang Chủ</span>
                                    </span>
                                </a>
                                <span class="breadcrumb__sep">/</span>
                                <a class="breadcrumb__item" href="{{ route('site.getAllPost') }}">
                                    Tất cả bài viết
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="blogs-header">
                    <div class="container">
                        <div class="heading">
                            <h1 class="title" style="text-transform: capitalize">Tất cả bài viết</h1>
                        </div>
                        <div class="grid grid--three-columns grid--doubling blog-header-slide">
                            @foreach ($postsOnePage as $post)
                                <div class="grid__column">
                                    <div class="blog-post blog-post--grid">
                                        <div class="thumbnail">
                                            <a href="{{ route('site.post.show', [$post->blog->slug, $post->slug]) }}">
                                                <img class="lazyload"
                                                    data-src="{{ asset("storage/uploads/$post->featured_image") }}"
                                                    alt="{{ $post->title }}">
                                            </a>
                                        </div>
                                        <h2 class="title maxLine_2"><a
                                                href="{{ asset('site.post.show', [$post->slug]) }}">{{ $post->title }}</a>
                                        </h2>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination">
                            @if ($page > 1)
                                <a href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}"
                                    class="pagination__item pagination__item--prev">
                                    <svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.121 5l3.712 3.712-1.06 1.061L0 5 4.773.227l1.06 1.06L2.121 5z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            @endif

                            @php
                                $j = request()->input('page') ?? 1;
                                $start = $j < 5 ? 1 : ($j >= $page_number - 4 ? ($page_number - $j == 4 ? $j : ($page_number - $j == 3 ? $j - 1 : ($page_number - $j == 2 ? $j - 2 : ($page_number - $j == 1 ? $j - 3 : $j - 4)))) : $j);

                                $end = $j < $page_number ? ($j < 5 ? ($page_number < 5 ? $page_number : 5) : ($j < $page_number ? ($j >= $page_number - 4 ? $page_number : $j + 4) : $page_number)) : $page_number;
                            @endphp
                            @for ($i = $start; $i <= $end; $i++)
                                <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}"
                                    class="pagination__item {{ (empty($page) && $i == 1) || $page == $i ? 'pagination__item--current' : '' }}">{{ $i }}</a>
                            @endfor

                            @if ($page < $page_number && $page_number > 1)
                                <a href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}"
                                    class="pagination__item pagination__item--next">
                                    <svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.879 5L.167 1.288 1.227.227 6 5 1.227 9.773l-1.06-1.06L3.879 5z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </section>

            </main>

            @include('site.layout.footer')
    </body>
@endsection
