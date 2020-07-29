<?php

/*

Template Name: New Release

*/


?>

<?php get_header(); ?>


<?php if ( has_post_thumbnail() ) : ?>
    <div class="page-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
<?php endif; ?>

<div class="new-releases">
    <div class="section-title">
        <h2>new releases</h2>
    </div>

    <div class="container">
    <div class="new-release-grid">

        <?php

            $args = array(
                'post_type' => 'books',
                'post_status' => 'publish',
                'book_category' => 'featured',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
                );
            $query = new WP_Query($args);

        ?>

        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

            <div class="book-col">
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


    <?php get_footer(); ?>