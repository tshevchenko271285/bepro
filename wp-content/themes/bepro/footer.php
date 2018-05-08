<footer class="footer">
    <div class="container-small">
        <div class="footer_outer">
            <div class="footer_left">
                <h2 class="footer_logo"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h2>
                <?php dynamic_sidebar('sidebar-footer-left');?>
            </div>
            <div class="footer_center">
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'menu-footer',
                        'menu'            => '',
                        'menu_id'         => '',
                        'container'       => false,
                        'menu_class'      => 'footer_menu'
                    ) );
                ?>
                <div class="footer_form">
                    <?php echo do_shortcode('[mc4wp_form id="26"]');?>
                </div>
            </div>
            <div class="footer_right">
                <?php if( is_active_sidebar('sidebar-footer-right') ) : ?>
                    <?php dynamic_sidebar('sidebar-footer-right');?>
                <?php endif;?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
