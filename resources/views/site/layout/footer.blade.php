<div class="quickview-container">
    <a href="javascript:void(0);" class="a-qv-close" style="display: none;">Close</a>
    <div id="quickview-content" style="display: none;">

    </div>
    <div id="quickview-bg-block" style="display: none;">
        <!-- Quick View deep background -->
    </div>

    <div class="quickview-load-img" style="display: none;">
        <img src="{{ asset('template/site/image/catalog/AjaxLoader.gif') }}" alt="">
    </div>

    <div>
        <input type="hidden" id="qv-status" value="1">
        <input type="hidden" id="qv-container" value=".quickview-add">
        <input type="hidden" id="qv-parent-element" value="images-container">
        <input type="hidden" id="qv-children-element" value="quick-view">
        <input type="hidden" id="qv-text-quickview" value="Quick View">
    </div>

    {{-- <script type="text/javascript">
        $('#quickview-bg-block').click(function() {
            ocquickview.closeQVFrame();
        })
    </script> --}}
</div>

<footer>
    <div class="newletter-subscribe-container">
        <div class="container">
            <div class="container-inner">
                <img src="{{ asset('template/site/image/catalog/cmsblock/icon_bkg_newletter.png') }}" alt="image"
                    class="icon-newletter" />
                <div class="newletter-subscribe">
                    <div id="boxes-normal" class="newletter-container">
                        <div style="" id="dialog-normal" class="window">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12 col-md-6">
                                        <div class="newletter-title">
                                            <h3>Đăng kí nhận bản tin</h3>
                                            <label>Nhận thông tin cập nhật qua e-mail về cửa hàng mới
                                                nhất của chúng tôi và các ưu đãi đặc biệt.</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-12 col-md-4">
                                        <div class="box-content newleter-content ">
                                            <div class="des-testimonial"></div>

                                            <div id="frm_subscribe-normal">
                                                <form name="subscribe" id="subscribe-normal">
                                                    <input type="text" value="" name="subscribe_email"
                                                        id="subscribe_email-normal" placeholder="Email" />
                                                    <input type="hidden" value="" name="subscribe_name"
                                                        id="subscribe_name-normal" />
                                                    <a class="btn" onclick="email_subscribe()">Subscribe!</a>
                                                </form>
                                            </div>
                                            <!-- /#frm_subscribe -->
                                            <div id="notification-normal">

                                            </div>
                                        </div>

                                        <!-- /.box-content -->
                                    </div>
                                    <div class="col-sm-4 col-xs-12 col-md-2 icon-follow">
                                        <div class="follow">
                                            <ul class="link-follow">
                                                <li class="first">
                                                    <a class="twitter fa fa-twitter" title="Twitter"
                                                        href="{{ $footerData['company']->twitter_url }}"><span>twitter</span></a>
                                                </li>

                                                <li>
                                                    <a class="facebook fa fa-facebook" title="Facebook"
                                                        href="{{ $footerData['company']->facebook_url }}"><span>facebook</span></a>
                                                </li>
                                                <li>
                                                    <a class="youtube fa fa-youtube" title="Youtube"
                                                        href="{{ $footerData['company']->youtube_url }}"><span>youtube
                                                        </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            // function email_subscribe() {
                            //     $.ajax({
                            //         type: "post",
                            //         url: "index.php?route=extension/module/newslettersubscribe/subscribe",
                            //         dataType: "html",
                            //         data: $("#subscribe-normal").serialize(),
                            //         success: function(html) {
                            //             eval(html);
                            //         },
                            //     });
                            // }

                            // function email_unsubscribe() {
                            //     $.ajax({
                            //         type: "post",
                            //         url: "index.php?route=extension/module/newslettersubscribe/unsubscribe",
                            //         dataType: "html",
                            //         data: $("#subscribe-normal").serialize(),
                            //         success: function(html) {
                            //             eval(html);
                            //         },
                            //     });
                            //     $("html, body")
                            //         .delay(1500)
                            //         .animate({
                            //             scrollTop: 0
                            //         }, "slow");
                            // }
                        </script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#subscribe_email-normal").keypress(function(e) {
                                    if (e.which == 13) {
                                        e.preventDefault();
                                        email_subscribe();
                                    }
                                    var name = $(this).val();
                                    $("#subscribe_name-normal").val(name);
                                });
                                $("#subscribe_email-normal").change(function() {
                                    var name = $(this).val();
                                    $("#subscribe_name-normal").val(name);
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-footer">
                    <div class="footer-title">{{ $footerData['company']->name }}</div>
                    <div class="footer-content">
                        <ul class="footer-content">
                            <li>
                                <i class="fa fa-file-text"></i><span class="">Mã số thuế: </span>
                                {{ $footerData['company']->tax_code }}
                            </li>
                            <li>
                                <i class="fa fa-building"></i><span class="">Trụ sở chính:</span>
                                {{ $footerData['company']->housenumber_street . ', ' . $footerData['company']->ward->name . ', ' . $footerData['company']->ward->district->name . ', ' . $footerData['company']->ward->district->province->name }}
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i><span
                                    class="">VPGD:</span>{{ $footerData['company']->delivery_housenumber_street . ', ' . $footerData['company']->deliveryWard->name . ', ' . $footerData['company']->deliveryWard->district->name . ', ' . $footerData['company']->deliveryWard->district->province->name }}
                                - {{ $footerData['company']->delivery_phone_number }}
                            </li>
                            <li>
                                <i class="fa fa-phone"></i><span class="">Số điện thoại:</span>
                                {{ $footerData['company']->phone_number }} -
                                <i class="fa fa-mobile-alt hotline-icon"></i><span class="">Hotline:</span>
                                {{ $footerData['company']->hotline }}
                            </li>
                            <li>
                                <i class="fa fa-credit-card-alt"></i><span class="">Số tài khoản: </span>
                                {{ $footerData['company']->account_no }}
                            </li>
                            <li>
                                <i class="fa fa-university"></i><span class="">Ngân hàng: </span>
                                {{ $footerData['company']->bank_name }}
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i><span class="">Email:</span>
                                {{ $footerData['company']->email }}
                            </li>
                        </ul>
                        {{-- <div class="footer-payment">
                            <label>Phương thức thanh toán: </label>
                            <a href="javascript:void(0)">
                                <img
                                    src="{{ asset('template/site/image/catalog/cmsblock/payment.png') }}"
                                    alt="phương thức thanh toán" />

                                </a>
                        </div> --}}

                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-footer">
                    <div class="footer-title">Giới thiệu</div>
                    <div class="footer-content">
                        <ul class="list-unstyled text-content">
                            @foreach ($footerData['introductions'] as $introduction)
                                <li>
                                    <a
                                        href="{{ route('site.introduction.show', [$introduction->slug]) }}">{{ $introduction->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-footer">
                    <div class="footer-title">Chính sách công ty</div>
                    <div class="footer-content">
                        <ul class="list-unstyled text-content">
                            @foreach ($footerData['customerTutorialPages'] as $customerTutorialPage)
                                <li>
                                    <a
                                        href="{{ route('site.page.show', [$customerTutorialPage->slug]) }}">{{ $customerTutorialPage->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-footer">
                    <div class="footer-title">Hướng dẫn khách hàng</div>
                    <div class="footer-content">
                        <ul class="list-unstyled text-content">
                            @foreach ($footerData['policyPages'] as $policyPage)
                                <li>
                                    <a
                                        href="{{ route('site.page.show', [$policyPage->slug]) }}">{{ $policyPage->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row payment-bct">
                <div class="col-md-8 col-sm-12 payment">
                    <div class="footer-payment">
                        <label>Phương thức thanh toán: </label>
                        <a href="#" class="">
                            <img src="{{ asset('storage/uploads/company/Visa_1.png') }}" alt="img">
                        </a>
                        <a href="#" class="">
                            <img src="{{ asset('storage/uploads/company/mastercard1979.png') }}" alt="img">
                        </a>
                        <a href="#" class="">
                            <img src="{{ asset('storage/uploads/company/paypal-logo.png') }}" alt="img">
                        </a>
                        <a href="#" class="">
                            <img src="{{ asset('storage/uploads/company/skrilll.png') }}" alt="img">
                        </a>
                        <a href="#" class="">
                            <img src="{{ asset('storage/uploads/company/maestro1.png') }}" alt="img">
                        </a>
                        <a href="#" class="">
                            <img src="{{ asset('storage/uploads/company/Visa_Electron.svg.png') }}" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 site-footer__custom__item">
                    <a class="add-bct" href=""
                        rel="noopener
                                        noreferrer
                                        nofollow"></a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="footer-middle">

        <div class="container">
            <div class="row">
                <div class="container-inner">
                    @foreach ($footerData['branchLocations'] as $branchLocation)
                        <div class="col-md-4 col-sm-6 col-footer">
                            <h4 class="footer-title">{{ $branchLocation->name }}</h4>
                            @foreach ($branchLocation->branches as $branch)
                                <ul class="footer-content" style="margin-bottom: 8px;">
                                    <li>
                                        <i class="fa fa-building"></i><span
                                            class="">{{ $branch->name }}:</span>
                                        {{ $branch->housenumber_street . ', ' . $branch->ward->name . ', ' . $branch->ward->district->name . ', ' . $branch->ward->district->province->name }}
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i><span class="">VPGD:</span>
                                        {{ $branch->delivery_housenumber_street . ', ' . $branch->deliveryWard->name . ', ' . $branch->deliveryWard->district->name . ', ' . $branch->deliveryWard->district->province->name }}
                                        - {{ $branch->delivery_phone_number }}
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i><span class="">Số điện thoại:</span>
                                        {{ $branch->tel }} -
                                        <i class="fa fa-mobile-alt hotline-icon"></i><span
                                            class="">Hotline:</span>
                                        {{ $branch->hotline }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div> --}}
    <div class="footer-bottom text-center">
        <div class="container text-center">
            <div class="container-inner text-center">
                <div class="footer-copyright text-center">
                    <span>Bản Quyền &copy; 2022
                        <a href="{{ route('site.home') }}">{{ $footerData['company']->name }}</a>. Đã Đăng Ký
                        Bản Quyền.</span>
                </div>

            </div>
        </div>
    </div>

    <div id="back-top"><i class="fa fa-angle-up"></i></div>

    <script type="text/javascript">
        $(document).ready(function() {
            // hide #back-top first
            $("#back-top").hide();
            // fade in #back-top
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 300) {
                        $("#back-top").fadeIn();
                    } else {
                        $("#back-top").fadeOut();
                    }
                });
                // scroll body to 0px on click
                $("#back-top").click(function() {
                    $("body,html").animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        });
    </script>
</footer>

<script src="{{ asset('template/site/catalog/view/javascript/public.js') }}?v=<?= time() ?>"></script>
<script
    src="{{ asset('template/site/catalog/view/javascript/jquery-validation/dist/jquery.validate.min.js') }}?v=<?= time() ?>">
</script>
