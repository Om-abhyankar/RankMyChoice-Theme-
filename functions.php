<?php
/**
 * RankMyChoice Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RankMyChoice
 */

if ( ! defined( 'RANKMYCHOICE_VERSION' ) ) {
	define( 'RANKMYCHOICE_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function rankmychoice_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register menu locations
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'rankmychoice' ),
			'footer' => esc_html__( 'Footer Menu', 'rankmychoice' ),
			'social' => esc_html__( 'Social Links Menu', 'rankmychoice' ),
		)
	);

	// Switch default core markup to output valid HTML5.
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
			'rankmychoice_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'assets/css/editor-style.css' );

	// Add support for block patterns.
	add_theme_support( 'block-patterns' );
}
add_action( 'after_setup_theme', 'rankmychoice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rankmychoice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rankmychoice_content_width', 1200 );
}
add_action( 'after_setup_theme', 'rankmychoice_content_width', 0 );

/**
 * Register widget area.
 */
function rankmychoice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rankmychoice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rankmychoice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'rankmychoice' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 1.', 'rankmychoice' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'rankmychoice' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 2.', 'rankmychoice' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'rankmychoice' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 3.', 'rankmychoice' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'rankmychoice' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 4.', 'rankmychoice' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Ad', 'rankmychoice' ),
			'id'            => 'header-ad',
			'description'   => esc_html__( 'Add advertisement widgets here.', 'rankmychoice' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Content Ad', 'rankmychoice' ),
			'id'            => 'content-ad',
			'description'   => esc_html__( 'Add advertisement widgets here.', 'rankmychoice' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'rankmychoice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rankmychoice_scripts() {
	wp_enqueue_style( 'rankmychoice-style', get_stylesheet_uri(), array(), RANKMYCHOICE_VERSION );
	wp_enqueue_style( 'rankmychoice-main', get_template_directory_uri() . '/assets/css/main.css', array(), RANKMYCHOICE_VERSION );
	
	wp_enqueue_script( 'rankmychoice-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), RANKMYCHOICE_VERSION, true );
	wp_enqueue_script( 'rankmychoice-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), RANKMYCHOICE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rankmychoice_scripts' );

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
 * Block patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Add custom image sizes
 */
add_image_size( 'rankmychoice-featured', 1200, 675, true );
add_image_size( 'rankmychoice-thumbnail', 350, 200, true );
add_image_size( 'rankmychoice-square', 300, 300, true );

/**
 * Add custom classes to the body
 */
function rankmychoice_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'rankmychoice_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rankmychoice_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'rankmychoice_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Add Schema.org markup for SEO
 */
function rankmychoice_schema_org() {
	// Check if we're in the header
	if ( ! did_action( 'wp_head' ) ) {
		return;
	}

	// Default schema
	$schema = array(
		'@context'  => 'https://schema.org',
		'@type'     => 'WebSite',
		'name'      => get_bloginfo( 'name' ),
		'url'       => home_url(),
		'potentialAction' => array(
			'@type'       => 'SearchAction',
			'target'      => home_url( '/?s={search_term_string}' ),
			'query-input' => 'required name=search_term_string',
		),
	);

	// If we're on a single post or page
	if ( is_singular() ) {
		$schema = array(
			'@context' => 'https://schema.org',
			'@type'    => 'Article',
			'headline' => get_the_title(),
			'url'      => get_permalink(),
			'datePublished' => get_the_date( 'c' ),
			'dateModified'  => get_the_modified_date( 'c' ),
			'author'   => array(
				'@type' => 'Person',
				'name'  => get_the_author(),
			),
			'publisher' => array(
				'@type' => 'Organization',
				'name'  => get_bloginfo( 'name' ),
				'logo'  => array(
					'@type'  => 'ImageObject',
					'url'    => get_site_icon_url(),
				),
			),
		);

		// Add featured image if available
		if ( has_post_thumbnail() ) {
			$schema['image'] = array(
				'@type'  => 'ImageObject',
				'url'    => get_the_post_thumbnail_url( null, 'full' ),
			);
		}
	}

	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
}
add_action( 'wp_footer', 'rankmychoice_schema_org' );

