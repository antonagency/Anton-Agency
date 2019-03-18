<?php
/**
 * Template Name: Blank Page
 * The main template file.
 * @package Anton_Agency
 */

wp_head();


?>
<div class="container">
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
        </main>
    </div>
</div>