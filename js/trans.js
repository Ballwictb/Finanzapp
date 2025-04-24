const enlaces = document.querySelectorAll('.tran');
enlaces.forEach(enlace => {
	enlace.addEventListener('click', function (e) {
		e.preventDefault();
		document.body.classList.add('saliendo');
		const destino = this.href;
		setTimeout(() => {
			window.location.href = destino;
		}, 500);
	});
});
