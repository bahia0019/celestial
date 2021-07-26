<?php 
/**
* Renders styles from the Customizer and outputs it to Head.
* 
* @package celestial
*/
?>

<style type="text/css">

/*--------------------
BASE (MOBILE) SIZE
--------------------*/

body{
	background:<?php echo get_theme_mod( 'site_background_color' ); ?>;
	color:<?php echo get_theme_mod( 'text_color' ); ?>;
}

.main-navigation {
	background-color:<?php echo get_theme_mod( 'menu_background_color' ); ?>;
}

.site-header a .fs-icons, .main-navigation li a{
	color:<?php echo get_theme_mod( 'menu_item_color', '#404040' ); ?>;
	fill:<?php echo get_theme_mod( 'menu_item_color', '#404040' );?>;
	
}
.site-header a .fs-icons:hover, .main-navigation li a:hover{
	color:<?php echo get_theme_mod( 'menu_item_hover_color', '#404040' ); ?>;
	fill:<?php echo get_theme_mod( 'menu_item_hover_color', '#404040' ); ?>;
}

h1, h2, h3, h4, h5, h6 {
	color:<?php echo get_theme_mod( 'heading_color' ); ?>;
}

h1:hover, h2:hover, h3:hover, h4:hover, h5:hover, h6:hover {
	color:<?php echo get_theme_mod( 'heading_color_hover' ); ?>;
}

body a, {
	color:<?php echo get_theme_mod( 'site_accent_color' ); ?>;
}

.wp-block-button__link {
    color: <?php echo get_theme_mod( 'site_accent_text_color' ); ?>;
    background-color: <?php echo get_theme_mod( 'site_accent_color' ); ?>;
}

.wp-block-button__link:active, .wp-block-button__link:focus, .wp-block-button__link:hover {
    color: <?php echo get_theme_mod( 'ite_accent_text_hover_color' ); ?>;
    background-color: <?php echo get_theme_mod( 'site_accent_hover_color' ); ?>;
}

.widget-footer{
	<?php if ( 1 == get_theme_mod( 'footer_color_select' ) ) {
			echo 'background-color:' . get_theme_mod( 'site_accent_color' ) . ';';
		} else {
			echo 'background-color:' . get_theme_mod( 'footer_color' ) . ';';
		} ?>
}

.widget-footer, .footer-widget a {
	<?php 
	if ( 1 == get_theme_mod( 'footer_color_select' ) ) {
		echo 'color:' . get_theme_mod( 'site_accent_text_color' ) . ';';
	} else {
		echo 'color:' . get_theme_mod( 'footer_text_color' ) . ';';
	} ?>
}

.widget-footer a:hover{
	filter: brightness(80%);
}

</style>