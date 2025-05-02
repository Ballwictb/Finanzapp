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

	const registerForm = document.getElementById("registerForm");
	if (!registerForm) return;

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
			const xhr = new XMLHttpRequest();
			const formData = new FormData(loginForm);

			xhr.open('POST', 'https://pro.finanzapp.es/app/auth/sendRegister.php', true);
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4 && xhr.status === 200) {
					const data = JSON.parse(xhr.responseText);


					if (data.success) {
						notyf.success("Registro exitoso");
						console.log("Usuario Registrado:", data.message);
					} else {
						notyf.error("Registro fallido");
					}
				}
			};

			xhr.send(formData);
		}
	});

	liveValidateInputs();
});
