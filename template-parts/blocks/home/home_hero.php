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
$id = 'home-hero-section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-hero-section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title_text');
$text = get_field('sub_text');
$image = get_field('hero_image');
$bg_image = get_field('home_hero_bg');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <img class="circle-graphic" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/circle_graphic.svg" alt="circle graphic">

    <div class="container-l">
        <div class="home-hero">
            <div class="col image-col">
                <div class="home-hero-wrap">
                <div class="col">
                        <img class="home-hero-bg" src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>">
                    </div>
                    <div class="col">
                        <img class="home-hero-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>

                </div>
            </div>
            <div class="col text-col">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $text; ?></p>
            </div>
        </div>
    </div>

</div>
