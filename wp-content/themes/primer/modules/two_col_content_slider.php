<?php
if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}
$sectionID = toKebabCase($sectionID); // Convert

$eyebrow = get_sub_field('eyebrow');
$heading = get_sub_field('section_heading');
?>
<style>
    .text-controls li {
        position: relative;

    }

    .text-controls li::after {
        content: '';
        position: absolute;
        bottom: -.5rem;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background-color: #0072bc;
        display: block;
        transition: all .6s ease-in-out;


    }

    .text-controls li.active[data-label="financial-due-diligence"]::after {
        width: 272.5px;

    }

    .text-controls li.active[data-label="global-transaction-analytics"]::after {
        width: 346.5px;

    }


    @media (min-width: 768px) {

        .text-controls li::after {
            display: none !important;


        }

        .controls-wrap {
            width: calc(90% - 30px);

        }

        .controls-wrap .border-indicator-track .border-indicator[data-label-active="financial-due-diligence"] {
            width: 272px;
            text-align: left;
            left: 0;

        }

        .controls-wrap .border-indicator-track .border-indicator[data-label-active="global-transaction-analytics"] {
            width: 360px;
            text-align: right;
            margin-left: auto !important;
            margin-right: 0 !important;
            left: calc(100% - 350px);
        }
    }

    @media (min-width: 991px) {
        .controls-wrap {
            width: 745px;

        }
    }
</style>

<section id="twoColConentSlider_<?php echo esc_attr($sectionID); ?>" class="two-col-content-slider two-col-content-slider_<?php echo esc_attr($sectionID); ?> pepi-row__pad-y">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php if ($eyebrow) { ?>
                    <p class="eyebrow text-center text-bright-blue"><?php echo wp_kses_post($eyebrow); ?></p>
                <?php } ?>
                <?php if ($heading) { ?>

                    <h2 class="section-title text-center"><?php echo wp_kses_post($heading); ?></h2>
                    <div class="short-border mx-auto mb-5"></div>
                <?php } ?>

            </div>
        </div>
    </div>
    <div class="pb-4"></div>

    <?php $control_counter = 0;
    if (have_rows('content_slider_repeater')) { ?>
        <div id="tccsCarousel__<?php echo preg_replace('/[^a-zA-Z0-9-_\.]/', '', $sectionID); ?>" class="carousel slide carousel-fade" data-ride="false" data-interval="false">
            <div class="controls-wrap position-relative">

                <ol class="carousel-indicators text-controls flex-column flex-md-row">
                    <?php while (have_rows('content_slider_repeater')) {
                        the_row();
                        $slide_count = get_row_index();
                        $label = get_sub_field('control_label');

                    ?>

                        <li data-target="#tccsCarousel__<?php echo preg_replace('/[^a-zA-Z0-9-_\.]/', '', $sectionID); ?>" data-slide-to="<?php echo intval($control_counter); ?>" class="<?php if ($slide_count == 1) {
                                                                                                                                                                                                echo 'active ';
                                                                                                                                                                                            } ?>control--<?php echo intval($slide_count); ?> control--<?php echo strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/', '', str_replace(' ', '-', $label))); ?> text-size-16 font-53-ex text-uppercase" data-label="<?php echo strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/', '', str_replace(' ', '-', $label))); ?>"><?php echo wp_kses_post($label); ?></li>
                    <?php $control_counter++;
                    } ?>

                </ol>
                <div class="border-indicator-track d-none d-md-flex">
                    <div class="border-indicator" data-label-active="financial-due-diligence"></div>
                </div>
            </div>

            <div class="carousel-inner">
                <?php while (have_rows('content_slider_repeater')) {
                    the_row();
                    $slide_count = get_row_index();
                    $label = get_sub_field('control_label');
                ?>
                    <div class="carousel-item bg-white carousel-item--<?php echo intval($slide_count); ?> carousel-item--<?php echo strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/', '', str_replace(' ', '-', $label))); ?><?php if ($slide_count == 1) {
                                                                                                                                                                                                                                echo ' active';
                                                                                                                                                                                                                            } ?>">
                        <div class="container">
                            <?php if (have_rows('slide')) { ?>
                                <?php while (have_rows('slide')) {
                                    the_row();
                                    $slide_heading_left = get_sub_field('slide_heading_left');
                                    $slide_blurb_left = get_sub_field('slide_blurb_left');
                                    if (get_sub_field('slide_heading_right')) {
                                        $slide_heading_right = get_sub_field('slide_heading_left');
                                    } else {
                                        $slide_heading_right = 'Candidate Qualifications';
                                    }
                                    $slide_content_right = get_sub_field('slide_content_right');
                                    $checkmark_list = get_sub_field('slide_content_right_checkmarks');

                                ?>
                                    <div class="row">

                                        <div class="col-12 px-lg-0">
                                            <h3 class="slide-content-left__heading">
                                                <?php echo wp_kses_post($slide_heading_left); ?>
                                            </h3>

                                        </div>
                                        <div class="col-12 col-lg-6 pl-lg-0">

                                            <p class="slide-content-left__blurb">
                                                <?php echo wp_kses_post($slide_blurb_left); ?>

                                            </p>
                                        </div>
                                        <div class="col-12 col-lg-6 pr-lg-0 pl-lg-5">
                                            <h4 class="slide-content-right__heading">
                                                <?php echo wp_kses_post($slide_heading_right); ?>
                                            </h4>

                                            <div class="wysiwyg slide-content-right__content<?php if ($checkmark_list) {
                                                                                                echo ' list-style-checkmarks';
                                                                                            } ?>">
                                                <?php echo wp_kses_post($slide_content_right); ?>

                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>

                            <?php } ?>


                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php } ?>
</section>
<script>
    $(document).ready(function() {
        // Scope the selector to the specific carousel
        var carouselId = '#tccsCarousel__<?php echo preg_replace('/[^a-zA-Z0-9-_\.]/', '', $sectionID); ?>';

        // Function to update the data-label-active attribute
        function updateDataLabelActive(targetIndex) {
            var targetLabel = $(carouselId).find('.text-controls li').eq(targetIndex).data('label');
            if (targetLabel) {
                $(carouselId).find('.border-indicator').attr('data-label-active', targetLabel);
            }
        }

        // Initial update of data-label-active attribute
        var initialIndex = $(carouselId).find('.carousel-item.active').index();
        updateDataLabelActive(initialIndex);

        // Update data-label-active attribute on slide change
        $(carouselId).on('slide.bs.carousel', function(e) {
            var nextSlideIndex = $(e.relatedTarget).index();
            updateDataLabelActive(nextSlideIndex);
        });
    });
</script>