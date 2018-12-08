<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */
?>
<?php  get_header();  ?>

<div id="main"> 
  <div id="content">
    <p>お探しのページは一時的にアクセスできない状況にあるか、<br />
      移動もしくは削除された可能性があります。</p>
    <p><a href="<?php echo home_url( '/' ); ?>">トップページへ戻る</a></p>
    <!--get content from  parts-partname.php-->
    <?php get_template_part( 'parts', 'partname' );?>
  </div>
  <?php get_sidebar();  ?>
</div>
<?php get_footer();  ?>
