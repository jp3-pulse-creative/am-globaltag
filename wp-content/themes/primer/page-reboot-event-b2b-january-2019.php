<?php
/* Template Name: Reboot: Event -  B2B January 2019 - Reconnect Engage
*/
get_header(); ?>
<div id="b2b-2019" class="wrapper b2b-2019 event-page">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>);">
                    <h1 class="event-title mt-5 pt-5">
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
                    <p style="font-size: 18px; line-height: 22px;">On August 22nd, Alvarez & Marsal hosted a special
                        dinner to toast the opening of our New Delhi office with clients and partners. Thank you all for
                        coming to celebrate our India team’s continuous growth.<br class="d-none d-md-inline">Here’s a
                        few moments from the evening. Enjoy!
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <div class="video-ampes bg-amblue pepi-row mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="videoWrp">
                        <iframe id="youtube1" src="https://www.youtube.com/embed/7hX1efg24sg?rel=0" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="section-reconnect6">
        <h2 class="text-white text-center">Photo Gallery</h2>

        <center>
            <a href="https://pulsecreative.zenfolio.com/p324066185/hC320FB95#hc320fb95" target="_blank"><img class="" src="https://am-globaltag.com/wp-content/themes/bones/images/2-4-2019-photos.jpg"></a>

        </center>
        <div>
        </div>
    </div>

    <div class="div mt-5 pt-5">
        <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

    </div>

</div>


<?php get_footer(); ?>