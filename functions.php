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
}
add_action('wp_enqueue_scripts', 'gymfitness_enqueue_scripts');
