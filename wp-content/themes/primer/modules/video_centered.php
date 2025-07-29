<?php
global $vimeo_script_needed;
$vimeo_script_needed = true;

if (get_sub_field('module_label')) {
    $sectionID = get_sub_field('module_label'); // for more readable section ID - space and character will be stripped
} else {
    // Use the flexible content layout index as a backup
    $sectionID = 'module-' . get_row_index(); // Generates a unique ID based on the layout index
}
$sectionID = toKebabCase($sectionID); // Convert

$section_options = get_sub_field('section_options');
$bg_color_class = ''; // Initialize $bg_color_class

if (is_array($section_options) && in_array('add-bg-color', $section_options)) {
    if (get_sub_field('bg_color') && is_array($section_options) && !in_array('split-bg', $section_options)) {
        $bg_color = get_sub_field('bg_color');
        $bg_color_class = 'bg-' . $bg_color;
    } elseif (get_sub_field('bg_color') && is_array($section_options) && in_array('split-bg', $section_options)) {
        $split_bg_type = 'color';
        $split_bg_position = get_sub_field('split_bg_position');
        $split_bg_color = get_sub_field('bg_color');

        $split_bg_color_class = 'bg-' . $split_bg_color;

        $bg_color = get_sub_field('bg_color');
        if ($bg_color == 'bright-blue') {
            $split_bg_hex = '#0085ca';
        } elseif ($bg_color == 'amblue') {
            $split_bg_hex = '#012A49';
        } else {
            $split_bg_hex = '#f4f4f4';
        }
        echo '<style>
        .video-centered__' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', $sectionID) . '.bg__split-top::before, .bg__split-bottom .hero-row::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 120px;
            ' . $split_bg_position . ': 0;
            left: 0;
            background: ' . $split_bg_hex . ';
        }
        </style>';
    }
} elseif (is_array($section_options) && in_array('add-bg-image', $section_options)) {
    $bg_image = get_sub_field('bg_image');
    $split_bg_type = 'image';
    echo '<style>
    .video-centered__' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', $sectionID) . '{
        background-image: url(' . $bg_image['url'] . ');
        background-size: cover;
        background-position: center;
    }
    </style>';
}
$video_id = get_sub_field('video_id');
$video_thumb = get_sub_field('video_thumb');
if ($video_thumb) {
    $video_thumb_url = $video_thumb['url'];
    $video_thumb_alt = $video_thumb['alt'];
} else {
    $video_thumb_url = site_url() . '/wp-content/uploads/2024/09/am-global-transaction-group-tag-join-us-video-thumb.jpg';
    $video_thumb_alt = 'A&M Global TAG Video Thumb';
}

?>

