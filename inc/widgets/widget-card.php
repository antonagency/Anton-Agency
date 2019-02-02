<?php
// Adds widget: Anton: Card 
class Antoncard_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'antoncard_widget',
			esc_html__( 'Anton: Card ', 'Anton Agency' )
		);
		add_action( 'admin_footer', array( $this, 'media_fields' ) );
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'media_fields' ) );
	}

	private $widget_fields = array(
		array(
			'label' => 'Título',
			'id' => 'ttulo_text',
			'type' => 'text',
		),
		array(
			'label' => 'URL',
			'id' => 'url_text',
			'type' => 'text',
		),
		array(
			'label' => 'Imagen',
			'id' => 'imagen_media',
			'type' => 'media',
		),
		array(
			'label' => 'Color de texto',
			'id' => 'colordetexto_text',
			'default' => '#333',
			'type' => 'text',
		),
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		// Output generated fields
		echo '<p>'.$instance['ttulo_text'].'</p>';
		echo '<p>'.$instance['url_text'].'</p>';
		echo '<p>'.$instance['imagen_media'].'</p>';
		echo '<p>'.$instance['colordetexto_text'].'</p>';
		
		echo $args['after_widget'];
	}

	public function media_fields() {
		?><script>
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$(document).on('click','.custommedia',function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = button.attr('id');
						_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								$('input#'+id).val(attachment.id);
								$('span#preview'+id).css('background-image', 'url('+attachment.url+')');
								$('input#'+id).trigger('change');
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
					$(document).on('click', '.remove-media', function() {
						var parent = $(this).parents('p');
						parent.find('input[type="media"]').val('').trigger('change');
						parent.find('span').css('background-image', 'url()');
					});
				}
			});
		</script><?php
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
				case 'media':
					$media_url = '';
					if ($widget_value) {
						$media_url = wp_get_attachment_url($widget_value);
					}
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'Anton Agency' ).':</label> ';
					$output .= '<input style="display:none;" class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.$widget_value.'">';
					$output .= '<span id="preview'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" style="margin-right:10px;border:2px solid #eee;display:block;width: 100px;height:100px;background-image:url('.$media_url.');background-size:contain;background-repeat:no-repeat;"></span>';
					$output .= '<button id="'.$this->get_field_id( $widget_field['id'] ).'" class="button select-media custommedia">Add Media</button>';
					$output .= '<input style="width: 19%;" class="button remove-media" id="buttonremove" name="buttonremove" type="button" value="Clear" />';
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

function register_antoncard_widget() {
	register_widget( 'Antoncard_Widget' );
}
add_action( 'widgets_init', 'register_antoncard_widget' );