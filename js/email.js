const btn = document.getElementById('sendContact');

// Generate International Timestamp (ISO format without time zone)
const now = new Date();
const formattedTime = now.toLocaleString('default', {
	year: 'numeric',
	month: '2-digit',
	day: '2-digit',
	hour: '2-digit',
	minute: '2-digit',
	hour12: false
}).replace(/\//g, '-'); // DD-MM-AAAA HH:MM

// Generate Universal Ticket number (UTC)
const utcNow = new Date().toISOString().replace(/-|T|:|\.|Z/g, '').slice(2, 14); // AAMMDDHHmmss
const ticketNumber = `${utcNow}-${Math.floor(1000 + Math.random() * 9000)}`;

let countdownInterval;

document.getElementById('contactForm')
	.addEventListener('submit', function (event) {
		event.preventDefault();

		const now = Date.now();
		const lastSent = localStorage.getItem('lastSentTime');

		if (lastSent && now - parseInt(lastSent) < 5 * 60 * 1000) {
			const remaining = Math.ceil((5 * 60 * 1000 - (now - parseInt(lastSent))) / 1000);
			startCooldown(remaining);
			return;
		}

		btn.value = 'Enviando...';
		btn.disabled = true;

		const serviceID = 'default_service';
		const templateID = 'template_er0sh5w';
		const name = document.getElementById("name").value.trim();
		const email = document.getElementById("email").value.trim();
		const subject = document.getElementById("subject").value.trim();
		const message = document.getElementById("message").value.trim();

		emailjs.send(serviceID, templateID, {
			title: subject,
			name: name,
			time: formattedTime,
			message: message,
			email: email,
			ticket_number: `TKT-${ticketNumber}`, // TKT-240515143059-7421
			current_year: new Date().getFullYear()
		})
			.then(() => {
				btn.value = 'Enviar mensaje';
				btn.disabled = false;
				localStorage.setItem('lastSentTime', Date.now().toString());
				startCooldown(5 * 60);
			}, (err) => {
				btn.value = 'Enviar mensaje';
				btn.disabled = false;
			});
	});

function startCooldown(seconds) {
	clearInterval(countdownInterval);

	btn.disabled = true;
	let remaining = seconds;

	countdownInterval = setInterval(() => {
		if (remaining <= 0) {
			clearInterval(countdownInterval);
			btn.disabled = false;
			btn.value = 'Enviar mensaje';
		} else {
			btn.value = `Espera ${remaining}s`;
			remaining--;
		}
	}, 1000);
}
