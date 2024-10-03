<<<<<<< Updated upstream
=======
const hamburger = document.querySelector(".hamburger");
const mobileMenuOverlay = document.querySelector(".mobile-menu-overlay");

hamburger.addEventListener("click", () => {
  mobileMenuOverlay.classList.toggle("show");
  hamburger.classList.toggle("open");
});
const closeButton = document.getElementById("disclaimer-close");
const disclaimer = document.getElementById("disclaimer");
closeButton.addEventListener("click", () => {
  disclaimer.style.display = "none";
});

const swiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
>>>>>>> Stashed changes
