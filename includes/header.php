<?php include_once __DIR__ . "/../config/config.php";

// PARA PRUEBAS: fuerza un usuario en sesión. Descomenta para probar
/*
if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = [
		'name'   => 'Lamine Yamal',
		'url_image' => 'https://carefully-happy-quetzal.global.ssl.fastly.net/assets/avatars/01.jpeg',
		'email' => 'pruebas@gmail.com'
	];
}
*/

// Determines if the user is logged
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$isLoggedIn = isset($_SESSION['user']);
$user       = $_SESSION['user'] ?? null;
?>

<style>
	/* Estilos para el desplegable de perfil */
	.profile-toggle {
		transition: transform 0.3s ease, box-shadow 0.3s ease;
	}

	.profile-toggle:hover {
		transform: scale(1.1) rotate(5deg);
		box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
	}

	/* Animaciones clave para entrada y salida */
	@keyframes dropdownIn {
		0% {
			opacity: 0;
			transform: translateY(-20px) scale(0.8);
		}

		60% {
			opacity: 1;
			transform: translateY(10px) scale(1.05);
		}

		100% {
			opacity: 1;
			transform: translateY(0) scale(1);
		}
	}

	@keyframes dropdownOut {
		0% {
			opacity: 1;
			transform: translateY(0) scale(1);
		}

		100% {
			opacity: 0;
			transform: translateY(-20px) scale(0.8);
		}
	}

	.profile-dropdown {
		display: none;
		opacity: 0;
		transform-origin: top;
		position: absolute;
		top: 60px;
		right: 0;
		background: #fff;
		border: 2px solid #333;
		border-radius: 12px;
		box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
		width: 240px;
		padding: 20px;
		z-index: 1000;
		pointer-events: none;
	}

	.profile-dropdown.open {
		display: block;
		pointer-events: auto;
		animation: dropdownIn 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
	}

	.profile-dropdown.closing {
		animation: dropdownOut 0.3s ease-in forwards;
	}

	.profile-header {
		display: flex;
		align-items: center;
		gap: 12px;
		margin-bottom: 16px;
	}

	.profile-preview img {
		width: 200px;
		border-radius: 50%;
		object-fit: cover;
		border: 3px solid #333;
	}

	.profile-info p {
		margin: 0;
		color: #000;
		line-height: 1.3;
	}

	.config-button {
		display: block;
		text-align: center;
		padding: 8px 0;
		border-radius: 4px;
		text-decoration: none;
	}
</style>

