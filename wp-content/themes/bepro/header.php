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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <a href="<?php bloginfo('url');?>" class="header_logo"><?php bloginfo('name');?></a>
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
    <div class="header_account">
        <a href="#">Log in</a>
        <a href="#">Sing Up</a>
    </div>
    <div class="header_buttons">
        <a href="#">Cart</a>
        <a href="#">Search</a>
    </div>
</header>