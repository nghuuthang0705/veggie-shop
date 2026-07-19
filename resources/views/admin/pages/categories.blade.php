@extends('layouts.admin')

@section('title', 'Quản lý người dùng')

@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Quản lý danh mục <small>Danh sách tất cả danh mục</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Danh sách danh mục</h2>
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
                                            Trang quản lý danh mục cho phép admin tạo, chỉnh sửa và xóa các danh mục sản phẩm. Các danh mục giúp tổ chức sản phẩm
                                            theo từng nhóm, giúp khách hàng dễ dàng tìm kiếm và lựa chọn hơn. Dữ liệu được hiển thị dưới dạng bảng, hỗ trợ tìm kiếm,
                                            sắp xếp và thao tác nhanh chóng.
                                        </p>
                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Hình ảnh</th>
                                                    <th>Tên danh mục</th>
                                                    <th>Slug</th>
                                                    <th>Mô tả</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                                                class="image-category">
                                                        </td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $category->slug }}</td>
                                                        <td>{{ $category->description }}</td>
                                                        <td>
                                                            <i class="fa fa-edit">Chỉnh sửa</i>
                                                        </td>
                                                        <td>
                                                            <i class="fa fa-close">Xóa</i>
                                                        </td>
                                                    </tr>
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
