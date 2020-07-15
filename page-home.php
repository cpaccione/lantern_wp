<?php

/*

Template Name: Lantern Home

*/


?>


<?php get_header(); ?>

<div class="home-hero">
    <div class="container">
    <div class="home-hero-grid">
        <div class="col">
            <h1>Lantern Publishing & Media is your source for books, content, and dialogue on animal rights, veganism, humane education, social justice, spirituality, wellness and recovery.</h1>
            <p>Lantern Publishing & Media (LPM) publishes diverse content, convenes with thought leaders, practitioners, and influencers, and consults and collaborates with like-minded organizations. We publish books and engage in activities for all wanting to live with a greater depth and commitment to the preservation of the natural world.</p>
        </div>
        <div class="col">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/home-featured@2x.png" alt="Women laying on a bed reading and smiling">
        </div>
    </div>
    </div>
</div>

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
                // 'portfolio_category' => 'featured',
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
