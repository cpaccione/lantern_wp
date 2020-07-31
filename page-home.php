<?php

/*

Template Name: Lantern Home

*/


?>


<?php get_header(); ?>

<div class="home-hero">
    <img class="circle-graphic" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/circle_graphic.svg" alt="circle graphic">
    <div class="container">
    <div class="home-hero-grid">
        <div class="col text">
            <h1>Lantern Publishing & Media is your source for books, content, and dialogue on animal rights, veganism, humane education, social justice, spirituality, wellness and recovery.</h1>
            <p>Lantern Publishing & Media (LPM) publishes diverse content, convenes with thought leaders, practitioners, and influencers, and consults and collaborates with like-minded organizations. We publish books and engage in activities for all wanting to live with a greater depth and commitment to the preservation of the natural world.</p>
        </div>
        <div class="col image">
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
    
    <div class="container">
        <div class="news-featured">
            
            <div class="section-title">
                <h2>news, events &amp; podcasts</h2>
            </div>
            
            <div class="featured-item">
                <div class="col">
                    <div class="circle-wrap">
                        <img class="design-element" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/graphic_one.svg" alt="design element">
                        <div class="content">
                            <p class="date">August 08, 2020</p>
                            <p class="title">Lantern At The Black Vegfest In Brooklyn</p>   
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p>The Black VegFest has announced that they will be back in Brooklyn for their third year on August 8-9, 2020. This fest addresses food sovereignty in poor communities of color, women’s rights, unhealthy food in our neighborhoods, gender bias, environmental pollution, gentrification, and animal suffering. Lantern is a proud supporter and will be there selling books.</p>
                    <a class="featured-link" href="#"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"> Read More</a>
                </div>
            </div>

            <div class="featured-grid">
                <div class="col">
                    <h2 class="title">karen davis on our hen house podcast</h2>
                    <p>Karen Davis was recently on the Our Hen House podcast to talk about her book, For the Birds, including discussing why the language we use when talking about animals is so important. You can listen to it here.</p>
                    <a href="" class="cta"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link"> listen</a>
                </div>
                <div class="col">
                    <h2 class="title">THE CLEAN PET FOOD REVOLUTION REVIEWED IN ANIMAL CULTURE</h2>
                    <p>The January issue of Animal Culture is now out, the magazine co-created by Patricia Denys, contributor to The Art of the Animal. This issue reviews The Clean Pet Food Revolution.</p>
                    <a href="" class="cta"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"> read more</a>
                </div>
                <div class="col">
                    <h2 class="title">RACISM AS ZOOLOGICAL WITCHCRAFT AVAILABLE AS AUDIOBOOK</h2>
                    <p>Racism as Zoological Witchcraft by Aph Ko is now available as an audiobook here.</p>
                    <a href="" class="cta"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link">listen</a>
                </div>
            </div>

        </div>
    </div>

<?php get_footer(); ?>
