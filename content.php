<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<hr class="wp-block-separator is-style-wide">
		<?php if ('post' == get_post_type()) { ?> 
			<div class="entry-summary">
				<?php the_excerpt(); ?> 
				<div class="clearfix"></div>
			</div><!-- .entry-summary -->
		<?php } //endif; ?> 
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?> 
		<div class="clearfix"></div></div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->&nbsp;