<header class="header">
	<div class="container">
		<a href="<?php echo BASE_URL; ?>/index.php?lang=<?php echo $lang; ?>" rel="noopener" class="logo">
			<div class="logo-icon">
				<img src="<?php echo BASE_URL; ?>/manifest/manifest_icons/android-chrome-192x192.png" loading="lazy" alt="Icon">
			</div>
			<span data-elem="brand"><?php echo $translations['brand']; ?></span>
		</a>

		<!-- nav -->
		<nav class="main-nav" aria-label="menu">
			<ul class="nav-list">
				<li><a href="<?php echo BASE_URL; ?>/index.php?lang=<?php echo $lang; ?>#features" rel="noopener" class="nav-link" data-elem="nav.features"
						aria-label="<?php echo htmlspecialchars($translations['nav']['features'], ENT_QUOTES, 'UTF-8'); ?>">
						<?php echo htmlspecialchars($translations['nav']['features'], ENT_QUOTES, 'UTF-8'); ?></a></li>
				<li><a href="<?php echo BASE_URL; ?>/index.php?lang=<?php echo $lang; ?>#how-it-works" rel="noopener" class="nav-link" data-elem="nav.howItWorks"
						aria-label="<?php echo htmlspecialchars($translations['nav']['howItWorks'], ENT_QUOTES, 'UTF-8'); ?>">
						<?php echo htmlspecialchars($translations['nav']['howItWorks'], ENT_QUOTES, 'UTF-8'); ?></a></li>
				<li><a href="<?php echo BASE_URL; ?>/app/about.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="nav-link tran" data-elem="nav.about"
						aria-label="<?php echo htmlspecialchars($translations['nav']['about'], ENT_QUOTES, 'UTF-8'); ?>">
						<?php echo htmlspecialchars($translations['nav']['about'], ENT_QUOTES, 'UTF-8'); ?></a></li>
				<li><a href="<?php echo BASE_URL; ?>/app/contact.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="nav-link tran" data-elem="nav.contact"
						aria-label="<?php echo htmlspecialchars($translations['nav']['contact'], ENT_QUOTES, 'UTF-8'); ?>">
						<?php echo htmlspecialchars($translations['nav']['contact'], ENT_QUOTES, 'UTF-8'); ?></a></li>
			</ul>
		</nav>

		<!-- Languages (es-fr-en) -->
		<div class="nav-buttons">
			<div class="language-selector">
				<button class="language-toggle">
					<i class="fas fa-globe"></i>
					<span class="current-lang"><?php echo strtoupper($lang); ?></span>
				</button>
				<div class="language-dropdown">
					<a href="?lang=es<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" rel="noopener"
						data-lang="es" class="<?php echo ($lang == 'es') ? 'active' : ''; ?> tran">Español</a>
					<a href="?lang=en<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" rel="noopener"
						data-lang="en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?> tran">English</a>
					<a href="?lang=fr<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" rel="noopener"
						data-lang="fr" class="<?php echo ($lang == 'fr') ? 'active' : ''; ?> tran">Français</a>
				</div>
			</div>
			<?php if ($isLoggedIn): ?>
				<div class="profile-wrapper" style="position: relative; display: flex; align-items: center; gap: 10px;">
					<!-- Avatar toggle -->
					<button class="profile-toggle" aria-label="Abrir menú de usuario">
						<img
							src="<?php echo htmlspecialchars($user['url_image'], ENT_QUOTES); ?>"
							alt="Avatar de <?php echo htmlspecialchars($user['name'], ENT_QUOTES); ?>"
							class="avatar" style="width: 40px; height: 40px; border-radius: 50%;">
					</button>
					<!-- Logout -->
					<button id="logoutBtn" class="btn btn-outline"><?php echo $translations['userConfig']['logout']; ?></button>

					<!-- Dropdown menu -->
					<div class="profile-dropdown" id="profileDropdown">
						<div class="profile-header">
							<div class="profile-preview">
								<img id="dropdownAvatar" src="" alt="Avatar ampliado">
							</div>
							<div class="profile-info">
								<p id="dropdownName" style="font-weight: bold"></p>
								<p id="dropdownEmail"></p>
							</div>
						</div>
						<a href="<?php echo BASE_URL; ?>/app/userConfig.php?lang=<?php echo $lang; ?>" class="btn btn-primary config-button">
							<?php echo $translations['userConfig']['configuration']; ?>
						</a>
					</div>
				</div>
			<?php else: ?>
				<a href="<?php echo BASE_URL; ?>/app/login.php?lang=<?php echo $lang; ?>"
					class="btn btn-outline tran">
					<?php echo $translations['buttons']['login']; ?>
				</a>
				<a href="<?php echo BASE_URL; ?>/app/register.php?lang=<?php echo $lang; ?>" class="btn btn-primary tran">
					<?php echo $translations['buttons']['register']; ?>
				</a>
			<?php endif; ?>
		</div>

		<button class="menu-toggle" aria-label="Menú">
			<span></span>
			<span></span>
		</button>
	</div>
</header>

<!-- Script for user config -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const toggle = document.querySelector('.profile-toggle');
		const dropdown = document.getElementById('profileDropdown');
		const avatarImg = document.getElementById('dropdownAvatar');
		const nameEl = document.getElementById('dropdownName');
		const emailEl = document.getElementById('dropdownEmail');

		// Leer objeto User de localStorage
		const userData = JSON.parse(localStorage.getItem('User') || '{}');
		const storedName = userData.name || '<?php echo htmlspecialchars($user['name'], ENT_QUOTES); ?>';
		const storedEmail = userData.email || '<?php echo htmlspecialchars($user['email'] ?? '', ENT_QUOTES); ?>';
		const avatarSrc = userData.url_image || '<?php echo htmlspecialchars($user['url_image'], ENT_QUOTES); ?>';

		nameEl.textContent = storedName;
		emailEl.textContent = storedEmail;
		avatarImg.src = avatarSrc;

		toggle.addEventListener('click', function(e) {
			e.stopPropagation();
			if (dropdown.classList.contains('open')) {
				dropdown.classList.add('closing');
				dropdown.addEventListener('animationend', () => {
					dropdown.classList.remove('open', 'closing');
				}, {
					once: true
				});
			} else {
				dropdown.classList.remove('closing');
				dropdown.classList.add('open');
			}
		});

		document.addEventListener('click', function(e) {
			if (!toggle.contains(e.target) && !dropdown.contains(e.target)) {
				if (dropdown.classList.contains('open')) {
					dropdown.classList.add('closing');
					dropdown.addEventListener('animationend', () => {
						dropdown.classList.remove('open', 'closing');
					}, {
						once: true
					});
				}
			}
		});
	});
</script>

<!-- Script to logout -->
<script>
	document.addEventListener("DOMContentLoaded", () => {
		document.querySelectorAll("#logoutBtn").forEach(btn => {
			btn.addEventListener("click", () => {
				fetch("<?php echo BASE_URL; ?>/app/auth/logout.php", {
						method: "POST",
						headers: {
							"X-Requested-With": "XMLHttpRequest"
						}
					})
					.then(res => res.json())
					.then(data => {
						if (data.success) window.location.href = "<?php echo BASE_URL; ?>/index.php";
						else alert("Error al cerrar sesión");
					})
					.catch(err => console.error("Logout error:", err));
			});
		});
	});
</script>

<script src="<?php echo BASE_URL; ?>/js/translations.js" defer></script>