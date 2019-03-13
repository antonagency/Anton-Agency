<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Anton_Agency
 */

get_header('blog');
?>
		<main id="main" class="container">
		<div class="row d-flex justify-content-center text-center">
			<h2 class="entry_title_02 mb-3">¿Cómo podemos ayudarte?</h2>
			<div class="col-sm-6 mb-5">
				<?php get_search_form()?>
				<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Mostrando resultados para: %s', 'anton-agency' ), '<span><strong>' . get_search_query() . '</strong></span>' );
				?>
			</div>
		</div>
		<?php if ( have_posts() ) : ?>
		<div class="row mb-5">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post-medium' );

			endwhile;

		else :

			echo '<div class="text-center col mb-5"><mark>No se encontraton resultados</mark></div>';

		endif;
		?>
		

		<div class="row">
			<div class="col-12 text-center mb-5">
				<h2 class="entry_title_02">Artículos recientes por categorías</h2>
			</div>
			<?php


            $cat_no_in = esc_attr(get_option('blog-source-slug'));
            $post_cant = esc_attr(get_option('blog-post-cant'));

            $cat_ID = esc_attr(get_option('blog-post-slug'));
            $cat_ID = str_replace(' ', '', $cat_ID);
            $cat_ID = explode(",", $cat_ID);
            
            $cat_args = array(
                //'order' => 'ASC',
                'category', 
                'term_taxonomy_id' => $cat_ID,
            );

            $categories=get_categories($cat_args);
            foreach($categories as $category)
                { 
                    echo '<div class="col-sm-4 mb-5">';
						echo '<div class="widget-section">';
							echo '<div class="d-flex justify-content-between mb-3"><h3 class="widget-tittle">' . $category->name . '</h3><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '><i class="fas fa-arrow-right"></i></a></div>';
							
							echo '<ul>';
								$args=array(
								'showposts' => $post_cant,
								'category__in' => array($category->term_id),
								'ignore_sticky_posts'=>1,
								'category__not_in' => $cat_no_in
								);

								$customPost = new WP_Query($args);       
									if ( $customPost->have_posts() ) :
										while ( $customPost->have_posts() ) : $customPost->the_post();

										echo '<li><a href="' . get_permalink() . '"><i class="fas fa-file-alt"></i> ';
											the_title();
										echo '</a></li>';

									endwhile;
								endif;
							echo '</ul>';
						echo '</div>';
                    echo '</div>';

                } // foreach($categories
            ?>
		</div>

		</main><!-- #main -->

<?php
get_footer();
