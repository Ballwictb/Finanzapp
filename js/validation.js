document.addEventListener("DOMContentLoaded", function () {
    // Obtener los formularios (solo estará presente uno según la página)
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");

    // Inicializar Notyf si está disponible
    let notyf;
    if (typeof Notyf !== "undefined") {
        notyf = new Notyf({
            duration: 3000,
            position: { x: 'right', y: 'top' }
        });
    }

    // Validaciones para el formulario de login
    if (loginForm) {
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");

        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();
            let valid = true;

            const emailValue = emailInput.value.trim();
            const passwordValue = passwordInput.value.trim();

            // Validar email
            if (!validateEmail(emailValue)) {
                if (notyf) notyf.error("Introduce un email válido.");
                valid = false;
            }

            // Validar contraseña (mínimo 8 caracteres, una mayúscula y un número)
            if (!validatePassword(passwordValue)) {
                if (notyf) notyf.error("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.");
                valid = false;
            }

            if (valid) {
                if (notyf) notyf.success("Inicio de sesión exitoso.");
                loginForm.submit();
            }
        });
    }

    // Validaciones para el formulario de registro
    if (registerForm) {
        registerForm.addEventListener('submit', function (event) {
            const passwordElem = document.getElementById('password');
            const confirmPasswordElem = document.getElementById('confirm-password');

            // Validar email
            if (!validateEmail(emailValue)) {
                if (notyf) notyf.error("Introduce un email válido.");
                valid = false;
            }

            // Validar contraseña (mínimo 8 caracteres, una mayúscula y un número)
            if (!validatePassword(passwordValue)) {
                if (notyf) notyf.error("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.");
                valid = false;
            }

            if (passwordElem && confirmPasswordElem) {
                const password = passwordElem.value;
                const confirmPassword = confirmPasswordElem.value;
                // Verificar que las contraseñas coincidan
                if (password !== confirmPassword) {
                    event.preventDefault(); // Evitar el envío del formulario
                    alert('Passwords do not match.');
                }
            }
        });
    }

    // Funciones de validación
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePassword(password) {
        const re = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
        return re.test(password);
    }
});