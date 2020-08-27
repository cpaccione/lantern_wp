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
        
            <div class="col-md-4">
                <?php dynamic_sidebar( 'sidebar-books' ); ?>
            </div>

            <div class="col-md-8" id="main-subject-area">
                <?php

                    $args = array(
                        'post_type' => 'books',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        // 'search_filter_id' => 856,
                        );
                    $args['search_filter_id'] = 855;
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
                    
                    
                <?php endwhile; ?>
                </div>
                <div class="row">
    <div class="col-md-12">

            <div class="pagination">
            <?php
            if (function_exists('wp_pagenavi')) 			{
                wp_pagenavi( array('query' => $query ) );
            }
            ?>
            </div>
            </div>
</div>
            
           <?php endif; ?>

           <?php wp_reset_postdata(); ?>
 

        </div>
    </div>



      



</section>

<?php get_footer(); ?>
