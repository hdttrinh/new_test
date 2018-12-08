<?php
/**
 * The Template for displaying all single posts.
 */
 ?>
<?php get_header();  ?>

<div id="main">
  <div id="content">
    <p class="sing_time">
      <?php the_time('Y.m.d') ?>
    </p>
    <?php
			$cat = get_the_category(); 
			$cat = $cat[0]; 
			$cat_id = $cat->cat_ID;
			$post_id = 'category_'.$cat_id;
		?>
    
    <!--cat_color : custom field name of category--> 
    <span style="background:<?php the_field('cat_color',$post_id); ?>" class="cat">
    <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
    </span>
    <p class="sing_ttl">
      <?php the_title(); ?>
    </p>
    <div class="container">
      <?php the_post(); ?>
      <?php the_content(); ?>
    </div>
    <p><span class="f-le">
      <?php previous_post_link('%link','&lt; PREV'); ?>
      </span> <span class="f-right">
      <?php next_post_link('%link','NEXT &gt;'); ?>
      </span></p>
  </div>
  <?php get_sidebar();  ?>
</div>
<?php get_footer();  ?>
