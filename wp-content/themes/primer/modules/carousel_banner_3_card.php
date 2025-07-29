<?php


if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}

$sectionID = toKebabCase($sectionID); // Convert

$heading = get_sub_field('section_heading');
$blurb = get_sub_field('blurb');
if (get_sub_field('bg_image')) {
    $image = get_sub_field('bg_image');
    $image_url = $image['url'];
    $image_alt = $image['alt'];
} else {
    $image_url = get_template_directory_uri() . '/images/reboot/campus-recruiting/Alvarez_Marsal_Transaction_Advisory_Group_TAG_Campus_Recruiting_Why_Join_bg.jpg';
    $image_alt = 'WHAT ARE OUR INTERNS WORKING ON?';
}

?>
<style>
    .carousel,
    .carousel-inner,
    .carousel-inner .item {
        min-height: auto;
    }

    #why-join_<?php echo esc_attr($sectionID); ?>::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 60%;
        background-image: url(<?php echo esc_url($image_url); ?>);
        background-size: cover;
        background-position: 8% center;
        z-index: 0;

    }

    @media (min-width: 768px) {
        #why-join_<?php echo esc_attr($sectionID); ?>::before {
            background-position: 20% center;

            /* height: 85%; */


        }
    }

    @media (min-width: 992px) {
        #why-join_<?php echo esc_attr($sectionID); ?>::before {
            background-position: 8% center;

            height: 455px;




        }
    }

    .carousel-banner-3-card .control-wrap {
        width: 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-left: auto;
        margin-right: 1rem;
        margin-top: -4.25rem;
        margin-bottom: 3rem;
    }

    @media (min-width: 991px) {

        .carousel-banner-3-card .control-wrap {
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-left: auto;
            margin-right: 0;
            margin-top: -4.25rem;
            margin-bottom: 3rem;
        }
    }


    .carousel-banner-3-card .carousel-control-next,
    .carousel-banner-3-card .carousel-control-prev {
        background-size: unset;
        width: 22px;
        height: 36px;
    }

    .carousel-banner-3-card .carousel-control-next-icon,
    .carousel-banner-3-card .carousel-control-prev-icon {
        background-size: contain;
        width: 100%;
        height: 100%;

    }

    .carousel-banner-3-card .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='21.634' height='39.024' viewBox='0 0 21.634 39.024'%3E%3Cg id='Image_Arrows' data-name='Image Arrows' transform='translate(1.061 1.061)'%3E%3Cg id='Image_Arrows-2' data-name='Image Arrows' transform='translate(18.452 36.903) rotate(180)'%3E%3Cpath id='arrow_left' data-name='arrow left' d='M25.952,44.4,7.5,25.952,25.952,7.5' transform='translate(-7.5 -7.5)' fill='none' stroke='%23fff' stroke-width='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
    }

    .carousel-banner-3-card .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='21.634' height='39.024' viewBox='0 0 21.634 39.024'%3E%3Cg id='Image_Arrows' data-name='Image Arrows' transform='translate(2.121 1.061)'%3E%3Cg id='Image_Arrows-2' data-name='Image Arrows' transform='translate(0 0)'%3E%3Cpath id='arrow_left' data-name='arrow left' d='M18.452,0,0,18.452,18.452,36.9' transform='translate(0)' fill='none' stroke='%23fff' stroke-width='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
    }
