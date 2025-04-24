<?php include_once "../config/config.php" ?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title and basic meta -->
	<title><?php echo $translations['terms']['title']; ?> | <?php echo $translations['brand']; ?></title>
	<meta name="description" content="<?php echo $translations['meta']['description']; ?>" />
	<meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>" />

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/terms" />
	<meta property="og:title" content="<?php echo $translations['meta']['title']; ?>" />
	<meta property="og:description" content="<?php echo $translations['meta']['ogDescription']; ?>" />
	<meta property="og:image" content="<?= $translations['meta']['image'] ?>" />
	<!-- If required, we can add an email -->
	<meta property="og:email" content="me@example.com" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:title" content="<?php echo $translations['terms']['title']; ?> | <?php echo $translations['brand']; ?>">
	<meta property="twitter:description" content="<?php echo $translations['meta']['description']; ?>">
	<meta property="twitter:image" content="<?= $translations['meta']['image'] ?>">

	<!-- Canonical -->
	<link rel="canonical" href="https://www.finanzapp.es/terms">

	<!-- Preconnect para Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- External icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

	<!-- Favicon and other icons -->
	<link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">

	<!-- Aria-labelledby is used to associate elements with their titles -->
	<meta name="aria-labelledby" content="main-title">

	<!-- Security: noopener for external links (it will be used on the attribute target="_blank") -->
	<!-- Note: noopener is used on links, not as meta o link -->

	<!-- Custom stylesheets -->
	<link rel="stylesheet" href="../css/landing_page.css">
	<link rel="stylesheet" href="../css/scrollbar.css">

	<!-- AOS (Animate On Scroll) -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Custom scripts with defer to set settings -->
	<script src="../config/config.php" defer></script>

	<!-- Custom script for the loader animation -->
	<script src="../js/loader.js"></script>

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "<?php echo $translations['terms']['title']; ?> - FinanzApp",
            "description": "<?php echo $translations['terms']['meta_description']; ?>",
            "url": "https://launch.finanzapp.es/app/terms.php",
            "isPartOf": {
                "@type": "WebSite",
                "name": "FinanzApp",
                "url": "https://launch.finanzapp.es/"
            }
        }
    </script>
</head>

