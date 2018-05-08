<?php
function bepro_styles() {
    wp_enqueue_style( 'bepro-ionicons-styles', get_template_directory_uri() . '/css/ionicons.min.css' );
    wp_enqueue_style( 'bepro-bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bepro-fontawesome-styles', get_template_directory_uri() . '/css/fontawesome-all.min.css' );
    wp_enqueue_style( 'bepro-owl-carousel-styles', get_template_directory_uri() . '/css/owl.carousel.min.css' );
    wp_enqueue_style( 'bepro-owl-theme-styles', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
    wp_enqueue_style( 'bepro-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'bepro_styles' );

function bepro_scripts() {
    wp_enqueue_script( 'bepro-jquery-scripts', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20180213', true );
    wp_enqueue_script( 'bepro-owl-carousel-scripts', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20180213', true );
    wp_enqueue_script( 'bepro-custom-scripts', get_template_directory_uri() . '/js/custom.js', array(), '20180213', true );
}
add_action( 'wp_enqueue_scripts', 'bepro_scripts' );