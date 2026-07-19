$(document).ready(function () {
    /******************************
     ****** MANAGEMENT USERS ******
     ******************************/

    $(document).on("click", ".upgradeStaff", function (e) {
        let button = $(this);
        let userId = button.data("userid");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: "user/upgrade",
            data: {
                user_id: userId,
            },

            success: function (response) {
                if (response.status) {
                    toastr.success(response.message);
                    button
                        .closest(".profile_view")
                        .find(".brief i")
                        .text("STAFF");
                    button
                        .closest(".profile_view")
                        .find(".changeStatus")
                        .hide();
                    button.hide();
                } else {
                    toastr.error(response.message);
                }
            },

            error: function (xhr, status, error) {
                alert("An error occurred: " + error);
            },
        });
    });

    $(document).on("click", ".changeStatus", function (e) {
        let button = $(this);
        let userId = button.data("userid");
        let status = button.data("status");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: "user/updateStatus",
            data: {
                user_id: userId,
                status: status,
            },

            success: function (response) {
                if (response.status) {
                    toastr.success(response.message);
                    status == "banned"
                        ? button.text("Đã chặn")
                        : button.text("Đã xóa");
                    button.addClass("disabled").prop("disabled", true);
                } else {
                    toastr.error(response.message);
                }
            },

            error: function (xhr, status, error) {
                alert("An error occurred: " + error);
            },
        });
    });

    /***********************************
     ****** MANAGEMENT CATEGORIES ******
     ***********************************/

    $("#category-image").change(function () {
        let file = this.files[0];

        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $("#image-preview").attr("src", e.target.result);
            };
            reader.readAsDataURL(file);
        } else {
            $("#image-preview").attr("src", "");
        }
    });

    $(".btn-reset").on("click", function () {
        let form = $(this).closest("form");
        form.trigger("reset");
        form.find('input[type="file"]').val("");
        form.find("#image-preview").html("");
        form.find("#image-preview").attr("src", "");
    });

    $(".category-image").change(function () {
        let file = this.files[0];
        let categoryId = $(this).data("id");

        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $(".image-preview").each(function () {
                    if (
                        $(this).closest(".modal").attr("id") ===
                        "modalUpdate-" + categoryId
                    ) {
                        $(this).attr("src", e.target.result);
                    }
                });
            };
            reader.readAsDataURL(file);
        } else {
            $("#image-preview").attr("src", "");
        }
    });

    //UPDATE CATEGORY
    $(document).on("click", ".btn-update-submit-category", function (e) {
        e.preventDefault();

        let button = $(this);
        let categoryId = button.data("id");
        let form = button.closest(".modal").find("form");
        let formData = new FormData(form[0]);

        formData.append("category_id", categoryId);

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: "categories/update",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,

            beforeSend: function () {
                button.prop("disabled", true);
                button.text("Đang cập nhật...");
            },

            success: function (response) {
                if (response.status) {
                    toastr.success(response.message);
                    let categoryId = response.data.id;

                    // Regenerate new HTML for updated row
                    let newRow = `
                        <tr id="category-row-${categoryId}">
                        <td>
                            <img src="${response.data.image}" alt="${response.data.name}" width="80px">
                        </td>
                            <td>${response.data.name}</td>
                            <td>${response.data.slug}</td>
                            <td>${response.data.description}</td>
                            <td>
                                <a class="btn btn-app btn-update-category" data-toggle="modal"
                                    data-target="#modalUpdate-${categoryId}">
                                    <i class="fa fa-edit"></i>Chỉnh sửa
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-app btn-delete-category" data-id="${categoryId}">
                                    <i class="fa fa-trash"></i>Xóa
                                </a>
                            </td>
                        </tr>`;

                    // Replace old row with new row
                    $("#category-row-" + categoryId).replaceWith(newRow);

                    $("#modalUpdate-" + categoryId).modal("hide");
                } else {
                    toastr.error(response.message);
                }
            },

            error: function (xhr, status, error) {
                alert("An error occurred: " + error);
            },

            complete: function () {
                button.prop("disabled", false);
                button.text("Chỉnh sửa");
            },
        });
    });

    //DELETE CATEGORY
    $(document).on("click", ".btn-delete-category", function (e) {
        e.preventDefault();
        let button = $(this);
        let categoryId = button.data("id");
        let row = button.closest("tr");

        if (confirm("Bạn có chắc chắn muốn xóa danh mục này?")) {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content",
                    ),
                },
            });

            $.ajax({
                url: "categories/delete",
                type: "POST",
                data: {
                    category_id: categoryId,
                },

                success: function (response) {
                    if (response.status) {
                        toastr.success(response.message);
                        row.fadeOut(300, function () {
                            $(this).remove();
                        });
                    } else {
                        toastr.error(response.message);
                    }
                },

                error: function (xhr, status, error) {
                    alert("Có lỗi xảy ra ! Vui lòng thử lại." + error);
                },
            });
        }
    });
});
