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
	<button class="footer-btn" onclick="getFooter()">	
		<img src="<?php echo get_template_directory_uri() ?>/img/marketing-digital-favicon.png" alt="<?php echo get_bloginfo( 'description' );?>"> Sobre la agencia
	</button>
	<?php
		if(is_front_page()){

		}else{
			?>
				<div class="container">
					<div class="row">
						<div class="col d-flex justify-content-center">
						<?php
							if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif;
						?>
						</div>
					</div>
				</div>
			<?php


		}
	?>

	<footer id="mainFooter" class="site-footer">
		<button class="clouse-footer-btn" onclick="removeFooter()"><i class="far fa-times-circle"></i></button>
		
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
<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	
<!-- Google Analytics scripts -->
<script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" async></script>
	<script>
	var galite = galite || {};
	galite.UA = "UA-99595338-1"; // Insert your tracking code here
</script>


</body>
</html>
