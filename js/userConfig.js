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

    const configForm = document.getElementById("configForm");
    if (!configForm) return;

    configForm.addEventListener("submit", function (event) {
        event.preventDefault();
        let isValid = true;

        const nameElem = document.getElementById("name");
        const pwdElem = document.getElementById("password");
        const confirmElem = document.getElementById("confirm-password");

        [nameElem, pwdElem, confirmElem].forEach(el => el.classList.remove("error-input"));

        // Validar nombre
        if (!nameElem.value.trim()) {
            showError("El nombre no puede estar vacío", nameElem);
            isValid = false;
        }

        // Validar contraseña (si se introduce)
        if (pwdElem.value) {
            if (!validatePassword(pwdElem.value)) {
                showError("La contraseña debe tener al menos 8 caracteres, una mayúscula y un número", pwdElem);
                isValid = false;
            } else if (pwdElem.value !== confirmElem.value) {
                showError("Las contraseñas no coinciden", confirmElem);
                isValid = false;
            }
        }

        if (!isValid) return;

        // Envío XHR
        const xhr = new XMLHttpRequest();
        const formData = new FormData(configForm);
        xhr.open("POST", `${BASE_URL}/app/auth/sendUserConfig.php`, true);
        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        xhr.onreadystatechange = () => {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    data.success
                        ? notyf.success("Cambios guardados con éxito")
                        : notyf.error(data.message || "Error al guardar");
                } else {
                    notyf.error("Error de red, inténtalo de nuevo");
                }
            }
        };
        xhr.send(formData);
    });

    if (typeof liveValidateInputs === "function") {
        liveValidateInputs();
    }
});
