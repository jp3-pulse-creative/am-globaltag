<?php
/* Template Name: Reboot: Services: GTA  */
get_header("loader"); ?>
<div id="corporate-gta" class="wrapper corporate-gta">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/gta-banner-bg.jpg);">
                    <h1>Global Transaction Analytics<h1>
                </div>
            </div>
        </div>
    </div>
    <div id="banner-aversano-blurb-cmas" class="pepi-row corporate-gta__aversano-blurb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 px-0 d-flex flex-column flex-md-row px-md-0 mb-4 mb-md-0">

                    <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow
                    $featured_image = get_the_post_thumbnail_url(2975, 'medium'); ?>
                    <div class="mem-img mb-3 mb-md-0 pr-md-3">
                        <a class="corporate-esg__team-link" href="<?php echo get_field('external_link', 2975); ?>" target="_blank">

                            <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                alt="<?php echo get_field('first_name', 2975); ?> ><?php echo get_field('last_name', 2975); ?>, <?php echo get_field('title', 2975); ?> & <?php echo get_field('gl_area', 2975); ?>">

                        </a>
                    </div>

                    <figcaption>
                        <a class="corporate-esg__team-link" href="<?php echo get_field('external_link', 2975); ?>" target="_blank">

                            <h3 class="corporate-gta__aversano-name">
                                <?php echo get_field('first_name', 2975); ?> <?php echo get_field('last_name', 2975); ?></h3>
                            <span class="title-gl-area d-block">
                                <span class="title"><?php echo get_field('title', 2975); ?></span>
                                <?php if (get_field('gl_area', 4948)): ?>
                                    <span class="gl-area"> & <?php echo get_field('gl_area', 2975); ?></span>
                                <?php endif; ?>
                            </span>
                        </a>

                    </figcaption>

                </div>
                <div class="col-md-7 px-0 px-md-0">

                    <p class="mb-0">
                        A&M provides business analytics services to clients to uncover maximum actionable insights to support their M&A, divestment and investment strategy. Global Transaction Analytics (GTA) is a global team which leverages market leading technology, advanced analytics capabilities, and A&M’s operational, functional and industry expertise to drive relevant business insights. Our global team provides analytics as a service to private equity and corporates across the transaction lifecycle.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <?php include(TEMPLATEPATH . '/includes/services/banner-capabilities.php'); ?>

    <div id="corporate-gta__rapid-analytics" class="corporate-gta__corporate-gta__rapid-analytics pepi-row bg-amblue">
        <div class="container pt-5">
            <div class="row flex-column flex-md-row pepi-row__pad-y">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="section-title mt-mn-md-5"><img style="max-width: 218px;"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/rapid-analytics-logo.svg"
                            alt="Rapid Analytics"></h2>
                    <div class="short-border"></div>
                    <p class="mb-0 text-white pr-md-4 pr-lg-5">
                        A&M’s proprietary transaction analytics platform Rapid Analytics leverages big data and cutting-edge data analytics tools to provide faster and deeper business insights. The platform combines industry-specific operational know-how with advanced analytics algorithms to uncover the unique deal drivers.
                    </p>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/rapid-analytics-image.jpg"
                        alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>

    <div id="corporate-gta__differentiators" class="pepi-row gl__ourdiff corporate-gta__differentiators">
        <div class="container">
            <div class="row align-items-center pb-5">
                <div class="col-12 px-0 col-md-6 order-2 px-md-0">
                    <div class="ml-md-5 pl-md-4">

                        <h2 class="section-title">Our Differentiators</h2>
                        <div class="short-border"></div>
                        <ul class="corporate-gta__differentiators-list spaced-list m-0 pl-3">
                            <li>Global resources with transaction expertise and data analytics experts within the same team</li>
                            <li>Aligned with former C-level operators</li>
                            <li>Industry subject matter experts</li>
                            <li>Leverage market-leading technology and advanced analytics capabilities for relevant business insights</li>
                        </ul>
                    </div>


                </div>
                <div class="col-12 px-0 col-md-6 px-md-0 mb-4 mb-md-0">

                    <img class="img-fluid w-100"
                        src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/gta-our-differentiators-image.jpg"
                        alt="">



                </div>
            </div>

            <div class="row corporate-gta__differentiators differentiators-breakdown pt-5">
                <div class="col-md-6 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start w-100 justify-content-between">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/gta4-a.svg"
                            alt="business analytics icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Business Analytics</h3>
                            <p class="differentiators-breakdown__text">
                                In-depth analysis of financial and operational metrics to support better-informed investment decisions.
                            </p>
                        </div>


                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start w-100 justify-content-between">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/gta4-b.svg"
                            alt="visualization and dashboarding icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Visualization And Dashboarding</h3>
                            <p class="differentiators-breakdown__text">
                                Simple and insightful visualization with interactive dashboards for dynamic data analytics.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="d-flex flex-column flex-md-row align-items-start w-100 justify-content-between">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/gta4-c.svg"
                            alt="predictive analytics icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Predictive Analytics</h3>
                            <p class="differentiators-breakdown__text">
                                Trend analysis and what-if scenarios to assess growth potential and support post acquisition strategy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column flex-md-row align-items-start w-100 justify-content-between">

                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/gta4-d.svg"
                            alt="big data and enrichment icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Big Data And Enrichment</h3>
                            <p class="differentiators-breakdown__text">
                                Use of big data and third-party data enrichment for increased insights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>


    <?php //include (TEMPLATEPATH . '/includes/general/contact-form02.php'); 
    ?>

</div>

<script>
    //Homepage specific scripts
    $(document).ready(function() {
        $(".hero-slider").slick({
            arrows: false,
            autoplay: false,
            draggable: false,
            infinite: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    draggable: true
                }
            }]
        });

        $(".services-slider").slick({
            arrows: false,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    centerMode: true
                }
            }]
        });
        if ($(window).width() < 768) {
            $('.industry-slider').slick({
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                centerMode: true
            });
        } else {
            $('.industry-slider').slick();
            $('.industry-slider').slick('unslick');
        };
        $(window).resize(function() {
            if ($(window).width() < 768) {
                $('.industry-slider').slick({
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    centerMode: true
                });
            } else {
                $('.industry-slider').slick();
                $('.industry-slider').slick('unslick');
            }
        });
        console.log('here');
        $(".sm-slider").slick({
            dots: false,
            arrows: false,
            slidesToShow: 3,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    centerMode: true
                }
            }]
        });
        console.log('here2');
        $("#sms-prev").click(function() {
            $(".sm-slider").slick("slickPrev");
        });
        $("#sms-next").click(function() {
            $(".sm-slider").slick("slickNext");
        });

    });

    // jQuery
    $(window).on('DOMContentLoaded load resize scroll', function() {
        var twobox = $('.twobox');
        if (isElementInViewport(twobox)) {
            $(twobox).addClass('active');
        }
    });
</script>
<?php get_footer(); ?>