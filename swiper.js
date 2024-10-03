
let swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: 1,
    //spaceBetween: 100,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
     delay: 500,
    },
});
