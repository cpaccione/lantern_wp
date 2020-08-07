<?php

/*

Template Name: About
*/


?>

<?php get_header(); ?>


<?php if ( has_post_thumbnail() ) : ?>
    <div class="page-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
<?php endif; ?>

    <section class="two-column">
        <div class="container">
            <div class="section-title">
                <h2>mission</h2>
            </div>
            <div class="mission-grid">
                <div class="col">
                    <h2>Our mission is to inform and inspire new generation of global citizens to create a healthy, compassionate, and resilient world for animals and humans alike.</h2>
                    <p>We are driven by and committed to equity, diversity, nonviolence, and an expanded community of subjects. We publish books, develop content, and promote ideas supportive of veganism, animal rights, humane education, recovery, therapy, and spirituality.</p>
                    <p>We publish books for all wanting to live with greater depth and commitment to the preservation of the natural world.</p>
                </div>
                <div class="col">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/man_book@2x.png" alt="">
                </div>
            </div>    
        </div>
    </section>

    <div class="container">
        <div class="section-title">
            <h2>history</h2>
        </div>
        <div class="mission-grid">
            <div class="col">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/reading_glasses@2x.png" alt="">
            </div>
            <div class="col">
                <p>LPM aims to educate, provide resources for, and amplify a new generation of citizens committed to finding solutions and collaboration. Our goal is to expand the definition of “humane” to one that nurtures, honors, and protects the web of life upon which all species, including our own, depend.</p>
            </div>
        </div>    
    </div>

    <div class="container">
        <div class="section-title">
            <h2>board</h2>
        </div>
        <div class="board-grid">
            <div class="col">
                <div class="profile">
                    <img class="photo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/martin_rowe@2x.png" alt="">
                    <p class="name">Martin Rowe</p>
                    <p class="title">President &amp; Publisher</p>
                    <p class="bio">Martin Rowe is President and Publisher at Lantern Publishing & Media. He is the co-vice president of the board of the Culture & Animals Foundation and a senior fellow of Brighter Green. He is the author of The Elephants in the Room, The Polar Bear in the Zoo, and Nicaea, and editor of The Way of Compassion and Running, Eating, Thinking: A Vegan Anthology.</p>            
                </div>
            </div>
            <div class="col">
                <div class="profile">
                    <img class="photo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/martin_rowe@2x.png" alt="">
                    <p class="name">Martin Rowe</p>
                    <p class="title">President &amp; Publisher</p>
                    <p class="bio">Martin Rowe is President and Publisher at Lantern Publishing & Media. He is the co-vice president of the board of the Culture & Animals Foundation and a senior fellow of Brighter Green. He is the author of The Elephants in the Room, The Polar Bear in the Zoo, and Nicaea, and editor of The Way of Compassion and Running, Eating, Thinking: A Vegan Anthology.</p>            
                </div>
            </div>
            <div class="col">
                <div class="profile">
                    <img class="photo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/martin_rowe@2x.png" alt="">
                    <p class="name">Martin Rowe</p>
                    <p class="title">President &amp; Publisher</p>
                    <p class="bio">Martin Rowe is President and Publisher at Lantern Publishing & Media. He is the co-vice president of the board of the Culture & Animals Foundation and a senior fellow of Brighter Green. He is the author of The Elephants in the Room, The Polar Bear in the Zoo, and Nicaea, and editor of The Way of Compassion and Running, Eating, Thinking: A Vegan Anthology.</p>            
                </div>
            </div>
        </div>    
    </div>

    <div class="container">
        <div class="section-title">
            <h2>associates</h2>
        </div>
        <div class="associates-grid">
            <div class="col">
                <div class="profile">
                    <img class="photo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/martin_rowe@2x.png" alt="">
                    <p class="name">Martin Rowe</p>
                    <p class="title">President &amp; Publisher</p>
                    <p class="bio">Martin Rowe is President and Publisher at Lantern Publishing & Media. He is the co-vice president of the board of the Culture & Animals Foundation and a senior fellow of Brighter Green. He is the author of The Elephants in the Room, The Polar Bear in the Zoo, and Nicaea, and editor of The Way of Compassion and Running, Eating, Thinking: A Vegan Anthology.</p>            
                </div>
            </div>
            <div class="col">
                <div class="profile">
                    <img class="photo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/martin_rowe@2x.png" alt="">
                    <p class="name">Martin Rowe</p>
                    <p class="title">President &amp; Publisher</p>
                    <p class="bio">Martin Rowe is President and Publisher at Lantern Publishing & Media. He is the co-vice president of the board of the Culture & Animals Foundation and a senior fellow of Brighter Green. He is the author of The Elephants in the Room, The Polar Bear in the Zoo, and Nicaea, and editor of The Way of Compassion and Running, Eating, Thinking: A Vegan Anthology.</p>            
                </div>
            </div>
        </div>    
    </div>

    <div class="container">
        <div class="section-title">
            <h2>donate</h2>
        </div>
        <div class="donate">
            <div class="col">
                <p>Thank you for your kind genousity. LPM is a 501(c)(3) organization and your donation is tax deductable to the full extent of the law. Please know that we are grateful for supporting our mission.</p>
                <a class="featured-link" href="#"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"> Donate Now</a>
            </div>
        </div>    
    </div>

   

    <?php get_footer(); ?>