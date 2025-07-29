<?php
/* Template Name: Reboot: Event - B2B Asia September 2017
*/
get_header(); ?>
<div id="b2b-2019" class="wrapper b2b-2019 event-page">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>);">
                    <h1 class="mt-5 pt-5">
                        <?php
                        $header_type = get_field('event-title-type');
                        $header_text = get_field('header-title');
                        $header_image = get_field('header-image');
                        $header_image_max = get_field('header-image-max');

                        if ($header_type == 'image'):
                            if (!empty($header_image)): ?>
                                <img src="<?php echo esc_url($header_image); ?>" alt="<?php the_title(); ?>"
                                    style="width: 100%; max-width: <?php echo $header_image_max; ?>px;" />

                        <?php endif;
                        else: echo $header_text;
                        endif;  ?>
                        <h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content-block-1 tho-lead">
        <div class="container">
            <div class="row pb-5 mb-4">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <h2 class="post-header-3">Thank You</h2>
                    <p style="font-size: 18px; line-height: 22px;">Thank you all for coming to our Alvarez & Marsal
                        Private Equity Services’ Back to Business networking event.<br class="d-none d-md-inline">Here’s
                        a few moments from the evening. Enjoy!
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>


    <div id="section-reconnect">
        <h2 class="text-white text-center">Photo Gallery</h2>

        <center>



            <a href="http://pulsecreative.zenfolio.com/p369174799" target="_blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/reconnect-image-links-asia-1.png"></a>
            <a href="http://pulsecreative.zenfolio.com/p685265226" target="_blank"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/reconnect-image-links-asia-2.png"></a>
            <a href="http://pulsecreative.zenfolio.com/p845671401" target="_blank"> <img class="" src="<?php echo get_template_directory_uri(); ?>/images/reconnect-image-links-asia-3.png"></a>




        </center>
        <div>
        </div>




    </div>

    <div class="div mt-5 pt-5">
        <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

    </div>

</div>


<?php get_footer(); ?>