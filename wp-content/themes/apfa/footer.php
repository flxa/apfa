<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="http://www.austpigeonfanciers.com.au/">&copy; <?php echo date('Y'); ?> APFA</a>
				<span class="footer-right">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19" height="32" viewBox="0 0 19 32" class="footer-phone">
						<g>
							<path d="M1.5 32h16c0.827 0 1.5-0.673 1.5-1.5v-29c0-0.827-0.673-1.5-1.5-1.5h-16c-0.827 0-1.5 0.673-1.5 1.5v29c0 0.827 0.673 1.5 1.5 1.5zM1 1.5c0-0.276 0.224-0.5 0.5-0.5h16c0.276 0 0.5 0.224 0.5 0.5v29c0 0.276-0.224 0.5-0.5 0.5h-16c-0.276 0-0.5-0.224-0.5-0.5v-29zM2.5 27h14c0.276 0 0.5-0.224 0.5-0.5v-21c0-0.276-0.224-0.5-0.5-0.5h-14c-0.276 0-0.5 0.224-0.5 0.5v21c0 0.276 0.224 0.5 0.5 0.5zM3 6h13v20h-13v-20zM9 29c0 0.552 0.448 1 1 1s1-0.448 1-1c0-0.552-0.448-1-1-1-0.552 0-1 0.448-1 1zM7.5 4h4c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5h-4c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5z" fill="#ffffff" />
						</g>
					</svg>
					+ 61 1300 766 622
				</span>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>