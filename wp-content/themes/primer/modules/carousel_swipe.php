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
    <style>
        .autoplay__<?php echo esc_attr($sectionID); ?>.slick-slide {
            margin: 0;
            /* Remove margins between slides */
            padding: 0;
            /* Remove padding between slides */
        }

        .autoplay__<?php echo esc_attr($sectionID); ?>img {
            width: 100%;
            /* Ensure images take up the full width of the slide */
            display: block;
            /* Remove any inline spacing */
        }

        .autoplay .slick-slide {
            cursor: grab;

        }

        /* 
        .slide-overlay-wrap .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 132, 199, .68);
            opacity: 0;
            z-index: -1;
            transition: all .6s ease, z-index .6s;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='97.149' height='37.048' viewBox='0 0 97.149 37.048'%3E%3Cg id='scroll' transform='translate(-283 -295.307)'%3E%3Cg id='Path_48384' data-name='Path 48384' transform='translate(283 295.307)' fill='none'%3E%3Cpath d='M18.113,0H79.036A18.113,18.113,0,0,1,97.149,18.113v.823A18.113,18.113,0,0,1,79.036,37.048H18.113A18.113,18.113,0,0,1,0,18.936v-.823A18.113,18.113,0,0,1,18.113,0Z' stroke='none'/%3E%3Cpath d='M 18.11251831054688 2 C 13.80870056152344 2 9.762504577636719 3.675998687744141 6.719245910644531 6.719255447387695 C 3.676002502441406 9.76249885559082 2.000007629394531 13.80871200561523 2.000007629394531 18.11252784729004 L 2.000007629394531 18.93581199645996 C 2.000007629394531 23.23962783813477 3.676002502441406 27.28584098815918 6.719245910644531 30.3290843963623 C 9.762504577636719 33.37234115600586 13.80870056152344 35.04833984375 18.11251831054688 35.04833984375 L 79.03644561767578 35.04833984375 C 83.34026336669922 35.04833984375 87.386474609375 33.37234115600586 90.42971801757812 30.3290843963623 C 93.47297668457031 27.28584098815918 95.14897155761719 23.23962783813477 95.14897155761719 18.93581199645996 L 95.14897155761719 18.11252784729004 C 95.14897155761719 13.80871200561523 93.47297668457031 9.76249885559082 90.42971801757812 6.719255447387695 C 87.386474609375 3.675998687744141 83.34026336669922 2 79.03644561767578 2 L 18.11251831054688 2 M 18.11251831054688 0 L 79.03644561767578 0 C 89.03971862792969 0 97.14897155761719 8.109254837036133 97.14897155761719 18.11252784729004 L 97.14897155761719 18.93581199645996 C 97.14897155761719 28.93908309936523 89.03971862792969 37.04833984375 79.03644561767578 37.04833984375 L 18.11251831054688 37.04833984375 C 8.109245300292969 37.04833984375 7.62939453125e-06 28.93908309936523 7.62939453125e-06 18.93581199645996 L 7.62939453125e-06 18.11252784729004 C 7.62939453125e-06 8.109254837036133 8.109245300292969 0 18.11251831054688 0 Z' stroke='none' fill='%23fff'/%3E%3C/g%3E%3Cpath id='Path_48385' data-name='Path 48385' d='M28.674,16v4.626H4v3.084H28.674v4.626l6.168-6.168Z' transform='translate(334 291.663)' fill='%23fff'/%3E%3Cpath id='Path_48386' data-name='Path 48386' d='M10.169,16v4.626H34.843v3.084H10.169v4.626L4,22.169Z' transform='translate(293.157 291.663)' fill='%23fff'/%3E%3C/g%3E%3C/svg%3E%0A");
            background-repeat: no-repeat;
            background-position: center;
            cursor: grab;
            mix-blend-mode: multiply;


        }

        .slide-overlay-wrap .overlay::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 132, 199, .68);
            opacity: 0;
            z-index: -1;
            transition: all .6s ease, z-index .6s;
            cursor: grab;
            mix-blend-mode: color;


        }

        .slide-overlay-wrap .overlay.active {
            opacity: 1.0;
            z-index: 3;
            transition: all .6s ease, z-index 0s;

        }

        .slide-overlay-wrap .overlay.active::after {

            opacity: 1.0;
            z-index: 2;
            transition: all .6s ease, z-index .6s;
            cursor: grab;
            mix-blend-mode: color;


        } */
    </style>
    <div class="slide-overlay-wrap position-relative">


        <div id="autoplaySlickSlider" class="autoplay autoplay__<?php echo esc_attr($sectionID); ?>">
            <?php foreach ($gallery as $image) {
                if (isset($image['sizes']['full'])) { ?>
                    <div>
                        <img src="<?php echo esc_url($image['sizes']['full']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php } else { ?>
                    <div>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.autoplay__<?php echo esc_attr($sectionID); ?>').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                arrows: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });


            // Handle overlay class toggle on mouseenter
            $('.slide-overlay-wrap').one('mouseenter', function() {
                var overlay = $(this).find('.overlay');
                overlay.addClass('active');
                setTimeout(function() {
                    overlay.removeClass('active');
                }, 1500); // Remove the class after 1 second
            });
        });
    </script>
<?php } ?>