<?php
//WordPressの関数の定義付けをするためのテンプレートです。機能を追加したりルールを決める場合は、functions.phpに記述します。
//add_theme_support( 'title-tag' );
//add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
//add_theme_support( 'automatic-feed-links' );
//add_theme_support( 'post-thumbnails' );

//titleタグ 今回はheaderで出力する
//add_theme_support('title-tag');
//html5
add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));
//feedのリンク自動
add_theme_support('automatic-feed-links');
//アイキャッチ
add_theme_support('post-thumbnails');


//カスタムメニュー 管理画面でメニューを設定できるようになる header.phpのwp_nav_menu(array())でつかうので
//値が同じでないといけない。カテゴリを出力できるようになる。
register_nav_menu('header-nav','ヘッダーナビゲーション_new');
register_nav_menu('footer-nav','フッターナビゲーション_new');

//JQを使用するための記述
//関数定義
// function nav(){
//   //navbutton.jsを読み込む
//   //wp_enqueue_scriptはスクリプトファイルを重複させないようにしたり順番を指定したりするための関数
// wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/navbutton.js', array('jquery'),'3.0.0','false' );
// }
// //定義を使えるように呼出
// add_action( 'wp_enqueue_scripts' , 'nav' );


//function.phpでjsファイルを呼びだす 普通にいつもどおりheaderにかいても当然大丈夫
// function navbutton_scripts(){
//   wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/nav.js', array('jquery'),'3.0');
// }
// add_action( 'wp_enqueue_scripts' , 'navbutton_scripts' );


// // //jqのバージョン変更
// function my_scripts_method() {
//   	wp_deregister_script('jquery');
//   	wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');
// }
// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


//サイドバーにウィジェット追加
function widgetarea_init() {
register_sidebar(array(
    'name'=>'サイドバー設定',
    'id' => 'side-widget',
    'before_widget'=>'<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget'=>'</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'widgetarea_init' );
