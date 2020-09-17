<?php

/**
 * Lantern Button Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'lantern-button-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'lantern-button';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

    <?php 

    $lb = get_field('lantern_button');

    if( $lb ): 
        $lb_url = $lb['url'];
        $lb_title = $lb['title'];
        $lb_target = $lb['target'] ? $lb['target'] : '_self';
        ?>
        <a id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> cta" href="<?php echo esc_url( $lb_url ); ?>" target="<?php echo esc_attr( $lb_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"><?php echo esc_html( $lb_title ); ?></a>

    <?php endif; ?>