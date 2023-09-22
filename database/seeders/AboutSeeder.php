<?php

namespace Database\Seeders;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::insert([
            'title' => "Chuyện Của Le'una",
            'description' => '<p ><strong >Tôi
                    bắt đầu Ước
                    mơ Xanh của
                    mình,
                    nghiên
                    cứu những
                    sản phẩm
                    thuần
                    tuý,
                    tối giản,
                    chỉ tập
                    trung
                    vào
                    mục
                    đính
                    sử dụng của
                    chính
                    nó.</strong></p>
            <p >Nghĩa là
                nước giặt
                thì chỉ
                cần giặt sạch,
                chứ không
                cần phải nhiều
                bọt. Nghĩa
                là dưỡng
                da dưỡng
                tóc
                thì để da
                tóc khoẻ
                từ gốc chứ
                không cần
                cảm giác
                giả mướt tay từ
                silicon.
                Tôi từ
                chối mọi sản
                phẩm chứa hạt vi
                nhựa, chỉ
                dùng cafe
                xay mịn
                và muối
                biển để tẩy tế
                bào chết.
                Tôi
                không
                dùng
                những hoá
                chất tẩy rửa
                mà thay
                bằng xà
                bông dầu
                dừa và
                quả bồ
                hòn xưa
                cũ...</p>',
            'content' => '<section class="about-us-head" >
            <div class="container container--small" >
                <h1 class="section-heading" >Chuyện của <span >Cỏ</span></h1>
                <p class="section-description" >
                    Khi quyết định xét nghiệm máu để làm tầm soát ung thư sớm, tôi nhận thức được rằng thế giới
                    này không còn là nơi an toàn để sống. Chúng ta đang thực sự ở trong một
                    cuộc chiến với rác thải và hoá chất độc hại - từng ngày, từng giờ - không súng đạn nhưng đầy thương
                    vong!
                </p>
            </div>
            <div class="container-full" >
                <div class="about-us-head__banner" >
                    <img src="https://assets.comem.vn/images/abouts/banner-2.png" alt="Chuyện của cỏ" >
                    <span class="image-element" >

                    </span>
                </div>
            </div>
        </section>
        <section class="about-us-content" >
            <div class="content" >
                <div class="container container--small" >
                    <div class="description" >
                        <blockquote >
                            Để nói về Cỏ Mềm, có 2 từ <b style="color: rgb(115, 129, 54); user-select: auto;">Lành &amp; Thật</b>
                            <br >
                            Để nói về mình, tôi mong được 2 chữ <b >Yêu Đời</b>
                        </blockquote>
                        <p >
                            Chúng ta đều cổ động đấu tranh bảo vệ môi trường, tìm hiểu về Hiệu ứng nhà kính, ô nhiễm Hạt
                            nhân mà không biết mỗi hành động vô tư hàng ngày phục vụ cuộc sống cá nhân và gia đình đều
                            đang tác động trực tiếp đến Trái đất. Mỗi ngày, để làm sạch bát đĩa quần áo bẩn, chúng ta sử
                            dụng hàng tấn xà phòng nước rửa bát chứa đầy chất hoạt động bề mặt, chất tạo bọt, chất bảo
                            quản, hương liệu độc hại. Sữa tắm, sữa rửa mặt, dầu gội, dầu xả cho tóc mượt, da mềm chứa
                            đầy silicon không phân huỷ, mỹ phẩm chứa đầy hạt vi nhựa tẩy tế bào chết… Riêng khối lượng
                            hạt vi nhựa tiêu thụ ở EU năm 2013 là 299 triệu tấn (UNEF). Những hoá chất và phụ gia độc hại
                            này nếu chưa thấm trực tiếp vào da thì sẽ bị thải xuống cống, rồi trôi ra sông hồ, ra biển,
                            không tự phân huỷ được. Chúng sẽ ngấm xuống mạch nước ngầm hoặc được ăn bởi những động vật
                            thuỷ sinh, cá tôm theo chuỗi thức ăn lại quay về với con người…
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-banner" >
                <div class="container container--small" >
                    <div class="wrapper" >
                        <div class="description" >
                            <p >
                                Những năm 60, bà tôi giặt quần áo bằng bồ hòn, gội đầu bằng bồ kết, rửa bát bằng xơ mướp, dưỡng da bằng nước gạo. Những năm 80, mẹ tôi giặt quần áo bằng xà phòng cục, tắm bằng xà phòng cục – xà phòng làm từ dầu dừa và mỡ lợn. Và tôi - những năm 2000, bắt đầu dùng bột giặt trắng sáng, nước xả vải mềm bông, gel rửa bát đậm đặc, sữa tắm dưỡng thể, dầu gội siêu mượt, kem dưỡng da, sữa rửa mặt, keo xịt tóc...
                            </p>
                            <p >
                                5 năm trước, tôi đã không còn đếm được trong nhà có bao nhiêu thứ hoá mỹ phẩm công nghiệp, phục vụ – hay đúng hơn là xoi mói đến từng nhu cầu nhỏ tí teo thầm kín của con người để kiếm tiền: nước tẩy bếp ga, bình xịt kính, gel rửa tay khô, bọt cạo râu, dầu massage, nến thơm, xà phòng diệt khuẩn…
                            </p>
                        </div>
                        <div class="banner" >
                            <div class="image" >
                                <img src="https://assets.comem.vn/images/abouts/Rectangle 22 copy 3.jpg" alt="Chuyện của cỏ" >
                                <span class="image-element" >
                                    <img src="https://assets.comem.vn/images/abouts/khuynh-diep.png" alt="Huynh diep" >
                                </span>
                                <span class="image-element bottom" >

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" >
                <div class="container container--small" >
                    <div class="description" >
                        <p >Cùng lúc đó là biến đổi khí hậu, là tỷ lệ ung thư tăng cao trẻ hoá đột biến, là biết bao
                            nhiêu bệnh tật và virus kỳ lạ lây lan trên trái đất này!</p>
                    </div>
                </div>
            </div>
            <div class="content" >
                <div class="container container--medium" >
                    <img class="one-whole" src="https://assets.comem.vn/images/abouts/anh.jpg" alt="Chuyện của cỏ" >
                </div>
                <div class="container container--small" >
                    <div class="description" >
                        <p >Cho đến khi tôi sực tỉnh, rằng nếu mình định làm điều gì đó tốt đẹp cho cuộc đời này, chắc
                            chắn phải bắt đầu ngay từ những thứ nhỏ bé. Tôi bắt đầu Ước mơ Xanh của mình, nghiên cứu
                            những sản phẩm thuần tuý, tối giản, chỉ tập trung vào Mục đích sử dụng của chính nó. Nghĩa
                            là nước giặt thì chỉ cần giặt sạch, chứ không cần phải nhiều bọt. Nghĩa là dưỡng da dưỡng
                            tóc thì để da tóc khoẻ từ gốc chứ không cần cảm giác giả mướt tay từ silicon. Tôi từ chối
                            mọi sản phẩm chứa hạt vi nhựa, chỉ dùng cafe xay mịn và muối biển để tẩy tế bào chết. Tôi
                            không dùng những hoá chất tẩy rửa mà thay bằng xà bông dầu dừa và quả bồ hòn xưa cũ…</p>
                    </div>
                </div>
            </div>
            <div class="content-banner" >
                <div class="container container--small" >
                    <div class="wrapper" >
                        <div class="banner" >
                            <div class="image" >
                                <img src="https://assets.comem.vn/images/abouts/Rectangle 22 copy 2.jpg" alt="Chuyện của cỏ" >
                                <span class="image-element" >

                                </span>
                            </div>
                        </div>
                        <div class="description" >
                            <p >
                                Tôi bắt đầu niềm vui nhỏ bé khi mỗi ngày lại có thêm vài người bạn tìm đến mỹ phẩm sạch,
                                mỗi tuần có thêm vài em bé được “cách ly” hoá chất, mỗi tháng có thêm những khách hàng
                                thông thái tìm đến, tin tưởng, và yêu quý.
                            </p>
                            <p >
                                Ấy là lúc tôi bắt đầu Cỏ Mềm, mong tạo ra những sản phẩm an lành cho cộng đồng, bằng tất
                                cả tri thức và nhiệt huyết, cùng tất cả tình yêu cho cuộc sống mến thương này.
                            </p>
                            <div class="article-social" >
                                <span class="label" >
                                    Chia sẻ:
                                </span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M10.665 2.657h1.46V.113A18.862 18.862 0 009.997 0C7.891 0 6.45 1.325 6.45 3.76V6H4.125v2.844h2.324V16h2.849V8.845h2.23L11.882 6H9.297V4.04c0-.822.222-1.384 1.367-1.384z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M8 0C3.582 0 0 3.316 0 7.407c0 2.331 1.163 4.41 2.981 5.768V16l2.724-1.495c.727.201 1.497.31 2.295.31 4.418 0 8-3.316 8-7.407S12.418 0 8 0zm.795 9.975L6.758 7.802 2.783 9.975l4.373-4.642 2.087 2.173 3.925-2.173-4.373 4.642z" fill="currentColor" ></path>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text=Mỹ phẩm thiên nhiên Cỏ Mềm &quot;Lành và Thật&quot; bảo vệ người dùng&amp;url=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M16 3.039a6.839 6.839 0 01-1.89.518 3.262 3.262 0 001.443-1.813 6.555 6.555 0 01-2.08.794 3.28 3.28 0 00-5.674 2.243c0 .26.022.51.076.748a9.284 9.284 0 01-6.761-3.431 3.285 3.285 0 001.008 4.384A3.24 3.24 0 01.64 6.078v.036a3.295 3.295 0 002.628 3.223 3.274 3.274 0 01-.86.108 2.9 2.9 0 01-.621-.056 3.311 3.311 0 003.065 2.285 6.59 6.59 0 01-4.067 1.399c-.269 0-.527-.012-.785-.045A9.234 9.234 0 005.032 14.5c6.036 0 9.336-5 9.336-9.334 0-.145-.005-.285-.012-.424A6.544 6.544 0 0016 3.039z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://www.pinterest.com/pin/create/button/?description=Mỹ phẩm thiên nhiên Cỏ Mềm &quot;Lành và Thật&quot; bảo vệ người dùng&amp;media=&amp;url=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M8.217 0C3.831 0 1.5 2.81 1.5 5.875c0 1.42.794 3.193 2.065 3.755.363.163.315-.036.627-1.23a.283.283 0 00-.068-.277C2.307 6.02 3.769 1.699 7.958 1.699c6.062 0 4.93 8.388 1.055 8.388-.999 0-1.743-.784-1.508-1.754.286-1.155.844-2.397.844-3.23 0-2.098-3.126-1.787-3.126.994 0 .859.304 1.439.304 1.439l-1.193 4.823c-.316 1.286.043 3.366.074 3.546.02.098.13.13.192.048.1-.13 1.315-1.864 1.656-3.118.124-.457.633-2.31.633-2.31.335.605 1.302 1.112 2.332 1.112 3.064 0 5.278-2.694 5.278-6.036C14.49 2.397 11.747 0 8.217 0z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="mailto:?to=&amp;subject=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M15.988 3.447c0-.019.013-.036.012-.054l-4.883 4.704 4.877 4.555c.003-.033-.006-.066-.006-.099V3.447zM10.372 8.821L8.379 10.74a.52.52 0 01-.717.006L5.674 8.892.765 13.624c.12.043.248.076.382.076h13.74c.2 0 .386-.06.549-.151L10.372 8.82z" fill="currentColor" ></path>
                                        <path d="M8.012 9.645l7.451-7.178a1.13 1.13 0 00-.575-.167H1.148c-.275 0-.526.106-.722.269l7.586 7.076zM0 3.622v8.931c0 .102.024.201.05.296L4.896 8.18 0 3.62z" fill="currentColor" ></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us-content__element left" >
                <img src="https://assets.comem.vn/images/abouts/anh-3.jpg" alt="Ảnh 3" >
            </div>
            <div class="about-us-content__element bottom" >
                <img src="https://assets.comem.vn/images/abouts/anh-2.png" alt="Ảnh 2" >
            </div>
        </section>
        <section class="home-newspapers" >
                <div class="container-full" >
                    <div class="home-newspapers__wrapper" >

                                                <div class="container" >
                            <div class="grid grid--five-columns newspapers-slide home-newspapers--slide slick-initialized slick-slider" ><button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" >Previous</button>
                                                                                                            <div class="slick-list draggable" ><div class="slick-track" style="opacity: 1; width: 2952px; transform: translate3d(0px, 0px, 0px); user-select: auto;"><div class="grid__column slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://vietnamnet.vn/vn/doi-song/co-mem-gop-quy-vac-xin-phong-covid-19-mua-vac-xin-cho-cbnv-744964.html" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Vietnamnet-Logo_84_m.jpg" alt="Cỏ Mềm góp Quỹ vắc xin phòng Covid-19, mua vắc xin cho CBNV" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://afamily.vn/chang-gi-manh-liet-va-ben-bi-ben-bang-tinh-me-danh-cho-con-chang-nguyen-lieu-nao-an-va-lanh-nhu-hat-gao-viet-nam-20210130204953839.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/afamily-(1)_m.jpg" alt="Chẳng gì mãnh liệt và bền bỉ bằng tình mẹ dành cho con, chẳng nguyên liệu nào an và lành như hạt gạo" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://cafef.vn/founder-co-mem-trao-di-san-pham-lanh-va-that-nhan-ve-niem-yeu-doi-thiet-tha-20201225091828217.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/logo-cafef_m.jpg" alt="Founder Cỏ Mềm: Trao đi sản phẩm lành và thật, nhận về niềm yêu đời thiết tha" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://kenh14.vn/chien-dich-5-viec-tot-phat-dong-gop-quy-xay-truong-cho-tre-em-vung-cao-20201213233536106.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Untitled-1_m.jpg" alt="Chiến dịch “5 việc tốt” phát động góp quỹ xây trường cho trẻ em vùng cao" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://eva.vn/lam-dep-moi-ngay/cach-chon-son-moi-an-toan-cho-me-bau-c291a370915.html" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/eva_m.png" alt="Cách chọn son môi an toàn cho mẹ bầu" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://cafef.vn/cach-hang-my-pham-co-mem-vuot-qua-dich-covid-19-chia-se-tai-facebook-summit-2020-20201118183719362.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/logo-cafef_58_m.jpg" alt="Cách hãng mỹ phẩm Cỏ Mềm vượt qua dịch COVID-19 chia sẻ tại Facebook Summit 2020" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://afamily.vn/xa-bong-thien-nhien-dai-su-cho-loi-song-an-toan-va-ben-vung-20210218215130658.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/afamily-(1)_38_m.jpg" alt="Xà bông thiên nhiên - &quot;Đại sứ&quot; cho lối sống an toàn và bền vững" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://www.24h.com.vn/tin-tuc-suc-khoe/kinh-nghiem-quy-gia-tu-dan-gian-tri-benh-rung-toc-gau-va-nam-da-dau-c683a883348.html" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/24h_m.jpg" alt="Kinh nghiệm quý giá từ dân gian trị bệnh rụng tóc, gàu và nấm da đầu" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://suckhoedoisong.vn/bai-thuoc-don-gian-giup-toc-rung-moc-lai-sau-chi-sau-2-thang-169133117.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/suc_khoe_va_doi_song_2_m.jpg" alt="Bài thuốc đơn giản giúp tóc rụng mọc lại sau chỉ sau 2 tháng" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://giadinh.net.vn/dep/me-2-con-xinh-dep-vuot-qua-noi-lo-rung-toc-nho-cach-goi-dau-don-gian-20171031155002017.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/giadinh636166969865599333_m.jpg" alt="Mẹ 2 con xinh đẹp vượt qua nỗi lo rụng tóc nhờ cách gội đầu đơn giản" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://dantri.com.vn/gia-dinh/xa-bong-thien-nhien-xu-huong-moi-nang-tam-thao-moc-viet-nam-20181026110831882.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Untitled-1_34_m.jpg" alt="Xà bông thiên nhiên – xu hướng mới nâng tầm thảo mộc Việt Nam" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://kenh14.vn/son-thien-nhien-tuyen-ngon-lam-dep-an-toan-cua-phai-dep-20190519080352368.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/kenh14_m.jpg" alt="Son thiên nhiên – Tuyên ngôn “làm đẹp an toàn” của phái đẹp" >
                                                </a>
                                            </div>
                                        </div></div></div>
                                                               <button class="slick-next slick-arrow" aria-label="Next" type="button"  aria-disabled="false">Next</button></div>
                        </div>
                    </div>
                </div>
            </section>',
            'featured_image' => 'abouts/z2699761275612_b75a85a2b9ea3d3749d83be7f2fb72df_28.jpg',
            'featured' => 1,
            'slug' => 'chuyen-cua-leuna',
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        About::insert([
            'title' => "Giải Thưởng “THƯƠNG HIỆU TRUYỀN CẢM HỨNG” CHÂU Á APEA 2021 Gọi Tên Cỏ Mềm",
            'description' => '<p ><strong >Tôi
                    bắt đầu Ước
                    mơ Xanh của
                    mình,
                    nghiên
                    cứu những
                    sản phẩm
                    thuần
                    tuý,
                    tối giản,
                    chỉ tập
                    trung
                    vào
                    mục
                    đính
                    sử dụng của
                    chính
                    nó.</strong></p>
            <p >Nghĩa là
                nước giặt
                thì chỉ
                cần giặt sạch,
                chứ không
                cần phải nhiều
                bọt. Nghĩa
                là dưỡng
                da dưỡng
                tóc
                thì để da
                tóc khoẻ
                từ gốc chứ
                không cần
                cảm giác
                giả mướt tay từ
                silicon.
                Tôi từ
                chối mọi sản
                phẩm chứa hạt vi
                nhựa, chỉ
                dùng cafe
                xay mịn
                và muối
                biển để tẩy tế
                bào chết.
                Tôi
                không
                dùng
                những hoá
                chất tẩy rửa
                mà thay
                bằng xà
                bông dầu
                dừa và
                quả bồ
                hòn xưa
                cũ...</p>',
            'content' => '<section class="about-us-head" >
            <div class="container container--small" >
                <h1 class="section-heading" >Chuyện của <span >Cỏ</span></h1>
                <p class="section-description" >
                    Khi quyết định xét nghiệm máu để làm tầm soát ung thư sớm, tôi nhận thức được rằng thế giới
                    này không còn là nơi an toàn để sống. Chúng ta đang thực sự ở trong một
                    cuộc chiến với rác thải và hoá chất độc hại - từng ngày, từng giờ - không súng đạn nhưng đầy thương
                    vong!
                </p>
            </div>
            <div class="container-full" >
                <div class="about-us-head__banner" >
                    <img src="https://assets.comem.vn/images/abouts/banner-2.png" alt="Chuyện của cỏ" >
                    <span class="image-element" >

                    </span>
                </div>
            </div>
        </section>
        <section class="about-us-content" >
            <div class="content" >
                <div class="container container--small" >
                    <div class="description" >
                        <blockquote >
                            Để nói về Cỏ Mềm, có 2 từ <b style="color: rgb(115, 129, 54); user-select: auto;">Lành &amp; Thật</b>
                            <br >
                            Để nói về mình, tôi mong được 2 chữ <b >Yêu Đời</b>
                        </blockquote>
                        <p >
                            Chúng ta đều cổ động đấu tranh bảo vệ môi trường, tìm hiểu về Hiệu ứng nhà kính, ô nhiễm Hạt
                            nhân mà không biết mỗi hành động vô tư hàng ngày phục vụ cuộc sống cá nhân và gia đình đều
                            đang tác động trực tiếp đến Trái đất. Mỗi ngày, để làm sạch bát đĩa quần áo bẩn, chúng ta sử
                            dụng hàng tấn xà phòng nước rửa bát chứa đầy chất hoạt động bề mặt, chất tạo bọt, chất bảo
                            quản, hương liệu độc hại. Sữa tắm, sữa rửa mặt, dầu gội, dầu xả cho tóc mượt, da mềm chứa
                            đầy silicon không phân huỷ, mỹ phẩm chứa đầy hạt vi nhựa tẩy tế bào chết… Riêng khối lượng
                            hạt vi nhựa tiêu thụ ở EU năm 2013 là 299 triệu tấn (UNEF). Những hoá chất và phụ gia độc hại
                            này nếu chưa thấm trực tiếp vào da thì sẽ bị thải xuống cống, rồi trôi ra sông hồ, ra biển,
                            không tự phân huỷ được. Chúng sẽ ngấm xuống mạch nước ngầm hoặc được ăn bởi những động vật
                            thuỷ sinh, cá tôm theo chuỗi thức ăn lại quay về với con người…
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-banner" >
                <div class="container container--small" >
                    <div class="wrapper" >
                        <div class="description" >
                            <p >
                                Những năm 60, bà tôi giặt quần áo bằng bồ hòn, gội đầu bằng bồ kết, rửa bát bằng xơ mướp, dưỡng da bằng nước gạo. Những năm 80, mẹ tôi giặt quần áo bằng xà phòng cục, tắm bằng xà phòng cục – xà phòng làm từ dầu dừa và mỡ lợn. Và tôi - những năm 2000, bắt đầu dùng bột giặt trắng sáng, nước xả vải mềm bông, gel rửa bát đậm đặc, sữa tắm dưỡng thể, dầu gội siêu mượt, kem dưỡng da, sữa rửa mặt, keo xịt tóc...
                            </p>
                            <p >
                                5 năm trước, tôi đã không còn đếm được trong nhà có bao nhiêu thứ hoá mỹ phẩm công nghiệp, phục vụ – hay đúng hơn là xoi mói đến từng nhu cầu nhỏ tí teo thầm kín của con người để kiếm tiền: nước tẩy bếp ga, bình xịt kính, gel rửa tay khô, bọt cạo râu, dầu massage, nến thơm, xà phòng diệt khuẩn…
                            </p>
                        </div>
                        <div class="banner" >
                            <div class="image" >
                                <img src="https://assets.comem.vn/images/abouts/Rectangle 22 copy 3.jpg" alt="Chuyện của cỏ" >
                                <span class="image-element" >
                                    <img src="https://assets.comem.vn/images/abouts/khuynh-diep.png" alt="Huynh diep" >
                                </span>
                                <span class="image-element bottom" >

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" >
                <div class="container container--small" >
                    <div class="description" >
                        <p >Cùng lúc đó là biến đổi khí hậu, là tỷ lệ ung thư tăng cao trẻ hoá đột biến, là biết bao
                            nhiêu bệnh tật và virus kỳ lạ lây lan trên trái đất này!</p>
                    </div>
                </div>
            </div>
            <div class="content" >
                <div class="container container--medium" >
                    <img class="one-whole" src="https://assets.comem.vn/images/abouts/anh.jpg" alt="Chuyện của cỏ" >
                </div>
                <div class="container container--small" >
                    <div class="description" >
                        <p >Cho đến khi tôi sực tỉnh, rằng nếu mình định làm điều gì đó tốt đẹp cho cuộc đời này, chắc
                            chắn phải bắt đầu ngay từ những thứ nhỏ bé. Tôi bắt đầu Ước mơ Xanh của mình, nghiên cứu
                            những sản phẩm thuần tuý, tối giản, chỉ tập trung vào Mục đích sử dụng của chính nó. Nghĩa
                            là nước giặt thì chỉ cần giặt sạch, chứ không cần phải nhiều bọt. Nghĩa là dưỡng da dưỡng
                            tóc thì để da tóc khoẻ từ gốc chứ không cần cảm giác giả mướt tay từ silicon. Tôi từ chối
                            mọi sản phẩm chứa hạt vi nhựa, chỉ dùng cafe xay mịn và muối biển để tẩy tế bào chết. Tôi
                            không dùng những hoá chất tẩy rửa mà thay bằng xà bông dầu dừa và quả bồ hòn xưa cũ…</p>
                    </div>
                </div>
            </div>
            <div class="content-banner" >
                <div class="container container--small" >
                    <div class="wrapper" >
                        <div class="banner" >
                            <div class="image" >
                                <img src="https://assets.comem.vn/images/abouts/Rectangle 22 copy 2.jpg" alt="Chuyện của cỏ" >
                                <span class="image-element" >

                                </span>
                            </div>
                        </div>
                        <div class="description" >
                            <p >
                                Tôi bắt đầu niềm vui nhỏ bé khi mỗi ngày lại có thêm vài người bạn tìm đến mỹ phẩm sạch,
                                mỗi tuần có thêm vài em bé được “cách ly” hoá chất, mỗi tháng có thêm những khách hàng
                                thông thái tìm đến, tin tưởng, và yêu quý.
                            </p>
                            <p >
                                Ấy là lúc tôi bắt đầu Cỏ Mềm, mong tạo ra những sản phẩm an lành cho cộng đồng, bằng tất
                                cả tri thức và nhiệt huyết, cùng tất cả tình yêu cho cuộc sống mến thương này.
                            </p>
                            <div class="article-social" >
                                <span class="label" >
                                    Chia sẻ:
                                </span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M10.665 2.657h1.46V.113A18.862 18.862 0 009.997 0C7.891 0 6.45 1.325 6.45 3.76V6H4.125v2.844h2.324V16h2.849V8.845h2.23L11.882 6H9.297V4.04c0-.822.222-1.384 1.367-1.384z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M8 0C3.582 0 0 3.316 0 7.407c0 2.331 1.163 4.41 2.981 5.768V16l2.724-1.495c.727.201 1.497.31 2.295.31 4.418 0 8-3.316 8-7.407S12.418 0 8 0zm.795 9.975L6.758 7.802 2.783 9.975l4.373-4.642 2.087 2.173 3.925-2.173-4.373 4.642z" fill="currentColor" ></path>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text=Mỹ phẩm thiên nhiên Cỏ Mềm &quot;Lành và Thật&quot; bảo vệ người dùng&amp;url=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M16 3.039a6.839 6.839 0 01-1.89.518 3.262 3.262 0 001.443-1.813 6.555 6.555 0 01-2.08.794 3.28 3.28 0 00-5.674 2.243c0 .26.022.51.076.748a9.284 9.284 0 01-6.761-3.431 3.285 3.285 0 001.008 4.384A3.24 3.24 0 01.64 6.078v.036a3.295 3.295 0 002.628 3.223 3.274 3.274 0 01-.86.108 2.9 2.9 0 01-.621-.056 3.311 3.311 0 003.065 2.285 6.59 6.59 0 01-4.067 1.399c-.269 0-.527-.012-.785-.045A9.234 9.234 0 005.032 14.5c6.036 0 9.336-5 9.336-9.334 0-.145-.005-.285-.012-.424A6.544 6.544 0 0016 3.039z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://www.pinterest.com/pin/create/button/?description=Mỹ phẩm thiên nhiên Cỏ Mềm &quot;Lành và Thật&quot; bảo vệ người dùng&amp;media=&amp;url=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M8.217 0C3.831 0 1.5 2.81 1.5 5.875c0 1.42.794 3.193 2.065 3.755.363.163.315-.036.627-1.23a.283.283 0 00-.068-.277C2.307 6.02 3.769 1.699 7.958 1.699c6.062 0 4.93 8.388 1.055 8.388-.999 0-1.743-.784-1.508-1.754.286-1.155.844-2.397.844-3.23 0-2.098-3.126-1.787-3.126.994 0 .859.304 1.439.304 1.439l-1.193 4.823c-.316 1.286.043 3.366.074 3.546.02.098.13.13.192.048.1-.13 1.315-1.864 1.656-3.118.124-.457.633-2.31.633-2.31.335.605 1.302 1.112 2.332 1.112 3.064 0 5.278-2.694 5.278-6.036C14.49 2.397 11.747 0 8.217 0z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="mailto:?to=&amp;subject=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M15.988 3.447c0-.019.013-.036.012-.054l-4.883 4.704 4.877 4.555c.003-.033-.006-.066-.006-.099V3.447zM10.372 8.821L8.379 10.74a.52.52 0 01-.717.006L5.674 8.892.765 13.624c.12.043.248.076.382.076h13.74c.2 0 .386-.06.549-.151L10.372 8.82z" fill="currentColor" ></path>
                                        <path d="M8.012 9.645l7.451-7.178a1.13 1.13 0 00-.575-.167H1.148c-.275 0-.526.106-.722.269l7.586 7.076zM0 3.622v8.931c0 .102.024.201.05.296L4.896 8.18 0 3.62z" fill="currentColor" ></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us-content__element left" >
                <img src="https://assets.comem.vn/images/abouts/anh-3.jpg" alt="Ảnh 3" >
            </div>
            <div class="about-us-content__element bottom" >
                <img src="https://assets.comem.vn/images/abouts/anh-2.png" alt="Ảnh 2" >
            </div>
        </section>
        <section class="home-newspapers" >
                <div class="container-full" >
                    <div class="home-newspapers__wrapper" >

                                                <div class="container" >
                            <div class="grid grid--five-columns newspapers-slide home-newspapers--slide slick-initialized slick-slider" ><button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" >Previous</button>
                                                                                                            <div class="slick-list draggable" ><div class="slick-track" style="opacity: 1; width: 2952px; transform: translate3d(0px, 0px, 0px); user-select: auto;"><div class="grid__column slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://vietnamnet.vn/vn/doi-song/co-mem-gop-quy-vac-xin-phong-covid-19-mua-vac-xin-cho-cbnv-744964.html" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Vietnamnet-Logo_84_m.jpg" alt="Cỏ Mềm góp Quỹ vắc xin phòng Covid-19, mua vắc xin cho CBNV" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://afamily.vn/chang-gi-manh-liet-va-ben-bi-ben-bang-tinh-me-danh-cho-con-chang-nguyen-lieu-nao-an-va-lanh-nhu-hat-gao-viet-nam-20210130204953839.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/afamily-(1)_m.jpg" alt="Chẳng gì mãnh liệt và bền bỉ bằng tình mẹ dành cho con, chẳng nguyên liệu nào an và lành như hạt gạo" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://cafef.vn/founder-co-mem-trao-di-san-pham-lanh-va-that-nhan-ve-niem-yeu-doi-thiet-tha-20201225091828217.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/logo-cafef_m.jpg" alt="Founder Cỏ Mềm: Trao đi sản phẩm lành và thật, nhận về niềm yêu đời thiết tha" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://kenh14.vn/chien-dich-5-viec-tot-phat-dong-gop-quy-xay-truong-cho-tre-em-vung-cao-20201213233536106.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Untitled-1_m.jpg" alt="Chiến dịch “5 việc tốt” phát động góp quỹ xây trường cho trẻ em vùng cao" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://eva.vn/lam-dep-moi-ngay/cach-chon-son-moi-an-toan-cho-me-bau-c291a370915.html" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/eva_m.png" alt="Cách chọn son môi an toàn cho mẹ bầu" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://cafef.vn/cach-hang-my-pham-co-mem-vuot-qua-dich-covid-19-chia-se-tai-facebook-summit-2020-20201118183719362.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/logo-cafef_58_m.jpg" alt="Cách hãng mỹ phẩm Cỏ Mềm vượt qua dịch COVID-19 chia sẻ tại Facebook Summit 2020" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://afamily.vn/xa-bong-thien-nhien-dai-su-cho-loi-song-an-toan-va-ben-vung-20210218215130658.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/afamily-(1)_38_m.jpg" alt="Xà bông thiên nhiên - &quot;Đại sứ&quot; cho lối sống an toàn và bền vững" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://www.24h.com.vn/tin-tuc-suc-khoe/kinh-nghiem-quy-gia-tu-dan-gian-tri-benh-rung-toc-gau-va-nam-da-dau-c683a883348.html" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/24h_m.jpg" alt="Kinh nghiệm quý giá từ dân gian trị bệnh rụng tóc, gàu và nấm da đầu" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://suckhoedoisong.vn/bai-thuoc-don-gian-giup-toc-rung-moc-lai-sau-chi-sau-2-thang-169133117.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/suc_khoe_va_doi_song_2_m.jpg" alt="Bài thuốc đơn giản giúp tóc rụng mọc lại sau chỉ sau 2 tháng" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://giadinh.net.vn/dep/me-2-con-xinh-dep-vuot-qua-noi-lo-rung-toc-nho-cach-goi-dau-don-gian-20171031155002017.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/giadinh636166969865599333_m.jpg" alt="Mẹ 2 con xinh đẹp vượt qua nỗi lo rụng tóc nhờ cách gội đầu đơn giản" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://dantri.com.vn/gia-dinh/xa-bong-thien-nhien-xu-huong-moi-nang-tam-thao-moc-viet-nam-20181026110831882.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Untitled-1_34_m.jpg" alt="Xà bông thiên nhiên – xu hướng mới nâng tầm thảo mộc Việt Nam" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://kenh14.vn/son-thien-nhien-tuyen-ngon-lam-dep-an-toan-cua-phai-dep-20190519080352368.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/kenh14_m.jpg" alt="Son thiên nhiên – Tuyên ngôn “làm đẹp an toàn” của phái đẹp" >
                                                </a>
                                            </div>
                                        </div></div></div>
                                                               <button class="slick-next slick-arrow" aria-label="Next" type="button"  aria-disabled="false">Next</button></div>
                        </div>
                    </div>
                </div>
            </section>',
            'featured_image' => 'abouts/nhamay2.jpg',
            'featured' => 0,
            'slug' => 'nha-may-san-xuat-co-mem-san-xuat-my-pham-theo-tieu-chuan-cgmp',
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        About::insert([
            'title' => "Nhà máy sản xuất Cỏ Mềm sản xuất mỹ phẩm theo tiêu chuẩn cGMP",
            'description' => '<p ><strong >Tôi
                    bắt đầu Ước
                    mơ Xanh của
                    mình,
                    nghiên
                    cứu những
                    sản phẩm
                    thuần
                    tuý,
                    tối giản,
                    chỉ tập
                    trung
                    vào
                    mục
                    đính
                    sử dụng của
                    chính
                    nó.</strong></p>
            <p >Nghĩa là
                nước giặt
                thì chỉ
                cần giặt sạch,
                chứ không
                cần phải nhiều
                bọt. Nghĩa
                là dưỡng
                da dưỡng
                tóc
                thì để da
                tóc khoẻ
                từ gốc chứ
                không cần
                cảm giác
                giả mướt tay từ
                silicon.
                Tôi từ
                chối mọi sản
                phẩm chứa hạt vi
                nhựa, chỉ
                dùng cafe
                xay mịn
                và muối
                biển để tẩy tế
                bào chết.
                Tôi
                không
                dùng
                những hoá
                chất tẩy rửa
                mà thay
                bằng xà
                bông dầu
                dừa và
                quả bồ
                hòn xưa
                cũ...</p>',
            'content' => '<section class="about-us-head" >
            <div class="container container--small" >
                <h1 class="section-heading" >Chuyện của <span >Cỏ</span></h1>
                <p class="section-description" >
                    Khi quyết định xét nghiệm máu để làm tầm soát ung thư sớm, tôi nhận thức được rằng thế giới
                    này không còn là nơi an toàn để sống. Chúng ta đang thực sự ở trong một
                    cuộc chiến với rác thải và hoá chất độc hại - từng ngày, từng giờ - không súng đạn nhưng đầy thương
                    vong!
                </p>
            </div>
            <div class="container-full" >
                <div class="about-us-head__banner" >
                    <img src="https://assets.comem.vn/images/abouts/banner-2.png" alt="Chuyện của cỏ" >
                    <span class="image-element" >

                    </span>
                </div>
            </div>
        </section>
        <section class="about-us-content" >
            <div class="content" >
                <div class="container container--small" >
                    <div class="description" >
                        <blockquote >
                            Để nói về Cỏ Mềm, có 2 từ <b style="color: rgb(115, 129, 54); user-select: auto;">Lành &amp; Thật</b>
                            <br >
                            Để nói về mình, tôi mong được 2 chữ <b >Yêu Đời</b>
                        </blockquote>
                        <p >
                            Chúng ta đều cổ động đấu tranh bảo vệ môi trường, tìm hiểu về Hiệu ứng nhà kính, ô nhiễm Hạt
                            nhân mà không biết mỗi hành động vô tư hàng ngày phục vụ cuộc sống cá nhân và gia đình đều
                            đang tác động trực tiếp đến Trái đất. Mỗi ngày, để làm sạch bát đĩa quần áo bẩn, chúng ta sử
                            dụng hàng tấn xà phòng nước rửa bát chứa đầy chất hoạt động bề mặt, chất tạo bọt, chất bảo
                            quản, hương liệu độc hại. Sữa tắm, sữa rửa mặt, dầu gội, dầu xả cho tóc mượt, da mềm chứa
                            đầy silicon không phân huỷ, mỹ phẩm chứa đầy hạt vi nhựa tẩy tế bào chết… Riêng khối lượng
                            hạt vi nhựa tiêu thụ ở EU năm 2013 là 299 triệu tấn (UNEF). Những hoá chất và phụ gia độc hại
                            này nếu chưa thấm trực tiếp vào da thì sẽ bị thải xuống cống, rồi trôi ra sông hồ, ra biển,
                            không tự phân huỷ được. Chúng sẽ ngấm xuống mạch nước ngầm hoặc được ăn bởi những động vật
                            thuỷ sinh, cá tôm theo chuỗi thức ăn lại quay về với con người…
                        </p>
                    </div>
                </div>
            </div>
            <div class="content-banner" >
                <div class="container container--small" >
                    <div class="wrapper" >
                        <div class="description" >
                            <p >
                                Những năm 60, bà tôi giặt quần áo bằng bồ hòn, gội đầu bằng bồ kết, rửa bát bằng xơ mướp, dưỡng da bằng nước gạo. Những năm 80, mẹ tôi giặt quần áo bằng xà phòng cục, tắm bằng xà phòng cục – xà phòng làm từ dầu dừa và mỡ lợn. Và tôi - những năm 2000, bắt đầu dùng bột giặt trắng sáng, nước xả vải mềm bông, gel rửa bát đậm đặc, sữa tắm dưỡng thể, dầu gội siêu mượt, kem dưỡng da, sữa rửa mặt, keo xịt tóc...
                            </p>
                            <p >
                                5 năm trước, tôi đã không còn đếm được trong nhà có bao nhiêu thứ hoá mỹ phẩm công nghiệp, phục vụ – hay đúng hơn là xoi mói đến từng nhu cầu nhỏ tí teo thầm kín của con người để kiếm tiền: nước tẩy bếp ga, bình xịt kính, gel rửa tay khô, bọt cạo râu, dầu massage, nến thơm, xà phòng diệt khuẩn…
                            </p>
                        </div>
                        <div class="banner" >
                            <div class="image" >
                                <img src="https://assets.comem.vn/images/abouts/Rectangle 22 copy 3.jpg" alt="Chuyện của cỏ" >
                                <span class="image-element" >
                                    <img src="https://assets.comem.vn/images/abouts/khuynh-diep.png" alt="Huynh diep" >
                                </span>
                                <span class="image-element bottom" >

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" >
                <div class="container container--small" >
                    <div class="description" >
                        <p >Cùng lúc đó là biến đổi khí hậu, là tỷ lệ ung thư tăng cao trẻ hoá đột biến, là biết bao
                            nhiêu bệnh tật và virus kỳ lạ lây lan trên trái đất này!</p>
                    </div>
                </div>
            </div>
            <div class="content" >
                <div class="container container--medium" >
                    <img class="one-whole" src="https://assets.comem.vn/images/abouts/anh.jpg" alt="Chuyện của cỏ" >
                </div>
                <div class="container container--small" >
                    <div class="description" >
                        <p >Cho đến khi tôi sực tỉnh, rằng nếu mình định làm điều gì đó tốt đẹp cho cuộc đời này, chắc
                            chắn phải bắt đầu ngay từ những thứ nhỏ bé. Tôi bắt đầu Ước mơ Xanh của mình, nghiên cứu
                            những sản phẩm thuần tuý, tối giản, chỉ tập trung vào Mục đích sử dụng của chính nó. Nghĩa
                            là nước giặt thì chỉ cần giặt sạch, chứ không cần phải nhiều bọt. Nghĩa là dưỡng da dưỡng
                            tóc thì để da tóc khoẻ từ gốc chứ không cần cảm giác giả mướt tay từ silicon. Tôi từ chối
                            mọi sản phẩm chứa hạt vi nhựa, chỉ dùng cafe xay mịn và muối biển để tẩy tế bào chết. Tôi
                            không dùng những hoá chất tẩy rửa mà thay bằng xà bông dầu dừa và quả bồ hòn xưa cũ…</p>
                    </div>
                </div>
            </div>
            <div class="content-banner" >
                <div class="container container--small" >
                    <div class="wrapper" >
                        <div class="banner" >
                            <div class="image" >
                                <img src="https://assets.comem.vn/images/abouts/Rectangle 22 copy 2.jpg" alt="Chuyện của cỏ" >
                                <span class="image-element" >

                                </span>
                            </div>
                        </div>
                        <div class="description" >
                            <p >
                                Tôi bắt đầu niềm vui nhỏ bé khi mỗi ngày lại có thêm vài người bạn tìm đến mỹ phẩm sạch,
                                mỗi tuần có thêm vài em bé được “cách ly” hoá chất, mỗi tháng có thêm những khách hàng
                                thông thái tìm đến, tin tưởng, và yêu quý.
                            </p>
                            <p >
                                Ấy là lúc tôi bắt đầu Cỏ Mềm, mong tạo ra những sản phẩm an lành cho cộng đồng, bằng tất
                                cả tri thức và nhiệt huyết, cùng tất cả tình yêu cho cuộc sống mến thương này.
                            </p>
                            <div class="article-social" >
                                <span class="label" >
                                    Chia sẻ:
                                </span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M10.665 2.657h1.46V.113A18.862 18.862 0 009.997 0C7.891 0 6.45 1.325 6.45 3.76V6H4.125v2.844h2.324V16h2.849V8.845h2.23L11.882 6H9.297V4.04c0-.822.222-1.384 1.367-1.384z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M8 0C3.582 0 0 3.316 0 7.407c0 2.331 1.163 4.41 2.981 5.768V16l2.724-1.495c.727.201 1.497.31 2.295.31 4.418 0 8-3.316 8-7.407S12.418 0 8 0zm.795 9.975L6.758 7.802 2.783 9.975l4.373-4.642 2.087 2.173 3.925-2.173-4.373 4.642z" fill="currentColor" ></path>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text=Mỹ phẩm thiên nhiên Cỏ Mềm &quot;Lành và Thật&quot; bảo vệ người dùng&amp;url=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M16 3.039a6.839 6.839 0 01-1.89.518 3.262 3.262 0 001.443-1.813 6.555 6.555 0 01-2.08.794 3.28 3.28 0 00-5.674 2.243c0 .26.022.51.076.748a9.284 9.284 0 01-6.761-3.431 3.285 3.285 0 001.008 4.384A3.24 3.24 0 01.64 6.078v.036a3.295 3.295 0 002.628 3.223 3.274 3.274 0 01-.86.108 2.9 2.9 0 01-.621-.056 3.311 3.311 0 003.065 2.285 6.59 6.59 0 01-4.067 1.399c-.269 0-.527-.012-.785-.045A9.234 9.234 0 005.032 14.5c6.036 0 9.336-5 9.336-9.334 0-.145-.005-.285-.012-.424A6.544 6.544 0 0016 3.039z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://www.pinterest.com/pin/create/button/?description=Mỹ phẩm thiên nhiên Cỏ Mềm &quot;Lành và Thật&quot; bảo vệ người dùng&amp;media=&amp;url=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <g clip-path="url(#clip0)" >
                                            <path d="M8.217 0C3.831 0 1.5 2.81 1.5 5.875c0 1.42.794 3.193 2.065 3.755.363.163.315-.036.627-1.23a.283.283 0 00-.068-.277C2.307 6.02 3.769 1.699 7.958 1.699c6.062 0 4.93 8.388 1.055 8.388-.999 0-1.743-.784-1.508-1.754.286-1.155.844-2.397.844-3.23 0-2.098-3.126-1.787-3.126.994 0 .859.304 1.439.304 1.439l-1.193 4.823c-.316 1.286.043 3.366.074 3.546.02.098.13.13.192.048.1-.13 1.315-1.864 1.656-3.118.124-.457.633-2.31.633-2.31.335.605 1.302 1.112 2.332 1.112 3.064 0 5.278-2.694 5.278-6.036C14.49 2.397 11.747 0 8.217 0z" fill="currentColor" ></path>
                                        </g>
                                        <defs >
                                            <clipPath id="clip0" >
                                                <path fill="#fff" d="M0 0h16v16H0z" ></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="mailto:?to=&amp;subject=https://comem.vn/ve-co-mem" class="item" target="_blank" rel="noopener noreferrer nofollow" >
                                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M15.988 3.447c0-.019.013-.036.012-.054l-4.883 4.704 4.877 4.555c.003-.033-.006-.066-.006-.099V3.447zM10.372 8.821L8.379 10.74a.52.52 0 01-.717.006L5.674 8.892.765 13.624c.12.043.248.076.382.076h13.74c.2 0 .386-.06.549-.151L10.372 8.82z" fill="currentColor" ></path>
                                        <path d="M8.012 9.645l7.451-7.178a1.13 1.13 0 00-.575-.167H1.148c-.275 0-.526.106-.722.269l7.586 7.076zM0 3.622v8.931c0 .102.024.201.05.296L4.896 8.18 0 3.62z" fill="currentColor" ></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us-content__element left" >
                <img src="https://assets.comem.vn/images/abouts/anh-3.jpg" alt="Ảnh 3" >
            </div>
            <div class="about-us-content__element bottom" >
                <img src="https://assets.comem.vn/images/abouts/anh-2.png" alt="Ảnh 2" >
            </div>
        </section>
        <section class="home-newspapers" >
                <div class="container-full" >
                    <div class="home-newspapers__wrapper" >

                                                <div class="container" >
                            <div class="grid grid--five-columns newspapers-slide home-newspapers--slide slick-initialized slick-slider" ><button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" >Previous</button>
                                                                                                            <div class="slick-list draggable" ><div class="slick-track" style="opacity: 1; width: 2952px; transform: translate3d(0px, 0px, 0px); user-select: auto;"><div class="grid__column slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://vietnamnet.vn/vn/doi-song/co-mem-gop-quy-vac-xin-phong-covid-19-mua-vac-xin-cho-cbnv-744964.html" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Vietnamnet-Logo_84_m.jpg" alt="Cỏ Mềm góp Quỹ vắc xin phòng Covid-19, mua vắc xin cho CBNV" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://afamily.vn/chang-gi-manh-liet-va-ben-bi-ben-bang-tinh-me-danh-cho-con-chang-nguyen-lieu-nao-an-va-lanh-nhu-hat-gao-viet-nam-20210130204953839.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/afamily-(1)_m.jpg" alt="Chẳng gì mãnh liệt và bền bỉ bằng tình mẹ dành cho con, chẳng nguyên liệu nào an và lành như hạt gạo" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://cafef.vn/founder-co-mem-trao-di-san-pham-lanh-va-that-nhan-ve-niem-yeu-doi-thiet-tha-20201225091828217.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/logo-cafef_m.jpg" alt="Founder Cỏ Mềm: Trao đi sản phẩm lành và thật, nhận về niềm yêu đời thiết tha" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://kenh14.vn/chien-dich-5-viec-tot-phat-dong-gop-quy-xay-truong-cho-tre-em-vung-cao-20201213233536106.chn" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Untitled-1_m.jpg" alt="Chiến dịch “5 việc tốt” phát động góp quỹ xây trường cho trẻ em vùng cao" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://eva.vn/lam-dep-moi-ngay/cach-chon-son-moi-an-toan-cho-me-bau-c291a370915.html" rel="noopener noreferrer nofollow" tabindex="0" >
                                                    <img src="https://static.comem.vn/uploads/August2021/eva_m.png" alt="Cách chọn son môi an toàn cho mẹ bầu" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://cafef.vn/cach-hang-my-pham-co-mem-vuot-qua-dich-covid-19-chia-se-tai-facebook-summit-2020-20201118183719362.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/logo-cafef_58_m.jpg" alt="Cách hãng mỹ phẩm Cỏ Mềm vượt qua dịch COVID-19 chia sẻ tại Facebook Summit 2020" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://afamily.vn/xa-bong-thien-nhien-dai-su-cho-loi-song-an-toan-va-ben-vung-20210218215130658.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/afamily-(1)_38_m.jpg" alt="Xà bông thiên nhiên - &quot;Đại sứ&quot; cho lối sống an toàn và bền vững" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://www.24h.com.vn/tin-tuc-suc-khoe/kinh-nghiem-quy-gia-tu-dan-gian-tri-benh-rung-toc-gau-va-nam-da-dau-c683a883348.html" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/24h_m.jpg" alt="Kinh nghiệm quý giá từ dân gian trị bệnh rụng tóc, gàu và nấm da đầu" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://suckhoedoisong.vn/bai-thuoc-don-gian-giup-toc-rung-moc-lai-sau-chi-sau-2-thang-169133117.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/suc_khoe_va_doi_song_2_m.jpg" alt="Bài thuốc đơn giản giúp tóc rụng mọc lại sau chỉ sau 2 tháng" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://giadinh.net.vn/dep/me-2-con-xinh-dep-vuot-qua-noi-lo-rung-toc-nho-cach-goi-dau-don-gian-20171031155002017.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/giadinh636166969865599333_m.jpg" alt="Mẹ 2 con xinh đẹp vượt qua nỗi lo rụng tóc nhờ cách gội đầu đơn giản" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://dantri.com.vn/gia-dinh/xa-bong-thien-nhien-xu-huong-moi-nang-tam-thao-moc-viet-nam-20181026110831882.htm" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/Untitled-1_34_m.jpg" alt="Xà bông thiên nhiên – xu hướng mới nâng tầm thảo mộc Việt Nam" >
                                                </a>
                                            </div>
                                        </div><div class="grid__column slick-slide" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 246px; user-select: auto;">
                                            <div class="newspapers-item" >
                                                <a href="https://kenh14.vn/son-thien-nhien-tuyen-ngon-lam-dep-an-toan-cua-phai-dep-20190519080352368.chn" rel="noopener noreferrer nofollow" tabindex="-1" >
                                                    <img src="https://static.comem.vn/uploads/August2021/kenh14_m.jpg" alt="Son thiên nhiên – Tuyên ngôn “làm đẹp an toàn” của phái đẹp" >
                                                </a>
                                            </div>
                                        </div></div></div>
                                                               <button class="slick-next slick-arrow" aria-label="Next" type="button"  aria-disabled="false">Next</button></div>
                        </div>
                    </div>
                </div>
            </section>',
            'featured_image' => 'abouts/thuong_hieu.jpg',
            'featured' => 0,
            'slug' => 'giai-thuong-thuong-hieu-truyen-cam-hung-chau-a-apea-2021-goi-ten-co-mem',
            'title_seo' => '',
            'meta_des' => '',
            'meta_key' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}