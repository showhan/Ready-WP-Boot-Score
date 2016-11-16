<?php
/**
 * The template for displaying the footer.
 *
 * @package Ready_WP_Boot_Score
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="ft-1">
							<?php dynamic_sidebar("footer-1"); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="ft-2">
							<?php dynamic_sidebar("footer-2"); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="ft-3">
							<?php dynamic_sidebar("footer-3"); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info footer-bottom">
			<div class="container">
				<a href="<?php echo esc_url( __( bloginfo('url'), 'rwpbs' ) ); ?>"><?php printf( esc_html__( bloginfo('name'), 'rwpbs' )); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'rwpbs' ), 'rwpbs', '<a href="http://showhan.net/" rel="designer">Showhan Ahmed</a>' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
