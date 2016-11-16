<?php
/**
 * Ready WP Boot Score functions and definitions.
 *
 * @package Ready_WP_Boot_Score
 */

if ( ! function_exists( 'rwpbs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function rwpbs_setup() {
	
	// Make theme available for translation.

	load_theme_textdomain( 'rwpbs', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.

	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'rwpbs' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rwpbs_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'rwpbs_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rwpbs_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'rwpbs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rwpbs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'rwpbs' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'rwpbs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'rwpbs' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'rwpbs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'rwpbs' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'rwpbs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rwpbs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rwpbs_scripts() {

	wp_enqueue_style('rwpbs-lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700');

	wp_enqueue_style('rwpbs-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');

	wp_enqueue_style('rwpbs-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style('rwpbs-custom', get_template_directory_uri() . '/css/custom.css');
	
	wp_enqueue_style( 'rwpbs-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rwpbs-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'rwpbs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rwpbs_scripts' );

// Implement the Custom Header feature.

require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.

require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.

require get_template_directory() . '/inc/extras.php';

// Customizer additions.

require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.

require get_template_directory() . '/inc/jetpack.php';

// Add Navwalker

require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

// Add Breadcrumb support

require get_template_directory() . '/inc/breadcrumbs.php';
