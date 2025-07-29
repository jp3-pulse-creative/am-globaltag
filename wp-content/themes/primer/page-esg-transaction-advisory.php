<?php
/* Template Name: Reboot: Services: ESGTA  */
get_header("loader"); ?>
<div id="corporate-esg" class="wrapper corporate-esg">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-banner-bg.jpg), linear-gradient(to right,rgba(0,0,0,.39)66%, rgba(0,0,0,0)105%); background-blend-mode: multiply;">
                    <h1>Environmental, Social & Governance Transaction Advisory<h1>
                </div>
            </div>
        </div>
    </div>
    <div id="banner-aversano-blurb-cmas" class="pepi-row corporate-esg__aversano-blurb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 px-0 d-flex px-md-0 mb-4 mb-md-0">
                    <div class="col-6 pr-0">
                        <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow
                        $featured_image = get_the_post_thumbnail_url(4907, 'medium'); ?>
                        <a class="corporate-esg__team-link" href="<?php echo get_field('external_link', 4907) ?>" target="_blank">
                            <div class="mem-img mb-3">
                                <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                    alt="<?php echo get_field('first_name', 4907); ?> ><?php echo get_field('last_name', 4907); ?>, <?php echo get_field('title', 4907); ?> & <?php echo get_field('gl_area', 4907); ?>">
                            </div>

                            <figcaption>
                                <h3 class="corporate-esg__aversano-name">
                                    <?php echo get_field('first_name', 4907); ?> <?php echo get_field('last_name', 4907); ?>
                                </h3>
                                <span class="title-gl-area d-block">
                                    <span class="title"><?php echo get_field('title', 4907); ?></span>
                                    <?php if (get_field('gl_area', 4907)): ?>
                                        <span class="gl-area"> & <?php echo get_field('gl_area', 4907); ?></span>
                                    <?php endif; ?>
                                </span>


                            </figcaption>
                        </a>

                    </div>
                    <div class="col-6 pr-0">
                        <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow
                        $featured_image = get_the_post_thumbnail_url(4948, 'medium'); ?>
                        <a href="<?php echo get_field('external_link', 4948) ?>" class="corporate-esg__team-link" target="_blank">
                            <div class="mem-img mb-3">
                                <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                    alt="<?php echo get_field('first_name', 4948); ?> ><?php echo get_field('last_name', 4948); ?>, <?php echo get_field('title', 4948); ?> & <?php echo get_field('gl_area', 4948); ?>">
                            </div>

                            <figcaption>
                                <h3 class="corporate-esg__aversano-name">
                                    <?php echo get_field('first_name', 4948); ?> <?php echo get_field('last_name', 4948); ?>
                                </h3>
                                <span class="title-gl-area d-block">
                                    <span class="title"><?php echo get_field('title', 4948); ?></span>
                                    <?php if (get_field('gl_area', 4948)): ?>
                                        <span class="gl-area"> & <?php echo get_field('gl_area', 4948); ?></span>
                                    <?php endif; ?>
                                </span>


                            </figcaption>
                        </a>

                    </div>


                </div>
                <div class="col-md-7 px-0 pl-md-5 pr-xl-5">

                    <h2 class="section-title small">Environmental, Social & Governance <br>Transaction Advisory</h2>
                    <div class="short-border"></div>
                    <p class="mb-0 ml-0 pr-xl-3">
                        A&M’s Environmental, Social & Governance (ESG) Transaction Advisory practice was established
                        around the firm’s core values and a single concept – to help our clients be successful
                        investors. We deliver on that concept efficiently and with a high degree of certainty, which
                        leads to stakeholder confidence.</p>
                </div>
            </div>
        </div>

    </div>


    <div id="corporate-esg__rapid-analytics" class="corporate-esg__corporate-esg__rapid-analytics pepi-row bg-amblue">
        <div class="container pt-5">
            <div class="row flex-column flex-md-row pepi-row__pad-y align-items-md-center">
                <div class="col-md-6 mb-4 mb-md-0 pr-xl-5">
                    <div class="short-border"></div>
                    <p class="mb-0 text-white pr-md-4">
                        We believe ESG due diligence is best conducted by a professional services firm that can provide
                        solid technical capabilities, including environmental, health, and safety (EHS) expertise. The
                        A&M ESG Transaction Advisory team brings a unique combination of boots-on-the-<br class="d-none d-xl-inline">ground facility experience across major industries and extensive knowledge of the private equity and
                        <br class="d-none d-xl-inline">M&A landscape.
                    </p>

                </div>
                <div class="col-md-6">
                    <div class="lightblue-blend"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-unbranded-image.jpg);">

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div id="corporate-esg__differentiators" class="pepi-row gl__ourdiff corporate-esg__differentiators">
        <div class="container">
            <div class="row align-items-center pb-5">
                <div class="col-12 px-0 col-md-6 order-2 px-md-0">
                    <div class="ml-md-5 pl-md-4">

                        <h2 class="section-title">A&M’s ESG due diligence approach for acquisitions and divestitures is
                            to:</h2>
                        <div class="short-border"></div>
                        <ul class="corporate-esg__differentiators-list spaced-list m-0 pl-3 pr-xl-5">
                            <li>Integrate financial, operational, and technical due diligence workstreams to deliver
                                actionable solutions;</li>
                            <li>Translate ESG risks into quantifiable financial impacts on business operations, cash
                                flow, and equity value;</li>
                            <li>Identify value creation opportunities that align with our client’s business strategy and
                                return on investment (ROI) goals;</li>
                            <li>Implement turnkey ESG solutions from post-close to exit;
                            </li>
                            <li>Deliver ESG advisory services with a deep understanding our clients’ perspectives and deal dynamics.
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="col-12 px-0 col-md-6 px-md-0 mb-4 mb-md-0">


                    <div class="lightblue-blend"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-approach-image.jpg);">

                    </div>

                </div>
            </div>

            <div class="row corporate-esg__differentiators differentiators-breakdown pt-5">
                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-icon-1.svg"
                            alt="ESG Red Flag Evaluation icon">
                        <div class="differentiators-breakdown__info  pr-xl-3">
                            <h3>ESG Red Flag Evaluation </h3>
                            <p class="differentiators-breakdown__text pr-xl-5">
                                Aligns with A&M’s integrated due diligence service offering to identify material ESG
                                risks earlier in the process (e.g., pre-letter of intent (LOI)). We focus on risks and
                                opportunities that could impact valuation and provide effective road mapping for
                                diligence workstreams.</p>
                        </div>


                    </div>
                </div>
                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-icon-2.svg"
                            alt="Environmental, Health, and Safety Due Diligence (EDD) Evaluation icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Environmental, Health, and Safety Due Diligence (EDD) Evaluation</h3>
                            <p class="differentiators-breakdown__text">
                                Identifies and quantifies known and potential material liabilities that will affect the
                                transaction. Our EDD <br class="d-none d-xl-inline">Evaluation includes contamination liability; emerging contaminant
                                risk; regulatory compliance matters; health <br class="d-none d-xl-inline">& safety performance and culture; corporate
                                and historical liability; offsite waste disposal liability; and assessment <br class="d-none d-xl-inline">of material
                                expenditures (“CapEx” or “OpEx”) to comply with existing, pending or anticipated
                                regulations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-icon-3.svg"
                            alt="EDD Transaction Advisory Program Management icon">
                        <div class="differentiators-breakdown__info">
                            <h3>EDD Transaction Advisory Program Management</h3>
                            <p class="differentiators-breakdown__text">
                                Provide independent review and management oversight for EHS due diligence conducted by
                                third-party <br class="d-none d-xl-inline">consultants and advisors. We evaluate and communicate EHS findings in terms
                                of material financial risk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">

                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-icon-4.svg"
                            alt="ESG Transaction Scree icon">
                        <div class="differentiators-breakdown__info">
                            <h3>ESG Transaction Screen</h3>
                            <p class="differentiators-breakdown__text">
                                Assess ESG topics/metrics driven by internal policy, program and stakeholder
                                requirements &ndash; before the <br class="d-none d-xl-inline">transaction closes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">

                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-icon-5.svg"
                            alt="ESG Maturity Assessment icon">
                        <div class="differentiators-breakdown__info">
                            <h3>ESG Maturity Assessment</h3>
                            <p class="differentiators-breakdown__text">
                                Evaluate material gaps in reporting capabilities, including company organizational
                                capacity, data quality and <br class="d-none d-xl-inline">availability, drivers for disclosures, and post-close ESG
                                road mapping.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-md-0">
                    <div class="d-flex flex-column flex-md-row align-items-start">

                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/esg-icon-6.svg"
                            alt="Consolidation/Divestiture/Sell-Side Planning icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Consolidation/Divestiture/Sell-Side Planning</h3>
                            <p class="differentiators-breakdown__text">
                                Assist in preparation for sale and future buyer diligence, prioritizing ESG
                                considerations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

</div>

<?php get_footer(); ?>