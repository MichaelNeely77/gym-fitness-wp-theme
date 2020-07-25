<?php

// creates the Menus
function gymfitness_menus() {
    // WordPress Function
    register_nav_menus( array( 
        'main-menu' => 'Main Menu'

    ) );

    
}

add_action('init', 'gymfitness_menus');