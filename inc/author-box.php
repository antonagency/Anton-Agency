<?php 


function sn_contactmethods( $contactmethods ) {
    // ADD TWITTER
	$contactmethods['twitter'] = 'Twitter';
	// ADD GOOGLE PLUS
    $contactmethods['googleplus'] = 'Google Plus';
    // ADD FACEBOOK
	$contactmethods['facebook'] = 'Facebook';
	// ADD INSTAGRAM
	$contactmethods['instagram'] = 'Instagram';
	// ADD PINTEREST
	$contactmethods['pinterest'] = 'Pinterest';
	// ADD LINKEDING
	$contactmethods['linkedin'] = 'Linkedin';
    return $contactmethods;
}
add_filter('user_contactmethods','sn_contactmethods',10,1);



function wpb_author_info_box() {
 
global $post;
 
// Detect if it is a single post with a post author
if ( is_single() && isset( $post->post_author ) ) {
 
// Get author's display name 
$display_name = get_the_author_meta( 'display_name', $post->post_author );
 
// If display name is not available then use nickname as display name
if ( empty( $display_name ) )
$display_name = get_the_author_meta( 'nickname', $post->post_author );
 
// Get author's biographical information or description
$user_description = get_the_author_meta( 'user_description', $post->post_author );
 
// Get author's website URL 
$user_website = get_the_author_meta('url', $post->post_author);
 
// Get link to the author archive page
$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
  

// AVATAR DEL AUTHOR

$author_details = '';

$author_details .='<div class="author_details">';

	$author_details .='<div class="author-header">';

		$author_details .='<div class="author-header-item">';
			$author_details .= get_avatar( get_the_author_meta('user_email') , 40 );
			$author_details .='<p class="author_name"><strong>' . $display_name . ' </strong></p>';
		$author_details .='</div>';

		$author_details .='<div class="author-header-item">';
			$author_details .= '<div class="author-rrss">';

				$contactmethods = get_the_author_meta('twitter'); 
					if($contactmethods != '')
					{ 
						$author_details .= '<a href="https://twitter.com/'. $contactmethods .'" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a>';
					}
				
				$contactmethods = get_the_author_meta('facebook'); 
					if($contactmethods != '')
					{ 
						$author_details .= '<a href="https://www.facebook.com/'. $contactmethods .'" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a>';
					}

				$contactmethods = get_the_author_meta('googleplus');  
					if($contactmethods != '')
					{ 
						$author_details .= '<a href="https://plus.google.com/'. $contactmethods .'" target="_blank" rel="me"><i class="fab fa-google-plus-g"></i></a>';
					}

				$contactmethods = get_the_author_meta('instagram'); 
					if($contactmethods != '')
					{ 
						$author_details .= '<a href="https://www.instagram.com/'. $contactmethods .'" target="_blank" rel="me"><i class="fab fa-instagram"></i></a>';
					}

				$contactmethods = get_the_author_meta('pinterest'); 
					if($contactmethods != '')
					{ 
						$author_details .= '<a href="https://www.pinterest.com/'. $contactmethods .'" target="_blank" rel="me"><i class="fab fa-pinterest-p"></i></a>';
					}

				$contactmethods = get_the_author_meta('linkedin'); 
					if($contactmethods != '')
					{ 
						$author_details .= '<a href="https://www.linkedin.com/in/'. $contactmethods .'" target="_blank" rel="me"><i class="fab fa-linkedin-in"></i></a>';
					}

				$user_website = get_the_author_meta('url'); 
					if($user_website != '')
					{ 
						$author_details .= '<a href="'. $user_website .'" target="_blank" rel="nofollow"><i class="fa fa-link" aria-hidden="true"></i></a>';
					}
			$author_details .= '</div>';	
		$author_details .= '</div>';

	$author_details .='</div>';

	$author_details .='<div class="author-body">';
		$author_details .= '<p>' . nl2br( $user_description ) . '</p>';
		$author_details .= '<a href="'. $user_posts .'" rel="nofollow">Ver todos sus artículos </a>';
	$author_details .='</div>';


// REDES SOCIALES 

	

$author_details .= '<div>';				



$content = '';
// ENVOLVER TODO EL CÓDIGO ANTERIOR EN UN CONTENEDOR
$content = $content . '<main class="author-section mb-5" >' . $author_details . '</main>';
}
return $content;
}
 
 
// SI QUIERO AGREGAR EL METABOX AL FINAL DEL POST AUTOMATICAMENTE
// 1. AGREGAR VARIABLE $content A LA FUNCTION "wpb_author_info_box($content)"
// 2. HABILITAR add_action( 'the_content', 'wpb_author_info_box' );

// PERMITIR HTML EN LA DESCIPCIÓN (OPCIONAO)
// remove_filter('pre_user_description', 'wp_filter_kses');

?>