<?php

$get_author_id = get_the_author_meta('ID');
$get_author_avatar = get_avatar_url($get_author_id, array('size' => 25));


if(is_front_page()){
    $colum_number = '3';
}
    elseif(is_category()){
        $colum_number = '3';
    }
    elseif(is_search()){
        $colum_number = '3';
    }
    else{
        $colum_number = '4';
    }

?>

<div class="col-sm-<?php echo $colum_number ?> mb-3">
    <article class="post-grid">
        <div class="post-grid-header">
            <a href="<?php the_permalink();?>" class="" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('medium-style', ['class' => 'animatedImage',]);?> 
            </a>
        </div>
        <div class="post-grid-body">
            <h3 class="entry_title_03"><a href="<?php the_permalink() ?>"><?php echo titulo_corto('...', 6) ?></a></h3>
            <span><?php echo '<img src="'.$get_author_avatar.'" alt="'.get_the_title().'" />' . get_the_author_meta( 'display_name', $post->post_author ); ?></span>
        </div>
    </article>
</div>