<?php

/**
 * @author: MadSparrow
 * @version: 1.0.0
 */

/**
 * Upload SVG for Elementor
 */
if ( ! function_exists( 'most_unfiltered_files_upload' ) ) {
	function most_unfiltered_files_upload() {

		// if exists, assign to $cpt_support var
		$cpt_support = get_option( 'elementor_unfiltered_files_upload' );

		// check if option DOESN'T exist in db
		if( ! $cpt_support ) {
			$cpt_support = '1'; //create string value default to enable upload svg
			update_option( 'elementor_unfiltered_files_upload', $cpt_support ); //write it to the database
		}
	}
}
add_action( 'elementor/init', 'most_unfiltered_files_upload' );

/**
 * most Widgets Priority
 */
if ( ! class_exists( 'ElementorPro\Plugin' ) ) {
	add_filter( 'elementor/editor/localize_settings', function( $settings ) {
		if ( ! empty( $settings[ 'promotionWidgets' ] ) ) {
			$settings[ 'promotionWidgets' ] = [];
		}
		return $settings;
	}, 20 );
}

/**
 * Add Navbar Offset
 */
add_action( 'elementor/element/section/section_typo/after_section_end', function( $section, $args ) {

	$section->start_controls_section(
		'section_navbar_offset', [
			'label' => esc_html__( 'Navbar Offset', 'most' ),
			'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		]
	);

	$section->add_control(
		'navbar_offset', [
			'label' => esc_html__( 'Navbar Offset', 'most' ),
			'type' => Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'has-navbar-offset',
			'prefix_class' => ''
		]
	);

	$section->add_control(
		'navbar_offset_padding', [
			'label' => esc_html__( 'Navbar Offset (With Padding)', 'most' ),
			'type' => Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'has-navbar-offset-padding',
			'prefix_class' => ''
		]
	);

	$section->end_controls_section();

}, 10, 2 );

/**
 * Add Vertical Lines
 */
add_action( 'elementor/element/section/section_typo/after_section_end', function( $section, $args ) {

	$section->start_controls_section(
		'section_vertical_lines', [
			'label' => esc_html__( 'Vertical Lines', 'most' ),
			'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		]
	);

	$section->add_control(
		'vertical_lines_class', [
			'label' => esc_html__( 'Vertical Lines', 'most' ),
			'type' => Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'has-vertical-lines',
			'prefix_class' => ''
		]
	);

	$section->add_control(
		'lines_z_index', [
			'label' => esc_html__( 'Z-Index', 'most' ),
			'type' => Elementor\Controls_Manager::NUMBER,
			'min' => -1,
			'default' => -1,
			'selectors' => [
				'{{WRAPPER}} .vlt-vertical-lines' => 'z-index: {{VALUE}};'
			],
			'condition' => [
				'vertical_lines_class' => 'has-vertical-lines'
			]
		]
	);

	$section->add_control(
		'lines_color', [
			'label' => esc_html__( 'Color', 'most' ),
			'type' => Elementor\Controls_Manager::COLOR,
			'selectors' => [
				'{{WRAPPER}} .vlt-vertical-lines' => '--vlt-color: {{VALUE}};'
			],
			'condition' => [
				'vertical_lines_class' => 'has-vertical-lines'
			],
		]
	);

	$section->end_controls_section();

}, 10, 2 );

/**
 * Include
 */
add_action( 'elementor/init', function() {
	require_once MOST_REQUIRE_DIRECTORY . 'inc/elementor/column.php';
} );