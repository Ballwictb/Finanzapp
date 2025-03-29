<!DOCTYPE php>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanzApp</title>

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
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <a href="./index.php" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <span data-elem="brand">FinanzApp</span>
            </a>
            <button class="menu-close" aria-label="Cerrar menú">
                <span></span>
                <span></span>
            </button>
        </div>

        <nav class="mobile-nav" aria-label="menu movil">
            <ul class="mobile-nav-list">
                <li><a href="#features" class="mobile-nav-link" data-elem="nav.features">Características</a></li>
                <li><a href="#how-it-works" class="mobile-nav-link" data-elem="nav.howItWorks">Cómo funciona</a></li>
                <li><a href="./about.php" class="mobile-nav-link" data-elem="nav.testimonials">Sobre Nosotros</a></li>
                <li><a href="./contact.php" class="mobile-nav-link" data-elem="nav.contact">Contacto</a></li>
            </ul>

            <!-- Mobile language  -->
            <div class="mobile-language-selector">
                <p data-elem="language.select">Seleccionar idioma:</p>
                <div class="mobile-language-options">
                    <a href="#" data-lang="es" class="active">ES</a>
                    <a href="#" data-lang="en">EN</a>
                    <a href="#" data-lang="fr">FR</a>
                </div>
            </div>

            <div class="mobile-nav-buttons">
                <a href="./login.php" class="btn btn-outline" data-elem="buttons.login">Iniciar sesión</a>
                <a href="./register.php" class="btn btn-primary" data-elem="buttons.register">Registrarse</a>
            </div>
        </nav>
    </div>


    <!-- Styles cursor add -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
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
                <span>F</span>
                <span>i</span>
                <span>n</span>
                <span>a</span>
                <span>n</span>
                <span>z</span>
                <span>A</span>
                <span>p</span>
                <span>p</span>
            </div>
        </div>
    </div>
    <section class="blurM">
        <!-- Header -->
        <header class="header">
            <div class="container">
                <a href="./index.php" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <span data-elem="brand">FinanzApp</span>
                </a>
                <!-- nav -->
                <nav class="main-nav" aria-label="menu">
                    <ul class="nav-list">
                        <li><a href="#features" class="nav-link" data-elem="nav.features"
                                aria-label="Características">Características</a></li>
                        <li><a href="#how-it-works" class="nav-link" data-elem="nav.howItWorks"
                                aria-label="Cómo funciona">Cómo
                                funciona</a></li>
                        <li><a href="./about.php" class="nav-link" data-elem="nav.testimonials"
                                aria-label="sobre nosotros">Sobre
                                Nosotros</a></li>
                        <li><a href="./contact.php" class="nav-link" data-elem="nav.contact"
                                aria-label="Contacto">Contacto</a></li>
                    </ul>
                </nav>

                <!-- Languages (es-fr-en) -->
                <div class="nav-buttons">
                    <div class="language-selector">
                        <button class="language-toggle">
                            <i class="fas fa-globe"></i>
                            <span class="current-lang">ES</span>
                        </button>
                        <div class="language-dropdown">
                            <a href="#" data-lang="es" class="active">Español</a>
                            <a href="#" data-lang="en">English</a>
                            <a href="#" data-lang="fr">Français</a>
                        </div>
                    </div>
                    <a href="./login.php" class="btn btn-outline" data-elem="buttons.login"
                        aria-label="Iniciar Sesión">Iniciar
                        sesión</a>
                    <a href="./register.php" class="btn btn-primary" data-elem="buttons.register"
                        aria-label="Registrarse">Registrarse</a>
                </div>
                <button class="menu-toggle" aria-label="Menú">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>




        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <div class="badge" data-elem="hero.badge">TFG La Arboleda</div>
                        <h1 class="hero-title" data-elem="hero.title">Control financiero <span class="text-gradient"
                                data-elem="hero.titleHighlight">inteligente</span></h1>
                        <p class="hero-description" data-elem="hero.description">Gestiona tus finanzas personales con
                            una
                            plataforma que te ayuda a visualizar, planificar y optimizar tu dinero de forma intuitiva.
                        </p>
                        <div class="hero-cta">
                            <a href="#" class="btn btn-primary btn-large" data-elem="hero.cta.primary">Comenzar</a>
                            <a href="#demo" class="btn btn-play">
                                <div class="play-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <span data-elem="hero.cta.secondary">Ver video</span>
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
                                            <div class="stat-card-label" data-elem="dashboard.income">Ingresos</div>
                                            <div class="stat-card-value">2.540€</div>
                                        </div>
                                    </div>
                                    <div class="stat-card">
                                        <div class="stat-card-icon red">
                                            <i class="fas fa-arrow-down"></i>
                                        </div>
                                        <div class="stat-card-info">
                                            <div class="stat-card-label" data-elem="dashboard.expenses">Gastos</div>
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
                    <h2 class="section-title" data-elem="features.title">Características <span class="text-gradient"
                            data-elem="features.titleHighlight">principales</span></h2>
                    <p class="section-description" data-elem="features.description">Descubre cómo FinanzApp puede
                        transformar tu gestión financiera</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon blue">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.analysis.title">Análisis inteligente</h3>
                        <p class="feature-description" data-elem="features.cards.analysis.description">Visualiza tus
                            patrones de gasto con gráficos interactivos y descubre oportunidades de ahorro.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon red">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.budgets.title">Presupuestos dinámicos</h3>
                        <p class="feature-description" data-elem="features.cards.budgets.description">Crea presupuestos
                            personalizados que se adaptan a tus hábitos y te alertan cuando te desvías.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon blue">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.goals.title">Objetivos financieros</h3>
                        <p class="feature-description" data-elem="features.cards.goals.description">Establece metas de
                            ahorro y visualiza tu progreso con indicadores claros y motivadores.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-icon red">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.alerts.title">Noticias personalizadas</h3>
                        <p class="feature-description" data-elem="features.cards.alerts.description">Recibe
                            notificaciones
                            sobre actualizaciones de la app.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-icon blue">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.security.title">Seguridad avanzada</h3>
                        <p class="feature-description" data-elem="features.cards.security.description">Tus datos están
                            protegidos con encriptación.</p>
                    </div>
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-icon red">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="feature-title" data-elem="features.cards.access.title">Acceso multiplataforma</h3>
                        <p class="feature-description" data-elem="features.cards.access.description">Gestiona tus
                            finanzas
                            desde cualquier dispositivo.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="how-it-works">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title" data-elem="howItWorks.title">Cómo <span class="text-gradient"
                            data-elem="howItWorks.titleHighlight">funciona</span></h2>
                    <p class="section-description" data-elem="howItWorks.description">Comienza a gestionar tus finanzas
                        en
                        tres simples pasos</p>
                </div>
                <div class="steps">
                    <div class="step" data-aos="fade-right">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h3 class="step-title" data-elem="howItWorks.steps.connect.title">Registrate</h3>
                            <p class="step-description" data-elem="howItWorks.steps.connect.description">Create una
                                cuenta
                                para poder disfrutar de la app.
                            </p>
                        </div>
                        <div class="step-image">
                            <img src="https://via.placeholder.com/400x300" alt="Registrate" class="step-img">
                        </div>
                    </div>
                    <div class="step reverse" data-aos="fade-left">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h3 class="step-title" data-elem="howItWorks.steps.customize.title">Personaliza tu
                                experiencia
                            </h3>
                            <p class="step-description" data-elem="howItWorks.steps.customize.description">Configura
                                categorías, presupuestos y objetivos adaptados a tus necesidades financieras
                                específicas.
                            </p>
                        </div>
                        <div class="step-image">
                            <img src="https://via.placeholder.com/400x300" alt="Personaliza tu experiencia"
                                class="step-img">
                        </div>
                    </div>
                    <div class="step" data-aos="fade-right">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h3 class="step-title" data-elem="howItWorks.steps.optimize.title">Optimiza tus finanzas
                            </h3>
                            <p class="step-description" data-elem="howItWorks.steps.optimize.description">Analiza
                                resumenes
                                y graficas para mejorar tu salud financiera.</p>
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
                    <h2 class="cta-title" data-elem="cta.title">¿Listo para transformar tus <span class="text-gradient"
                            data-elem="cta.titleHighlight">finanzas</span>?</h2>
                    <p class="cta-description" data-elem="cta.description">Únete a miles de personas que ya están
                        mejorando
                        su salud financiera con FinanzApp.</p>
                    <div class="cta-buttons">
                        <a href="./register.php" class="btn btn-primary btn-large"
                            data-elem="cta.buttons.primary">Comenzar
                            gratis</a>
                        <a href="#" class="btn btn-outline btn-large" data-elem="cta.buttons.secondary">Ver video</a>
                    </div>
                    <p class="cta-note" data-elem="cta.note">App totalmente gratuita.
                    </p>
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
            <h3 data-elem="cookies.title">Uso de cookies</h3>
            <p data-elem="cookies.description">Este sitio web utiliza cookies para mejorar su experiencia. Al continuar
                navegando, acepta nuestra <a href="./cookies.php" data-elem="cookies.link">política de cookies</a>.</p>
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

</php>