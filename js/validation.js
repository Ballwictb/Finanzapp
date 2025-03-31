document.addEventListener("DOMContentLoaded", function () {
    // Get the forms (only one will be available)
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");
    const contactForm = document.getElementById("contactForm");

    // Initialize Notyf if it's available
    let notyf;
    if (typeof Notyf !== "undefined") {
        notyf = new Notyf({
            duration: 3000,
            position: { x: 'right', y: 'top' }
        });
    }

    // Validations for the login form
    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();
            let valid = true;

            const emailElem = document.getElementById("email");
            const passwordElem = document.getElementById("password");

            const emailValue = emailElem.value.trim();
            const passwordValue = passwordElem.value.trim();

            // Remove error classes in each previous validation
            emailElem.classList.remove('error-input');
            passwordElem.classList.remove('error-input');

            // Validate email
            if (!validateEmail(emailValue)) {
                notyf.error("Introduce un email válido.");
                emailElem.classList.add('error-input');
                valid = false;
            }

            // Validate password (minimum 8 characters, one capital letter and one number)
            if (!validatePassword(passwordValue)) {
                notyf.error("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.");
                passwordElem.classList.add('error-input');
                valid = false;
            }

            if (valid) {
                notyf.success("Inicio de sesión exitoso.");
                loginForm.submit();
            }
        });
    }

    // Validations for the register form
    if (registerForm) {
        registerForm.addEventListener('submit', function (event) {
            event.preventDefault();
            let valid = true;

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

            if (!termsCheckbox.checked) {
                notyf.error("Debe aceptar los términos y condiciones.");
                valid = false;
            }

            // Validate email
            if (!validateEmail(emailValue)) {
                notyf.error("Introduce un email válido.");
                emailElem.classList.add('error-input');
                valid = false;
            }

            // Validate password (minimum 8 characters, one capital letter and one number)
            if (!validatePassword(passwordValue)) {
                notyf.error("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.");
                passwordElem.classList.add('error-input');
                confirmPasswordElem.classList.add('error-input');
                valid = false;
            }

            // Check passwords are the same
            if (passwordValue !== confirmPasswordValue) {
                notyf.error("Las contraseñas no coinciden.");
                passwordElem.classList.add('error-input');
                confirmPasswordElem.classList.add('error-input');
                valid = false;
            }

            if (valid) {
                notyf.success("Registro exitoso.");
                registerForm.submit();
            }
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();
            let valid = true;

            const emailElem = document.getElementById("email");
            const emailValue = emailElem.value.trim();
            
            const privacyCheckbox = document.getElementById('privacy');

            // Remove error classes in each previous validation
            emailElem.classList.remove('error-input');

            // Validate email
            if (!validateEmail(emailValue)) {
                notyf.error("Introduce un email válido.");
                emailElem.classList.add('error-input');
                valid = false;
            }

            if (!privacyCheckbox.checked) {
                notyf.error("Debe aceptar la política de privacidad.");
                valid = false;
            }

            if (valid) {
                notyf.success("Mensaje enviado correctamente.");
                contactForm.submit();
            }
        });
    }

    // Validations
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePassword(password) {
        const re = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
        return re.test(password);
    }
});