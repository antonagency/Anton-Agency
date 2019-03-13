<?php
/**
 * Template Name: Internal Page
 * The main template file.
 * @package Anton_Agency
 */

get_header();


$custom 			= get_post_custom($post->ID);
$header = array(
    $custom['imagen_41926'][0],
    $custom['ttuloprincipal_71191'][0],
    $custom['descripcin_35656'][0],
);

?>
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <section class="header-img text-center">
                    <img src="<?php echo $header[0]?>" alt="<?php echo $header[1]?>">
                </section>
            </div>
            <div class="col-md-7 d-flex align-items-center">
                <section class="header-content">
                    <h1><?php echo $header[1]?></h1>
                    <h3><?php echo $header[2]?></h3>
                </section>
            </div>
        </div>
    </div>
</header>
<div class="container mt-5 mb-5">
    <div class="row">
        <main class="col">
                <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'pagecustom' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?>
                <footer class="entry-footer pt-3">
                    <h2 class="entry_title_02 mb-3"><?php echo get_field('escribe_un_titulo_principal')?></h2>
                    <p><?php echo get_field('descripcion_de_introduccion')?></p>
                    <div id="accordion" class="row entry-content">
                        <?php

                       // check if the flexible content field has rows of data
                            if( get_field('campos_de_texto_paginas') ):

                            $i = 1;

                                // loop through the rows of data
                            while ( has_sub_field('campos_de_texto_paginas') ) :

                                    $i++;
                                    

                                    ?>
                                        <div class="mb-3 col-12">
                                            <div class="card main__collapse">
                                                <div class="card-header" id="heading-<?php echo $i?>">
                                                <h4 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center" data-toggle="collapse" data-target="#acordion-<?php echo $i?>" aria-expanded="true" aria-controls="acordion-<?php echo $i?>">
                                                    <i class="far fa-plus-square"></i> <?php the_sub_field('titulo_del_bloque');?>
                                                    </button>
                                                </h4>
                                                </div>
                        
                                                <div id="acordion-<?php echo $i?>" class="collapse" aria-labelledby="heading-<?php echo $i?>" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <?php the_sub_field('bloque_de_texto');?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php 


                            endwhile;
                            else :

                            // no layouts found

                            endif;

                    ?>

                        

                    </div>
                </footer><!-- .entry-footer -->
        </main>
        <?php get_sidebar('service');?>
    </div>
</div>

<?php





get_footer();