<?php

$priority = 0;

new \Kirki\Field\Select(
	[
		'settings'    => 'footer_template',
		'label'       => esc_html__( 'Select Footer Template', 'most' ),
		'section'     => 'footer_settings',
        'priority' => $priority++,
		'placeholder' => esc_html__( 'Choose an option', 'most' ),
        'choices'     => ms_get_elementor_templates(),
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'footer_parallax',
		'label'       => esc_html__( 'Parallax Effect', 'most' ),
		'section'     => 'footer_settings',
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
		'settings'    => 'footer_border_corners',
		'label'       => esc_html__( 'Round Corners', 'most' ),
		'section'     => 'footer_settings',
		'default'     => 'off',
		'priority' => $priority++,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'most' ),
			'off' => esc_html__( 'Disable', 'most' ),
		],
	]
);