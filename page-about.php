<?php

/*

Template Name: About
*/


?>

<?php get_header(); ?>


<?php if ( has_post_thumbnail() ) : ?>
    <div class="page-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
<?php endif; ?>

<div class="mission">
    <div class="section-title">
        <h2>mission</h2>
    </div>

    <div class="container">
        <div class="mission-grid">
            <div class="col">
                <h2>Our mission is to inform and inspire new generation of global citizens to create a healthy, compassionate, and resilient world for animals and humans alike.</h2>
                <p>We are driven by and committed to equity, diversity, nonviolence, and an expanded community of subjects. We publish books, develop content, and promote ideas supportive of veganism, animal rights, humane education, recovery, therapy, and spirituality.</p>
                <p>We publish books for all wanting to live with greater depth and commitment to the preservation of the natural world.</p>
            </div>
            <div class="col">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/man_reading_book@2x.png" alt="">
            </div>
        </div>    
    </div>


   

    <?php get_footer(); ?>