<?php include_once "../config/config.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title and basic meta -->
	<title><?php echo $translations['auth']['register']['title']; ?> | <?php echo $translations['brand']; ?></title>
	<meta name="description" content="<?php echo $translations['auth']['meta']['register_description']; ?>">
	<meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>">
	<meta name="author" content="<?php echo $translations['meta']['author']; ?>">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/register" />
	<meta property="og:title" content="<?php echo $translations['auth']['register']['title']; ?> | <?php echo $translations['brand']; ?>" />
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
	<link rel="canonical" href="https://www.finanzapp.es/register">

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

	<!-- Schema.org JSON-LD -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebPage",
			"name": "<?php echo $translations['auth']['register']['title']; ?> - FinanzApp",
			"description": "<?php echo $translations['auth']['meta']['register_description']; ?>",
			"url": "https://launch.finanzapp.es/register.php",
			"potentialAction": {
				"@type": "RegisterAction",
				"target": {
					"@type": "EntryPoint",
					"urlTemplate": "https://launch.finanzapp.es/app/register.php",
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


		<!-- Main register section with additional top margin for spacing -->
		<main class="auth">
			<div class="container">
				<div class="auth-form">
					<h2 data-elem="register.title"><?php echo $translations['auth']['register']['title']; ?></h2>
					<div id="g_id_onload"
						data-client_id="665269631824-25f2bkbj039grhjavj17pkqjsjdqj0jr.apps.googleusercontent.com"
						data-context="signup"
						data-ux_mode="redirect"
						data-login_uri="https://pro.finanzapp.es/app/auth/google-callback.php"
						data-auto_prompt="false"
						style="width: 100%;">
					</div>

					<div class="g_id_signin"
						data-type="standard"
						data-shape="rectangular"
						data-theme="outline"
						data-text="signup_with"
						data-size="large"
						data-logo_alignment="left"
						style="width: 100%;">
					</div>
					<br>
					<hr>
					<br>
					<form id="registerForm" action="#" method="post">
						<div class="form-group">
							<label for="nombre" data-elem="register.fullname"><?php echo $translations['auth']['register']['fullname']; ?></label>
							<input type="text" id="nombre" name="nombre" placeholder="<?php echo $translations['auth']['register']['fullname_placeholder']; ?>" required>
						</div>
						<div class="form-group">
							<label for="email" data-elem="register.email"><?php echo $translations['auth']['register']['email']; ?></label>
							<input type="email" id="email" name="email" placeholder="<?php echo $translations['auth']['register']['email_placeholder']; ?>" required>
						</div>
						<div class="form-group">
							<label for="password" data-elem="register.password"><?php echo $translations['auth']['register']['password']; ?></label>
							<input type="password" id="password" name="password" placeholder="<?php echo $translations['auth']['login']['password_placeholder']; ?>" required>
						</div>
						<div class="form-group">
							<label for="confirm-password" data-elem="register.confirmPassword"><?php echo $translations['auth']['register']['confirmPassword']; ?></label>
							<input type="password" id="confirm-password" name="confirm-password" placeholder="<?php echo $translations['auth']['login']['password_placeholder']; ?>" required>
						</div>
						<div class="form-group checkbox-container">
							<label class="checkbox-label">
								<input type="checkbox" name="terms" id="terms" required>
							</label>
							<label for="terms" data-elem="register.terms">
								<?php echo $translations['auth']['register']['terms']; ?>
							</label>
						</div>
						<div class="form-group checkbox-container">
							<label class="checkbox-label">
								<input type="checkbox" name="notifications" id="notifications">
							</label>
							<label for="notifications" data-elem="register.notifications">
								<?php echo $translations['auth']['register']['notifications']; ?>
							</label>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-large" data-elem="register.submit" aria-label="<?php echo $translations['auth']['register']['submit']; ?>">
								<?php echo $translations['auth']['register']['submit']; ?>
							</button>
						</div>
					</form>
					<p class="form-note" data-elem="register.note">
						<?php echo $translations['auth']['register']['note']; ?>
						<a href="./login.php" rel="noopener" aria-label="<?php echo $translations['auth']['register']['login']; ?>"><?php echo $translations['auth']['register']['login']; ?></a>
					</p>
				</div>
			</div>
		</main>

		<!-- Footer -->
		<?php include_once '../includes/footer.php'; ?>

	</section>

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js" integrity="sha384-T/4KgSWuZEPozpPz7rnnp/5lDSnpY1VPJCojf1S81uTHS1E38qgLfMgVsAeRCWc4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js" integrity="sha384-uuNfwJfjOG2ukYi4eAB11/t3lP4Zjf75a3UhgkLzEpiX8JpJfacpG7Ye+0tiVMxT" crossorigin="anonymous"></script>
	<script src="../js/landing_page.js"></script>
	<script src="../js/validationUtils.js"></script>
	<script src="../js/registerValidation.js"></script>
	<script src="../js/trans.js"></script>
	<script src="https://accounts.google.com/gsi/client<?php echo $translations['google']['lang'] ?>" async defer></script>


</body>

</html>
