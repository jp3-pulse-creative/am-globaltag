<?php
/* Template Name: Reboot: Event - B2B September 2017-2019

*/
get_header(); ?>
<div id="b2b-2019" class="wrapper b2b-2019 event-page">

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
                                <img src="<?php echo esc_url($header_image); ?>" alt="<?php the_title(); ?>" style="width: 100%; max-width: <?php echo $header_image_max; ?>px;" />

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
                    <h2 class="post-header-3">Thank You</h2>
                    <p style="font-size: 18px; line-height: 22px;"> Thank you all for coming to our A&amp;M Private
                        Equity Services’ Back to Business networking event.<br class="d-none d-md-inline">Here’s a look
                        back at all the memorable moments through the years. Enjoy!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <div id="b2b-2019__video-gallery" class="b2b-2019__video-gallery pepi-row bg-amblue my-0"
        style="border-top: 12px solid #4e8abe;">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 px-0 pb-5 mb-5">
                    <h2 class="my-5 py-4 text-center text-white text-uppercase">Video Gallery</h2>
                    <div id="b2bVideoGallery" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators text position-static d-flex justify-content-between pl-0 m-0 w-100 mb-4"
                            style="list-style: none;">
                            <li data-target="#b2bVideoGallery" data-slide-to="0" class="active">September 2017</li>
                            <li data-target="#b2bVideoGallery" data-slide-to="1">January 2018</li>
                            <li data-target="#b2bVideoGallery" data-slide-to="2">September 2018</li>
                            <li data-target="#b2bVideoGallery" data-slide-to="3">January 2019</li>
                            <li data-target="#b2bVideoGallery" data-slide-to="4">September 2019 </li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="videoWrap">
                                    <iframe id="youtube1" width="920" height="518"
                                        src="https://www.youtube.com/embed/3SZaV8zvskk?rel=0&amp;enablejsapi=1"
                                        frameborder="0" allowfullscreen=""></iframe>
                                </div>


                            </div>
                            <div class="carousel-item">
                                <div class="videoWrap">
                                    <iframe id="youtube2"
                                        src="https://www.youtube.com/embed/UqiabhuQapc?rel=0&amp;api=1" width="920"
                                        height="518" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="videoWrap">
                                    <iframe id="youtube3"
                                        src="https://www.youtube.com/embed/Oeo4Akk67SA?rel=0&amp;api=1" width="920"
                                        height="518" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                        allowfullscreen=""></iframe>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <div class="videoWrap">
                                    <iframe id="youtube4"
                                        src="https://www.youtube.com/embed/7hX1efg24sg?rel=0&amp;api=1" width="920"
                                        height="518" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                        allowfullscreen=""></iframe>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="videoWrap">
                                    <iframe id="youtube5"
                                        src="https://www.youtube.com/embed/eskVOoiOCSQ?rel=0&amp;api=1" width="920"
                                        height="518" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                        allowfullscreen=""></iframe>
                                </div>

                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#b2bVideoGallery"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#b2bVideoGallery"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>




    </div>


    <section id="promo-4" class="content-block promo-44">
        <div class="container">
            <div id="photos" class="photos target"></div>
            <div class="col-md-12 text-center pix">

                <h2 style="margin-top:80px;">PHOTO GALLERY</h2>

            </div>


            <div class="row">
                <div class="col-6 col-md-4 col-centered gallery-item-wrapper friday">
                    <div class="gallery-item">

                        <div class="gallery-thumb">
                            <div class="gallery-details"><a
                                    href="https://pulsecreative.zenfolio.com/p456597658/hd9aa30ca#hd9aa30ca"
                                    target="_blank">JANuary 2017</a></div>
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/pes-0.jpg" border="0"
                                alt="" title="" class="img-responsive"> <a
                                href="https://pulsecreative.zenfolio.com/p456597658/hd9aa30ca#hd9aa30ca"
                                target="_blank">
                                <div class="image-overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.gallery-item-wrapper -->


                <div class="col-6 col-md-4 col-centered gallery-item-wrapper friday">
                    <div class="gallery-item">

                        <div class="gallery-thumb">
                            <div class="gallery-details">

                                <a
                                    href="https://pulsecreative.zenfolio.com/p343855086/hd9ab343c#hd9ab789a"
                                    target="_blank">September 2017</a>
                            </div>

                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/pes-1.jpg" border="0"
                                alt="" title="" class="img-responsive"> <a
                                href="https://pulsecreative.zenfolio.com/p343855086/hd9ab343c#hd9ab789a"
                                target="_blank">
                                <div class="image-overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.gallery-item-wrapper -->

                <div class="col-6 col-md-4 col-centered gallery-item-wrapper friday">
                    <div class="gallery-item">

                        <div class="gallery-thumb">
                            <div class="gallery-details"><a
                                    href="https://pulsecreative.zenfolio.com/p442012902/hd9aba617#hd9aba5f1"
                                    target="_blank">January 2018</a></div>
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/pes-2.jpg" border="0"
                                alt="" title="" class="img-responsive"> <a
                                href="https://pulsecreative.zenfolio.com/p442012902/hd9aba617#hd9aba5f1"
                                target="_blank">
                                <div class="image-overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.gallery-item-wrapper -->

                <div class="col-6 col-md-4 col-centered gallery-item-wrapper friday">
                    <div class="gallery-item">

                        <div class="gallery-thumb">
                            <div class="gallery-details"><a
                                    href="https://pulsecreative.zenfolio.com/p436551436/hd9abb126#hd9abb126"
                                    target="_blank">SEPTember 2018</a></div>
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/pes-3.jpg" border="0"
                                alt="" title="" class="img-responsive"> <a
                                href="https://pulsecreative.zenfolio.com/p436551436/hd9abb126#hd9abb126"
                                target="_blank">
                                <div class="image-overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.gallery-item-wrapper -->
                <div class="col-6 col-md-4 col-centered gallery-item-wrapper friday">
                    <div class="gallery-item">

                        <div class="gallery-thumb">
                            <div class="gallery-details"><a
                                    href="https://pulsecreative.zenfolio.com/p217763895/hd9abfa8e#hd9abfa8e"
                                    target="_blank">January 2019</a></div>
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/pes-4.jpg" border="0"
                                alt="" title="" class="img-responsive"> <a
                                href="https://pulsecreative.zenfolio.com/p217763895/hd9abfa8e#hd9abfa8e"
                                target="_blank">
                                <div class="image-overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--================-->

                <div class="col-6 col-md-4 col-centered gallery-item-wrapper saturday">
                    <div class="gallery-item">

                        <div class="gallery-thumb">
                            <div class="gallery-details"><a href="https://pulsecreative.zenfolio.com/p805380758"
                                    target="_blank">September 2019</a></div>
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/images/pes-5.jpg" border="0"
                                alt="" title="" class="img-responsive"> <a
                                href="https://pulsecreative.zenfolio.com/p805380758" target="_blank">
                                <div class="image-overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <!--================-->

                <!-- /.gallery-item-wrapper -->

            </div>
            <!-- /.row -->

        </div>

    </section>
    <div class="div mt-5 pt-5">
        <?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

    </div>

</div>


<?php get_footer(); ?>