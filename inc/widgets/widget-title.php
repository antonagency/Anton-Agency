<?php

// Adds widget: Anton: Títulos 
class Antonttulos_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'antonttulos_widget',
			esc_html__( 'Anton: Títulos ', 'Anton Agency' )
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Título',
			'id' => 'ttulo_text',
			'type' => 'text',
		),
		array(
			'label' => 'Descripción',
			'id' => 'descripcin_textarea',
			'type' => 'textarea',
		),
		array(
			'label' => '¿Cúantas columnas ocupará?',
			'id' => 'cantascolumna_number',
			'default' => '12',
			'type' => 'number',
		),
		array(
			'label' => 'Tamaño (1 - 6)',
			'id' => 'tamao16_number',
			'default' => '2',
			'type' => 'number',
		),
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$columns = $instance['cantascolumna_number'];
		$entry_title = $instance['ttulo_text'];
		$entry_tagline = $instance['descripcin_textarea'];
		$title_h = $instance['tamao16_number'];

		// Output generated fields
		echo '<div class="col-' . $columns . ' text-center mb-5">';
			echo '<h' . $title_h . ' class="entry_title_02">' . $entry_title . '</h' . $title_h . '>';
			echo '<p>' . $entry_tagline . '<p>';
		echo '</div>';
		
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

function register_antonttulos_widget() {
	register_widget( 'Antonttulos_Widget' );
}
add_action( 'widgets_init', 'register_antonttulos_widget' );