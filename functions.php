<?php
/**
 * Anton Agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Anton_Agency
 */

if ( ! function_exists( 'anton_agency_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function anton_agency_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Anton Agency, use a find and replace
		 * to change 'anton-agency' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'anton-agency', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Menú Principal', 'anton-agency' ),
			'menu-2' => esc_html__( 'Blog Menú', 'anton-agency' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	


		add_image_size( 'medium-style', 300, 200, true); // 300 pixels wide (and unlimited height)
		add_image_size( 'vertical-style', 250, 275, true ); // (cropped)
		add_image_size( 'service-thumb', 600, 300, true ); // (cropped)
		add_image_size( 'post-thumb', 300, 300, true ); // (cropped)
		add_image_size( 'portfolio-thumb', 700, 300, false); // (cropped)
	}
endif;
add_action( 'after_setup_theme', 'anton_agency_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anton_agency_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'anton_agency_content_width', 640 );
}
add_action( 'after_setup_theme', 'anton_agency_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function anton_agency_scripts() {
	//CSS

	
	//wp_enqueue_style( 'anton-agency-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '0.0.5' );
	wp_enqueue_style( 'anton-style', get_stylesheet_directory_uri() . '/css/anton-style.css', array(), '0.0.5' );
	

	//JS
	//wp_enqueue_script( 'anton-agency-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//wp_enqueue_script( 'anton-agency-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap.bundle.min', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'anton_agency_scripts' );


function anton_agency_scripts_theme_option() {
	wp_enqueue_style('wp_theme_settings', get_template_directory_uri().'/css/wp_theme_settings.css');
	wp_enqueue_script('wp_theme_settings',get_template_directory_uri() . '/js/wp_theme_settings.min.js', array('jquery'));
}
add_action( 'admin_enqueue_scripts', 'anton_agency_scripts_theme_option' );







/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// Habilitar imaenes SVG
add_filter('upload_mimes', 'my_upload_mimes');
 
function my_upload_mimes($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}



///////////////////////////////////////////////////////////////////////////////////////

//                    ACORTAR OS TITULOS POR PALABRAS

///////////////////////////////////////////////////////////////////////////////////////

//Acortando títulos por palabras
function titulo_corto($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	return $mytitle;
}
/**
 * Theme Option.
 */
require_once('wp_theme_settings.php'); 
/**
 * Theme option attributes.
 */
require get_template_directory() . '/inc/theme-option.php';

/**
 * Guide Metabox
 */
require get_template_directory() . '/inc/guide-metabox.php';

/**
 * Acordions Metabox
 */
require get_template_directory() . '/inc/acordions-metaboxes.php';

/**
 * header Metabox
 */
require get_template_directory() . '/inc/header-metaboxes.php';

/**
 * Walker Menu.
 */
require get_template_directory() . '/inc/bs4navwalker.php';

/**
 * Author Widgets.
 */
require get_template_directory() . '/inc/author-widget.php';

/**
 * Author Box
 */
require get_template_directory() . '/inc/author-box.php';

/**
 * SWidget CTA
 */

require get_template_directory() . '/inc/widget-cta.php';

/**
 * Sidebar
 */

require get_template_directory() . '/inc/sidebars.php';