<?php

$default_image = get_template_directory_uri() . '/images/header.jpg';

ulu_watu_Kirki::add_panel( 'header_options', array(
	'title'       => esc_html__( 'Header Options', 'celestial' ),
	'description' => esc_html__( 'My panel description', 'celestial' ),
	'icon'        => 'dashicons-menu',
) );

/********************************
 * Add the Menu Options section
 ********************************/
ulu_watu_Kirki::add_section( 'menu_options', array(
	'title'      => esc_attr__( 'Menu Options', 'celestial' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'header_options',
	'icon'       => 'dashicons-menu',
) );

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'radio',
		'settings' => 'ulu_watu_menu_behavior_option',
		'label'    => __( 'Menu Behavior', 'celestial' ),
		'section'  => 'menu_options',
		'default'  => 'absolute',
		'choices'  => [
			'absolute' => __( 'Scroll with page', 'celestial' ),
			'fixed'    => __( 'Sticky Menu', 'celestial' ),
		],
	] );

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'custom',
		'settings' => 'separator-1',
		'section'  => 'menu_options',
		'default'  => '<hr>',
	] );


	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'radio',
		'settings' => 'ulu_watu_menu_logo_option',
		'label'    => __( 'Left Half Option', 'celestial' ),
		'section'  => 'menu_options',
		'default'  => 'option-1',
		'choices'  => [
			'option-0' => __( 'None', 'celestial' ),
			'option-1' => __( 'Site Name', 'celestial' ),
			'option-2' => __( 'Logo', 'celestial' ),
			'option-3' => __( 'Social Icons', 'celestial' ),
		],
	] );

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'            => 'image',
		'settings'        => 'fsc_small_logo',
		'option_type'     => 'option',
		'option_name'     => 'fsc_options',
		'label'           => __( 'Small Logo', 'celestial' ),
		'description'     => esc_attr__( 'Use a smaller version of your logo in the menu.', 'celestial' ),
		'section'         => 'menu_options',
		'default'     => '',
		'choices'     => [
			'save_as' => 'id',
		],
		'active_callback' => [
			[
				'setting'  => 'ulu_watu_menu_logo_option',
				'operator' => '==',
				'value'    => 'option-2',
			],
		],
	] );

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'custom',
		'settings' => 'separator',
		'section'  => 'menu_options',
		'default'  => '<hr>',
	]);

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'custom',
		'settings' => 'right-half-options',
		'section'  => 'menu_options',
		'default'  => '<span class="customize-control-title">Right Half Options</span>',
	]);

	/**
	* Toggles Social On and Off.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'toggle',
		'settings'    => 'header_social',
		'label'       => esc_attr__( 'Social Icons On/Off', 'celestial' ),
		'description' => esc_attr__( 'Turn Social Icons on or off', 'celestial' ),
		'section'     => 'menu_options',
		'default'     => '1',
	) );

	/**
	* Toggles Search On and Off.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'toggle',
		'settings'    => 'header_search',
		'label'       => esc_attr__( 'Search On/Off', 'celestial' ),
		'description' => esc_attr__( 'Turn Search on or off', 'celestial' ),
		'section'     => 'menu_options',
		'default'     => '1',
	) );

	/**
	* Toggles Client Area On and Off.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'toggle',
		'option_type' => 'option',
		'option_name' => 'fsc_options',
		'settings'    => 'client_area_option',
		'label'       => esc_attr__( 'Client Area On/Off', 'celestial' ),
		'description' => esc_attr__( 'Turn Client Area button on or off', 'celestial' ),
		'section'     => 'menu_options',
		'default'     => '0',
	) );

	/**
	* Client Area Link for photographers that have a proofing site.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'            => 'text',
		'option_type'     => 'option',
		'option_name'     => 'fsc_options',
		'settings'        => 'client_area_url',
		'label'           => __( 'Client Area', 'celestial' ),
		'description'     => esc_attr__( 'If you have a proofing site, you can add the link to it here. ex: http://zenfolio.com/yourname or http://yourname.zenfolio.com', 'celestial' ),
		'section'         => 'menu_options',
		'default'         => '0',
		'transport'       => 'postMessage',
		'active_callback' => [
			[
				'setting'  => 'client_area_option',
				'operator' => '=',
				'value'    => true,
			],
		],
	) );


/********************************
 * Add the Hero Options
 ******************************* */

	ulu_watu_Kirki::add_section( 'hero_options', [
		'title'      => esc_attr__( 'Hero Options', 'celestial' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'header_options',
		'icon'       => 'dashicons-format-image',
	]);


	/**
	* Toggles Social On and Off.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'toggle',
		'settings'    => 'hero_on',
		'label'       => esc_attr__( 'Hero Images', 'celestial' ),
		'description' => esc_attr__( 'Turn hero images on for the whole site.', 'celestial' ),
		'section'     => 'hero_options',
		'default'     => '1',
	) );

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'        => 'image',
		'settings'    => 'ulu_watu_hero_image',
		'label'       => __( 'Default Hero Image', 'celestial' ),
		'description' => __( 'Hero Photo for Pages without Featured Images.', 'celestial' ),
		'section'     => 'hero_options',
		'default'     => $default_image,
		'choices'     => [
			'save_as' => 'id',
		],
	]);

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'        => 'slider',
		'settings'    => 'hero_image_tint_slider',
		'label'       => esc_attr__( 'Tint Slider', 'celestial' ),
		'description' => __( 'Adjust height of Hero Image Tint.', 'celestial' ),
		'section'     => 'hero_options',
		'default'     => 50,
		'choices'     => [
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		],
	]);

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'        => 'slider',
		'settings'    => 'mobile_hero_adjust_X',
		'label'       => esc_attr__( 'Adjust the horizontal position of your Hero Image for mobile devices', 'celestial' ),
		'description' => __( 'By default the image is centered. You can use the slider to adjust the center point on mobile devices.', 'celestial' ),        
		'section'     => 'hero_options',
		'default'     => 50,
		'choices'     => [
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		],
	]);

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'custom',
		'settings' => 'separator-4',
		'section'  => 'hero_options',
		'default'  => '<hr>',
	]);

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'custom',
		'settings' => 'hero-image-overlay-title',
		'section'  => 'hero_options',
		'default'  => '<h2>Hero Image Overlay</h2>',
	]);

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'radio',
		'settings' => 'ulu_watu_hero_logo_option',
		'label'    => __( 'Display Logo or Text', 'celestial' ),
		'section'  => 'hero_options',
		'default'  => 'option-4',
		'choices'  => [
			'option-0' => __( 'None', 'celestial' ),
			'option-1' => __( 'Logo', 'celestial' ),
			'option-2' => __( 'Logo & Description', 'celestial' ),
			'option-3' => __( 'Site Name', 'celestial' ),
			'option-4' => __( 'Site Name & Description', 'celestial' ),
		],
	]);
