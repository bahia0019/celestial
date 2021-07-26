<?php
/**
 * Add the Site Style section.
 */

ulu_watu_Kirki::add_panel( 'site_styles', array(
	'title' => esc_html__( 'Site Styles', 'celestial' ),
	'icon'  => 'dashicons-admin-appearance',
) );


/********************************
 * Add the Color section
******************************* */
ulu_watu_Kirki::add_section( 'site_colors', array(
	'title'      => esc_attr__( 'Site Colors', 'celestial' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'site_styles',
	'icon'       => 'dashicons-admin-customizer',
) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'site_background_color',
		'label'       => __( 'Site Background Color', 'celestial' ),
		'description' => __( 'Change the background color of the site.', 'celestial' ),
		'section'     => 'site_colors',
		'default'     => '#ffffff',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'custom',
		'settings' => 'divide_1',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'color',
		'settings' => 'menu_background_color',
		'label'    => __( 'Menu Background Color', 'celestial' ),
		'section'  => 'site_colors',
		'default'  => '#ffffff',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'color',
		'settings' => 'menu_item_color',
		'label'    => __( 'Menu Item Color', 'celestial' ),
		'section'  => 'site_colors',
		'default'  => '#666',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'color',
		'settings' => 'menu_item_hover_color',
		'label'    => __( 'Menu Item Hover Color', 'celestial' ),
		'section'  => 'site_colors',
		'default'  => '#999',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'custom',
		'settings' => 'divide_2',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));


	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'heading_color',
		'label'       => __( 'Titles & Headings Color', 'celestial' ),
		'description' => __( 'Color for all Blog and Page titles and headings.', 'celestial' ),		
		'section'     => 'site_colors',
		'default'     => '#666',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'heading_hover_color',
		'label'       => __( 'Titles & Headings Hover Color', 'celestial' ),
		'description' => __( 'Color for all titles and headings when hovered over by mouse.', 'celestial' ),				
		'section'     => 'site_colors',
		'default'     => '#222',
	));

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'custom',
		'settings' => 'divide_3',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'text_color',
		'label'       => __( 'Main Body Text Color', 'celestial' ),
		'description' => __( 'Color for regular text.', 'celestial' ),				
		'section'     => 'site_colors',
		'default'     => '#666',
	));

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'custom',
		'settings' => 'divide_4',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'site_accent_color',
		'label'       => __( 'Accent Color', 'celestial' ),
		'description' => __( 'Color for Links and Buttons.', 'celestial' ),
		'section'     => 'site_colors',
		'default'     => '#000',
	));

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'site_accent_hover_color',
		'label'       => __( 'Accent Hover Color', 'celestial' ),
		'description' => __( 'Color for Links, Buttons when hovered over by mouse.', 'celestial' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_color',
		'label'       => __( 'Accent Text Color.', 'celestial' ),	
		'description' => __( 'Color for text on buttons.', 'celestial' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
	));

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_hover_color',
		'label'       => __( 'Accent Text Hover Color', 'celestial' ),
		'description' => __( 'Color for Button Text when hovered.', 'celestial' ),	
		'section'     => 'site_colors',
		'default'     => '#000',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'custom',
		'settings' => 'divide_5',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'radio',
		'settings'    => 'footer_color_select',
		'label'       => esc_html__( 'Footer Colors', 'celestial' ),
		'description' => __( 'Leave the footer colors that same as Accent color, or change them?', 'celestial' ),	
		'section'     => 'site_colors',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'1' => esc_html__( 'Same as Site Accent Colors.', 'celestial' ),
			'2' => esc_html__( 'Unique Footer colors.', 'celestial' ),
		],
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'            => 'color',
		'settings'        => 'footer_color',
		'label'           => __( 'Footer Color', 'celestial' ),
		'section'         => 'site_colors',
		'default'         => '#1f2022',
		'active_callback' => [
			[
				'setting'  => 'footer_color_select',
				'operator' => '=',
				'value'    => '2',
			],
		],
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'            => 'color',
		'settings'        => 'footer_text_color',
		'label'           => __( 'Footer Text Color', 'celestial' ),
		'description'     => __( 'Color for Button Text & Menu Text when hovered over by mouse.', 'celestial' ),										
		'section'         => 'site_colors',
		'default'         => '#fff',
		'active_callback' => [
			[
				'setting'  => 'footer_color_select',
				'operator' => '=',
				'value'    => '2',
			],
		],
	) );


	/********************************
	 * Add the Typography section
	******************************* */
	ulu_watu_Kirki::add_section( 'typography', array(
		'title'      => esc_attr__( 'Typography', 'celestial' ),
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'panel'      => 'site_styles',
		'icon'       => 'dashicons-editor-italic',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'typography',
		'settings'    => 'menu_font',
		'label'       => esc_attr__( 'Menu Typography', 'celestial' ),
		'description' => esc_attr__( 'Select the typography options for your menu.', 'celestial' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family' => 'Didact Gothic',
			'font-size'   => '16px',
		),
		'output'      => array(
			array(
				'element' => array(
					'.main-navigation li a',
					'button.menu-toggle',
					'.btn',
					'button', 
					'input',
				),
			),
		),
	) );

	/**
	* Headings.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'typography',
		'settings'    => 'headers_typography',
		'label'       => esc_attr__( 'Headings Typography', 'celestial' ),
		'description' => esc_attr__( 'Select the typography options for your headings.', 'celestial' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'celestial' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family' => 'Cormorant Garamond',
		),
		'output'      => array(
			array(
				'element' => array( 'h1', '.h1', 'h2', '.h2', 'h3', '.h3', 'h4', '.h4', 'h5', '.h5', 'h6', '.h6' ),
			),
		),
	) );

	/**
	* Body font.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'typography',
		'settings'    => 'body_typography',
		'label'       => esc_attr__( 'Body Typography', 'celestial' ),
		'description' => esc_attr__( 'Select the main typography options for your site.', 'celestial' ),
		'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'celestial' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family' => 'Quattrocento Sans',
			'font-size'   => '16px',
		),
		'output'      => array(
			array(
				'element' => 'body',
			),
		),
	) );

	/**
	* Handwritten fonts.
	*/
	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'        => 'typography',
		'settings'    => 'handwriting_typography',
		'label'       => esc_attr__( 'Handwriting Typography', 'celestial' ),
		'description' => esc_attr__( 'Select a Handwritten font for client testimonial signatures.', 'celestial' ),
		'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'celestial' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family' => 'Dancing Script',
			'font-size'   => '20px',
		),
		'output'      => array(
			array(
				'element' => array( '.handwrite', 'blockquote' ),
			),
		),
	) );

	/**
	 * Add the Image Appearance section
	 */
	ulu_watu_Kirki::add_section( 'image_appearance', array(
		'title'      => esc_attr__( 'Image Appearance', 'celestial' ),
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'panel'      => 'site_styles',
		'icon'       => 'dashicons-format-image',
	) );

	ulu_watu_Kirki::add_field( 'celestial', array(
		'type'     => 'color',
		'settings' => 'caption_background_color',
		'label'    => __( 'Caption Background Color', 'celestial' ),
		'section'  => 'image_appearance',
		'default'  => 'rgba( 0,0,0,.8 )',
		'priority' => 10,
		'choices'  => array(
			'alpha' => true,
		),
	) );


	ulu_watu_Kirki::add_field( 'celestial', array(
	'type'        => 'custom',
	'settings'    => 'custom_setting',
	'label'       => esc_html__( 'This is the label', 'celestial' ), // optional
	'section'     => 'image_appearance',
	'default'     => '<a target="_blank" rel="noreferrer noopener" href="https://api.instagram.com/oauth/authorize?client_id=694210598012666&redirect_uri=https://flauntsites.com/instagram-redirect-page/&scope=user_profile,user_media&response_type=code"><button">' . __( 'Click to Authorize Instagram', 'kirki' ) . '</button></a>',
	'priority'    => 10,
	 ) );

