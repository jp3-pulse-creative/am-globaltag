<?php
$heading = get_sub_field('section_heading');
$blurb = get_sub_field('blurb');

$ep_relationship = get_sub_field('ep_relationship');
if ($ep_relationship) {
?>

    <section id="educationalPartners" class="educational-partners position-relative pepi-row">
        <div class="container">
            <div class="row">
                <?php if ($heading) { ?>
                    <div class="col-12 text-center">
                        <h2 class="ep-heading text-bright-blue text-center"><?php echo wp_kses_post($heading); ?></h2>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="container px-0">
            <div class="d-grid my-5">

                <?php
                foreach ($ep_relationship as $grid_item) {
                    // Ensure the correct post object is used
                    $post = get_post($grid_item);
                    setup_postdata($post);

                    // Get the custom title or the post title
                    if (get_field('custom_title', $post->ID)) {
                        $ep_title = get_field('custom_title', $post->ID);
                    } else {
                        $ep_title = get_the_title($post->ID);
                    }

                    // Get the post thumbnail URL
                    $ep_logo_url = get_the_post_thumbnail_url($post->ID, 'full');
                ?>

                    <!-- Your HTML code to display the title and logo URL -->
                    <!-- SCSS will need to be adjusted depending on nubmer of items for borders. suppose we could use a table instead? -->

                    <div class="grid-item">
                        <?php if ($ep_logo_url) : ?>
                            <img
                                class="logo logo__<?php echo strtolower(str_replace(' ', '-', $ep_title)); ?>" src="<?php echo esc_url($ep_logo_url); ?>" alt="<?php echo esc_attr($ep_title); ?>">
                        <?php endif; ?>
                    </div>

                <?php
                    // Reset post data
                    wp_reset_postdata();
                }
                ?>




            </div>
            <div class="row">
                <?php if ($blurb) { ?>
                    <div class="col-12 text-center">
                        <p class="ep-blurb text-bright-blue text-center"><?php echo wp_kses_post($blurb); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>
<?php } ?>