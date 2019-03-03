<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anton_Agency
 */

?>

	</div><!-- #content -->
	<button class="white-btn" onclick="getFooter()">	
		<img src="<?php echo get_template_directory_uri() ?>/img/marketing-digital-favicon.png" alt="<?php echo get_bloginfo( 'description' );?>"> Sobre la agencia
	</button>
	<button id="idx"><i class="far fa-times-circle"></i></button>
	<footer id="mainFooter" class="site-footer">
		<!--button onclick="removeFooter()"><i class="far fa-times-circle"></i></button-->

		<div class="full-width polygon bg-grey-300 d-grid">
			<div class="grid-container">
				<ul class="footer-social-list">
					<?php
						$facebook = esc_attr(get_option('rrss-fb'));
						$instagram = esc_attr(get_option('rrss-ig'));
						$twitter = esc_attr(get_option('rrss-tt'));
						$linkedin = esc_attr(get_option('rrss-ld'));
						$youtube = esc_attr(get_option('rrss-yt'));

						if($facebook != '')
							{
								echo '<li><a rel="nofollow" id="socialanimated1" target="_blank" href="https://www.facebook.com/' . $facebook . '"><i class="fab fa-facebook-f"></i></a></li>';
							}
						if($instagram != '')
							{
								echo '<li><a rel="nofollow" id="socialanimated2" target="_blank" href="https://www.instagram.com/' . $instagram . '"><i class="fab fa-instagram"></i></a></li>';
							}	
						if($twitter != '')
							{
								echo '<li><a rel="nofollow" id="socialanimated3" target="_blank" href="https://twitter.com/' . $twitter . '"><i class="fab fa-twitter"></i></a></li>';
							}
						if($linkedin != '')
							{
								echo '<li><a rel="nofollow" id="socialanimated4" target="_blank" href="https://www.linkedin.com/in/' . $linkedin . '"><i class="fab fa-linkedin-in"></i></a></li>';
							}
						if($youtube != '')
							{
								echo '<li><a rel="nofollow" id="socialanimated5" target="_blank" href="' . $youtube . '"><i class="fab fa-youtube"></i></a></li>';
							}	
					?>
					
				</ul>
			</div>
		</div>

		<div class="container pb-5 pt-5">
			<div class="row">
				<?php
				for ($i=1; $i <=4 ; $i++) { 
					
					if($i == 1){
						echo '<div class="col-md-4 col-12 mb-3">';
					}else{
						echo '<div class="col mb-3">';
					}

						if(is_active_sidebar('footer-0' . $i)): 
							dynamic_sidebar('footer-0' . $i);
						endif;

					echo '</div>';
				}
				?>
			</div>
		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
 <script type="text/javascript" src="../wordpress/wp-content/themes/anton-agency/js/navigation.js"></script>
 <script type="text/javascript" src="../js/navigation.js"></script>
</body>
</html>
