<?php
class acordionesMetabox {
	private $screen = array(
		'page',
	);
	private $meta_fields = array(
		array(
			'label' => 'Título Principal',
			'id' => 'ttuloprincipal_93731',
			'type' => 'text',
		),
		array(
			'label' => 'Descripción',
			'id' => 'descripcin_12815',
			'type' => 'text',
        ),
        array(
			'label' => 'Título del label',
			'id' => 'ttulodellabel_54887',
			'type' => 'text',
		),
		array(
			'label' => 'Acordión 01',
			'id' => 'acordin11_27200',
			'type' => 'wysiwyg',
        ),
        array(
			'label' => 'Título del label',
			'id' => 'ttulodellabel_31851',
			'type' => 'text',
		),
		
		
		
		
		
		
		
	);
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}
	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'acordiones',
				__( 'Acordiones', 'Dominet' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'advanced',
				'default'
			);
		}
	}
	public function meta_box_callback( $post ) {
		wp_nonce_field( 'acordiones_data', 'acordiones_nonce' );
		echo 'Aquí puede colocar información referente a preguntas frecuentes y relacionados.';
		echo ' <a class="add_acordion_button button-secondary">Add Acordion</a>';
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		echo ' <br/><a class="remove_acordion_button button-secondary">Remove Acordion</a>';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				$meta_value = $meta_field['default']; }
			switch ( $meta_field['type'] ) {
				case 'wysiwyg':
					ob_start();
					wp_editor($meta_value, $meta_field['id']);
					$input = ob_get_contents();
					ob_end_clean();
					break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}
	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}
	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['acordiones_nonce'] ) )
			return $post_id;
		$nonce = $_POST['acordiones_nonce'];
		if ( !wp_verify_nonce( $nonce, 'acordiones_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}
if (class_exists('acordionesMetabox')) {
	new acordionesMetabox;
};

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
		$(".form-table").hide()
		$(".remove_acordion_button").hide()
		  $(".add_acordion_button").click(function(){
		    $(".form-table").show();
    		$(".remove_acordion_button").show()
		  });
		  $(".remove_acordion_button").click(function(){
		    $(".form-table").hide();
		  });
		});
</script>
</html>