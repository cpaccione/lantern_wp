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
                        
                            <!-- Start Repeater -->
                            <?php if( have_rows('author_repeater')): // check for repeater fields ?>
                                <ul class="author-list">

                                    <?php while ( have_rows('author_repeater')) : the_row(); // loop through the repeater fields
                                    $link = get_sub_field('author_link');
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';

                                    ?>
                            
                                    <li>
                                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>&nbsp;
                                    </li>

                                    <?php endwhile; ?>

                                </ul>
                            <?php endif; ?>

                            <ul class="book-meta">

                                <?php if( get_field('page_number') ): ?>
                                
                                    <li><i class="fas fa-book-open"></i>&nbsp;&nbsp; <?php the_field('page_number'); ?> pages</li>

                                <?php endif; ?>

                                <?php if( get_field('book_size') ): ?>
                                
                                    <li><i class="fas fa-ruler-combined"></i>&nbsp;&nbsp; <?php the_field('book_size'); ?></li>

                                <?php endif; ?>

                                <?php if( get_field('hardcover_price') ): ?>
                                
                                    <li><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp; <b><?php the_field('hardcover_price'); ?></b> hardcover</li>

                                <?php endif; ?>

                                <?php if( get_field('paperback_price') ): ?>
                                
                                    <li><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp; <b><?php the_field('paperback_price'); ?></b> paperback</li>

                                <?php endif; ?>

                                <?php if( get_field('ebook_price') ): ?>
                                
                                    <li><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp; <b><?php the_field('ebook_price'); ?></b> eBook</li>

                                <?php endif; ?>

                                <?php if( get_field('illustration_number') ): ?>
                                
                                    <li><i class="fas fa-images"></i>&nbsp;&nbsp;<b>Illustrations</b>&nbsp;&nbsp;<?php the_field('illustration_number'); ?></li>

                                <?php endif; ?>

                                <?php if( get_field('hardcover_isbn') ): ?>
                                
                                    <li><b>Hardcover ISBN</b>&nbsp;&nbsp;<?php the_field('hardcover_isbn'); ?></li>

                                <?php endif; ?>

                                <?php if( get_field('paperback_isbn') ): ?>
                                    
                                    <li><b>Paperback ISBN</b>&nbsp;&nbsp;<?php the_field('paperback_isbn'); ?></li>

                                <?php endif; ?>

                                <?php if( get_field('ebook_isbn') ): ?>
                                    
                                    <li><b>eBook ISBN</b>&nbsp;&nbsp;<?php the_field('ebook_isbn'); ?></li>

                                <?php endif; ?>

                                <?php if( get_field('book_format') ): ?>
                                    
                                    <li><i class="fas fa-book"></i>&nbsp;&nbsp; <?php the_field('book_format'); ?></li>

                                <?php endif; ?>

                                <?php if( get_field('publisher') ): ?>
                                    
                                    <li><b>Publisher:</b> <?php the_field('publisher'); ?></li>

                                <?php endif; ?>

                                <?php if( get_field('publication_date') ): ?>
                                    
                                    <li><b>Publication Date:</b> <?php the_field('publication_date'); ?></li>

                                <?php endif; ?>

                            </ul>

                            <div class="editor">

                                <?php

                                    while ( have_posts() ) :
                                        
                                        the_post();

                                        get_template_part( 'template-parts/content', 'book' );

                                    endwhile; // End of the loop.

                                ?>

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
