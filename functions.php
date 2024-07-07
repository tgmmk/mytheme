<?php

// -----------------------------------*\
// 不要なもの削除
// https://naokeyzmt.com/blog/wp-themes-head-control/
// -----------------------------------*/

  /* DNSプリフェッチ設定の削除 */
  add_filter( 'emoji_svg_url', '__return_false' );
 
  /* 絵文字削除 */
  remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles',     'print_emoji_styles' );
  remove_action( 'admin_print_styles',  'print_emoji_styles' );
 
//   /* WP5.x.xのブロックエディタ用スタイルの排除 */
//   wp_deregister_style( 'wp-block-library' );
//   wp_deregister_style( 'wp-block-library-theme' );なぜかエラーになったので削除（記述順の問題っぽい）
 
  /* wp-json削除 */
  remove_action('wp_head','rest_output_link_wp_head');
  remove_action('wp_head','wp_oembed_add_discovery_links');
 
  /* 外部投稿ツール設定削除 */
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'rsd_link' );
 
  /* WPのバージョン削除 */
  remove_action('wp_head', 'wp_generator');


// -----------------------------------*\
// 必要そうな機能追加
// https://8millions.net/wordpress248
// -----------------------------------*/
  function my_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    // 余白設定の項目追加
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'responsive-embeds' );
    // wp_enqueue_style( 'tempcss-style', get_stylesheet_uri() );
    // 管理画面に外観/メニューの項目を追加
    register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
    register_nav_menus( array(
      // 例 'メニューの位置を示す固有名称' => 'このメニューの位置の説明'
      'global-nav' => 'ヘッダーなどに使用',
      'footer-nav' => 'フッター用',
      'drawer-nav' => 'ハンバーガーメニュー'
      ) );
  }
  
  add_action( 'after_setup_theme', 'my_setup' );









// // 管理画面/メニューを有効化
// add_action( 'after_setup_theme', 'register_menu' );
// function register_menu() {
//   register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
// }

// add_action( 'after_setup_theme', function(){
//     register_nav_menus( array(
//     // 例 'メニューの位置を示す固有名称' => 'このメニューの位置の説明'
//     'global-nav' => 'ヘッダーなどに使用',
//     'footer-nav' => 'フッター用',
//     'drawer-nav' => 'ハンバーガーメニュー'
//     ) );
// } );

// -------------------------------------------------------------------------------------*\
// 「外観＞ウィジェット」を表示させるコード
// https://creblo.com/web/wordpress-widget/
// サイドバーをウィジェットとして使う際は、こちらをコピペでもOKです！
// もし独自でカスタマイズしたい場合は、名前、概要、ID、タグを適宜変更してください〜。
// また、sample_widgets()の箇所も新たに定義している関数になるので、任意の名称に変えてOKです！
// -------------------------------------------------------------------------------------*/
function sample_widgets(){
 register_sidebar(array(
 'name' => '共通サイドバー',/* ←追加したいウィジェットの名前 */
 'description' => 'サイドバーウィジェット',/* ←追加したいウィジェットの概要 */
 'id' => 'sidebar',/* ←追加したいウィジェットのID */
 'before_widget' => '<div>',/* ←追加したいウィジェットを囲う開始タグ */
 'after_widget' => '</div>',/* ←追加したいウィジェットを囲う閉じタグ */
 'before_title' => '<h3>',/* ←追加したいウィジェットのタイトルを囲う開始タグ */
 'after_title' => '</h3>'/* ←追加したいウィジェットのタイトルを囲う閉じタグ */
 ));
}
add_action('widgets_init', 'sample_widgets');
