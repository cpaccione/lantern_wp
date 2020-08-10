<?php

/*

Template Name: Subject

*/


?>


<?php get_header(); ?>



<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'lantern' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
?>
<section class="subject">
    <div class="container-md">
        <div class="row">
        
            <div class="col-md-3">
                <?php dynamic_sidebar( 'sidebar-books' ); ?>
            </div>

            <div class="col-md-9">
                <?php

                    $args = array(
                        'post_type' => 'books',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                        );
                    $query = new WP_Query($args);

                ?>
                <div class="row">
                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="book-wrap">
                                
                                <?php

                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('large');
                                }

                                ?>

                                <div class="book-title-wrap">
                                    <p class="book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></p>
                                </div>
                                
                            </div>
                        </a>
                    </div>

                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>
