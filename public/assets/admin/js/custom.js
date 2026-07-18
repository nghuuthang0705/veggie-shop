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
});
