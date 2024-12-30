<?php

/**
 * @author: Mad Sparrow
 * @version: 1.0.0
 */

use Elementor\Controls_Stack;
use Elementor\Controls_Manager;
use Elementor\Element_Column;
use Elementor\Core\Base\Module;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class MS_Element_Column extends Module {

	public function __construct() {

		$this->add_actions();
	}

	public function get_name() {
		return 'ms-custom-column';
	}

	/**
	 * @param $element Controls_Stack
	 * @param $section_id string
	 */
	public function register_controls( Controls_Stack $element, $section_id ) {

		if ( ! $element instanceof Element_Column ) {
			return;
		}

		$required_section_id = 'layout';

		if ( $required_section_id !== $section_id ) {
			return;
		}

		$element->add_control(
			'_sticky-column', [
				'label' => esc_html__( 'Sticky Column', 'most' ),
				'type' => Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'has-sticky-column',
				'prefix_class' => '',
				'separator' => 'before'
			]
		);

		$element->add_control(
			'_stretch', [
				'label' => esc_html__( 'Stretch', 'most' ),
				'type' => Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'has-stretch-block',
				'prefix_class' => '',
				'separator' => 'before'
			]
		);

		$element->add_control(
			'_stretch_side', [
				'label' => esc_html__( 'Side', 'most' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'to-left',
				'options' => [
					'to-left' => esc_html__( 'Left', 'most' ),
					'to-right' => esc_html__( 'Right', 'most' )
				],
				'prefix_class' => '',
				'condition' => [
					'_stretch' => 'has-stretch-block'
				]
			]
		);

		$element->add_control(
			'_stretch_reset_mobile', [
				'label' => esc_html__( 'Reset Mobile', 'most' ),
				'type' => Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'has-reset-mobile',
				'prefix_class' => '',
				'condition' => [
					'_stretch' => 'has-stretch-block'
				]
			]
		);

		$element->add_responsive_control(
			'_column_min_width', [
				'label' => esc_html__( 'Min Width', 'most' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 800,
					],
				],
				'device_args' => [
					Controls_Stack::RESPONSIVE_DESKTOP => [
						'selectors' => [
							'{{WRAPPER}}' => 'min-width: {{SIZE}}{{UNIT}}',
						],
					],
					Controls_Stack::RESPONSIVE_TABLET => [
						'selectors' => [
							'{{WRAPPER}}' => 'min-width: {{SIZE}}{{UNIT}}',
						],
					],
					Controls_Stack::RESPONSIVE_MOBILE => [
						'selectors' => [
							'{{WRAPPER}}' => 'min-width: {{SIZE}}{{UNIT}}',
						],
					],
				],
				'separator' => 'before',
			]
		);

	}

	protected function add_actions() {
		add_action( 'elementor/element/before_section_end', [ $this, 'register_controls' ], 10, 2 );
	}

}

new MS_Element_Column();