@extends('layouts.client')

@section('title', 'Đăng ký')

@section('breadcrumb', 'Đăng ký')

@section('content')

<div class="ltn__login-area pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng Ký<br>Tài Khoản</h1>
                    <p>Tạo tài khoản để mua sắm nhanh hơn, quản lý đơn hàng <br>
                        và nhận các chương trình khuyến mãi mới nhất.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="{{ route('post-register') }}" class="ltn__form-box contact-form-box" method="POST" id="register-form">
                        @csrf

                        <input type="text" name="name" placeholder="Họ và tên" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="password" name="password" placeholder="Mật khẩu*" required>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="password" name="confirmPassword" placeholder="Xác nhận mật khẩu*" required>
                        @error('confirmPassword')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox1" value="" required>
                            Tôi đồng ý cho website xử lý thông tin cá nhân nhằm cung cấp các chương trình khuyến mãi, ưu đãi và thông tin sản phẩm phù hợp theo Chính sách bảo mật.
                        </label>
                        @error('checkbox1')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox2" value="" required>
                            Bằng việc nhấn "Đăng ký", tôi đồng ý với Điều khoản sử dụng và Chính sách bảo mật của website.
                        </label>
                        @error('checkbox2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">TẠO TÀI KHOẢN</button>
                        </div>
                    </form>

                    <div class="by-agree text-center">
                        <p>Khi tạo tài khoản, bạn đồng ý với:</p>
                        <p><a href="#">ĐIỀU KHOẢN SỬ DỤNG &nbsp; &nbsp; | &nbsp; &nbsp; CHÍNH SÁCH BẢO MẬT</a></p>
                        <div class="go-to-btn mt-50">
                            <a href="#">ĐÃ CÓ TÀI KHOẢN? ĐĂNG NHẬP NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection