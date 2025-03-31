<?php include "./config.php"; ?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['meta']['title']; ?></title>

    <!-- meta -->
    <meta name="description" content="<?php echo $translations['meta']['description']; ?>" />

    <!-- og -->
    <meta name="og:title" content="<?php echo $translations['meta']['title']; ?>" />
    <meta name="og:description" content="<?php echo $translations['meta']['description']; ?>" />
    <meta name="og:image" content="http://tny.im/goh" />
    <meta name="og:email" content="me@example.com" />

    <!-- twitter -->
    <meta property="twitter:title" content="<?php echo $translations['meta']['title']; ?>">
    <meta property="twitter:description" content="<?php echo $translations['meta']['description']; ?>">
    <meta property="twitter:image" content="#">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">
    <!-- Logo -->
    <link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/landing_page.css">
    <link rel="stylesheet" href="./css/scrollbar.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Mobile Menu -->
    <?php include "./includes/mobileMenu.php"; ?>


    <!-- Loader -->
    <div class="loader">
        <div class="loader-content">
            <div class="logo-animation">
                <svg width="80" height="80" viewBox="0 0 80 80">
                    <circle class="circle-1" cx="40" cy="40" r="36" />
                    <circle class="circle-2" cx="40" cy="40" r="30" />
                    <path class="dollar"
                        d="M40,20 L40,60 M33,28 L45,28 C48.3137,28 51,30.6863 51,34 C51,37.3137 48.3137,40 45,40 L35,40 C31.6863,40 29,42.6863 29,46 C29,49.3137 31.6863,52 35,52 L47,52"
                        transform="scale(1, -1) translate(0, -80)" />
                </svg>
            </div>
            <div class="loader-text">
                <?php echo $translations['loader']['text']; ?>
            </div>
        </div>
    </div>

    <section class="blurM">
        <!-- Header -->
        <?php include "./includes/header.php"; ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <div class="badge" data-elem="hero.badge"><?php echo $translations['hero']['badge']; ?></div>
                        <h1 class="hero-title" data-elem="hero.title"><?php echo $translations['hero']['title']; ?> <span class="text-gradient" data-elem="hero.titleHighlight"><?php echo $translations['hero']['titleHighlight']; ?></span></h1>
                        <p class="hero-description" data-elem="hero.description"><?php echo $translations['hero']['description']; ?></p>
                        <div class="hero-cta">
                            <a href="#" class="btn btn-primary btn-large" data-elem="hero.cta.primary"><?php echo $translations['hero']['cta']['primary']; ?></a>
                            <a href="#demo" class="btn btn-play">
                                <div class="play-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <span data-elem="hero.cta.secondary"><?php echo $translations['hero']['cta']['secondary']; ?></span>
                            </a>
                        </div>
                        <!-- Posible hero stats -->
                    </div>
                    <div class="hero-visual">
                        <div class="dashboard-preview">
                            <div class="dashboard-header">
                                <div class="dashboard-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="dashboard-content">
                                <div class="dashboard-chart">
                                    <canvas id="mainChart"></canvas>
                                </div>
                                <div class="dashboard-stats">
                                    <div class="stat-card">
                                        <div class="stat-card-icon blue">
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                        <div class="stat-card-info">
                                            <div class="stat-card-label" data-elem="dashboard.income"><?php echo $translations['dashboard']['income']; ?></div>
                                            <div class="stat-card-value">2.540€</div>
                                        </div>
                                    </div>
                                    <div class="stat-card">
                                        <div class="stat-card-icon red">
                                            <i class="fas fa-arrow-down"></i>
                                        </div>
                                        <div class="stat-card-info">
                                            <div class="stat-card-label" data-elem="dashboard.expenses"><?php echo $translations['dashboard']['expenses']; ?></div>
                                            <div class="stat-card-value">1.825€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="floating-elements">
                            <div class="floating-element" id="element1">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="floating-element" id="element2">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="floating-element" id="element3">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hero-shape -->
            <div class="hero-shape">
                <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                    <path fill="#4d94ff" fill-opacity="1"
                        d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,224C672,213,768,171,864,149.3C960,128,1056,128,1152,149.3C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="features">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title" data-elem="features.title"><?php echo $translations['features']['title']; ?> <span class="text-gradient" data-elem="features.titleHighlight"><?php echo $translations['features']['titleHighlight']; ?></span></h2>
                    <p class="section-description" data-elem="features.description"><?php echo $translations['features']['description']; ?></p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon blue">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.analysis.title"><?php echo $translations['features']['cards']['analysis']['title']; ?></h3>
                        <p class="feature-description" data-elem="features.cards.analysis.description"><?php echo $translations['features']['cards']['analysis']['description']; ?></p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon red">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.budgets.title"><?php echo $translations['features']['cards']['budgets']['title']; ?></h3>
                        <p class="feature-description" data-elem="features.cards.budgets.description"><?php echo $translations['features']['cards']['budgets']['description']; ?></p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon blue">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.goals.title"><?php echo $translations['features']['cards']['goals']['title']; ?></h3>
                        <p class="feature-description" data-elem="features.cards.goals.description"><?php echo $translations['features']['cards']['goals']['description']; ?></p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-icon red">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.alerts.title"><?php echo $translations['features']['cards']['alerts']['title']; ?></h3>
                        <p class="feature-description" data-elem="features.cards.alerts.description"><?php echo $translations['features']['cards']['alerts']['description']; ?></p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-icon blue">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.security.title"><?php echo $translations['features']['cards']['security']['title']; ?></h3>
                        <p class="feature-description" data-elem="features.cards.security.description"><?php echo $translations['features']['cards']['security']['description']; ?></p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-icon red">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.access.title"><?php echo $translations['features']['cards']['access']['title']; ?></h3>
                        <p class="feature-description" data-elem="features.cards.access.description"><?php echo $translations['features']['cards']['access']['description']; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="how-it-works">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title" data-elem="howItWorks.title"><?php echo $translations['howItWorks']['title']; ?> <span class="text-gradient" data-elem="howItWorks.titleHighlight"><?php echo $translations['howItWorks']['titleHighlight']; ?></span></h2>
                    <p class="section-description" data-elem="howItWorks.description"><?php echo $translations['howItWorks']['description']; ?></p>
                </div>
                <div class="steps">
                    <div class="step" data-aos="fade-right">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h3 class="step-title" data-elem="howItWorks.steps.connect.title"><?php echo $translations['howItWorks']['steps']['connect']['title']; ?></h3>
                            <p class="step-description" data-elem="howItWorks.steps.connect.description"><?php echo $translations['howItWorks']['steps']['connect']['description']; ?></p>
                        </div>
                        <div class="step-image">
                            <img src="https://via.placeholder.com/400x300" alt="Registrate" class="step-img">
                        </div>
                    </div>
                    <div class="step reverse" data-aos="fade-left">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h3 class="step-title" data-elem="howItWorks.steps.customize.title"><?php echo $translations['howItWorks']['steps']['customize']['title']; ?></h3>
                            <p class="step-description" data-elem="howItWorks.steps.customize.description"><?php echo $translations['howItWorks']['steps']['customize']['description']; ?></p>
                        </div>
                        <div class="step-image">
                            <img src="https://via.placeholder.com/400x300" alt="Personaliza tu experiencia" class="step-img">
                        </div>
                    </div>
                    <div class="step" data-aos="fade-right">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h3 class="step-title" data-elem="howItWorks.steps.optimize.title"><?php echo $translations['howItWorks']['steps']['optimize']['title']; ?></h3>
                            <p class="step-description" data-elem="howItWorks.steps.optimize.description"><?php echo $translations['howItWorks']['steps']['optimize']['description']; ?></p>
                        </div>
                        <div class="step-image">
                            <img src="https://via.placeholder.com/400x300" alt="Optimiza tus finanzas" class="step-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta">
            <div class="container">
                <div class="cta-content">
                    <h2 class="cta-title" data-elem="cta.title"><?php echo $translations['cta']['title']; ?> <span class="text-gradient" data-elem="cta.titleHighlight"><?php echo $translations['cta']['titleHighlight']; ?></span></h2>
                    <p class="cta-description" data-elem="cta.description"><?php echo $translations['cta']['description']; ?></p>
                    <div class="cta-buttons">
                        <a href="./register.php" class="btn btn-primary btn-large" data-elem="cta.buttons.primary"><?php echo $translations['cta']['buttons']['primary']; ?></a>
                        <a href="#" class="btn btn-outline btn-large" data-elem="cta.buttons.secondary"><?php echo $translations['cta']['buttons']['secondary']; ?></a>
                    </div>
                    <p class="cta-note" data-elem="cta.note"><?php echo $translations['cta']['note']; ?></p>
                </div>
            </div>
            <div class="cta-shape">
                <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                    <path fill="#0a1128" fill-opacity="1"
                        d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,224C672,213,768,171,864,149.3C960,128,1056,128,1152,149.3C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>
        </section>

        <!-- Footer -->
        <?php include './includes/footer.php'; ?>


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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom JS -->
    <script src="./js/landing_page.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Init AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>