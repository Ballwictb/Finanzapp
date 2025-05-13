<?php include_once "../config/config.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title and basic meta -->
	<title><?= $translations['auth']['login']['title'] ?> | <?= $translations['brand'] ?></title>
	<meta name="description" content="<?= $translations['meta']['description'] ?>">
	<meta name="keywords" content="<?= $translations['meta']['keywords'] ?>">
	<meta name="author" content="<?= $translations['meta']['author'] ?>">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/login" />
	<meta property="og:title" content="<?= $translations['auth']['login']['title'] ?> | <?= $translations['brand'] ?>" />
	<meta property="og:description" content="<?php echo $translations['meta']['ogDescription']; ?>" />
	<meta property="og:image" content="<?= $translations['meta']['image'] ?>" />
	<!-- If required, we can add an email -->
	<meta property="og:email" content="me@example.com" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:title" content="<?php echo $translations['meta']['title']; ?>">
	<meta property="twitter:description" content="<?php echo $translations['meta']['description']; ?>">
	<meta property="twitter:image" content="<?= $translations['meta']['image'] ?>">


	<!-- Canonical -->
	<link rel="canonical" href="https://www.finanzapp.es/login">

	<!-- Preconnect para Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Fonts and icons -->
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

	<!-- Favicon and other icons -->
	<link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">

	<!-- Aria-labelledby is used to associate elements with their titles -->
	<meta name="aria-labelledby" content="main-title">

	<!-- General styles -->
	<link rel="stylesheet" href="../css/landing_page.css">
	<link rel="stylesheet" href="../css/scrollbar.css">

	<!-- Specific styles for the register page -->
	<link rel="stylesheet" href="../css/auth.css">

	<!-- Notyf  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">

	<!-- ReCaptcha -->
	<script src="../js/api.js" integrity="sha384-CdhidNt+STVg/jxRNtQC1nw7l1Ys8/TxZI2ZVTypU9tDQ6goYcuMYbd8VR23C6/x" crossorigin="anonymous"></script>

	<!-- Schema.org JSON-LD -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebPage",
			"name": "<?= $translations['auth']['login']['title'] ?> - FinanzApp",
			"description": "<?= $translations['meta']['description'] ?>",
			"url": "https://launch.finanzapp.es/login.php",
			"potentialAction": {
				"@type": "LoginAction",
				"target": {
					"@type": "EntryPoint",
					"urlTemplate": "https://launch.finanzapp.es/app/login.php",
					"actionPlatform": [
						"http://schema.org/DesktopWebPlatform",
						"http://schema.org/MobileWebPlatform"
					]
				}
			}
		}
	</script>
</head>

<body>
	<!-- Mobile Menu -->
	<?php include_once "../includes/mobileMenu.php"; ?>

	<section class="blurM">

		<!-- Header -->
		<?php include_once "../includes/header.php"; ?>

		<main class="auth login">
			<div class="container">
				<div class="auth-form">
					<h2><?= $translations['auth']['login']['title'] ?></h2>
					<div id="g_id_onload"
						data-client_id="665269631824-25f2bkbj039grhjavj17pkqjsjdqj0jr.apps.googleusercontent.com"
						data-context="signin"
						data-ux_mode="popup"
						data-callback="handleCredentialResponse"
						data-auto_prompt="false">
					</div>

					<div class="g_id_signin"
						data-type="standard"
						data-shape="rectangular"
						data-theme="outline"
						data-text="signin_with"
						data-size="large"
						data-logo_alignment="left">
					</div>
					<br>
					<hr>
					<br>
					<form id="loginForm" action="#" method="post">
						<div class="form-group">
							<label for="email"><?= $translations['auth']['login']['email_label'] ?></label>
							<input type="email" id="email" name="email"
								placeholder="<?= $translations['auth']['login']['email_placeholder'] ?>" required>
						</div>
						<div class="form-group">
							<label for="password"><?= $translations['auth']['login']['password_label'] ?></label>
							<input type="password" id="password" name="password"
								placeholder="<?= $translations['auth']['login']['password_placeholder'] ?>" required>
						</div>
						<div class="form-group">
							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6LdpGAErAAAAABtf_pOcsJbRBnytt5t8_WahFXAY"></div>

							<button type="submit" class="btn btn-primary btn-large" data-elem="login.submit"
								aria-label="<?= $translations['auth']['login']['submit'] ?>">
								<?= $translations['auth']['login']['submit'] ?>
							</button>
						</div>
					</form>
					<p class="form-note">
						<a href="./reset.php" rel="noopener"
							aria-label="<?= $translations['auth']['login']['forgot_password'] ?>">
							<?= $translations['auth']['login']['forgot_password'] ?>
						</a>
					</p>

					<p class="form-note">
						<?= $translations['auth']['login']['no_account'] ?>
						<a href="./register.php" rel="noopener"
							aria-label="<?= $translations['auth']['login']['register'] ?>">
							<?= $translations['auth']['login']['register'] ?>
						</a>
					</p>
				</div>
			</div>
		</main>


		<!-- Footer -->
		<?php include_once '../includes/footer.php'; ?>

	</section>

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"
		integrity="sha384-T/4KgSWuZEPozpPz7rnnp/5lDSnpY1VPJCojf1S81uTHS1E38qgLfMgVsAeRCWc4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"
		integrity="sha384-uuNfwJfjOG2ukYi4eAB11/t3lP4Zjf75a3UhgkLzEpiX8JpJfacpG7Ye+0tiVMxT"
		crossorigin="anonymous"></script>
	<script src="../js/landing_page.js"></script>
	<script src="../js/validationUtils.js"></script>
	<script src="../js/loginValidation.js"></script>
	<script src="../js/trans.js"></script>
	<script src="https://accounts.google.com/gsi/client<?php echo $translations['google']['lang'] ?>" async defer></script>
	<script>
		function handleCredentialResponse(response) {
			fetch('https://pro.finanzapp.es/app/auth/google-callback-login.php', {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json'
					},
					body: JSON.stringify({
						credential: response.credential
					})
				})
				.then(res => res.json())
				.then(data => {
					if (data.status === 'exists') {
						console.log('El usuario ya existe');
					} else if (data.status === 'inserted') {
						console.log('Usuario iniciado');
					}
					window.location.href = "/Finanzapp/index.php";
				});
		}
	</script>
</body>

</html>