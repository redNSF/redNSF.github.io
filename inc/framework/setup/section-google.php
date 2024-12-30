<?php

$priority = 0;

new \Kirki\Field\Text(
	[
		'settings' => 'google_map_api_key',
		'label'    => esc_html__( 'Text Control', 'most' ),
        'description' => 'Get your API Key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">here</a> or read <a href="http://bsf.io/google-map-api-key" target="_blank">this article</a> for more information.',
		'section'  => 'section_google_map',
        'transport' => 'auto',
		'default' => '',
		'priority' => $priority++,
	]
);