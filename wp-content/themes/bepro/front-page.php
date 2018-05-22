<?php get_header(); ?>

<div class="container">
    <?php echo do_shortcode('[featured_products per_page="4" columns="4" class="bepro-featured"]'); ?>
</div>

<?php get_template_part( 'template-parts/content', 'new-products' ); ?>

<?php get_template_part( 'template-parts/content', 'home-products' ); ?>

<?php get_template_part( 'template-parts/content', 'events' ); ?>

<?php get_footer(); ?>