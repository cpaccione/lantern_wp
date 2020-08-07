<?php

/*

Template Name: Lantern Home

*/


?>


<?php get_header(); ?>

    <div class="news-featured">
        <div class="container-md">
            
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>news, events &amp; podcasts</h2>
                    </div>
                </div>
            </div>

            <!-- <div class="featured-item"> -->
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="circle-wrap">
                            <img class="design-element" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/graphic_one.svg" alt="design element">
                            <div class="content">
                                <p class="date">August 08, 2020</p>
                                <p class="title">Lantern At The Black Vegfest In Brooklyn</p>   
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-8 d-flex align-items-center">
                        <div class="wrap">
                            <p>The Black VegFest has announced that they will be back in Brooklyn for their third year on August 8-9, 2020. This fest addresses food sovereignty in poor communities of color, women’s rights, unhealthy food in our neighborhoods, gender bias, environmental pollution, gentrification, and animal suffering. Lantern is a proud supporter and will be there selling books.</p>
                            <a class="cta" href="#"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"> Read More</a>
                        </div>
                    </div>
                </div>
            <!-- </div> -->

            <div class="featured-grid">
                <div class="container-md">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="title">karen davis on our hen house podcast</h2>
                            <p>Karen Davis was recently on the Our Hen House podcast to talk about her book, For the Birds, including discussing why the language we use when talking about animals is so important. You can listen to it here.</p>
                            <a href="" class="cta"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link"> listen</a>
                        </div>
                        <div class="col-md-4">
                            <h2 class="title">THE CLEAN PET FOOD REVOLUTION REVIEWED IN ANIMAL CULTURE</h2>
                            <p>The January issue of Animal Culture is now out, the magazine co-created by Patricia Denys, contributor to The Art of the Animal. This issue reviews The Clean Pet Food Revolution.</p>
                            <a href="" class="cta"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/link_graphic.svg" alt="link"> read more</a>
                        </div>
                        <div class="col-md-4">
                            <h2 class="title">RACISM AS ZOOLOGICAL WITCHCRAFT AVAILABLE AS AUDIOBOOK</h2>
                            <p>Racism as Zoological Witchcraft by Aph Ko is now available as an audiobook here.</p>
                            <a href="" class="cta"><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/audio.svg" alt="link">listen</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php get_footer(); ?>
