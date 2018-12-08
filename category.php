<?php get_header();  ?>

<div id="main">
  <div id="content"> 
    <?php /*?>if you wanna redirect to the parent of whatnews<?php */?>
    <?php /*?><?php $category = get_the_category(); 
	  $news_category_id = $category[0]->term_id;
	  
	switch ($news_category_id) {
		case 1:
		case 2:
		case 3:
			$news_category_id  = home_url( '/' ). "xxx" ; //  xxx : return back to parent page
			header("Location:".$news_category_id);
			break;
	}
	?>
	<?php */?>
    <?php $cur_cat_id = get_cat_id( single_cat_title("",false) ); 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
            $args = array( 'post_type' => 'post', 'posts_per_page' => -1 , 'paged' => $paged,  'cat' => $cur_cat_id);
            $wp_query = new WP_Query($args);
            while ( have_posts() ) : the_post(); ?>
    <?php /* Start the Loop */ ?>
    <p class="cat_time">
      <?php the_time('Y.m.d') ?>
    </p>
    <?php $cat = get_the_category(); 
		   $cat = $cat[0]; ?>
    <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
    <p class="cat_ttl"><a href="<?php the_permalink() ?>">
      <?php the_title() ?>
      </a></p>
    <?php $post_count++; endwhile; ?>
    <?php /* End the Loop */ ?>
    <?php wp_pagenavi(); wp_reset_query();  ?>
    
    <!--get content from  parts-partname.php-->
    <?php get_template_part( 'parts', 'partname' );?>
  </div>
  
  <?php get_sidebar();  ?>
</div>
<?php  get_footer();  ?>
