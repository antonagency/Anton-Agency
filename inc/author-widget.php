<?php
/**
* Adds Listado de autores widget
*/
class Listadodeautores_Widget extends WP_Widget {

	/**
	* Register widget with WordPress
	*/
	function __construct() {
		parent::__construct(
			'listadodeautores_widget', // Base ID
			esc_html__( 'Listado de autores', 'Anton Agency' ), // Name
			array( 'description' => esc_html__( 'Aquí puedes mostrar la lista de autores', 'Anton Agency' ), ) // Args
		);
	}

	/**
	* Widget Fields
	*/
	private $widget_fields = array(
	);

	/**
	* Front-end display of widget
	*/
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		// Output widget title
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		$args = array(
            'blog_id'      => $GLOBALS['blog_id'],
            'role'         => 'editor',
            'meta_key'     => '',
            'meta_value'   => '',
            'meta_compare' => '',
            'meta_query'   => array(),
            'include'      => array(),
            'exclude_admin' => true,
            'hide_empty'    => true, 
            'offset'       => '',
            'search'       => '',
            'number'       => '',
            'count_total'  => true,
            'fields'       => 'all',
            'who'          => ''
        );
        
        $users = get_users( $args );
        if( !empty( $users ) ) {
            echo '<ul class="author-widgets">';
            foreach( $users as $user ) {
                echo '<li>';
                echo '<a href="' . $user->user_url . '">' . get_avatar( $user->ID, 35 ) . '</a>';
                echo '<a href="' . $user->user_url . '">' . $user->display_name . '</a>';
                echo '</li>';
            }
            echo '</ul>';
        }
        else {
            echo 'No Users To Show';
        }
		
		echo $args['after_widget'];
	}

	/**
	* Back-end widget fields
	*/
	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $widget_field['default'], 'Anton Agency' );
			switch ( $widget_field['type'] ) {
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'Anton Agency' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'Anton Agency' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'Anton Agency' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
		$this->field_generator( $instance );
	}

	/**
	* Sanitize widget form values as they are saved
	*/
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				case 'checkbox':
					$instance[$widget_field['id']] = $_POST[$this->get_field_id( $widget_field['id'] )];
					break;
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
} // class Listadodeautores_Widget

// register Listado de autores widget
function register_listadodeautores_widget() {
	register_widget( 'Listadodeautores_Widget' );
}
add_action( 'widgets_init', 'register_listadodeautores_widget' );