@extends('layouts.admin')

@section('title', 'Quản lý đơn hàng')

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Quản lý đơn hàng <small>Danh sách tất cả đơn hàng</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Danh sách đơn hàng</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <p class="text-muted font-13 m-b-30">
                                            Quản lý đơn hàng cho phép quản trị viên theo dõi, cập nhật trạng thái và xử lý các đơn hàng trong hệ thống.
                                            Danh sách đơn hàng được hiển thị dưới dạng bảng, hỗ trợ tìm kiếm, sắp xếp và thực hiện các thao tác quản lý nhanh nhằm
                                            nâng cao hiệu quả xử lý đơn hàng.
                                        </p>
                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%; text-align:center;">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tài khoản</th>
                                                    <th>Địa chỉ đặt hàng</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái đơn hàng</th>
                                                    <th>Trạng thái thanh toán</th>
                                                    <th>Chi tiết đơn hàng</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->user->name }}</td>
                                                        <td>
                                                            <a href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#addressShippingModal-{{ $order->id }}">{{ $order->shippingAddress->address }}</a>
                                                        </td>
                                                        <td>{{ number_format($order->total_price, 0, ',', '.') }} VNĐ</td>
                                                        <td class="order-status">
                                                            @if ($order->status == 'pending')
                                                                <span class="custom-badge badge badge-warning">Đợi xác nhận</span>
                                                            @elseif ($order->status == 'processing')
                                                                <span class="custom-badge badge badge-info">Đang giao</span>
                                                            @elseif ($order->status == 'completed')
                                                                <span class="custom-badge badge badge-success">Đã hoàn thành</span>
                                                            @elseif ($order->status == 'canceled')
                                                                <span class="custom-badge badge badge-danger">Đã hủy</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($order->payment->status == 'pending')
                                                                <span class="custom-badge badge badge-danger">Chưa thanh toán</span>
                                                            @else
                                                                <span class="custom-badge badge badge-success">Đã thanh toán</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                                data-target="#orderItemsModal-{{ $order->id }}">Xem</button>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    @if ($order->status == 'pending')
                                                                        <a href="javascript:void(0)" class="dropdown-item confirm-order"
                                                                            data-id="{{ $order->id }}">Xác nhận</a>
                                                                    @endif
                                                                    <a class="dropdown-item" target="_blank" href="#">Xem chi tiết</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @foreach ($orders as $order)
                                            {{-- Modal Address --}}
                                            <div class="modal fade" id="addressShippingModal-{{ $order->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="addressShippingModalLabel-{{ $order->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addressShippingModalLabel">Thông tin giao hàng</h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>Người nhận: {{ $order->shippingAddress->full_name }}</p>
                                                            <p>Địa chỉ: {{ $order->shippingAddress->address }}</p>
                                                            <p>Thành phố: {{ $order->shippingAddress->city }}</p>
                                                            <p>Số điện thoại: {{ $order->shippingAddress->phone }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Modal OrderItems --}}
                                            <div class="modal fade" id="orderItemsModal-{{ $order->id }}" tabindex="-1"
                                                aria-labelledby="orderItemsModalLabel-{{ $order->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary text-white">
                                                            <h5 class="modal-title">
                                                                <i class="fa fa-file-text"></i>
                                                                Chi tiết hóa đơn #{{ $order->id }}
                                                            </h5>
                                                            <button type="button" class="close text-white" data-dismiss="modal">
                                                                <span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="card shadow-sm">
                                                                        <div class="card-header">
                                                                            <strong>Thông tin khách hàng</strong>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p>
                                                                                <i class="fa fa-user"></i>
                                                                                <strong>Tên:</strong>
                                                                                {{ $order->user->name }}
                                                                            </p>
                                                                            <p>
                                                                                <i class="fa fa-phone"></i>
                                                                                <strong>SĐT:</strong>
                                                                                {{ $order->user->phone_number }}
                                                                            </p>
                                                                            <p>
                                                                                <i class="fa fa-map-marker"></i>
                                                                                <strong>Địa chỉ:</strong>
                                                                                {{ $order->shippingAddress->address }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="card shadow-sm">
                                                                        <div class="card-header">
                                                                            <strong>Thông tin đơn hàng</strong>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p>
                                                                                <strong>Mã đơn:</strong>
                                                                                #{{ $order->id }}
                                                                            </p>
                                                                            <p>
                                                                                <strong>Ngày đặt:</strong>
                                                                                {{ $order->created_at->format('d/m/Y H:i') }}
                                                                            </p>
                                                                            <p>
                                                                                <strong>Trạng thái:</strong>
                                                                                @if ($order->status == 'pending')
                                                                                    <span class="badge badge-warning">Chờ xác nhận</span>
                                                                                @elseif($order->status == 'processing')
                                                                                    <span class="badge badge-info">Đang giao</span>
                                                                                @elseif($order->status == 'completed')
                                                                                    <span class="badge badge-success">Hoàn thành</span>
                                                                                @else
                                                                                    <span class="badge badge-danger">Đã hủy</span>
                                                                                @endif
                                                                            </p>
                                                                            <p>
                                                                                <strong>Thanh toán:</strong>
                                                                                @if ($order->payment->status == 'pending')
                                                                                    <span class="badge badge-danger">Chưa thanh toán</span>
                                                                                @else
                                                                                    <span class="badge badge-success">Đã thanh toán</span>
                                                                                @endif
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <h5 class="mb-3">Danh sách sản phẩm</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <th width="5%">#</th>
                                                                            <th>Sản phẩm</th>
                                                                            <th width="15%">Số lượng</th>
                                                                            <th width="20%">Đơn giá</th>
                                                                            <th width="20%">Thành tiền</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                            $index = 1;
                                                                        @endphp
                                                                        @foreach ($order->orderItems as $item)
                                                                            <tr>
                                                                                <td>{{ $index++ }}</td>
                                                                                <td>
                                                                                    <strong>{{ $item->product->name }}</strong>
                                                                                </td>
                                                                                <td class="text-center">{{ $item->quantity }}</td>
                                                                                <td>{{ number_format($item->price, 0, ',', '.') }} VNĐ</td>
                                                                                <td>
                                                                                    <strong>{{ number_format($item->quantity * $item->price, 0, ',', '.') }}
                                                                                        VNĐ</strong>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td colspan="4" class="text-right">
                                                                                <strong>Tổng cộng:</strong>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="text-danger">{{ number_format($order->total_price, 0, ',', '.') }}VNĐ
                                                                                </h5>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
