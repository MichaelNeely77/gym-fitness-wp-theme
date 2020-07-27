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
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array('normalize', 'googlefonts'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_enqueue_scripts');
