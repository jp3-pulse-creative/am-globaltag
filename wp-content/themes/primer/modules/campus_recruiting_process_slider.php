<?php
$heading = get_sub_field('section_heading');
$blurb = get_sub_field('blurb');
$image = get_sub_field('bg_image');
$image_url = $image['url'];
$image_alt = $image['alt'];
?>
<section id="campus-recruiting-process-slider"
    style="background-image: url(<?php echo esc_url($image_url); ?>); background-size: cover;">
    <div class="container pepi-row__pad-y">
        <div class="row mt-3 mb-5 pb-3 align-items-center">
            <?php if ($heading) { ?>

                <div class="col-12 col-lg-5 px-lg-0">
                    <h2 class="text-white section-title"><?php echo wp_kses_post($heading); ?></h2>
                </div>
            <?php } ?>
            <?php if ($blurb) { ?>

                <div class="col-12 col-lg-6 px-lg-0">
                    <p class="text-white">
                        <?php echo wp_kses_post($blurb); ?> </p>
                </div>
            <?php } ?>

        </div>
        <div class="slider-wrapper mb-lg-5 mt-5">
            <div class="d-none d-lg-flex align-items-center timeline">
                <hr>
                <div class="svg-wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="39.787" height="76.33" viewBox="0 0 39.787 76.33">
                        <g id="arrow" transform="translate(1.068 1.053)">
                            <path id="Path_47910" data-name="Path 47910" d="M7.5,81.723,44.112,44.612,7.5,7.5"
                                transform="translate(-7.5 -7.5)" fill="none" stroke="#ffffff" stroke-width="3" />
                        </g>
                    </svg>
                </div>


            </div>
            <?php if (have_rows('step_repeater')) { ?>
                <ul class="d-flex flex-column flex-lg-row">
                    <?php while (have_rows('step_repeater')) {
                        the_row();
                        $season = get_sub_field('season'); // optional
                        $label = get_sub_field('label');
                        $blurb = get_sub_field('blurb'); //auto adds br tags
                        $count = get_row_index();


                    ?>
                        <?php if ($label || $blurb) { ?>

                            <li class="crp-item crp-item-<?php echo intval($count); ?>  col-12 px-lg-0">
                                <div class="item-inner">
                                    <?php if ($season) { ?>

                                        <span class="quarter"><?php echo wp_kses_post($season); ?></span>
                                    <?php } else {
                                        // empty span for height spacer
                                    ?>
                                        <span class="d-none d-lg-block" style="width: 0; height: 31.5px"></span>

                                    <?php } ?>

                                    <?php if ($label) { ?>

                                        <h3 class="step"><?php echo wp_kses_post($label); ?></h3>
                                    <?php } ?>

                                    <div class="square"></div>
                                    <?php if ($blurb) { ?>

                                        <p><?php echo wp_kses_post($blurb); ?></p>
                                    <?php } ?>

                                </div>

                            </li>
                        <?php } ?>

                    <?php } ?>

                </ul>
            <?php } ?>


        </div>

        <script>
            $(".svg-wrap").click(function() {
                $(".slider-wrapper").toggleClass("active");

            });
        </script>

    </div>

</section>