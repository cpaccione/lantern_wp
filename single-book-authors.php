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
                        <p class="subtitle"><?php the_field('subtitle'); ?></p>
                        <p class="author"><?php the_field('author'); ?></p>

                        <div class="editor">

                            <?php

                                while ( have_posts() ) :
                                    
                                    the_post();

                                    get_template_part( 'template-parts/content', 'book' );

                                endwhile; // End of the loop.

                            ?>

                        
                        <?php if( get_field('author_bio') ): ?>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary author-button" data-toggle="modal" data-target="#staticBackdrop">
                        Author Bio
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><p class="author"><?php the_field('author'); ?></p></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php the_field('author_bio'); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <?php endif; ?>

                        <div class="purchase-options">

                            <?php if(get_field('purchase_options') ): ?>

                                <h2><?php the_field('purchase_title'); ?></h2>

                            <?php endif; ?>

                            <?php if( have_rows('purchase_options') ): ?>

                                <?php while( have_rows('purchase_options') ): the_row(); ?>

                                 <?php 
                                    $link = get_sub_field('purchase_link');
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="btn btn-success" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>

                                <?php endwhile; ?>

                            <?php endif; ?>

                        </div>

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
                                <h2>related titles</h2>
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
