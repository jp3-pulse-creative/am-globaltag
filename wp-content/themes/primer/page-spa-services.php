<?php
/* Template Name: Reboot: Services: SPA Services  */
get_header("loader"); ?>
<div id="spa-services" class="spa-services">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/spa-services-hero.jpg), linear-gradient(to right,rgba(0,0,0,.39)66%, rgba(0,0,0,0)105%); background-blend-mode: multiply;">
                    <h1>Sale & Purchase Agreement (SPA) Services<h1>
                </div>
            </div>
        </div>
    </div>



    <div id="spa-about" class="pepi-row spa-about">
        <div class="container">
            <div class="row">
                <div class="col-md-5 px-0 d-flex px-md-0 mb-4 mb-md-0">
                    <div class="col-6 pr-0">
                        <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow
                        $featured_image = get_the_post_thumbnail_url(8054, 'medium'); ?>
                        <a class="corporate-esg__team-link" href="<?php echo get_field('external_link', 8054) ?>" target="_blank">
                            <div class="mem-img mb-3">
                                <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                    alt="<?php echo get_field('first_name', 8054); ?> <?php echo get_field('last_name', 8054); ?>, <?php echo get_field('title', 8054); ?> & <?php echo get_field('gl_area', 8054); ?>">
                            </div>
                            <figcaption>
                                <h3 class="corporate-esg__aversano-name">
                                    <?php echo get_field('first_name', 8054); ?> <br><?php echo get_field('last_name', 8054); ?>
                                </h3>
                                <span class="title-gl-area d-block">
                                    <span class="title"><?php echo get_field('title', 8054); ?></span>
                                    <?php if (get_field('gl_area', 8054)): ?>
                                        <span class="gl-area"> & <?php echo get_field('gl_area', 8054); ?></span>
                                    <?php endif; ?>
                                    </span>
                            </figcaption>
                        </a>
                    </div>

                    <div class="col-6 pr-0">
                        <?php  // pulling leader info and headshot  from team bio by ID, number will need to adjust if bio ID changes for some reason, ie. deleted and recreated somehow

                        $featured_image = get_the_post_thumbnail_url(2933, 'medium'); ?>
                        <a href="<?php echo get_field('external_link', 2933) ?>" class="corporate-esg__team-link" target="_blank">
                            <div class="mem-img mb-3">
                                <img class="mem-img" src="<?php echo $featured_image;  ?>"
                                    alt="<?php echo get_field('first_name', 2933); ?> <?php echo get_field('last_name', 2933); ?>, <?php echo get_field('title', 2933); ?> & <?php echo get_field('gl_area', 2933); ?>">
                            </div>
                            <figcaption>
                                <h3 class="corporate-esg__aversano-name">
                                    <?php echo get_field('first_name', 2933); ?> <br><?php echo get_field('last_name', 2933); ?>
                                </h3>
                                <span class="title-gl-area d-block">
                                    <span class="title"><?php echo get_field('title', 2933); ?></span>
                                    <?php if (get_field('gl_area', 2933)): ?>
                                        <span class="gl-area"> & <?php echo get_field('gl_area', 2933); ?></span>
                                    <?php endif; ?>
                                </span>
                            </figcaption>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 px-0 pl-md-5">

                    <?php /*<h2 class="section-title small">Environmental, Social & Governance <br>Transaction Advisory</h2>
                    <div class="short-border"></div> */ ?>
                    <p class="mt-0">At A&M, we specialize in providing comprehensive Sale and Purchase Agreement (SPA) Services. We understand the current market trends and what private equity and corporate buyers and sellers will expect from a successful transaction process. Our dedicated team of experts is committed to assisting you in navigating the complexities of the analysis and negotiation of the purchase price, SPA and post-deal purchase price adjustments. We ensure that you achieve optimal value on the purchase price and SPA and mitigate risks.</p>

                    <p>Whether you are a buyer or a seller, our experienced team is dedicated to guiding you through these critical areas to ensure that your position on the SPA and purchase price is optimized and protected.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="spa-our-services" class="spa-our-services pepi-row bg-lighter-grey">
        <div class="container pt-5">
            <div class="row flex-column flex-md-row pepi-row__pad-y align-items-md-center">
                <div class="col-md-6 mb-4 mb-md-0 pr-xl-5">
                    <h2 class="section-title">Our Services</h2>
                    <div class="short-border"></div>
                    <p class="mb-0 pr-md-4">Our dedicated SPA team provides expert support at all stages of a transaction from pre-deal work through to post-deal support.</p>
                </div>
                <div class="col-md-6">
                    <div class="lightblue-blend"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/spa-our-services.jpg);">

                    </div>
                </div>
            </div>

            <div class="row pt-5 pepi-row__pad-b">
                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/spa-icon-1.svg"
                            alt="SPA Pre-Deal assistance icon">
                        <div class="differentiators-breakdown__info pr-xl-3">
                            <h3>Pre-Deal assistance</h3>
                            <p class="differentiators-breakdown__text">Our team provides expert advice on pricing mechanisms, SPAs, and the estimated purchase price calculations to ensure they align with your strategic and commercial objectives, accurately reflects the agreements between the buyer and seller and minimize the risk of disputes. We work with your other advisors to ensure the SPA is comprehensive, clear, and tailored to the transaction that addresses the commercial terms while safeguarding your financial interests with the necessary protections.</p>
                        </div>


                    </div>
                </div>
        
                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/spa-icon-2.svg"
                            alt="SPA Negotiation support icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Negotiation support</h3>
                            <p class="differentiators-breakdown__text">We work closely with you to identify key value drivers and potential risks, providing market-based insights to inform you in your purchase price and SPA negotiations, helping you achieve favorable terms and avoid common pitfalls.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4 mb-md-5">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <img class="differentiators-breakdown__icon"
                            src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/spa-icon-3.svg"
                            alt="SPA Post-Deal support icon">
                        <div class="differentiators-breakdown__info">
                            <h3>Post-Deal support: </h3>
                            <p class="differentiators-breakdown__text">We offer comprehensive post-deal support to protect and enhance your position on any purchase price adjustment, ensuring that buyers or sellers are well-prepared to identify and address potential adjustments and movements in the final purchase price. Our services include assistance in the preparation or review or dispute of completion accounts and earn-outs and performance of locked box reviews.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="spa-why-choose-am" class="pepi-row gl__ourdiff spa-why-choose-am">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 px-0 col-md-6 order-2 px-md-0">
                    <div class="ml-md-5 pl-md-4">
                        <h2 class="section-title">Why Choose A&M?</h2>
                        <div class="short-border"></div>
                        <p>With a proven track record of delivering value-driven SPA solutions, A&M combines deep functional and industry expertise with an integrated, client-centric approach. We recognize the significance of the SPA and purchase price mechanism in M&A transactions and the impact it has on the overall success of the transaction. Our dedicated SPA Services practice is committed to supporting clients through every stage of the transaction, from negotiation and execution to dispute resolution, with a focus on achieving optimal outcomes and minimizing risks.</p>
                    </div>
                </div>
                <div class="col-12 px-0 col-md-6 px-md-0 mb-4 mb-md-0">
                    <div class="lightblue-blend mr-md-5"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/services/spa-why-choose-a-and-m.jpg);">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="spa-contact-us" class="bg-llight-blue-4 spa-contact-us">
        <div class="container">
            <div class="row flex-column flex-md-row pepi-row__pad-y align-items-md-center">
                <div class="col-md-6 mb-4 mb-md-0 pr-xl-5 px-0 px-md-0">
                    <h2 class="section-title text-white">Contact Us</h2>
                    <div class="short-border white-bg"></div>
                </div>
                <div class="col-md-6 px-0 px-md-0">
                    <div class="ml-md-5 pl-md-4">
                        <p class="text-white">Contact us today to learn more about how our team can provide tailored SPA services to help you achieve your transaction objectives. </p>

                        <a href="https://www.alvarezandmarsal.com/expertise/integrated-due-diligence/sale-and-purchase-agreement-services" target="_blank" 
                        class="cta-btn mt-2">
                            <div class="cta-inner cta-inner--white d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label">Learn More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>