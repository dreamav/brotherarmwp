<?php
class Ft_Add_Macros_Widget extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'ft_add_macros_widget', // Base ID
			__('Free Tours Add Macros', 'text_domain'), // Name
			array( 'description' => __( 'Free Tours Add Macros Widget', 'text_domain' ), ) // Args
		);
	}
	
	public function widget( $args, $instance ) {
		echo do_shortcode("[get macros \"{$instance['name']}\"]");
	}

	public function form( $instance ) {
		echo <<<X
<p>
	<label for="{$this->get_field_id( 'name' )}">Macros name:</label>
	<input class="widefat" id="{$this->get_field_id( 'name' )}" name="{$this->get_field_name( 'name' )}" type="text" value="{$instance['name']}"><br /><br />
</p>
X;
	}

	public function update( $new_instance, $old_instance ) {
		
		$instance = array();
		$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
		
		return $instance;
	}
}

// Register and load the widget
function load_Ft_Add_Macros_Widget() {
	register_widget('Ft_Add_Macros_Widget');
}
add_action( 'widgets_init', 'load_Ft_Add_Macros_Widget' );
?>