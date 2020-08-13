<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lantern
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php lantern_post_thumbnail(); ?>
	
    <header class="entry-header">

		<div class="book-title-wrap">
            <p class="book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></p>
        </div>
		
		<?php

			if ( 'post' === get_post_type() ) :
				?>
			<div class="entry-meta">
				<?php
				lantern_posted_on();
				lantern_posted_by();
				?>
			</div><!-- .entry-meta -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
		<?php lantern_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->