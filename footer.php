<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lantern
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container-md">
				<div class="row">
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<div class="col-md-2">
						<?php dynamic_sidebar('footer-2'); ?>
					</div>
					<div class="col-md-2">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
					<div class="col-md-5 last-column">
						<div class="row">

							<div class="col-md-4">
								<?php dynamic_sidebar('footer-4'); ?>
							</div>

							<div class="col-md-8">
								<?php dynamic_sidebar('footer-5'); ?>
							</div>

						</div>

						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
