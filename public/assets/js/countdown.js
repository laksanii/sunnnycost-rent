function timer(waktu, status) {
    var t = waktu.split(/[- :]/);

    var countDownDate = new Date(
        t[0],
        t[1] - 1,
        t[2],
        t[3],
        t[4],
        t[5]
    ).getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate + 2 * 1000 * 60 * 60 - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("time").innerHTML =
            ("0" + hours).slice(-2) +
            " : " +
            ("0" + minutes).slice(-2) +
            " : " +
            ("0" + seconds).slice(-2);

        // If the count down is over, write some text
        if (distance < 0 || status != "belum lunas") {
            clearInterval(x);

            if (status == "lunas") {
                document.getElementById("time").innerHTML =
                    "Terima kasih sudah melakukan pembayaran";
                document.getElementById("time").classList.remove("bg-warning");
                document.getElementById("time").classList.add("bg-success");
                document.getElementById("time").classList.add("text-light");
            } else {
                document.getElementById("time").innerHTML =
                    "Batas waktu pembayaran telah berakhir";
                document.getElementById("time").classList.remove("bg-warning");
                document.getElementById("time").classList.add("bg-danger");
                document.getElementById("time").classList.add("text-light");
            }
        }
    }, 1000);
}
