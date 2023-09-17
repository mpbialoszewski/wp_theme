<?php

//Adds dynamic tag support
function theme_support(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'theme_support' );

//In case the styles from other plugins will be overriding 
function sevenliving_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('sevenliving-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('sevenliving-fontawesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css", array(), '1.0','all');
    wp_enqueue_style('sevenliving-montserrat',"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono&display=swap",array(), '1.0','all' );
}
add_action('wp_enqueue_scripts','sevenliving_register_styles');

function sevenliving_register_scripts(){
    wp_enqueue_script('sevenliving-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js", array(), '3.3.7','all',true);
    wp_enqueue_script('sevenliving-popper',"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js", array(), '2.11.6', "all", true);
    // wp_enqueue_script('sevenliving-jquery', get_template_directory_uri( )."./assets/js/main.js", array(), '1.0',true);
}
add_action( 'wp_enqueue_scripts','sevenliving_register_scripts' );


?>
