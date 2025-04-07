<?php include_once "./config.php"; ?>

<header class="header">
    <div class="container">
        <a href="./index.php?lang=<?php echo $lang; ?>" rel="noopener" class="logo">
            <div class="logo-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <span data-elem="brand"><?php echo $translations['brand']; ?></span>
        </a>
        <!-- nav -->
				<nav class="main-nav" aria-label="menu">
    <ul class="nav-list">
        <li><a href="./index.php?lang=<?php echo $lang; ?>#features" rel="noopener" class="nav-link" data-elem="nav.features"
                aria-label="<?php echo htmlspecialchars($translations['nav']['features'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($translations['nav']['features'], ENT_QUOTES, 'UTF-8'); ?></a></li>
        <li><a href="./index.php?lang=<?php echo $lang; ?>#how-it-works" rel="noopener" class="nav-link" data-elem="nav.howItWorks"
                aria-label="<?php echo htmlspecialchars($translations['nav']['howItWorks'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($translations['nav']['howItWorks'], ENT_QUOTES, 'UTF-8'); ?></a></li>
        <li><a href="./about.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="nav-link" data-elem="nav.about"
                aria-label="<?php echo htmlspecialchars($translations['nav']['about'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($translations['nav']['about'], ENT_QUOTES, 'UTF-8'); ?></a></li>
        <li><a href="./contact.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="nav-link" data-elem="nav.contact"
                aria-label="<?php echo htmlspecialchars($translations['nav']['contact'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($translations['nav']['contact'], ENT_QUOTES, 'UTF-8'); ?></a></li>
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
                    <a href="?lang=es<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" rel="noopener"
                       data-lang="es" class="<?php echo ($lang == 'es') ? 'active' : ''; ?>">Español</a>
                    <a href="?lang=en<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" rel="noopener"
                       data-lang="en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?>">English</a>
                    <a href="?lang=fr<?php echo isset($_GET['page']) ? '&page=' . $_GET['page'] : ''; ?>" rel="noopener"
                       data-lang="fr" class="<?php echo ($lang == 'fr') ? 'active' : ''; ?>">Français</a>
                </div>
            </div>
            <a href="./login.php?lang=<?php echo $lang; ?>" rel="noopener" class="btn btn-outline" data-elem="buttons.login"
                aria-label="<?php echo $translations['buttons']['login']; ?>">
                <?php echo $translations['buttons']['login']; ?></a>
            <a href="./register.php?lang=<?php echo $lang; ?>" rel="noopener" class="btn btn-primary" data-elem="buttons.register"
                aria-label="<?php echo $translations['buttons']['register']; ?>">
                <?php echo $translations['buttons']['register']; ?></a>
        </div>
        <button class="menu-toggle" aria-label="Menú">
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<script src="./js/translations.js"></script>
