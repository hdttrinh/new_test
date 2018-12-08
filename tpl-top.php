<?php
/*
 Template Name: ホーム
 */		

?>
<?php get_header();  ?>

<!--0000: metaslider ID-->
<!--contents -->

<article id="main">
  <div class="hm_main_visual">
    <div class="hm_img_main_left" > <img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/home_img_left.png" alt="心安らぐ豊かな居住空間と
ゆきとどいたケア
ひとりひとりの療養を大切に。"> </div>
    <div class="hm_img_main_right"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/home_main_img01.jpg" alt="心安らぐ豊かな居住空間と
ゆきとどいたケア
ひとりひとりの療養を大切に。"> </div>
    <div class="hm_mainvisual_bird1"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/hm_bird1.png" alt=""></div>
    <div class="hm_mainvisual_bird2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/hm_bird2.png" alt=""></div>
  </div>
  <div class="hm_introduce clearfix">
    <div class="hm_introduce_right ">
     <?php the_post(); ?>
      <?php the_content(); ?>
    </div>
  </div>
  <div class="hm_content_img">
      <?php $count=1; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
	      $args = array( 'post_type' => 'post01','posts_per_page' => 2 ,'paged' => $paged );
	      $wp_query = new WP_Query($args);
	      while ( have_posts() ) : the_post(); ?>
    <div class= "<?php if(($count%2)==0){echo "hm_content_right"; } else{ echo "hm_content_left";}?>">
      <p class="hm_bigtxt"> <?php echo"0".$count?> </p>
      <h2 class="hm_ttl_bigtxt"><?php the_title(); ?></h2>
      <?php the_content(); ?>

      <p class="hm_btn_formal"><a href="<?php the_permalink(); ?>">詳細をみる</a></p>
    </div>
    <?php $count++;endwhile; ?>
  </div>
  <!--  NEWS-->
  <div class="hm_list_content">
    <h2 class="hm_ttl_headtitle">施設のお知らせ</h2>
    <p class="hm_sttl_headtitle">NEWS</p>
    <ul class="hm_news_left clearfix">
      <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
	      $args = array( 'post_type' => 'post','posts_per_page' => 4 ,'paged' => $paged );
	      $wp_query = new WP_Query($args);
	      while ( have_posts() ) : the_post(); ?>
      <li><a href="<?php echo home_url( '/' ); ?>">
        <p class="hm_img_left"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></p>
        <div class="hm_news_content">
          <p class="hm_date_news">
            <?php the_time('Y.m.d') ?>
          </p>
          <p class="hm_content_news">
            <?php the_title(); ?>
          </p>
        </div>
        </a> </li>
      <?php  endwhile; ?>
    </ul>
  </div>
  <!-- 2SD NEWS-->
  <div class="hm_second_content_cover">
    <div class="hm_cover">
      <div class="hm_second_content1">
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
	      $args = array( 'post_type' => 'healthy_life_efforts','posts_per_page' => 3 ,'paged' => $paged );
	      $wp_query = new WP_Query($args);
	      while ( have_posts() ) : the_post(); ?>
        <div class="hm_news_one">
          <p class="hm_newone_img"> <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></p>
          <h3 class="hm_ttl_1st">
            <?php the_title(); ?>
          </h3>
          <div class="hm_sttl_1st">
            <?php the_content(); ?>
          </div>
          <p class="hm_btn_formal"><a href="<?php the_permalink(); ?>">詳細をみる</a></p>
        </div>
        <?php  endwhile; ?>
      </div>
      <!--left-->
      <div class="hm_second_content2"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/home_news_left.png" alt="健やかな生活の取り組み"> </div>
    </div>
  </div>
  <!-- ADDRESS-->
  <div class="hm_address_content">
    <h2 class="hm_ttl_headtitle">交通アクセス</h2>
    <p class="hm_sttl_headtitle">ACCESS</p>
      <?php the_field('access', 108); ?>
  </div>
</article>
<?php get_footer();  ?>
