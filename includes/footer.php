<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="index.php" rel="noopener" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <span data-elem="brand"><?php echo $translations['brand']; ?></span>
                </a>
                <p class="footer-description" data-elem="footer.description"><?php echo $translations['footer']['description']; ?></p>
                <div class="social-links">
                    <a href="https://github.com/Ballwictb/FinanzApp" rel="noopener" target="_blank" class="social-link" aria-label="github"><i class="fab fa-github"></i></a>
                    <a href="https://finanzapp.es" class="social-link" rel="noopener" target="_blank" aria-label="pagina web"><i class="fa-light fa-globe-pointer"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h4 class="footer-title" data-elem="footer.product"><?php echo $translations['footer']['product']; ?></h4>
                    <ul class="footer-menu">
                        <li><a href="./index.php?lang=<?php echo $lang; ?>#features" rel="noopener" data-elem="footer.links.features"><?php echo $translations['footer']['links']['features']; ?></a></li>
                        <li><a href="./index.php?lang=<?php echo $lang; ?>#how-it-works" rel="noopener" data-elem="footer.links.howItWorks"><?php echo $translations['footer']['links']['howItWorks']; ?></a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4 class="footer-title" data-elem="footer.company"><?php echo $translations['footer']['company']; ?></h4>
                    <ul class="footer-menu">
                        <li><a href="about.php" rel="noopener" data-elem="footer.links.about"><?php echo $translations['footer']['links']['about']; ?></a></li>
                        <li><a href="contact.php" rel="noopener" data-elem="footer.links.contact"><?php echo $translations['footer']['links']['contact']; ?></a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4 class="footer-title" data-elem="footer.legal"><?php echo $translations['footer']['legal']; ?></h4>
                    <ul class="footer-menu">
                        <li><a href="terms.php" rel="noopener" data-elem="footer.links.terms"><?php echo $translations['footer']['links']['terms']; ?></a></li>
                        <!-- <li><a href="privacy.php" rel="noopener" data-elem="footer.links.privacy"><?php echo $translations['footer']['links']['privacy']; ?></a></li> -->
                        <li><a href="cookies.php" rel="noopener" data-elem="footer.links.cookies"><?php echo $translations['footer']['links']['cookies']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="copyright" data-elem="footer.copyright"><?php echo $translations['footer']['copyright']; ?></p>
        </div>
    </div>
</footer>
