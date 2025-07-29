<?php
/* Template Name: Reboot: What We Do  */
get_header("loader"); ?>
<div id="what-we-do" class="wrapper what-we-do">

    <div class="hero-row">
        <div class="row">
            <div class="col-12 px-0 px-0">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/what-we-do/what-we-do-banner-bg.jpg);">
                    <h1>What We Do<h1>
                </div>
            </div>
        </div>
    </div>
    <div id="what-we-do__intro" class="pepi-row pepi-row__mt what-we-do__intro">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0 px-0">

                    <div class="service-content">

                        <p>Whether buying, selling or optimizing performance, A&M’s integrated approach delivers value throughout a transaction. Our Global Transaction Advisory Group's integrated due diligence approach goes beyond traditional quality of earnings analyses and focuses on key value drivers for sponsors and lenders. We combine A&M's deep operational, functional and industry expertise with Big-Four quality financial accounting and tax services to drive value throughout the investment lifecycle.</p>



                        <p>Our Global Transaction Advisory team operates seamlessly cross-border providing clients consistent and flawless quality service.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php include(TEMPLATEPATH . '/includes/what-we-do/due-diligence-module.php'); ?>

    <div id="what-we-do__cmas" class="what-we-do_cmas pepi-row pepi-row__pad-y bg-lighter-grey mb-0">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-md-6 order-md-2 px-0 mb-4 mb-md-0">
                    <img class="img-fluid w-100"
                        src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/what-we-do/what-we-do__cmas-image.jpg"
                        alt="">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="section-title text-capitalize">Corporate M&A Services</h2>
                    <div class="short-border"></div>
                    <p class="pr-md-4 pr-xl-5 pt-3 pb-4">
                        A&M Corporate M&A Services combines deep financial, tax and operations services necessary for every type of M&A transaction (buy-side, sell-side, carve-out, cross-border, etc.)

                    </p>

                    <a href="<?php echo site_url(); ?>/corporate-ma-services/" class="cta-btn mt-2">
                        <div class="cta-inner cta-inner d-flex align-items-center"><span
                                class="arrow_carrot-right"></span><span class="btn-label amblue">Learn More</span>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </div>
    <div id="what-we-do__gta" class="what-we-do_gta pepi-row pepi-row__pad mt-0 pt-0 bg-lighter-grey">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-md-6 px-0">
                    <img class="img-fluid w-100"
                        src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/what-we-do/what-we-do__gta-image.jpg"
                        alt="">
                </div>
                <div class="col-md-6 pl-md-4 pl-xl-5">
                    <h2 class="section-title text-capitalize pl-md-4">Global Transaction Analytics</h2>
                    <div class="short-border ml-md-4"></div>
                    <p class="pt-3 pb-4  pl-md-4">
                        A&M Global Transaction Analytics practice embeds analytics throughout financial due diligence, business due diligence and performance improvement services.
                    </p>

                    <a href="<?php echo site_url(); ?>/global-transaction-analytics/" class="cta-btn mt-2 ml-md-4">
                        <div class="cta-inner cta-inner d-flex align-items-center"><span
                                class="arrow_carrot-right"></span><span class="btn-label amblue">Learn More</span>
                        </div>
                    </a>

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