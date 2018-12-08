<?php
/**
 * The template for displaying all pages.
 *
 */
?>
<?php get_header();  ?>
<div id="main">
  <?php the_post(); ?>
  <?php the_content(); ?>
</div>
<?php get_footer();  ?>