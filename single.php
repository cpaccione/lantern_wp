<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lantern
 */

get_header();
?>

	<main id="primary" class="site-main">


		<?php if ( has_post_thumbnail() ) {

		// Get the post thumbnail URL
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		}

		?>

		<section class="blog-hero" style="background-image: url(<?php echo $feat_image; ?>)">
			<div class="overlay"></div>
		</section>
		<div class="single-blog">

			<div class="col-sidebar">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-main">
				<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Article:', 'lantern' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Article:', 'lantern' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
				?>
			</div>
		</div>

	</main><!-- #main -->

<?php get_footer();
