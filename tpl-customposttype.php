<?php
/**
 * The template name: CTP name
 *
 */
?>
<?php get_header();  ?>

<div id="main">
  <div id="content">
    <?php the_post(); ?>
    <?php the_content(); ?>
    
    <!--custompost: custom post name-->
    <ul>
      <?php
			$args = array( 'post_type' => array('custompost'), 'posts_per_page' => -1, 'order' => 'DESC' );
			$wp_query = new WP_Query($args);
			while ( have_posts() ) : the_post(); 
			?>
      <li>
        <p class="hm_cus_img "><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></p>
        <p class="hm_cus_ttl">
          <?php the_title(); ?>
        </p>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php  wp_reset_query();  ?>
  </div>
  <?php get_sidebar();  ?>
</div>
<?php get_footer();  ?>
