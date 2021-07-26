<?php
/**
 * Celestial functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package celestial
 */

if ( ! function_exists( 'celestial_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function celestial_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Celestial, use a find and replace
		 * to change 'celestial' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'celestial', get_template_directory() . '/languages' );

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
			'mobile-menu' => esc_html__( 'Mobile Menu', 'celestial' ),
		) );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'left-menu' => esc_html__( 'Left Menu', 'celestial' ),
		) );

		register_nav_menus( array(
			'right-menu' => esc_html__( 'Right Menu', 'celestial' ),
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
		add_theme_support( 'custom-background', apply_filters( 'celestial_custom_background_args', array(
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

		// Add support for full width blocks.
		add_theme_support('align-wide');
	}
endif;
add_action( 'after_setup_theme', 'celestial_setup' );


/**
 * Enqueue scripts and styles.
 */
function celestial_scripts() {
	wp_enqueue_style( 'celestial-style', get_stylesheet_uri(), array(), date( 'Ymd  H:i:s' )  );

	wp_enqueue_script( 'celestial-navigation', get_template_directory_uri() . '/js/navigation.js', array(), date( 'Ymd  H:i:s' ), true );

	wp_enqueue_script( 'celestial-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), date( 'Ymd  H:i:s' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'celestial-header', get_template_directory_uri() . '/js/header.js', array(), date( 'Ymd  H:i:s' ), true );
	wp_localize_script( 'celestial-header', 'fsCommonData',
		array( 
			'igUserDetails' => get_user_meta( 1, 'ig_user_details' , true),
			// 'numberInRow' => get_theme_mod( 'GET SETTING FROM KIRKI' ),
		)
	);

}
add_action( 'wp_enqueue_scripts', 'celestial_scripts' );

/**
 * De-enqueue scripts and styles that aren't needed.
 */
function celestial_dequeue_scripts() {
	// Prevents Dashicons from loading when users aren't logged in and Admin Bar isn't shown.
	if ( ! is_user_logged_in() ) {
		wp_deregister_style( 'dashicons' );
    }
}
add_action( 'wp_enqueue_scripts', 'celestial_dequeue_scripts' );

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
 * Recommend the Kirki plugin
 */
require get_template_directory() . '/inc/include-kirki.php';

/**
 * Load the Kirki Fallback class
 */
require get_template_directory() . '/inc/kirki-fallback.php';

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

/**
 * Include the Widget locations
 */
require get_template_directory() . '/inc/widgets.php';



get_template_part( 'inc/menu-social' );
