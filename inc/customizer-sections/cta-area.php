<?php 

/**
 * Add the Header Options section
 */
ulu_watu_Kirki::add_section( 'cta_options', array(
	'title'      => esc_attr__( 'Call To Action Options', 'celestial' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'icon'       => 'dashicons-megaphone',
) );

	/**
	* Display Recent Posts.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'toggle',
		'settings'    => 'footer_recent_posts',
		'label'       => esc_attr__( 'Recent Blog Posts', 'celestial' ),
		'description' => esc_attr__( 'Turn Recent Blog Post grid on or off', 'celestial' ),
		'section'     => 'cta_options',
		'default'     => '1',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'slider',
		'settings' => 'number_recent_posts_columns',
		'label'    => esc_attr__( 'Number of columns', 'celestial' ),
		'section'  => 'cta_options',
		'default'  => 4,
		'choices'  => array(
			'min'  => '3',
			'max'  => '6',
			'step' => '1',
		),
		'active_callback' => [
			[
				'setting'  => 'footer_recent_posts',
				'operator' => '=',
				'value'    => true,
			],
		],
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'slider',
		'settings' => 'number_recent_posts_rows',
		'label'    => esc_attr__( 'Number of rows', 'celestial' ),
		'section'  => 'cta_options',
		'default'  => 2,
		'choices'  => array(
			'min'  => '1',
			'max'  => '6',
			'step' => '1',
		),
		'active_callback' => [
			[
				'setting'  => 'footer_recent_posts',
				'operator' => '=',
				'value'    => true,
			],
		],
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'custom',
		'settings' => 'divide_10',
		'section'  => 'cta_options',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	) );

	/**
	* Display Testimonials.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'toggle',
		'settings'    => 'cta_testimonials',
		'label'       => esc_attr__( 'Client Testimonials', 'celestial' ),
		'description' => esc_attr__( 'Show recent client testimonials', 'celestial' ),
		'section'     => 'cta_options',
		'default'     => '1',
	) );
