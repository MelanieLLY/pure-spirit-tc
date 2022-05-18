<?php
/**
 * Template for displaying pages
 */

get_header();

/**
  About Us Page Template
 */
?>
<div id="about-us" class="container page-container">
  <?php do_action('before'); ?> 
  <div id="content" class="row site-content">
    <div id="main-column" class="col-md-12 content-area">
      <main id="main" class="site-main" role="main">
        <?php 
        while (have_posts()) {
          the_post();

          get_template_part('content', 'page');

          echo "\n\n";

        } //endwhile;
        ?>
      </main>
    </div><!-- #main-column -->
  </div><!--.site-content-->
</div><!--.container page-container-->
<?php get_footer(); ?>