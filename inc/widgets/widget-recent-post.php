<?php

// Adds widget: Anton: Artículos Recientes 
class Antonartculosrecie_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'antonartculosrecie_widget',
			esc_html__( 'Anton: Artículos Recientes ', 'Anton Agency' )
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Cantidad',
			'id' => 'cantidad_number',
			'type' => 'number',
		),
		array(
			'label' => 'Slug de la Categoría',
			'id' => 'slugdelacategor_textarea',
			'type' => 'textarea',
		),
		array(
			'label' => '¿Cúantas columnas ocupará?',
			'id' => 'cantascolumna_number',
			'default' => '12',
			'type' => 'number',
		),
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		// Output generated fields
		echo '<p>'.$instance['cantidad_number'].'</p>';
		echo '<p>'.$instance['slugdelacategor_textarea'].'</p>';
		echo '<p>'.$instance['cantascolumna_number'].'</p>';
		
		echo $args['after_widget'];
	}

	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'Anton Agency' );
			switch ( $widget_field['type'] ) {
				case 'textarea':
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'Anton Agency' ).':</label> ';
					$output .= '<textarea class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" rows="6" cols="6" value="'.esc_attr( $widget_value ).'">'.$widget_value.'</textarea>';
					$output .= '</p>';
					break;
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
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_antonartculosrecie_widget() {
	register_widget( 'Antonartculosrecie_Widget' );
}
add_action( 'widgets_init', 'register_antonartculosrecie_widget' );