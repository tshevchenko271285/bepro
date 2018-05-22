<?php
$product_cat = get_terms( 'product_cat' );
shuffle( $product_cat );
$args= array(
    'post_type' => 'product',
    'posts_per_page' => 2,
    'tax_query' => array(
		array(
			'taxonomy' => 'product_cat',
			'field'    => 'id',
			'terms'    => array( $product_cat[1]->term_id, $product_cat[2]->term_id ),
		),
    ),
);
$query = new WP_Query( $args );
if( $query->have_posts() ){ ?>
    <div class="random-products">
        <div class="container">
            <div class="row">
                <?php while( $query->have_posts() ){ $query->the_post();?>
                    <?php global $product; ?>
                    <div class="col-md-6">
                        <?php
                            $term = get_the_terms( get_the_id(),'product_cat' )[0];
                            $image_id = get_term_meta( $term->term_id )['thumbnail_id'][0];
                            $image_url = wp_get_attachment_url( $image_id ) ? 'style="background-image:url(' . wp_get_attachment_url( $image_id ) . ')"' : '';
                        ?>
                        <a href="<?php the_permalink(); ?>" class="random-products_item" <?php echo $image_url; ?> >
                            <h5><?php echo $term->name;?></h5>
                            <h3><?php the_title(); ?></h3>
                            <div class="random-products_price">
                                <?php woocommerce_template_single_price(); ?>
                            </div>
                        </a>
                    </div>
                <?php };
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <?php
}
?>
