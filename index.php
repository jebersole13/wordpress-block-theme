<?php
/**
 * The main template file.
 */
get_header();


if (<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>)
get_footer();