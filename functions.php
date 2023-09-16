<?php
//In case the styles from other plugins will be overriding 
function sevenliving_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('sevenliving-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('sevenliving-fontawesome', "https://kit.fontawesome.com/9986cbacd6.js", array(), '1.0','all');
}
add_action('wp_enqueue_scripts','sevenliving_register_styles');

function sevenliving_register_scripts(){
    wp_enqueue_script('sevenliving-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js", array(), '3.3.7','all',true);
}
add_action('wp_enqueue_scripts','sevenliving_register_scripts');


?>