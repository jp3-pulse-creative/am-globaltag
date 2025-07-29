<?php


if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}

$sectionID = toKebabCase($sectionID); // Convert
if (get_sub_field(get_sub_field('section_heading'))) {
    $section_heading = get_sub_field('section_heading');
} else {
    $section_heading = 'Ready to start your career?';
}
$blurb = get_sub_field('blurb');

$contact_name = get_sub_field('contact_name');
$contact_title = get_sub_field('contact_title');
$contact_image = get_sub_field('contact_image');
$contact_link = get_sub_field('link');
$contact_link_url = $contact_link['url'];
if (!empty($contact_link['title'])) {
    $contact_link_title = $contact_link['title'];
} else {
    $contact_link_title = 'Contact US';
}
?>
<style>
    .contact-info {
        max-width: 233px;
    }
</style>
<?php if (get_sub_field('spacer_top')) { ?>
    <div class="py-5"></div>
<?php } ?>
<section
    id="readyToStart__<?php echo esc_attr($sectionID); ?>"
    class="ready-to-start__<?php echo esc_attr($sectionID); ?> pepi-row__pad-y bg-lighter-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8 order-1 order-lg-0">
                <?php if ($section_heading) { ?>
                    <h2 class="section-title"><?php echo wp_kses_post($section_heading); ?></h2>
                    <div class="short-border"></div>
                <?php } ?>
                <?php if ($section_heading) { ?>

                    <div class="wysiwyg blurb link-decorate link-color-amblue link-hover-brightblue"><?php echo wp_kses_post($blurb); ?></div>
                <?php } ?>
                <?php if ($contact_link) { ?>

                    <a href="<?php echo esc_url($contact_link_url) ?>" target="'<?php echo esc_url($contact_link_target) ?>" class="cta-btn mt-2">
                        <div class="cta-inner cta-inner d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label amblue"><?php echo wp_kses_post($contact_link_title) ?></span>
                        </div>
                    </a>
                <?php }  ?>


            </div>
            <div class="col-12 col-lg-4 order-0 order-lg-1">
                <div class="contact-info">
                    <div class="contact-info__image mb-3">
                        <img src="<?php echo esc_url($contact_image['url']); ?>" alt="<?php echo esc_attr($contact_image['alt']); ?>">
                    </div>
                    <div class="contact-info d-flex mx-auto">
                        <div class="contact-info__linked-in mr-3">
                            <a href="<?php echo esc_url($contact_link_url); ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25.244" height="25.244" viewBox="0 0 25.244 25.244">
                                    <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M5.651,25.244H.417V8.39H5.651ZM3.031,6.091a3.045,3.045,0,1,1,3.031-3.06A3.057,3.057,0,0,1,3.031,6.091ZM25.239,25.244H20.016v-8.2c0-1.955-.039-4.463-2.721-4.463-2.721,0-3.138,2.124-3.138,4.322v8.345H8.929V8.39h5.02v2.3h.073a5.5,5.5,0,0,1,4.952-2.722c5.3,0,6.27,3.488,6.27,8.018v9.258Z" transform="translate(0 -0.001)" fill="#0084c7" />
                                </svg>
                            </a>

                        </div>
                        <ul class="contact-info__details list-style-none m-0 p-0">
                            <li class="text-size-28 font-57-cd text-amblue"><?php echo wp_kses_post($contact_name); ?></li>
                            <li style="letter-spacing: -.01rem;"><?php echo wp_kses_post($contact_title); ?></li>
                        </ul>


                    </div>
                </div>


            </div>

        </div>
    </div>


</section>

<?php if (get_sub_field('spacer_bottom')) { ?>
    <div class="py-5"></div>
<?php } ?>