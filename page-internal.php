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

$acordions = array(
    'a-label-1' =>   $custom['ttulodellabel_54887'][0],
    'a-acordion-1' =>   $custom['acordin11_27200'][0],

    'a-label-2' =>   $custom['ttulodellabel_31851'][0],
    'a-acordion-2' =>   $custom['acordin12_66843'][0],

    'a-label-3' =>   $custom['ttulodellabel_83835'][0],
    'a-acordion-3' =>   $custom['acordin13_48261'][0],

    'a-label-4' =>   $custom['ttulodellabel_11719'][0],
    'a-acordion-4' =>   $custom['acordin14_10542'][0],

    'a-label-5' =>   $custom['ttulodellabel_62499'][0],
    'a-acordion-5' =>   $custom['acordin15_73270'][0],

    'a-label-6' =>   $custom['ttulodellabel_73444'][0],
    'a-acordion-6' =>   $custom['acordin16_16046'][0],
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
        <main class="col-md-9">
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
                    <h2 class="entry_title_02 mb-3"><?php echo $custom['ttuloprincipal_93731'][0]?></h2>
                    <p><?php echo $custom['descripcin_12815'][0]?></p>
                    <div id="accordion" class="row entry-content">
                        <?php

                        for ($i=1; $i < 7; $i++) { 
                            $alabel = 'a-label-' . $i;
                            $aacordion = 'a-acordion-' . $i;
                            if($acordions[$alabel] != '')
                            {

                            ?>
                                <div class="mb-3 col-12">
                                    <div class="card main__collapse">
                                        <div class="card-header" id="heading-<?php echo $i?>">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link d-flex align-items-center" data-toggle="collapse" data-target="#acordion-<?php echo $i?>" aria-expanded="true" aria-controls="acordion-<?php echo $i?>">
                                            <i class="far fa-plus-square"></i> <?php echo $acordions[$alabel];?>
                                            </button>
                                        </h4>
                                        </div>
                
                                        <div id="acordion-<?php echo $i?>" class="collapse" aria-labelledby="heading-<?php echo $i?>" data-parent="#accordion">
                                            <div class="card-body">
                                                <?php echo wpautop($acordions[$aacordion]);?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php   
                            }
                        }


                    ?>

                        

                    </div>
                </footer><!-- .entry-footer -->
        </main>
        <aside class="col-md-3"><?php get_sidebar('service');?></aside>
    </div>
</div>

<?php
get_footer();