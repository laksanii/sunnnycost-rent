function paymentMethod(event) {
    $(document).ready(function () {
        const selectBank = $(event.target);
        const img = $(".bank-img");
        const norek = $(".norek");
        const an = $(".a-n");
        $.ajax({
            type: "GET",
            url: "/get-payment",
            data: { id: selectBank.val() },
            success: function (data) {
                img.attr("src", "/assets/img/bank/" + data.bank.gambar);
                norek.html(data.bank.no_rekening);
                an.html(data.bank.atas_nama);
                $(".bank-box").removeClass("d-none");
            },
        });
    });
}
