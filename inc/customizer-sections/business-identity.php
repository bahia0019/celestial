<?php
/**
 * Add the Site Identity Options section.
 */

ulu_watu_Kirki::add_panel( 'business_identity', array(
	'title' => esc_html__( 'Business Identity', 'celestial' ),
	'icon'  => 'dashicons-tide',
) );



/********************************
 * Add the Menu Options section
******************************* */

ulu_watu_Kirki::add_section( 'identity_logo', [
	'title'      => esc_attr__( 'Logo', 'celestial' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'business_identity',
	'icon'       => 'dashicons-tide',
]);

	ulu_watu_Kirki::add_field( 'celestial', [
		'type'        => 'image',
		'settings'    => 'fsc_logo',
		'option_type' => 'option',
		'option_name' => 'fsc_options',
		'label'       => __( 'Logo', 'celestial' ),
		'description' => __( 'Add or edit your logo here', 'celestial' ),
		'section'     => 'identity_logo',
		'default'     => '',
		'choices'     => [
			'save_as' => 'id',
		],
	]);


	ulu_watu_Kirki::add_field( 'celestial', [
		'type'     => 'slider',
		'settings' => 'ulu_watu_logo_width', //This is a THEME setting.
		'label'    => esc_attr__( 'Adjust the size of your logo here', 'celestial' ),
		'section'  => 'identity_logo',
		'default'  => 200,
		'choices'  => [
			'min'  => '100',
			'max'  => '400',
			'step' => '1',
		],
	]);


	/********************************
	 * Add the Business Info section
	******************************* */

	ulu_watu_Kirki::add_panel( 'identity_business_info', array(
		'title' => esc_attr__( 'Business Info', 'celestial' ),
		'panel' => 'business_identity',
		'icon'  => 'dashicons-admin-network',
	));

	/**
	 * Address
	 */
	ulu_watu_Kirki::add_section( 'identity_business_info_address', array(
		'title'       => esc_attr__( 'Name, Address, Phone', 'celestial' ),
		'capability'  => 'edit_theme_options',
		'panel'       => 'identity_business_info',
		'description' => __( 'Add or edit your logo here', 'celestial' ),
		'icon'        => 'dashicons-location-alt',

	) );

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'business_name',
			'label'       => esc_html__( 'Business Name', 'celestial' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'settings' => 'separator-2',
			'section'  => 'identity_business_info_address',
			'type'     => 'custom',
			'default'  => '<hr>',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'street_address_1',
			'label'       => esc_html__( 'Address Line 1', 'celestial' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'street_address_2',
			'label'       => esc_html__( 'Address Line 2', 'celestial' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'city',
			'label'       => esc_html__( 'City', 'celestial' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'state',
			'label'       => esc_html__( 'State/Province', 'celestial' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'postal_code',
			'label'       => esc_html__( 'Postal Code', 'celestial' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'separator-3',
			'section'  => 'identity_business_info_address',
			'default'  => '<hr>',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'phone',
			'label'       => esc_html__( 'Phone', 'celestial' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		/********************************
		 * Hours
		******************************* */
		$hours = [
			'01:00' => esc_html__( '1:00 AM', 'celestial' ),
			'02:00' => esc_html__( '2:00 AM', 'celestial' ),
			'03:00' => esc_html__( '3:00 AM', 'celestial' ),
			'04:00' => esc_html__( '4:00 AM', 'celestial' ),
			'05:00' => esc_html__( '5:00 AM', 'celestial' ),
			'06:00' => esc_html__( '6:00 AM', 'celestial' ),
			'07:00' => esc_html__( '7:00 AM', 'celestial' ),
			'08:00' => esc_html__( '8:00 AM', 'celestial' ),
			'09:00' => esc_html__( '9:00 AM', 'celestial' ),
			'10:00' => esc_html__( '10:00 AM', 'celestial' ),
			'11:00' => esc_html__( '11:00 AM', 'celestial' ),
			'12:00' => esc_html__( '12:00 PM', 'celestial' ),
			'13:00' => esc_html__( '1:00 PM', 'celestial' ),
			'14:00' => esc_html__( '2:00 PM', 'celestial' ),
			'15:00' => esc_html__( '3:00 PM', 'celestial' ),
			'16:00' => esc_html__( '4:00 PM', 'celestial' ),
			'17:00' => esc_html__( '5:00 PM', 'celestial' ),
			'18:00' => esc_html__( '6:00 PM', 'celestial' ),
			'19:00' => esc_html__( '7:00 PM', 'celestial' ),
			'20:00' => esc_html__( '8:00 PM', 'celestial' ),
			'21:00' => esc_html__( '9:00 PM', 'celestial' ),
			'22:00' => esc_html__( '10:00 PM', 'celestial' ),
			'23:00' => esc_html__( '11:00 PM', 'celestial' ),
			'24:00' => esc_html__( '12:00 AM', 'celestial' ),
		];


		ulu_watu_Kirki::add_section( 'identity_business_info_hours', array(
			'title'       => esc_attr__( 'Business Hours', 'celestial' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'identity_business_info',
			'description' => __( 'Include your business hours here. If you have a Google My Business profile, make sure they are exactly the same to avoid Local SEO conflicts.', 'celestial' ),
			'icon'        => 'dashicons-clock',
		) );

		// Monday.
		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'monday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Monday</h3>',
		] );

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'mon_closed',
			'label'       => esc_html__( 'Closed', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'mon_hour_open',
			'label'           => esc_html__( 'Open', 'celestial' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '8:00 AM',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'mon_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'mon_hour_close',
			'label'           => esc_html__( 'Close', 'celestial' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '5:00 PM',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'mon_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Tuesday.
		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'tuesday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Tuesday</h3>',
		] );

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'tue_closed',
			'label'       => esc_html__( 'Closed', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'tue_hour_open',
			'label'           => esc_html__( 'Open', 'celestial' ),
			'section'         => 'identity_business_info_hours',
			'default'         => 'Closed',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'tue_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'tue_hour_close',
			'label'           => esc_html__( 'Close', 'celestial' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'tue_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Wednesday.
		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'wednesday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Wednesday</h3>',
		] );


		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_closed',
			'label'       => esc_html__( 'Closed', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_hour_open',
			'label'       => esc_html__( 'Open', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'wed_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_hour_close',
			'label'       => esc_html__( 'Close', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'wed_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Thursday.
		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'thursday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Thursday</h3>',
		] );

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_closed',
			'label'       => esc_html__( 'Closed', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_hour_open',
			'label'       => esc_html__( 'Open', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'thu_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_hour_close',
			'label'       => esc_html__( 'Close', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'thu_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Friday.
		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'friday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Friday</h3>',
		] );

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_closed',
			'label'       => esc_html__( 'Closed', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_hour_open',
			'label'       => esc_html__( 'Open', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'fri_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_hour_close',
			'label'       => esc_html__( 'Close', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'fri_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Saturday.
		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'saturday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Saturday</h3>',
		] );

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_closed',
			'label'       => esc_html__( 'Closed', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_hour_open',
			'label'       => esc_html__( 'Open', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sat_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_hour_close',
			'label'       => esc_html__( 'Close', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sat_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Sunday.
		ulu_watu_Kirki::add_field( 'celestial', [
			'type'     => 'custom',
			'settings' => 'sunday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Sunday</h3>',
		] );

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_closed',
			'label'       => esc_html__( 'Closed', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_hour_open',
			'label'       => esc_html__( 'Open', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sun_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		ulu_watu_Kirki::add_field( 'celestial', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_hour_close',
			'label'       => esc_html__( 'Close', 'celestial' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sun_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);


		/********************************
		 * Add the Social Links section - (Tied to Yoast SEO for Schema)
		 ******************************* */

		ulu_watu_Kirki::add_section( 'social-links', array(
			'title'       => esc_attr__( 'Social Links', 'celestial' ),
			'description' => __( 'Add your social media links here.', 'celestial' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'business_identity',
			'icon'        => 'dashicons-facebook',
		) );

		ulu_watu_Kirki::add_field( 'celestial', array(
			'type'        => 'link',
			'settings'    => 'facebook_site',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Facebook URL', 'celestial' ),
			'description' => __( 'Include the https://', 'celestial' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		));

		ulu_watu_Kirki::add_field( 'celestial', array(
			'type'        => 'text',
			'settings'    => 'twitter_site',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Twitter Username', 'celestial' ),
			'description' => __( 'Don\'t include @', 'celestial' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		ulu_watu_Kirki::add_field( 'celestial', array(
			'type'        => 'link',
			'settings'    => 'instagram_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Instagram URL', 'celestial' ),
			'description' => __( 'Include the https://', 'celestial' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		ulu_watu_Kirki::add_field( 'celestial', array(
			'type'        => 'link',
			'settings'    => 'pinterest_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Pinterest URL', 'celestial' ),
			'description' => __( 'Include the https://', 'celestial' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		ulu_watu_Kirki::add_field( 'celestial', array(
			'type'        => 'link',
			'settings'    => 'youtube_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'YouTube URL', 'celestial' ),
			'description' => __( 'Include the https://', 'celestial' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );

		ulu_watu_Kirki::add_field( 'celestial', array(
			'type'        => 'link',
			'settings'    => 'linkedin_url',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'LinkedIn URL', 'celestial' ),
			'description' => __( 'Include the https://', 'celestial' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
		) );
