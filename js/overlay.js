document.addEventListener("DOMContentLoaded", function () {
    // Select all images from the step
    const images = document.querySelectorAll('.step-img');
    const overlay = document.getElementById('overlay');
    const overlayImg = document.getElementById('overlay-img');

    // Add click event for each image
    images.forEach(function (img) {
        img.addEventListener('click', function () {
            overlayImg.src = this.src;
            overlay.style.display = "flex";  // Usamos flex para centrar la imagen
        });
    });

    // Al hacer click en el overlay, se oculta
    overlay.addEventListener('click', function () {
        overlay.style.display = "none";
    });
});
