<?php
/**
 * Lantern functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lantern
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lantern_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lantern_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lantern, use a find and replace
		 * to change 'lantern' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lantern', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'lantern' ),
			)
		);

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
				'lantern_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'lantern_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lantern_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lantern_content_width', 640 );
}
add_action( 'after_setup_theme', 'lantern_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lantern_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lantern' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lantern' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lantern_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lantern_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css', array(), '1.0', 'all' );

	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', array(), '1.0', 'all');

	wp_enqueue_style( 'source-sans-pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap', array(), '1.0', 'all');

	wp_enqueue_style( 'lantern-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lantern-style', 'rtl', 'replace' );

	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.13.1/css/all.css', array(), '1.0', 'all');

	// Main CSS file
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/lantern.css', array(), '4.5', 'all');

	wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/54b0c353c1.js', array(), '1.0', true);
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery'), '1.0', true);
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lantern_scripts' );

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
 * Custom Post Types
 */
require get_template_directory() . '/inc/custom-post-types.php';

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

require get_template_directory() . '/inc/acf-block-support.php';

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lantern_register_widgets() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Books', 'stride' ),
			'id'            => 'sidebar-books',
			'description'   => esc_html__( 'Add widgets here.', 'stride' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column One', 'stride' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'stride' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Two', 'stride' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'stride' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Three', 'stride' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'stride' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Four', 'stride' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'stride' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Five', 'stride' ),
			'id'            => 'footer-5',
			'description'   => esc_html__( 'Add widgets here.', 'stride' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'lantern_register_widgets' );


// Add styles to core blocks
/**
 * Gutenberg scripts and styles
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
function be_gutenberg_scripts() {

	wp_enqueue_script(
		'be-editor', 
		get_stylesheet_directory_uri() . '/js/blocks.js', 
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), 
		filemtime( get_stylesheet_directory() . '/js/blocks.js' )
	);
}
add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );


add_filter('acf/fields/taxonomy/result', 'my_acf_fields_taxonomy_result', 10, 4);
function my_acf_fields_taxonomy_result( $text, $term, $field, $post_id ) {
    $text .= ' (' . $term->slug .  ')';
    return $text;
}


function ChangeSelectTitle($cat_args){
	$cat_args['show_option_none'] = __('Select');
	return $cat_args;
	}
	add_filter('custom_post_type_widgets/categories/widget_categories_dropdown_args', 'ChangeSelectTitle');


// do_action("search_filter_query_posts", 861);