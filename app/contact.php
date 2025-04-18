<?php include_once "../config/config.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title and basic meta -->
    <title><?php echo $translations['contact']['meta']['title']; ?></title>
    <meta name="description" content="<?php echo $translations['contact']['meta']['description']; ?>" />
    <meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>" />
    <meta name="author" content="<?= $translations['meta']['author'] ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.finanzapp.es/contact" />
    <meta property="og:title" content="<?php echo $translations['contact']['meta']['title']; ?>" />
    <meta property="og:description" content="<?php echo $translations['meta']['ogDescription']; ?>" />
    <meta property="og:image" content="https://launch.finanzapp.es/assets/contacto_image_large.webp" />
    <!-- If required, we can add an email -->
    <meta property="og:email" content="me@example.com" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?php echo $translations['meta']['title']; ?>">
    <meta property="twitter:description" content="<?php echo $translations['meta']['description']; ?>">
    <meta property="twitter:image" content="https://launch.finanzapp.es/assets/contacto_image_large.webp">

    
    <!-- Canonical -->
    <link rel="canonical" href="https://www.finanzapp.es/contact">

    <!-- Preconnect for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- External Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

    <!-- Favicon and other icons -->
    <link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">

    <!-- Manifest -->
    <link rel="manifest" href="../manifest/manifest.json">

    <!-- Aria-labelledby is used to associate elements with their titles -->
    <meta name="aria-labelledby" content="main-title">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/landing_page.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="stylesheet" href="../css/auth.css">

    <!-- Notyf  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">
</head>

<body>
    <!-- Mobile Menu -->
    <?php include_once "../includes/mobileMenu.php"; ?>

    <section class="blurM">
        <!-- Header -->
        <?php include_once "../includes/header.php"; ?>

        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title" data-elem="contact.title"><?php echo $translations['contact']['title']; ?></h1>
                <p class="page-description" data-elem="contact.description"><?php echo $translations['contact']['description']; ?></p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-content">
                    <div class="contact-info">
                        <h2 class="contact-title" data-elem="contact.infoTitle"><?php echo $translations['contact']['infoTitle']; ?></h2>
                        <p class="contact-text" data-elem="contact.infoText">
                            <?php echo $translations['contact']['infoText']; ?>
                        </p>

                        <div class="contact-methods">
                            <div class="contact-method">
                                <a href="mailto:info@finanzapp.es">
                                    <div class="method-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </a>
                                <div class="method-details">
                                    <h3 data-elem="contact.email"><?php echo $translations['contact']['email']; ?></h3>
                                    <a href="mailto:info@finanzapp.es">
                                        info@finanzapp.es
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="social-contact">
                            <h3 data-elem="contact.social"><?php echo $translations['contact']['social']; ?></h3>
                            <div class="social-links">
                                <a href="https://github.com/Ballwictb/FinanzApp/tree/main" aria-label="<?php echo $translations['contact']['social']; ?>" rel="noopener" class="social-link-contact"><i class="fab fa-github"></i></a>
                                <a href="https://finanzapp.es" aria-label="<?php echo $translations['contact']['social']; ?>" rel="noopener" class="social-link-contact"><i class="fa-light fa-globe-pointer"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-container">
                        <h2 class="contact-title" data-elem="contact.formTitle"><?php echo $translations['contact']['formTitle']; ?></h2>
                        <form class="contact-form" id="contactForm">
                            <div class="form-group">
                                <label for="name" data-elem="contact.form.name"><?php echo $translations['contact']['form']['name']; ?></label>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email" data-elem="contact.form.email"><?php echo $translations['contact']['form']['email']; ?></label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="subject" data-elem="contact.form.subject"><?php echo $translations['contact']['form']['subject']; ?></label>
                                <input type="text" id="subject" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label for="message" data-elem="contact.form.message"><?php echo $translations['contact']['form']['message']; ?></label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>

                            <div class="form-group checkbox-group">
                                <input type="checkbox" id="privacy" name="privacy" required>
                                <label for="privacy" data-elem="contact.form.privacy">
                                    <?php echo $translations['contact']['form']['privacy']; ?>
                                </label>
                            </div>

                            <input type="submit" id="sendContact"  class="btn btn-primary btn-block" data-elem="contact.form.submit" value="<?php echo $translations['contact']['form']['submit']; ?>"/>
                        </form>

                        <div class="form-success" id="formSuccess">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 data-elem="contact.form.successTitle"><?php echo $translations['contact']['form']['successTitle']; ?></h3>
                            <p data-elem="contact.form.successMessage">
                                <?php echo $translations['contact']['form']['successMessage']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once '../includes/footer.php'; ?>
    </section>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Translation JS -->
    <script src="../js/translations.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js" integrity="sha384-uuNfwJfjOG2ukYi4eAB11/t3lP4Zjf75a3UhgkLzEpiX8JpJfacpG7Ye+0tiVMxT" crossorigin="anonymous"></script>

		<!-- Email js -->
		<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

		<script src="../js/initEmail.js"></script>
		<script src="../js/email.js"></script>

	  <!-- Custom JS -->
    <script src="../js/landing_page.js"></script>
    <script src="../js/validationUtils.js"></script>
    <script src="../js/contactValidation.js"></script>

</body>

</html>
