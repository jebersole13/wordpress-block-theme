<?php 

/**

*/

get_header();
?>
<div id="primary" class=" content-area">
  
<main id="main" class="site-main">


<?php if ( have_posts() ) : 

 while ( have_posts() ) : 
    the_post(); 

    get_template_part('template-parts/post/content');
 endwhile; 

if(comments_open() or get_comments_number()) :
  comments_template(); 

  endif;
  ?>


</main>

<?php get_sidebar(); ?>

</div>

<?php 
get_footer();

endif;