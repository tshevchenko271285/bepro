<?php
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    register_nav_menus( array(
        'menu-header' => esc_html__( 'Primary', 'bepro' ),
        'menu-footer' => esc_html__( 'Footer', 'bepro' ),
    ) );