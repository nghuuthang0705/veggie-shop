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
});
