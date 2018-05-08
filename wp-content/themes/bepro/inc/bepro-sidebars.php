<?php

/*
 * Register Sidebar For Lfet Column In Footer
 */
add_action( 'widgets_init', 'register_widget_footer_right' );
function register_widget_footer_left(){
    register_sidebar( array(
        'name'          => __('Sidebar Footer Right'),
        'id'            => "sidebar-footer-right",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div>',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h6>',
        'after_title'   => "</h6>\n",
    ) );
}

/*
 * Register Sidebar For Right Column In Footer
 */
add_action( 'widgets_init', 'register_widget_footer_left' );
function register_widget_footer_right(){
    register_sidebar( array(
        'name'          => __('Sidebar Footer Left'),
        'id'            => "sidebar-footer-left",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div>',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h6>',
        'after_title'   => "</h6>\n",
    ) );
}

