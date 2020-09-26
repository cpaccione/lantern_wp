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
    
    <img class="pattern-six" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pattern6.png" alt="pattern six">
    <img class="pattern-four" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pattern4.png" alt="pattern four">
    <img class="pattern-six-repeat" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pattern6.png" alt="pattern six repeat">
    <img class="pattern-five" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pattern5.png" alt="pattern five">
    <img class="pattern-two" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pattern2.png" alt="pattern two">



    <div class="container-main">
        <div class="subject-grid">
        
            <div class="sidebar">
                <?php dynamic_sidebar( 'sidebar-books' ); ?>
            </div>

            <div class="main-subject-area" id="main-subject-area">
                <?php

                    $args = array(
                        'post_type' => 'books',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'search_filter_id' => 856,
                        // 'search_filter_id' => 855,
                        );
                    // $args['search_filter_id'] = 855;
                    $query = new WP_Query($args);

                ?>


                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>


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
                    <?php endwhile; ?>
                </div>


                <?php endif; ?>

           <?php wp_reset_postdata(); ?>

        </div>

        <div class="pagination">
            <?php

            if (function_exists('wp_pagenavi')) 			{
                wp_pagenavi( array('query' => $query ) );
            }

            ?>
        </div>     
    </div>



      



</section>

<?php get_footer(); ?>
