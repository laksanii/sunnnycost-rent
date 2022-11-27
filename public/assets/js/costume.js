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
