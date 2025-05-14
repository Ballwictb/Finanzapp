<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['user']);
$user       = $_SESSION['user'] ?? null;
?>

<div class="mobile-menu">
    <div class="mobile-menu-header">
        <a href="<?php echo BASE_URL; ?>/index.php" rel="noopener" class="logo">
            <div class="logo-icon">
                <img src="<?php echo BASE_URL; ?>/manifest/manifest_icons/android-chrome-192x192.png" loading="lazy" alt="Icon">
            </div>
            <span data-elem="brand"><?php echo $translations['brand']; ?></span>
        </a>
        <button class="menu-close" aria-label="<?php echo $translations['aria']['closeMenu']; ?>">
            <span></span>
            <span></span>
        </button>
    </div>

    <nav class="mobile-nav" aria-label="<?php echo htmlspecialchars($translations['aria']['mobileMenu'], ENT_QUOTES, 'UTF-8'); ?>">
        <ul class="mobile-nav-list">
            <li><a href="<?php echo BASE_URL; ?>/index.php#features" rel="noopener" class="mobile-nav-link " data-elem="nav.features">
                    <?php echo htmlspecialchars($translations['nav']['features'], ENT_QUOTES, 'UTF-8'); ?></a></li>
            <li><a href="<?php echo BASE_URL; ?>/index.php#how-it-works" rel="noopener" class="mobile-nav-link " data-elem="nav.howItWorks">
                    <?php echo htmlspecialchars($translations['nav']['howItWorks'], ENT_QUOTES, 'UTF-8'); ?></a></li>
            <li><a href="<?php echo BASE_URL; ?>/app/about.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="mobile-nav-link tran" data-elem="nav.about">
                    <?php echo htmlspecialchars($translations['nav']['about'], ENT_QUOTES, 'UTF-8'); ?></a></li>
            <li><a href="<?php echo BASE_URL; ?>/app/contact.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="mobile-nav-link tran" data-elem="nav.contact">
                    <?php echo htmlspecialchars($translations['nav']['contact'], ENT_QUOTES, 'UTF-8'); ?></a></li>
        </ul>

        <!-- Mobile language selector -->
        <div class="mobile-language-selector">
            <p data-elem="language.select"><?php echo htmlspecialchars($translations['language']['select'], ENT_QUOTES, 'UTF-8'); ?>:</p>
            <div class="mobile-language-options">
                <a href="?lang=es" rel="noopener" data-lang="es" class="<?php echo ($lang == 'es') ? 'active' : ''; ?> tran">ES</a>
                <a href="?lang=en" rel="noopener" data-lang="en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?> tran">EN</a>
                <a href="?lang=fr" rel="noopener" data-lang="fr" class="<?php echo ($lang == 'fr') ? 'active' : ''; ?> tran">FR</a>
            </div>
        </div>

        <div class="mobile-nav-buttons">
            <?php if ($isLoggedIn): ?>
                <div class="profile-wrapper" style="display: flex; align-items: center; gap: 12px;">
                    <!-- Avatar -->
                    <img
                        src="<?php echo htmlspecialchars($user['url_image'], ENT_QUOTES); ?>"
                        alt="Avatar de <?php echo htmlspecialchars($user['name'], ENT_QUOTES); ?>"
                        style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">

                    <!-- Info + acciones -->
                    <div class="profile-info-actions" style="display: flex; flex-direction: column; gap: 8px;">
                        <!-- Nombre y email -->
                        <div class="profile-info" style="display: flex; flex-direction: column;">
                            <span style="font-weight: bold; font-size: 0.9rem; line-height: 1;">
                                <?php echo htmlspecialchars($user['name'], ENT_QUOTES); ?>
                            </span>
                            <span style="font-size: 0.8rem; color: #666;">
                                <?php echo htmlspecialchars($user['email'], ENT_QUOTES); ?>
                            </span>
                        </div>
                        <!-- Botones -->
                        <div class="profile-actions" style="display: flex; gap: 6px;">
                            <a
                                href="<?php echo BASE_URL; ?>/app/userConfig.php?lang=<?php echo $lang; ?>"
                                style="flex: 1; text-align: center; padding: 6px 8px; font-size: 0.8rem; text-decoration: none; background: #007bff; color: #fff; border-radius: 4px;">
                                <?php echo $translations['userConfig']['configuration']; ?>
                            </a>
                            <button
                                id="logoutBtn"
                                style="flex: 1; padding: 6px 8px; font-size: 0.8rem; background: #dc3545; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                                <?php echo $translations['userConfig']['logout']; ?>
                            </button>
                        </div>
                    </div>
                </div>

            <?php else: ?>
                <a href="<?php echo BASE_URL; ?>/app/login.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="btn btn-outline tran" data-elem="buttons.login">
                    <?php echo htmlspecialchars($translations['buttons']['login'], ENT_QUOTES, 'UTF-8'); ?></a>
                <a href="<?php echo BASE_URL; ?>/app/register.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" rel="noopener" class="btn btn-primary tran" data-elem="buttons.register">
                    <?php echo htmlspecialchars($translations['buttons']['register'], ENT_QUOTES, 'UTF-8'); ?></a>
            <?php endif; ?>
        </div>
    </nav>

</div>