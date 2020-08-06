
<div class="section-subject">
    <div class="container">
        <div class="subject-areas">
        
            <div class="sidebar">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>

            <div class="main-content">
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
    </div>