<?php include_once "./config.php" ?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title and basic meta -->
	<title><?php echo $translations['meta']['title']; ?></title>
	<meta name="description" content="<?php echo $translations['meta']['description']; ?>" />
	<meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>" />
    <meta name="author" content="<?= $translations['meta']['author'] ?>">

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/" />
	<meta property="og:title" content="<?php echo $translations['meta']['title']; ?>" />
	<meta property="og:description" content="<?php echo $translations['meta']['ogDescription']; ?>" />
	<meta property="og:image" content="http://tny.im/goh" />
	<!-- If required, we can add an email -->
	<meta property="og:email" content="me@example.com" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:title" content="<?php echo $translations['meta']['title']; ?>">
	<meta property="twitter:description" content="<?php echo $translations['meta']['description']; ?>">
	<meta property="twitter:image" content="https://www.finanzapp.com/assets/twitter-image.jpg">

	<!-- Canonical -->
	<link rel="canonical" href="https://www.finanzapp.es/">

	<!-- Preconnect para Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- External icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

	<!-- Favicon and other icons -->
	<link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">

    <!-- Aria-labelledby is used to associate elements with their titles -->
	<meta name="aria-labelledby" content="main-title">

	<!-- Security: noopener for external links (it will be used on the attribute target="_blank") -->
	<!-- Note: noopener is used on links, not as meta o link -->

	<!-- Custom stylesheets -->
	<link rel="stylesheet" href="./css/landing_page.css">
	<link rel="stylesheet" href="./css/scrollbar.css">

	<!-- AOS (Animate On Scroll) -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Custom scripts with defer to set settings -->
	<script src="./config.php" defer></script>

	<!-- Custom script for the loader animation -->
	<script src="./js/loader.js"></script>

</head>

