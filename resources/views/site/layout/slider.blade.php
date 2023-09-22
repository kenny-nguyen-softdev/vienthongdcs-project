<div id="oc-inivoslider" class="slides">
    @foreach ($banners as $key => $banner)
        <a href="#"><img style="display: none" src="{{ asset("storage/uploads/$banner->thumb") }}"
                alt="{{ $banner->name }}" title="#banner7-caption{{ $key + 1 }}" />
        </a>
    @endforeach
</div>
