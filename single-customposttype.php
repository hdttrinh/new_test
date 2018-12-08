<?php
/**
 * The Template for custom post type singular CTP
 */
 ?>
<?php get_header();  ?>
<?php 	$term =	$wp_query->queried_object;
		$termID = $term->term_id;
		$termName = $term->name;
		$termParent = $term->parent;
 ?>

<div id="main">
  <div id="content">
    <p class="sing_ttl">
      <?php the_title(); ?>
    </p>
    <p class="sing_thumb"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></p>
    <div class="container">
      <?php the_post(); ?>
      <?php the_content(); ?>
    </div>
    <table>
      <tbody>
        <!--ACF: custom field name-->
        <?php if ( get_field('ACF')) { ?>
        <tr>
          <th scope="row">テスト</th>
          <td><?php the_field('ACF'); ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <p class="sing_contrls"><span class="f-left">
      <?php previous_post_link('%link','&lt; PREV'); ?>
      </span> <span class="f-right">
      <?php next_post_link('%link','NEXT &gt;'); ?>
      </span> </p>
  </div>
  <?php get_sidebar();  ?>
</div>
<?php get_footer();  ?>
