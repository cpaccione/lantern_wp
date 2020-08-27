<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lantern
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog-wrap">

        <div class="entry-content blog-preview">

			<div class="featured-image">
				<?php lantern_post_thumbnail(); ?>
			</div>

			<a class="title" href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>

            <span class="entry-date"><?php echo get_the_date(); ?></span>

            <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lantern' ),
                    'after'  => '</div>',
                )
            );
            ?>

            <a href="<?php the_permalink(); ?>" class="cta"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link">Read More</a>
        </div><!-- .entry-content -->
    </div>


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'lantern' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
