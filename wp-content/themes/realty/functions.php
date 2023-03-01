<?php
/**
 * REALTY functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package REALTY
 */

// загружаем стили
 function realty_enqueue_styles() {
	
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-normalize', get_template_directory_uri(). '/assets/css/normalize.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-fontello', get_template_directory_uri(). '/assets/css/fontello.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-pe-icon-7-stroke', get_template_directory_uri(). '/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-pe-icon-7-stroke-helper', get_template_directory_uri(). '/assets/fonts/icon-7-stroke/css/helper.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-animate', get_template_directory_uri(). '/assets/css/animate.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'bootstrap-select', get_template_directory_uri(). '/assets/css/bootstrap-select.min.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-icheck', get_template_directory_uri(). '/assets/css/icheck.min_all.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-price-range', get_template_directory_uri(). '/assets/css/price-range.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'owl-theme', get_template_directory_uri(). '/assets/css/owl.theme.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'owl-transitions', get_template_directory_uri(). '/assets/css/owl.transitions.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-style', get_template_directory_uri(). '/assets/css/style.css', [], '1.0.1', 'all');
	wp_enqueue_style( 'realty-responsive', get_template_directory_uri(). '/assets/css/responsive.css', [], '1.0.1', 'all');
}
add_action( 'wp_enqueue_scripts', 'realty_enqueue_styles' );

// загружаем скрипты
function realty_enqueue_scripts(){
wp_enqueue_script( 'modernizr-2.6.2', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', [], '1.0.1', 'all');
wp_enqueue_script( 'jquery-1.10.2', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js', [], '1.0.1', 'all');
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], '1.0.1', 'all');
wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', ['jquery-1.10.2', 'bootstrap'], '1.0.1', 'all');
wp_enqueue_script( 'bootstrap-hover-dropdown', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select'], '1.0.1', 'all');
wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/assets/js/easypiechart.min.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown'], '1.0.1', 'all');
wp_enqueue_script( 'jquery-easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart'], '1.0.1', 'all');
wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'jquery-easypiechart'], '1.0.1', 'all');
wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'jquery-easypiechart', 'owl-carousel'], '1.0.1', 'all');
wp_enqueue_script( 'icheck', get_template_directory_uri() . '/assets/js/icheck.min.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'jquery-easypiechart', 'owl-carousel', 'wow'], '1.0.1', 'all');
wp_enqueue_script( 'price-range', get_template_directory_uri() . '/assets/js/price-range.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'jquery-easypiechart', 'owl-carousel', 'wow', 'icheck'], '1.0.1', 'all');
wp_enqueue_script( 'realty-main.js', get_template_directory_uri() . '/assets/js/main.js', ['jquery-1.10.2', 'bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'jquery-easypiechart', 'owl-carousel', 'wow', 'icheck', 'price-range'], '1.0.1', 'all');

}
add_action( 'wp_enqueue_scripts', 'realty_enqueue_scripts' );

// загружаем мета данные

function realty_enqueue_links() {
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
	// <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	echo '<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">';
	echo '<link rel="icon" href="favicon.ico" type="image/x-icon">';
}
add_action( 'wp_head', 'realty_enqueue_links' );

function realty_theme_init() {
	register_nav_menus( array(
		'header_nav' => 'Header menu',
		'footer_nav' => 'Footer menu', 
	  ) );
	
	// load language directory
	load_theme_textdomain( 'realty', get_template_directory() . '/languages' );
}
add_action('after_setup_theme', 'realty_theme_init');

function realty_register_post_type_property() {
	$labels = array(
		'name'              => esc_html_x( 'Cities', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => esc_html_x( 'City', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => esc_html__( 'Search Cities', 'textdomain' ),
		'all_items'         => esc_html__( 'All Cities', 'textdomain' ),
		'parent_item'       => esc_html__( 'Parent City', 'textdomain' ),
		'parent_item_colon' => esc_html__( 'Parent City:', 'textdomain' ),
		'view_item'         => esc_html__( 'View City', 'textdomain' ),
		'edit_item'         => esc_html__( 'Edit City', 'textdomain' ),
		'update_item'       => esc_html__( 'Update City', 'textdomain' ),
		'add_new_item'      => esc_html__( 'Add New City', 'textdomain' ),
		'new_item_name'     => esc_html__( 'New City Name', 'textdomain' ),
		'not_found'         => esc_html__( 'No City Found', 'textdomain' ),
		'back_to_items'     => esc_html__( 'Back to Cities', 'textdomain' ),
		'menu_name'         => esc_html__( 'Cities', 'textdomain' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'cities' ),
	);
	
	register_taxonomy( 'cities', array('property'), $args);

	unset($args);

	$labels = array(
		'name'              => esc_html_x( 'Features', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => esc_html_x( 'Feature', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => esc_html__( 'Search Features', 'textdomain' ),
		'all_items'         => esc_html__( 'All Features', 'textdomain' ),
		'parent_item'       => esc_html__( 'Parent Feature', 'textdomain' ),
		'parent_item_colon' => esc_html__( 'Parent Feature:', 'textdomain' ),
		'view_item'         => esc_html__( 'View Feature', 'textdomain' ),
		'edit_item'         => esc_html__( 'Edit Feature', 'textdomain' ),
		'update_item'       => esc_html__( 'Update Feature', 'textdomain' ),
		'add_new_item'      => esc_html__( 'Add New Feature', 'textdomain' ),
		'new_item_name'     => esc_html__( 'New Feature Name', 'textdomain' ),
		'not_found'         => esc_html__( 'No Feature Found', 'textdomain' ),
		'back_to_items'     => esc_html__( 'Back to Features', 'textdomain' ),
		'menu_name'         => esc_html__( 'Features', 'textdomain' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'has_archive'		=> true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'features' ),
	);
	
	register_taxonomy( 'Features', array('property'), $args);

	unset($args);

	$args = [
		'label' => esc_html__('Properties', 'realty'),
		'public' => true,
		'show_in_menu' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-admin-generic',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
			'excerpt'
		],
		'rewrite' => array( 'slug' => 'properties' ),
	];
	register_post_type( 'property', $args);

}
add_action('init','realty_register_post_type_property');




// NOT AS

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function realty_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on REALTY, use a find and replace
		* to change 'realty' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'realty', get_template_directory() . '/languages' );

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

	// // This theme uses wp_nav_menu() in one location.
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'realty' ),
	// 	)
	// );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'realty_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'realty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function realty_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'realty_content_width', 640 );
}
add_action( 'after_setup_theme', 'realty_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function realty_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'realty' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'realty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'realty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function realty_scripts() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'realty_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

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

