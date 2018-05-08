<?php
/**
 * The template for displaying the header
 *
 *
 *
 * @package WordPress
 * @subpackage BePro
 * @since BePro 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="container-small">
        <div class="header_logo">
            <a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>
        </div>
        <div class="header_menu-outer"></div>
        <?php
            wp_nav_menu( array(
                'theme_location'  => 'menu-header',
                'menu'            => '',
                'menu_id'         => '',
                'container'       => 'nav',
                'container_class' => 'header_menu',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'echo'            => true,
            ) );
        ?>
        <div class="header_boorger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header_buttons">
            <div class="header_buttons-left">
                <a href="<?php echo wp_login_url();?>">Log in</a>
                <a href="<?php echo wp_registration_url();?>">Sign Up</a>
            </div>
            <div class="header_buttons-right">
                <a href="#"><i class="ion-bag"><span>2</span></i></a>
                <a href="#"><i class="ion-ios-search"></i></a>
            </div>
        </div>
    </div>
</header>
<?php
/*
 * Load Banner Home Page
 */
    if( is_front_page() )
       get_template_part( 'template-parts/content', 'slider-header-home' );
?>