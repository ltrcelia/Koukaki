<?php
// add_action('wp_enqueue_scripts', 'enqueue_jquery');
// function enqueue_jquery() {
//     wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
// }

function bbx_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );
    }
add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_assets');
function enqueue_child_theme_assets() {
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('child-style', get_template_directory_uri() . '/style.css', array(), '1.0');
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