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

        <div class="container">
            <div class="single-book-grid">
                <div class="col">
                    <?php

                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('large');
                        }

                    ?>     
                </div>
                <div class="col">
                    <div class="book-title-wrap">
                        <h2 class="book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
                        <p class="subtitle"><?php the_field('subtitle'); ?></p>
                        <p class="author"><?php the_field('author'); ?></p>

                        <?php
                        
                            if( have_rows('book_meta') ):

                                echo '<ul class="book-meta">';
                                    
                                    while( have_rows('book_meta') ) : the_row();

                                        $item = get_sub_field('book_meta_item');

                                            echo '<li>' . $item . '</li>';
                            
                                    endwhile;

                                echo '</ul>';

                            endif;

                        ?>

                        <div class="editor">

                            <?php

                                while ( have_posts() ) :
                                    
                                    the_post();

                                    get_template_part( 'template-parts/content', 'book' );

                                endwhile; // End of the loop.

                            ?>

                        </div>
                    </div>   
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section-title">
                <h2>related titles</h2>
            </div>


            <?php
                        
                if( have_rows('related_book_repeater') ):

                    echo '<ul class="book-meta">';
                        
                        while( have_rows('book_meta') ) : the_row();

                            $item = get_sub_field('book_meta_item');

                                echo '<li>' . $item . '</li>';
                
                        endwhile;

                    echo '</ul>';

                endif;

            ?>

            <!-- Start Repeater -->
            <?php if( have_rows('related_book_repeater')): // check for repeater fields ?>
                <div class="related-book-grid">

                    <?php while ( have_rows('related_book_repeater')) : the_row(); // loop through the repeater fields ?>

                        <?php // set up post object
                            $post_object = get_sub_field('related_book');
                            if( $post_object ) :
                            $post = $post_object;
                            setup_postdata($post);
                            ?>

                        <article class="related-book"> 

                            <?php the_title(); ?>
                            <?php the_post_thumbnail(); ?>
                            <?php // whatever post stuff you want goes here ?>

                        </article>

                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                        <?php endif; ?> 

                    <?php endwhile; ?>

                </div>
            <!-- End Repeater -->
            <?php endif; ?>

        </div>


    
<?php get_footer(); ?>
