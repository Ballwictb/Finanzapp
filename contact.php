<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | FinanzApp</title>

    <!-- meta -->
    <meta name="description"
        content="Gestiona tus finanzas personales con una plataforma que te ayuda a visualizar, planificar y optimizar tu dinero de forma intuitiva." />

    <!-- og -->
    <meta name="og:title" content="FinanzApp" />
    <meta name="og:description"
        content="Gestiona tus finanzas personales con una plataforma que te ayuda a visualizar, planificar y optimizar tu dinero de forma intuitiva." />
    <meta name="og:image" content="http://tny.im/goh" />
    <meta name="og:email" content="me@example.com" />

    <!-- twitter -->
    <meta property="twitter:title" content="FinanzApp">
    <meta property="twitter:description"
        content="Gestiona tus finanzas personales con una plataforma que te ayuda a visualizar, planificar y optimizar tu dinero de forma intuitiva.">
    <meta property="twitter:image" content="#">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">
    <!-- Logo -->
    <link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/landing_page.css">
    <link rel="stylesheet" href="./css/scrollbar.css">
    <link rel="stylesheet" href="./css/auth.css">

    <!-- Notyf  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">
</head>

<body>
    <!-- Mobile Menu -->
    <?php include "./includes/mobileMenu.php"; ?>

    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <section class="blurM">
        <!-- Header -->
        <?php include "./includes/header.php"; ?>

        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title" data-elem="contact.title">Contacto</h1>
                <p class="page-description" data-elem="contact.description">Estamos aquí para ayudarte. Ponte en
                    contacto
                    con nosotros.</p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-content">
                    <div class="contact-info">
                        <h2 class="contact-title" data-elem="contact.infoTitle">Información de contacto</h2>
                        <p class="contact-text" data-elem="contact.infoText">
                            Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos.
                        </p>

                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="method-details">
                                    <h3 data-elem="contact.email">Correo electrónico</h3>
                                    <p>info@finanzapp.es</p>
                                </div>
                            </div>
                        </div>

                        <div class="social-contact">
                            <h3 data-elem="contact.social">Síguenos en redes sociales</h3>
                            <div class="social-links">
                                <a href="https://github.com/Ballwictb/FinanzApp/tree/main"
                                    class="social-link-contact"><i class="fab fa-github"></i></a>
                                <a href="https://finanzapp.es" class="social-link-contact"><i
                                        class="fa-light fa-globe-pointer"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-container">
                        <h2 class="contact-title" data-elem="contact.formTitle">Envíanos un mensaje</h2>
                        <form class="contact-form" id="contactForm">
                            <div class="form-group">
                                <label for="name" data-elem="contact.form.name">Nombre</label>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email" data-elem="contact.form.email">Correo electrónico</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="subject" data-elem="contact.form.subject">Asunto</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label for="message" data-elem="contact.form.message">Mensaje</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>

                            <div class="form-group checkbox-group">
                                <input type="checkbox" id="privacy" name="privacy">
                                <label for="privacy" data-elem="contact.form.privacy">He leído y acepto la <a
                                        href="./privacy.php">política de privacidad</a>.</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block"
                                data-elem="contact.form.submit">
                                Enviar mensaje
                            </button>
                        </form>

                        <div class="form-success" id="formSuccess">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 data-elem="contact.form.successTitle">¡Mensaje enviado!</h3>
                            <p data-elem="contact.form.successMessage">
                                Gracias por contactarnos. Te responderemos lo
                                antes posible.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include './includes/footer.php'; ?>
    </section>

    <!-- Cookie Consent -->
    <div class="cookie-consent" id="cookieConsent">
        <div class="cookie-content">
            <h3 data-elem="cookies.title">Uso de cookies</h3>
            <p data-elem="cookies.description">Este sitio web utiliza cookies para mejorar su experiencia. Al continuar
                navegando, acepta nuestra <a href="cookies.php" data-elem="cookies.link">política de cookies</a>.</p>
            <div class="cookie-buttons">
                <button id="cookieAccept" class="btn btn-primary" data-elem="cookies.accept">Aceptar</button>
                <button id="cookieReject" class="btn btn-outline" data-elem="cookies.reject">Rechazar</button>
                <button id="cookieSettings" class="btn btn-link" data-elem="cookies.settings">Configurar</button>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Translation JS -->
    <script src="./js/translations.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>

    <!-- Custom JS -->
    <script src="./js/landing_page.js"></script>
    <script src="./js/validation.js"></script>
</body>

</html>