</style>
<section id="why-join_<?php echo esc_attr($sectionID); ?>" class="why-join why-join_<?php echo esc_attr($sectionID); ?> pepi-row__pad-y position-relative">
    <div class="container position-relative z-index-5">
        <?php if ($heading || $blurb) { ?>
            <div class="row mx-min-30">
                <div class="col-12 mb-4">
                    <?php if ($heading) { ?>

                        <h2 class="section-title text-white">
                            <?php echo wp_kses_post($heading); ?>
                        </h2>
                        <div class="short-border bg-white"></div>
                    <?php } ?>
                    <?php if ($blurb) { ?>
                        <p class="text-white">
                            <?php echo wp_kses_post($blurb); ?>

                        </p>
                    <?php } ?>
                </div>

            </div>
        <?php } ?>
    </div>
    <?php if (have_rows('card_slides')) { ?>
        <div class="container px-0 d-none d-lg-block">
            <div id="cb3CardCarousel__<?php echo esc_attr($sectionID); ?>" class="carousel carousel-banner-3-card carousel__<?php echo esc_attr($sectionID); ?> slide" data-ride="false" data-interval="false">
                <div class="control-wrap">
                    <button class="carousel-control-prev" type="button" data-target="#cb3CardCarousel__<?php echo esc_attr($sectionID); ?>" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#cb3CardCarousel__<?php echo esc_attr($sectionID); ?>" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <div class="carousel-inner">
                    <?php while (have_rows('card_slides')) {
                        the_row();
                        $slide_count = get_row_index();

                    ?>

                        <div class="carousel-item<?php if ($slide_count == 1) {
                                                        echo ' active';
                                                    } ?>">
                            <?php if (have_rows('cards')) { ?>

                                <div class="row align-itmes-stretch">
                                    <?php while (have_rows('cards')) {
                                        the_row();
                                        $card_heading = get_sub_field('card_heading');
                                        $card_blurb = get_sub_field('card_blurb');

                                    ?>

                                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                            <div
                                                class="inner-wrap h-100 bg-lighter-grey p-4-plus pt-4 border-top border-size-5 border-color-amblue">
                                                <?php if ($card_heading) { ?>

                                                    <h3
                                                        class="text-bright-blue text-uppercase font-57-cd text-size-30 line-height-34 letter-spacing-22">
                                                        <?php echo wp_kses_post($card_heading); ?>
                                                    </h3>
                                                <?php } ?>

                                                <?php if ($card_blurb) { ?>
                                                    <p class="text-amblue">
                                                        <?php echo wp_kses_post($card_blurb); ?>

                                                    </p>
                                                <?php } ?>
                                            </div>

                                        </div>
                                    <?php } ?>


                                </div>
                            <?php } ?>


                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>



    <?php } ?>

    <?php if (have_rows('card_slides')) { ?>
        <div class="container px-0 d-lg-none">
            <div id="cb3CardCarouselMobile__<?php echo esc_attr($sectionID); ?>" class="carousel carousel-banner-3-card carousel__<?php echo esc_attr($sectionID); ?> slide" data-ride="false" data-interval="false">
                <div class="control-wrap">
                    <button class="carousel-control-prev" type="button" data-target="#cb3CardCarouselMobile__<?php echo esc_attr($sectionID); ?>" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#cb3CardCarouselMobile__<?php echo esc_attr($sectionID); ?>" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
                <div class="carousel-inner">
                    <?php while (have_rows('card_slides')) {
                        the_row();
                        $slide_count = get_row_index();

                    ?>


                        <?php if (have_rows('cards')) { ?>

                            <?php while (have_rows('cards')) {
                                the_row();
                                $card_heading = get_sub_field('card_heading');
                                $card_blurb = get_sub_field('card_blurb');
                                $card_count = get_row_index();

                            ?>
                                <div class="carousel-item px-3<?php if ($card_count == 1 && $slide_count == 1) {
                                                                    echo ' active';
                                                                } ?>">
                                    <div class="row h-100">

                                        <div class="col-12 col-lg-4 mb-4 mb-lg-0 h-100">
                                            <div
                                                class="h-100 inner-wrap h-100 bg-lighter-grey p-4-plus pt-4 border-top border-size-5 border-color-amblue">
                                                <?php if ($card_heading) { ?>

                                                    <h3
                                                        class="text-bright-blue text-uppercase font-57-cd text-size-30 line-height-34 letter-spacing-22">
                                                        <?php echo wp_kses_post($card_heading); ?>
                                                    </h3>
                                                <?php } ?>

                                                <?php if ($card_blurb) { ?>
                                                    <p class="text-amblue">
                                                        <?php echo wp_kses_post($card_blurb); ?>

                                                    </p>
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            <?php } ?>



                        <?php } ?>


                    <?php } ?>


                </div>
            </div>
        </div>



    <?php } ?>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to set the height of carousel items
            function setCarouselItemHeight() {
                var items = document.querySelectorAll('#cb3CardCarouselMobile__<?php echo esc_attr($sectionID); ?> .carousel-item');
                var maxHeight = 0;

                // Reset heights to auto to get natural heights
                items.forEach(function(item) {
                    item.style.height = 'auto';
                });

                // Calculate the maximum height
                items.forEach(function(item) {
                    var itemHeight = item.offsetHeight;
                    if (itemHeight > maxHeight) {
                        maxHeight = itemHeight;
                    }
                });

                // Set all items to the maximum height
                items.forEach(function(item) {
                    item.style.height = maxHeight + 'px';
                });
            }

            // Set the height on page load
            setCarouselItemHeight();

            // Set the height on window resize
            window.addEventListener('resize', setCarouselItemHeight);
        });
    </script>
</section>