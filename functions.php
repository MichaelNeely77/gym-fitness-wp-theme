<?php

// creates the Menus
function gymfitness_menus() {
    // WordPress Function
    register_nav_menus( array( 
        'main-menu' => 'Main Menu'

    ) );

    
}

add_action('init', 'gymfitness_menus');

// Adds stylesheets and JS files
function gymfitness_enqueue_scripts() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.01' );
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,400;0,900;1,700&family=Staatliches&display=swap', array(), '1.0.0');
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . './css/slicknav.min.css', array(), '1.0.10');
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array('normalize', 'googlefonts'), '1.0.0');
    WP_enqueue_script('jquery');
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . './js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_enqueue_scripts');

function gymfitness_setup() {
    // Register image sizes
    add_image_size('square', 350, 350, true);
    add_image_size( 'portrait', 350, 724, true );
    add_image_size( 'box', 400, 375, true );
    add_image_size( 'mediumSize', 700, 400, true );
    add_image_size( 'blog', 966, 644, true );




    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gymfitness_setup');
