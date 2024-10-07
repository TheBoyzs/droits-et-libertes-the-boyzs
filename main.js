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

$("li").click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});
