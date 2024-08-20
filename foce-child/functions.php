<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// CSS child theme
add_action( 'wp_enqueue_style', 'oscar_child_theme' );
function oscar_child_theme() {
    wp_enqueue_style( 'oscar_child_theme', get_stylesheet_directory_uri() . '/style.css' );
}

// Utiliser un nouveau script
add_action('wp_enqueue_scripts', 'script1');
function script1() {
    wp_enqueue_script('script1', get_stylesheet_directory_uri() . '/js/fade-in-upwards.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'script2');
function script2() {
    wp_enqueue_script('script2', get_stylesheet_directory_uri() . '/js/sliderjs.js', array(), false, true);
}