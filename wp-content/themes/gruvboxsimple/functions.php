<?php

function gruvbox_simple_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Header menu');
    register_nav_menu('footer', 'Footer menu');
}

add_action('after_setup_theme', 'gruvbox_simple_theme_supports');


// Ajouter la css
function gruvbox_simple_register_styles()
{

    wp_enqueue_style('gruvbox-simple-search-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));

    // RTL styles.
    wp_style_add_data('gruvbox-simple-style', 'rtl', 'replace');
}
add_action('wp_enqueue_scripts', 'gruvbox_simple_register_styles');
wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/themeToggle.js', array(), true );