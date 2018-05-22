<!-- Start Events Slider -->
<section class="events">
    <div id="eventsSlider" class="owl-carousel events_slider">
        <?php
        $args = array(
            'post_type' => 'events',
        );
        $slider = new WP_Query( $args );
        if ( $slider->have_posts() ) {
            while ( $slider->have_posts() ) {
                $slider->the_post(); ?>
                <div class="events_item">
                    <?php if( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail([1366, 400]); ?>
                    <?php endif; ?>
                    <div class="events_content">
                        <h5><?php _e(event); ?></h5>
                        <h2><?php the_title(); ?></h2>
                        <?php $id = get_the_id(); ?>
                        <?php $event_date = get_post_meta($id, 'event_date', true) ? get_post_meta($id, 'event_date', true) : ''; ?>
                        <?php if( $event_date ) : ?>
                            <p><?php echo $event_date; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</section><!-- End Events Slider -->