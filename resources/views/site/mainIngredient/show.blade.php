@extends('site.layout.main')

@section('content')

    <body class="material-page ">
        <div class="site-wrapper has-popup" id="site-wrapper">
            @include('site.layout.header')
            <!-- START:: MENU MOBILE SIDEBAR (P) -->

            <!-- END:: MENU MOBILE SIDEBAR (P) -->

            <main class="site-main site-material">
                <section class="section-material">
                    <div class="container container--large">
                        <div class="section-material__heading">
                            <h1 class="section-heading text--center">Minh bạch <span>Nguyên liệu</span></h1>
                            <p class="section-description text--center"><b class="text--primary">{!! $config->description_in_main_ingredients !!}</p>
                        </div>
                        <div>
                            {!! $config->long_description_in_main_ingredients !!}
                        </div>
                        <div class="grid grid--three-columns grid--doubling">
                            @foreach ($mainIngredients as $mainIngredient)
                                <div class="grid__column">
                                    <div class="material-grid material-grid--green">
                                        <div class="icon">
                                            <svg height="512" viewBox="0 0 512.019 512.019" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M498.96 326.061a14.991 14.991 0 00-11.262-4.379c-1.016.044-12.803.63-29.647 4.223 18.181-34.67 27.971-73.352 27.971-111.865 0-8.284-6.716-15-15-15H223.283L169.708 93.884c22.137-12.397 31.771-39.869 21.475-63.645-5.321-12.289-15.109-21.769-27.561-26.696-12.452-4.927-26.077-4.71-38.365.612L38.905 41.548c-12.288 5.321-21.769 15.109-26.696 27.561-4.927 12.451-4.709 26.076.612 38.364 8.184 18.898 26.683 30.211 46.075 30.211 5.006 0 10.071-.756 15.034-2.328l22.963 63.683H23.684c-8.284 0-15 6.716-15 15 0 59.773 22.202 116.965 62.516 161.039 17.735 19.389 38.3 35.516 60.816 47.961v73.979c0 8.284 6.716 15 15 15h200.805c.963.005 1.944-.085 2.891-.265 29.589-5.639 71.649-22.107 100.959-51.417 47.854-47.854 51.534-119.968 51.667-123.015a14.995 14.995 0 00-4.378-11.26zM189.614 199.039h-60.831l-27.18-75.379 40.64-17.598zM66.825 106.027c-10.186 4.412-22.063-.288-26.475-10.475h.001a20 20 0 01-.246-15.406c1.978-5 5.786-8.931 10.721-11.068l86.354-37.393a20.007 20.007 0 0115.407-.246c5 1.979 8.931 5.786 11.068 10.721 4.411 10.187-.288 22.063-10.475 26.475zm87.153 294.681c-22.615-11.328-43.191-26.799-60.641-45.877-31.855-34.827-50.774-79.025-54.117-125.792h78.927c.034 0 .067.004.101.004.03 0 .061-.004.091-.004h95.664l.1.003c.02 0 .039-.003.059-.003h241.297c-2.915 38.933-17.068 77.387-40.59 109.694l-1.079 1.483a190.75 190.75 0 00-9.498 4.581c-12.492-48.327-43.697-82.887-45.342-84.683a14.997 14.997 0 00-22.12 0c-1.745 1.904-36.724 40.649-47.387 93.583-44.757-29.284-96.162-31.906-98.69-32.017a15.003 15.003 0 00-15.641 15.641c.096 2.191 2.026 40.093 20.895 79.008a207.461 207.461 0 01-41.779-15.495c-.083-.044-.168-.083-.25-.126zm8.038 81.311v-45.033a237.574 237.574 0 0056.156 13.946 145.66 145.66 0 008.606 9.406c8.559 8.559 17.929 15.706 27.549 21.681zm85.975-42.895c-26.419-26.419-36.683-63.406-40.591-85.153 20.137 3.617 53.314 12.685 79.086 34.963 1.282 34.62 14.848 65.207 27.59 86.602-20.679-5.8-46.229-16.557-66.085-36.412zm99.926-144.443c12.614 18.073 31.483 51.388 31.483 88.952 0 37.391-18.916 70.821-31.526 88.953-12.618-18.073-31.494-51.389-31.494-88.953 0-37.39 18.922-70.821 31.537-88.952zm82.542 144.443c-12.864 12.864-29.102 22.842-45.107 30.088 12.211-22.073 24.048-52.1 24.048-85.579 0-2.42-.069-4.819-.188-7.202 22.034-13.399 45.983-19.628 61.838-22.469-3.907 21.753-14.17 58.74-40.591 85.162z" />
                                            </svg>
                                        </div>
                                        <h2 class="title">
                                            <a href="javascript:void(0)">
                                                {{ $mainIngredient->name }}
                                            </a>
                                        </h2>
                                        <div class="list">
                                            <ul>
                                                @foreach ($mainIngredient->components as $component)
                                                    <li>
                                                        <h3 class="textCustom"><a href="javascript:void(0)">
                                                                {{ $component->name }}
                                                            </a></h3>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        {{-- <a href="danh-sach-nguyen-lieu/thao-moc-duoc-lieu.html" class="link"></a> --}}
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>
                @if (!empty($brands) && count($brands) > 0)
                    @include('site.layout.brands')
                @endif
            </main>


            @include('site.layout.footer')
    </body>
@endsection
