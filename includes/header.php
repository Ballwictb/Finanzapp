<?php include "./config.php"; ?>

<header class="header">
    <div class="container">
        <a href="./index.php?lang=<?php echo $lang; ?>" class="logo">
            <div class="logo-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <span data-elem="brand"><?php echo $translations['brand']; ?></span>
        </a>
        <!-- nav -->
        <nav class="main-nav" aria-label="menu">
            <ul class="nav-list">
                <li><a href="#features" class="nav-link" data-elem="nav.features"
                        aria-label="<?php echo $translations['nav']['features']; ?>">
                        <?php echo $translations['nav']['features']; ?></a></li>
                <li><a href="#how-it-works" class="nav-link" data-elem="nav.howItWorks"
                        aria-label="<?php echo $translations['nav']['howItWorks']; ?>">
                        <?php echo $translations['nav']['howItWorks']; ?></a></li>
                <li><a href="./about.php?lang=<?php echo $lang; ?>" class="nav-link" data-elem="nav.about"
                        aria-label="<?php echo $translations['nav']['about']; ?>">
                        <?php echo $translations['nav']['about']; ?></a></li>
                <li><a href="./contact.php?lang=<?php echo $lang; ?>" class="nav-link" data-elem="nav.contact"
                        aria-label="<?php echo $translations['nav']['contact']; ?>">
                        <?php echo $translations['nav']['contact']; ?></a></li>
            </ul>
        </nav>

        <!-- Languages (es-fr-en) -->
        <div class="nav-buttons">
            <div class="language-selector">
                <button class="language-toggle">
                    <i class="fas fa-globe"></i>
                    <span class="current-lang"><?php echo strtoupper($lang); ?></span>
                </button>
                <div class="language-dropdown">
                    <!-- Aquí se conserva la página actual con el parámetro 'page' -->
                    <a href="?lang=es<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" 
                       data-lang="es" class="<?php echo ($lang == 'es') ? 'active' : ''; ?>">Español</a>
                    <a href="?lang=en<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" 
                       data-lang="en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?>">English</a>
                    <a href="?lang=fr<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" 
                       data-lang="fr" class="<?php echo ($lang == 'fr') ? 'active' : ''; ?>">Français</a>
                </div>
            </div>
            <a href="./login.php?lang=<?php echo $lang; ?>" class="btn btn-outline" data-elem="buttons.login"
                aria-label="<?php echo $translations['buttons']['login']; ?>">
                <?php echo $translations['buttons']['login']; ?></a>
            <a href="./register.php?lang=<?php echo $lang; ?>" class="btn btn-primary" data-elem="buttons.register"
                aria-label="<?php echo $translations['buttons']['register']; ?>">
                <?php echo $translations['buttons']['register']; ?></a>
        </div>
        <button class="menu-toggle" aria-label="Menú">
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<script src="./script.js"></script>
