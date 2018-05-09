<!--Start Banner Home Page-->
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
                        <?php $text_btn = get_post_meta($id, 'SliderHeaderHomeText', true) ? get_post_meta($id, 'SliderHeaderHomeText', true) : 'buy no!'; ?>
                        <?php $url_btn = get_post_meta($id, 'SliderHeaderHomeUrl', true) ? get_post_meta($id, 'SliderHeaderHomeUrl', true) : '#'; ?>
                        <a href="<?php echo $url_btn; ?>" class="button button__big button__radius button__blue banner-home_button"><?php echo $text_btn; ?></a>
                    </div>
                </div>
            <?php
            }
        }
        wp_reset_postdata();
        ?>
    </div><!--End Banner Home Page-->
    <!-- Start Our Advantages -->
    <?php
    $args = array(
        'posts_per_page' => 4,
        'post_type' => 'advantages-header',
    );
    $advantages = new WP_Query( $args );
    if ( $advantages->have_posts() ) { ?>
        <div class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="advantages_outer">
                        <?php while ( $advantages->have_posts() ) {
                            $advantages->the_post(); ?>
                                <?php $id = get_the_id(); ?>
                                <div class="advantages_item">
                                    <?php $icon = get_post_meta($id, 'advantagesIcon', true) ? get_post_meta($id, 'advantagesIcon', true) : ''; ?>
                                    <?php if( $icon ) : ?>
                                        <div class="advantages_icon">
                                            <i class="<?php echo $icon; ?>"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="advantages_content">
                                        <?php if( get_the_title() ) {
                                            the_title('<h4>', '<h4>');
                                        } ?>
                                        <?php $text = get_post_meta($id, 'advantagesText', true) ? get_post_meta($id, 'advantagesText', true) : ''; ?>
                                        <?php if( $text ) : ?>
                                            <p><?php echo $text; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Our Advantages -->
</section>