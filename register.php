<!DOCTYPE php>
<php lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - FinanzApp</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Ballwictb/font-awesome-sixball-v2@main/six-rp/css/all.min.css">

  <!-- General styles (using part of the landing page CSS) -->
  <link rel="stylesheet" href="./css/landing_page.css">
  <!-- Specific styles for the register page -->
  <link rel="stylesheet" href="./css/register.css">
</head>
<body>
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
            aria-label="Cómo funciona">Cómo funciona</a></li>
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
        <li><a href="#features" class="mobile-nav-link" data-elem="nav.features">Características</a></li>
        <li><a href="#how-it-works" class="mobile-nav-link" data-elem="nav.howItWorks">Cómo funciona</a></li>
        <li><a href="#testimonials" class="mobile-nav-link" data-elem="nav.testimonials">Testimonios</a></li>
        <li><a href="contact.php" class="mobile-nav-link" data-elem="nav.contact">Contacto</a></li>
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
      </div>
    </nav>
  </div>

  <!-- Main register section with additional top margin for spacing -->
  <main class="register">
    <div class="container">
      <div class="register-form">
        <h2 data-elem="register.title">Crear Cuenta</h2>
        <form id="registerForm" action="#" method="post">
          <div class="form-group">
            <label for="nombre" data-elem="register.fullname">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
          </div>
          <div class="form-group">
            <label for="email" data-elem="register.email">Email</label>
            <input type="email" id="email" name="email" placeholder="Tu email" required>
          </div>
          <div class="form-group">
            <label for="password" data-elem="register.password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" 
                   pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$" 
                   title="Password must be at least 8 characters long and include at least one lowercase letter, one uppercase letter, and one number." 
                   required>
          </div>
          <div class="form-group">
            <label for="confirm-password" data-elem="register.confirmPassword">Confirme la Contraseña</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirme la Contraseña" required>
          </div>
          <div class="form-group checkbox-container">
            <label class="checkbox-label">
              <input type="checkbox" name="terms" required>
            </label>
            <label for="terms" data-elem="register.terms">
              Acepto los <a href="#">términos y condiciones</a>
            </label>
          </div>
          <div class="form-group checkbox-container">
            <label class="checkbox-label">
              <input type="checkbox" name="notifications">
            </label>
            <label for="notifications" data-elem="register.notifications">
              Confirmo recibir notificaciones por email
            </label>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-large" data-elem="register.submit" aria-label="Register">Registro</button>
          </div>
        </form>
        <p class="form-note" data-elem="register.note">
          ¿Ya tiene una cuenta? <a href="./login.php">Iniciar Sesión</a>
        </p>
      </div>
    </div>
  </main>
        <!-- Footer -->
        <?php include './includes/footer.php'; ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="./js/landing_page.js"></script>
  <!-- Custom JS for form validation -->
  <script>
    const registerForm = document.getElementById('registerForm');

    registerForm.addEventListener('submit', function(event) {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;

      // Check if passwords match
      if (password !== confirmPassword) {
        event.preventDefault(); // Prevent form submission
        alert('Passwords do not match.');
      }
    });
  </script>
</body>
</php>
