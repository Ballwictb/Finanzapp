document.addEventListener("DOMContentLoaded", function () {
    const registerForm = document.getElementById("registerForm");

    if (!registerForm) return;

    // Inicializamos Notyf directamente
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

        emailElem.classList.remove('error-input');
        passwordElem.classList.remove('error-input');
        confirmPasswordElem.classList.remove('error-input');

        if (!termsCheckbox.checked) {
            showError("Debe aceptar los términos y condiciones");
            isValid = false;
        }

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

        if (passwordValue !== confirmPasswordValue) {
            showError("Las contraseñas no coinciden", passwordElem, confirmPasswordElem);
            isValid = false;
        }

        if (isValid) {
            notyf.success("Registro exitoso");
        }
    });

    liveValidateInputs();
});

// Helper function to show errors
function showError(message, ...elements) {
    const notyf = new Notyf({
        duration: 3000,
        position: { x: 'right', y: 'top' },
        types: [
            {
                type: 'error',
                background: '#ff4444',
                dismissible: true
            }
        ]
    });

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
    const re = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
    return re.test(password);
}

// Real-time validation
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

function toggleErrorClass(input, hasError) {
    if (hasError) {
        input.classList.add("error-input");
    } else {
        input.classList.remove("error-input");
    }
}
