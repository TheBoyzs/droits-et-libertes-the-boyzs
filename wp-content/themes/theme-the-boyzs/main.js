const hamburger = document.querySelector(".hamburger");
const mobileMenuOverlay = document.querySelector(".mobile-menu-overlay");

const carteArr = document.querySelectorAll(".equipe__carte");



hamburger.addEventListener("click", () => {
  mobileMenuOverlay.classList.toggle("show");
  hamburger.classList.toggle("open");
});
const closeButton = document.getElementById("disclaimer-close");
const disclaimer = document.getElementById("disclaimer");
closeButton.addEventListener("click", () => {
  hideDisclaimer()
});

if (localStorage.getItem("disclaimerClosed") == "true") {
  hideDisclaimer()
}

function showDisclaimer() {
  disclaimer.style.display = "grid";
  localStorage.setItem("disclaimerClosed", false);
}

function hideDisclaimer() {
  disclaimer.style.display = "none";
  localStorage.setItem("disclaimerClosed", true);
}


//Script pour pagination 
//Ajout par Pierre-Luc
$("li").click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});

const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: 1,
  //spaceBetween: 100,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  pagination: {
      el: ".swiper-pagination",
    },
  autoplay: {
   delay: 3000,
  },
});


if(carteArr !== null){

console.log(carteArr);
  carteArr.forEach((element, index) => {
    let boutonx = document.querySelectorAll("#modal-close");
    let chiffre = index + 1;
    let modaleAssociee = document.querySelector("#modal"+chiffre);
    element.addEventListener("click",() =>{

     

      modaleAssociee.style.display = "grid";
    })
    boutonx.forEach((element) => {
      element.addEventListener("click",() =>{
        modaleAssociee.style.display = "none";
      })
    })
    

  });

  

}



