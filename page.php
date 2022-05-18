<?php
/**
 * Template for displaying pages
 * 
 */

get_header();?> 
<div class="container page-container">
	<?php do_action('before'); ?> 
	<div id="content" class="row site-content">
		<?php get_sidebar('left'); ?> 
		<div class="col-md-12 content-area" id="main-column">
			<main id="main" class="site-main" role="main">
				<div class="page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
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