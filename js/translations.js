document.addEventListener('DOMContentLoaded', () => {
    const languageToggle = document.querySelector('.language-toggle');
    const languageDropdown = document.querySelector('.language-dropdown');
    
    // Abre y cierra el dropdown al hacer clic
    languageToggle.addEventListener('click', () => {
        languageDropdown.classList.toggle('show');
    });

    // Cierra el dropdown si se hace clic fuera de él
    document.addEventListener('click', (event) => {
        if (!languageToggle.contains(event.target) && !languageDropdown.contains(event.target)) {
            languageDropdown.classList.remove('show');
        }
    });
});
