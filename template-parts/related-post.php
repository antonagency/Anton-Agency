<div class="column-12 row-gap-15">
    <h3 class="mb-3">Más contenido sobre <?php the_category(', '); ?></h3>
    <!-- <p class="minimal_text">Desliza a la izquierda</p> -->
    <?php

    $term_id = get_queried_object()->term_id;


    $tax = $wp_query->get_queried_object();
    $taxonomy_name = $tax->name;
    $taxonomy_slug = 'category';

    //get the taxonomy terms of custom post type
    $customTaxonomyTerms = wp_get_object_terms( $post->ID, $taxonomy_slug, array('fields' => 'ids') );

    //query arguments
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 8,
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy_slug,
                'field' => 'id',
                'terms' => $customTaxonomyTerms
            )
        ),
        'post__not_in' => array ($post->ID),
    );

    //the query
    $relatedPosts = new WP_Query( $args );

    //loop through query
    if($relatedPosts->have_posts()){
        echo '<div class="row">';
        while($relatedPosts->have_posts()){ 
            $relatedPosts->the_post();
            get_template_part( 'template-parts/post-medium' );
            
        }
        echo '</div>';
     }//else{
    //     echo '<p>Aun no se han publicado más destinos en esta provincia</p>';
    // }

    //restore original post data
    wp_reset_postdata();

    ?>
</div>