@extends('layouts.client')

@section('title', 'Dịch vụ')

@section('breadcrumb', 'Dịch vụ')

@section('content')

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{ asset('assets/clients/img/service/11.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// DỊCH VỤ ĐÁNG TIN CẬY</h6>
                        <h1 class="section-title">Rau Sạch Tươi Ngon &amp; An Toàn<span>.</span></h1>
                        <p>Chúng tôi cung cấp rau củ tươi sạch, được chọn lọc kỹ lưỡng từ nguồn nông sản an toàn, đảm bảo chất lượng
                            cho từng bữa ăn gia đình bạn.</p>
                    </div>
                    <div class="about-us-info-wrap-inner about-us-info-devide">
                        <p>Chúng tôi cam kết mang đến thực phẩm tươi sạch mỗi ngày với quy trình kiểm soát chất lượng nghiêm ngặt.
                            Ưu tiên sức khỏe người dùng, giao hàng nhanh chóng và đảm bảo độ tươi ngon khi đến tay khách hàng.
                        </p>
                        <div class="list-item-with-icon">
                            <ul>
                                <li><a href="contact.html">Giao hàng tận nơi 24/7 miễn phí</a></li>
                                <li><a href="team.html">Nguồn nông sản uy tín</a></li>
                                <li><a href="service-details.html">Rau củ tươi sạch mỗi ngày</a></li>
                                <li><a href="shop.html">Đa dạng sản phẩm nông sản</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color---">Dịch Vụ Của Chúng Tôi</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}" alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau Củ Hữu Cơ Tươi Sạch</a></h3>
                        <p>Cung cấp rau củ được trồng theo tiêu chuẩn an toàn, không hóa chất độc hại, đảm bảo tươi ngon mỗi ngày.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}" alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Giao Hàng Nhanh Trong Ngày</a></h3>
                        <p>Giao rau củ tươi sạch đến tận nhà bạn trong thời gian ngắn nhất, giữ nguyên độ tươi ngon.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}" alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Nguồn Nông Sản Uy Tín</a></h3>
                        <p>Liên kết trực tiếp với nông trại, đảm bảo nguồn gốc rõ ràng và chất lượng đạt chuẩn an toàn thực phẩm.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}" alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Thực Phẩm Sạch Mỗi Ngày</a></h3>
                        <p>Cung cấp đa dạng rau củ quả tươi mới mỗi ngày, phục vụ bữa ăn gia đình an toàn và dinh dưỡng.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}" alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Đặt Hàng Dễ Dàng</a></h3>
                        <p>Giao diện thân thiện, giúp bạn đặt rau sạch nhanh chóng chỉ với vài thao tác đơn giản.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}" alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Hỗ Trợ Khách Hàng 24/7</a></h3>
                        <p>Luôn sẵn sàng hỗ trợ bạn mọi lúc về đơn hàng, chất lượng sản phẩm và tư vấn thực phẩm sạch.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- OUR JOURNEY AREA START -->
<div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9"
    data-bg="img/bg/8.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__our-journey-wrap ">
                    <ul>
                        <li><span class="ltn__journey-icon">2015</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Khởi Nguồn Từ Nông Trại</h3>
                                            <p>Chúng tôi bắt đầu với mong muốn mang rau sạch từ nông trại đến trực tiếp bữa ăn gia đình Việt.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="active"><span class="ltn__journey-icon">2017</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Liên Kết Nông Trại</h3>
                                            <p>Mở rộng hợp tác với các nông hộ, xây dựng quy trình trồng rau an toàn, không hóa chất độc hại.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2019</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Chuẩn Hóa Chất Lượng</h3>
                                            <p>Áp dụng quy trình kiểm soát chất lượng nghiêm ngặt, đảm bảo rau củ luôn tươi sạch và an toàn.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2022</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Mở Rộng Giao Hàng</h3>
                                            <p>Phát triển hệ thống giao hàng nhanh, đưa rau sạch đến tận tay khách hàng trong thời gian ngắn nhất.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2025</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Thương Hiệu Rau Sạch Uy Tín</h3>
                                            <p>Trở thành địa chỉ tin cậy cung cấp rau củ sạch, phục vụ hàng ngàn gia đình mỗi ngày.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- OUR JOURNEY AREA END -->

@endsection