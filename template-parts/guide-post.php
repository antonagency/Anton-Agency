<div class="w-100 mb-5">
    <h3 class="mb-3"><?php echo esc_attr(get_option('blog-source-title')); ?></h3>
    <p class="minimal_text">Desliza a la izquierda</p>
    <?php

     $cat_slug =  esc_attr(get_option('blog-source-slug'));
     $post_count =  esc_attr(get_option('blog-source-cant'));
     $guide_order =  esc_attr(get_option('blog-source-order'));

    //query arguments
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $post_count,
        'orderby' => $guide_order,
        'post__not_in' => array ($post->ID),
        'category_name' => $cat_slug,
    );

    //the query
    $guidePosts = new WP_Query( $args );

    //loop through query
    if($guidePosts->have_posts()){
        echo '<div class="row movil-carrousel">';
        while($guidePosts->have_posts()){ 
            $guidePosts->the_post();
                

            if(is_single()){
                $postcolum = '<div class="col-4 mb-3">';
            }else{
                $postcolum = '<div class="col-2 mb-3">';
            }

            echo $postcolum;
            ?>
                <article class="box-shadow bradius-8 post-medium-style d-grid">
                    <div class="vertical-header">
                        <a href="<?php the_permalink();?>" class="" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail('medium-style', ['class' => 'animatedImage',]);?> 
                        </a>
                    </div>
                </article>
            </div>
            
            <?php
            
        }
        echo '</div>';
     }//else{
    //     echo '<p>Aun no se han publicado más destinos en esta provincia</p>';
    // }

    //restore original post data
    wp_reset_postdata();

    ?>
</div>