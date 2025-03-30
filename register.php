<!DOCTYPE php>
<php lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Inicia sesión en FinanzApp, tu herramienta para gestionar tus finanzas personales de forma eficiente.">
		<meta name="keywords" content="finanzas, gestión financiera, FinanzApp, dinero, ahorro">
		<meta name="author" content="FinanzApp Team">
		<title>Registro - FinanzApp</title>

		<!-- Fonts and icons -->
		<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

		<!-- General styles (using part of the landing page CSS) -->
		<link rel="stylesheet" href="./css/landing_page.css">
		
		<!-- Specific styles for the register page -->
		<link rel="stylesheet" href="./css/auth.css">

		<!-- Favicon -->
		<link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">
	</head>

	<body>
		<!-- Header -->
		<?php include "./includes/header.php"; ?>

		<!-- Mobile Menu -->
		<?php include "./includes/mobileMenu.php"; ?>

		<!-- Main register section with additional top margin for spacing -->
		<main class="auth">
			<div class="container">
				<div class="auth-form">
					<h2 data-elem="register.title">Crear Cuenta</h2>
					<form id="registerForm" action="#" method="post">
						<div class="form-group">
							<label for="nombre" data-elem="register.fullname">Nombre Completo</label>
							<input type="text" id="nombre" name="nombre" placeholder="Warren Buffett" required>
						</div>
						<div class="form-group">
							<label for="email" data-elem="register.email">Email</label>
							<input type="email" id="email" name="email" placeholder="finanzapp@gmail.es" required>
						</div>
						<div class="form-group">
							<label for="password" data-elem="register.password">Contraseña</label>
							<input type="password" id="password" name="password" placeholder="1J#4_6*8"
								pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$"
								title="Password must be at least 8 characters long and include at least one lowercase letter, one uppercase letter, and one number."
								required>
						</div>
						<div class="form-group">
							<label for="confirm-password" data-elem="register.confirmPassword">Confirme la Contraseña</label>
							<input type="password" id="confirm-password" name="confirm-password" placeholder="1J#4_6*8" required>
						</div>
						<div class="form-group checkbox-container">
							<label class="checkbox-label">
								<input type="checkbox" name="terms" required>
							</label>
							<label for="terms" data-elem="register.terms">
								Acepto los <a href="#">términos y condiciones</a>
							</label>
						</div>
						<div class="form-group checkbox-container">
							<label class="checkbox-label">
								<input type="checkbox" name="notifications">
							</label>
							<label for="notifications" data-elem="register.notifications">
								Confirmo recibir notificaciones por email
							</label>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-large" data-elem="register.submit" aria-label="Register">Registro</button>
						</div>
					</form>
					<p class="form-note" data-elem="register.note">
						¿Ya tiene una cuenta? <a href="./login.php">Iniciar Sesión</a>
					</p>
				</div>
			</div>
		</main>

		<!-- Footer -->
		<?php include './includes/footer.php'; ?>
		
		<!-- Scripts -->
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script src="./js/landing_page.js"></script>
		<script src="./js/validation.js"></script>
	</body>
</php>