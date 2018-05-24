<?php

get_header(); ?>

<div class="container">

        <?php if ( have_posts() ) : ?>

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                if ( is_single() ) { // Временно
                    the_title('<h1>', '</h1>');
                    the_post_thumbnail([400, 300]);
                    the_content();
                    if(function_exists('the_ratings')) {
                        the_ratings();
                    }
                }
                get_template_part( 'content', get_post_format() );

                // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>

</div>

<?php get_footer(); ?>
