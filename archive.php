<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anton_Agency
 */

get_header('blog');
?>

	<div id="primary" class="content-area">
		<div class="container pb-5">
			
			
			<div class="row">
				<div class="col-md-4">
					<?php get_sidebar();?>
				</div>
				<div class="col-md-8">
					<header class="mb-5 archive-header">
						<div class="row">
							<div class="col">
								<span><mark>Contenido de:</mark></span>
								<h1 class="mb-3"><?php single_cat_title(); ?></h1>
								<?php
									the_archive_description( '<div class="archive-description">', '</div>' );
								?>
							</div>
						</div>
					</header>
					<div class="row">
						<?php
						/* Start the Loop */

						if ( have_posts() ) : 
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/post-medium', get_post_type() );

							endwhile;

					endif;
					?>
					</div>
				</div>

			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
