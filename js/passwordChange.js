document.addEventListener("DOMContentLoaded", function () {
    // Inicializar Notyf
    const notyf = new Notyf({
        duration: 3000,
        position: { x: 'right', y: 'top' },
        types: [
            { type: 'error', background: '#ff4444', dismissible: true },
            { type: 'success', background: '#00C851', dismissible: true }
        ]
    });

    const resetForm = document.getElementById("resetPasswordForm");
    if (!resetForm) return;

    resetForm.addEventListener('submit', function (event) {
        event.preventDefault();
        let isValid = true;

        const newPassElem = document.getElementById("password");
        const confirmPassElem = document.getElementById("confirm-password");
        const newPassValue = newPassElem.value.trim();
        const confirmValue = confirmPassElem.value.trim();

        // Limpia estados previos
        [newPassElem, confirmPassElem].forEach(el => el.classList.remove('error-input'));

        // Validación: no vacíos
        if (!newPassValue) {
            showError("El campo contraseña es obligatorio", newPassElem);
            isValid = false;
        } else if (!validatePassword(newPassValue)) {
            showError("La contraseña no cumple los requisitos", newPassElem);
            isValid = false;
        }

        if (!confirmValue) {
            showError("Debes confirmar la contraseña", confirmPassElem);
            isValid = false;
        } else if (newPassValue !== confirmValue) {
            showError("Las contraseñas no coinciden", newPassElem, confirmPassElem);
            isValid = false;
        }

        if (isValid) {
            const xhr = new XMLHttpRequest();
            const formData = new FormData(resetForm);

            // Nos aseguramos de que el token esté bien incluido
            const token = resetForm.querySelector('input[name="token"]').value;
            formData.set('token', token);

            xhr.open('POST', 'https://pro.finanzapp.es/app/auth/resetPassword.php', true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    try {
                        const data = JSON.parse(xhr.responseText);

                        if (xhr.status === 200 && data.success) {
                            notyf.success(data.message || "Contraseña restablecida con éxito");
                            resetForm.reset();
                        } else {
                            notyf.error(data.message || "No se pudo restablecer la contraseña");
                        }
                    } catch (e) {
                        console.error("Error al parsear JSON:", xhr.responseText);
                        notyf.error("Error inesperado. Intenta más tarde.");
                    }
                }
            };

            xhr.send(formData);
        }
    });

    // Validación en vivo
    liveValidateInputs();
});

function showError(message, ...elements) {
    // Asumimos que `notyf` es accesible en este scope o lo pasamos como global
    window.notyf.error(message);
    elements.forEach(el => el && el.classList.add('error-input'));
}
