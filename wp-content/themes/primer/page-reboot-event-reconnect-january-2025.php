<?php
/* Template Name: Reboot: Event - Reconnect January 2025
*/
get_header('event'); ?>
    <div id="b2b-2025" class="wrapper b2b-2025 event-page">

        <div class="hero-row">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-image"
                         style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>);">
                        <h1 class="mt-5 pt-5">
                            <?php
                            $header_type = get_field('event-title-type');
                            $header_text = get_field('header-title');
                            $header_image = get_field('header-image');
                            $header_image_max = get_field('header-image-max');

                            if ($header_type == 'image'):
                                if (!empty($header_image)): ?>
                                    <img src="<?php echo esc_url($header_image); ?>" alt="<?php the_title(); ?>"
                                         style="width: 100%; max-width: <?php echo $header_image_max; ?>px;" />

                                <?php endif;
                            else: echo $header_text;
                            endif;  ?>
                            <h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content-block-1 tho-lead">
            <div class="container">
                <div class="row pb-5 mb-4">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <h2 class="post-header-3 mb-3">Thank You</h2>
                        <p style="font-size: 18px; line-height: 22px;color: #00244A;">Thank You All For Coming To Our Alvarez & Marsal Private Equity Services Back To Business Networking Event. Here’s A Few Moments From The Evening. Enjoy!
                        </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>

        <div id="video" class="video-ampes pepi-row mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="videoWrp">
                            <iframe id="youtube1" src="https://www.youtube.com/embed/vYUzhSH3Nj4?si=njFg9KNeWnfTZBJG" frameborder="0"
                                    allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="photo" class="bg-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="photo-title d-inline">Photo Gallery</h2>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3">

                    <div class="col mb-3 mb-md-0">
                        <a href="https://zenfolio.page.link/kL9h1" target="_blank">
                            <div class="position-relative">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/guests.jpg">
                                <p class="position-absolute text-white" style="bottom: 2rem;left: 2rem;">Guests</p>
                            </div>

                        </a>

                    </div>

                    <div class="col mb-3 mb-md-0">
                        <a href="https://zenfolio.page.link/SM386" target="_blank">
                            <div class="position-relative">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/entrance.jpg">
                                <p class="position-absolute text-white" style="bottom: 2rem;left: 2rem;">Entrance</p>
                            </div>

                        </a>

                    </div>

                    <div class="col mb-3 mb-md-0">
                        <a href="https://zenfolio.page.link/ucJ8q" target="_blank">
                            <div class="position-relative">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/venue.jpg">
                                <p class="position-absolute text-white" style="bottom: 2rem;left: 2rem;">Venue</p>
                            </div>

                        </a>

                    </div>


                </div>
            </div>

        </div>

    </div>


<?php get_footer('event'); ?>