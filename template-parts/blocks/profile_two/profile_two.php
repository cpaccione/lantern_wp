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
$id = 'associates-grid-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'associates-grid';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$s_title = get_field('section_title');


?>

    <div class="container">

        <div class="section-title">
            <h2><?php echo $s_title; ?></h2>
        </div>

        <?php if( have_rows('profile_repeater') ): ?>
        
            <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

                <?php while (have_rows('profile_repeater') ): the_row();
                
                    $title = get_sub_field('title');
                    $name = get_sub_field('name');
                    $bio = get_sub_field('bio');
                    $p_photo = get_sub_field('profile_photo');
                
                ?>

                    <div class="col">
                        <div class="profile">
                            <img class="photo" src="<?php echo $p_photo['url']; ?>" alt="<?php echo $p_photo['alt']; ?>">
                            <p class="name"><?php echo $name; ?></p>
                            <p class="title"><?php echo $title; ?></p>
                            <div class="bio">
                                <?php echo $bio; ?>
                            </div>            
                        </div>
                    </div>

                <?php endwhile; ?>
            
            </div>   

        <?php endif; ?>

    </div>
