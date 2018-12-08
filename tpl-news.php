<?php
/*
 Template Name: お知らせ
 */		
?>
<?php get_header();  ?>

<div id="main">
  <div id="content">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
	      $args = array( 'post_type' => 'post','posts_per_page' => 10 ,'paged' => $paged );
	      $wp_query = new WP_Query($args);
	      while ( have_posts() ) : the_post(); ?>
    <?php
			$cat = get_the_category(); 
			$cat = $cat[0]; 
			$cat_id = $cat->cat_ID;
			$post_id = 'category_'.$cat_id;
		?>
    <?php the_time('Y.m.d') ?>
    <!--cat_color : custom field name of category--> 
    
    <span style="background:<?php the_field('cat_color',$post_id); ?>" class="cat">
    <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
    </span> <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a>
    <?php  endwhile; ?>
    <?php wp_pagenavi(); wp_reset_query(); ?>
    
    <!--get content from  parts-partname.php-->
    <?php get_template_part( 'parts', 'partname' );?>
  </div>
  <?php get_sidebar();  ?>
</div>
<?php  get_footer();  ?>
