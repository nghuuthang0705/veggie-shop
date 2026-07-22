@extends('layouts.admin')

@section('title', 'Chi tiết đơn hàng')

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Hóa đơn</small></h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Hóa đơn</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <section class="content invoice">
                                <div class="row">
                                    <div class="  invoice-header">
                                        <h1>
                                            <i class="fa fa-globe"></i> Hóa đơn
                                            <small class="pull-right">Ngày tạo: {{ $order->created_at }}</small>
                                        </h1>
                                    </div>
                                </div>
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        Từ
                                        <address>
                                            <strong>{{ $order->shippingAddress->full_name }}</strong>
                                            <br>{{ $order->shippingAddress->address }}
                                            <br>{{ $order->shippingAddress->city }}
                                            <br>Số điện thoại: {{ $order->shippingAddress->phone }}
                                            <br>Email: {{ $order->user->email }}
                                        </address>
                                    </div>
                                    <div class="col-sm-4 invoice-col">
                                        Đến
                                        <address>
                                            <strong>Veggie Shop</strong>
                                            <br>Chợ Quán
                                            <br>Hồ Chí Minh, Việt Nam
                                            <br>Số điện thoại: 1 (804) 123-4567
                                            <br>Email: nghuuthang0705@gmail.com
                                        </address>
                                    </div>
                                    <div class="col-sm-4 invoice-col">
                                        <b>Order ID: {{ $order->id }}</b>
                                        <br>
                                        <b>Email: {{ $order->user->email }}</b>
                                        <br>
                                        <b>Tài khoản: {{ $order->user->name }}</b>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="  table">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Ảnh</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->orderItems as $item)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ $item->product->image_url }}" alt="{{ $item->product->name }}" width="50px">
                                                        </td>
                                                        <td>{{ $item->product->name }}</td>
                                                        <td>{{ number_format($item->price, 0, ',', '.') }} VNĐ</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ number_format($item->price * $item->quantity, 0, ',', '.') }} VNĐ</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="lead">Phương thức thanh toán:</p>

                                        @if ($order->payment->payment_method == 'paypal')
                                            <img src="{{ asset('assets/admin/images/paypal.png') }}" alt="Paypal">
                                        @else
                                            <img src="{{ asset('assets/admin/images/cod.jpg') }}" alt="COD" width="80px">
                                        @endif

                                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                            Hóa đơn này dùng để đối chiếu thông tin đơn hàng.
                                            Vui lòng kiểm tra thông tin khách hàng, sản phẩm, phương thức thanh toán
                                            và tổng giá trị đơn hàng trước khi xác nhận xử lý hoặc giao hàng.
                                        </p>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <p class="lead">Thanh toán:</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th style="width:50%">Tiền hàng:</th>
                                                        <td>{{ number_format($order->total_price - 25000, 0, ',', '.') }} VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping</th>
                                                        <td>{{ number_format(25000, 0, ',', '.') }} VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng tiền:</th>
                                                        <td>{{ number_format($order->total_price, 0, ',', '.') }} VNĐ</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-print">
                                    <div>
                                        @if ($order->status != 'canceled')
                                            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> In hóa đơn</button>
                                            <button class="btn btn-success pull-right send-invoice-mail" data-id="{{ $order->id }}"><i class="fa fa-send"></i>
                                                Gửi hóa đơn</button>
                                            @if ($order->status == 'pending')
                                                <button class="btn btn-danger pull-right" style="margin-right: 5px" data-id="{{ $order->id }}">
                                                    <i class="fa fa-remove">Hủy đơn hàng</i>
                                                </button>
                                            @endif
                                        @else
                                            <button class="btn btn-danger" style="cursor: not-allowed"><i class="fa fa-ban"></i> Đơn hàng đã
                                                hủy</button>
                                        @endif
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
