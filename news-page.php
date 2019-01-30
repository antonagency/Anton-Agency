<?php
/**
 * Template Name: Blog Page
 * The main template file.
 * @package Anton_Agency
 */

get_header('blog');



?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5">
                <?php get_template_part( 'template-parts/guide-post', get_post_type() ); ?>
            </div>
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
        <div class="col-md-8">
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
                    echo '<div class="w-100 mb-5">';

                        echo '<div class="w-100 mb-3"><h3 class=""><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name. '</a></h3><p class="minimal_text">Desliza a la izquierda</p></div>';
                        
                        echo '<div class="row">';
                            $args=array(
                            'showposts' => $post_cant,
                            'category__in' => array($category->term_id),
                            'ignore_sticky_posts'=>1,
                            'category__not_in' => $cat_no_in
                            );

                            $customPost = new WP_Query($args);       
                                if ( $customPost->have_posts() ) :
                                    while ( $customPost->have_posts() ) : $customPost->the_post();

                                    get_template_part( 'template-parts/post-medium' );

                                endwhile;
                            endif;
                        echo '</div>';
                    echo '</div>';

                } // foreach($categories
            ?>
        </div>
    </div>
</div>

<?php

get_footer();