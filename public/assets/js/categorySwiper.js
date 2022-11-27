// var swiper = new Swiper(".categorySwiper", {
//     slidesPerView: 3,
//     spaceBetween: 0,
//     freeMode: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
// });

var categorySwiper = new Swiper(".categorySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
