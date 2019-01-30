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
<div>
    <div class="container">
        <div class="w-100 text-center mb-5">
            <h2 class="entry_title_02"><?php echo esc_attr(get_option('sf-101')); ?></h2>
            <p><?php echo esc_attr(get_option('sf-102')); ?></p>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li><h3>Cómo trabajamos, pues...</h3></li>
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-100" role="tab" aria-controls="tab-100" aria-selected="true"><?php echo esc_attr(get_option('tabs-100')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-200" role="tab" aria-controls="tab-200" aria-selected="false"><?php echo esc_attr(get_option('tabs-103')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-300" role="tab" aria-controls="tab-300" aria-selected="false"><?php echo esc_attr(get_option('tabs-106')); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-400" role="tab" aria-controls="tab-400" aria-selected="false"><?php echo esc_attr(get_option('tabs-109')); ?></a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-100" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo esc_attr(get_option('tabs-102')); ?>" alt="Agencia de Marketing Digital  - Santo Domingo - República Dominicana"></div>
                    <div class="col-md-8 pt-5"><p><?php echo esc_attr(get_option('tabs-101')); ?></p></div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-200" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo esc_attr(get_option('tabs-105')); ?>" alt="Agencia de Marketing Digital  - Santo Domingo - República Dominicana"></div>
                    <div class="col-md-8 pt-5"><p><?php echo esc_attr(get_option('tabs-104')); ?></p></div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-300" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo esc_attr(get_option('tabs-108')); ?>" alt="Agencia de Marketing Digital  - Santo Domingo - República Dominicana"></div>
                    <div class="col-md-8 pt-5"><p><?php echo esc_attr(get_option('tabs-107')); ?></p></div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-400" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-md-4"><img src="<?php echo esc_attr(get_option('tabs-111')); ?>" alt="Agencia de Marketing Digital  - Santo Domingo - República Dominicana"></div>
                    <div class="col-md-8 pt-5"><p><?php echo esc_attr(get_option('tabs-110')); ?></p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content bg-grey-300">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="section-video">
                <?php 

                    $videoid = esc_attr(get_option('svideo-100'));
                        if($videoid != '')
                        {?>
                                <iframe width="auto" height="300" src="https://www.youtube.com/embed/<?php echo $videoid  ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                        <?php
                        }
                        
                    ?>
                </section>
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column">
                <h2 class="entry_title_02"><?php echo esc_attr(get_option('svideo-101')); ?></h2>
                <p><?php echo esc_attr(get_option('svideo-102')); ?></p>
                <div class="pt-3"><a href="<?php echo esc_attr(get_option('svideo-104')); ?>" class="btn-blue"><?php echo esc_attr(get_option('svideo-103')); ?></a></div>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="entry_title_02"><?php echo esc_attr(get_option('sb-100')); ?></h2>
                <p><?php echo esc_attr(get_option('sb-101')); ?></p>
            </div>
            <?php

            $post_cant = esc_attr(get_option('sb-102'));
            $args=array(
                'showposts' => $post_cant,
                );

                $customPost = new WP_Query($args);       
                    if ( $customPost->have_posts() ) :
                        while ( $customPost->have_posts() ) : $customPost->the_post();

                        get_template_part( 'template-parts/post-medium' );

                    endwhile;
                endif;
            
            
            ?>
            <div class="col-12 d-flex justify-content-center">
                <a href="<?php echo esc_attr(get_option('sb-104')); ?>" class="btn-blue"><?php echo esc_attr(get_option('sb-103')); ?></a>
            </div>
        </div>
    </div>
</div>
<div class="main-content bg-blue-400">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <section class="blue-text-box">
                    <img src="<?php echo esc_attr(get_option('sa-100')); ?>" alt="<?php the_title()?>">
                </section>
            </div>
            <div class="col-sm-6 d-flex align-items-center">
                <section class="blue-text-box">
                    <h3><?php echo esc_attr(get_option('sa-101')); ?></h3>
                    <h2><?php echo esc_attr(get_option('sa-102')); ?></h2>
                    <p><?php echo esc_attr(get_option('sa-103')); ?></p>
                    
                    <?php

                    $btntext = esc_attr(get_option('sa-104'));

                    if($btntext !=''){
                        echo '<a href="' . esc_attr(get_option('sa-105')) . '" class="btn-orange">' . esc_attr(get_option('sa-104')) . '</a>';
                    }

                    ?>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="entry_title_02"><?php echo esc_attr(get_option('client-100')); ?></h2>
                <p><?php echo esc_attr(get_option('client-101')); ?></p>
            </div>
            <div class="col-sm-3">
                <section class="clients-section">
                    <img src="<?php echo esc_attr(get_option('client-103')); ?>" alt="Agencia de Marketing Digital - Digital Agency Marketing">
                </section>
            </div>
            <div class="col-sm-3">
                <section class="clients-section">
                    <?php

                        $client_text = esc_attr(get_option('client-106'));

                        if($client_text != ''){
                            echo '<p>' . $client_text . '</p>';
                            echo '<div class="client-video row">';
                                echo '<div class="col-6"><img src="' . esc_attr(get_option('client-102')) . '" alt="Agencia de Marketing Digital - Digital Agency Marketing"></div>';
                                echo '<div class="col-6 d-flex align-items-center"><a href="#">Ver Video</a></div>';
                            echo '</div>';
                        }else{
                            echo '<img src="' . esc_attr(get_option('client-102')) . '" alt="Agencia de Marketing Digital - Digital Agency Marketing">';
                        }

                    ?>        
                </section>
            </div>
            <div class="col-sm-3">
                <section class="clients-section">
                    <img src="<?php echo esc_attr(get_option('client-104')); ?>" alt="Agencia de Marketing Digital - Digital Agency Marketing">
                </section>
            </div>
            <div class="col-sm-3">
                <section class="clients-section">
                    <img src="<?php echo esc_attr(get_option('client-105')); ?>" alt="Agencia de Marketing Digital - Digital Agency Marketing">
                </section>
            </div>
        </div>
    </div>
</dive>
<?php
get_footer();