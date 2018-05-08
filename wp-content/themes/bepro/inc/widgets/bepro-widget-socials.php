<?php
/*
 * Widget Display Social Icons
 */
class beproWidgetSocials extends WP_Widget {
    function __construct() {
        parent::__construct(
            'bepro-widget-socials',
            'Social icons',
            array( 'description' => 'Display Social Icons' )
        );
    }

    /*
     * FrontEnd Widget
     */
    public function widget( $args, $instance ) {
        $facebook = isset( $instance[ 'facebook' ] ) ? $instance[ 'facebook' ] : '';
        $twitter = isset( $instance[ 'twitter' ] ) ? $instance[ 'twitter' ] : '';
        $behance = isset( $instance[ 'behance' ] ) ? $instance[ 'behance' ] : '';
        $basketball = isset( $instance[ 'basketball' ] ) ? $instance[ 'basketball' ] : '';
        $linkedin = isset( $instance[ 'linkedin' ] ) ? $instance[ 'linkedin' ] : '';

        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];

        if ( ! empty( $facebook ) )
            echo '';
        ?>
        <div class="footer_socials">
            <?php if( ! empty( $facebook ) ) : ?>
                <a href="<?php echo $facebook;?>"><i class="fab fa-facebook-f"></i></a>
            <?php endif;?>
            <?php if( ! empty( $twitter ) ) : ?>
                <a href="<?php echo $twitter;?>"><i class="fab fa-twitter"></i></a>
            <?php endif;?>
            <?php if( ! empty( $behance ) ) : ?>
                <a href="<?php echo $behance;?>"><i class="fab fa-behance"></i></a>
            <?php endif;?>
            <?php if( ! empty( $basketball ) ) : ?>
                <a href="<?php echo $basketball;?>"><i class="far fa-basketball-ball"></i></a>
            <?php endif;?>
            <?php if( ! empty( $linkedin ) ) : ?>
                <a href="<?php echo $linkedin;?>"><i class="fab fa-linkedin-in"></i></a>
            <?php endif;?>
        </div>
        <?php
        echo $args['after_widget'];
    }

    /*
     * Backend Widget
     */
    public function form( $instance ) {
            $facebook = isset( $instance[ 'facebook' ] ) ? $instance[ 'facebook' ] : '';
            $twitter = isset( $instance[ 'twitter' ] ) ? $instance[ 'twitter' ] : '';
            $behance = isset( $instance[ 'behance' ] ) ? $instance[ 'behance' ] : '';
            $basketball = isset( $instance[ 'basketball' ] ) ? $instance[ 'basketball' ] : '';
            $linkedin = isset( $instance[ 'linkedin' ] ) ? $instance[ 'linkedin' ] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Url Your Account in Facebook</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Url Your Account in Twitter</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'behance' ); ?>">Url Your Account in Behance</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" type="text" value="<?php echo esc_attr( $behance ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'basketball' ); ?>">Url Your Account in Basketball</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'basketball' ); ?>" name="<?php echo $this->get_field_name( 'basketball' ); ?>" type="text" value="<?php echo esc_attr( $basketball ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'linkedin' ); ?>">Url Your Account in Linkedin</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
        </p>
        <?php
    }

    /*
     * Save Setting
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
        $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
        $instance['behance'] = ( ! empty( $new_instance['behance'] ) ) ? strip_tags( $new_instance['behance'] ) : '';
        $instance['basketball'] = ( ! empty( $new_instance['basketball'] ) ) ? strip_tags( $new_instance['basketball'] ) : '';
        $instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
        return $instance;
    }
}

/*
 * Register Widget
 */
function register_social_icons_widget() {
    register_widget( 'beproWidgetSocials' );
}
add_action( 'widgets_init', 'register_social_icons_widget' );