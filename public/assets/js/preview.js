function previewImg(event) {
    const image = $(event.target);

    const img = image.parent().parent().parent().next().find("img");
    img.css("display", "block");

    const span = image.next();
    let name_file = image.val().replace(/C:\\fakepath\\/i, "");
    if (name_file.length > 25) {
        span.html(name_file.slice(0, 28) + "...");
    } else {
        span.html(name_file);
    }

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image[0].files[0]);

    oFReader.onload = function (oFREvent) {
        img.attr("src", oFREvent.target.result);
    };
}
