document.addEventListener('DOMContentLoaded', () => {
    const languageToggle = document.querySelector('.language-toggle');
    const languageDropdown = document.querySelector('.language-dropdown');

    // Open and close the dropdown when clicking
    languageToggle.addEventListener('click', () => {
        languageDropdown.classList.toggle('show');
    });

    // Close the dropdown if you click outside it
    document.addEventListener('click', (event) => {
        if (!languageToggle.contains(event.target) && !languageDropdown.contains(event.target)) {
            languageDropdown.classList.remove('show');
        }
    });
});
