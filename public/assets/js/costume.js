function changeThumbnail(event) {
    // const image = $(event.target);
    const src = event.target.src;
    const thumbnail = document.getElementById("thumbnail");

    thumbnail.src = src;

    const imgList = document.getElementsByClassName("costume-img-list");
    for (let i = 0; i < imgList.length; i++) {
        imgList[i].classList.remove("selected");
    }

    event.target.classList.add("selected");
}

function costumeCheck(event) {
    $(document).ready(function () {
        const inputDate = $(event.target);
        $.ajax({
            type: "GET",
            url: "/costume-check",
            data: { tgl: inputDate.val() },
            success: function (data) {
                if (data.msg.length != 0) {
                    Object.values(data.msg).forEach((val) => {
                        $(".notif-box").append(
                            $("<span>", {
                                text: val,
                            }).addClass("rent-msg d-block text-danger")
                        );
                    });
                    $(".checkout").attr("disabled", true);
                } else {
                    $(".notif-box").empty();
                    $(".checkout").attr("disabled", false);
                }
            },
        });
    });
}
