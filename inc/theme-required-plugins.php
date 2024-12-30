<?php

add_action( 'tgmpa_register', 'most_register_required_plugins' );

function most_register_required_plugins() {

	$source = 'https://theme.madsparrow.me/plugins/';

	$plugins = array(

		array(
			'name' => esc_html__( 'Elementor Page Builder', 'most' ),
			'slug' => 'elementor',
			'required' => false,
		),

		array(
			'name' => esc_html__( 'Advanced Custom Fields PRO', 'most' ),
			'slug' => 'acf_pro',
			'source' => esc_url( $source . 'advanced-custom-fields-pro.zip'),
			'required' => true,
		),

		array(
			'name' => esc_html__( 'Most Helper Plugin', 'most' ),
			'slug' => 'most_plugin',
			'source' => esc_url( $source . 'most_plugin.zip'),
			'required' => true,
		),

		array(
			'name' => esc_html__( 'Kirki', 'most' ),
			'slug' => 'kirki',
			'required' => true,
		),

		array(
			'name' => esc_html__( 'Contact Form 7', 'most' ),
			'slug' => 'contact-form-7',
			'required' => true,
		),

		array(
			'name' => esc_html__( 'WooCommerce', 'most' ),
			'slug' => 'woocommerce',
			'required' => false,
		),

		array(
			'name' => esc_html__( 'MC4WP: Mailchimp for WordPress', 'most' ),
			'slug' => 'mailchimp-for-wp',
			'required' => false,
		),

		array(
			'name' => esc_html__( 'One Click Demo Import', 'most' ),
			'slug' => 'one-click-demo-import',
			'required' => true,
		),
	);

	$config = array(
		'id'           => 'most',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}