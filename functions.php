<?php

add_theme_support( 'post-thumbnails' );

function my_login_logo() { ?>

    <style type="text/css">

        #login h1 a, .login h1 a {
            
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            height:320px;
            width:320px;
            background-size: 320px 320px;
            background-repeat: no-repeat;
        	padding-bottom: 30px;
        }

    </style>

<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function themename_custom_logo_setup() {

    $defaults = array(
        // 'height'      => 100,
        // 'width'       => 400,
        'flex-height' => false,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );

    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

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