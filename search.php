.<?php get_header(); ?>

<div id="main">
  <div id="content">
    <div class="container">
      <?php  if (isset($_GET['s']) && empty($_GET['s'])) { //空検索時 ?>
      <p class="margin-content-quality">Keyword has not been entered. Please put in a word to search.</p>
      <?php }else{ ?>
      <?php /* Start the Loop */ ?>
      <?php
		global $query_string;
		query_posts($query_string . "&post_type=page") ;
		?>
      <?php if (have_posts('order=DESC')) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <dl class="search_result">
        <dt><a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
          </a></dt>
        <dd><?php echo my_excerpt(60); ?></dd>
      </dl>
      <?php endwhile; ?>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      <?php else: ?>
      <p class="margin-content-quality">Keyword has not been entered. Please put in a word to search.</p>
      <?php endif; ?>
      <?php } ?>
    </div>
  </div>
  <?php get_sidebar();  ?>
</div>
<?php get_footer(); ?>
