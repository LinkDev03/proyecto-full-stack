const sslider = document.querySelector('.slider');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const slides = document.querySelectorAll('.slide');
const slideWidth = slides[0].offsetWidth;
const numVisibleSlides = 11;
var currentSlide = 0;

sslider.style.width = `${slideWidth * numVisibleSlides + (numVisibleSlides - 1) * 6}px`;

function nextSlide() {
  if (currentSlide < slides.length - numVisibleSlides) {
    currentSlide++;
    sslider.style.transform = `translateX(-${slideWidth * currentSlide + 6 * currentSlide}px)`;
  } else {
    currentSlide = 0;
    sslider.style.transform = 'translateX(0)';
  }
}

function prevSlide() {
  if (currentSlide > 0) {
    currentSlide--;
    sslider.style.transform = `translateX(-${slideWidth * currentSlide + 6 * currentSlide}px)`;
  } else {
    currentSlide = slides.length - numVisibleSlides;
    sslider.style.transform = `translateX(-${slideWidth * currentSlide + 6 * currentSlide}px)`;
  }
}

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);



document.getElementById("mas-informacion").addEventListener("click", function() {
    var footerTitulos = document.getElementsByClassName("footer-titulo");
    
    for (var i = 0; i < footerTitulos.length; i++) {
      footerTitulos[i].classList.toggle("mostrar");
    }
  });
  