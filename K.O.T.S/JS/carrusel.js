// Seleccionar las imágenes del carrusel
const images = document.querySelectorAll("#carrusel img");

// Variables para el carrusel
let currentIndex = 0;

// Función para cambiar las imágenes
function changeSlide() {
    // Ocultar todas las imágenes
    images.forEach(image => {
        image.classList.remove("activa");
    });

    // Mostrar la imagen activa
    images[currentIndex].classList.add("activa");
}

// Función para mover el carrusel hacia la izquierda o derecha
function moveSlide(step) {
    currentIndex += step;

    // Asegurar que el índice no salga del rango
    if (currentIndex < 0) {
        currentIndex = images.length - 1; // Ir al último
    } else if (currentIndex >= images.length) {
        currentIndex = 0; // Ir al primero
    }

    // Cambiar la imagen visible
    changeSlide();
}

// Cambiar la imagen automáticamente cada 3 segundos
setInterval(() => {
    moveSlide(1); // Mueve a la siguiente imagen automáticamente
}, 3000);

// Inicializar el carrusel
changeSlide();