<?php
/**
* Adds CTA Widget widget
*/
class Ctawidget_Widget extends WP_Widget {
	/**
	* Register widget with WordPress
	*/
	function __construct() {
		parent::__construct(
			'ctawidget_widget', // Base ID
			esc_html__( 'Anton: CTA', 'Anton Agency' ), // Name
			array( 'description' => esc_html__( 'Call To Action', 'Anton Agency' ), ) // Args
		);
		add_action( 'admin_footer', array( $this, 'media_fields' ) );
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'media_fields' ) );
	}
	/**
	* Widget Fields
	*/
	private $widget_fields = array(
		array(
			'label' => 'Imagen',
			'id' => 'imagen_61160',
			'type' => 'media',
		),
		array(
			'label' => 'Título Principal',
			'id' => 'ttuloprincipal_51524',
			'type' => 'text',
		),
		array(
			'label' => 'Tel. Número',
			'id' => 'telnmero_24263',
			'type' => 'text',
		),
		array(
			'label' => 'Texto del Botón',
			'id' => 'textodelbotn_11681',
			'type' => 'text',
		),
		array(
			'label' => 'URL del Botón',
			'id' => 'urldelbotn_46849',
			'type' => 'text',
		),
		array(
			'label' => 'Detalle 01',
			'id' => 'detalle11_34964',
			'type' => 'text',
		),
		array(
			'label' => 'Detalle 02',
			'id' => 'detalle12_86819',
			'type' => 'text',
		),
	);
	/**
	* Front-end display of widget
	*/
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		// Output generated fields
		$cta_img = $instance['imagen_61160'];
		$cta_title = $instance['ttuloprincipal_51524'];
		$cta_tel = $instance['telnmero_24263'];
		$cta_textbtn = $instance['textodelbotn_11681'];
		$cta_texturl = $instance['urldelbotn_46849'];
		$cta_featureone = $instance['detalle11_34964'];
        $cta_featuretwo = $instance['detalle12_86819'];
        ?>
        
        <div class="sidebar-call-to-action b-8">
            <img src="<?php echo $cta_img;?>" alt="<?php the_title() ?>">
            <div>
                <h3><?php echo $cta_title;?></h3>
                <ul class="call-us-box">
                    <li><i class="fas fa-check-circle"></i><?php echo $cta_featureone;?></li>
                    <li><i class="fas fa-check-circle"></i><?php echo $cta_featuretwo?></li>
                </ul>

                <h4><?php echo $cta_tel;?></h4>
                <a href="<?php echo $cta_texturl;?>" rel="nofollow" class="btn-orange"><?php echo $cta_textbtn;?></a>
            </div>
        </div>

        <?php
		
		echo $args['after_widget'];
	}
	/**
	* Media Field Backend
	*/
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
								$('input#'+id).val(attachment.url);
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
				}
			});
		</script><?php
	}
	/**
	* Back-end widget fields
	*/
	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $widget_field['default'], 'Anton Agency' );
			switch ( $widget_field['type'] ) {
				case 'media':
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'Anton Agency' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_url( $widget_value ).'">';
					$output .= '<button id="'.$this->get_field_id( $widget_field['id'] ).'" class="button select-media custommedia">Add Media</button>';
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
	/**
	* Sanitize widget form values as they are saved
	*/
	public function update( $new_instance, $old_instance ) {
		$instance = array();
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
} // class Ctawidget_Widget
// register CTA Widget widget
function register_ctawidget_widget() {
	register_widget( 'Ctawidget_Widget' );
}
add_action( 'widgets_init', 'register_ctawidget_widget' );