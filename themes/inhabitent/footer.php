<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
				<div class="site-info">

					<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<a href="#" ><img src="<?php echo get_template_directory_uri() ?>/images/inhabitent-logo-text.svg" /></a>
				</div><!-- .site-info -->

				<p class="copyr" >COPYRIGHT © 2016 INHABITENT</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
