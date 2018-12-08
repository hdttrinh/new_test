<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>
<?php if(get_field('ページタイトル')){
		echo the_field('ページタイトル');
	}elseif(is_front_page()){
		echo bloginfo('name');
	}else{
		if(is_404()){
			echo '404 Not Found';
		}
		elseif (is_category()){
			echo '新着ニュース';
			}
		else{
			the_title();
		};
			echo '｜';
			echo bloginfo('name');
		
}?>
</title>
<meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="robots" content="noindex">
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<!--共通css-->

<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/common.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/contact.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--共通js-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/common.js"></script>
<!--個別css-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/home.css" />
</head>
<body>
<div id="all_wrap"> 
  <!--header-->
  <header id="header">
    <div class="header_box">
      <h1 class="header_logo"><a href="<?php echo home_url( '/' ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/common/cm_logo.jpg" alt="豊明老人保健施設"> </a></h1>
      <div class="menu_navi">
        <ul class="header_menu">
          <li> <a class="active" href="<?php echo home_url( '/' ); ?>">ホーム</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">施設紹介</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">サービス紹介</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">取り組み</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">新着情報</a></li>
        </ul>
      </div>
      <!--Button-->
      <p class="nav_btn_header"><a href="<?php echo home_url( '/' ); ?>contact">お問い合わせ</a></p>
    </div>
  </header>
  <!--header--> 