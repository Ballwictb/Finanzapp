document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");

    // Inicializar Notyf para las notificaciones
    const notyf = new Notyf({
        duration: 3000,
        position: { x: 'right', y: 'top' }
    });

    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();
        let valid = true;
        
        const emailValue = emailInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        // Validar email
        if (!validateEmail(emailValue)) {
            notyf.error("Introduce un email válido.");
            valid = false;
        }

        // Validar contraseña (mínimo 8 caracteres, incluyendo una mayúscula y un número)
        if (!validatePassword(passwordValue)) {
            notyf.error("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.");
            valid = false;
        }

        if (valid) {
            notyf.success("Inicio de sesión exitoso.");
            loginForm.submit();
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePassword(password) {
        const re = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
        return re.test(password);
    }
});
