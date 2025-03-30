<!DOCTYPE php>
<php lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Inicia sesión en FinanzApp, tu herramienta para gestionar tus finanzas personales de forma eficiente.">
		<meta name="keywords" content="finanzas, gestión financiera, FinanzApp, dinero, ahorro">
		<meta name="author" content="FinanzApp Team">
		<title>Inicio Sesión - FinanzApp</title>

		<!-- Fonts and icons -->
		<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

		<!-- General styles -->
		<link rel="stylesheet" href="./css/landing_page.css">
		
		<!-- Specific styles for the register page -->
		<link rel="stylesheet" href="./css/auth.css">

		<!-- Notyf  -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

		<!-- Favicon -->
		<link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">
	</head>

	<body>
		<!-- Header -->
		<?php include "./includes/header.php"; ?>

		<!-- Mobile Menu -->
		<?php include "./includes/mobileMenu.php"; ?>

		<main class="auth login">
			<div class="container">
				<div class="auth-form">
					<h2>Iniciar Sesión</h2>
					<form id="loginForm" action="#" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" placeholder="finanzapp@gmail.com" required>
						</div>
						<div class="form-group">
							<label for="password">Contraseña</label>
							<input type="password" id="password" name="password" placeholder="1J#4_6*8" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-large" data-elem="login.submit" aria-label="Iniciar sesión">Iniciar Sesion</button>
						</div>
					</form>
					<p class="form-note">
						¿No tienes una cuenta? <a href="./register.php">Regístrate</a>
					</p>
				</div>
			</div>
		</main>

		<!-- Footer -->
		<?php include './includes/footer.php'; ?>

		<!-- Scripts -->
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script src="./js/landing_page.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
		<script src="./js/validation.js"></script>

	</body>
</php>