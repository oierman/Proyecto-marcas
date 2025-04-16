let slideIndex = 0;
const slides = document.querySelectorAll('.diapositiva');
const dots = document.querySelectorAll('.indicador');

function showSlide(n) {
  // Asegurarse de que el índice esté dentro del rango
  if (n >= slides.length) {
    slideIndex = 0;
  } else if (n < 0) {
    slideIndex = slides.length - 1;
  } else {
    slideIndex = n;
  }
  
  // Mover el carrusel
  const carrusel = document.querySelector('.carrusel');
  carrusel.style.transform = `translateX(-${slideIndex * 100}%)`;
  
  // Actualizar los indicadores
  dots.forEach((dot, index) => {
    dot.classList.toggle('active', index === slideIndex);
  });
}

function moveSlide(n) {
  showSlide(slideIndex + n);
}

function goToSlide(n) {
  showSlide(n);
}

// Autoavance cada 5 segundos
let intervalo = setInterval(() => {
  moveSlide(1);
}, 5000);

// Pausar al pasar el mouse
const carruselContainer = document.querySelector('.carrusel-container');
carruselContainer.addEventListener('mouseenter', () => {
  clearInterval(intervalo);
});

carruselContainer.addEventListener('mouseleave', () => {
  intervalo = setInterval(() => {
    moveSlide(1);
  }, 5000);
});

// Mostrar el primer slide al cargar
showSlide(0);