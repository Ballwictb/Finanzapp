<?php include_once "../config/config.php" ?> 

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title and basic meta -->
	<title><?= $translations['auth']['reset']['title'] ?> | <?= $translations['brand'] ?></title>
	<meta name="description" content="<?= $translations['meta']['description'] ?>">
	<meta name="keywords" content="<?= $translations['meta']['keywords'] ?>">
	<meta name="author" content="<?= $translations['meta']['author'] ?>">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/reset_password.php" />
	<meta property="og:title" content="<?= $translations['auth']['reset']['title'] ?> | <?= $translations['brand'] ?>" />
	<meta property="og:description" content="<?= $translations['meta']['ogDescription']; ?>" />
	<meta property="og:image" content="<?= $translations['meta']['image'] ?>" />
	<meta property="og:email" content="me@example.com" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?= $translations['meta']['title']; ?>">
	<meta name="twitter:description" content="<?= $translations['meta']['description']; ?>">
	<meta name="twitter:image" content="<?= $translations['meta']['image'] ?>">

	<!-- Canonical -->
	<link rel="canonical" href="https://www.finanzapp.es/reset_password.php">

	<!-- Preconnect para Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Fonts and icons -->
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">

	<!-- Aria-labelledby -->
	<meta name="aria-labelledby" content="main-title">

	<!-- General styles -->
	<link rel="stylesheet" href="../css/landing_page.css">
	<link rel="stylesheet" href="../css/scrollbar.css">

	<!-- Specific styles -->
	<link rel="stylesheet" href="../css/auth.css">

	<!-- Notyf  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

	<!-- ReCaptcha (opcional si se usa en reset) -->
	<script src="https://pro.finanzapp.es/js/api.js" integrity="sha384-CdhidNt+STVg/jxRNtQC1nw7l1Ys8/TxZI2ZVTypU9tDQ6goYcuMYbd8VR23C6/x" crossorigin="anonymous"></script>

	<!-- Schema.org JSON-LD -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebPage",
			"name": "<?= $translations['auth']['reset']['title'] ?> - FinanzApp",
			"description": "<?= $translations['meta']['description'] ?>",
			"url": "https://www.finanzapp.es/reset_password.php",
			"potentialAction": {
				"@type": "ResetPasswordAction",
				"target": {
					"@type": "EntryPoint",
					"urlTemplate": "https://launch.finanzapp.es/send_reset_link.php",
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
	<?php include_once "../includes/mobileMenu.php"; ?>
	<section class="blurM">

		<?php include_once "../includes/header.php"; ?>

		<main class="auth reset">
			<div class="container">
				<div class="auth-form">
					<h2><?= $translations['auth']['reset']['title'] ?></h2>
					<form id="resetForm" action="#" method="post">
						<div class="form-group">
							<label for="email"><?= $translations['auth']['reset']['email_label'] ?></label>
							<input type="email" id="email" name="email"
								placeholder="<?= $translations['auth']['reset']['email_placeholder'] ?>" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-large">
								<?= $translations['auth']['reset']['submit'] ?>
							</button>
						</div>
						<?php if (isset($_GET['sent'])): ?>
							<p class="form-success"><?= $translations['auth']['reset']['sent'] ?></p>
						<?php endif; ?>
					</form>
					<p class="form-note">
						<a href="./login.php" rel="noopener"><?= $translations['auth']['reset']['back_to_login'] ?></a>
					</p>
				</div>
			</div>
		</main>

		<?php include_once '../includes/footer.php'; ?>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
	<script src="../js/landing_page.js"></script>
	<script src="../js/resetValidation.js"></script>
	<script src="../js/trans.js"></script>
</body>

</html>
