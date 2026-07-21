@extends('layouts.admin')

@section('title', 'Quản lý sản phẩm')

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Quản lý sản phẩm <small>Danh sách tất cả sản phẩm</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Danh sách sản phẩm</h2>
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
                                            Quản lý sản phẩm cho phép quản trị viên thêm mới, cập nhật và xóa sản phẩm trong hệ thống.
                                            Các sản phẩm được phân loại theo danh mục nhằm hỗ trợ việc quản lý và tìm kiếm hiệu quả hơn.
                                            Danh sách sản phẩm được hiển thị dưới dạng bảng, tích hợp chức năng tìm kiếm, sắp xếp và thao tác nhanh.
                                        </p>
                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Hình ảnh</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Danh mục</th>
                                                    <th>Slug</th>
                                                    <th>Mô tả</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá</th>
                                                    <th>Đơn vị</th>
                                                    <th>Trạng thái</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr id="product-row-{{ $product->id }}">
                                                        <td>
                                                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="image-product">
                                                        </td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->category->name }}</td>
                                                        <td>{{ $product->slug }}</td>
                                                        <td>{{ $product->description }}</td>
                                                        <td>{{ $product->stock }}</td>
                                                        <td>{{ number_format($product->price, 0, ',', '.') }} VNĐ</td>
                                                        <td>{{ $product->unit }}</td>
                                                        <td>{{ $product->status == 'in_stock' ? 'Còn hàng' : 'Hết hàng' }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-product" data-toggle="modal"
                                                                data-target="#modalUpdate-{{ $product->id }}">
                                                                <i class="fa fa-edit"></i>Chỉnh sửa
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-app btn-delete-product" data-id="{{ $product->id }}">
                                                                <i class="fa fa-trash"></i>Xóa
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    {{-- <div class="modal fade" id="modalUpdate-{{ $category->id }}" tabindex="-1"
                                                        aria-labelledby="categoryModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="categoryModalLabel">Chỉnh sửa</h5>
                                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update-category" method="POST" class="form-horizontal form-label-left"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Tên Danh
                                                                                Mục <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <input type="text" id="category-name" name="name" required="required"
                                                                                    class="form-control" value="{{ $category->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                                                for="category-description">Mô tả <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <input type="text" id="category-description" name="description"
                                                                                    required="required" class="form-control" value="{{ $category->description }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category-image">Hình
                                                                                ảnh</label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                                                                    id="image-preview" class="image-preview">
                                                                                <label class="custom-file-upload" for="category-image-{{ $category->id }}">Chọn
                                                                                    ảnh</label>
                                                                                <input type="file" name="image" class="category-image"
                                                                                    id="category-image-{{ $category->id }}" data-id="{{ $category->id }}"
                                                                                    accept="image/*">

                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay lại</button>
                                                                    <button type="button" class="btn btn-primary btn-update-submit-category"
                                                                        data-id="{{ $category->id }}">Chỉnh sửa</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
