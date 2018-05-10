<?php get_header(); ?>

<div class="container">
    <?php echo do_shortcode('[featured_products per_page="4" columns="4" class="bepro-featured"]'); ?>
</div>

<?php get_template_part( 'template-parts/content', 'new-products' ); ?>

<div style="height: 200px;background:#ccc;"></div>

<?php get_footer(); ?>