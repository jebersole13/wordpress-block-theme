<?php
/**
 * The main template file.
 */
get_header();


if ( have_posts() ) : 

 while ( have_posts() ) : 
  
  the_post(); 

    the_content(); 

   endwhile; 

endif; ?>
 wp_reset_postdata();
get_footer();