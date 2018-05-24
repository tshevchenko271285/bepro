<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-3"></div>
        <div class="col-md-8 col-lg-9">
            <div class="popular-posts">
                <div class="popular-posts_header">
                    <h5><?php _e('popular'); ?></h5>
                    <div class="popular-posts_buttons">
                        <div id="popularPostPrev" class="popular-posts_prev">
                            <i class="fal fa-angle-left"></i>
                        </div>
                        <div id="popularPostNext" class="popular-posts_next">
                            <i class="fal fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <?php
                $args = array(
                    'posts_per_page' => 6,
                    'post_type' => 'post',
                    'meta_key' => 'bepro_post_views_count',
                    'orderby' => 'bepro_post_views_count',
                    'order' => 'DESC'
                );
                $posts = get_posts( $args );
                $item = 0;
                ?>
                   <!-- Start Slider -->
                    <div id="popularPostsSlider" class="popular-posts_slider owl-carousel">
                 <?php
                    foreach($posts as $key => $post){ setup_postdata($post);
                        if ( $item === 0 ) { // Open Item Slider ?>
                            <!--Start Item-->
                            <div class="popular-posts_item">
                                <div class="popular-posts_left">
                                    <?php $image = has_post_thumbnail() ? 'style="background-image: url(' . wp_get_attachment_image_url( get_post_thumbnail_id() , 'large' ) . ')"' : ''; ?>
                                    <a href="<?php the_permalink(); ?>" class="popular-posts_item-big" <?php echo $image; ?> >
                                        <div class="popular-posts_item-big-date">
                                            <i class="far fa-clock"></i>
                                            <?php _e('Date: '); ?>
                                            <?php echo get_the_date(); ?>
                                        </div>
                                        <h4><?php the_title(); ?></h4>
                                        <div class="popular-posts_item-big-details">
                                            <span class="popular-posts_item-big-comment">
                                                <i class="fas fa-comments"></i>
                                                <?php echo get_comments_number() ? sprintf("%02d", get_comments_number()) : 0; ?>
                                            </span>
                                            <span class="popular-posts_item-big-details-separator">|</span>
                                            <span class="popular-posts_item-big-likes">
                                                <i class="fas fa-heart"></i>
                                                <?php echo get_post_meta(get_the_ID(), '_liked', true) ? get_post_meta(get_the_ID(), '_liked', true) : 0;?>
                                            </span>
                                        </div>
                                    </a>
                                </div><!-- Left -->
                                <div class="popular-posts_right">
                        <?php } else { ?>
                            <a href="<?php the_permalink()?>" class="popular-posts_item-small">
                                <div class="popular-posts_item-small-image">
                                    <?php the_post_thumbnail([100, 100], true); ?>
                                </div>
                                <div class="popular-posts_item-small-content">
                                    <div class="popular-posts_item-small-date">
                                        <i class="far fa-clock"></i>
                                        <?php _e('Date: '); ?>
                                        <?php echo get_the_date(); ?>
                                    </div>
                                    <h4><?php echo wp_trim_words( get_the_title(), 4, '' ); ?></h4>
                                    <div class="popular-posts_item-small-details">
                                        <span class="popular-posts_item-small-comment">
                                            <i class="fas fa-comments"></i>
                                            <?php echo get_comments_number() ? sprintf("%02d", get_comments_number()) : 0; ?>
                                        </span>
                                        <span class="popular-posts_item-small-details-separator">|</span>
                                        <span class="popular-posts_item-small-likes">
                                            <i class="fas fa-heart"></i>
                                            <?php echo get_post_meta(get_the_ID(), '_liked', true) ? get_post_meta(get_the_ID(), '_liked', true) : 0;?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <?php
                            if ( !isset( $posts[++$key] ) || $item === 2 )  { // Close Item Slider
                        ?>
                                <a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>" class="popular-posts_right-archive-link">View all <i class="far fa-long-arrow-right"></i></a>
                                </div> <!--Right-->
                            <?php
                                $item = 0;
                            ?>
                        </div><!-- End Item -->
                        <?php } else {
                            $item++;
                        }
                    }
                    wp_reset_postdata(); // сброс
                 ?>
                </div><!-- End Slider -->
            </div><!--Popular Posts-->
        </div><!--Col-->
    </div><!--Row-->
</div><!--Container-->