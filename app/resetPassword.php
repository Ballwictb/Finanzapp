<?php include_once __DIR__ . "/../config/config.php"; ?>

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
    <meta property="og:url" content="https://www.finanzapp.es/resetPassword.php" />
    <meta property="og:title" content="<?= $translations['auth']['reset']['title'] ?> | <?= $translations['brand'] ?>" />
    <meta property="og:description" content="<?= $translations['meta']['ogDescription']; ?>" />
    <meta property="og:image" content="<?= $translations['meta']['image'] ?>" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/landing_page.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

    <!-- Fonts and icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">
</head>

<body>
    <?php include_once __DIR__ . "/../includes/mobileMenu.php"; ?>
    <section class="blurM">

        <?php include_once __DIR__ . "/../includes/header.php"; ?>

        <main class="auth reset-password">
            <div class="container">
                <div class="auth-form" action="#" method="post">
                    <h2><?= $translations['auth']['reset']['title'] ?></h2>
                    <form id="resetPasswordForm">
                        <input type="hidden" name="token" value="<?= htmlspecialchars($_GET['token'] ?? '') ?>">
                        <div class="form-group">
                            <label for="password"><?= $translations['auth']['reset']['new_password_label'] ?></label>
                            <input type="password" id="password" name="new_password" placeholder="<?= $translations['auth']['reset']['new_password_placeholder'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password"><?= $translations['auth']['reset']['confirm_password_label'] ?></label>
                            <input type="password" id="confirm-password" name="confirm_password" placeholder="<?= $translations['auth']['reset']['new_password_placeholder'] ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-large">
                                <?= $translations['auth']['reset']['submit_new_pass'] ?>
                            </button>
                        </div>
                        <?php if (isset($_GET['error'])): ?>
                            <p class="form-error"><?= htmlspecialchars($_GET['error']) ?></p>
                        <?php elseif (isset($_GET['success'])): ?>
                            <p class="form-success"><?= $translations['auth']['reset']['success_message'] ?></p>
                        <?php endif; ?>
                    </form>
                    <p class="form-note">
                        <a href="./login.php" rel="noopener"><?= $translations['auth']['reset']['back_to_login'] ?></a>
                    </p>
                </div>
            </div>
        </main>

        <?php include_once __DIR__ . "/../includes/footer.php"; ?>
    </section>

    <!-- Notyf for notifications -->
    <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
    <!-- Core scripts -->
    <script src="../js/landing_page.js"></script>
    <script src="../js/passwordChange.js"></script>
    <script src="../js/trans.js"></script>
    <!-- Password validation utilities -->
    <script src="../js/validationUtils.js"></script>
</body>

</html>
