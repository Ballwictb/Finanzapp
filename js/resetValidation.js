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

	const resetForm = document.getElementById("resetForm");
	if (!resetForm) return;

	resetForm.addEventListener('submit', function (event) {
		event.preventDefault();
		let isValid = true;

		const emailElem = document.getElementById("email");
		const emailValue = emailElem.value.trim();

		emailElem.classList.remove('error-input');

		// Validación de email
		if (!emailValue) {
			showError("El campo email es obligatorio", emailElem);
			isValid = false;
		} else if (!validateEmail(emailValue)) {
			showError("Introduce un email válido", emailElem);
			isValid = false;
		}

		if (isValid) {
			const xhr = new XMLHttpRequest();
			const formData = new FormData(resetForm);

			xhr.open('POST', 'https://pro.finanzapp.es/app/auth/sendResetLink.php', true);
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					try {
						const data = JSON.parse(xhr.responseText);

						if (xhr.status === 200 && data.success) {
							notyf.success("Correo de restablecimiento enviado");
							console.log("Resultado:", data.message);
						} else {
							notyf.error(data.message || "No se pudo enviar el correo");
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

	liveValidateInputs();
});

function showError(message, ...elements) {
	notyf.error(message);
	elements.forEach(element => {
		if (element) element.classList.add('error-input');
	});
}

function validateEmail(email) {
	const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
	return emailRegex.test(email);
}

function liveValidateInputs() {
	const emailElem = document.getElementById('email');
	emailElem.addEventListener('input', function () {
		if (validateEmail(emailElem.value)) {
			emailElem.classList.remove('error-input');
		} else {
			emailElem.classList.add('error-input');
		}
	});
}
