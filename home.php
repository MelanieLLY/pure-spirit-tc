<?php
/**
 * The blog template file
 * 
 * @package pure-spirit
 */

get_header();

?>
<div class="page-container">
  <div id="content" class="row site-content">
    <div class="content-area" id="main-column">
			<main id="main" class="site-main" role="main">
				<div class="row">
					<?php if (have_posts()) { ?>
					<h1 class="entry-title">Blog</h1>
					<div class="entry-content">
						<hr class="wp-block-separator is-style-wide" />
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							$id = 'post-' . get_the_ID();

							echo '<article id="' . $id . '" class="col-md-6">';
								echo '<a href="' . get_the_permalink() . '">' . get_the_post_thumbnail() . '</a>';
								echo '<br>';
								echo '<br>';
								echo '<a href="' . get_the_permalink() . '"><h2>' . get_the_title() . '</a></h2>';
								echo '<hr class="wp-block-separator has-text-color has-background is-style-dots" />';
								echo '<small>' . get_the_date() . '</small><br><br>';
								the_excerpt();
								echo '<a href="' . get_the_permalink() . '">Read More &gt;</a>';
							echo "</article><!-- #" . $id . " -->";
						}// end while
						?>
					</div><!-- .entry-content -->
					<?php } else { ?>
						no results
					<?php } // endif; ?>
				</div><!-- .row -->
			</main>
		</div><!-- .site-content -->&nbsp;
	</div><!-- .site-content -->
</div><!-- .site-content -->
<?php get_footer(); ?> 