<?php

$priority = 0;

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'logo_dimensions',
		'label'       => esc_html__( 'Dimensions Control', 'most' ),
		'section'     => 'logo_settings',
        'priority' => $priority++,
		'default'     => [
			'width'  => 'auto',
			'height' => '18px',
		],
        'output'    => [
            [
                'choice'      => 'width',
                'element'  => '.main-header__logo a, .main-header__logo svg, .main-header__logo img',
                'property' => 'width',
            ],
            [
                'choice'      => 'height',
                'element'  => '.main-header__logo a, .main-header__logo svg, .main-header__logo img',
                'property' => 'height',
            ],
        ],
        'transport' => 'auto',
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'logo_light',
		'label'       => esc_html__( 'Image Logo Light', 'most' ),
		'description' => esc_html__( 'For Dark Theme Mode', 'most' ),
		'section'     => 'logo_settings',
		'default'     => '',
        'priority' => $priority++
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'logo_dark',
		'label'       => esc_html__( 'Image Logo Dark', 'most' ),
		'description' => esc_html__( 'For Light Theme Mode', 'most' ),
		'section'     => 'logo_settings',
		'default'     => '',
        'priority' => $priority++
	]
);