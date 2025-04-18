document.addEventListener("DOMContentLoaded", function () {
    // Inicializar Notyf
    const notyf = new Notyf({
        duration: 3000,
        position: { x: 'right', y: 'top' },
        types: [
            {
                type: 'error',
                background: '#ff4444',
                dismissible: true
            },
            {
                type: 'success',
                background: '#00C851',
                dismissible: true
            }
        ]
    });

    const contactForm = document.getElementById("contactForm");
    if (!contactForm) return;

    contactForm.addEventListener('submit', function (event) {
        event.preventDefault();
        let isValid = true;

        const emailElem = document.getElementById("email");
        const emailValue = emailElem.value.trim();
        const privacyCheckbox = document.getElementById('privacy');

        emailElem.classList.remove('error-input');

        if (!emailValue) {
            showError("El campo email es obligatorio", emailElem);
            isValid = false;
        } else if (!validateEmail(emailValue)) {
            showError("Introduce un email válido", emailElem);
            isValid = false;
        }

        if (!privacyCheckbox.checked) {
            showError("Debe aceptar la política de privacidad");
            isValid = false;
        }

        if (isValid) {
            notyf.success("Mensaje enviado correctamente");
        }
    });

    liveValidateInputs();
});
