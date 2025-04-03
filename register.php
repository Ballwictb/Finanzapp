<?php include_once "./config.php"; ?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $translations['auth']['register']['title']; ?> - <?php echo $translations['brand']; ?></title>
        <meta name="description" content="<?php echo $translations['auth']['meta']['register_description']; ?>">
        <meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>">
        <meta name="author" content="<?php echo $translations['meta']['author']; ?>">
        <meta name="robots" content="noindex, nofollow">
	    <link rel="canonical" href="https://www.finanzapp.es/register">

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
        <!-- Mobile Menu -->
        <?php include_once "./includes/mobileMenu.php"; ?>
        
        <section class="blurM">

        <!-- Header -->
        <?php include_once "./includes/header.php"; ?>


        <!-- Main register section with additional top margin for spacing -->
        <main class="auth">
            <div class="container">
                <div class="auth-form">
                    <h2 data-elem="register.title"><?php echo $translations['auth']['register']['title']; ?></h2>
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
        <?php include_once './includes/footer.php'; ?>
        
        </section>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
        <script src="./js/landing_page.js"></script>
        <script src="./js/validation.js"></script>
    </body>
</html>