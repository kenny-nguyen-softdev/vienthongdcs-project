<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ !empty($title) ? $title . ' | ' . request()->getHost() : $headerData->company['name'] }}</title>
    <base />
    {{-- <meta name="description" content="Bigone, Responsive, Fashion, Opencart Theme" /> --}}

    <script src="{{ asset('template/site/catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}?v=<?= time() ?>"
        type="text/javascript">
    </script>
    <script src="{{ asset('template/site/catalog/view/javascript/jquery/jquery-ui.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <link href="{{ asset('template/site/catalog/view/javascript/jquery/css/jquery-ui.css') }}?v=<?= time() ?>"
        rel="stylesheet" media="screen" />
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/oclayerednavigation/css/oclayerednavigation.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <script
        src="{{ asset('template/site/catalog/view/javascript/opentheme/oclayerednavigation/oclayerednavigation.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <link href="{{ asset('template/site/catalog/view/javascript/bootstrap/css/bootstrap.css') }}?v=<?= time() ?>"
        rel="stylesheet" media="screen" />
    <link href="{{ asset('template/site/catalog/view/javascript/bootstrap/css/bootstrap-theme.css') }}?v=<?= time() ?>"
        rel="stylesheet" media="screen" />
    <script src="{{ asset('template/site/catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}?v=<?= time() ?>"
        type="text/javascript">
    </script>
    <link href="{{ asset('template/site/catalog/view/javascript/jquery/magnific/magnific-popup.css') }}?v=<?= time() ?>"
        type="text/css" rel="stylesheet" />
    <link
        href="{{ asset('template/site/catalog/view/javascript/font-awesome/css/font-awesome.min.css') }}?v=<?= time() ?>"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('template/site/catalog/view/javascript/stroke-gap-icons/css/stroke-gap-icons.css') }}?v=<?= time() ?>"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet" />
    <script src="{{ asset('template/site/catalog/view/javascript/opentheme/hozmegamenu/custommenu.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/opentheme/hozmegamenu/mobile_menu.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/jquery.plugin.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script
        src="{{ asset('template/site/catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/opentheme/vermegamenu/ver_menu.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/vermegamenu/css/ocvermegamenu.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/ocslideshow/ocslideshow.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/hozmegamenu/css/custommenu.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/css/animate.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/css/owl.carousel.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <script
        src="{{ asset('template/site/catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/jquery/owl-carousel/owl.carousel.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/ma.lettering.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    {{-- <script src="{{ asset('template/site/catalog/view/javascript/opentheme/ocquickview/ocquickview.js') }}?v=<?= time() ?>"
        type="text/javascript"></script> --}}
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/ocquickview/css/ocquickview.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <link href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/stylesheet.css') }}?v=<?= time() ?>"
        rel="stylesheet" />
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/ocajaxlogin/css/ocajaxlogin.css') }}?v=<?= time() ?>"
        type="text/css" rel="stylesheet" media="screen" />
    <link
        href="{{ asset('template/site/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css') }}?v=<?= time() ?>"
        type="text/css" rel="stylesheet" media="screen" />
    <link
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/opentheme/ocpagebuilder.css') }}?v=<?= time() ?>"
        type="text/css" rel="stylesheet" media="screen" />
    {{-- <link rel="stylesheet"
        href="{{ asset('template/site/catalog/view/theme/tt_bigone3/stylesheet/fontawesome/font-awesome-allf2b4.css') }}?v=<?= time() ?>" /> --}}
    <script src="{{ asset('template/site/catalog/view/javascript/common.js') }}?v=<?= time() ?>" type="text/javascript">
    </script>
    <link href="http://bigone3.demo.towerthemes.com/" rel="canonical" />

    @php
        $favicon = $headerData->company['favicon'];
    @endphp
    <link href="{{ asset("storage/uploads/$favicon") }}" rel="icon" />
    <script src="{{ asset('template/site/catalog/view/javascript/opentheme/jquery.bpopup.min.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/opentheme/jquery.cookie.js') }}?v=<?= time() ?>"
        type="text/javascript">
    </script>
    <script src="{{ asset('template/site/catalog/view/javascript/opentheme/ocajaxlogin/ocajaxlogin.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/jquery/datetimepicker/moment.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script
        src="{{ asset('template/site/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script
        src="{{ asset('template/site/catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/jquery.plugin.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/hamburger.js') }}?v=<?= time() ?>" type="text/javascript">
    </script>
    <script
        src="{{ asset('template/site/catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>
    <script src="{{ asset('template/site/catalog/view/javascript/cate-items.js') }}?v=<?= time() ?>"
        type="text/javascript"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
