<?php

$priority = 0;

new \Kirki\Field\Radio_Buttonset(
    [
        'section'     => 'menu_settings',
        'settings'    => 'type_menu',
        'label' => esc_html__( 'Menu Variation', 'most' ),
        'default'     => 'default',
        'choices'     => [
            'default'   => esc_html__( 'Default', 'most' ),
            'button' => esc_html__( 'Button', 'most' ),
        ],
        'priority' => $priority++,
    ]
);

new \Kirki\Field\Background(
	[
		'settings'    => 'menu_bg',
		'label'       => esc_html__( 'Background Control', 'most' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'most' ),
		'section'     => 'menu_settings',
        'default'     => [
            'background-color'      => '#0D0E13',
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'priority' => $priority++,
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.ms-fs-menu',
			],
		],
        'required'  => array( 
            array( 
                'setting'   => 'type_menu',
                'operator'  => '==',
                'value'     => 'button'
            )
        ),
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'menu_contacts',
		'label'       => esc_html__( 'Menu Contacts', 'most' ),
		'section'     => 'menu_settings',
        'priority' => $priority++,
		'placeholder' => esc_html__( 'Choose an option', 'most' ),
        'choices'     => ms_get_elementor_templates(),
        'required'  => array( 
            array( 
                'setting'   => 'type_menu',
                'operator'  => '==',
                'value'     => 'button'
            )
        ),
	]
);