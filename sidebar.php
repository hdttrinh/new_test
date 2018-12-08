<?php
/**
 * The Sidebar
 **/

?>

<section id="sidebar">
  <div  class="sidebar">
    <p class="sidebar_ttl"><a href="<?php echo get_permalink($post-> post_parent); ?>" ><?php echo get_the_title( $post->post_parent ); ?></a></p>
    <?php $title = get_the_title( $post->post_parent );
	if ( $post->post_parent ) {
 				$children = wp_list_pages( array(
 				'title_li' => '',
 				'child_of' => $post->post_parent,
 				'echo' => 0,
				'depth' => 1,
				'sort_column' =>'post_date'
	
 		 ) );
 				
			} else {
 					$children = wp_list_pages( array(
 				'title_li' => '',
 				'child_of' => $post->ID,
 				'echo' => 0,
				'sort_column' =>'post_date'
 		 ) );
 					$title = get_the_title( $post->ID );
		}
			if ( $children ) : ?>
    <ul>
      <?php echo $children; ?>
    </ul>
    <?php endif; ?>
  </div>
</section>
