<?php include_once "../config/config.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $translations['auth']['config']['title'] ?? 'Configuración'; ?> | <?php echo $translations['brand']; ?></title>
	<meta name="description" content="<?php echo $translations['auth']['meta']['config_description'] ?? ''; ?>">
	<meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>">
	<meta name="author" content="<?php echo $translations['meta']['author']; ?>">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/userConfig" />
	<meta property="og:title" content="<?php echo $translations['auth']['config']['title'] ?? 'Configuración'; ?> | <?php echo $translations['brand']; ?>" />
	<meta property="og:description" content="<?php echo $translations['meta']['ogDescription']; ?>" />
	<meta property="og:image" content="<?= $translations['meta']['image'] ?>" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:title" content="<?php echo $translations['meta']['title']; ?>">
	<meta property="twitter:description" content="<?php echo $translations['meta']['description']; ?>">
	<meta property="twitter:image" content="<?= $translations['meta']['image'] ?>">

	<link rel="canonical" href="https://www.finanzapp.es/userConfig">

	<!-- Fonts & icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">
	<link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">

	<!-- Global styles -->
	<link rel="stylesheet" href="../css/landing_page.css">
	<link rel="stylesheet" href="../css/scrollbar.css">
	<link rel="stylesheet" href="../css/auth.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

	<!-- Avatar CSS from userConfig -->
	<style>
		.avatar-options {
			display: flex;
			flex-wrap: wrap;
			gap: 0.5rem;
			margin-bottom: 1rem;
		}

		.avatar-options label {
			cursor: pointer;
			border: 2px solid transparent;
			border-radius: 4px;
			transition: border-color 0.2s;
		}

		.avatar-options input[type="radio"] {
			display: none;
		}

		.avatar-options img {
			width: 60px;
			height: 60px;
			border-radius: 50%;
			object-fit: cover;
		}

		.avatar-options input[type="radio"]:checked+img {
			border: 2px solid #007bff;
		}
	</style>
</head>

<body>
	<?php include_once "../includes/mobileMenu.php"; ?>
	<section class="blurM">
		<?php include_once "../includes/header.php"; ?>

		<main class="auth">
			<div class="container">
				<div class="auth-form">
					<h2><?php echo $translations['userConfig']['configuration-full']; ?></h2>
					<form id="configForm" method="post">
						<!-- Avatar -->
						<div class="form-group">
							<label><?php echo $translations['userConfig']['avatar-select']; ?></label>
							<div class="avatar-options">
								<?php for ($i = 1; $i <= 10; $i++): $num = str_pad($i, 2, '0', STR_PAD_LEFT);
									$url = "https://carefully-happy-quetzal.global.ssl.fastly.net/assets/avatars/{$num}.jpeg"; ?>
									<label>
										<input type="radio" name="avatar" value="<?= $url ?>" <?= ($user['url_image'] ?? '') === $url ? 'checked' : '' ?> />
										<img src="<?= $url ?>" alt="Avatar <?= $num ?>" />
									</label>
								<?php endfor; ?>
								<label>
									<input type="radio" name="avatar" value="default" <?= empty($user['url_image']) ? 'checked' : '' ?> />
									<img src="https://carefully-happy-quetzal.global.ssl.fastly.net/assets/avatars/default.jpeg" alt="Avatar Default" />
								</label>
							</div>
						</div>
						<!-- Name -->
						<div class="form-group">
							<label for="name"><?php echo $translations['auth']['register']['fullname']; ?></label>
							<input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name'] ?? '', ENT_QUOTES) ?>" required />
						</div>
						<!-- Password -->
						<div class="form-group">
							<label for="password"><?php echo $translations['userConfig']['new-password']; ?></label>
							<input type="password" id="password" name="password" placeholder="<?php echo $translations['auth']['config']['password_placeholder'] ?? ''; ?>" />
						</div>
						<div class="form-group">
							<label for="confirm-password"><?php echo $translations['auth']['register']['confirmPassword']; ?></label>
							<input type="password" id="confirm-password" name="confirm_password" placeholder="<?php echo $translations['auth']['config']['confirmPassword_placeholder'] ?? ''; ?>" />
						</div>
						<!-- Notifications -->
						<div class="form-group checkbox-container">
							<label class="checkbox-label"><input type="checkbox" id="notifications" name="notifications" <?= isset($user['notifications']) && $user['notifications'] ? 'checked' : '' ?> /></label>
							<label for="notifications"><?php echo $translations['userConfig']['notifications']; ?></label>
						</div>
						<!-- Submit -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-large"><?php echo $translations['userConfig']['confirm-changes']; ?></button>
						</div>
						<!-- Delete account -->
						<div class="form-group">
							<button type="button" id="deleteBtn" class="btn btn-delete-outline btn-delete-large">
								<?php echo $translations['userConfig']['delete-account']; ?>
							</button>
						</div>

					</form>
				</div>
			</div>
		</main>

		<?php include_once '../includes/footer.php'; ?>
	</section>

	<!-- Script to delete the account completely from the DB -->
	<script>
		document.getElementById('deleteBtn').addEventListener('click', function(e) {
			e.preventDefault();

			Swal.fire({
				title: '¿Estás seguro?',
				text: "¡No podrás revertir esto!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Sí, eliminar',
				cancelButtonText: 'Cancelar',
				reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					// Ejecutamos el fetch directamente
					fetch("<?php echo BASE_URL; ?>/app/auth/deleteAccount.php", {
							method: "POST",
							headers: {
								"X-Requested-With": "XMLHttpRequest"
							}
						})
						.then(response => response.json())
						.then(data => {
							if (!data.success) {
								return Swal.fire('Error', 'Error al borrar cuenta', 'error');
							}
							// Mostramos el alert de éxito y al cerrarlo redirigimos:
							Swal.fire(
								'¡Eliminada!',
								'Tu cuenta ha sido eliminada.',
								'success'
							).then(() => {
								// Esto se ejecuta cuando el usuario hace click en "OK"
								window.location.href = "<?php echo BASE_URL; ?>/index.php";
							});
						})
						.catch(error => {
							console.error("Error al hacer delete:", error);
							Swal.fire('Error', 'Ocurrió un problema inesperado', 'error');
						});

				} else if (result.dismiss === Swal.DismissReason.cancel) {
					Swal.fire(
						'Cancelado',
						'Tu cuenta está a salvo :)',
						'error'
					);
				}
			});
		});
	</script>

	<script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"
		integrity="sha384-uuNfwJfjOG2ukYi4eAB11/t3lP4Zjf75a3UhgkLzEpiX8JpJfacpG7Ye+0tiVMxT"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" 
		integrity="sha384-xdcph3JEuALbYZ4O+KG62jdgvvn+yDzS36x/q1GUFy7bmmxytMWdDNpt3+dmyage" 
		crossorigin="anonymous"></script>
	<script src="../js/landing_page.js"></script>
	<script src="../js/trans.js"></script>
	<script src="../js/userConfig.js"></script>
	<script src="../js/validationUtils.js"></script>
</body>

</html>