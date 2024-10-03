



const hamburger = document.querySelector('.hamburger');
const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');

hamburger.addEventListener('click', () => {
    mobileMenuOverlay.classList.toggle('show');
    hamburger.classList.toggle('open');
});
const closeButton = document.getElementById("disclaimer-close");
const disclaimer = document.getElementById("disclaimer");
closeButton.addEventListener('click', () => {
    disclaimer.style.display = "none";
});

/*
let swiper = new Swiper(".swiper", {
    loop:true,
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
*/