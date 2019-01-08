<?php

add_theme_support( 'post-thumbnails' );

function multipro_files()
{
    // LOAD CSS
    wp_enqueue_style( 'multipro_main_styles', get_stylesheet_uri() );

    // FONT AWESOME
    wp_enqueue_style( 'font_awesome','//use.fontawesome.com/releases/v5.6.3/css/all.css' );

    // ROBOTO FONT
    wp_enqueue_style( 'font_roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,400' );

    // LOAD JQUERY
    wp_enqueue_script( 'multipro_jquery_script', get_theme_file_uri( '/js/jquery.js' ), null, '1.12.4', true );

    // LOAD JS
    wp_enqueue_script( 'multipro_main_script', get_theme_file_uri( '/js/script.js' ), null, '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'multipro_files' );

?>