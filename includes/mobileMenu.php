<div class="mobile-menu">
    <div class="mobile-menu-header">
        <a href="./index.php" class="logo">
            <div class="logo-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <span data-elem="brand"><?php echo $translations['brand']; ?></span>
        </a>
        <button class="menu-close" aria-label="<?php echo $translations['aria']['closeMenu']; ?>">
            <span></span>
            <span></span>
        </button>
    </div>

    <nav class="mobile-nav" aria-label="<?php echo $translations['aria']['mobileMenu']; ?>">
        <ul class="mobile-nav-list">
            <li><a href="./index.php#features" class="mobile-nav-link" data-elem="nav.features"><?php echo $translations['nav']['features']; ?></a></li>
            <li><a href="./index.php#how-it-works" class="mobile-nav-link" data-elem="nav.howItWorks"><?php echo $translations['nav']['howItWorks']; ?></a></li>
            <li><a href="./about.php?lang=<?php echo $lang; ?>" class="mobile-nav-link" data-elem="nav.about"><?php echo $translations['nav']['about']; ?></a></li>
            <li><a href="./contact.php?lang=<?php echo $lang; ?>" class="mobile-nav-link" data-elem="nav.contact"><?php echo $translations['nav']['contact']; ?></a></li>
        </ul>

        <!-- Mobile language selector -->
        <div class="mobile-language-selector">
            <p data-elem="language.select"><?php echo $translations['language']['select']; ?>:</p>
            <div class="mobile-language-options">
                <a href="?lang=es" data-lang="es" class="<?php echo ($lang == 'es') ? 'active' : ''; ?>">ES</a>
                <a href="?lang=en" data-lang="en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?>">EN</a>
                <a href="?lang=fr" data-lang="fr" class="<?php echo ($lang == 'fr') ? 'active' : ''; ?>">FR</a>
            </div>
        </div>

        <div class="mobile-nav-buttons">
            <a href="./login.php?lang=<?php echo $lang; ?>" class="btn btn-outline" data-elem="buttons.login"><?php echo $translations['buttons']['login']; ?></a>
            <a href="./register.php?lang=<?php echo $lang; ?>" class="btn btn-primary" data-elem="buttons.register"><?php echo $translations['buttons']['register']; ?></a>
        </div>
    </nav>
</div>