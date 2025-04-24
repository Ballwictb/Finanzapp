// wait DOM to be loaded
document.addEventListener("DOMContentLoaded", () => {
	initLoader();
	//initCursor();
	initHeaderScroll();
	initMobileMenu();
	initHeroChart();
	initBackToTop();
	// initCookieConsent();
});

// Loader animation con control de sesión
function initLoader() {
	const loader = document.querySelector('.loader');

	if (!loader) return;

	// Solo mostrar si no se ha visto en esta sesión
	if (!sessionStorage.getItem("loaderSeen")) {
		loader.classList.remove("hidden");

		setTimeout(() => {
			loader.classList.add("hidden");
			document.body.style.overflow = "auto";
			sessionStorage.setItem("loaderSeen", "true");
		}, 3000);
	} else {
		loader.classList.add("hidden");
		document.body.style.overflow = "auto";
	}
}

// custom cursor
function initCursor() {
	const cursor = document.querySelector('.cursor');
	const cursorFollower = document.querySelector('.cursor-follower');

	if (!cursor || !cursorFollower) return;

	document.addEventListener("mousemove", (e) => {
		cursor.style.left = e.clientX + "px";
		cursor.style.top = e.clientY + "px";

		setTimeout(() => {
			cursorFollower.style.left = e.clientX + 'px';
			cursorFollower.style.top = e.clientY + 'px';
		}, 50);
	});
}

// Header scroll effect
function initHeaderScroll() {
	const header = document.querySelector('.header');

	if (!header) return;

	window.addEventListener('scroll', () => {
		if (window.scrollY > 50) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	});
}

// Mobile menu
function initMobileMenu() {
	const menuToggle = document.querySelector('.menu-toggle');
	const menuClose = document.querySelector('.menu-close');
	const mobileMenu = document.querySelector('.mobile-menu');
	const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
	const mainContent = document.querySelectorAll('.blurM');

	if (!menuToggle || !menuClose || !mobileMenu) return;

	function openMenu() {
		menuToggle.classList.add('active');
		mobileMenu.classList.add('active');
		document.body.style.overflow = 'hidden';
		mainContent.forEach(mainM => {
			mainM.style.filter = 'blur(10px)';
		});
	}

	function closeMenu() {
		menuToggle.classList.remove('active');
		mobileMenu.classList.remove('active');
		document.body.style.overflow = 'auto';
		mainContent.forEach(mainM => {
			mainM.style.filter = 'blur(0px)';
		});
	}

	menuToggle.addEventListener('click', openMenu);
	menuClose.addEventListener('click', closeMenu);

	mobileNavLinks.forEach(link => {
		link.addEventListener('click', closeMenu);
	});

	document.addEventListener('click', (event) => {
		const isClickInsideMenu = mobileMenu.contains(event.target);
		const isClickOnToggle = menuToggle.contains(event.target);

		if (mobileMenu.classList.contains('active') && !isClickInsideMenu && !isClickOnToggle) {
			closeMenu();
		}
	});
}

// Hero Chart (Ingresos vs Gastos)
function initHeroChart() {
	const ctx = document.getElementById("mainChart");

	if (!ctx) return;

	let chart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
			datasets: [
				{
					label: 'Ingresos',
					data: [1500, 1800, 1600, 2200, 1900, 2540],
					borderColor: '#0066ff',
					backgroundColor: 'rgba(0, 102, 255, 0.1)',
					tension: 0.4,
					fill: true
				},
				{
					label: 'Gastos',
					data: [1200, 1400, 1300, 1800, 1600, 1825],
					borderColor: '#ff3366',
					backgroundColor: 'rgba(255, 51, 102, 0.1)',
					tension: 0.4,
					fill: true
				}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
				legend: {
					display: false
				},
				tooltip: {
					mode: 'index',
					intersect: false
				}
			},
			scales: {
				y: {
					beginAtZero: true,
					grid: {
						display: true,
						color: 'rgba(0, 0, 0, 0.05)'
					},
					ticks: {
						callback: value => value + '€'
					}
				},
				x: {
					grid: {
						display: false
					}
				}
			}
		}
	});
	chart;
}

// Back to top button
function initBackToTop() {
	const backToTopButton = document.getElementById('backToTop');

	if (!backToTopButton) return;

	window.addEventListener('scroll', () => {
		backToTopButton.classList.toggle('active', window.scrollY > 300);
	});

	backToTopButton.addEventListener('click', () => {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});
}
