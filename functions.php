<?php 
// 基本的な設定を読み込む
function my_setup() {
    // アイキャッチ画像を使用する
    add_theme_support('post-thumbnails');
    // 自動フィードリンクをサポートする
    add_theme_support('automatic-feed-links');
    // headタグのtitleタグ、descriptionをWordPressの管理画面から変更できるようにする
    add_theme_support('title-tag');
    // HTML5の要素をサポートする
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");


function my_script_init() {
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
    wp_enqueue_style("swiper-cdn-css", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), "11.0.6", "all");
    wp_enqueue_style("wow-css", get_template_directory_uri() . "/css/animate.css", array(), filemtime(get_theme_file_path('css/animate.css')), "all");
    wp_enqueue_style("my-css", get_template_directory_uri() . "/style.css", array(), filemtime(get_theme_file_path('style.css')), "all");
    wp_enqueue_script("swiper-cdn-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), "11.1.1", true);
    wp_enqueue_script("swiper-js", get_template_directory_uri() . "/js/swiper.js", array(), filemtime(get_theme_file_path('js/swiper.js')), true);
    wp_enqueue_script("slider-js", get_template_directory_uri() . "/js/slider.js", array(), filemtime(get_theme_file_path('js/slider.js')), true);
    wp_enqueue_script("wow-js", get_template_directory_uri() . "/js/wow.min.js", array(), filemtime(get_theme_file_path('js/wow.min.js')), true);
    wp_enqueue_script("my-js", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

// メニューを登録する
function my_menu_init() {
    register_nav_menus(
      array(
        'global' => 'ヘッダーメニュー', // グローバルメニュー
        'drawer' => 'ドロワーメニュー', // ドロワーメニュー
        'footer' => 'フッターメニュー', // フッターメニュー
      )
    );
}
add_action('init', 'my_menu_init');
