<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Just Write
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'just-write' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'just-write' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'just-write' ), 'Just Write', '<a href="http://ryanscowles.com" rel="designer">Ryan Cowles</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php get_sidebar(); ?>
<?php wp_footer(); ?>

</body>
</html>
