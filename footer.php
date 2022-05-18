<?php
/**
 * The theme footer
 * 
 * @package pure-spirit
 */
?>
        <footer id="site-footer" class="site-footer" role="contentinfo">
            <div id="footer-contact">
                <a href="mailto:contact@localesolutions.com">Questions? Email us at contact@localesolutions.com</a>
            </div>
            <div id="footer-secondary">
                <div class="container">
                    <div class="row site-footer">
                        <div id="footer-decoration">
                            <svg height="32" width="48">
                                <polygon class="decoration-fill" points="0,0 48,0 24,18" />
                            </svg>
                        </div>
                        <div id="footer-social">
                            <a href="https://www.linkedin.com/company/localesolutions/about/" class="linkedin social"
                                target="_blank"><i class="fa fa-linkedin-square"></i></a>
                        </div>
                        <?php if ( has_nav_menu( 'footer' ) ) : ?>
                        <nav id="footer-navbar" class="navbar navbar-default site-navigation" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                        </nav>
                        <?php endif; ?>
                        <div id="footer-copyright">&copy;2019 Locale <b>Solutions</b></div>
                    </div>
                </div>
            </div>
        </footer>
        <!--wordpress footer-->
<?php wp_footer(); ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143028242-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'UA-143028242-1');
        </script>
    </body>

</html>