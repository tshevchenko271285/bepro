<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'logotypes',
);
$logotypes = new WP_Query( $args );
if ( $logotypes->have_posts() ) { ?>
<div class="logotypes">
    <div class="container">
        <div id="logotypesSlider" class="logotypes_slider owl-carousel">
            <?php while ( $logotypes->have_posts() ) {
                $logotypes->the_post(); ?>
                <div class="logotypes_item">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php
            }?>
        </div>
        <?php }
        wp_reset_postdata();
        ?>

    </div>
</div>