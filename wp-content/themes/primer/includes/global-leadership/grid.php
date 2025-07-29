<?php

?>


<div id="global-leaders" class="pepi-row pepi-row__mt global-leaders">
    <div class="container" style="transition: none!important;">

        <div class="row mx-flush-30">

            <?php



            $posts = get_posts(array(
                'post_type' => 'team_member',
                'post__in' => array(2933),
                'posts_per_page' => -1,
                'order' => 'ASC',
                'meta_key' => 'last_name',
                'orderby' => 'meta_value',
                'meta_query' => array(
                    array(
                        'key'   => 'show_global_leadership',
                        'value' => '1',
                    )
                )
            ));
            if ($posts) : ?>
                <?php
                foreach ($posts as $post):
                    // Do something.



                ?>

                    <?php
                    $hide = get_field('team_query_hide');
                    $regional_only = get_field('regional_only');



                    $name = get_field('first_name') . ' ' . get_field('last_name');

                    $title = get_field('title');
                    $gl_title = get_field('gl_area');
                    $cities_acf = get_field('city');
                    $featured_image = get_the_post_thumbnail_url(null, 'full'); ?>
                    <div data-name="<?php echo wp_kses_post($name); ?>" class="gl-card <?php if ($hide) {
                                                                                            echo 'region-hide ';
                                                                                        } else {
                                                                                            echo 'region-show ';
                                                                                        } ?><?php if ($regional_only) {
                                                                                                echo ' global-hide ';
                                                                                            } ?>col-sm-6 col-md-4 col-lg-3 north-america">

                        <div class="insight-block bg-lighter-grey">
                            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                                <span role="img"
                                    aria-label="<?php echo get_field('first_name') . ' ' . get_field('first_name'); ?>, <?php echo esc_attr($title); ?>,<?php echo $city[0]; ?>">
                                </span>


                            </div>
                            <div class="pt-3 pr-2 pb-4 pl-3 d-flex flex-column h-100">
                                <h3 class="global-leaders__name"><?php echo  $name; ?></h3>
                                <ul class="m-0 p-0 global-leaders__list mb-3">
                                    <li class="global-leaders__list-item global-leaders__list-item--title"><?php echo esc_attr($title); ?><?php if ($gl_title) {
                                                                                                                                                echo ' <span class="ampersand">&</span> <br>' . esc_attr($gl_title);
                                                                                                                                            } ?>
                                    </li>
                                    <li class="global-leaders__list-item global-leaders__list-item--city"><?php echo $cities_acf[0]; ?></li>
                                </ul>
                                <?php if (get_field('external_link')): ?>

                                    <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link'); ?>" target="_blank">View Bio</a>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

            <?php endforeach;
            endif;
            wp_reset_postdata();
            ?>

            <?php



            $posts = get_posts(array(
                'post_type' => 'team_member',
                'post__not_in' => array(2933),
                'posts_per_page' => -1,
                'order' => 'ASC',
                'meta_key' => 'last_name',
                'orderby' => 'meta_value',
                'meta_query' => array(
                    array(
                        'key'   => 'show_global_leadership',
                        'value' => '1',
                    )
                )
            ));
            if ($posts) : ?>
                <?php
                foreach ($posts as $post):
                    // Do something.



                ?>

                    <?php
                    $hide = get_field('team_query_hide');
                    $regional_only = get_field('regional_only');

                    $name = get_field('first_name') . ' ' . get_field('last_name');
                    $title = get_field('title');
                    $gl_title = get_field('gl_area');
                    $city = get_field('city');
                    $featured_image = get_the_post_thumbnail_url(null, 'full');
                    $region = get_field('region')[0];
                    $filter_class = str_replace(' ', '-', strtolower($region));
                    $cities_acf2 = get_field('city');

                    $cities = get_the_terms(get_the_ID(), 'filter_city');


                    ?>
                    <div data-name="<?php echo wp_kses_post($name); ?>" class="gl-card <?php if ($hide) {
                                                                                            echo 'region-hide ';
                                                                                        } else {
                                                                                            echo 'region-show ';
                                                                                        } ?><?php if ($regional_only) {
                                                                                                echo ' global-hide ';
                                                                                            } ?>col-sm-6 col-md-4 col-lg-3 <?php echo $filter_class . ' team__' . $post->ID; ?>">

                        <div class="insight-block bg-lighter-grey">
                            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                                <span role="img"
                                    aria-label="<?php echo get_field('first_name') . ' ' . get_field('first_name'); ?>, <?php echo esc_attr($title); ?>,<?php echo $city[0]; ?>">
                                </span>


                            </div>
                            <div class="pt-3 pr-2 pb-4 pl-3 d-flex flex-column h-100">
                                <h3 class="global-leaders__name"><?php echo  $name; ?></h3>
                                <ul class="m-0 p-0 global-leaders__list mb-3">
                                    <li class="global-leaders__list-item global-leaders__list-item--title"><?php echo esc_attr($title); ?><?php if ($gl_title) {
                                                                                                                                                echo ' <span class="ampersand">&</span> <br>' . esc_attr($gl_title);
                                                                                                                                            } ?>
                                    </li>
                                    <li class="global-leaders__list-item global-leaders__list-item--city"><?php if ($cities_acf2) {
                                                                                                                $i = 1;
                                                                                                                foreach ($cities_acf2 as $city_acf2) {
                                                                                                                    echo $city_acf2;
                                                                                                                    //  Add comma (except after the last theme)
                                                                                                                    echo ($i < count($cities_acf2)) ? ", " : "";
                                                                                                                    // Increment counter
                                                                                                                    $i++;
                                                                                                                }
                                                                                                            } else {
                                                                                                                $i = 1;
                                                                                                                foreach ($cities as $city) {
                                                                                                                    echo $city->name;
                                                                                                                    //  Add comma (except after the last theme)
                                                                                                                    echo ($i < count($cities)) ? ", " : "";
                                                                                                                    // Increment counter
                                                                                                                    $i++;
                                                                                                                }
                                                                                                            }
                                                                                                            ?></li>
                                </ul>
                                <?php if (get_field('external_link')): ?>
                                    <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link'); ?>" target="_blank">View Bio</a>
                                <?php endif; ?>
                            </div>


                        </div>
                    </div>

            <?php endforeach;
            endif;
            wp_reset_postdata();
            ?>



        </div>
    </div>
</div>