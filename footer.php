<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package celestial
 */

?>


</div><!-- #content -->

<?php get_template_part( 'inc/footer-widget-area' ); ?>

	<footer class="site-info">

		<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
			<?php if ( ! is_admin() ) : ?>
			<a href="/privacy-policy" class="privacy">Privacy Policy</a>
			<?php endif; ?>
		</p>

		<p class="site-credit">
			<?php
				printf( esc_html__( 'Website Proudly Provided by: %s.', 'celestial' ), '<a href="https://flauntsites.com" rel="nofollow">Flaunt Sites</a>' );
			?>
		</p>

	</footer><!-- .site-info -->

	<?php require get_template_directory() . '/images/arrow.svg'; ?>


	<script>
		document.querySelector( '.scroll-to-top' ).addEventListener("click", function () {
			window.scrollTo({
			top: 0,
			behavior: "smooth"
		});
	})
	</script>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	<?php echo get_theme_mod( 'custom_js', '' ); ?>
	
</script>
</body>
</html>
