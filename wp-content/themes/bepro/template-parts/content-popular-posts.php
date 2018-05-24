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
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                );
                $posts = get_posts( $args );
                $item = 0;


                wp_reset_postdata(); // сброс
                ?>

                   <!-- Start Slider -->
                    <div id="popularPostsSlider" class="popular-posts_slider">
                 <?php
                    foreach($posts as $key => $post){ setup_postdata($post);
                        if ( $item === 0 ) { // Open Item Slider ?>
                            <!--Start Item-->
                            <div class="popular-posts_item">
                                <div class="popular-posts_left">
                                    <div class="popular-posts_item-big"><?php echo $item; ?></div>
                                </div><!-- Left -->
                                <div class="popular-posts_right">
                        <?php } else { ?>
                                        <div class="popular-posts_item-small"><?php echo $item; ?></div>
                        <?php } ?>
                        <?php if ( !isset( $posts[++$key] ) || $item === 2 )  { // Close Item Slider
                             ?> </div> <!--Right--> <?php
                            $item = 0;
                        ?>
                            </div><!-- End Item -->
                        <?php } else {
                            $item++;
                        }

                    }
                 ?>
                </div><!-- End Slider -->
            </div><!--Popular Posts-->
        </div><!--Col-->
    </div><!--Row-->
</div><!--Container-->