<body>
	<?php include_once "../includes/mobileMenu.php" ?>

	<section class="blurM">

	<?php include_once "../includes/header.php" ?>

   <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title" data-elem="terms.title"><?php echo $translations['terms']['title']?></h1>
            <p class="page-description" data-elem="terms.description"><?php echo $translations['terms']['description']?></p>
        </div>
    </section>


	<!-- Terms Content -->
    <section class="legal-content">
        <div class="container">
            <div class="legal-container">
                <div class="legal-toc">
                    <h2 data-elem="terms.tocTitle">Índice</h2>
                    <ul>
                        <li><a href="#introduction" data-elem="terms.toc.introduction">
							<?php echo $translations['terms']['toc']['introduction']?></a></li>
                        <li><a href="#definitions" data-elem="terms.toc.definitions"><?php echo $translations['terms']['toc']['definitions']?></a></li>
                        <li><a href="#account" data-elem="terms.toc.account"><?php echo $translations['terms']['toc']['account']?></a></li>
                        <li><a href="#services" data-elem="terms.toc.services"><?php echo $translations['terms']['toc']['services']?></a></li>
                        <li><a href="#payments" data-elem="terms.toc.payments"><?php echo $translations['terms']['toc']['payments']?></a></li>
                        <li><a href="#intellectual" data-elem="terms.toc.intellectual"><?php echo $translations['terms']['toc']['intellectual']?></a></li>
                        <li><a href="#privacy" data-elem="terms.toc.privacy"><?php echo $translations['terms']['toc']['privacy']?></a></li>
                        <li><a href="#limitations" data-elem="terms.toc.limitations"><?php echo $translations['terms']['toc']['limitations']?></a>
                        </li>
                        <li><a href="#termination" data-elem="terms.toc.termination"><?php echo $translations['terms']['toc']['termination']?></a></li>
                        <li><a href="#modifications" data-elem="terms.toc.modifications"><?php echo $translations['terms']['toc']['modifications']?></a></li>
                        <li><a href="#law" data-elem="terms.toc.law"><?php echo $translations['terms']['toc']['law']?></a></li>
                        <li><a href="#contact" data-elem="terms.toc.contact"><?php echo $translations['terms']['toc']['contact']?></a></li>
                    </ul>
                </div>

                <div class="legal-text">
                    <section id="introduction">
                        <h2 data-elem="terms.sections.introduction.title"><?php echo $translations['terms']['sections']['introduction']['title']?></h2>
                        <p data-elem="terms.sections.introduction.p1"><?php echo $translations['terms']['sections']['introduction']['p1']?></p>
                        <p data-elem="terms.sections.introduction.p2"><?php echo $translations['terms']['sections']['introduction']['p2']?></p>
                    </section>

                    <section id="definitions">
                        <h2 data-elem="terms.sections.definitions.title"><?php echo $translations['terms']['sections']['definitions']['title']?></h2>
                        <p data-elem="terms.sections.definitions.p1"><?php echo $translations['terms']['sections']['definitions']['p1']?></p>
                        <ul>
                            <li data-elem="terms.sections.definitions.li1"><?php echo $translations['terms']['sections']['definitions']['li1']?></li>
                            <li data-elem="terms.sections.definitions.li2"><?php echo $translations['terms']['sections']['definitions']['li2']?></li>
                            <li data-elem="terms.sections.definitions.li3"><?php echo $translations['terms']['sections']['definitions']['li3']?></li>
                            <li data-elem="terms.sections.definitions.li4"><?php echo $translations['terms']['sections']['definitions']['li4']?></li>
                            <li data-elem="terms.sections.definitions.li5"><?php echo $translations['terms']['sections']['definitions']['li5']?></li>
                        </ul>
                    </section>

                    <section id="account">
                        <h2 data-elem="terms.sections.account.title"><?php echo $translations['terms']['sections']['account']['title']?></h2>
                        <p data-elem="terms.sections.account.p1"><?php echo $translations['terms']['sections']['account']['p1']?>
                        </p>
                        <p data-elem="terms.sections.account.p2"><?php echo $translations['terms']['sections']['account']['p2']?></p>
                    </section>

                    <section id="services">
                        <h2 data-elem="terms.sections.services.title"><?php echo $translations['terms']['sections']['services']['title']?></h2>
                        <p data-elem="terms.sections.services.p1"><?php echo $translations['terms']['sections']['services']['p1']?></p>
                        <p data-elem="terms.sections.services.p2"><?php echo $translations['terms']['sections']['services']['p2']?>
                        </p>
                    </section>

                    <section id="payments">
                        <h2 data-elem="terms.sections.payments.title"><?php echo $translations['terms']['sections']['payments']['title']?></h2>
                        <p data-elem="terms.sections.payments.p1"><?php echo $translations['terms']['sections']['payments']['p1']?></p>
                        <p data-elem="terms.sections.payments.p2"><?php echo $translations['terms']['sections']['payments']['p2']?></p>
                    </section>

                    <section id="intellectual">
                        <h2 data-elem="terms.sections.intellectual.title"><?php echo $translations['terms']['sections']['intellectual']['title']?></h2>
                        <p data-elem="terms.sections.intellectual.p1"><?php echo $translations['terms']['sections']['intellectual']['p1']?></p>
                        <p data-elem="terms.sections.intellectual.p2"><?php echo $translations['terms']['sections']['intellectual']['p2']?></p>
                    </section>

                    <section id="privacy">
                        <h2 data-elem="terms.sections.privacy.title"><?php echo $translations['terms']['sections']['privacy']['title']?></h2>
                        <p data-elem="terms.sections.privacy.p1"><?php echo $translations['terms']['sections']['privacy']['p1']?></p>
                        <p data-elem="terms.sections.privacy.p2"><?php echo $translations['terms']['sections']['privacy']['p2']?></p>
                        <p data-elem="terms.sections.privacy.p3"><?php echo $translations['terms']['sections']['privacy']['p3']?></p>
                    </section>

                    <section id="limitations">
                        <h2 data-elem="terms.sections.limitations.title"><?php echo $translations['terms']['sections']['limitations']['title']?></h2>
                        <p data-elem="terms.sections.limitations.p1"><?php echo $translations['terms']['sections']['limitations']['p1']?></p>
                        <p data-elem="terms.sections.limitations.p2"><?php echo $translations['terms']['sections']['limitations']['p2']?></p>
                    </section>

                    <section id="termination">
                        <h2 data-elem="terms.sections.termination.title"><?php echo $translations['terms']['sections']['termination']['title']?></h2>
                        <p data-elem="terms.sections.termination.p1"><?php echo $translations['terms']['sections']['termination']['p1']?></p>
                        <p data-elem="terms.sections.termination.p2"><?php echo $translations['terms']['sections']['termination']['p2']?></p>
                    </section>

                    <section id="modifications">
                        <h2 data-elem="terms.sections.modifications.title"><?php echo $translations['terms']['sections']['modifications']['title']?></h2>
                        <p data-elem="terms.sections.modifications.p1"><?php echo $translations['terms']['sections']['modifications']['p1']?></p>
                        <p data-elem="terms.sections.modifications.p2"><?php echo $translations['terms']['sections']['modifications']['p2']?></p>
                    </section>

                    <section id="law">
                        <h2 data-elem="terms.sections.law.title"><?php echo $translations['terms']['sections']['law']['title']?></h2>
                        <p data-elem="terms.sections.law.p1"><?php echo $translations['terms']['sections']['law']['p1']?></p>
                        <p data-elem="terms.sections.law.p2"><?php echo $translations['terms']['sections']['law']['p2']?></p>
                    </section>

                    <section id="contact">
                        <h2 data-elem="terms.sections.contact.title"><?php echo $translations['terms']['sections']['contact']['title']?></h2>
                        <p data-elem="terms.sections.contact.p1"><?php echo $translations['terms']['sections']['contact']['p1']?></p>
                        <ul>
                            <li>Email: legal@finanzapp.es</li>
                            <li data-elem="terms.sections.contact.address"><?php echo $translations['terms']['sections']['contact']['address']?></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>

<?php include_once "../includes/footer.php"?>

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
    <script src="../js/landing_page.js"></script>
		<script src="../js/trans.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" integrity="sha384-wziAfh6b/qT+3LrqebF9WeK4+J5sehS6FA10J1t3a866kJ/fvU5UwofWnQyzLtwu" crossorigin="anonymous"></script>
    <!-- Init AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>
