<?php
/**
 * Celestial Theme Customizer
 *
 * @package celestial
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ulu_watu_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
	
	// Remove Site identity section and move to Business Identity Panel.
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->add_section( 'title_tagline',
	array(
		'title' => 'Logo',
		'panel' => 'business_identity',
		'icon'  => 'dashicons-tide',
	)
);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ulu_watu_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ulu_watu_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'ulu_watu_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ulu_watu_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ulu_watu_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ulu_watu_customize_preview_js() {
	wp_enqueue_script( 'celestial-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), date( 'Ymd' ), true );
}
add_action( 'customize_preview_init', 'ulu_watu_customize_preview_js' );


/**
 * Add the theme configuration
 */
ulu_watu_Kirki::add_config( 'celestial', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );


/**
 * Call the individual sections.
 */
require get_template_directory() . '/inc/customizer-sections/business-identity.php';
require get_template_directory() . '/inc/customizer-sections/site-styles.php';
require get_template_directory() . '/inc/customizer-sections/header-options.php';


add_action( 'customize_controls_print_styles', function() {
	?>
	<style>
	#customize-controls .customize-info .accordion-section-title{
		height:200px;
		background-image:url('<?php echo get_template_directory_uri() . '/screenshot.png'; ?>');
		background-size:cover;
	}
	.preview-notice{
		display:none;
	}
	#customize-controls .customize-info{
		margin-bottom:0;
	}
	</style>
	<?php
} );