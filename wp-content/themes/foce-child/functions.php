<?php
// installation de Swiper JS
add_action('wp_enqueue_scripts', 'enqueue_swiper_script');
function enqueue_child_swiper_script() {
    // Enregistrement du script Swiper.js
    wp_register_script('swiper', get_template_directory_uri() . 'script.js', array(), '6.5.3', true); // Assurez-vous de vérifier la version
    // Chargement du script Swiper.js
    wp_enqueue_script('swiper');
}


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