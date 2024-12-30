<?php

$priority = 0;

/**
 * Theme Mode
 */
new \Kirki\Field\Radio_Buttonset(
	[
        'settings'    => 'theme_mode',
        'label'       => esc_html__( 'Select Default Website Mode', 'most' ),
        'section'     => 'colors_schemes',
        'default'     => 'light',
        'priority'    => $priority++,
        'choices'     => [
            'light'   => esc_html__( 'Light Mode', 'most' ),
            'dark'    => esc_html__( 'Dark Mode', 'most' ),
        ],
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<br>',
        'priority' => $priority++,
    ]
);

new \Kirki\Field\Custom(
	[
    'type' => 'custom',
    'settings' => 'sg_1',
    'section' => 'colors_schemes',
    'default' => '<div class="mode-kirki-separator">' . esc_html__( 'Light Mode', 'most' ) . '</div>',
    'priority' => $priority++,
    ]
);

/**
 * Primary Color (Light Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'accent_color',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Accent Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(12, 85%, 58%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="light"]',
                'property' => '--color-primary',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Higher (Light Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'primary_color1',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Primary Text Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 0%, 0%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="light"]',
                'property' => '--color-contrast-higher',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Higher (Light Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'primary_color_high',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast High', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 0%, 17%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="light"]',
                'property' => '--color-contrast-high',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Medium (Light Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'contrast_color2',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast Medium', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => true 
        ),
        'default' => 'hsl(0, 0%, 46%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="light"]',
                'property' => '--color-contrast-medium',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Low (Light Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'contrast_low',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast Low', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => true 
        ),
        'default' => 'hsl(0, 0%, 91%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="light"]',
                'property' => '--color-contrast-low',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Lower (Light Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'contrast_lower',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast Lower', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => true 
        ),
        'default' => 'hsl(0, 0%, 97%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="light"]',
                'property' => '--color-contrast-lower',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Background Color Light
 */
new \Kirki\Field\Color(
	[
        'settings' => 'bg_color_light',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Background Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 0%, 100%)',
            'output'    => [
            [
                'element'  => ':root, [data-theme="light"]',
                'property' => '--color-bg',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Footer Background Color Light
 */
new \Kirki\Field\Color(
	[
        'settings' => 'footer_bg_light',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Footer Background Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 0%, 95%)',
            'output'    => [
            [
                'element'  => 'body[data-theme=light] .ms-footer',
                'property' => 'background-color',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '',
        'priority' => $priority++,
    ]
);

/**
 * Primary Color (Dark Mode)
 */
new \Kirki\Field\Custom(
	[
    'type' => 'custom',
    'settings' => 'sg_2',
    'section' => 'colors_schemes',
    'default' => '<div class="mode-kirki-separator">' . esc_html__( 'Dark Mode', 'most' ) . '</div>',
    'priority' => $priority++,
    ]
);

new \Kirki\Field\Color(
	[
        'settings' => 'accent_color_d',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Accent Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(12, 85%, 58%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="dark"]',
                'property' => '--color-primary',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Higher (Dark Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'primary_color_dark_1',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Primary Text Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 100%, 99%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="dark"]',
                'property' => '--color-contrast-higher',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast High (Dark Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'primary_color_high_d',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast High', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 0%, 81%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="dark"]',
                'property' => '--color-contrast-high',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Medium (Dark Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'contrast_color_dark_2',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast Medium', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => true 
        ),
        'default' => 'hsl(0, 0%, 57%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="dark"]',
                'property' => '--color-contrast-medium',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Low (Dark Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'contrast_low_2',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast Low', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => true 
        ),
        'default' => 'hsl(0, 0%, 22%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="dark"]',
                'property' => '--color-contrast-low',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Contrast Lower (Dark Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'contrast_lower_2',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Color Contrast Lower', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => true 
        ),
        'default' => 'hsl(0, 0%, 15%)',
        'output'    => [
            [
                'element'  => ':root, [data-theme="dark"]',
                'property' => '--color-contrast-lower',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Background Color (Dark Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'bg_color',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Background Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 0%, 11%)',
            'output'    => [
            [
                'element'  => ':root, [data-theme="dark"]',
                'property' => '--color-bg',
            ],
        ],
        'transport' => 'auto',
    ]
);

// Separator
new \Kirki\Field\Custom(
	[
        'settings'    => 'separator' . $priority++,
        'section'     => 'colors_schemes',
        'default'     => '<hr>',
        'priority' => $priority++,
    ]
);

/**
 * Footer Background (Dark Mode)
 */
new \Kirki\Field\Color(
	[
        'settings' => 'footer_bg_dark',
        'section' => 'colors_schemes',
        'label' => esc_html__( 'Footer Background Color', 'most' ),
        'priority' => $priority++,
        'choices' => array(
            'alpha' => false 
        ),
        'default' => 'hsl(0, 0%, 15%)',
            'output'    => [
            [
                'element'  => 'body[data-theme=dark] .ms-footer',
                'property' => 'background-color',
            ],
        ],
        'transport' => 'auto',
    ]
);