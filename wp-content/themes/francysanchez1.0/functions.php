<?php
/**
 * FrancySanchez functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FrancySanchez
 */

if ( ! function_exists( 'francysanchez_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function francysanchez_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on FrancySanchez, use a find and replace
	 * to change 'francysanchez' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'francysanchez', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'francysanchez' ),
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

	
}
endif;
add_action( 'after_setup_theme', 'francysanchez_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function francysanchez_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'francysanchez_content_width', 640 );
}
add_action( 'after_setup_theme', 'francysanchez_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function francysanchez_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'francysanchez' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'francysanchez_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function francysanchez_scripts() {
	wp_enqueue_style( 'francysanchez-style', get_stylesheet_uri() );
	wp_enqueue_style( 'Google-fonts', 'https://fonts.googleapis.com/css?family=Quattrocento:400,700' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	
	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', '', 'v3.3.6', true );

	wp_enqueue_script( 'francy-scripts', get_template_directory_uri() . '/scripts.js', '', 'v1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'francysanchez_scripts' );

function register_my_menus() {
    register_nav_menus(
            array(
                'menu-header' => __('Menú del encabezado'),
                'menu-footer' => __('Menú del footer')
                )
        );
}
add_action('init', 'register_my_menus');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



//  Adding timber menu
add_filter('timber_context', 'add_to_context');
function add_to_context($data){
    /* Now, in similar fashion, you add a Timber menu and send it along to the context. */
    $data['menu'] = new TimberMenu(); // This is where you can also send a WordPress menu slug or ID
    return $data;
}