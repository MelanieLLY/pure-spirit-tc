<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package pure-spirit
 */

get_header();

?> 
<div class="page-container">
  <div id="content" class="row site-content">
    <div class="content-area" id="main-column">
      <main id="main" class="site-main" role="main">
        <?php 
        while (have_posts()) {
          the_post();
          get_template_part('content', get_post_format());
          echo "\n\n";
          
          // If comments are open or we have at least one comment, load up the comment template
          if (comments_open() || '0' != get_comments_number()) {
            comments_template();
          }

          echo "\n\n";
        } //endwhile;
        ?> 
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?> 