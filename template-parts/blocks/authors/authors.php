<?php

/**
 * Author block template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'authors-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'authors';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$cat = get_field('category');
$section_title = get_field('section_title');
?>


    <div class="authors">

        <?php

            $args = array(
                'post_type' => 'book-authors',
                'post_status' => 'publish',
                // 'book_category' => 'featured',
                'posts_per_page' => -1,
                'orderby' => 'name',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'author_category',
                        'terms' => $cat,
                    ),
                ),
                );
            $query = new WP_Query($args);
            
        ?>

        <div class="author-title">
            <h3><?php echo $section_title; ?></h3>
        </div>

        <ul>
            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                <li class="book-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

            <?php endwhile; endif; wp_reset_postdata(); ?>
        </ul>

    </div>
    