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


    
<?php get_footer(); ?>
