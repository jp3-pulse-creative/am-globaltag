<?php

if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}
$sectionID = toKebabCase($sectionID); // Convert

$rows = get_sub_field('highlight_toggles_repeater'); // get all the rows
$slide_total = count($rows);
$section_heading = get_sub_field('section_heading');
$blurb = get_sub_field('blurb');

if (have_rows('highlight_toggles_repeater')):

?>
    <style>

    </style>

    <section
        id="highlight-toggles__<?php echo esc_attr($sectionID); ?>"
        class="container toggles-module pepi-row__pad-y">
        <div class="row p--normal pt-0">

            <div class="col-12 col-lg-6 left mb-lg-5">

                <h2 class="section-title">
                    <?php if ($section_heading) {
                        echo wp_kses_post($section_heading);
                    } else {
                        echo 'Frequently asked Questions';
                    } ?>
                </h2>
                <div class="short-border"></div>

            </div>
            <?php if ($blurb) { ?>
                <div class="col-12 col-lg-6 right pt-lg-3">

                    <p class="blurb">
                        <?php echo wp_kses_post($blurb); ?>
                    </p>
                </div>
            <?php } ?>
            <div class="col-12 px-lg-0 mt-4 mt-lg-0">
                <div class="accordion simple highlight" id="accordionExampleBS">
                    <?php while (have_rows('highlight_toggles_repeater')): the_row();
                        $toggle_id = get_sub_field('toggle_id');
                        $toggle_title = get_sub_field('heading');
                        $toggle_blurb = get_sub_field('blurb');
                        if (get_sub_field('image')) {
                            $toggle_image = get_sub_field('image');
                            $toggle_image_url = $toggle_image['url'];
                            $toggle_image_alt = $toggle_image['alt'];
                        } else {
                            $toggle_image_url = '';
                            $toggle_image_alt = '';
                        }
                        $toggle_cta = get_sub_field('cta');
                        $link_url = $toggle_cta['url'];
                        if ($toggle_cta['title']) {
                            $link_title = $toggle_cta['title'];
                        } else {
                            $link_title = 'Apply Here';
                        }
                        $link_target = $toggle_cta['target'] ? $toggle_cta['target'] : '_self';
                        $toggle_count = get_row_index();

                        // Check if this is the first toggle
                        $is_first_toggle = ($toggle_count == 1);
                    ?>
                        <div class="card">
                            <div class="card-header <?php echo $is_first_toggle ? 'active' : ''; ?>" id="simpleHeading--<?php echo get_row_index(); ?>">
                                <h3 class="mb-0">
                                    <button class="py-0 mt-0 btn btn-link btn-block d-flex align-items-center text-left mb-0 text-size-24 letter-spacing-22 pl-0 border-0" type="button" data-toggle="collapse" data-target="#collapseSimple--<?php echo get_row_index(); ?>" aria-expanded="<?php echo $is_first_toggle ? 'true' : 'false'; ?>" aria-controls="collapseSimple--<?php echo get_row_index(); ?>">
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

                            <div id="collapseSimple--<?php echo get_row_index(); ?>" class="collapse <?php echo $is_first_toggle ? 'show' : ''; ?>" aria-labelledby="simpleHeading--<?php echo get_row_index(); ?>" data-parent="#accordionExampleBS">
                                <div class="card-body pt-0 pb-0 pb-md-3 d-flex flex-wrap">
                                    <div class="col-12 col-md-4 px-0 pr-lg-3">
                                        <?php if ($toggle_image_url) { ?>
                                            <img class="w-100 h-100 object-cover object-center d-block" src="<?php echo esc_url($toggle_image_url); ?>" alt="<?php echo esc_attr($toggle_image_alt); ?>" class="w-100 h-100 object-cover object-center">
                                        <?php } ?>
                                    </div>
                                    <div class="col-12 col-md-8 px-0 pr-md-0 pl-md-5 mt-4 mt-md-0">

                                        <?php if ($toggle_blurb) { ?>
                                            <p class="industry-blurb"><?php echo $toggle_blurb; ?></p>
                                        <?php } ?>

                                        <?php if ($toggle_cta) { ?>

                                            <a href="<?php echo esc_url($link_url) ?>" target="'<?php echo esc_url($link_target) ?>" class="cta-btn mt-2">
                                                <div class="cta-inner cta-inner d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label amblue"><?php echo wp_kses_post($link_title) ?></span>
                                                </div>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>

            </div>

            <script>
                $('#highlight-toggles__<?php echo esc_attr($sectionID); ?> .card-header [type="button"]').on("click", function() {
                    if ($(this).closest('.card-header').hasClass('active')) {
                        $(this).closest('.card-header').removeClass('active');
                    } else {
                        $('#highlight-toggles__<?php echo esc_attr($sectionID); ?> .card-header').removeClass('active');
                        $(this).closest('.card-header').addClass('active');
                    }
                });

                $('#highlight-toggles__<?php echo esc_attr($sectionID); ?> .accordion.simple .collapse').on('show.bs.collapse', function(e) {
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
    </section>
<?php endif; ?>