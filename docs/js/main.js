$(function () {
    /**
     * Register
     */
    $("#register").on("submit", function (event) {
        event.preventDefault();
        var details = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "database/db_register.php",
            data: details,
            timeout: 2000,
            beforeSend: function () {
                $("#loading").text("Loading...");
            },
            complete: function () {
                $("#loading").empty();
            },
            success: function (data) {
                $("#response").html(data);
            },
            error: function (data) {
                $("#response").text(
                    "I'm sorry, but there seems to have been an error. Please try again later"
                );
            }
        });
    });

    /**
     * Login
     */
    $("#login").on("submit", function (event) {
        event.preventDefault();
        var details = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "database/db_login.php",
            data: details,
            timeout: 2000,
            beforeSend: function () {
                $("#loading").text("Loading...");
            },
            complete: function () {
                $("#loading").empty();
            },
            success: function (data) {
                $("#response").html(data);
            },
            error: function (data) {
                $("#response").text(
                    "I'm sorry, but there seems to have been an error. Please try again later"
                );
            }
        });
    });

    /**
     * Register Hive
     */
    $("#register_hive").on("submit", function (event) {
        event.preventDefault();
        var details = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "database/db_register_hive.php",
            data: details,
            timeout: 2000,
            beforeSend: function () {
                $("#loading").text("Loading");
            },
            complete: function () {
                $("#loading").empty();
            },
            success: function (data) {
                $("#response").html(data);
            },
            error: function (data) {
                $("#response").text(
                    "I'm sorry, but there seems to have been an error. Please try again later"
                );
            }
        });
    });

});
