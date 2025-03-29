<!DOCTYPE php>
<php lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Inicia sesión en FinanzApp, tu herramienta para gestionar tus finanzas personales de forma eficiente.">
  <meta name="keywords" content="finanzas, gestión financiera, FinanzApp, dinero, ahorro">
  <meta name="author" content="FinanzApp Team">
  <title>Inicio Sesión - FinanzApp</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

  <!-- General styles -->
  <link rel="stylesheet" href="./css/landing_page.css">
  <link rel="stylesheet" href="./css/login.css">

  <!-- Notyf  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/logo.ico" type="image/x-icon">
</head>
<body>
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
          <li><a href="./index.php" class="nav-link" data-elem="nav.landing" 
            aria-label="Inicio">Inicio</a></li>
          <li><a href="#about" class="nav-link" data-elem="nav.testimonials" 
            aria-label="Testimonios">Sobre Nosotros</a></li>
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
      </div>
      <button class="menu-toggle" aria-label="Menú">
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

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
        <li><a href="./index.php" class="mobile-nav-link" data-elem="nav.landing">Inicio</a></li>
        <li><a href="#about" class="mobile-nav-link" data-elem="nav.testimonials">Sobre Nosotros</a></li>
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
        <a href="#" class="btn btn-outline" data-elem="buttons.login">Iniciar sesión</a>
        <a href="#" class="btn btn-primary" data-elem="buttons.register">Registrarse</a>
      </div>
    </nav>
  </div>

  <main class="login">
    <div class="container">
      <div class="login-form">
        <h2>Iniciar Sesión</h2>
        <form id="loginForm" action="#" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="finanzapp@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="12#4_6*8" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-large" data-elem="login.submit" aria-label="Iniciar sesión">Iniciar Sesion</button>
          </div>
        </form>
        <p class="form-note">
          ¿No tienes una cuenta? <a href="./register.php">Regístrate</a>
        </p>
      </div>
    </div>
  </main>
        <!-- Footer -->
        <?php include './includes/footer.php'; ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
  <script src="./js/landing_page.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
  <script src="./js/validation.js"></script>
  
</body>
</php>
