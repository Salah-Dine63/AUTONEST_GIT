/*==== navbar toggle ===*/
let navBar = document.querySelector('.navLink');
let menuBar = document.querySelector('#menuBtn');

menuBar.onclick = () => {
  navBar.classList.toggle('active');
}
/*===scroll section and sticky navbar===*/
window.onscroll = () => {
  let header = document.querySelector('header');
  header.classList.toggle('sticky', window.scrollY > 100);

}


const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};
ScrollReveal().reveal(".header__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".header__content h2", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".header__content .section__description", {
  ...scrollRevealOption,
  delay: 1500,
});

/*===swiper js ===*/
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 3000,
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

/* counter sectio start*/
let valueDisplay = document.querySelectorAll('.num');
let interval = 1000;

valueDisplay.forEach((valueDisplay) => {

    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-value"));

    let duration = Math.floor(interval/endValue);
    let counter = setInterval(function () {
      startValue += 1;
      valueDisplay.textContent = startValue;
      if(startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
});
// script.js

// Récupérer les éléments du DOM
var modal = document.getElementById("loginModal");
var btn = document.getElementById("loginBtn");
var span = document.getElementsByClassName("close")[0];
var btn = document.getElementById("loginBtn");
btn.addEventListener("click", function() {
    modal.style.display = "block";
});
// Ouvrir la modale lorsque l'utilisateur clique sur le bouton "Login"
btn.onclick = function() {
    modal.style.display = "block";
}

// Fermer la modale lorsque l'utilisateur clique sur "X"
span.onclick = function() {
    modal.style.display = "none";
}

// Fermer la modale si l'utilisateur clique en dehors de la fenêtre modale
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

