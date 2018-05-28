<?php
/**
 * Adds a header in the breadcrumb contains the name of the categories
 */
add_filter('woocommerce_breadcrumb_defaults', 'bepro_cart_breadcrumb');
function bepro_cart_breadcrumb($args){
    $categories = get_the_terms( get_post()->ID, 'product_cat' );
    $h3 = '<h3>';
    foreach ($categories as $category) {
       $h3 .=  $category->name . ' ';
    }
    $h3 .= '</h3>';
    $args['wrap_before'] .= $h3;
    $args['delimiter'] = '<i class="fas fa-caret-right"></i>';
    return $args;
}

/*
 * Deleted Category And SKU
 */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
/*
 * Adds Category Name Before Product Title
 */
add_action('woocommerce_single_product_summary', 'bepro_cart_category', 4);
function bepro_cart_category(){
    $categories = get_the_terms( get_post()->ID, 'product_cat' );
    $h5 = '<h5>';
    foreach ($categories as $category) {
        $h5 .=  $category->name . ' ';
    }
    $h5 .= '</h5>';
    echo $h5;
}

/*
 * Deleted Price
 */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
/*
 * Deleted Excerpt
 */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);