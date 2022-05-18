<?php
/**
 * Template for displaying pages
 */

get_header();

/**
  Services Page Template
 */
?>
<div id="services" class="container page-container">
  <?php do_action('before'); ?> 
  <div id="content" class="row site-content">
    <div id="main-column" class="col-md-12 content-area">
      <main id="main" class="site-main" role="main">
        <div class="row services_design_images">
          <img src="https://www.localesolutions.com/wp-content/uploads/2019/12/meeting6.jpg" class="col-md-3 hidden-sm hidden-xs">
          <img src="https://www.localesolutions.com/wp-content/uploads/2019/12/smallerfave-e1575527397301.jpg" class="col-md-3 hidden-sm hidden-xs">
          <img src="https://www.localesolutions.com/wp-content/uploads/2019/12/meeting2.jpg" class="col-md-3 col-sm-6 col-xs-12">
          <img src="https://www.localesolutions.com/wp-content/uploads/2019/12/meeting.jpg" class="col-md-3 col-sm-6 hidden-xs">
        </div>
        <?php 
        while (have_posts()) {
          the_post();

          get_template_part('content', 'page');

          echo "\n\n";
          
          // If comments are open or we have at least one comment, load up the comment template
          if (comments_open() || '0' != get_comments_number()) {
            comments_template();
          }

          echo "\n\n";

        } //endwhile;
        ?>
      </main>
    </div><!-- #main-column -->
  </div><!--.site-content-->
</div><!--.container page-container-->
<?php get_footer(); ?>