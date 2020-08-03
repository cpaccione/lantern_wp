<?php

/*

Template Name: Contact
*/


?>

<?php get_header(); ?>


<?php if ( has_post_thumbnail() ) : ?>
    <div class="page-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
<?php endif; ?>

    <div class="contact-one">
    
        <img class="graphic" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/graphic_yellow_circle.svg" alt="Graphic">

        <div class="container">
            <div class="section-title">
                <h2>contact information</h2>
            </div>
            <div class="contact-grid">
                <div class="col">
                    <p>Lantern Publishing & Media</p>
                    <p>128 2nd Place, Garden Suite</p>
                    <p>Brooklyn, NY 11231</p>

                    <p>Hours: Monday to Friday 9:00 a.m. to 5:00 p.m., EST</p>

                    <p>T: 212.414.2275</p>
                </div>
                <div class="col">
                    <p>Editorial:</p>
                    <p>Brian Normoyle</p>
                    <p>brian@lanternpm.org</p>
                    <p>Martin Rowe</p> 
                    martin@lanternpm.org
                    Production: Emily Lavieri-Scull 
                    emily@lanternpm.com
                </div>
            </div>
        </div>    
    </div>

    <section class="contact-col-two">
        <img class="graphic-one" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/light_blue_circle.svg" alt="graphic one">
        <img class="graphic-two" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/grid_blue_right.svg" alt="graphic two">
        <img class="graphic-three" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/design_02.svg" alt="graphic three">
        <div class="container">
            <div class="section-title">
                <h2>order information</h2>
            </div>
            <div class="contact-col-grid">
                <div class="col">
                    <p>Lantern Publishing & Media</p>
                    <p>128 2nd Place, Garden Suite</p>
                    <p>Brooklyn, NY 11231</p>

                    <p>Hours: Monday to Friday 9:00 a.m. to 5:00 p.m., EST</p>

                    <p>T: 212.414.2275</p>
                </div>
                <div class="col">
                    <p>Editorial:</p>
                    <p>Brian Normoyle</p>
                    <p>brian@lanternpm.org</p>
                    <p>Martin Rowe</p> 
                    martin@lanternpm.org
                    Production: Emily Lavieri-Scull 
                    emily@lanternpm.com
                </div>
            </div>
        </div>    
    </section>

    <section class="contact-col-three">
        <img class="graphic-one" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/blue_grid.svg" alt="graphic">
        <img class="graphic-two" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/yellow_grid.svg" alt="graphic">
        <div class="container">
            <div class="section-title">
                <h2>MANUSCRIPT SUBMISSION GUIDELINES</h2>
            </div>
            <div class="contact-col-grid">
                <div class="col">
                    <p>Lantern Publishing & Media</p>
                    <p>128 2nd Place, Garden Suite</p>
                    <p>Brooklyn, NY 11231</p>

                    <p>Hours: Monday to Friday 9:00 a.m. to 5:00 p.m., EST</p>

                    <p>T: 212.414.2275</p>
                </div>
            </div>
        </div>    
    </section>

    <section class="contact-col-four">
        <img class="graphic" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/yellow_donut_circle.svg" alt="Yellow donut circle graphic">
        <div class="container">
            <div class="contact-col-grid">
                <div class="col">
                    <div class="section-title">
                        <h2>contact information</h2>
                    </div>
                    <p>Lantern Publishing & Media</p>
                    <p>128 2nd Place, Garden Suite</p>
                    <p>Brooklyn, NY 11231</p>

                    <p>Hours: Monday to Friday 9:00 a.m. to 5:00 p.m., EST</p>

                    <p>T: 212.414.2275</p>
                </div>
                <div class="col">
                    <div class="section-title">
                        <h2>contact information</h2>
                    </div>
                    <p>Editorial:</p>
                    <p>Brian Normoyle</p>
                    <p>brian@lanternpm.org</p>
                    <p>Martin Rowe</p> 
                    martin@lanternpm.org
                    Production: Emily Lavieri-Scull 
                    emily@lanternpm.com
                </div>
            </div>
        </div>    
    </section>

   
   

    <?php get_footer(); ?>