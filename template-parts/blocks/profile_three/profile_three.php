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
$id = 'board-grid-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'board-grid';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<section id="three_profiles">
    <svg class="design" xmlns="http://www.w3.org/2000/svg" width="109" height="109" viewBox="0 0 109 109"><defs><style>.a,.c{fill:none;}.a{stroke:#59c0ea;stroke-width:20px;}.b{stroke:none;}</style></defs><g class="a"><circle class="b" cx="54.5" cy="54.5" r="54.5"/><circle class="c" cx="54.5" cy="54.5" r="44.5"/></g></svg>

    <div class="container">

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

</section>