<section id="videoCentered_<?php echo esc_attr($sectionID); ?>" class="video-centered__<?php echo esc_attr($sectionID); ?> position-relative container-fluid px-0 mb-0 <?php echo esc_attr($bg_color_class); ?> bg__split bg__split-bottom bottom-color">

    <div class="hero-row position-relative mb-0">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-12 px-0">
                    <div class="hero-image video-bg" style="background-image: none !important;
    position: relative;
    height: 0;
    padding-top: 56.5265%;">
                        <iframe src="https://player.vimeo.com/video/<?php echo esc_html($video_id); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="" data-ready="true"></iframe>

                        <script>
                            $(document).ready(function() {
                                var iframe = $('#videoCentered_<?php echo esc_js($sectionID); ?> .video-bg iframe');
                                var player = new Vimeo.Player(iframe);
                                $("#videoCentered_<?php echo esc_js($sectionID); ?> .video-bg-cover").click(function(e) {
                                    console.log('hit video-bg-cover');
                                    $("videoCentered_<?php echo esc_js($sectionID); ?> .vid-hero-ctn").hide();
                                    $(this).hide();
                                    player.play();
                                });
                                $("#videoCentered_<?php echo esc_js($sectionID); ?> .vid-hero-ctn").click(function(e) {
                                    console.log('hit video-hero-ctn');
                                    $("#videoCentered_<?php echo esc_js($sectionID); ?> .video-bg-cover").hide();
                                    $(this).hide();
                                    player.play();
                                });
                            });
                        </script>
                        <div class="video-bg-cover" style="background-image:url(<?php echo esc_url($video_thumb_url); ?>)">
                            <span role="img" aria-label="<?php echo esc_attr($video_thumb_alt); ?>"> </span>
                            <div id="playButton_<?php echo esc_attr($sectionID); ?>" class="svg-wrap play-button position-absolute m-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63.291" height="63.291" viewBox="0 0 63.291 63.291">
                                    <g id="play_button_-_placeholder" data-name="play button - placeholder" opacity="0.841">
                                        <path id="Path_1186" data-name="Path 1186" d="M31.645,0A31.645,31.645,0,1,1,0,31.645,31.645,31.645,0,0,1,31.645,0Z" fill="none" />
                                        <path id="Polygon_1" data-name="Polygon 1" d="M14.963,0,29.925,23.818H0Z" transform="translate(46.593 16.682) rotate(90)" fill="#fff" />
                                    </g>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (get_sub_field('add_join_us_copy')) {

        $joinus_heading = get_sub_field('join_us_heading');
        $joinus_cta = get_sub_field('join_us_cta');
        $joinus_cta_url = $joinus_cta['url'];
        if (!empty($cta['title'])) {
            $joinus_cta_title = $joinus_cta['title'];
        } else {
            $joinus_cta_title = 'Join Our Team';
        }
        $joinus_cta_target = $joinus_cta['target'] ? $joinus_cta['target'] : '_self';
        $joinus_blurb_left = get_sub_field('join_us_blurb_left');
        $joinus_blurb_right = get_sub_field('join_us_blurb_right');
    ?>
        <div class="<?php echo esc_attr($split_bg_color_class); ?>">
            <div class="container py-5">
                <div class="row py-5">
                    <?php if ($joinus_heading) { ?>
                        <div class="col-12 col-md-6 pl-lg-0">
                            <h2 class="section-title"><?php echo wp_kses_post($joinus_heading); ?></h2>
                            <div class="short-border"></div>
                        </div>
                    <?php } ?>
                    <?php if ($joinus_cta) { ?>

                        <div class="col-12 col-md-6 text-md-right pr-lg-0 d-none d-md-block">
                            <a href="<?php echo esc_url($joinus_cta_url) ?>" target="'<?php echo esc_url($joinus_cta_target) ?>" class="cta-btn mt-2">
                                <div class="cta-inner cta-inner d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label amblue"><?php echo wp_kses_post($joinus_cta_title) ?></span>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <?php if ($joinus_blurb_left && !$joinus_blurb_right || !$joinus_blurb_left && $joinus_blurb_right) { ?>
                        <div class="col-12 px-lg-0">
                            <?php if ($joinus_blurb_left) {
                                echo wp_kses_post($joinus_blurb_left);
                            } else {
                                echo wp_kses_post($joinus_blurb_right);
                            } ?>
                        </div>
                    <?php } else { ?>
                        <?php if ($joinus_blurb_left && $joinus_blurb_right) { ?>

                            <div class="col-12 col-md-5 px-lg-0 mr-xl-auto mb-3 mb-md-0">
                                <?php echo wp_kses_post($joinus_blurb_left); ?>
                            </div>
                            <div class="col-12 col-md-5 mr-xl-auto">
                                <?php echo wp_kses_post($joinus_blurb_right); ?>

                            </div>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($joinus_cta) { ?>

                        <div class="col-12 col-md-6 text-md-right pr-lg-0 d-md-none mt-3">
                            <a href="<?php echo esc_url($joinus_cta_url) ?>" target="'<?php echo esc_url($joinus_cta_target) ?>" class="cta-btn mt-2">
                                <div class="cta-inner cta-inner d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label amblue"><?php echo wp_kses_post($joinus_cta_title) ?></span>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>

    <?php } ?>
</section>