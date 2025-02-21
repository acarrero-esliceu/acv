<?php


function acv_add_theme_scripts(){
    wp_enqueue_style ( 'style', get_stylesheet_uri() );
    wp_enqueue_style ( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script ( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
}


add_action('wp_enqueue_scripts', 'acv_add_theme_scripts');


function acv_register_my_menu(){
    register_nav_menu('primary', __('menu de la capçelera'));
}

add_action('init', 'acv_register_my_menu');

