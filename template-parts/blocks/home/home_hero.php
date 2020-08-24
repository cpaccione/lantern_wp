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
$id = 'home-hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-hero';
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
<style>
    .home-hero-wrap {
        display: grid;
    }

    .col {
        grid-column: 1;
        grid-row: 1;
    }
</style>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <img class="circle-graphic" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/circle_graphic.svg" alt="circle graphic">

    <div class="container-md">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="home-hero-wrap">
                    <div class="col">
                        <img class="home-hero-bg" src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>">
                    </div>
                    <div class="col">
                        <img class="home-hero-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $text; ?></p>
            </div>
        </div>
    </div>

</div>
