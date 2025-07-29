<?php
/* Template Name: Reboot: In The Bunker

*/
get_header(); ?>
<div id="in-the-bunker" class="wrapper in-the-bunker">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12 px-0">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/in-the-bunker/in-the-bunker-banner-bg.jpg);">
                    <h1>
                        <span class="video-series d-block">Video Series</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/in-the-bunker/in-the-bunker-header-logo.svg" alt="">
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div id="in-the-bunker__intro" class="in-the-bunker__intro pepi-row">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0 px-0">
                    <p class="mb-0">
                        Through the “In The Bunker with A&M” video series, Alvarez & Marsal Global Transaction Advisory Group’s Global Practice Leader Paul Aversano, along with EMEA Practice Leader Antonio Alvarez III, share insights on the Coronavirus crisis, giving an “inside” look at the firm and how it’s operating during this time – from the impact on the day-to-day business at A&M, what the firm’s leaders are seeing across the global economies, and their real time reactions to the various shifting situations around the world.
                    </p>
                </div>

            </div>
        </div>

    </div>
    <div id="in-the-bunker__video" class="in-the-bunker__video pepi-row">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0 px-0">
                    <h2 class="section-title">
                        Familiar Faces from GE to A&M
                    </h2>
                    <div class="short-border mb-5"></div>

                    <div class="videoWrap">
                        <iframe src="https://www.youtube.com/embed/99mrTshP-mw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 px-0 mt-5 px-0">
                    <h2 class="section-title section-title--smaller">
                        February 2, 2021
                    </h2>
                    <div class="short-border"></div>
                    <p>
                        Alvarez & Marsal Managing Director Lisa Price sits down with Global Transaction Advisory Group Global Practice Leader Paul Aversano and EMEA Practice Leader Antonio Alvarez III on the latest episode of “In the Bunker with A&M.” Lisa shares her story about what it's like going from client to colleague, how COVID-19 has impacted the utility and oil & gas sectors, and what's going on at home during the pandemic.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div id="our-insights" class="pepi-row archive-page">
        <div class="container">

            <?php
            $shortcode_filter = get_field('alm_filter_shortcode', $post->ID);
            $shortcode_query = get_field('alm_query_shortcode', $post->ID);

            echo do_shortcode("$shortcode_filter"); ?>

            <?php echo do_shortcode("$shortcode_query"); ?>
        </div>
    </div>


    <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>




</div>


<?php get_footer(); ?>