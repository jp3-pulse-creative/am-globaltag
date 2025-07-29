<?php
/* Template Name: Reboot: Services: Corporate M&A  */
get_header("loader"); ?>
<div id="corporate-mas" class="wrapper corporate-mas">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/corporate-ma-services-banner-bg.jpg);">
                    <h1>Corporate M&A Services<h1>
                </div>
            </div>
        </div>
    </div>
    <div id="banner-aversano-blurb-cmas" class="pepi-row corporate-mas__aversano-blurb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 px-0 d-flex flex-column flex-md-row px-md-0 mb-4 mb-md-0">
                    <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow
                    $featured_image = get_the_post_thumbnail_url(2933, 'medium'); ?>
                    <div class="mem-img mb-3 mb-md-0 pr-md-3">
                        <a class="corporate-esg__team-link" href="<?php echo get_field('external_link', 2933) ?>" target="_blank">

                            <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                alt="<?php echo get_field('first_name', 2933); ?> ><?php echo get_field('last_name', 2933); ?>, <?php echo get_field('title', 2933); ?> & <?php echo get_field('gl_area', 2933); ?>">
                        </a>
                    </div>

                    <figcaption>
                        <a class="corporate-esg__team-link" href="<?php echo get_field('external_link', 2933) ?>" target="_blank">

                            <h3 class="corporate-mas__aversano-name">
                                <?php echo get_field('first_name', 2933); ?> <?php echo get_field('last_name', 2933); ?></h3>
                            <span class="title-gl-area d-block">
                                <span class="title"><?php echo get_field('title', 2933); ?></span>
                                <span class="gl-area"> & <?php echo get_field('gl_area', 2933); ?></span>
                            </span>

                        </a>
                    </figcaption>
                </div>
                <div class="col-md-7 px-0 px-md-0">
                    <p>
                        A&M combines deep Financial, Tax and Operations services necessary for every type of M&A transaction (buy-side, sell-side, carve-out, cross-border, etc.).
                    </p>
                    <p class="mb-0">
                        Our hands-on approach provides client with independent support for strategy, finance, tax, operations, HR, and IT. In addition, A&M works closely with external teams including investment banks, counsel, auditors, and others to maximize M&A transaction success.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <?php include(TEMPLATEPATH . '/includes/services/banner-capabilities.php'); ?>


    <div id="corporate-mas__support-model" class="corporate-mas__support-model pepi-row pepi-row__pad">
        <div class="container">
            <div class="row">


                <div class="col-md-6 order-md-2 px-md-0 mb-4 mb-md-0">
                    <img class="img-fluid w-100"
                        src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ma-support-model-image.jpg"
                        alt="">
                </div>
                <div class="col-md-6 order-md-1 px-md-0 pr-lg-5">
                    <h2 class="section-title text-capitalize mt-mn-md-5">Flexible M&A Support model</h2>
                    <div class="short-border"></div>

                    <ul class="corporate-mas__support-model-list m-0 pl-0">
                        <li>Being the Arms & Legs: Providing “extra bodies,” Predetermined Tasks, Largely “Client”-Directed, Weighted towards Junior Staff</li>

                        <li class="pr-lg-5">Project Management: Workstream Coordination, Communication, Status-tracking & Reporting and Synergy Validation</li>

                        <li>Expert Advisory: Filling gaps with experience-based input, problem-solving with a functional/geographic focus</li>

                        <li class="pr-lg-5">Leadership: Planning & Execution, Decision-making Authority, Accountability for Success
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div id="corporate-mas__differentiators" class="pepi-row corporate-mas__differentiators">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 px-0 col-md-6 order-2 px-md-0">
                    <div class="ml-md-5 pl-md-4">

                        <h2 class="section-title">Our Differentiators</h2>
                        <div class="short-border"></div>
                        <ul class="corporate-mas__differentiators-list spaced-list m-0 pl-3">
                            <li>More Insights; Better Decisions; Faster Execution</li>
                            <li>Increased Efficiency & Competitiveness</li>
                            <li>Improved Risk Identification & Mitigation</li>
                            <li>Maximum Synergy Capture</li>
                            <li>Drive Value Creation Throughout Transaction</li>
                        </ul>
                    </div>


                </div>
                <div class="col-12 px-0 col-md-6 px-md-0 mb-4 mb-md-0">

                    <img class="img-fluid w-100"
                        src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ma-differentiators-image.jpg"
                        alt="">



                </div>
            </div>
        </div>

    </div>

    <div id="corporate-mas__transaction-lifestyle" class="corporate-mas__transaction-lifestyle pepi-row">
        <div class="container">
            <div class="row">
                <div class="col-12 px-0 px-md-0">
                    <h2 class="section-title section-title--smaller text-capitalize">The Transaction Lifecycle</h2>
                    <div class="short-border"></div>
                    <p class="d-flex flex-column flex-md-row align-items-md-end mb-0">
                        <img class="mr-4 mb-4 mb-md-0"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/logo-ma-sm.svg"
                            alt="A&M is M&A" style="max-width: 142px;">
                        A&M provides exceptional M&A support throughout the transaction lifecycle and works closely with external teams including investment banks, counsel, auditors, and others to maximize M&A transaction success.

                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="d-none d-md-block pepi-row position-relative">



        <div id="amgt-gta-6cc-b" class="">
            <div class="container">
                <div class="row">
                    <div id="gta6cc-table1" class="w-100">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="31%" align="center" valign="middle" bgcolor="#002b49"
                                        class="gta6cc-leader1">
                                        <div class="gta6cc-title gtatt-1"><strong>Strategy +<br>
                                                Supporting Analysis</strong>
                                        </div>
                                    </td>
                                    <td width="16%" align="center" valign="middle" bgcolor="#002b49"
                                        class="gta6cc-leader2">
                                        <div class="gta6cc-title gtatt-2"><strong>Offer + Negotiation
                                            </strong></div>
                                    </td>
                                    <td width="16%" align="center" valign="middle" bgcolor="#002b49"
                                        class="gta6cc-leader3">
                                        <div class="gta6cc-title gtatt-3"><strong>Structuring +<br>
                                                Financing
                                            </strong></div>
                                    </td>
                                    <td width="17%" align="center" valign="middle" bgcolor="#002b49"
                                        class="gta6cc-leader4">
                                        <div class="gta6cc-title gtatt-4"><strong>Transaction Close
                                            </strong></div>
                                    </td>
                                    <td width="15%" align="center" valign="middle" bgcolor="#fff"
                                        class="gta6cc-leader5">
                                        <div class="gta6cc-title gtatt-5"><strong>Post-Close</strong></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="gta6cc-hr">

                    <div id="gta6cc-table2" class="w-100">
                        <table width="92%" border="0" cellspacing="2" cellpadding="2">
                            <tbody>
                                <tr>
                                    <td width="12%" align="center" valign="middle" bgcolor="#4e8abe"
                                        class="gta6cc-cell">
                                        <div class="gta6cc-title"><strong>Financial</strong></div>
                                    </td>
                                    <td width="16%" align="left" valign="top" bgcolor="#ccd4da" class="gta6cc-cell">
                                        <li class="gta6cc-list">Situation Analysis</li>
                                        <li class="gta6cc-list">Due Diligence</li>
                                        <li class="gta6cc-list">Quality of Earnings</li>

                                    </td>
                                    <td width="16%" align="center" valign="middle" bgcolor="#ccd4da"
                                        class="gta6cc-cell">
                                        <li class="gta6cc-list">Buy-Side Support</li>
                                        <li class="gta6cc-list">Sell-Side Preparedness</li>
                                        <li class="gta6cc-list">Pro Forma Support</li>
                                    </td>
                                    <td width="16%" align="center" valign="middle" bgcolor="#ccd4da"
                                        class="gta6cc-cell">
                                        <li class="gta6cc-list">Detailed Pro Forma</li>
                                        <li class="gta6cc-list">Credit Metrics</li>
                                        <li class="gta6cc-list">Equity Impacts</li>
                                    </td>
                                    <td width="16%" align="center" valign="middle" bgcolor="#ccd4da"
                                        class="gta6cc-cell">
                                        <li class="gta6cc-list">Purchase Allocation</li>
                                        <li class="gta6cc-list">Accounting Entries</li>
                                        <li class="gta6cc-list">Financial Metrics</li>
                                    </td>
                                    <td width="16%" align="center" valign="middle" bgcolor="#ccd4da"
                                        class="gta6cc-cell">
                                        <li class="gta6cc-list">Accounting</li>
                                        <li class="gta6cc-list">W/C Adjustment</li>
                                        <li class="gta6cc-list">Earn-out</li>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="middle" bgcolor="#4e8abe" class="gta6cc-cell">
                                        <div class="gta6cc-title"><strong>Tax</strong></div>
                                    </td>
                                    <td align="left" valign="top" bgcolor="#e5e9ec" class="gta6cc-cell">
                                        <li class="gta6cc-list">Due Diligence</li>
                                        <li class="gta6cc-list">Tax Modeling</li>

                                    </td>
                                    <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
                                        <li class="gta6cc-list">Deal Value Planning</li>
                                        <li class="gta6cc-list">LOI/SPA Assistance</li>
                                    </td>
                                    <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
                                        <li class="gta6cc-list">Tax Optimization</li>
                                        <li class="gta6cc-list">Structuring</li>
                                    </td>
                                    <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
                                        <li class="gta6cc-list">Execution Advisory</li>
                                        <li class="gta6cc-list">Purchase Allocation</li>
                                    </td>
                                    <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
                                        <li class="gta6cc-list">Return Prep/Review</li>
                                        <li class="gta6cc-list">Documentation</li>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="middle" bgcolor="#4e8abe" class="gta6cc-cell">
                                        <div class="gta6cc-title"><strong>Operations</strong></div>
                                    </td>
                                    <td align="left" valign="top" bgcolor="#ccd4da" class="gta6cc-cell">
                                        <li class="gta6cc-list">Due Diligence</li>
                                        <li class="gta6cc-list">Data Analytics</li>
                                        <li class="gta6cc-list">Synergies</li>

                                    </td>
                                    <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
                                        <li class="gta6cc-list">TSA Support</li>
                                    </td>
                                    <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
                                        <li class="gta6cc-list">Define KPIs</li>
                                        <li class="gta6cc-list">Milestones</li>
                                        <li class="gta6cc-list">Day 1 Readiness</li>
                                    </td>
                                    <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
                                        <li class="gta6cc-list">Interim Leadership</li>
                                        <li class="gta6cc-list">Integration/Separation (e.g. PMI)</li>

                                    </td>
                                    <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
                                        <li class="gta6cc-list">Implementation</li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>



        </div>
    </div>
    <div class="d-md-none">

        <div id="amgt-gta-6cc-b">
            <div class="container">

                <div class="col-12 px-0 px-0">
                    <img class="ma-ico" src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ma-ico-1.png"
                        border="0" alt="" title="">
                    <h5>Strategy + Supporting Analysis</h5>
                    <span class="ma-mobile">We provide situation analysis, comprehensive due diligence, tax modeling,
                        data analytics and synergy analysis.
                    </span>
                </div>

                <div class="col-12 px-0 px-0">
                    <img class="ma-ico" src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ma-ico-2.png"
                        border="0" alt="" title="">
                    <h5>Offer &amp; Negotiation Support </h5>
                    <span class="ma-mobile">We assist clients with buy-side support and sell-side preparedness ranging
                        from pro forma financials to LOI/SPA assistance to TSA support. </span>

                </div>

                <div class="col-12 px-0 px-0">
                    <img class="ma-ico" src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ma-ico-3.png"
                        border="0" alt="" title="">
                    <h5> Structuring &amp; Financing Support</h5>
                    <span class="ma-mobile">We work closely with clients to establish detailed financial and operational
                        considerations necessary to ensure seamless transition and Day 1 readiness planning. </span>

                </div>

                <div class="col-12 px-0 px-0">
                    <img class="ma-ico" src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ma-ico-4.png"
                        border="0" alt="" title="">
                    <h5>Transaction Close</h5>
                    <span class="ma-mobile">We conduct purchase price allocation along with supporting tax/accounting
                        assistance; in addition, we provide hands-on leadership to effect post-merger integration or
                        carve-out support.</span>

                </div>

                <div class="col-12 px-0 px-0">
                    <img class="ma-ico" src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ma-ico-5.png"
                        border="0" alt="" title="">
                    <h5>Post-Close</h5>
                    <span class="ma-mobile">We provide comprehensive post-close services including financial accounting,
                        working capital adjustments, help with earn-outs, tax return preparation &amp; review, tax
                        documentation, and complete hands-on operations implementation.</span>

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