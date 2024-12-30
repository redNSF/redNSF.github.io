<?php

define( 'MOST_THEME_DIRECTORY', esc_url( trailingslashit( get_template_directory_uri() ) ) );
define( 'MOST_REQUIRE_DIRECTORY', trailingslashit( get_template_directory() ) );
define( 'MOST_WOOCOMMERCE', class_exists( 'WooCommerce' ) ? true : false );
define( 'MOST_DEVELOPMENT', true );

/**
 * After Setup
 */

function most_setup() {

	register_nav_menus( array(
		'primary-menu' => esc_html__( 'Primary Menu', 'most' )
	) );

	load_theme_textdomain( 'most', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array('link', 'image', 'gallery', 'video', 'audio', 'quote'));
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',	) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );

	add_image_size( 'most-default-post-thumb', 1290, 684, true );
	add_image_size( 'most-card-post-thumb', 400, 268, false );
	add_image_size( 'most-list-post-thumb', 500, 288, true );
	add_image_size( 'most-portfolio-thumb', 1120, 9999, false );
	add_image_size( 'most-portfolio-nav-thumb', 1024, 768, true );
	add_image_size( 'most-recent-post-thumb', 90, 90, true );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style-editor.css' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support dark editor style
	add_theme_support( 'dark-editor-style' );

	// Editor color palette.
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Primary', 'most' ),
				'slug' => 'primary',
				'color' => '#1258ca',
			),
			array(
				'name'  => esc_html__( 'Accent', 'most' ),
				'slug' => 'accent',
				'color' => '#c70a1a',
			),
			array(
				'name'  => esc_html__( 'Success', 'most' ),
				'slug' => 'success',
				'color' => '#88c559',
			),
			array(
				'name'  => esc_html__( 'Black', 'most' ),
				'slug' => 'black',
				'color' => '#263654',
			),
			array(
				'name'  => esc_html__( 'Contrast', 'most' ),
				'slug' => 'contrast',
				'color' => '#292a2d',
			),
			array(
				'name'  => esc_html__( 'Contrast Medium', 'most' ),
				'slug' => 'contrast-medium',
				'color' => '#79797c',
			),
			array(
				'name'  => esc_html__( 'Contrast lower', 'most' ),
				'slug' => 'contrast lower',
				'color' => '#323639',
			),
			array(
				'name'  => esc_html__( 'White', 'most' ),
				'slug' => 'white',
				'color' => '#ffffff',
			)
		)
	);

	// Add custom editor font sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => __( 'Small', 'most' ),
				'shortName' => __( 'S', 'most' ),
				'size'      => 14,
				'slug'      => 'small',
			),
			array(
				'name'      => __( 'Normal', 'most' ),
				'shortName' => __( 'M', 'most' ),
				'size'      => 16,
				'slug'      => 'normal',
			),
			array(
				'name'      => __( 'Large', 'most' ),
				'shortName' => __( 'L', 'most' ),
				'size'      => 24,
				'slug'      => 'large',
			),
			array(
				'name'      => __( 'Huge', 'most' ),
				'shortName' => __( 'XL', 'most' ),
				'size'      => 28,
				'slug'      => 'huge',
			),
		)
	);

	// WooCommerce
	if ( MOST_WOOCOMMERCE ) {
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-slider' );
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 700,
			'gallery_thumbnail_image_width' => 150,
			'single_image_width' => 700,
		) );
	}
	
}

add_action( 'after_setup_theme', 'most_setup' );

/**
 * Content Width
 */
function most_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'most_content_width', 1170 );
}
add_action( 'after_setup_theme', 'most_content_width', 0 );


/**
 * Add Editor Styles
 */
function most_add_editor_styles() {
	add_editor_style( 'editor-styles.css' );
}
add_action( 'admin_init', 'most_add_editor_styles' );

/**
 * Include and IMPORT/EXPORT ACF fields via JSON
 */
if( false == MOST_DEVELOPMENT ) {
	add_filter( 'acf/settings/show_admin', '__return_false' );
	require_once MOST_REQUIRE_DIRECTORY . 'inc/helper/custom-fields/custom-fields.php';
}

function most_acf_save_json( $path ) {
	$path = MOST_REQUIRE_DIRECTORY . 'inc/helper/custom-fields';
	return $path;
}
add_filter( 'acf/settings/save_json', 'most_acf_save_json' );

function most_acf_load_json( $paths ) {
	unset( $paths[0] );
	$paths[] = MOST_REQUIRE_DIRECTORY . 'inc/helper/custom-fields';
	return $paths;
}
add_filter( 'acf/settings/load_json', 'most_acf_load_json' );

/**
 * Include required files
 */

// TGM
require_once MOST_REQUIRE_DIRECTORY . 'inc/helper/class-tgm-plugin-activation.php';
// TGM register plugins
require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-required-plugins.php';
// Style and scripts for theme
require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-enqueue.php';
require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-elementor.php';
// Theme Functions
require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-functions.php';
require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-actions.php';
require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-filters.php';
require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-demo-import.php';

/**
 * Include WooComerce
 */
if ( MOST_WOOCOMMERCE ) {
	require_once MOST_REQUIRE_DIRECTORY . 'inc/theme-woocommerce.php';
}

/**
 * Include kirki fields
 */
if ( class_exists( 'Kirki' ) ) {
	require_once MOST_REQUIRE_DIRECTORY . 'inc/framework/customizer.php';
}

function most_load_all_variants_and_subsets() {
    if ( class_exists( 'Kirki_Fonts_Google' ) ) {
        Kirki_Fonts_Google::$force_load_all_variants = true;
        Kirki_Fonts_Google::$force_load_all_subsets = true;
    }
}

add_action( 'after_setup_theme', 'most_load_all_variants_and_subsets' );