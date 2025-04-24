<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="<?php echo BASE_URL; ?>/index.php" rel="noopener" class="logo">
                    <div class="logo-icon">
                        <img src="<?php echo BASE_URL; ?>/manifest/manifest_icons/android-chrome-192x192.png" loading="lazy" alt="Icon">
                    </div>
                    <span data-elem="brand"><?php echo $translations['brand']; ?></span>
                </a>
                <p class="footer-description" data-elem="footer.description"><?php echo $translations['footer']['description']; ?></p>
                <div class="social-links">
                    <a href="https://github.com/Ballwictb/FinanzApp" rel="noopener" target="_blank" class="social-link tran" aria-label="github"><i class="fab fa-github"></i></a>
                    <a href="https://finanzapp.es" class="social-link tran" rel="noopener" target="_blank" aria-label="pagina web"><i class="fa-light fa-globe-pointer"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h4 class="footer-title" data-elem="footer.product"><?php echo $translations['footer']['product']; ?></h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo BASE_URL; ?>/index.php?lang=<?php echo $lang; ?>#features" rel="noopener" data-elem="footer.links.features"><?php echo $translations['footer']['links']['features']; ?></a></li>
                        <li><a href="<?php echo BASE_URL; ?>/index.php?lang=<?php echo $lang; ?>#how-it-works" rel="noopener" data-elem="footer.links.howItWorks"><?php echo $translations['footer']['links']['howItWorks']; ?></a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4 class="footer-title" data-elem="footer.company"><?php echo $translations['footer']['company']; ?></h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo BASE_URL; ?>/app/about.php" rel="noopener" data-elem="footer.links.about" class="tran"><?php echo $translations['footer']['links']['about']; ?></a></li>
                        <li><a href="<?php echo BASE_URL; ?>/app/contact.php" rel="noopener" data-elem="footer.links.contact" class="tran"><?php echo $translations['footer']['links']['contact']; ?></a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4 class="footer-title" data-elem="footer.legal"><?php echo $translations['footer']['legal']; ?></h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo BASE_URL; ?>/app/terms.php" rel="noopener" data-elem="footer.links.terms" class="tran"><?php echo $translations['footer']['links']['terms']; ?></a></li>
                        <li><a href="<?php echo BASE_URL; ?>/app/privacy.php" rel="noopener" data-elem="footer.links.privacy" class="tran"><?php echo $translations['footer']['links']['privacy']; ?></a></li>
                        <li><a href="<?php echo BASE_URL; ?>/app/cookies.php" rel="noopener" data-elem="footer.links.cookies" class="tran"><?php echo $translations['footer']['links']['cookies']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p xmlns:cc="http://creativecommons.org/ns#">
  							This work is licensed under
  							<a href="https://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;" class="tran">
    								CC BY-NC 4.0
    								<img style="display:inline-block;height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt="">
    								<img style="display:inline-block;height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="">
    								<img style="display:inline-block;height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="">
  							</a>
						</p>
        </div>
    </div>
</footer>