<body>
	<?php include_once "./includes/mobileMenu.php" ?>

	<section class="blurM">

	<?php include_once "./includes/header.php" ?>


  <!-- Page Header -->
	<section class="page-header">
        <div class="container">
            <h1 class="page-title" data-elem="cookies.pageTitle">Política de Cookies</h1>
            <p class="page-description" data-elem="cookies.pageDescription">Última actualización: 05 de Abril de 2025</p>
        </div>
    </section>

		  <!-- Cookies Content -->
			<section class="legal-content">
        <div class="container">
            <div class="legal-container">
                <div class="legal-toc">
                    <h2>Índice</h2>
                    <ul>
                        <li><a href="#intro" data-elem="cookies.intro.title">Introducción</a></li>
                        <li><a href="#types" data-elem="cookies.types.title">Tipos de cookies que utilizamos</a></li>
                        <li><a href="#control" data-elem="cookies.control.title">Cómo controlar las cookies</a></li>
                        <li><a href="#thirdParty" data-elem="cookies.thirdParty.title">Cookies de terceros</a></li>
                        <li><a href="#updates" data-elem="cookies.updates.title">Actualizaciones de esta política</a></li>
                        <li><a href="#contact" data-elem="cookies.contact.title">Contacto</a></li>
                    </ul>
                </div>

                <div class="legal-text">
                    <section id="intro">
                        <h2 data-elem="cookies.intro.title">Introducción</h2>
                        <p data-elem="cookies.intro.p1">Esta Política de Cookies explica cómo FinanzApp utiliza cookies y tecnologías similares para reconocerle cuando visita nuestro sitio web. Explica qué son estas tecnologías y por qué las usamos, así como sus derechos para controlarlas.</p>
                        <p data-elem="cookies.intro.p2">Una cookie es un pequeño archivo que se coloca en su dispositivo cuando visita un sitio web. Nos permite recordar sus acciones y preferencias durante un período de tiempo, para que no tenga que volver a introducir cierta información cada vez que regrese al sitio o navegue de una página a otra.</p>
                    </section>

                    <section id="types">
                        <h2 data-elem="cookies.types.title">Tipos de cookies que utilizamos</h2>
                        <div class="cookie-type">
                            <h3 data-elem="cookies.types.necessary.title">Cookies necesarias</h3>
                            <p data-elem="cookies.types.necessary.description">Estas cookies son esenciales para que pueda utilizar las funcionalidades básicas del sitio web. Estas cookies no recopilan ninguna información personal.</p>
                            <div class="cookie-examples">
                                <h4>Ejemplos:</h4>
                                <ul>
                                    <li><strong>session_id</strong>: Mantiene su sesión activa mientras navega por el sitio.</li>
                                    <li><strong>csrf_token</strong>: Ayuda a proteger contra ataques de falsificación de solicitudes entre sitios.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="cookie-type">
                            <h3 data-elem="cookies.types.functional.title">Cookies funcionales</h3>
                            <p data-elem="cookies.types.functional.description">Estas cookies nos permiten recordar las elecciones que hace y proporcionar funciones mejoradas y más personalizadas. La información que recopilan estas cookies puede ser anónima y no pueden rastrear su actividad de navegación en otros sitios web.</p>
                            <div class="cookie-examples">
                                <h4>Ejemplos:</h4>
                                <ul>
                                    <li><strong>language</strong>: Recuerda su preferencia de idioma.</li>
                                    <li><strong>theme</strong>: Recuerda su preferencia de tema (claro/oscuro).</li>
                                </ul>
                            </div>
                        </div>

                        <div class="cookie-type">
                            <h3 data-elem="cookies.types.analytics.title">Cookies analíticas</h3>
                            <p data-elem="cookies.types.analytics.description">Estas cookies nos ayudan a entender cómo los visitantes interactúan con nuestro sitio web, proporcionándonos información sobre las áreas visitadas, el tiempo dedicado y cualquier problema encontrado. Esto nos ayuda a mejorar el rendimiento de nuestro sitio web.</p>
                            <div class="cookie-examples">
                                <h4>Ejemplos:</h4>
                                <ul>
                                    <li><strong>_ga</strong>: Utilizada por Google Analytics para distinguir usuarios únicos.</li>
                                    <li><strong>_gid</strong>: Utilizada por Google Analytics para identificar usuarios.</li>
                                </ul>
                            </div>
                        </div>


                    </section>

                    <section id="control">
                        <h2 data-elem="cookies.control.title">Cómo controlar las cookies</h2>
                        <p data-elem="cookies.control.p1">Puede configurar su navegador para rechazar todas las cookies o para indicar cuándo se está enviando una cookie. Sin embargo, si no acepta cookies, es posible que no pueda utilizar algunas partes de nuestro sitio web.</p>
                        <p data-elem="cookies.control.p2">Además, puede cambiar sus preferencias de cookies en cualquier momento utilizando nuestro panel de configuración de cookies accesible desde cualquier página de nuestro sitio web.</p>

                        <div class="browser-instructions">
                            <h3>Instrucciones para gestionar cookies en diferentes navegadores:</h3>
                            <ul>
                                <li><a href="https://support.google.com/chrome/answer/95647" target="_blank">Google Chrome</a></li>
                                <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias" target="_blank">Mozilla Firefox</a></li>
                                <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank">Safari</a></li>
                                <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank">Microsoft Edge</a></li>
                            </ul>
                        </div>
                    </section>

                    <section id="thirdParty">
                        <h2 data-elem="cookies.thirdParty.title">Cookies de terceros</h2>
                        <p data-elem="cookies.thirdParty.p1">Además de nuestras propias cookies, también podemos utilizar varias cookies de terceros para informar estadísticas de uso del sitio, entregar anuncios en y a través del Servicio, etc.</p>
                        <p data-elem="cookies.thirdParty.p2">Estas cookies pueden rastrear su actividad de navegación en otros sitios web y crear un perfil de sus intereses. Esto puede afectar al contenido y los mensajes que ve en otros sitios web que visita.</p>

                        <div class="third-party-list">
                            <h3>Principales proveedores de cookies de terceros que utilizamos:</h3>
                            <ul>
                                <li><strong>Google Analytics</strong>: Para análisis de tráfico web.</li>
                            </ul>
                        </div>
                    </section>

                    <section id="updates">
                        <h2 data-elem="cookies.updates.title">Actualizaciones de esta política</h2>
                        <p data-elem="cookies.updates.p1">Podemos actualizar esta Política de Cookies de vez en cuando para reflejar, por ejemplo, cambios en las cookies que utilizamos o por otras razones operativas, legales o regulatorias. Por lo tanto, visite esta Política de Cookies regularmente para mantenerse informado sobre nuestro uso de cookies y tecnologías relacionadas.</p>
                        <p data-elem="cookies.updates.p2">La fecha en la parte superior de esta Política de Cookies indica cuándo se actualizó por última vez.</p>
                    </section>

                    <section id="contact">
                        <h2 data-elem="cookies.contact.title">Contacto</h2>
                        <p data-elem="cookies.contact.p1">Si tiene alguna pregunta sobre nuestro uso de cookies o esta política, póngase en contacto con nosotros en:</p>
                        <ul>
                            <li>Email: <a href="mailto:privacy@finanzapp.com">privacy@finanzapp.com</a></li>
                            <li data-elem="cookies.contact.address">Dirección del centro: Av. del Oeste, s/n, 28922 Alcorcón, Madrid</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>

<?php include_once "./includes/footer.php"?>

</section>
 <!-- Cookie Consent -->
 <div class="cookie-consent" id="cookieConsent">
        <div class="cookie-content">
            <h3 data-elem="cookies.title"><?php echo $translations['cookies']['title']; ?></h3>
            <p data-elem="cookies.description"><?php echo $translations['cookies']['description']; ?> <a href="./cookies.php" data-elem="cookies.link"><?php echo $translations['cookies']['link']; ?></a>.</p>
            <div class="cookie-buttons">
                <button id="cookieAccept" class="btn btn-primary" data-elem="cookies.accept"><?php echo $translations['cookies']['accept']; ?></button>
                <button id="cookieReject" class="btn btn-outline" data-elem="cookies.reject"><?php echo $translations['cookies']['reject']; ?></button>
                <button id="cookieSettings" class="btn btn-link" data-elem="cookies.settings"><?php echo $translations['cookies']['settings']; ?></button>
            </div>
        </div>
    </div>

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js" integrity="sha384-T/4KgSWuZEPozpPz7rnnp/5lDSnpY1VPJCojf1S81uTHS1E38qgLfMgVsAeRCWc4" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="./js/landing_page.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" integrity="sha384-wziAfh6b/qT+3LrqebF9WeK4+J5sehS6FA10J1t3a866kJ/fvU5UwofWnQyzLtwu" crossorigin="anonymous"></script>
    <!-- Init AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>
