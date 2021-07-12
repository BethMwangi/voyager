<?php
function mambo_theme_support() {
    add_theme_support('title-tag');
//    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mambo_theme_support');

function mambo_menus(){
    $locations = array(
        'primary' => "Left Bar menu",
        'secondary' => "Top Bar menu",
        'footer' => 'Footer menu items',
        'right' => 'Right bar menus'
    );
    register_nav_menus($locations);
}
add_action('init', 'mambo_menus');

function mambo_register_styles()
{
    wp_enqueue_style(
        'mambo-style',
        get_template_directory_uri() . "/style.css",
        array('mambo-bootrstrap'),
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'mambo-bootrstrap',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        array(),
        '1.0',
        'all'
    );
    wp_enqueue_script(
        'bootstrap-js',
        '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'mambo-jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '3.5.1',
        true
    );
}
add_action('wp_enqueue_scripts', 'mambo_register_styles');

