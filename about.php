<?php include_once "config.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title and basic meta -->
    <title><?php echo $translations['about']['meta']['title']; ?></title>
    <meta name="description" content="<?php echo $translations['about']['meta']['description']; ?>" />
    <meta name="keywords" content="<?php echo $translations['meta']['keywords']; ?>" />
    <meta name="author" content="<?= $translations['meta']['author'] ?>">
    <meta name="robots" content="index, follow">

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

    <!-- Preconnect for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- External Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">
    
    <!-- Favicon and other icons -->
    <link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">

    <!-- Manifest -->
    <link rel="manifest" href="./manifest.json">

    <!-- Accessibility -->
    <!-- Aria-labelledby is used to associate elements with their titles -->
    <meta name="aria-labelledby" content="main-title">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/landing_page.css">
    <link rel="stylesheet" href="./css/scrollbar.css">
</head>

<body>
    <!-- Mobile Menu -->
    <?php include_once "./includes/mobileMenu.php"; ?>

    <section class="blurM">

        <!-- Header -->
        <?php include_once "./includes/header.php"; ?>

        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title" data-elem="about.title"><?php echo $translations['about']['title']; ?></h1>
                <p class="page-description" data-elem="about.description">
                    <?php echo str_replace('<strong>', '<strong>', $translations['about']['description']); ?>
                </p>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <div class="container">
                <div class="about-intro">
                    <h2 class="section-title" data-elem="about.intro.title">
                        <?php echo str_replace('<span class="highlight">', '<span class="highlight">', $translations['about']['intro']['title']); ?>
                    </h2>
                    <p class="section-description" data-elem="about.intro.description">
                        <?php echo $translations['about']['intro']['description']; ?>
                    </p>
                    <p class="section-description" data-elem="about.intro.vision">
                        <?php echo $translations['about']['intro']['vision']; ?>
                    </p>
                </div>

                <div class="team-section">
                    <h2 class="section-title" data-elem="about.team.title">
                        <?php echo str_replace('<span class="highlight">', '<span class="highlight">', $translations['about']['team']['title']); ?>
                    </h2>
                    <p class="section-description" data-elem="about.team.description">
                        <?php echo str_replace('<strong>', '<strong>', $translations['about']['team']['description']); ?>
                    </p>

                    <div class="team-grid">
                        <!-- Team Member 1 -->
                        <div class="team-card">
                            <div class="team-image">
                                <img src="./assets/team/israel.jpg" loading="lazy" alt="Israel Soriano Buendí" class="team-photo">
                            </div>
                            <div class="team-info">
                                <h3 class="team-name">Israel Soriano Buendía</h3>
                                <p class="team-role" data-elem="about.team.roles.developer">
                                    <?php echo $translations['about']['team']['roles']['developer']; ?>
                                </p>
                                <p class="team-bio" data-elem="about.team.bios.israel">
                                    <?php echo $translations['about']['team']['bios']['israel']; ?>
                                </p>
                                <div class="team-social">
                                    <a href="https://www.linkedin.com/in/israel-soriano/" rel="noopener" target="_blank" class="social-link linkedin" aria-label="<?php echo $translations['about']['team']['linkDescription']['linkedIn']; ?>">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://github.com/IsraC0d33" rel="noopener" target="_blank" class="social-link github" aria-label="<?php echo $translations['about']['team']['linkDescription']['github']; ?>">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 2 -->
                        <div class="team-card">
                            <div class="team-image">
                                <img src="./assets/team/roberto.jpg" loading="lazy" alt="Roberto Ortiz Pérez" class="team-photo">
                            </div>
                            <div class="team-info">
                                <h3 class="team-name">Roberto Ortiz Pérez</h3>
                                <p class="team-role" data-elem="about.team.roles.student">
                                    <?php echo $translations['about']['team']['roles']['student']; ?>
                                </p>
                                <p class="team-bio" data-elem="about.team.bios.roberto">
                                    <?php echo $translations['about']['team']['bios']['roberto']; ?>
                                </p>
                                <div class="team-social">
                                    <a href="https://www.linkedin.com/in/roberto-ortiz-p%C3%A9rez-371b4b328/" rel="noopener" target="_blank" class="social-link linkedin" aria-label="<?php echo $translations['about']['team']['linkDescription']['linkedIn']; ?>">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://github.com/Robertort1z" rel="noopener" target="_blank" class="social-link github" aria-label="<?php echo $translations['about']['team']['linkDescription']['github']; ?>">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 3 -->
                        <div class="team-card">
                            <div class="team-image">
                                <img src="./assets/team/jamal.jpg" loading="lazy" alt="Jamal Rabah" class="team-photo">
                            </div>
                            <div class="team-info">
                                <h3 class="team-name">Jamal Rabah</h3>
                                <p class="team-role" data-elem="about.team.roles.developer">
                                    <?php echo $translations['about']['team']['roles']['developer']; ?>
                                </p>
                                <p class="team-bio" data-elem="about.team.bios.jamal">
                                    <?php echo $translations['about']['team']['bios']['jamal']; ?>
                                </p>
                                <div class="team-social">
                                    <a href="https://www.linkedin.com/in/jamalrabah/" rel="noopener" target="_blank" class="social-link linkedin" aria-label="<?php echo $translations['about']['team']['linkDescription']['linkedIn']; ?>">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://github.com/Ballwictb" rel="noopener" target="_blank" class="social-link github" aria-label="<?php echo $translations['about']['team']['linkDescription']['github']; ?>">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="values-section">
                    <h2 class="section-title" data-elem="about.values.title">
                        <?php echo str_replace('<span class="highlight">', '<span class="highlight">', $translations['about']['values']['title']); ?>
                    </h2>

                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.privacy.title">
                                <?php echo $translations['about']['values']['privacy']['title']; ?>
                            </h3>
                            <p class="value-description" data-elem="about.values.privacy.description">
                                <?php echo $translations['about']['values']['privacy']['description']; ?>
                            </p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-universal-access"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.accessibility.title">
                                <?php echo $translations['about']['values']['accessibility']['title']; ?>
                            </h3>
                            <p class="value-description" data-elem="about.values.accessibility.description">
                                <?php echo $translations['about']['values']['accessibility']['description']; ?>
                            </p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.innovation.title">
                                <?php echo $translations['about']['values']['innovation']['title']; ?>
                            </h3>
                            <p class="value-description" data-elem="about.values.innovation.description">
                                <?php echo $translations['about']['values']['innovation']['description']; ?>
                            </p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.transparency.title">
                                <?php echo $translations['about']['values']['transparency']['title']; ?>
                            </h3>
                            <p class="value-description" data-elem="about.values.transparency.description">
                                <?php echo $translations['about']['values']['transparency']['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="cta-box">
                    <h2 class="cta-title" data-elem="about.cta.title">
                        <?php echo $translations['about']['cta']['title']; ?>
                    </h2>
                    <p class="cta-description" data-elem="about.cta.description">
                        <?php echo $translations['about']['cta']['description']; ?>
                    </p>
                    <a href="./contact.php" class="btn btn-primary" data-elem="about.cta.button" aria-label="<?php echo $translations['about']['cta']['button']; ?>">
                        <?php echo $translations['about']['cta']['button']; ?>
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once './includes/footer.php'; ?>
    </section>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Custom JS -->
    <script src="./js/landing_page.js"></script>
</body>

</html>
