<section class="banner-home">
    <div id="bannerSliderHome" class="owl-carousel banner-home_slider">
        <?php
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'slider-header-home',
        );
        $slider = new WP_Query( $args );
        if ( $slider->have_posts() ) {
            while ( $slider->have_posts() ) {
                $slider->the_post(); ?>
                <div class="banner-home_item">
                    <?php the_post_thumbnail(); ?>
                    <div class="banner-home_content">
                        <h1><?php the_title(); ?></h1>
                        <?php $id = get_the_id(); ?>
                        <?php $text_btn = get_post_meta($id, 'SliderHeaderHomeText', true) ? get_post_meta($id, 'SliderHeaderHomeText', true) : 'buy no!'?>
                        <?php $url_btn = get_post_meta($id, 'SliderHeaderHomeUrl', true) ? get_post_meta($id, 'SliderHeaderHomeUrl', true) : '#'?>
                        <a href="<?php echo $url_btn; ?>" class="button button__big button__radius button__blue banner-home_button"><?php echo $text_btn; ?></a>
                    </div>
                </div>
            <?php
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</section>