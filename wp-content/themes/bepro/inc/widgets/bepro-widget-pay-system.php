<?php
/*
 * Widget Display Social Icons
 */
class beproWidgetPaySystem extends WP_Widget {
    function __construct() {
        parent::__construct(
            'bepro-widget-paysystem',
            'AA Pay System Icons',
            array( 'description' => 'Display Pay System Icons' )
        );
    }

    /*
     * FrontEnd Widget
     */
    public function widget( $args, $instance ) {
        $visa = isset( $instance[ 'visa' ] ) ? $instance[ 'visa' ] : false;
        $pp = isset( $instance[ 'pp' ] ) ? $instance[ 'pp' ] : false;
        $master = isset( $instance[ 'master' ] ) ? $instance[ 'master' ] : false;
        $maestro = isset( $instance[ 'maestro' ] ) ? $instance[ 'maestro' ] : false;
        $amd = isset( $instance[ 'amd' ] ) ? $instance[ 'amd' ] : false;

        echo $args['before_widget'];

        ?>
        <div class="footer_paysystem">
            <?php if( !empty($visa) ): ?>
                <span class="footer_paysystem__visa"></span>
            <?php endif; ?>
            <?php if( !empty($pp) ): ?>
                <span class="footer_paysystem__pp"></span>
            <?php endif; ?>
            <?php if( !empty($master) ): ?>
                <span class="footer_paysystem__master"></span>
            <?php endif; ?>
            <?php if( !empty($maestro) ): ?>
                <span class="footer_paysystem__maestro"></span>
            <?php endif; ?>
            <?php if( !empty($amd) ): ?>
                <span class="footer_paysystem__amd"></span>
            <?php endif; ?>
        </div>
        <?php
        echo $args['after_widget'];
    }

    /*
     * Backend Widget
     */
    public function form( $instance ) {
        $visa = isset( $instance[ 'visa' ] ) ? $instance[ 'visa' ] : '';
        $pp = isset( $instance[ 'pp' ] ) ? $instance[ 'pp' ] : '';
        $master = isset( $instance[ 'master' ] ) ? $instance[ 'master' ] : '';
        $maestro = isset( $instance[ 'maestro' ] ) ? $instance[ 'maestro' ] : '';
        $amd = isset( $instance[ 'amd' ] ) ? $instance[ 'amd' ] : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'visa' ); ?>">Display visa</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'visa' ); ?>" name="<?php echo $this->get_field_name( 'visa' ); ?>" type="checkbox" <?php echo $visa; ?> />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'pp' ); ?>">Display pp</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'pp' ); ?>" name="<?php echo $this->get_field_name( 'pp' ); ?>" type="checkbox" <?php echo $pp; ?> />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'master' ); ?>">Display master</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'master' ); ?>" name="<?php echo $this->get_field_name( 'master' ); ?>" type="checkbox" <?php echo $master; ?> />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'maestro' ); ?>">Display maestro</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'maestro' ); ?>" name="<?php echo $this->get_field_name( 'maestro' ); ?>" type="checkbox" <?php echo $maestro; ?> />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'amd' ); ?>">Display amd</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'amd' ); ?>" name="<?php echo $this->get_field_name( 'amd' ); ?>" type="checkbox" <?php echo $amd; ?> />
        </p>
        <?php
    }

    /*
     * Save Setting
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['visa'] = $new_instance['visa'] ? 'checked' : '';
        $instance['pp'] = $new_instance['pp'] ? 'checked' : '';
        $instance['master'] = $new_instance['master'] ? 'checked' : '';
        $instance['maestro'] =  $new_instance['maestro'] ? 'checked' : '';
        $instance['amd'] = $new_instance['amd'] ? 'checked' : '';
        return $instance;
    }
}

/*
 * Register Widget
 */
function register_paysystem_widget() {
    register_widget( 'beproWidgetPaySystem' );
}
add_action( 'widgets_init', 'register_paysystem_widget' );