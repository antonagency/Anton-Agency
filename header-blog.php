<?php

 get_template_part('nav');?>

<div class="main-subnavbar">
<div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-sm-1">
			<a class="logo-navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/anton-logo-blog.svg" alt="<?php the_title()?>"></a>
		</div>
		<div class="col">
			<nav class="navbar navbar-expand-md navbar-light" role="navigation">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu([
					'menu'            => 'Blog Menú',
					'theme_location'  => 'menu-2',
					'container'       => 'div',
					'container_id'    => 'bs4navbar',
					'container_class' => 'collapse navbar-collapse justify-content-start',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav mb-auto',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				]);
				?>
			</nav>
		</div>
		<div class="col">
			<?php get_search_form()?> 
		</div>
	</div>
    </div>
</div>

<div id="content" class="site-content pb-5 pt-5">