@extends('site.layout.main')

@section('content')

    <body class="product-category-61 home1">
        @include('site.layout.script_body')

        @include('site.layout.header')

        <section class="container">
            <style type="text/css">
                .thanks {
                    width: 100%;
                    padding: 20px;
                    border: 1px solid #ddd;
                    background: #fff;
                    box-shadow: 0 0 5px #ccc;
                    display: table;
                    margin: 20px auto;
                }

                .thanks label {
                    display: block;
                    font: bold 21px/30px "FShop Myriad";
                    width: 100%;
                    color: green;
                    margin-bottom: 20px;
                }

                .thanks label i {
                    margin-right: 10px;
                }
            </style>
            <div class="thanks">
                <label><i class="fa fa-check" aria-hidden="true"></i>Đặt hàng thành công
                    !</label>
                <div>
                    - Cảm ơn
                    <span style="color: #cc0000; display: inline">{{ $order->id }}</span> đã đặt
                    hàng tại {{ $company->name }} !<br />
                    - Nhân viên bán hàng của {{ $company->name }} sẽ liên hệ với bạn trong thời
                    gian sớm nhất !<br />
                    - Trở về <a href="{{ route('site.home') }}"><b>trang chủ !</b></a>
                </div>
            </div>
        </section>

        @include('site.layout.footer')
    </body>
@endsection
