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
    <div class="container">
    <?php

        if(is_active_sidebar('home-01')): 
            dynamic_sidebar('home-01');
        endif;

        ?>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <?php

            if(is_active_sidebar('home-02')): 
                dynamic_sidebar('home-02');
            endif;

            ?>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <?php

            if(is_active_sidebar('home-03')): 
                dynamic_sidebar('home-03');
            endif;

            ?>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <?php

            if(is_active_sidebar('home-04')): 
                dynamic_sidebar('home-04');
            endif;

            ?>
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