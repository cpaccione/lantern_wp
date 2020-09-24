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

$date = get_field('date');
$title = get_field('title');
$content = get_field('description');

$title_col_one = get_field('title_col_one');
$content_col_one = get_field('description_col_one');
$title_col_two = get_field('title_col_two');
$content_col_two = get_field('description_col_two');
$title_col_three = get_field('title_col_three');
$content_col_three = get_field('description_col_three');

?>


<div class="news-featured">
        <!-- <div class="container-md"> -->
            
            <!-- <div class="row"> -->
                <!-- <div class="col-md-12"> -->
                    <div class="section-title">
                        <h2>news, events &amp; podcasts</h2>
                    </div>
                <!-- </div> -->
            <!-- </div> -->

            <!-- <div class="featured-item"> -->
                <!-- <div class="row"> -->
                    <!-- <div class="col-lg-6 col-xl-4"> -->
                        <div class="featured-item">
                        <div class="circle-wrap">
                            <img class="design-element" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/graphic_one.svg" alt="design element">
                            <div class="content">
                                <p class="date"><?php echo $date; ?></p>
                                <p class="title"><?php echo $title; ?></p>   
                            </div>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="col-lg-6 col-xl-8 d-flex align-items-center"> -->
                        <div class="wrap">
                            <p><?php echo $content; ?></p>
                            <?php 
                            $hl = get_field('link');

                            if( $hl ): 
                                $hl_url = $hl['url'];
                                $hl_title = $hl['title'];
                                $hl_target = $hl['target'] ? $hl['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $hl_url ); ?>" target="<?php echo esc_attr( $hl_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"><?php echo esc_html( $hl_title ); ?></a>
                            <?php endif; ?>

                            <?php 
                            $ha = get_field('audio_link');

                            if( $ha ): 
                                $ha_url = $ha['url'];
                                $ha_title = $ha['title'];
                                $ha_target = $ha['target'] ? $ha['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $ha_url ); ?>" target="<?php echo esc_attr( $ha_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link"><?php echo esc_html( $ha_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->

            <div class="featured-grid">
                <!-- <div class="container-md"> -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="news-wrap">
                            <h2 class="title"><?php echo $title_col_one; ?></h2>
                            <p><?php echo $content_col_one; ?></p>

                            <?php 
                            $lo = get_field('link_col_one');

                            if( $lo ): 
                                $lo_url = $lo['url'];
                                $lo_title = $lo['title'];
                                $lo_target = $lo['target'] ? $lo['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $lo_url ); ?>" target="<?php echo esc_attr( $lo_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"><?php echo esc_html( $lo_title ); ?></a>
                            <?php endif; ?>

                            <?php 
                            $ao = get_field('audio_link_col_one');

                            if( $ao ): 
                                $ao_url = $ao['url'];
                                $ao_title = $ao['title'];
                                $ao_target = $ao['target'] ? $ao['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $ao_url ); ?>" target="<?php echo esc_attr( $ao_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link"><?php echo esc_html( $ao_title ); ?></a>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="news-wrap">
                            <h2 class="title"><?php echo $title_col_two; ?></h2>
                            <p><?php echo $content_col_two; ?></p>
                            <?php 
                            $lt = get_field('link_col_two');

                            if( $lt ): 
                                $lt_url = $lt['url'];
                                $lt_title = $lt['title'];
                                $lt_target = $lt['target'] ? $lt['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $lt_url ); ?>" target="<?php echo esc_attr( $lt_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"><?php echo esc_html( $lt_title ); ?></a>
                            <?php endif; ?>

                            <?php 
                            $at = get_field('audio_link_col_two');

                            if( $at ): 
                                $at_url = $at['url'];
                                $at_title = $at['title'];
                                $at_target = $at['target'] ? $at['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $at_url ); ?>" target="<?php echo esc_attr( $at_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link"><?php echo esc_html( $at_title ); ?></a>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="news-wrap">
                            <h2 class="title"><?php echo $title_col_three; ?></h2>
                            <p><?php echo $content_col_three; ?></p>

                            <?php 
                            $link_three = get_field('link_col_three');

                            if( $link_three ): 
                                $link_three_url = $link_three['url'];
                                $link_three_title = $link_three['title'];
                                $link_three_target = $link_three['target'] ? $link_three['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $link_three_url ); ?>" target="<?php echo esc_attr( $link_three_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"><?php echo esc_html( $link_three_title ); ?></a>
                            <?php endif; ?>

                            <?php 
                            $audio_link_three = get_field('audio_link_col_three');

                            if( $audio_link_three ): 
                                $audio_link_three_url = $audio_link_three['url'];
                                $audio_link_three_title = $audio_link_three['title'];
                                $audio_link_three_target = $audio_link_three['target'] ? $audio_link_three['target'] : '_self';
                                ?>
                                <a class="cta" href="<?php echo esc_url( $audio_link_three_url ); ?>" target="<?php echo esc_attr( $audio_link_three_target ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link"><?php echo esc_html( $audio_link_three_title ); ?></a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->

        </div>
    </div>

