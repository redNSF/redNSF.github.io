<?php

$priority = 0;

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'setting_dimensions_1',
		'label'       => esc_html__( 'Dimensions Control', 'most' ),
		'section'     => 'header_settings',
        'priority' => $priority++,
		'default'     => [
			'width'  => '1320px',
			'height' => '70px',
		],
        'output'    => [
            [
                'choice'      => 'width',
                'element'  => ':root',
                'property' => '--main-header-width-md',
            ],
            [
                'choice'      => 'height',
                'element'  => ':root',
                'property' => '--main-header-height-md',
            ],
        ],
        'transport' => 'auto',
	]
);

new \Kirki\Field\Radio_Buttonset(
    [
    'section'     => 'header_settings',
    'settings'    => 'type_header',
    'label' => esc_html__( 'Style', 'most' ),
    'default'     => 'default',
    'choices'     => [
        'default'   => esc_html__( 'Default', 'most' ),
        'fixed' => esc_html__( 'Fixed', 'most' ),
    ],
    'priority' => $priority++,
] );

new \Kirki\Field\Radio_Buttonset(
    [
    'section'     => 'header_settings',
    'settings'    => 'menu_align',
    'label' => esc_html__( 'Menu Align', 'most' ),
    'default'     => 'right',
    'choices'     => [
        'left'   => esc_html__( 'Left', 'most' ),
        'center' => esc_html__( 'Center', 'most' ),
        'right' => esc_html__( 'Right', 'most' ),
    ],
    'priority' => $priority++,
] );

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'blur_hedaer',
		'label'       => esc_html__( 'Background Blur Effect', 'most' ),
		'section'     => 'header_settings',
		'default'     => 'on',
		'priority' => $priority++,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'most' ),
			'off' => esc_html__( 'Disable', 'most' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
    [
        'settings'    => 'search_widget',
        'label'       => esc_html__( 'Show Search', 'most' ),
        'section'     => 'header_settings',
        'default'     => 'on',
        'priority' => $priority++,
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'most' ),
            'off' => esc_html__( 'Disable', 'most' ),
        ],
    ]
);

if ( MOST_WOOCOMMERCE ) {

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'cart_widget',
            'label'       => esc_html__( 'Show Cart', 'most' ),
            'section'     => 'header_settings',
            'default'     => 'on',
            'priority' => $priority++,
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'most' ),
                'off' => esc_html__( 'Disable', 'most' ),
            ],
        ]
    );

}