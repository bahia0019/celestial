<?php 
/**
 * Inserts the social icons into the Righthand menu.
 */
function ulu_watu_insert_social($items, $args) { 
	 
	// Gets the social media icons.
	if ( true == get_theme_mod( 'header_social', true ) ) {
		ob_start();
		$social	= require 'wp-content/plugins/flaunt-sites-core/public/partials/flaunt-sites-core-public-social-header.php'; 
		$social = ob_get_clean();
	} 

	
	// Gets the Client area option.
	$options         = get_option( 'fsc_options', '' );
	$client_area_option     = $options['client_area_option'];
	$client_area_url = $options['client_area_url'];

	if ( true == $client_area_option ) :

		$client_area = '<a class="social-icon" id="clients" target="_blank" aria-label="Client Area" title="Client Area" href="';
		$client_area .= $client_area_url;
		$client_area .= '">';
		$client_area .= '<svg class="fs-icons">';
		$client_area .= '<use xlink:href="#icon-user-circle-o"></use>';
		$client_area .= '</svg>';
		$client_area .= '</a>';	

	endif; 
	
	// Gets the Search icon.
	if ( true == get_theme_mod( 'header_search', true ) ) : 

		$header_search = '<a id="icon-search" aria-label="Search" title="Search" href="#"><svg class="fs-icons"><use xlink:href="#icon-search"></use></svg></a>';
			
	endif; 


	// Places the icons inside the right side menu.
	if( $args->menu_id === 'right-menu' ){
		$items .= '<li class="social-menu">'; 
		$items .= $social;
		$items .= $client_area;
		$items .= $header_search;
		$items .= '</li>';
	}
	return $items;
}
add_filter('wp_nav_menu_right-menu_items', 'ulu_watu_insert_social', 10, 2);
