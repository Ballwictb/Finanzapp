<?php include_once __DIR__ . "/../config/config.php";

// PARA PRUEBAS: fuerza un usuario en sesión. Descomenta para probar
/*
if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = [
		'id'   => '2',
		'name'   => 'Lamine Yamal',
		'accept_news'   => '1',
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
						<div>
							<a href="<?php echo BASE_URL; ?>/app/userConfig.php?lang=<?php echo $lang; ?>" class="btn btn-primary config-button">
								<?php echo $translations['userConfig']['configuration']; ?>
							</a>
							<!-- Logout -->
							<button style="margin-left: 12px;" id="logoutBtn" class="btn btn-delete-outline"><?php echo $translations['userConfig']['logout']; ?></button>
						</div>
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