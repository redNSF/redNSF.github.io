<?php if ( ! defined( 'ABSPATH' ) ) { exit( 'Direct script access denied.' ); }

// Demo import Files
function most_demo_import_files() {
	return array(
	  	array(
		  	'import_file_name'           => 'most Demo Import',
		  	'import_file_url'            => 'https://theme.madsparrow.me/most/import/most-demo.xml',
		  	'import_widget_file_url'     => 'https://theme.madsparrow.me/most/import/widgets.wie',
			'import_customizer_file_url' => 'https://theme.madsparrow.me/most/import/customizer.dat',
	  	),
	);
}
add_filter( 'pt-ocdi/import_files', 'most_demo_import_files' );

// Disable regenerate thumbnails
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

// After setup function
if ( ! function_exists( 'most_after_import_setup' ) ) {
	function most_after_import_setup() {

		global $wp_rewrite;

		// Set menus
		$primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

		set_theme_mod( 'nav_menu_locations', [
			'primary-menu' => $primary_menu->term_id
		] );

		// Set pages
		$front_page = get_page_by_title( 'Full Page Slider' );
		if ( isset( $front_page->ID ) ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $front_page->ID );
		}

		// Update option
		update_option( 'date_format', 'M j, Y' );

		// Update permalink
		$wp_rewrite->set_permalink_structure( '/%postname%/' );

		// Set default vars for Elementor
		if ( ! get_option( 'elementor_container_width' ) ) {
			update_option( 'elementor_container_width', '1320' );
		}

		if ( ! get_option( 'elementor_space_between_widgets' ) ) {
			update_option( 'elementor_space_between_widgets', '0' );
		}

		if ( ! get_option( 'elementor_disable_color_schemes' ) ) {
			update_option( 'elementor_disable_color_schemes', 'yes' );
		}

		if ( ! get_option( 'elementor_disable_typography_schemes' ) ) {
			update_option( 'elementor_disable_typography_schemes', 'yes' );
		}

		$cpt_support = get_option( 'elementor_cpt_support' );

		// Check if option DOESN'T exist in db
		if ( ! $cpt_support ) {
			$cpt_support = [ 'page', 'post', 'portfolio' ]; // create array of our default supported post types
			update_option( 'elementor_cpt_support', $cpt_support ); // write it to the database
		}

		// If it DOES exist, but portfolio is NOT defined
		else if ( ! in_array( 'portfolio', $cpt_support ) ) {
			$cpt_support[] = 'portfolio'; // append to array
			update_option( 'elementor_cpt_support', $cpt_support ); // update database
		}

	}
}
add_action( 'pt-ocdi/after_import', 'most_after_import_setup' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );