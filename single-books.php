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
                        <p class="sub-title"></p>
                        <p class="author"></p>
                        <ul>
                            <li>352 pp</li>
                            <li>6" x 9"</li>
                            <li>Paperpack</li>
                            <li>Published: December 2019</li>
                            <li>978-1-59056-602-2</li>
                        </ul>
                        <div class="editor">
                            <p>In Love Notes, a collection of articles, essays, and presentations, Philip McKibbin introduces the Politics of Love and explores the possibilities of this emerging theory. The Politics of Love affirms the importance of love and reimagines our relationships: to ourselves, each other, non-human animals, and the natural environment. This love is inclusive, critical, generous, and constructive. Instead of a politics of fear and distrust, of separation and narrow-mindedness, the Politics of Love presents a new vision that extends beyond individuals, families, the nation state, and even human beings: it is love that will bring about justice for other species, and it may also enable us to address climate change.</p>

                            <p>This book presents an intellectual journey; it charts a course for the future, and invites you to help take the Politics of Love forward.</p> 
                        </div>
                    </div>   
                </div>
            </div>
        </div>


    
<?php get_footer(); ?>
