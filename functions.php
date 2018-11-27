<?php

//内部読み込み
function css_scripts($in_footer)
{
    // wp_enqueue_script( 名前, ソース, array("依存するもの-名前を入力"), バージョン（不要）, true=head false=foot );
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', '/wp-content/themes/owntheme/js/index.js', array('jquery'), true);
    wp_enqueue_style('fontawasome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', true);
    wp_enqueue_style('font-faimly', 'https://fonts.googleapis.com/css?family=Bangers|Roboto', true);
    wp_enqueue_style('base-style', '/wp-content/themes/owntheme/style.css', true);
}
add_action('wp_enqueue_scripts', 'css_scripts');

//サイドバーにウィジェット追加
function widgetarea_init()
{
    register_sidebar(array(
    'name' => 'sidebar',
    'id' => 'side-widget',
    'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'widgetarea_init');

add_theme_support('title-tag');

add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

add_theme_support('automatic-feed-links');

add_theme_support('post-thumbnails');
add_image_size('original_thumbnail', 345, 200, true);

add_theme_support('custom-header');

register_nav_menu('header-nav', ' Header Navigation ');
register_nav_menu('footer-nav', ' Footer N  avigation ');
