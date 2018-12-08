<?php
/**
 * The template name: custompostype name
 *
 */
?>
<?php get_header();  ?>
<div id="main">

   <?php the_post(); ?>
   <?php the_content(); ?>
   
        <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <ul>
          <?php $post_count = 0; ?>
          <?php while ( have_posts() ) : the_post(); ?>
            
          
      <li>
        <p class="cus_img "><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></p>
        <p class="cus_time "><?php the_time('Y.m.d') ?></p>
        <p class="cus_ttl"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
      </li>
          <?php $post_count ++; endwhile; ?>

        <?php /* End the Loop */ ?>
            </ul>

        <?php wp_pagenavi(); wp_reset_query();  ?>
        <?php else : ?>
        <?php echo 'Apologies, but no results were found for the requested archive' ;?>
        <?php endif; ?>
        

        
        
        
        
        
        
        
        
     
</div>     
<?php get_footer();  ?>
