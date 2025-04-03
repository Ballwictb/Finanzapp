document.addEventListener("DOMContentLoaded", function () {
    // Get the forms (only one will be available)
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");
    const contactForm = document.getElementById("contactForm");

    // Initialize Notyf
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

    // Validations for the login form
    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();
            let isValid = true;

            const emailElem = document.getElementById("email");
            const passwordElem = document.getElementById("password");

            const emailValue = emailElem.value.trim();
            const passwordValue = passwordElem.value.trim();

            // Remove error classes in each previous validation
            emailElem.classList.remove('error-input');
            passwordElem.classList.remove('error-input');

            // Validate email
            if (!emailValue) {
                showError("El campo email es obligatorio", emailElem);
                isValid = false;
            } else if (!validateEmail(emailValue)) {
                showError("Introduce un email válido", emailElem);
                isValid = false;
            }

            // Validate password
            if (!passwordValue) {
                showError("El campo contraseña es obligatorio", passwordElem);
                isValid = false;
            } else if (!validatePassword(passwordValue)) {
                showError("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número", passwordElem);
                isValid = false;
            }

            if (isValid) {
                // Aquí iría la lógica de autenticación real
                // Por ahora solo simulamos éxito
                notyf.success("Inicio de sesión exitoso");
                // loginForm.submit(); // Descomentar cuando tengas el backend
            }
        });
    }

    // Validations for the register form
    if (registerForm) {
        registerForm.addEventListener('submit', function (event) {
            event.preventDefault();
            let isValid = true;

            const emailElem = document.getElementById("email");
            const passwordElem = document.getElementById("password");
            const confirmPasswordElem = document.getElementById('confirm-password');
            const termsCheckbox = document.getElementById('terms');

            const emailValue = emailElem.value.trim();
            const passwordValue = passwordElem.value.trim();
            const confirmPasswordValue = confirmPasswordElem.value.trim();

            // Remove error classes in each previous validation
            emailElem.classList.remove('error-input');
            passwordElem.classList.remove('error-input');
            confirmPasswordElem.classList.remove('error-input');

            // Validate terms
            if (!termsCheckbox.checked) {
                showError("Debe aceptar los términos y condiciones");
                isValid = false;
            }

            // Validate email
            if (!emailValue) {
                showError("El campo email es obligatorio", emailElem);
                isValid = false;
            } else if (!validateEmail(emailValue)) {
                showError("Introduce un email válido", emailElem);
                isValid = false;
            }

            // Validate password
            if (!passwordValue) {
                showError("El campo contraseña es obligatorio", passwordElem);
                isValid = false;
            } else if (!validatePassword(passwordValue)) {
                showError("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número", passwordElem);
                isValid = false;
            }

            // Check passwords match
            if (passwordValue !== confirmPasswordValue) {
                showError("Las contraseñas no coinciden", passwordElem, confirmPasswordElem);
                isValid = false;
            }

            if (isValid) {
                notyf.success("Registro exitoso");
                // registerForm.submit(); // Descomentar cuando tengas el backend
            }
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();
            let isValid = true;

            const emailElem = document.getElementById("email");
            const emailValue = emailElem.value.trim();
            const privacyCheckbox = document.getElementById('privacy');

            // Remove error classes in each previous validation
            emailElem.classList.remove('error-input');

            // Validate email
            if (!emailValue) {
                showError("El campo email es obligatorio", emailElem);
                isValid = false;
            } else if (!validateEmail(emailValue)) {
                showError("Introduce un email válido", emailElem);
                isValid = false;
            }

            // Validate privacy policy
            if (!privacyCheckbox.checked) {
                showError("Debe aceptar la política de privacidad");
                isValid = false;
            }

            if (isValid) {
                notyf.success("Mensaje enviado correctamente");
                // contactForm.submit(); // Descomentar cuando tengas el backend
            }
        });
    }

    // Helper function to show errors
    function showError(message, ...elements) {
        notyf.error(message);
        if (elements) {
            elements.forEach(el => el?.classList.add('error-input'));
        }
    }

    // Validation functions
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePassword(password) {
        const re = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
        return re.test(password);
    }
});