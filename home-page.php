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
        <div class="row">
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
                                echo '<img src="' . $value3 . '" alt="'. $value1 . '">';
                                echo '<h3>' . $value1 . '<h3>';
                            echo '</div>';
                            echo '<p>' . $value2 . '</p>';
                        echo '</div>';
                    echo '</div>';
                
            }
                $count = $count+3;

            }    

                
            ?>
            
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