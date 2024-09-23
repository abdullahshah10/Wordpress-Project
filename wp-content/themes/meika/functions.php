<?php
/**
 * meika functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package meika
 */

if ( ! function_exists( 'meika_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function meika_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on meika, use a find and replace
		 * to change 'meika' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'meika', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Primary', 'meika' ),
			'side-menu' => esc_html__( 'Side Menu', 'meika' ),
			
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
		add_theme_support( 'custom-background', apply_filters( 'meika_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'meika_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function meika_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'meika_content_width', 640 );
}
add_action( 'after_setup_theme', 'meika_content_width', 0 );

////////demo xml file start + One Click Demo Import plugin///////////

function ocdi_import_files() {
	return array(
	 array(
      'import_file_name'             => 'Demo Import 1',
		'categories'                   => array( 'Category 1'),
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/ocdi/content.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/ocdi/widgets.wie',
		'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/ocdi/customizer.dat',
		 'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'inc/ocdi/redux.json',
          'option_name' => 'meika_data',
        ),
      ),
    ),

	);
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

function ocdi_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
		)
	);


	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home Page 01' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );



// post format
        add_theme_support( 'post-formats', array( 'image', 'gallery', 'audio', 'video', 'quote', 'link' ) );


/**
 * meika functions.
 */

 require get_template_directory() . '/inc/post-meta-option/meta-box-config.php';


/*
Register Fonts
*/

function meika_google_fonts() {
    wp_enqueue_style( 'meika-google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700&display=swap', false );
    wp_enqueue_style( 'meika-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'meika_google_fonts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function meika_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'meika' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'meika' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'meika_widgets_init' );


function meika_scripts() {
    
	// font custom style css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/inc/assets/css/animate.min.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/inc/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/inc/assets/fontawesome/css/all.min.css' );
	wp_enqueue_style( 'dripicons', get_template_directory_uri() . '/inc/assets/css/dripicons.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/inc/assets/css/slick.css' );
	wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/inc/assets/css/meanmenu.css' );
	wp_enqueue_style( 'meika-default', get_template_directory_uri() . '/inc/assets/css/default.css' );
	wp_enqueue_style( 'meika-style', get_template_directory_uri() . '/inc/assets/css/style.css' );
	wp_enqueue_style( 'meika-responsive', get_template_directory_uri() . '/inc/assets/css/responsive.css' );
    
    // font custom  JS
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/inc/assets/js/vendor/modernizr.js', array('jquery'), '3.5.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/inc/assets/js/slick.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'paroller', get_template_directory_uri() . '/inc/assets/js/paroller.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/inc/assets/js/wow.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/inc/assets/js/isotope.pkgd.min.js', array('jquery'), '20181786', true );	
    wp_enqueue_script( 'isotopeloaded', get_template_directory_uri() . '/inc/assets/js/isotopeloaded.min.js', array('jquery'), '20181786', true );	
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/inc/assets/js/parallax.min.js', array('jquery'), '20181786', true );   
    wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/inc/assets/js/jquery.waypoints.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/inc/assets/js/jquery.counterup.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'jquery-scrollUp', get_template_directory_uri() . '/inc/assets/js/jquery.scrollUp.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'parallax-scroll', get_template_directory_uri() . '/inc/assets/js/parallax-scroll.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'typed', get_template_directory_uri() . '/inc/assets/js/typed.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/inc/assets/js/jquery.meanmenu.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/inc/assets/js/jquery.magnific-popup.min.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'element-in-view', get_template_directory_uri() . '/inc/assets/js/element-in-view.js', array('jquery'), '20181786', true );
    wp_enqueue_script( 'meika-main', get_template_directory_uri() . '/inc/assets/js/main.js', array('jquery'), '20181786', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'meika_scripts' );

add_editor_style( '/inc/assets/css/style.css' );

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
/*
* Add Redux Framework
*/
require get_template_directory() . '/inc/admin/admin-init.php';
/**
 * extra additions.
 */
require get_template_directory() . '/inc/extra.php';

// elementor
if ( ! defined( 'wp_autoload' ) ) {
	define( 'wp_autoload', get_template_directory() );
}

if ( ! defined( 'wp_elementor' ) ) {
	define( 'wp_elementor', wp_autoload . '/inc/elementor-inc/integrations' );
}
require_once wp_autoload . '/inc/elementor-inc/autoload.php';

/*
* Add TGM plugin required
*/
require get_template_directory() . '/inc/admin/tgm/tgm-init.php';