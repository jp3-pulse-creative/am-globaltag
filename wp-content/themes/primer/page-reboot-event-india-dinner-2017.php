<?php
/* Template Name: Reboot: Event - India Dinner 2017
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
                    <p style="font-size: 18px; line-height: 22px;">On November 29, 2017, Alvarez & Marsal hosted a
                        special evening in celebration of nine years of service in India for clients and friends at AER
                        Rooftop, Four Seasons Hotel, Mumbai. Thank you for helping us on our continued journey to
                        success.<br class="d-none d-md-inline">Here’s
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
            <a href="https://pulsecreative.zenfolio.com/p745602703" target="_blank"><img class="pl-1"
                    src="https://am-globaltag.com/wp-content/themes/bones/images/indian-photos.jpg"></a>

        </center>
        <div>
        </div>
    </div>

    <div class="div mt-5 pt-5">
        <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

    </div>

</div>


<?php get_footer(); ?>