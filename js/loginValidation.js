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

    const loginForm = document.getElementById("loginForm");
    if (!loginForm) return;

    loginForm.addEventListener("submit", function (event) {
        event.preventDefault();
        let isValid = true;

        const emailElem = document.getElementById("email");
        const passwordElem = document.getElementById("password");

        const emailValue = emailElem.value.trim();
        const passwordValue = passwordElem.value.trim();

        emailElem.classList.remove('error-input');
        passwordElem.classList.remove('error-input');

        if (!emailValue) {
            showError("El campo email es obligatorio", emailElem);
            isValid = false;
        } else if (!validateEmail(emailValue)) {
            showError("Introduce un email válido", emailElem);
            isValid = false;
        }

        if (!passwordValue) {
            showError("El campo contraseña es obligatorio", passwordElem);
            isValid = false;
        } else if (!validatePassword(passwordValue)) {
            showError("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número", passwordElem);
            isValid = false;
        }

        if (isValid) {
            notyf.success("Inicio de sesión exitoso");
        }
    });

    liveValidateInputs();
});
