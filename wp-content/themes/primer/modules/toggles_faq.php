<?php

if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}
$sectionID = toKebabCase($sectionID); // Convert

$rows = get_sub_field('faq_toggles_repeater'); // get all the rows
$slide_total = count($rows);
$section_heading = get_sub_field('section_heading');
$blurb = get_sub_field('blurb');


if (have_rows('faq_toggles_repeater')):

?>
    <style>

    </style>

    <div
        id="faq-toggles__<?php echo esc_attr($sectionID); ?>"
        class="container toggles-module pepi-row__pad-y">
        <div class="row p--normal pt-0">

            <div class="col-12 pt-md-0 pb-md-0 mb-md-4 pb-lg-3 mb-lg-0 pb-lg-0 px-lg-0">

                <h2 class="section-title">
                    <?php if ($section_heading) {
                        echo wp_kses_post($section_heading);
                    } else {
                        echo 'Frequently asked Questions';
                    } ?>
                </h2>
                <div class="short-border"></div>
                <?php if ($blurb) { ?>
                    <p>
                        <?php echo wp_kses_post($blurb); ?>
                    </p>
                <?php } ?>
            </div>

            <div class="col-12 px-lg-0">
                <div class="accordion simple" id="accordionExampleBS">
                    <?php while (have_rows('faq_toggles_repeater')): the_row();
                        $toggle_id = get_sub_field('toggle_id');
                        $toggle_options = get_sub_field('toggle_options');
                        $toggle_title = get_sub_field('heading');
                        $toggle_blurb = get_sub_field('blurb');



                    ?>
                        <div class="card">
                            <div class="card-header" id="simpleHeading--<?php echo get_row_index(); ?>">
                                <h3 class="mb-0">
                                    <button class="btn btn-link btn-block d-flex align-items-center text-left mb-0 text-size-24 letter-spacing-22 pl-0 border-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseSimple--<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="collapseSimple--<?php echo get_row_index(); ?>">
                                        <div class="plus-btn">
                                            <div class="line line-1"></div>
                                            <div class="line line-2"></div>
                                        </div>
                                        <span class="ml-3">
                                            <?php echo $toggle_title; ?>
                                        </span>

                                    </button>
                                </h3>
                            </div>

                            <div id="collapseSimple--<?php echo get_row_index(); ?>" class="collapse" aria-labelledby="simpleHeading--<?php echo get_row_index(); ?>" data-parent="#accordionExampleBS">
                                <div class="card-body pt-0 pb-0 pb-md-3">
                                    <?php if ($toggle_options == 'blurb'): ?>
                                        <p class="industry-blurb"><?php echo $toggle_blurb; ?></p>

                                    <?php else: ?>
                                        <?php if (have_rows('list')): ?>
                                            <ul class="list-style-none my-0 p-0 industry-list d-flex flex-wrap mx-min-15">
                                                <?php
                                                while (have_rows('list')): the_row();
                                                    $list_item = get_sub_field('list_item');
                                                    $list_columns = get_sub_field('list_column');
                                                    $list_spacer = get_sub_field('list_spacer');
                                                ?>
                                                    <li
                                                        class="industry-list__item d-flex mb-4 col-12 col-md-6 col-lg-<?php echo $list_columns; ?>">
                                                        <?php if ($list_spacer == 0): ?>
                                                            <span class="icon__checkmark mr-3">
                                                                <svg
                                                                    style="width: 27px; height: 27px;"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="30.914"
                                                                    height="29"
                                                                    viewbox="0 0 30.914 29">
                                                                    <g
                                                                        id="Icon_feather-check-square"
                                                                        data-name="Icon feather-check-square"
                                                                        transform="translate(-3.5 -3.5)">
                                                                        <path
                                                                            id="Path_48318"
                                                                            data-name="Path 48318"
                                                                            d="M13.5,16.5,18,21,33,6"
                                                                            fill="none"
                                                                            stroke="#0284c7"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2" />
                                                                        <path
                                                                            id="Path_48319"
                                                                            data-name="Path 48319"
                                                                            d="M31.5,18V28.5a3,3,0,0,1-3,3H7.5a3,3,0,0,1-3-3V7.5a3,3,0,0,1,3-3H24"
                                                                            fill="none"
                                                                            stroke="#0284c7"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        <?php endif; ?>

                                                        <span class="industry-list__item--blurb text-amblue text-area">
                                                            <?php echo $list_item; ?>
                                                        </span>
                                                    </li>
                                                <?php endwhile; ?>

                                            </ul>
                                    <?php endif;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

            </div>

        </div>

        <script>
            // $(document).ready(function () {
            //     $(
            //         "#faq-toggles__<?php echo esc_attr($sectionID); ?> ." +
            //         "industry-title"
            //     ).click(function (e) {
            //         e.preventDefault();
            //         if (!$(this).parent().hasClass("active")) {
            //             $(".industry-block").removeClass("active");
            //             $(this)
            //                 .parent()
            //                 .addClass("active");
            //         } else {
            //             $(".industry-block").removeClass("active");
            //         }

            //     });

            // });

            $('#faq-toggles__<?php echo esc_attr($sectionID); ?> .card-header [type="button"]').on("click", function() {
                if ($(this).closest('.card-header').hasClass('active')) {
                    $(this).closest('.card-header').removeClass('active');
                } else {
                    $('#faq-toggles__<?php echo esc_attr($sectionID); ?> .card-header').removeClass('active');
                    $(this).closest('.card-header').addClass('active');
                }
            });

            $('#faq-toggles__<?php echo esc_attr($sectionID); ?> .accordion.simple .collapse').on('show.bs.collapse', function(e) {
                var $card = $(this).closest('.card');
                var $open = $($(this).data('parent')).find('.collapse.show');

                var additionalOffset = 0;
                if ($card.prevAll().filter($open.closest('.card')).length !== 0) {
                    additionalOffset = $open.height();
                }
                $('html,body').animate({
                    scrollTop: $card.offset().top - additionalOffset - 150
                }, 500);
            });
        </script>
    </div>

<?php endif; ?>