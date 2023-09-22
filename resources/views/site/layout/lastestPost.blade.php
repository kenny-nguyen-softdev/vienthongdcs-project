<div class="sh-blog-shortcode style-1">
    <div class="row_items">
        @foreach ($lastestPosts as $lastestPost)
            <div class="articles-inner">
                <div class="articles-image">
                    <a href="{{ route('site.post.show', [$blog->slug, $lastestPost->slug]) }}"><img
                            src="{{ asset("storage/uploads/$lastestPost->featured_image") }}"
                            alt="{{ $lastestPost->title }}"></a>
                </div>
                <div class="aritcles-content">
                    <a href="{{ route('site.post.show', [$blog->slug, $lastestPost->slug]) }}" class="articles-name">
                        {{ App\Helpers\StrHelper::substrwords($lastestPost->title, 120) }}
                    </a>
                    <div class="news-excerpt">
                        <p>
                            {!! strlen($lastestPost->description) > 0
                                ? App\Helpers\StrHelper::substrwords(strip_tags($lastestPost->description), 120)
                                : '' !!}
                        </p>

                        <a class="read-more" href="{{ route('site.post.show', [$blog->slug, $lastestPost->slug]) }}">Xem
                            thêm...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
