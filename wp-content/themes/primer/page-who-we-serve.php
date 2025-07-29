<?php
/* Template Name: Reboot: Who We Serve

*/
get_header(); ?>
<div id="who-we-serve" class="wrapper who-we-serve">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/who-we-serve/who-we-serve-banner-bg.jpg);">
                    <h1>Who We Serve
                        <h1>
                </div>
            </div>
        </div>
    </div>

    <div id="who-we-serve__intro" class="who-we-serve__intro pepi-row">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <p class="mb-0">
                        Our Global Transaction Advisory Group's integrated due diligence approach goes beyond traditional quality of earnings analyses and focuses on key value drivers for sponsors and lenders. Our global team has extensive industry knowledge across multiple sectors including, but not limited to, dedicated industry verticals in Healthcare, Software & Technology, Energy & Infrastructure, and Financial Services. Our dedicated industry verticals combine our transaction advisory, operational performance improvement and tax expertise into an integrated approach to help clients gain more insights, make better decisions and execute faster throughout the deal process.
                    </p>
                </div>

            </div>
        </div>

    </div>

    <div id="who-we-serve__industries" class="who-we-serve__industries pepi-row">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <h2 class="section-title">Dedicated Industries We Serve</h2>
                    <div class="short-border"></div>

                </div>

                <div class="col-12 px-0">
                    <?php include(TEMPLATEPATH . '/includes/who-we-serve/industry-toggles.php'); ?>

                </div>

            </div>
        </div>

    </div>


    <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>




</div>


<?php get_footer(); ?>