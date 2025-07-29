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

$gallery = get_sub_field('gallery');
if ($gallery) {

?>




    <section id="gridImageGalleryPopups__<?php echo esc_attr($sectionID); ?>" class="grid-image-gallery-popups grid-image-gallery-popups__<?php echo esc_attr($sectionID); ?> pepi-row__pad-y">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h2 class="section-title">
                        <?php if ($heading) {
                            echo wp_kses_post($heading);
                        } else {
                            echo 'Who We Are';
                        } ?>
                    </h2>
                    <div class="short-border"></div>
                    <?php if ($blurb) { ?>
                        <p class="blurb font-med pb-5 mb-5">
                            <?php echo wp_kses_post($blurb); ?>
                        </p>
                    <?php } else {
                        echo '<p class="blurb font-med pb-5 mb-4">Our people are the heartbeat of our practice.</p>';
                    } ?>

                </div>


            </div>
            <div class="row">
                <style>
                    .lity {
                        z-index: calc(9999999 + 1000);
                    }

                    .lity-container {
                        max-width: 90%;
                    }

                    .lity-content img {
                        max-height: 80vh !important;

                    }
                </style>
                <?php foreach ($gallery as $image) {
                    if (isset($image['sizes']['full'])) { ?>

                        <a href="<?php echo esc_url($image['sizes']['full']); ?>" class="thumbnail col-12 col-md-6 col-lg-4 p-0 m-0" data-lity="" data-aos="fade-in" data-aos-duration="600">
                            <div class="card border-0 h-100 w-100" style="background: url(<?php echo esc_url($image['sizes']['full']); ?>)no-repeat; background-size: cover; padding-top: 85.5978%;border-radius:0;">
                            </div>

                        </a>

                    <?php } else { ?>
                        <a href="<?php echo esc_url($image['url']); ?>" class="thumbnail col-12 col-md-6 col-lg-4 p-0 m-0" data-lity="" data-aos="fade-in" data-aos-duration="600">
                            <div class="card border-0 h-100 w-100" style="background: url(<?php echo esc_url($image['url']); ?>)no-repeat; background-size: cover; padding-top: 85.5978%;border-radius:0;">
                            </div>

                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

    </section>


<?php } ?>