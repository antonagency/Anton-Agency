<?php



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anton_agency_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'anton-agency' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'anton-agency' ),
		'before_widget' => '<section id="%1$s" class="widget-section %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Service', 'anton-agency' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'anton-agency' ),
		'before_widget' => '<section id="%1$s" class="widget-section %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 01', 'anton-agency' ),
		'id'            => 'footer-01',
		'description'   => esc_html__( 'Add widgets here.', 'anton-agency' ),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 02', 'anton-agency' ),
		'id'            => 'footer-02',
		'description'   => esc_html__( 'Add widgets here.', 'anton-agency' ),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 03', 'anton-agency' ),
		'id'            => 'footer-03',
		'description'   => esc_html__( 'Add widgets here.', 'anton-agency' ),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 04', 'anton-agency' ),
		'id'            => 'footer-04',
		'description'   => esc_html__( 'Add widgets here.', 'anton-agency' ),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    


    register_sidebar( array(
		'name'          => esc_html__( 'Home: Sección Blanca 01', 'anton-agency' ),
		'id'            => 'home-01',
		'description'   => esc_html__( 'Add widgets here.', 'anton-agency' ),
		'before_widget' => '<div id="%1$s" class="row %2$s">',
		'after_widget'  => '</div>',

	) );

}
add_action( 'widgets_init', 'anton_agency_widgets_init' );
