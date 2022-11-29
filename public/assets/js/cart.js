function addToCart(event, user_id, costume_id) {
    $.ajax({
        type: "GET",
        url: "/storeCart",
        data: { user_id: user_id, costume_id: costume_id },
        success: function (data) {
            $(".cart-success").removeClass("d-none");
            $(".cart-count").html(data.count);
            $(".cart-success").html(data.message);
            $(".cart-success").addClass("muncul");
            setTimeout(function () {
                $(".cart-success").removeClass("muncul");
            }, 5000);
            setTimeout(function () {
                $(".cart-success").addClass("d-none");
            }, 6000);
        },
    });
}
