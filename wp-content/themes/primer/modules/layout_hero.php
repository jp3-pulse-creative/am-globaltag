<?php

if (get_sub_field('custom_title')) {
    $title = get_sub_field('custom_title');
} else {
    $title = get_the_title();
}
$image = get_sub_field('image');
$image_url = $image['url'];
if ($image['alt']) {
    $image_alt = $image['alt'];
} else {
    $image_alt = $title;
}
$subheading = get_sub_field('subheading');
?>
<style>
    #hero .hero-image::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 37, 73, 0.3);
        mix-blend-mode: hard-light;
        /* Blend mode for the overlay */
        z-index: 1;
        /* Ensure it is above the image */
    }

    .hero-row h1 {
        top: unset;
        left: unset;
        transform: unset;
    }
</style>
<section id="hero">
    <div class="hero-row">
        <div class="row">
            <div class="col-12">
                <div class="hero-image d-flex flex-column justify-content-center align-items-center">
                    <img class="position-absolute object-cover object-center z-0 w-100 h-100" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    <h1 class="position-relative z-2"><?php echo wp_kses_post($title); ?></h1>
                    <?php if ($subheading) {
                        echo '<p class="mb-0 text-center position-relative text-white text-size-28 font-57-cd" style="z-index: 3;">' . wp_kses_post($subheading) . '</p>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>