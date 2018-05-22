<?php
$args= array(
    'post_type' => 'product',
    'posts_per_page' => 3
);
$query = new WP_Query( $args );
$row = 1;
if( $query->have_posts() ){ ?>
    <div class="new-products">
        <div class="container">
            <div class="row flex-row-reverse">
                <?php while( $query->have_posts() ){ $query->the_post();?>
                    <?php global $product; ?>
                    <?php if( $row === 1 ) : ?>
                        <?php
                        $term = get_the_terms( get_the_id(),'product_cat' )[0];
                        $image_id = get_term_meta( $term->term_id )['thumbnail_id'][0];
                        $image_url = wp_get_attachment_url( $image_id ) ? 'style="background-image:url(' . wp_get_attachment_url( $image_id ) . ')"' : '';
                        ?>
                        <div class="col-md-8 col-lg-9">
                            <div class="new-products_category" <?php echo $image_url; ?>>
                                <span class="new-products_label">new</span>
                                <h5><?php echo $term->name;?></h5>
                                <h3><?php _e( 'New Now: ' ); the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="new-products_price">
                                    <?php woocommerce_template_single_price(); ?>
                                </a>
                            </div>
                        </div>
                    <?php elseif( $row >= 2 ) : ?>
                        <?php
                            if($row > 2) {
                                $class = 'd-md-none col-6 col-md-4 col-lg-3';
                            } else {
                                $class = 'col-6 col-md-4 col-lg-3';
                            }
                        ?>
                        <div class="<?php echo $class;?>">
                            <a href="<?php echo get_the_permalink(); ?>" class="new-products_item">
                                <?php the_post_thumbnail([954, 298]) ?>
                                <?php the_title('<h4>','</h4>'); ?>
                                <?php woocommerce_template_single_price(); ?>
                            </a>
                        </div>
                    <?php endif;?>
                    <?php $row++; ?>
                <?php }
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php
}
else echo 'Записей нет.';
?>
