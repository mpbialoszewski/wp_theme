<?php
//In case the styles from other plugins will be overriding 


function sevenliving_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('sevenliving-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('sevenliving-fontawesome', "https://kit.fontawesome.com/9986cbacd6.js", array(), '1.0','all');
}
add_action('wp_enqueue_scripts','sevenliving_register_styles');

function sevenliving_register_script(){
    wp_enqueue_script('sevenliving-email', 'https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js'. array(), '1.0','all');
}
add_action('wp_enqueue_scripts','sevenliving_register_styles');


?>