<?php
/**
*template part to display page content in page.php. 


*/
?>

<article id="post-<?php the_ID();?>"?>

<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
<?php 
/** 
*Page Thumbnail
*/
if(has_post_thumbnail()):
  the_post_thumbnail('full');

  endif;
?>

<div class="entry">

<?php 
the_content();

  wp_link_pages(
    array(
      'before' => '<div class="page-links">' . esc_html_('Pages:', 'ninestars'), 
        'after' =>'</div>'
    )
  );
?>
</div>
</article>