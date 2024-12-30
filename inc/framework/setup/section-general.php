<?php

/**
 * General
 */
$priority = 0;

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'page_transition',
		'label'       => esc_html__( 'Page transition', 'most' ),
		'section'     => 'section_general_settings',
		'default'     => 'off',
		'priority' => $priority++,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'most' ),
			'off' => esc_html__( 'Disable', 'most' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'top_btn',
		'label'       => esc_html__( 'Back To Top Button', 'most' ),
		'section'     => 'section_general_settings',
		'default'     => 'off',
		'priority' => $priority++,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'most' ),
			'off' => esc_html__( 'Disable', 'most' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'mode_switcher',
		'label'       => esc_html__( 'Theme Mode Switcher', 'most' ),
		'section'     => 'section_general_settings',
		'default'     => 'off',
		'priority' => $priority++,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'most' ),
			'off' => esc_html__( 'Disable', 'most' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'portfolio_pagination',
		'label'       => esc_html__( 'Single Portfolio Pagination', 'most' ),
		'section'     => 'section_general_settings',
		'default'     => 'on',
		'priority' => $priority++,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'most' ),
			'off' => esc_html__( 'Disable', 'most' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'portfolio_pagination_style',
		'label'       => esc_html__( 'Select Control', 'most' ),
		'section'     => 'section_general_settings',
		'default'     => 'next',
		'priority' => $priority++,
		'placeholder' => esc_html__( 'Choose an option', 'most' ),
		'choices'     => [
			'prev_next' => esc_html__( 'Show Prev and Next', 'most' ),
			'next' => esc_html__( 'Show Next Only', 'most' ),
		],
		'active_callback' => [
			[
                'setting'   => 'portfolio_pagination',
                'operator'  => '===',
                'value'     => true,
			]
		],
	]
);