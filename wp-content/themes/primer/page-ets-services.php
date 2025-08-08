<?php
/* Template Name: Reboot: Services: ETS Services  */
get_header("loader"); ?>
<div id="ets-services" class="ets-services">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-services-hero.jpg), linear-gradient(to right,rgba(0,0,0,.39)66%, rgba(0,0,0,0)105%); background-blend-mode: multiply;">
                    <h1>Environmental, Technical and Sustainability Services<h1>
                </div>
            </div>
        </div>
    </div>



    <div id="ets-about" class="pepi-row ets-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 px-0 d-flex px-md-0 mb-4 mb-md-0">
                    <div class="col-4 pr-0">
                        <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow
                        $featured_image = get_the_post_thumbnail_url(4907, 'medium'); ?>
                        <a class="corporate-esg__team-link" href="<?php echo get_field('external_link', 4907) ?>" target="_blank">
                            <div class="mem-img mb-3">
                                <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                    alt="<?php echo get_field('first_name', 4907); ?> <?php echo get_field('last_name', 4907); ?>, <?php echo get_field('title', 4907); ?> & <?php echo get_field('gl_area', 4907); ?>">
                            </div>
                            <figcaption>
                                <h3 class="corporate-esg__aversano-name">
                                    <?php echo get_field('first_name', 4907); ?> <br><?php echo get_field('last_name', 4907); ?>
                                </h3>
                                <div class="title-gl-area d-block">
                                    <div class="title"><?php echo get_field('title', 4907); ?></div>
                                    <?php if (get_field('gl_area', 4907)): ?>
                                        <div class="gl-area"> & <?php echo get_field('gl_area', 4907); ?></div>
                                    <?php endif; ?>
                                    </div>
                            </figcaption>
                        </a>
                    </div>

                    <div class="col-4 pr-0">
                        <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow

                        $featured_image = get_the_post_thumbnail_url(4948, 'medium'); ?>
                        <a href="<?php echo get_field('external_link', 4948) ?>" class="corporate-esg__team-link" target="_blank">
                            <div class="mem-img mb-3">
                                <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                    alt="<?php echo get_field('first_name', 4948); ?> <?php echo get_field('last_name', 4948); ?>, <?php echo get_field('title', 4948); ?> & <?php echo get_field('gl_area', 4948); ?>">
                            </div>
                            <figcaption>
                                <h3 class="corporate-esg__aversano-name">
                                    <?php echo get_field('first_name', 4948); ?> <br><?php echo get_field('last_name', 4948); ?>
                                </h3>
                                <div class="title-gl-area d-block">
                                    <div class="title"><?php echo get_field('title', 4948); ?></div>
                                    <?php if (get_field('gl_area', 4948)): ?>
                                        <div class="gl-area"> & <?php echo get_field('gl_area', 4948); ?></div>
                                    <?php endif; ?>
                                </div>
                            </figcaption>
                        </a>
                    </div>

                    <div class="col-4 pr-0">
                        <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow

                        //$featured_image = get_the_post_thumbnail_url(4948, 'medium'); ?>
                        <a href="https://www.alvarezandmarsal.com/our-people/stephanie-weiler" class="corporate-esg__team-link" target="_blank">
                            <div class="mem-img mb-3">
                                <img style="object-position: top !important;" class="mem-img" src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-stephanie-weiler.jpg"
                                    alt="Stephanie Weiler, Managing Director">
                            </div>
                            <figcaption>
                                <h3 class="corporate-esg__aversano-name">
                                    Stephanie <br>Weiler
                                </h3>
                                <div class="title-gl-area d-block">
                                    <div class="title">Managing Director</div>
                                    <?php /* if (get_field('gl_area', 4948)): ?>
                                        <div class="gl-area"> & <?php echo get_field('gl_area', 4948); ?></div>
                                    <?php endif; */ ?>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 px-0 pl-md-5">

                    <?php /*<h2 class="section-title small">Environmental, Social & Governance <br>Transaction Advisory</h2>
                    <div class="short-border"></div> */ ?>
                    <p class="mt-0">Our Environmental, Technical and Sustainability (ETS) Services team is focused on protecting, optimizing and enhancing business value. Whether you seek to navigate risk, drive operational efficiency or accelerate growth potential, we are your trusted experts.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="ets-our-services" class="ets-our-services bg-lighter-grey">
        <div class="container pt-5">
            <div class="row pt-5 pepi-row__pad-b">
                <h2 class="section-title--smaller">Discover How We Can Help You Solve Complex Problems And Drive Sustainable Growth.</h2>
                <div class="short-border mb-5"></div>
                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-icon-1.svg"
                            alt="ets Pre-Deal assistance icon">
                        <div class="differentiators-breakdown__info pr-xl-3">
                            <h3>Lower Your Risk Profile</h3>
                            <p class="differentiators-breakdown__text">Safeguard business value and strengthen financial resilience with strategic risk assessments, clear narratives and robust risk mitigation strategies.</p>
                        </div>


                    </div>
                </div>
        
                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-icon-2.svg"
                            alt="ets Negotiation support icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Eliminate Barriers to Business</h3>
                            <p class="differentiators-breakdown__text">Simplify compliance and regulatory readiness, reporting, data management and integration with our expert-led Environmental-Technical-Sustainability guidance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-icon-3.svg"
                            alt="ets Post-Deal support icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Optimize Cost and Efficiency</h3>
                            <p class="differentiators-breakdown__text">Streamline your technical systems, reduce waste and resource use, and maximize ROI on capital investments with innovative strategies tailored to your industry.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-icon-4.svg"
                            alt="ets Post-Deal support icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Unlock Sustainability-Driven Value</h3>
                            <p class="differentiators-breakdown__text">Minimize disruptions, align processes, unlock synergies and accelerate growth while increasing confidence among stakeholders.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-icon-5.svg"
                            alt="ets Post-Deal support icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Tailored Environmental Technical Sustainability Offerings <br class="d-none d-xl-inline">for Business Success</h3>
                            <p class="differentiators-breakdown__text">We provide expert guidance and tailored environmental technical sustainability solutions to support your business at any point in the corporate or transaction lifecycle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="ets-our-services" class="ets-our-services pepi-row  bg-amblue">
        <div class="container pepi-row__pad-y">
            <h2 class="section-title text-white">Our Offerings</h2>
            <div class="short-border"></div>
            <div class="row align-items-top">
                
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-4">
                    <div>
                        <p class="text-white checkmark">Buy-Side & Sell-<br class="d-none d-xl-inline">side Support</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-4">
                    <div>
                        <p class="text-white checkmark">Post-Close Integration</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-4">
                    <div>
                        <p class="text-white checkmark">EHS and Sustainability <br class="d-none d-xl-inline">Performance and <br class="d-none d-xl-inline">Operational <br class="d-none d-xl-inline">Improvement</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-4">
                    <div>
                        <p class="text-white checkmark">Process Safety <br class="d-none d-xl-inline">Management</p>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-4">
                    <div>
                        <p class="text-white checkmark">Regulatory Readiness, <br class="d-none d-xl-inline">Compliance and <br class="d-none d-xl-inline">Reporting</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-4">
                    <div>
                        <p class="text-white checkmark">Maintenance, <br class="d-none d-xl-inline">Reliability and <br class="d-none d-xl-inline">resource Optimization</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-4">
                    <div>
                        <p class="text-white checkmark">GHG Emissions and <br class="d-none d-xl-inline">climate Risk <br class="d-none d-xl-inline">Management</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="ets-why-choose-am" class="pepi-row gl__ourdiff ets-why-choose-am">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 px-0 col-md-6 order-2 px-md-0">
                    <div class="pl-md-4">
                        <h2 class="section-title">Wherever you are in your journey, we’re here to help you move forward with confidence.</h2>
                        <div class="short-border"></div>
                        <ul class="corporate-esg__differentiators-list spaced-list mt-5 pl-3">
                            <li>Deep Context and Insights</li>
                            <li>Tailored Solutions for Sector-Specific Issues and Company Maturity</li>
                            <li>Hands-On Support, Technical-Depth and Partnership</li>
                            <li>Focus on Opportunities, Not Only Risk</li>
                            <li>Integrated Approach & Effective Execution</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 px-0 col-md-6 px-md-0 mb-4 mb-md-0">
                    <div class="lightblue-blend mr-md-5"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/ets-where-ever-you-are.jpg);">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="ets-contact-us" class="bg-llight-blue-4 ets-contact-us">
        <div class="container">
            <div class="row flex-column flex-md-row pepi-row__pad-y align-items-md-center">
                <div class="col-md-6 mb-4 mb-md-0 pr-xl-5 px-0 px-md-0">
                    <h2 class="section-title text-white">Download our <br>Brochures</h2>
                    <div class="short-border white-bg"></div>
                </div>
                <div class="col-md-6 px-0 px-md-0">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
                            <a href="https://www.alvarezandmarsal.com/sites/default/files/2025-03/ETS_Environmental%20solution%20FINAL.pdf" class="img-btn es" target="_blank">
                                Environmental <br>Solutions
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
                            <a href="https://www.alvarezandmarsal.com/sites/default/files/2025-03/ETS_Technical%20Solutions.pdf" class="img-btn ts" target="_blank">
                                Technical <br>Solutions
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
                            <a href="https://www.alvarezandmarsal.com/sites/default/files/2025-03/ETS_Sustainability%20solution%20FINAL.pdf" class="img-btn ss" target="_blank">
                                Sustainability <br>Solutions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>