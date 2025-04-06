<?php include_once "./config.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title and basic meta -->
	<title><?= $translations['auth']['login']['title'] ?> - <?= $translations['brand'] ?></title>
	<meta name="description" content="<?= $translations['meta']['description'] ?>">
	<meta name="keywords" content="<?= $translations['meta']['keywords'] ?>">
	<meta name="author" content="<?= $translations['meta']['author'] ?>">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/" />
	<meta property="og:title" content="<?php echo $translations['meta']['title']; ?>" />
	<meta property="og:description" content="<?php echo $translations['meta']['ogDescription']; ?>" />
	<meta property="og:image" content="http://tny.im/goh" />
	<!-- If required, we can add an email -->
	<meta property="og:email" content="me@example.com" />

	<!-- Canonical -->
	<link rel="canonical" href="https://www.finanzapp.es/login">

	<!-- Preconnect para Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Fonts and icons -->
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

	<!-- Favicon and other icons -->
	<link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">

	<!-- Aria-labelledby is used to associate elements with their titles -->
	<meta name="aria-labelledby" content="main-title">

	<!-- General styles -->
	<link rel="stylesheet" href="./css/landing_page.css">

	<!-- Specific styles for the register page -->
	<link rel="stylesheet" href="./css/auth.css">

	<!-- Notyf  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">

	<!-- ReCaptcha -->
	<script src="https://launch.finanzapp.es/js/api.js" integrity="sha384-CdhidNt+STVg/jxRNtQC1nw7l1Ys8/TxZI2ZVTypU9tDQ6goYcuMYbd8VR23C6/x" crossorigin="anonymous"></script>
</head>

<body>
	<!-- Mobile Menu -->
	<?php include_once "./includes/mobileMenu.php"; ?>

	<section class="blurM">

		<!-- Header -->
		<?php include_once "./includes/header.php"; ?>

		<main class="auth login">
			<div class="container">
				<div class="auth-form">
					<h2><?= $translations['auth']['login']['title'] ?></h2>
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
						<?= $translations['auth']['login']['no_account'] ?> <a href="./register.php" rel="noopener"
							aria-label="<?= $translations['auth']['login']['register'] ?>"><?= $translations['auth']['login']['register'] ?></a>
					</p>
				</div>
			</div>
		</main>

		<!-- Footer -->
		<?php include_once './includes/footer.php'; ?>

	</section>

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"
		integrity="sha384-T/4KgSWuZEPozpPz7rnnp/5lDSnpY1VPJCojf1S81uTHS1E38qgLfMgVsAeRCWc4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"
		integrity="sha384-uuNfwJfjOG2ukYi4eAB11/t3lP4Zjf75a3UhgkLzEpiX8JpJfacpG7Ye+0tiVMxT"
		crossorigin="anonymous"></script>
	<script src="./js/landing_page.js"></script>
	<script src="./js/validation.js"></script>

</body>

</html>