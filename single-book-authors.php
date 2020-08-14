<?php
/**
 * The template for displaying all single books authors
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lantern
 */

get_header();
?>
    <div class="single-book-grid">
        <div class="container-md">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-book-hero">
                        <?php

                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large');
                            }

                        ?>   
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="book-title-wrap">
                        <h2 class="book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
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
        </div>


             <!-- Start Repeater -->
            <?php if( have_rows('related_book_repeater')): // check for repeater fields ?>
                <div class="container-lg">

                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2><?php the_field('section_title'); ?></h2>
                            </div>
                        </div>
                    </div>


                    <div class="related-book-grid">
                        <div class="row">

                        <?php while ( have_rows('related_book_repeater')) : the_row(); // loop through the repeater fields ?>

                            <?php // set up post object
                                $post_object = get_sub_field('related_book');
                                if( $post_object ) :
                                $post = $post_object;
                                setup_postdata($post);
                                ?>
                            
                                <div class="col-lg-3">

                                    <div class="related-book"> 

                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                            <?php the_title('<p>', '</p>'); ?>
                                        </a>

                                    </div>

                                </div>

                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                            <?php endif; ?> 

                        <?php endwhile; ?>
                <!-- End Repeater -->
                </div>
            </div>
            <?php endif; ?>
            </div>

<?php get_footer(); ?>