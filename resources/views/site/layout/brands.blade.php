<section class="home-newspapers">
    <div class="container-full">
        <div class="home-newspapers__wrapper">

            <div class="container">
                <div class="grid grid--five-columns newspapers-slide home-newspapers--slide">

                    @foreach ($brands as $brand)
                        <div class="grid__column">
                            <div class="newspapers-item">
                                <a href="javascript:void(0)" rel="noopener noreferrer nofollow">
                                    <img src="{{ asset("storage/uploads/$brand->represented_image") }}"
                                        alt="{{ $brand->name }}">
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
