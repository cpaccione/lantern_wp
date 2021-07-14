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
		<div class="container-main">

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
					<div class="col last-column">

							<div class="col">
								<?php dynamic_sidebar('footer-4'); ?>
							</div>

							<div class="col">
								<?php dynamic_sidebar('footer-5'); ?>

								<?php if(have_rows('social_media_repeater', 'options') ): ?>

									<ul class="social-media">

										<?php while(have_rows('social_media_repeater', 'options') ) : the_row();
										
											$icon = get_sub_field('social_media_icon', 'options' );
											$link = get_sub_field('link', 'options' );
										
										?>

											<li>
												<a href="https://www.goodreads.com/user/show/1027933-lantern-publishing-media" target="_blank">
													<span class="fa-stack" style="color: #ffffff;">
														<i class="fas fa-circle fa-stack-2x"></i>
														<i style="color: #0D88C1;" class="fab fa-goodreads-g fa-stack-1x"></i>
													</span>
												</a>
											</li>

										
										<?php endwhile; ?>

									</ul>

								<?php endif; ?>

								<ul class="social-media">
									<li>
										<a href="https://www.goodreads.com/user/show/1027933-lantern-publishing-media" target="_blank">
											<span class="fa-stack" style="color: #ffffff;">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i style="color: #0D88C1;" class="fab fa-goodreads-g fa-stack-1x"></i>
											</span>
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com/lanternpm/" target="_blank">
											<span class="fa-stack" style="color: #ffffff;">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i style="color: #0D88C1;" class="fab fa-facebook-f fa-stack-1x"></i>
											</span>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/lanternpm/" target="_blank">
											<span class="fa-stack" style="color: #ffffff;">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i style="color: #0D88C1;" class="fab fa-instagram fa-stack-1x"></i>
											</span>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/lanternpm" target="_blank">
											<span class="fa-stack" style="color: #ffffff;">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i style="color: #0D88C1;" class="fab fa-twitter fa-stack-1x"></i>
											</span>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/user/Lanternmedia" target="_blank">
											<span class="fa-stack" style="color: #ffffff;">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i style="color: #0D88C1;" class="fab fa-youtube fa-stack-1x"></i>
											</span>
										</a>
									</li>
								</ul>
							</div>

						</div>
			</div><!-- .site-info -->
		</div> <!-- .container-main -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
