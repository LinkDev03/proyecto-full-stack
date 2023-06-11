const deslizador = document.querySelector('.slider-1');
const prev = document.querySelector('.prev-btn-1');
const next = document.querySelector('.next-btn-1');
const slides1 = document.querySelectorAll('.slide-1');
const SlideWidth = slides1[0].offsetWidth;
const NumVisibleSlides = 5;
// let currentSlide = 0;

// Ajustar el ancho del slider en función de la cantidad de elementos visibles
deslizador.style.width = `${SlideWidth * NumVisibleSlides}px`;

// Función para avanzar al siguiente slide
function nextSlide() {
  if (currentSlide < Slides.length - NumVisibleSlides) {
    currentSlide++;
    deslizador.style.transform = `translateX(-${SlideWidth * currentSlide}px)`;
  }
}

// Función para retroceder al slide anterior
function prevSlide() {
  if (currentSlide > 0) {
    currentSlide--;
    deslizador.style.transform = `translateX(-${SlideWidth * currentSlide}px)`;
  }
}

// Event listeners para los botones de anterior y siguiente
next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);

// Función para avanzar al siguiente slide
function nextSlide() {
    if (currentSlide < slides1.length - NumVisibleSlides) {
      currentSlide++;
      deslizador.style.transform = `translateX(-${SlideWidth * currentSlide}px)`;
    } else {
      currentSlide = 0;
      deslizador.style.transform = 'translateX(0)';
    }
  }