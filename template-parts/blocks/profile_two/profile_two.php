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


?>

<section id="associates">
<svg class="design-right" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 230.09 242"><defs><clipPath id="clip-path" transform="translate(0 29.1)"><ellipse cx="120.36" cy="100.7" rx="100.64" ry="100.7" style="fill:none"/></clipPath></defs><g style="clip-path:url(#clip-path)"><circle cx="130.3" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="131.69" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="153.09" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="176.05" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="197.05" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="217.92" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="238.78" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="188.25" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="207.56" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="130.3" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="149.61" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="168.93" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="188.3" cy="110.36" r="3.27" style="fill:#f5bf00"/><circle cx="207.56" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="226.88" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="3.21" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="24.6" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="47.57" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="68.57" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="89.44" r="3.21" style="fill:#f5bf00"/><circle cx="12.3" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="31.62" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="50.94" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="70.25" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="89.57" cy="110.3" r="3.21" style="fill:#f5bf00"/><circle cx="108.88" cy="110.3" r="3.21" style="fill:#f5bf00"/></g><ellipse cx="34.5" cy="190.25" rx="34.5" ry="34" style="fill:#59c0ea"/></svg>

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

