<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celestial
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php if ( '1' == get_theme_mod( 'hero_on' ) ) { ?>
			<div class="post-hero">
				<?php the_post_thumbnail(); ?>
				
				<?php if ( 'option-3' || 'option-4' == get_theme_mod( 'hero_options' ) ) { ?>
					<header class="hero-entry-header">
						<?php 
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;
						?>
					</header><!-- .entry-header -->
				<?php } ?> 

			</div><!-- .post-hero -->
		<?php } ?> 

		<?php
		if ( have_posts() ) :
			
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				
				<?php
			endif; ?>
			

		<?php
			while ( have_posts() ) : the_post();

			if ( is_singular() ) :

				get_template_part( 'template-parts/content', get_post_format() );

			else :
				?>

				<article class="post-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>">
						<div class="post-info">
							<header>
								<?php the_title( '<h2>', '</h2>' ); ?>
							</header>
							<?php the_excerpt(); ?>
						</div>
						<?php the_post_thumbnail('large_square'); ?>
					</a>
				</article>

			<?php endif; ?>

			<?php endwhile; ?>

			<?php 
			the_posts_navigation();

			else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
