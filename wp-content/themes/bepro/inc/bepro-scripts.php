<?php
function bepro_styles() {
    wp_enqueue_style( 'bepro-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bepro-bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bepro-ionicons-styles', get_template_directory_uri() . '/css/ionicons.min.css' );
}
add_action( 'wp_enqueue_scripts', 'bepro_styles' );