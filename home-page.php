<?php
/**
 * Template Name: Home Page
 * The main template file.
 * @package Anton_Agency
 */

get_header();


?>
<header class="main-home-header">
    <video height="1080" loop="" autoplay="" muted="">
        <source src="<?php echo esc_attr(get_option('sf-100')); ?>" type="video/webm" title="Agencia de Marketing Digital &amp; Diseño Creativo.">
    </video>
</header>

<div class="container-fluid">
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="entry_title_02"><?php echo esc_attr(get_option('sf-101')); ?></h1>
                <h2><?php echo esc_attr(get_option('sf-102')); ?></h2>
                <p class="pt-3"><?php echo esc_attr(get_option('sf-103')); ?></p>
            </div>
            <div class="col-12 text-center">
                <p><?php echo esc_attr(get_option('sf-104')); ?></p>
            </div>
            <?php

            $count = 100;
            for ($i=0; $i <=3 ; $i++) { 
                $value1 = 'img-card-' . $count;
                $value2 = 'img-card-' . ($count+1);
                $value3 = 'img-card-' . ($count+2);

                $showblocks = get_option($value1);
                if($showblocks != '')
                {
                    
                    
                    echo '<div class="col-sm-4">';
                        echo  '<div class="widget-image-card">';
                            echo '<div class="widget-image-card-header">';
                                echo '<img src="' . esc_attr(get_option($value3)) . '" alt="'. esc_attr(get_option($value1)) . '">';
                                echo '<h3>' . esc_attr(get_option($value1)) . '</h3>';
                            echo '</div>';
                            echo '<p>' . esc_attr(get_option($value2)) . '</p>';
                        echo '</div>';
                    echo '</div>';
                
            }
                $count = $count+3;

            }    

                
            ?>
            
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5 pt-5 pb-5">
                <h2><?php echo esc_attr(get_option('service-text-Title')); ?></h2>
                <p class="pt-3"><?php echo esc_attr(get_option('service-text-desc')); ?></p>
            </div>
            <?php

            $count = 100;
            for ($i=0; $i <=12 ; $i++) { 
                $value1 = 'service-text-' . $count;
                $value2 = 'service-text-' . ($count+1);
                $value3 = 'service-text-' . ($count+2);
                $value4 = 'service-text-' . ($count+3);

                $showblocks = get_option($value2);
                if($showblocks != '')
                {

                    echo '<div class="col-sm-3 mb-5">';
                            echo '<div class="row">';
                                echo '<div class="col-4">';
                                    echo '<img src="' . esc_attr(get_option($value1))  . '" alt="' . esc_attr(get_option($value2))  . '">';
                                echo '</div>';
                                echo '<div class="col-8">';
                                    echo '<a href="' . esc_attr(get_option($value4)) . '"><h3 class="entry_title_04">' . esc_attr(get_option($value2)) . '</h3></a>';
                                    echo '<p><a href="' . esc_attr(get_option($value4)) . '">' . esc_attr(get_option($value3))  . '</a></p>';
                                echo '</div>';
                            echo '</div>';
                    echo '</div>';


               }
                $count = $count+4;

            } 


            ?>
              
        </div>
    </div>
</div>
<div class="main-content bg-blue-400">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="color-blue-100"><?php echo esc_attr(get_option('client-100')); ?></h2>
                <p class="pt-3 color-blue-100"><?php echo esc_attr(get_option('client-101')); ?></p>
            </div>
            <div class="col-sm-6 mb-5">
                <div class="video-cover">
                    <label for="" class="video-play-button" data-toggle="modal" data-target="#video-play"><i class="fas fa-play"></i></label>
                    <img class="" src="<?php echo esc_attr(get_option('client-106')); ?>" alt="Agencia de Marketing Digital">
                    
                
            </div></div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="main-testimonial">
                            <img class="testimonial-cover" src="<?php echo esc_attr(get_option('client-108')); ?>" alt="Agencia de Marketing Digital">
                            <cite class="testimonial">
                               <?php echo esc_attr(get_option('client-109')); ?>
                               <small><strong><?php echo esc_attr(get_option('client-110')); ?></strong></small>
                            </cite>

                        </div>
                    </div>
                     <div class="col-sm-6 mb-3">
                        <div class="main-testimonial">
                            <img class="testimonial-cover" src="<?php echo esc_attr(get_option('client-111')); ?>" alt="Agencia de Marketing Digital">
                            <cite class="testimonial">
                                 <?php echo esc_attr(get_option('client-112')); ?>
                                <small><strong><?php echo esc_attr(get_option('client-113')); ?></strong></small>
                            </cite>
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6 mb-3"><img class="testimonial-logo" src="<?php echo esc_attr(get_option('client-102')); ?>" alt="Agencia de Marketing Digital - Digital Agency Marketing"></div>
                    <div class="col-6 mb-3"><img class="testimonial-logo" src="<?php echo esc_attr(get_option('client-103')); ?>" alt="Agencia de Marketing Digital - Digital Agency Marketing"></div>
                    <div class="col-6 mb-3"><img class="testimonial-logo" src="<?php echo esc_attr(get_option('client-104')); ?>" alt="Agencia de Marketing Digital - Digital Agency Marketing"></div>
                    <div class="col-6 mb-3"><img class="testimonial-logo" src="<?php echo esc_attr(get_option('client-105')); ?>" alt="Agencia de Marketing Digital - Digital Agency Marketing"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="video-play" tabindex="1" role="dialog" aria-labelledby="video-play" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="">
                <iframe id="ytplayer" type="text/html" width="100%" height="360" src="https://www.youtube.com/embed/<?php echo esc_attr(get_option('client-107')); ?>?controls=0&fs=0&loop=1&modestbranding=1" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
                
<?php
get_footer();