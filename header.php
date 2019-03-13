<?php

 get_template_part('nav');?>

<div class="home-nav " id="home-nav">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-8">
					<a class="navbar-brand" href="<?php echo site_url(); ?>"><img id="main-blue-logo" src="<?php echo get_template_directory_uri()?>/img/anton-logo-white.svg" alt="<?php the_title()?>"></a>
			</div>
			<div class="col-md-8 col-4">
				<nav class="navbar navbar-expand-md navbar-light nav-index" role="navigation">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
					wp_nav_menu([
						'menu'            => 'Menú Principal',
						'theme_location'  => 'menu-1',
						'container'       => 'div',
						'container_id'    => 'bs4navbar',
						'container_class' => 'collapse navbar-collapse justify-content-end',
						'menu_id'         => false,
						'menu_class'      => 'navbar-nav navbar-blue-menu mb-auto',
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


	<div id="content" class="site-content">
