<?php

/**
 * Add the Custom CSS section
 */
ulu_watu_Kirki::add_section( 'custom_js', array(
	'title'      => esc_attr__( 'Custom JS', 'celestial' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'icon'       => 'dashicons-editor-code',
) );

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'        => 'code',
		'settings'    => 'custom_js',
		'label'       => __( 'Custom JS', 'celestial' ),
		'description' => __( 'For additional Javascript.', 'celestial' ),
		'section'     => 'custom_js',
		'priority'    => 10,
		'choices'     => [
			'language' => 'js',
			'theme'    => 'monokai',
			'height'   => 250,
		],
	] );
