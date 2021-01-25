<?php

/*

Template Name: Blog

*/


?>

<?php get_header(); ?>

    <?php if(get_field('blog_hero_image') ): ?>

        <div class="blog-hero" style="background-image: url('<?php the_field('blog_hero_image'); ?>');"></div>

    <?php endif; ?>
	
	<section class="blog-section">

		<div class="blog-sidebar">
			<?php dynamic_sidebar('sidebar-blog'); ?>
		</div>

		<main id="primary" class="site-main blog-main blog-template">

		<?php

			$args = array(
                'post_type' => 'post',
                'order' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'blog',
                    ),
                ),
               // 'posts_per_page' => 1,
                'search_filter_id' => 1329, // Staging
                //'search_filter_id' => 1337, // Production
            );
			//$args['search_filter_id'] = 1329;
			// $args['search_filter_id'] = 861;
			$query = new WP_Query($args);

			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();   
	
				get_template_part( 'template-parts/content', 'blog' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				endwhile; // End of the loop. ?>

			<?php endif; ?>

				</main><!-- #main -->
				</section>

				<div class="container-main">

						<?php
						
							if (function_exists('wp_pagenavi')) {
								wp_pagenavi( array('query' => $query ) );
							}
						
						?>

				</div>	

			<?php wp_reset_postdata(); ?>

	<?php get_footer();