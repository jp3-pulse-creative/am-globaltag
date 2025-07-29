<section id="our-locations" class="our-locations pepi-row__pad-y bg-amblue">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-lg-3 px-lg-0">
                <h2 class="section-title text-white">Our Locations</h2>

                <div class="short-border bg-white d-lg-none"></div>



            </div>
            <div class="col-12 col-lg-8 px-lg-0 ml-lg-auto">
                <p class="text-white text-lg-center mb-0">
                    Join our growing team in one of twelve U.S. cities!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-3 px-lg-0">
                <div class="short-border bg-white d-none d-lg-block"></div>




            </div>
            <div class="col-12 col-lg-8 px-lg-0 ml-lg-auto">

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-3 px-lg-0">

                <?php
                $args = array(
                    'post_type' => 'locations',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'category' => '524'
                );
                $locations = new WP_Query($args);
                if ($locations->have_posts()) { ?>
                    <div class="our-locations__wrapper my-4 my-lg-0">
                        <h3 class="our-locations__heading text-white">United States <br>Offices</h3>

                        <ol class="our-locations__list">

                            <?php while ($locations->have_posts()) {
                                $locations->the_post();
                                $location = get_the_title();
                            ?>
                                <li class="our-locations__item text-white">
                                    <?php echo wp_kses_post($location); ?>

                                </li>
                            <?php  } ?>


                        </ol>
                    </div>




                <?php  }
                wp_reset_postdata(); ?>



            </div>
            <div class="col-12 col-lg-8 px-lg-0 ml-lg-auto">

                <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/recruitment-pages/join-us/a&m-global-transaction-advisor-tag-us-locations-map.png" alt="Map of the United States with numbers corresponding to each city in the list in alphabetical order.">
            </div>
        </div>
</section>