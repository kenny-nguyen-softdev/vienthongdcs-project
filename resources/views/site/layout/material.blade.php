@if ($key % 2 == 0)
    <div class="home-resources__item">
        <div class="resources-grid
                                                        "
            style="background-color: {{ $material->color }};">
            <div class="thumbnail">
                <img class="lazyload" data-src="{{ asset("storage/uploads/$material->featured_image") }}"
                    alt="{{ $material->name }}">
            </div>
            <div class="content">
                <h3 class="title">
                    {{ $material->name }}
                </h3>
                <p class="description">
                    {!! $material->description !!}
                </p>
            </div>
        </div>
    </div>
@else
    <div class="home-resources__item">
        <div class="resources-grid resources-grid--bottom" style="background-color: {{ $material->color }};">
            <div class="thumbnail">
                <img class="lazyload" data-src="{{ asset("storage/uploads/$material->featured_image") }}"
                    alt="{{ $material->name }}">
            </div>
            <div class="content">
                <h3 class="title">
                    {{ $material->name }}
                </h3>
                <p class="description">
                    {!! $material->description !!}
                </p>
            </div>
        </div>
    </div>
@endif
