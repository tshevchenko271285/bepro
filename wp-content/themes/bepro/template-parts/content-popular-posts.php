<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="popular-posts">
                <div class="popular-posts_header">
                    <h5><?php _e('popular'); ?></h5>
                    <div class="popular-posts_buttons">
                        <div class="popular-posts_prev">
                            <i class="fal fa-angle-left"></i>
                        </div>
                        <div class="popular-posts_next">
                            <i class="fal fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <?php
                $args = array(
                    'posts_per_page' => 4,
                    'post_type' => 'post',
                );
                $blog_posts = new WP_Query( $args );
                if ( $blog_posts->have_posts() ) { ?>
                    <?php $this_post = 0; ?>
                    <!-- Start Slider -->
                    <div id="popularPostsSlider" class="popular-posts_slider">
                        <?php while ( $blog_posts->have_posts() ) {
                            $blog_posts->the_post(); ?>
                                <?php if( $this_post === 0 ) : ?>
                                <!--Start Item-->
                                <div class="popular-posts_item">
                                    <div class="popular-posts_item-big">

                                    </div>
                                <?php else : ?>
                                    <div class="popular-posts_item-small">

                                    </div>
                                <?php endif; ?>
                        <?php
                            if ( $this_post === 2 ) {
                                $this_post = 0;
                            } else {
                                $this_post++;
                            }
                            if( $this_post === 0 ) {
                                echo '</div><!-- End Item -->';
                            }
                        }
                        echo '</div><!-- End Slider -->';
                    }
                        wp_reset_postdata();
                    ?>
            </div><!--Popular Posts-->
        </div><!--Col-->
    </div><!--Row-->
</div><!--Container-->