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
			<div class="col">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
			<div class="col">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>
			<div class="col">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
			<div class="col">
				<div class="last-column">
					<div class="logo-wrap">
						<?php dynamic_sidebar('footer-4'); ?>
					</div>
					<div class="text">
						<?php dynamic_sidebar('footer-5'); ?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
