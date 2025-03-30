<!DOCTYPE php>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros | FinanzApp</title>


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

    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <section class="blurM">

        <!-- Header -->
        <header class="header scrolled">
            <div class="container">
                <a href="index.php" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <span data-elem="brand">FinanzApp</span>
                </a>

                <!-- nav -->
                <nav class="main-nav" aria-label="menu">
                    <ul class="nav-list">
                        <li><a href="./index.php#features" class="nav-link" data-elem="nav.features"
                                aria-label="Características">Características</a></li>
                        <li><a href="./index.php#how-it-works" class="nav-link" data-elem="nav.howItWorks"
                                aria-label="Cómo funciona">Cómo
                                funciona</a></li>
                        <li><a href="./about.php" class="nav-link" data-elem="nav.testimonials"
                                aria-label="sobre nosotros">Sobre
                                Nosotros</a></li>
                        <li><a href="./contact.php" class="nav-link" data-elem="nav.contact"
                                aria-label="Contacto">Contacto</a></li>
                    </ul>
                </nav>

                <div class="nav-buttons">
                    <!-- Language Selector -->
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

                    <a href="./login.php" class="btn btn-outline" data-elem="buttons.login">Iniciar sesión</a>
                    <a href="./register.php" class="btn btn-primary" data-elem="buttons.register">Registrarse</a>
                </div>

                <button class="menu-toggle" aria-label="Menú">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>



        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title" data-elem="about.title">Sobre Nosotros</h1>
                <p class="page-description" data-elem="about.description">Conoce al equipo detrás de
                    <strong>FinanzApp</strong>
                </p>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <div class="container">
                <div class="about-intro">
                    <h2 class="section-title" data-elem="about.intro.title">Nuestra <span
                            class="highlight">misión</span>
                    </h2>
                    <p class="section-description" data-elem="about.intro.description">En FinanzApp, creemos que todos
                        merecen tener control sobre sus finanzas personales. Nuestra misión es proporcionar herramientas
                        intuitivas y accesibles que ayuden a las personas a tomar decisiones financieras informadas y
                        alcanzar sus metas económicas.</p>
                    <p class="section-description" data-elem="about.intro.vision">Desarrollado como Trabajo Fin de Grado
                        en
                        el centro IES La Arboleda 🌳, FinanzApp nace de la pasión por combinar tecnología y finanzas
                        para
                        crear
                        soluciones que impacten positivamente en la vida cotidiana de las personas.</p>
                </div>

                <div class="team-section">
                    <h2 class="section-title" data-elem="about.team.title">Nuestro <span class="highlight">equipo</span>
                    </h2>
                    <p class="section-description" data-elem="about.team.description">Somos un equipo de estudiantes de
                        <strong>desarrollo web</strong> apasionados por la tecnología.
                    </p>

                    <div class="team-grid">
                        <!-- Team Member 1 -->
                        <div class="team-card">
                            <div class="team-image">
                                <img src="./assets/team/israel.jpg" alt="Israel Soriano Buendí" class="team-photo">
                            </div>
                            <div class="team-info">
                                <h3 class="team-name">Israel Soriano Buendía </h3>
                                <p class="team-role" data-elem="about.team.roles.developer">Desarrollador web</p>
                                <p class="team-bio" data-elem="about.team.bios.israel">Especializado en desarrollo web y
                                    administrador de sistemas.Actualmente estoy como Estudiante en practicas en NTT
                                    DATA.
                                </p>
                                <div class="team-social">
                                    <a href="https://www.linkedin.com/in/israel-soriano/" target="_blank"
                                        class="social-link linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://github.com/IsraC0d33" target="_blank" class="social-link github">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 2 -->
                        <div class="team-card">
                            <div class="team-image">
                                <img src="./assets/team/roberto.jpg" alt="Roberto Ortiz Pérez" class="team-photo">
                            </div>
                            <div class="team-info">
                                <h3 class="team-name">Roberto Ortiz Pérez</h3>
                                <p class="team-role" data-elem="about.team.roles.student">Estudiante de 2º de DAW</p>
                                <p class="team-bio" data-elem="about.team.bios.roberto">Estudiante de 2º de DAW.
                                    Actualmente
                                    estoy como Estudiante en practicas en NTT DATA. </p>
                                <div class="team-social">
                                    <a href="https://www.linkedin.com/in/roberto-ortiz-p%C3%A9rez-371b4b328/"
                                        target="_blank" class="social-link linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://github.com/Robertort1z" target="_blank" class="social-link github">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 3 -->
                        <div class="team-card">
                            <div class="team-image">
                                <img src="./assets/team/jamal.jpg" alt="Jamal Rabah" class="team-photo">
                            </div>
                            <div class="team-info">
                                <h3 class="team-name">Jamal Rabah</h3>
                                <p class="team-role" data-elem="about.team.roles.developer">Desarrollador web</p>
                                <p class="team-bio" data-elem="about.team.bios.jamal">Desarrollador de Aplicaciones Web,
                                    con
                                    experiencia autodidacta. También tengo experiencia y conocimientos en administración
                                    de
                                    sistemas y redes, así como soporte informático tanto hardware como software. </p>
                                <div class="team-social">
                                    <a href="https://www.linkedin.com/in/jamalrabah/" target="_blank"
                                        class="social-link linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/jamalrabah/" target="_blank"
                                        class="social-link github">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="values-section">
                    <h2 class="section-title" data-elem="about.values.title">Nuestros <span
                            class="highlight">valores</span>
                    </h2>

                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.privacy.title">Privacidad</h3>
                            <p class="value-description" data-elem="about.values.privacy.description">Tu información
                                financiera es tuya. Implementamos medidas de seguridad y nunca compartimos
                                tus datos con terceros.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-universal-access"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.accessibility.title">Accesibilidad</h3>
                            <p class="value-description" data-elem="about.values.accessibility.description">Creemos que
                                las
                                herramientas financieras deben ser accesibles para todos, independientemente de sus
                                conocimientos técnicos.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.innovation.title">Innovación</h3>
                            <p class="value-description" data-elem="about.values.innovation.description">Constantemente
                                buscamos nuevas formas de mejorar nuestras herramientas y ofrecer soluciones innovadoras
                                a
                                problemas financieros cotidianos.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3 class="value-title" data-elem="about.values.transparency.title">Transparencia</h3>
                            <p class="value-description" data-elem="about.values.transparency.description">Somos claros
                                sobre cómo funcionan nuestras herramientas y cómo utilizamos la información. No hay
                                sorpresas ni letra pequeña.</p>
                        </div>
                    </div>
                </div>

                <div class="cta-box">
                    <h2 class="cta-title" data-elem="about.cta.title">Tienes alguna duda?</h2>
                    <p class="cta-description" data-elem="about.cta.description">Siempre estamos dispuestos a ayudarte
                        en lo
                        que necesites no te lo pienses y contactanos, ¡nos encantaría ayudarte!</p>
                    <a href="./contact.php" class="btn btn-primary" data-elem="about.cta.button">Contáctanos</a>
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
            <p data-elem="cookies.description">Este sitio web utiliza cookies para mejorar su experiencia. Al
                continuar
                navegando, acepta nuestra <a href="cookies.php" data-elem="cookies.link">política de cookies</a>.
            </p>
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

    <!-- Custom JS -->
    <script src="./js/landing_page.js"></script>
</body>

</php>