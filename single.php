<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Anton_Agency
 */

get_header('blog');
?>

	<div id="primary" class="container">
		<div class="row">
			<main id="main" class="col">

				<?php
				while ( have_posts() ) :
					the_post();
					
					get_template_part( 'template-parts/content-post', get_post_type() );
					echo wpb_author_info_box();
					get_template_part( 'template-parts/guide-post', get_post_type() );
					get_template_part( 'template-parts/related-post', get_post_type() );
					

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			<?php
				get_sidebar();
				 
			?>		</div>
	</div><!-- #primary -->

<?php

get_footer();

