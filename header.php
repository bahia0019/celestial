<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package celestial
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php get_template_part( 'inc/customizer-styles' ); ?>
	<?php require_once 'wp-content/plugins/flaunt-sites-core/public/partials/icons.svg'; ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'celestial' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'left-menu',
				'menu_id'        => 'left-menu',
			) );
			?>

			<div class="site-branding">
			
				<?php the_custom_logo(); ?>

			</div><!-- .site-branding -->

			<?php 
			wp_nav_menu( array(
				'theme_location' => 'right-menu',
				'menu_id'        => 'right-menu',
			) );
			?>

			<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"><svg class="fs-icons"><use xlink:href="#icon-menu"></use></svg></button>
			<?php 
				wp_nav_menu( array(
					'theme_location' => 'mobile-menu',
					'menu_id'        => 'mobile-menu',
				) );
				?>
		</nav><!-- #site-navigation -->


		<div class="search-drop-down">
			<form role="search" id="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<label>
						<input type="search" class="search-field" placeholder="Search&#8230;" value="" name="s" title="Search" />
					</label>
				</form>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
