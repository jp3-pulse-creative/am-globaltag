<?php

get_header(); ?>
<div id="in-the-bunker" class="wrapper in-the-bunker">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12 px-0">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/in-the-bunker/in-the-bunker-banner-bg.jpg);">
                    <h1>
                        <span class="video-series d-block">Video Series</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/in-the-bunker/in-the-bunker-header-logo.svg"
                            alt="">
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
                        Through the “In The Bunker with A&M” video series, Alvarez & Marsal Global Transaction Advisory
                        Group’s Global Practice Leader Paul Aversano, along with EMEA Practice Leader Antonio
                        Alvarez III, share insights on the Coronavirus crisis, giving an “inside” look at the firm and
                        how it’s operating during this time – from the impact on the day-to-day business at A&M, what
                        the firm’s leaders are seeing across the global economies, and their real time reactions to the
                        various shifting situations around the world.
                    </p>
                </div>

            </div>
        </div>

    </div>
    <div id="in-the-bunker__video" class="in-the-bunker__video pepi-row">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0 px-0">
                    <a href="<?php echo site_url(); ?>/in-the-bunker-2022" class="plain-btn"><i><img
                                src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/feather-arrow-right-amblue.svg"
                                alt="arrow-right" style="transform: rotate(180deg);"></i> Back to Library</a>

                    <div class="videoWrap mt-5">

                        <iframe src="https://www.youtube.com/embed/<?php the_field('yt'); ?>" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 px-0 my-5 px-0">
                    <h2 class="section-title section-title--smaller">
                        <?php echo get_the_date(); ?>
                    </h2>
                    <div class="short-border"></div>
                    <p>
                        <?php echo get_the_date(); ?>
                        <?php the_field('excerpt'); ?>
                    </p>
                </div>


                <div class="nav-wrap text-right w-100 text-uppercase d-flex flex-column flex-md-row justify-content-between">



                    <div class="ml-auto">
                        <?php if (!get_previous_post_link()): ?>
                            <a href="<?php echo site_url(); ?>/our-team/" rel="prev">
                                <div class="d-flex align-items-center justify-content-end next-button plain-btn right">
                                    <h5 class="d-inline text-truncate mr-3 mb-0">All In The Bunker</h5> <svg class="mr-3"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="26"
                                        viewBox="0 0 21.634 39.025" style="transform: rotate(180deg);">
                                        <g id="arrow_left" data-name="arrow left" transform="translate(2.121 1.061)">
                                            <path id="arrow_left-2" data-name="arrow left"
                                                d="M25.952,44.4,7.5,25.952,25.952,7.5" transform="translate(-7.5 -7.5)"
                                                fill="none" stroke="#00244A" stroke-width="4"></path>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        <?php else: ?>

                            <?php previous_post_link('%link', '<div class="d-flex align-items-center justify-content-end next-button plain-btn right"><h5 class="d-inline text-truncate mr-3 mb-0">%title</h5> <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 21.634 39.025" style="transform: rotate(180deg);">
                                    <g id="arrow_left" data-name="arrow left" transform="translate(2.121 1.061)">
                                        <path id="arrow_left-2" data-name="arrow left" d="M25.952,44.4,7.5,25.952,25.952,7.5" transform="translate(-7.5 -7.5)" fill="none" stroke="#00244A" stroke-width="4"></path>
                                    </g>
                                </svg></div>'); ?>
                        <?php endif; ?>

                    </div>


                </div>




            </div>





        </div>

    </div>

</div>




<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>




</div>


<?php get_footer(); ?>