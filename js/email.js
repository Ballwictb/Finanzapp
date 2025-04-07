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

document.getElementById('contactForm')
	.addEventListener('submit', function (event) {
		event.preventDefault();

		btn.value = 'Enviando...';

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
			}, (err) => {
				btn.value = 'Enviar mensaje';
				// alert(JSON.stringify(err));
			});
	});
