<?php include_once "../config/config.php" ?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title and basic meta -->
	<title><?php echo $translations['privacy']['title']; ?> | <?php echo $translations['brand']; ?></title>
	<meta name="description" content="<?php echo $translations['meta']['description']; ?>" />
	<meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>" />

	<!-- Open Graph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.finanzapp.es/privacy" />
	<meta property="og:title" content="<?php echo $translations['meta']['title']; ?>" />
	<meta property="og:description" content="<?php echo $translations['meta']['ogDescription']; ?>" />
	<meta property="og:image" content="<?= $translations['meta']['image'] ?>" />
	<meta property="og:email" content="me@example.com" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:title" content="<?php echo $translations['privacy']['title']; ?> | <?php echo $translations['brand']; ?>">
	<meta property="twitter:description" content="<?php echo $translations['meta']['description']; ?>">
	<meta property="twitter:image" content="<?= $translations['meta']['image'] ?>">

	<!-- Canonical -->
	<link rel="canonical" href="https://www.finanzapp.es/privacy">

	<!-- Preconnect para Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- External icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

	<!-- Favicon and other icons -->
	<link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">

	<!-- Aria-labelledby -->
	<meta name="aria-labelledby" content="main-title">

	<!-- Custom stylesheets -->
	<link rel="stylesheet" href="../css/landing_page.css">
	<link rel="stylesheet" href="../css/scrollbar.css">

	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Custom scripts with defer -->
	<script src="../config/config.php" defer></script>

	<!-- Custom script for loader -->
	<script src="../js/loader.js"></script>

	<!-- Schema.org JSON-LD -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebPage",
			"name": "<?php echo $translations['privacy']['title']; ?> - FinanzApp",
			"description": "<?php echo $translations['privacy']['meta_description']; ?>",
			"url": "https://launch.finanzapp.es/app/privacy.php",
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
                <h1 class="page-title" data-elem="privacy.title"><?php echo $translations['privacy']['title'] ?></h1>
                <p class="page-description" data-elem="privacy.description"><?php echo $translations['privacy']['meta_description'] ?></p>
            </div>
        </section>

        <!-- Privacy Policy Content -->
        <section class="legal-content">
            <div class="container">
                <div class="legal-container">
                    <div class="legal-toc">
                        <h2 data-elem="privacy.toc.title"><?php echo $translations['privacy']['toc']['title']; ?></h2>
                        <ul>
                            <li><a href="#introduction" data-elem="privacy.toc.introduction"><?php echo $translations['privacy']['toc']['introduction']; ?></a></li>
                            <li><a href="#information" data-elem="privacy.toc.information"><?php echo $translations['privacy']['toc']['information']; ?></a></li>
                            <li><a href="#usage" data-elem="privacy.toc.usage"><?php echo $translations['privacy']['toc']['usage']; ?></a></li>
                            <li><a href="#sharing" data-elem="privacy.toc.sharing"><?php echo $translations['privacy']['toc']['sharing']; ?></a></li>
                            <li><a href="#cookies" data-elem="privacy.toc.cookies"><?php echo $translations['privacy']['toc']['cookies']; ?></a></li>
                            <li><a href="#security" data-elem="privacy.toc.security"><?php echo $translations['privacy']['toc']['security']; ?></a></li>
                            <li><a href="#rights" data-elem="privacy.toc.rights"><?php echo $translations['privacy']['toc']['rights']; ?></a></li>
                            <li><a href="#retention" data-elem="privacy.toc.retention"><?php echo $translations['privacy']['toc']['retention']; ?></a></li>
                            <li><a href="#changes" data-elem="privacy.toc.changes"><?php echo $translations['privacy']['toc']['changes']; ?></a></li>
                            <li><a href="#contact" data-elem="privacy.toc.contact"><?php echo $translations['privacy']['toc']['contact']; ?></a></li>
                        </ul>
                    </div>


                    <div class="legal-text">

                        <section id="introduction">
                            <h2 data-elem="privacy.introduction.title">1. <?php echo $translations['privacy']['introduction']['title'] ?></h2>
                            <p data-elem="privacy.introduction.p1"><?php echo $translations['privacy']['introduction']['p1'] ?></p>
                        </section>

                        <section id="information">
                            <h2 data-elem="privacy.information.title">2. <?php echo $translations['privacy']['information']['title'] ?></h2>
                            <p data-elem="privacy.information.p1"><?php echo $translations['privacy']['information']['p1'] ?></p>
                            <ul>
                                <li data-elem="privacy.information.li1"><?php echo $translations['privacy']['information']['li1'] ?></li>
                                <li data-elem="privacy.information.li2"><?php echo $translations['privacy']['information']['li2'] ?></li>
                                <li data-elem="privacy.information.li3"><?php echo $translations['privacy']['information']['li3'] ?></li>
                                <li data-elem="privacy.information.li4"><?php echo $translations['privacy']['information']['li4'] ?></li>
                            </ul>
                        </section>

                        <section id="usage">
                            <h2 data-elem="privacy.usage.title">3. <?php echo $translations['privacy']['usage']['title'] ?></h2>
                            <p data-elem="privacy.usage.p1"><?php echo $translations['privacy']['usage']['p1'] ?></p>
                        </section>

                        <section id="sharing">
                            <h2 data-elem="privacy.sharing.title">4. <?php echo $translations['privacy']['sharing']['title'] ?></h2>
                            <p data-elem="privacy.sharing.p1"><?php echo $translations['privacy']['sharing']['p1'] ?></p>
                        </section>

                        <section id="cookies">
                            <h2 data-elem="privacy.cookies.title">5. <?php echo $translations['privacy']['cookies']['title'] ?></h2>
                            <p data-elem="privacy.cookies.p1"><?php echo $translations['privacy']['cookies']['p1'] ?></p>
                            <p data-elem="privacy.cookies.p2"><?php echo $translations['privacy']['cookies']['p2'] ?></p>
                        </section>

                        <section id="security">
                            <h2 data-elem="privacy.security.title">6. <?php echo $translations['privacy']['security']['title'] ?></h2>
                            <p data-elem="privacy.security.p1"><?php echo $translations['privacy']['security']['p1'] ?></p>
                        </section>

                        <section id="rights">
                            <h2 data-elem="privacy.rights.title">7. <?php echo $translations['privacy']['rights']['title'] ?></h2>
                            <p data-elem="privacy.rights.p1"><?php echo $translations['privacy']['rights']['p1'] ?></p>
                            <ul>
                                <li data-elem="privacy.rights.li1"><?php echo $translations['privacy']['rights']['li1'] ?></li>
                                <li data-elem="privacy.rights.li2"><?php echo $translations['privacy']['rights']['li2'] ?></li>
                                <li data-elem="privacy.rights.li3"><?php echo $translations['privacy']['rights']['li3'] ?></li>
                                <li data-elem="privacy.rights.li4"><?php echo $translations['privacy']['rights']['li4'] ?></li>
                            </ul>
                        </section>

                        <section id="retention">
                            <h2 data-elem="privacy.retention.title">8. <?php echo $translations['privacy']['retention']['title'] ?></h2>
                            <p data-elem="privacy.retention.p1"><?php echo $translations['privacy']['retention']['p1'] ?></p>
                        </section>

                        <section id="changes">
                            <h2 data-elem="privacy.changes.title">9. <?php echo $translations['privacy']['changes']['title'] ?></h2>
                            <p data-elem="privacy.changes.p1"><?php echo $translations['privacy']['changes']['p1'] ?></p>
                        </section>

                        <section id="contact">
                            <h2 data-elem="privacy.contact.title">10. <?php echo $translations['privacy']['contact']['title'] ?></h2>
                            <p data-elem="privacy.contact.p1"><?php echo $translations['privacy']['contact']['p1'] ?></p>
                            <ul>
                                <li>Email: legal@finanzapp.es</li>
                                <li data-elem="terms.sections.contact.address"><?php echo $translations['terms']['sections']['contact']['address']?></li>
                            </ul>
                        </section>

                    </div>
                </div>
            </div>
        </section>

        <?php include_once "../includes/footer.php" ?>
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js" crossorigin="anonymous"></script>
    <script src="../js/landing_page.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" crossorigin="anonymous"></script>
    <script>AOS.init();</script>
</body>


</html>
