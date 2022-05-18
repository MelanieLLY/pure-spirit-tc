<?php
/**
 * Template for displaying pages
 * 
 */

get_header();
	while (have_posts()) {
  	the_post();
    $counter = 0;
  }
?>
<div class="page-container">
  <?php do_action('before'); ?>
  <div id="content" class="row site-content">
    <div class="col-md-12 content-area" id="main-column" role="main">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </main>
  </div><!--.site-content-->
</div><!--.container page-container-->
<?php get_footer(); ?> 