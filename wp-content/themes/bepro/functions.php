<?php

/**
 * Required styles end scripts
 */
if (is_file( get_template_directory() . '/inc/bepro-scripts.php') )
    require get_template_directory() . '/inc/bepro-scripts.php';

/**
 * Required Theme Support
 */
if (is_file( get_template_directory() . '/inc/bepro-theme-support.php') )
    require get_template_directory() . '/inc/bepro-theme-support.php';

/**
 * Required Sidebar Register
 */
if (is_file( get_template_directory() . '/inc/bepro-sidebars.php') )
    require get_template_directory() . '/inc/bepro-sidebars.php';

/**
 * Required Custom Widgets
 */
if (is_file( get_template_directory() . '/inc/widgets/bepro-widgets.php') )
    require get_template_directory() . '/inc/widgets/bepro-widgets.php';
