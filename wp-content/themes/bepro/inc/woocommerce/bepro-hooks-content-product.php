<?php
if ( ! function_exists( 'woocommerce_template_loop_product_featured_hover' ) ) {
    /**
    * Insert the hover on featured products.
    */
    function woocommerce_template_loop_product_featured_hover() {

        global $product;

        if( $product->is_featured() ) { ?>

            <a href="<?php the_permalink() ?>" class="popular-hover">
                <i class="icon-fire"></i>
                <h4>Popular Product</h4>
                <span>More Product <i class="ion-arrow-right-c"></i></span>
            </a>
        <?php }
    }
    add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_featured_hover', 10 );
}

/*
 * Added USD After Price
 */
add_filter('woocommerce_price_format', 'bepro_usd_after_price');
function bepro_usd_after_price($price) {
    return $price .= ' USD';
}