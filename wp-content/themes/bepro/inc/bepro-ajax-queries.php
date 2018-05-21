<?php
add_action('wp_ajax_home_products', 'bepro_ajax_queries');
add_action('wp_ajax_nopriv_home_products', 'bepro_ajax_queries');
function bepro_ajax_queries()
{
    $offset = $_POST['offset'] ? $_POST['offset'] : 0;
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'offset' => $offset
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <?php while ($query->have_posts()) {
            $query->the_post(); ?>
            <?php global $product; ?>
            <div class="col-md-6 col-lg-3">
                <a href="<?php echo get_the_permalink(); ?>" class="home-products_item">
                    <?php if ($product->is_on_sale()) : ?>
                        <span class="onsale">sale</span>
                    <?php endif; ?>
                    <?php the_post_thumbnail([954, 298]) ?>
                    <?php the_title('<h4>', '</h4>'); ?>
                    <?php woocommerce_template_single_price(); ?>
                </a>
            </div>
        <?php }
        wp_reset_postdata();
    }
    wp_die();
}