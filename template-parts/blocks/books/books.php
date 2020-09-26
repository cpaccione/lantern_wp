<?php

/**
 * Three Profiles Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'books-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'books';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$number_of_books  = get_field('number_of_books');
$cat = get_field('category');
$section_title = get_field('section_title');
?>


<div class="new-releases">

    <div class="section-title">
        <h2><?php echo $section_title; ?></h2>
    </div>

    <div class="book-container">
        <!-- <div class="row"> -->

                <?php

                    $args = array(
                        'post_type' => 'books',
                        'post_status' => 'publish',
                        // 'book_category' => 'featured',
                        'posts_per_page' => $number_of_books,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'book_category',
                                'terms' => $cat,
                            ),
                        ),
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

            <!-- </div> -->
        <!-- </div> -->
    </div>
    

    <style>
        .book-container {
            display: grid;
            grid-template-columns: 1fr;
            grid-row-gap: 2rem;
        }

        @media (min-width: 600px) {
            .book-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 800px) {
            .book-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>