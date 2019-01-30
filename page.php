<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
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
        </main>
        <aside class="col-md-3"><?php get_sidebar();?></aside>
    </div>
</div>

<?php
get_footer();