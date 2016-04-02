<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minories
 */

?>

		</div> <!-- .site-wrapper -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-wrapper">
		
			<?php get_sidebar('footer'); ?>
				
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'minories' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'minories' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'minories' ), 'minories', '<a href="http://monodot.co.uk" rel="designer">Tom Donohue</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
