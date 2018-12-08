<?php
//アイキャッチ画像使用
add_theme_support('post-thumbnails');
//add_image_size( 'demo_thumb', 150, 100, true ); 


//編集画面スタイル
add_editor_style('editor-style.css');
//コメント化
remove_filter( 'the_content', 'wptexturize' );

/*クリーンアップ機能削除*/
add_filter('tiny_mce_before_init', 'tinymce_init');
function tinymce_init( $init ) {
	$init['verify_html'] = false;
	return $init;
}
//更新通知消す
function admin_css() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo("template_directory").'/css/admin.css">';
    //↑cssファイルを置いた場所までのパスへ変更
}
add_action('admin_head', 'admin_css');

//不要なもの削除
remove_action('wp_head', 'rsd_link');                         /* Really Simple Discoveryリンクの削除 */
remove_action('wp_head', 'wlwmanifest_link');                 /* Windows Live Writerの削除 */
remove_action('wp_head', 'wp_generator');                     /* WPのバージョン削除 */
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link' );                  /* linkタグの削除 */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');  /* link rel='next…'関連の削除 */
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );     /* link rel='next…'関連の削除 */
remove_action('wp_head', 'start_post_rel_link', 10, 0 );      /* link rel='next…'関連の削除 */
remove_action('wp_head', 'wp_shortlink_wp_head');             /* ショートリンクの削除 */
remove_action('wp_head', 'feed_links_extra',3);               /* コメントフィードの削除 */
function remove_cssjs_ver( $src ) {
    if( !is_user_logged_in() && strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

?>