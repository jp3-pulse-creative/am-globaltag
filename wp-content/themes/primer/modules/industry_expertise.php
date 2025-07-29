<?php

$heading = get_sub_field('heading');
$blurb = get_sub_field('blurb');


?>
<style>
    @media (min-width: 991px) {
        .text-container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            height: 100%;

        }

        .industry-expertise__row {
            margin-right: -30px !important;
            margin-left: -30px !important;

        }

    }
</style>
<section id="industryExpertise" class="industry-expertise position-relative pepi-row__pad-y">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-6 pl-lg-0">
                <h2 class="section-title">
                    <?php if ($heading) {
                        echo wp_kses_post($heading);
                    } else {
                        echo 'Industry Expertise';
                    } ?></h2>
                <div class="short-border"></div>
            </div>
            <div class="col-12 col-lg-6 px-lg-0 pt-2">
                <p>
                    <?php if ($blurb) {
                        echo wp_kses_post($blurb);
                    } else {
                        echo 'Our global team has extensive industry knowledge across multiple sectors including, but not limited to, dedicated industry verticals in Healthcare, Software & Technology, Energy & Infrastructure, and Financial Services.';
                    } ?>
                </p>

            </div>
        </div>
        <?php
        $industries = get_sub_field('industries_relationship');
        if ($industries) {
        ?>
            <div class="row industry-expertise__row">
                <style>
                    .industry-card__content {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                    }
                </style>
                <?php
                foreach ($industries as $industry) {
                    setup_postdata($industry); // Ensure the correct post object is used
                    if (get_field('custom_title', $industry->ID)) {
                        $industry_title = get_field('custom_title', $industry->ID);
                    } else {
                        $industry_title = get_the_title($industry);
                    }
                    $industry_thumb = get_field('industry_thumb', $industry->ID);
                    $industry_icon = get_field('industry_icon', $industry->ID);

                    if ($industry_thumb && is_array($industry_thumb)) {
                        $industry_thumb_url = $industry_thumb['url'];
                        $industry_thumb_alt = $industry_thumb['alt'];
                    } else {
                        $industry_thumb_url = get_template_directory_uri() . '/assets/images/companyname-industry-placeholder.jpg';
                        $industry_thumb_alt = 'Industry Placeholder';
                    }

                    if ($industry_icon && is_array($industry_icon)) {
                        $industry_icon_url = $industry_icon['url'];
                        $industry_icon_alt = $industry_icon['alt'];
                    } else {
                        $industry_icon_url = get_template_directory_uri() . '/assets/images/companyname-industry-icon-placeholder.jpg';
                        $industry_icon_alt = 'Industry Placeholder';
                    }
                ?>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="industry-card position-relative">

                            <img class="w-100 h-100 object-cover object-center" src="<?php echo esc_url($industry_thumb_url); ?>" alt="<?php echo esc_attr($industry_thumb_alt); ?>">
                            <div class="industry-card__content">
                                <div class="icon-wrap">
                                    <img class="industry-icon d-block mx-auto" src="<?php echo esc_url($industry_icon_url); ?>" alt="<?php echo esc_attr($industry_icon_alt); ?>">
                                </div>

                                <h3 class="industry-card__title text-white"><?php echo wp_kses_post($industry_title); ?></h3>

                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        <?php
        }
        ?>
    </div>
</section>