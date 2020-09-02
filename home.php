<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lantern
 */

get_header();
?>



	<div class="blog-hero"></div>
	


<?php the_field('hero_image'); ?>

	<section class="blog-section">

		<div class="blog-sidebar">
				<?php get_sidebar(); ?>
		</div>

		<main id="primary" class="site-main blog-main">

		<?php

			$args = array('post_type' => 'post');
			$args['search_filter_id'] = 894;
			// $args['search_filter_id'] = 861;
			$query = new WP_Query($args);

			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();   
	
				get_template_part( 'template-parts/content', 'blog' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				endwhile; // End of the loop. ?>

				<div class="row">
				<div class="col-md-12">

					<div class="pagination" style="margin-bottom: 4rem;">
					<?php
					if (function_exists('wp_pagenavi')) 			{
						wp_pagenavi( array('query' => $query ) );
					}
					?>
					</div>
				</div>
			</div>

			<?php endif;


			wp_reset_postdata(); 

		?>

		</main><!-- #main -->

	</section>

<?php
get_footer();
