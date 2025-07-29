<?php
if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}
$sectionID = toKebabCase($sectionID); // Convert

$options_left = get_sub_field('options_left');
$options_right = get_sub_field('options_right');
?>
<style>
    .short-border::before {
        content: "";
        display: block;
        width: 100%;
        float: none;
        clear: both;

    }

    .pepi-row__fun-at-am-global-tag {
        margin-bottom: 2rem;
    }
</style>

<section id="twoCol_<?php echo preg_replace('/[^a-zA-Z0-9-_\.]/', '', $sectionID); ?>" class="layout_2_col pepi-row pepi-row__<?php echo preg_replace('/[^a-zA-Z0-9-_\.]/', '', $sectionID); ?>">
    <div class="container">
        <div class="row">
            <?php if (is_array($options_left) && in_array('heading', $options_left) && is_array($options_left) && in_array('blurb', $options_left) && is_array($options_right) && in_array('blurb', $options_right)) {
                $heading = get_sub_field('heading_left');
            ?>
                <div class="col-12">
                    <?php if (get_sub_field('blurb_left') && get_sub_field('blurb_right')) { ?>
                        <h2 class="section-title mt-mn-lg-3"><?php echo wp_kses_post($heading) ?></h2>
                        <div class="short-border"></div>
                    <?php } ?>
                </div>


            <?php } ?>

            <?php if (empty($options_right)) { ?>
                <div class="col-12">
                    <?php
                    if (is_array($options_left) && in_array('image', $options_left) && !in_array('heading', $options_left) && !in_array('blurb', $options_left) && !in_array('cta', $options_left)) {
                        $image = get_sub_field('image_left');
                        if (!empty($image)) {
                            echo '<img class="w-100 h-100 object-cover object-center" src="' . esc_url($image["url"]) . '" alt="' . esc_attr($image["alt"]) . '" />';
                        }
                    } ?>

                    <?php
                    // Debugging output
                    // echo '<pre>';
                    // print_r($options_left);
                    // print_r($options_right);
                    // echo '</pre>';

                    if (is_array($options_left) && in_array('heading', $options_left) && is_array($options_left) && in_array('blurb', $options_left) && is_array($options_right) && in_array('blurb', $options_right)) {
                    } elseif (is_array($options_left) && in_array('heading', $options_left)) {
                        $heading = get_sub_field('heading_left');

                        echo '<h2 class="section-title mt-mn-lg-3">' . wp_kses_post($heading) . '</h2>';
                        echo '<div class="short-border"></div>';
                    }
                    ?>
                    <?php if (is_array($options_left) && in_array('blurb', $options_left)) {
                        $blurb = get_sub_field('blurb_left');
                        if ($blurb) {
                            echo '<div class="blurb wysiwyg d-none">' . wp_kses_post($blurb) . '</div>';
                        }
                    }
                    ?>
                </div>
            <?php } else { ?>
                <div class="col-12 col-lg-6 left">
                    <?php
                    if (is_array($options_left) && in_array('image', $options_left) && !in_array('heading', $options_left) && !in_array('blurb', $options_left) && !in_array('cta', $options_left)) {
                        $image = get_sub_field('image_left');
                        if (!empty($image)) {
                            echo '<img class="w-100 h-100 object-cover object-center" src="' . esc_url($image["url"]) . '" alt="' . esc_attr($image["alt"]) . '" />';
                        }
                    } ?>

                    <?php
                    // Debugging output
                    // echo '<pre>';
                    // print_r($options_left);
                    // print_r($options_right);
                    // echo '</pre>';

                    if (is_array($options_left) && in_array('heading', $options_left) && is_array($options_left) && in_array('blurb', $options_left) && is_array($options_right) && in_array('blurb', $options_right)) {
                    } elseif (is_array($options_left) && in_array('heading', $options_left)) {
                        $heading = get_sub_field('heading_left');

                        echo '<h2 class="section-title mt-mn-lg-3">' . wp_kses_post($heading) . '</h2>';
                        echo '<div class="short-border"></div>';
                    }
                    ?>
                    <?php if (is_array($options_left) && in_array('blurb', $options_left)) {
                        $blurb = get_sub_field('blurb_left');
                        if ($blurb) {
                            echo '<div class="blurb wysiwyg">' . wp_kses_post($blurb) . '</div>';
                        }
                    }
                    ?>
                </div>

                <div class="col-12 col-lg-6 right">
                    <?php
                    if (is_array($options_right) && in_array('image', $options_right) && !in_array('heading', $options_right) && !in_array('blurb', $options_right) && !in_array('cta', $options_right)) {
                        $image = get_sub_field('image_right');
                        if (!empty($image)) {
                            echo '<img class="w-100 h-100 object-cover object-center" src="' . $image["url"] . '" alt="' . $image["alt"] . '" />';
                        }
                    } ?>

                    <?php
                    // Debugging output
                    // echo '<pre>';
                    // print_r($options_left);
                    // print_r($options_right);
                    // echo '</pre>';

                    if (is_array($options_left) && in_array('heading', $options_left) && is_array($options_left) && in_array('blurb', $options_left) && is_array($options_right) && in_array('blurb', $options_right)) {
                    } elseif (is_array($options_right) && in_array('heading', $options_right)) {
                        $heading = get_sub_field('heading_right');

                        echo '<h2 class="section-title mt-mn-lg-3">' . wp_kses_post($heading) . '</h2>';
                        echo '<div class="short-border"></div>';
                    }
                    ?>
                    <?php if (is_array($options_right) && in_array('blurb', $options_right)) {

                        $blurb = get_sub_field('blurb_right');
                        if ($blurb) {
                            echo '<div class="blurb wysiwyg">' . wp_kses_post($blurb) . '</div>';
                        }
                    }
                    ?>
                    <?php if (is_array($options_right) && in_array('cta', $options_right)) {

                        $cta = get_sub_field('cta_right');
                        if ($cta) {
                            $link_url = $cta['url'];
                            if (!empty($cta['title'])) {
                                $link_title = $cta['title'];
                            } else {
                                $link_title = 'Learn More';
                            }
                            $link_target = $cta['target'] ? $cta['target'] : '_self';

                            echo '<a href="' . esc_url($link_url) . '" target="' . esc_url($link_target) . '" class="cta-btn mt-2">
					<div class="cta-inner cta-inner d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label amblue">' . wp_kses_post($link_title) . '</span>
					</div>
				</a>';
                        }
                    }
                    ?>
                </div>

            <?php } ?>

        </div>
    </div>

</section>