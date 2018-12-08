<?php
/**
 * The Template for CTP tax
 */
 ?>

<?php 
		$term =	$wp_query->queried_object;
		$termID = $term->term_id;
		$termName = $term->name;
		$termParent = $term->parent;
		if($termParent > 0){ $termListID = $termParent; }else{$termListID = $termID; }
?>
<?php get_header();  ?>

<div id="main">
  <div id="content">
    <p id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></p>
    <?php if (have_posts()) : ?>
    <?php $post_count = 1; 
             $args_sub = array('order' => 'DESC',); ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php if(has_post_thumbnail()){ ?>
    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); }?> <a href="<?php the_permalink();  ?>" >
    <?php the_title();?>
    </a>
    <div class="container">
      <?php the_content(); ?>
    </div>
    <?php endwhile;  endif;?>
  </div>
  <?php get_sidebar();  ?>
</div>
<?php get_footer();  ?>
