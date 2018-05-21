<?php
$args= array(
    'post_type' => 'product',
    'posts_per_page' => 4
);
$query = new WP_Query( $args );
if( $query->have_posts() ){ ?>
    <div class="home-products">
        <div class="container">
            <div id="homeProductsRow" class="row">
                <?php while( $query->have_posts() ){ $query->the_post();?>
                    <?php global $product; ?>
                    <div class="col-md-6 col-lg-3">
                        <a href="<?php echo get_the_permalink(); ?>" class="home-products_item">
                            <?php if( $product->is_on_sale() ) : ?>
                                <span class="onsale">sale</span>
                            <?php endif; ?>
                            <?php the_post_thumbnail([954, 298]) ?>
                            <?php the_title('<h4>','</h4>'); ?>
                            <?php woocommerce_template_single_price(); ?>
                        </a>
                    </div>
                <?php }
                wp_reset_postdata(); ?>
            </div>
            <div id="homeProductsAdd" class="home-products_add-row"><i class="fas fa-sync-alt"></i> load more</div>
        </div>
    </div>
    <?php
}
?>
