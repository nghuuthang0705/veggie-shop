@extends('layouts.client')

@section('title', 'FAQ')

@section('breadcrumb', 'Những câu hỏi thường gặp')

@section('content')

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Làm thế nào để đặt mua rau sạch?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Bạn có thể chọn sản phẩm trực tiếp trên website, thêm vào giỏ hàng và tiến hành thanh toán.
                                        Đơn hàng sẽ được xác nhận ngay sau khi đặt.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                aria-expanded="true">
                                Tôi có thể yêu cầu hoàn tiền hoặc đổi trả không?
                            </h6>
                            <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                <div class="card-body">
                                    <div class="ltn__video-img alignleft">
                                        <img src="{{ asset('assets/clients/img/bg/17.jpg') }}" alt="video popup bg image">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                            href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <p>Chúng tôi hỗ trợ đổi trả trong vòng 3 ngày nếu sản phẩm bị hư hỏng, không đảm bảo chất lượng hoặc sai đơn hàng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-3" aria-expanded="false">
                                Tôi là khách hàng mới, nên bắt đầu như thế nào?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Hãy chọn các sản phẩm rau củ bạn cần, thêm vào giỏ hàng và đặt mua.
                                        Bạn cũng có thể liên hệ để được tư vấn thực phẩm phù hợp.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-4" aria-expanded="false">
                                Chính sách đổi trả sản phẩm như thế nào?
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Sản phẩm có thể được đổi trả trong vòng 3 ngày nếu không đảm bảo độ tươi ngon hoặc bị lỗi từ phía cửa hàng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Thông tin cá nhân của tôi có được bảo mật không?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi cam kết bảo mật toàn bộ thông tin khách hàng và chỉ sử dụng cho mục đích xử lý đơn hàng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-6" aria-expanded="false">
                                Tôi có thể sử dụng mã giảm giá như thế nào?
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Bạn có thể nhập mã giảm giá tại trang thanh toán. Nếu mã hợp lệ, hệ thống sẽ tự động áp dụng ưu đãi.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-7" aria-expanded="false">
                                Tôi có thể thanh toán bằng cách nào?
                            </h6>
                            <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi hỗ trợ thanh toán khi nhận hàng (COD), chuyển khoản ngân hàng
                                        và các phương thức thanh toán trực tuyến phổ biến.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Bạn vẫn cần hỗ trợ?</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="contact.html" class="theme-btn-1 btn">Liên Hệ Ngay</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +84 123 456 789</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// Đăng Ký</h6>
                        <h4 class="ltn__widget-title">Nhận Tin Khuyến Mãi</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Nhập email của bạn">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/banner-3.jpg') }}" alt="Banner rau sạch"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- FAQ AREA START -->

<!-- COUNTER UP AREA START -->
<div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="{{ asset('assets/clientsimg/bg/5.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/2.png') }}" alt="#"> </div>
                    <h1><span class="counter">1200</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Khách Hàng Tin Dùng</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/3.png') }}" alt="#"> </div>
                    <h1><span class="counter">25</span><span class="counterUp-letter">K</span><span
                            class="counterUp-icon">+</span> </h1>
                    <h6>Đơn Hàng Đã Giao</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/4.png') }}" alt="#"> </div>
                    <h1><span class="counter">150</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Nông Trại Liên Kết</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/5.png') }}" alt="#"> </div>
                    <h1><span class="counter">20</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Cửa Hàng Trên Toàn Quốc</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->

@endsection