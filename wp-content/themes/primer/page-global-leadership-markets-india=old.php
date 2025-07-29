<?php
/* Template Name: OLD: Reboot: GL-Markets - India
 */
get_header(); ?>
<?php // include 'protect.php';
?>


<div id="section-glv5" class="moby tabby tabby2 gl-markets gl-markets__banner"
    style="background-image: url(<?php echo get_field('banner_image') ?>)">
    <h1 class="gl-markets__heading"><?php echo get_field('banner_text') ?></h1>
</div>


<div class="gl-main pepi-row">
    <div class="container">
        <div class="row d-block">
            <div class="glm-info-ctn">
                <div class="glm-info-slider">
                    <?php
                    $region_info = get_field('region_info');
                    $reg_counter = 0;

                    if ($region_info) {
                        foreach ($region_info as $info) {
                            $marker = $info['info_designation'];
                            $marker = strtolower($marker);
                            $marker = str_replace(' ', '_', $marker);
                            $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                    ?>

                            <div id="glms-<?php echo $marker ?>" class="glm-info-slide">
                                <style>
                                    #glms-<?php echo $marker;

                                            ?> {
                                        background-color: #002B49;

                                    }

                                    #glms-<?php echo $marker;

                                            ?>::before {
                                        content: '';
                                        position: absolute;
                                        left: 0;
                                        top: 0;
                                        height: 100%;
                                        width: 100%;
                                        background-image: url(<?php echo $info['background_image'] ?>);
                                        opacity: .27;
                                        background-size: cover;
                                        background-position: center;

                                    }
                                </style>
                                <div class="d-flex flex-wrap">
                                    <?php if ($reg_counter == 0): ?>
                                        <div class="col-12 px-0">
                                            <h2 class="glm-heading glm-heading__first">Our Practice</h2>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-12 px-0">
                                            <h2 class="glm-heading glm-heading__country"><?php echo 'India'; ?></h2>
                                            <h3 class="glm-heading glm-heading__city"><?php echo $info['info_designation']; ?></h3>
                                        </div>
                                    <?php endif; ?>

                                    <div class="col-md-<?php if ($info['side_text_box_true']) {
                                                            echo '9';
                                                        } else {
                                                            echo '10';
                                                        } ?>">


                                    </div>
                                    <?php if ($info['side_text_box_true']) : ?>
                                        <div class="col-md-3">
                                            <?php $sidebox = $info['side_text_box_repeater'];
                                            foreach ($sidebox as $item) {
                                                $icon = $item['icon'];
                                                $text =  $item['text'];

                                            ?>
                                                <div class="sidebox__item d-flex align-items-center">
                                                    <?php if ($icon) {
                                                        echo ' <img src="' . esc_url($icon['url']) . '" alt="' . esc_attr($icon['alt']) . '" />';
                                                    } ?>
                                                    <p class="sidebox__text"><?php echo $text; ?></p>

                                                </div>
                                            <?php } ?>

                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="nav-wrap col-xs-12 px-3 d-flex flex-column justify-content-between mt-5 mt-md-0">


                                    <div class="d-flex flex-wrap mb-4 my-md-auto ">
                                        <a href="<?php echo site_url(); ?>/team/" tabindex="0">
                                            <div class="sglv4-btn">MEET OUR TEAM</div>
                                        </a>
                                        <a href="<?php echo site_url(); ?>/what-we-do/" tabindex="0">
                                            <div class="sglv4-btn">MORE ON OUR GLOBAL PRACTICE</div>
                                        </a>
                                        <a href="<?php echo site_url(); ?>/global-leadership/" tabindex="0">
                                            <div class="sglv4-btn">SEE ALL GLOBAL LOCATIONS</div>
                                        </a>
                                    </div>
                                    <div class="glm-info-nav">
                                        <?php
                                        $counter = 0;
                                        $region_list = get_field('region_info');
                                        if ($region_list) {
                                            foreach ($region_list as $region) {
                                                $marker = $region['info_designation'];
                                                $marker = strtolower($marker);
                                                $marker = str_replace(' ', '_', $marker);
                                                $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                                        ?>
                                                <a href="#glms-<?php echo $marker ?>"
                                                    class="glm-nav-btn <?php if ($counter == $reg_counter) {
                                                                            echo 'active';
                                                                        } ?>"
                                                    data-target="<?php echo $counter ?>"><?php echo $region['info_designation'] ?></a>
                                        <?php
                                                $counter++;
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="gl-info-nav-mobile d-none">
                                        <div class="btn-group dropup">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Select City
                                            </button>
                                            <div class="dropdown-menu">

                                                <?php
                                                $counter = 0;
                                                $region_list = get_field('region_info');
                                                if ($region_list) {
                                                    foreach ($region_list as $region) {
                                                        $marker = $region['info_designation'];
                                                        $marker = strtolower($marker);
                                                        $marker = str_replace(' ', '_', $marker);
                                                        $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                                                ?>
                                                        <a href="#glms-<?php echo $marker ?>"
                                                            class="glm-nav-btn <?php if ($counter == $reg_counter) {
                                                                                    echo 'active';
                                                                                } ?>"
                                                            data-target="<?php echo $counter ?>"><?php echo $region['info_designation'] ?></a>
                                                <?php
                                                        $counter++;
                                                    }
                                                }
                                                ?>
                                                <a class="dropdown-item <?php if ($counter == $reg_counter) {
                                                                            echo 'active';
                                                                        } ?>"
                                                    href="#glms-<?php echo $marker ?>"
                                                    data-target="<?php echo $counter ?>"><?php echo $region['info_designation'] ?></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php
                            $reg_counter++;
                        }
                    }

                    ?>

                </div>
            </div>
        </div>
        <div class="row d-block">
            <div class="glm-team-slider">
                <?php
                $team_ctn = get_field('region_info');
                $team_counter = 0;
                if ($team_ctn) {
                    foreach ($team_ctn as $teams) {
                        the_row();
                        $marker = $teams['info_designation'];
                        $marker = strtolower($marker);
                        $marker = str_replace(' ', '_', $marker);
                        $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                ?>

                        <div id="glmt-<?php echo $marker ?>" class="glm-team-slide global-leaders">
                            <div class="glm-team-head col-12 px-0">

                                <?php if ($team_counter == 0): ?>
                                    <h2 class="section-title"><?php echo 'India Leadership'; ?></h2>


                                <?php else: ?>
                                    <h2 class="section-title"><?php echo 'India - ' . $teams['info_designation']; ?></h2>
                                <?php endif; ?>
                                <div class="short-border"></div>
                            </div>
                            <div class="glm-team-list">
                                <?php
                                $team = $teams['team_members_post_relationship'];
                                if ($team) {
                                    foreach ($team as $tm) {
                                ?>

                                        <?php
                                        $name = get_field('first_name', $tm->ID) . ' ' . get_field('last_name', $tm->ID);
                                        $title = get_field('title', $tm->ID);
                                        $gl_title = get_field('gl_area', $tm->ID);
                                        $city = get_field('city', $tm->ID);
                                        $featured_image = get_the_post_thumbnail_url($tm->ID, 'full');
                                        $hide = get_field('team_query_hide');
                                        ?>
                                        <div class="gl-card <?php if ($hide) {
                                                                echo 'd-none ';
                                                            } ?>col-sm-6 col-md-4 col-lg-3">

                                            <div class="insight-block bg-lighter-grey">
                                                <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                                                    <span role="img"
                                                        aria-label="<?php echo get_field('first_name', $tm->ID) . ' ' . get_field('first_name', $tm->ID); ?>, <?php echo esc_attr($title); ?>,<?php echo $city[0]; ?>">
                                                    </span>


                                                </div>
                                                <div class="pt-3 pr-2 pb-4 pl-3 d-flex flex-column h-100">
                                                    <h3 class="global-leaders__name"><?php echo  $name; ?></h3>
                                                    <ul class="m-0 p-0 global-leaders__list mb-3">
                                                        <li class="global-leaders__list-item global-leaders__list-item--title">
                                                            <?php echo esc_attr($title); ?><?php if ($gl_title) {
                                                                                                echo ' <span class="ampersand">&</span> <br>' . esc_attr($gl_title);
                                                                                            } ?>
                                                        </li>
                                                        <li class="global-leaders__list-item global-leaders__list-item--city">
                                                            <?php echo $city[0]; ?></li>
                                                    </ul>
                                                    <a class="plain-btn mt-auto"
                                                        href="<?php echo  get_field('external_link', $tm->ID); ?>" target="_blank">View
                                                        Bio</a>

                                                </div>


                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                <?php
                        $team_counter++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!--======================================-->

<div id="our-services" class="pepi-row gl__ourservices">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 px-0 col-md-6 order-2 order-md-1 px-md-0">
                <h2 class="section-title pt-4 pt-md-4">Our Services</h2>
                <div class="short-border"></div>
                <ul class="m-0 pl-3 spaced-list">
                    <li>Financial Accounting Due Diligence</li>
                    <li>Commercial Due Diligence</li>
                    <li>Operational Due Diligence</li>
                    <li>Vendor Due Diligence</li>
                    <li>100 Day Planning</li>
                    <li>Post Merger Integration</li>
                    <li>Business Plan Development for Exit / Carve-Out</li>
                    <li class="pr-4">Transaction Analytics through Our India Analytics Center of Excellence (&ldquo;I-ACE&rdquo;)</li>

                </ul>

            </div>
            <div class="col-12 px-0 col-md-6 order-1 order-md-2 px-md-0">

                <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/services-image.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!--/-->


<div id="our-differentiators" class="pepi-row gl__ourdiff">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 px-0 col-md-6 order-2 px-md-0">
                <div class="ml-md-5 pl-md-4">

                    <h2 class="section-title">Our Differentiators</h2>
                    <div class="short-border"></div>
                    <ul class="m-0 pl-3 spaced-list">
                        <li>Dedicated Global Practice and India Practice</li>
                        <li>Projects are led by senior teams such as managing <br class="d-none d-md-inline">directors and senior directors</li>
                        <li>Integrated approach that combines transaction advisory, <br class="d-none d-md-inline">tax and operational performance improvement expertise</li>
                        <li>Free from audit-based conflict</li>
                    </ul>
                </div>


            </div>
            <div class="col-12 px-0 col-md-6 px-md-0 mb-4 mb-md-0">

                <img class="img-fluid"
                    src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/our-differentiators-image.jpg" alt="">



            </div>
        </div>
    </div>

</div>
<!--/-->





<div id="our-locations" class="pepi-row gl-location gl-location__north-america">
    <div class="container">
        <div class="row">
            <div class="col-12 px-0">

                <h2 class="section-title">Our Locations</h2>
                <div class="short-border mb-5"></div>

            </div>
        </div>
        <div class="row row__locations">
            <div class="col-12 px-0 pr-md-0">
                <h3 class="gl-location gl-location__country">India</h3>
            </div>

            <div class="col-md-5 px-0">
                <address>
                    <h4 class="gl-location gl-location__city">Mumbai</h4>
                    Units 703 & 704,
                    7th Floor, Tower A<br>
                    Peninsula Corporate Park<br>
                    Ganpatrao Kadam Marg Lower Parel<br>
                    Mumbai, Maharashtra, 400013<br>
                    <a class="gl-location gl-location__link" href="https://goo.gl/maps/Qe87nwENMKG9eZdS6"
                        target="_blank"><i class="icon-map-marker">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                                alt=""></i> <span>View in Map</span></a>
                </address>


            </div>
            <div class="col-md-7 px-0 px-md-0">
                <div class="row no-gutters">
                    <div class="col-md-7 px-0">
                        <address>
                            <h4 class="gl-location gl-location__city">New Delhi</h4>

                            1st Floor, B WingPrius Platinum Tower,<br>
                            Saket New Delhi<br>
                            110017 India<br><br>
                            <a class="gl-location gl-location__link" href="https://goo.gl/maps/MJyzvsY3U9FtHNkh8">
                                <i class="icon-map-marker">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                                        alt=""></i> <span>View in Map</span></a>
                        </address>
                    </div>
                    <div class="col-md-5 px-0">

                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</div>
<!--/-->

<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

<script>
    $(document).ready(function() {
        $('.glm-info-slider').slick({
            dots: false,
            arrows: false,
            fade: true,
            speed: 500,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
        });
        $('.glm-team-slider').slick({
            dots: false,
            arrows: false,
            fade: true,
            speed: 500,
            cssEase: 'ease-in-out',
            adaptiveHeight: true,
        });
        $('.glm-nav-btn').click(function(e) {
            e.preventDefault();

            var index = $(this).data('target');

            $('.glm-info-slider').slick('slickGoTo', parseInt(index));
            $('.glm-team-slider').slick('slickGoTo', parseInt(index));
        });
    });
</script>

<!--======================================-->
<?php get_footer(); ?>