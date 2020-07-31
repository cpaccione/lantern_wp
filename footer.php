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
				<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/lantern_white_logo.svg" alt="Lantern Footer logo">
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
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/erp_logo.svg" alt="Environmentally Responsible Publisher">	
					</div>
					<div class="text">
						<h3>Environmental Standards</h3>
						<p>Lantern is honored to be a recipient of the highest standard in environmentally responsible publishing from the Green Press Initiative.</p>	
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
