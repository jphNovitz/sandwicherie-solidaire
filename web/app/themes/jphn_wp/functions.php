<?php

/**
 * SCRIPTS
 */

function add_theme_scripts()
{
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.min.css' );
    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/app.min.js' , null , null , true );

}
add_action('wp_enqueue_scripts', 'add_theme_scripts');