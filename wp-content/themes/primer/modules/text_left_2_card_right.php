<?php
if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}
$sectionID = toKebabCase($sectionID); // Convert

if ($heading = get_sub_field('heading')) {
    $heading = get_sub_field('heading');
} else {
    $heading = 'Become a Candidate';
}
$blurb = get_sub_field('blurb');
$cta = get_sub_field('cta');
if ($cta) {
    $link_url = $cta['url'];
    $link_target = $cta['target'] ? $cta['target'] : '_self';
}
if (!empty($cta['title'])) {
    $link_title = $cta['title'];
} else {
    $link_title = 'Learn More';
}


$image_card_1 = get_sub_field('image_card_1');
$image_card_1_url = $image_card_1['url'];
if ($image_card_1['alt']) {
    $image_card_1_alt = $image_card_1['alt'];
} else {
    $image_card_1_alt = 'Campus Recruiting Process';
}
$heading_card_1 = get_sub_field('heading_card_1');
$hover_blurb_card_1 = get_sub_field('hover_blurb_card_1');

if (get_sub_field('link_card_1')) {
    $link_card_1 = get_sub_field('link_card_1');
    $link_card_1_url = $link_card_1['url'];
}

$image_card_2 = get_sub_field('image_card_2');
$image_card_2_url = $image_card_2['url'];
if ($image_card_2['alt']) {
    $image_card_2_alt = $image_card_2['alt'];
} else {
    $image_card_2_alt = 'Experience Hire Process';
}
$heading_card_2 = get_sub_field('heading_card_2');

$hover_blurb_card_2 = get_sub_field('hover_blurb_card_2');

if (get_sub_field('link_card_2')) {
    $link_card_2 = get_sub_field('link_card_2');
    $link_card_2_url = $link_card_2['url'];
}




?>

