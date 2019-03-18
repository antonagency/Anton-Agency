<?php

 get_template_part('nav');?>

<div class="main-subnavbar">
<div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-3 col-sm-1">
			<a class="logo-navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/anton-logo-blog.svg" alt="<?php the_title()?>"></a>
		</div>
		<div class="col-6 col-sm-4">
			<?php get_search_form()?> 
		</div>
		<div class="col-3 col-sm-7">
			<nav class="navbar navbar-expand-md navbar-light" role="navigation">
				<button class="navbar-toggler" onclick="getMenu()">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu([
					'menu'            => 'Blog Menú',
					'theme_location'  => 'menu-2',
					'container'       => 'div',
					'container_id'    => 'bs4navbar',
					'container_class' => 'bs4navbar justify-content-start',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav mb-auto',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				]);
				?>
			</nav>
		</div>
		
	</div>
    </div>
</div>

<div id="content" class="site-content pb-5 pt-5">