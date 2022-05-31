<?php
/**
 * The theme footer
 * 
 * @package pure-spirit
 */
?>
        <footer id="site-footer" class="site-footer" role="contentinfo">
            <span id="footer-copyright">&copy; Translation Commons 2016-<?php echo date("Y"); ?></span>
            <?php if ( has_nav_menu( 'footer' ) ) : ?>
            <nav id="footer-navbar" class="navbar navbar-default site-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
            </nav>
            <?php endif; ?>            
        </footer>
        <!--wordpress footer-->
        <?php wp_footer(); ?>
    </body>
</html>