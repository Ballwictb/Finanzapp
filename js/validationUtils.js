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

// Validación de email
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Validación de contraseñas
function validatePassword(password) {
    const re = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
    return re.test(password);
}

// Función para mostrar los errores usando Notyf
function showError(message, ...elements) {
    if (typeof notyf !== 'undefined') {
        notyf.error(message);
    } else {
        console.error("Notyf no está definido");
    }
    if (elements) {
        elements.forEach(el => el?.classList.add('error-input'));
    }
}

// Función para manejar el cambio de clases de error
function toggleErrorClass(input, hasError) {
    if (hasError) {
        input.classList.add("error-input");
    } else {
        input.classList.remove("error-input");
    }
}

// Validación en tiempo real de los inputs
function liveValidateInputs() {
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirm-password");

    if (emailInput) {
        emailInput.addEventListener("input", () => {
            const isValid = validateEmail(emailInput.value.trim());
            toggleErrorClass(emailInput, !isValid);
        });
    }

    if (passwordInput) {
        passwordInput.addEventListener("input", () => {
            const isValid = validatePassword(passwordInput.value.trim());
            toggleErrorClass(passwordInput, !isValid);
        });
    }

    if (confirmPasswordInput && passwordInput) {
        confirmPasswordInput.addEventListener("input", () => {
            const isMatch = confirmPasswordInput.value.trim() === passwordInput.value.trim();
            toggleErrorClass(confirmPasswordInput, !isMatch);
        });
    }
}