<section id="become_<?php echo esc_attr($sectionID); ?>" class="become become_<?php echo esc_attr($sectionID); ?>">
    <div id="become" class="container pepi-row__pad-y">
        <div class="row align-items-center">

            <div class="col-12 col-xl-4 d-flex flex-column pl-lg-0">
                <?php if ($heading) { ?>
                    <h2 class="section-title"><?php echo wp_kses_post($heading); ?></h2>
                    <div class="short-border"></div>
                <?php } ?>
                <p class="heading__description mb-lg-4 mb-xl-0"><?php if ($blurb) {
                                                                    echo wp_kses_post($blurb);
                                                                } else {
                                                                    echo 'We are excited that you are interested in exploring a career at A&M within the Global Transaction Advisory Group. It’s important that your experience is well-informed, impactful and valuable to you as a candidate.';
                                                                } ?></p>

                <?php if ($cta) { ?>

                    <a href="<?php echo esc_url($link_url) ?>" target="'<?php echo esc_url($link_target) ?>" class="cta-btn mt-2">
                        <div class="cta-inner cta-inner d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label amblue"><?php echo wp_kses_post($link_title) ?></span>
                        </div>
                    </a>
                <?php } ?>

            </div>
            <div class="col-12 col-sm-6 col-xl-4 pl-lg-0 pr-md-1 pr-lg-1 d-none d-md-block become__team-card-col">

                <a href="<?php if (get_sub_field('link_card_1')) {
                                echo esc_url($link_card_1_url);
                            } else {
                                echo site_url() . '/join-us/campus-recruiting/';
                            } ?>" class="h-100 w-100 d-block" data-aos="fade-in"
                    data-aos-duration="600" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                    <div class="become__card candidate-1 h-100 d-flex flex-column" style="background-image:url(<?php echo esc_url($image_card_1_url); ?>); background-size: cover;">
                        <p class="blurb position-absolute">
                            <?php if ($hover_blurb_card_1) {
                                echo wp_kses_post($hover_blurb_card_1);
                            } else {
                                echo 'Are you interested in the world of mergers & acquisitions? Are you excited to meet with other highly motivated students and share diverse perspectives and experiences? Do you want to get a jump start on your career in a fun and challenging environment?';
                            } ?>
                        </p>
                        <div class="text-wrap d-flex align-items-center justify-content-between mt-auto">
                            <h3 class="become__member text-white mt-auto pr-5 pr-md-0 pb-2 pb-md-0"><?php if ($heading_card_1) {
                                                                                                        echo wp_kses_post($heading_card_1);
                                                                                                    } else {
                                                                                                        echo 'Campus <br>Recruiting Process';
                                                                                                    } ?>
                            </h3>

                            <div class="arrow-wrap">

                                <svg xmlns="http://www.w3.org/2000/svg" width="21.634" height="39.025"
                                    viewBox="0 0 21.634 39.025">
                                    <path id="arrow" d="M7.5,44.4,25.952,25.952,7.5,7.5"
                                        transform="translate(-6.439 -6.439)" fill="none" stroke="#fff" stroke-width="3" />
                                </svg>

                            </div>
                        </div>


                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 pr-lg-0 pl-md-1 pl-lg-1 pr-lg-0 d-none d-md-block become__team-card-col">
                <a href="<?php if (get_sub_field('link_card_2')) {
                                echo esc_url($link_card_2_url);
                            } else {
                                echo site_url() . '/join-us/experienced-hire-recruiting/';
                            } ?>" class="h-100 w-100 d-block" data-aos="fade-in"
                    data-aos-duration="600" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300" data-aos-once="true">

                    <div class="become__card candidate-2 h-100 d-flex flex-column" style="background-image:url(<?php echo esc_url($image_card_2_url); ?>); background-size: cover;">
                        <p class="blurb position-absolute">
                            <?php if ($hover_blurb_card_2) {
                                echo wp_kses_post($hover_blurb_card_2);
                            } else {
                                echo 'Serve as an integral part of our project teams, routinely exposed to senior clients and firm leadership, helping clients solve complex problems. </p>';
                            } ?>
                        <div class="text-wrap d-flex align-items-center justify-content-between mt-auto">

                            <h3 class="become__member text-white mt-auto pr-5 pr-md-0 pb-2 pb-md-0"> <?php if ($heading_card_2) {
                                                                                                            echo wp_kses_post($heading_card_2);
                                                                                                        } else {
                                                                                                            echo 'Experienced <br>Hire Process';
                                                                                                        } ?></h3>
                            <div class="arrow-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.634" height="39.025"
                                    viewBox="0 0 21.634 39.025">
                                    <path id="arrow" d="M7.5,44.4,25.952,25.952,7.5,7.5"
                                        transform="translate(-6.439 -6.439)" fill="none" stroke="#fff" stroke-width="3" />
                                </svg>
                            </div>
                        </div>


                    </div>


                </a>
            </div>


        </div>
    </div>

    <div class="col-12  d-md-none px-0 become-a-candidate__card">

        <a href="<?php if ($link_card_1) {
                        echo esc_url(get_sub_field('link_card_1'));
                    } else {
                        echo site_url() . '/join-us/campus-recruiting/';
                    } ?>" class="h-100 w-100" data-aos="fade-in"
            data-aos-duration="600" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
            <div class="become__card candidate-1 h-100 py-4 d-flex justify-content-between align-items-center" style="background-image:url(<?php echo esc_url($image_card_1_url); ?>); background-size: cover;">
                <span role="img" aria-label="<?php echo esc_attr($image_card_1_alt); ?>"> </span>

                <h3 class="become__member text-white mt-auto"><?php if ($heading_card_1) {
                                                                    echo wp_kses_post($heading_card_1);
                                                                } else {
                                                                    echo 'Campus <br>Recruiting Process';
                                                                } ?>
                </h3>

                <div class="arrow-wrap position-static">

                    <svg xmlns="http://www.w3.org/2000/svg" width="21.634" height="39.025" viewBox="0 0 21.634 39.025">
                        <path id="arrow" d="M7.5,44.4,25.952,25.952,7.5,7.5" transform="translate(-6.439 -6.439)"
                            fill="none" stroke="#fff" stroke-width="3" />
                    </svg>

                </div>

            </div>
        </a>
    </div>
    <div class="col-12 d-md-none px-0 become-a-candidate__card">
        <a href="<?php if (get_sub_field('link_card_1')) {
                        echo esc_url($link_card_2_url);
                    } else {
                        echo site_url() . '/join-us/experienced-hire-recruiting/';
                    } ?>" class="h-100 w-100" data-aos="fade-in"
            data-aos-duration="600" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300" data-aos-once="true">

            <div class="become__card candidate-2 h-100 py-4 d-flex justify-content-between align-items-center" style="background-image:url(<?php echo esc_url($image_card_2_url); ?>); background-size: cover;">
                <span role="img" aria-label="<?php echo esc_attr($image_card_2_alt); ?>"> </span>
                <h3 class="become__member text-white mt-auto pb-2"><?php if ($heading_card_2) {
                                                                        echo wp_kses_post($heading_card_2);
                                                                    } else {
                                                                        echo 'Experienced <br>Hire Process';
                                                                    } ?></h3>
                <div class="arrow-wrap position-static">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.634" height="39.025" viewBox="0 0 21.634 39.025">
                        <path id="arrow" d="M7.5,44.4,25.952,25.952,7.5,7.5" transform="translate(-6.439 -6.439)"
                            fill="none" stroke="#fff" stroke-width="3" />
                    </svg>
                </div>


            </div>


        </a>
    </div>
    <script>
        $(document).ready(function() {
            $("#join-us-links ul li").click(function() {
                $("#join-us-links ul li").removeClass("active");
                $(this).addClass("active");
            });

        });
    </script>
</section>