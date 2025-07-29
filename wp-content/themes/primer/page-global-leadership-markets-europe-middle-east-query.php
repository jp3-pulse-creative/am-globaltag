<?php
/* Template Name: Reboot: Query: GL-Markets Europe & Middle East
 */
get_header(); ?>
<?php // include 'protect.php';
?>


<div id="section-glv5" class="moby tabby tabby2 gl-markets gl-markets__banner"
  style="background-image: url(<?php echo get_field('banner_image') ?>)">
  <h1 class="gl-markets__heading"><?php echo get_field('banner_text') ?></h1>
</div>


<div class="gl-main pepi-row">
  <div class="container">
    <div class="row d-block">
      <div class="glm-info-ctn">
        <div class="glm-info-slider">
          <?php
          $region_info = get_field('region_info');
          $reg_counter = 0;

          if ($region_info) {
            foreach ($region_info as $info) {
              $marker = $info['info_designation'];
              $marker = strtolower($marker);
              $marker = str_replace(' ', '_', $marker);
              $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
              $marker = str_replace(array('(', ')'), '', $marker);


          ?>

              <div id="glms-<?php echo $marker ?>" class="glm-info-slide">
                <style>
                  #glms-<?php echo $marker;

                        ?> {
                    background-color: #002B49;

                  }

                  #glms-<?php echo $marker;

                        ?>::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 100%;
                    background-image: url(<?php echo $info['background_image'] ?>);
                    opacity: .27;
                    background-size: cover;
                    background-position: center;

                  }
                </style>
                <div class="d-flex flex-wrap">
                  <?php if ($reg_counter == 0): ?>
                    <div class="col-12 px-0">
                      <h2 class="glm-heading glm-heading__first">Our Practice And Locations</h2>
                    </div>
                  <?php else: ?>
                    <div class="col-12 px-0">
                      <h2 class="glm-heading glm-heading__country"><?php echo $info['info_designation']; ?></h2>
                      <h3 class="glm-heading glm-heading__city"><?php echo $info['main_text_heading_city']; ?></h3>
                    </div>
                  <?php endif; ?>

                  <div class="col-md-<?php if ($info['side_text_box_true']) {
                                        echo '9';
                                      } else {
                                        echo '10';
                                      } ?> px-0">

                    <?php echo '<div class="main-text">' . $info['main_text_box'] . '</div>'; ?>



                  </div>
                  <?php if ($info['side_text_box_true']) : ?>
                    <div class="col-md-3">
                      <?php $sidebox = $info['side_text_box_repeater'];
                      foreach ($sidebox as $item) {
                        $icon = $item['icon'];
                        $text =  $item['text'];

                      ?>
                        <div class="sidebox__item d-flex align-items-center">
                          <?php if ($icon) {
                            echo ' <img src="' . esc_url($icon['url']) . '" alt="' . esc_attr($icon['alt']) . '" />';
                          } ?>
                          <p class="sidebox__text"><?php echo $text; ?></p>

                        </div>
                      <?php } ?>

                    </div>
                  <?php endif; ?>
                </div>

                <div class="nav-wrap col-xs-12 px-0 d-flex flex-column justify-content-between mt-5 mt-md-0">


                  <div class="d-flex flex-wrap mb-4 my-md-auto">
                    <a href="<?php echo site_url(); ?>/team/" tabindex="0">
                      <div class="sglv4-btn">MEET OUR TEAM</div>
                    </a>
                    <a href="<?php echo site_url(); ?>/what-we-do/" tabindex="0">
                      <div class="sglv4-btn">MORE ON OUR GLOBAL PRACTICE</div>
                    </a>
                    <a href="<?php echo site_url(); ?>/global-leadership/" tabindex="0">
                      <div class="sglv4-btn">SEE ALL GLOBAL LOCATIONS</div>
                    </a>
                  </div>
                  <div class="glm-info-nav">
                    <?php
                    $counter = 0;
                    $region_list = get_field('region_info');
                    if ($region_list) {
                      foreach ($region_list as $region) {
                        $marker = $region['info_designation'];
                        $marker = strtolower($marker);
                        $marker = str_replace(' ', '_', $marker);
                        $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                    ?>
                        <a href="#glms-<?php echo $marker ?>"
                          class="glm-nav-btn <?php if ($counter == $reg_counter) {
                                                echo 'active';
                                              } ?>"
                          data-target="<?php echo $counter ?>"><?php echo $region['info_designation'] ?></a>
                    <?php
                        $counter++;
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>

          <?php
              $reg_counter++;
            }
          }

          ?>

        </div>
      </div>
    </div>
    <div class="row d-block">
      <div class="glm-team-slider">
        <?php
        $team_ctn = get_field('region_info');
        $team_counter = 0;
        if ($team_ctn) {
          foreach ($team_ctn as $teams) {
            the_row();
            $marker = $teams['info_designation'];
            $marker = strtolower($marker);
            $marker = str_replace(' ', '_', $marker);
            $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
        ?>

            <div id="glmt-<?php echo $marker ?>" class="glm-team-slide global-leaders">
              <div class="glm-team-head col-12 px-0 px-0">

                <h2 class="section-title"><?php echo $teams['team_title']; ?></h2>
                <div class="short-border"></div>
              </div>
              <div class="glm-team-list">

                <?php
                $custom_team = $teams['custom_team_selection'];
                if ($custom_team) {

                  $team = $teams['team_members_post_relationship'];
                  if ($team) {
                    foreach ($team as $tm) {
                ?>

                      <?php
                      $name = get_field('first_name', $tm->ID) . ' ' . get_field('last_name', $tm->ID);
                      $title = get_field('title', $tm->ID);
                      $gl_title = get_field('gl_area', $tm->ID);
                      $cities_acf = get_field('city', $tm->ID);
                      $cities = get_the_terms($tm->ID, 'filter_city');


                      $featured_image = get_the_post_thumbnail_url($tm->ID, 'full');
                      $hide = get_field('team_query_hide');
                      ?>
                      <div class="gl-card <?php if ($hide) {
                                            // echo 'd-none ';
                                          } ?>col-sm-6 col-md-4 col-lg-3">

                        <div class="insight-block bg-lighter-grey">
                          <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                            <span role="img"
                              aria-label="<?php echo get_field('first_name', $tm->ID) . ' ' . get_field('first_name', $tm->ID); ?>, <?php echo esc_attr($title); ?>,<?php if ($cities_acf) {
                                                                                                                                                                      $i = 1;
                                                                                                                                                                      foreach ($cities_acf as $city_acf) {
                                                                                                                                                                        echo $city_acf; //  Add comma (except after the last theme)
                                                                                                                                                                        echo ($i < count($cities_acf)) ? ", " : "";
                                                                                                                                                                        // Increment counter
                                                                                                                                                                        $i++;
                                                                                                                                                                      }
                                                                                                                                                                    } else {
                                                                                                                                                                      $i = 1;
                                                                                                                                                                      foreach ($cities as $city) {
                                                                                                                                                                        echo $city->name;  //  Add comma (except after the last theme)
                                                                                                                                                                        echo ($i < count($cities)) ? ", " : "";
                                                                                                                                                                        // Increment counter
                                                                                                                                                                        $i++;
                                                                                                                                                                      }
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                            </span>


                          </div>
                          <div class="pt-3 px-3 pb-4 d-flex flex-column h-100">
                            <h3 class="global-leaders__name"><?php echo  $name; ?></h3>
                            <ul class="m-0 p-0 global-leaders__list mb-3">
                              <li class="global-leaders__list-item global-leaders__list-item--title">
                                <?php echo esc_attr($title); ?><?php if ($gl_title) {
                                                                  echo ' <span class="ampersand">&</span> <br>' . esc_attr($gl_title);
                                                                } ?>
                              </li>
                              <li class="global-leaders__list-item global-leaders__list-item--city"><?php if ($cities_acf) {
                                                                                                      $i = 1;
                                                                                                      foreach ($cities_acf as $city_acf) {
                                                                                                        echo $city_acf; //  Add comma (except after the last theme)
                                                                                                        echo ($i < count($cities_acf)) ? ", " : "";
                                                                                                        // Increment counter
                                                                                                        $i++;
                                                                                                      }
                                                                                                    } else {
                                                                                                      $i = 1;
                                                                                                      foreach ($cities as $city) {
                                                                                                        echo $city->name;  //  Add comma (except after the last theme)
                                                                                                        echo ($i < count($cities)) ? ", " : "";
                                                                                                        // Increment counter
                                                                                                        $i++;
                                                                                                      }
                                                                                                    }
                                                                                                    ?></li>
                            </ul>
                            <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link', $tm->ID); ?>"
                              target="_blank">View Bio</a>

                          </div>


                        </div>
                      </div>
                  <?php
                    }
                  }
                  ?>
                  <?php

                } else {

                  $country = $teams['team_members_taxonomy'];
                  if ($country) {
                    if (!is_array($country)) {
                      $country = array($country);
                    }

                    $args_leader = array(
                      'post_type' => 'team_member',
                      'posts_per_page' => -1,
                      'meta_key' => 'last_name',
                      'orderby' => 'meta_value',
                      'order' => 'ASC',
                      'meta_query'  => array(
                        array(         // restrict posts based on meta values
                          'key'     => 'global_markets_first_in_line',  // which meta to query
                          'value'   => 1,  // value for comparison
                        ),
                      ),
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'filter_country',
                          'terms' => $country,
                        ),

                      )
                    );
                    $country_query_leader = new WP_Query($args_leader);


                    $country_query_leader = new WP_Query($args_leader);
                    if ($country_query_leader->have_posts()) :
                      while ($country_query_leader->have_posts()) :
                        $country_query_leader->the_post();

                        $id = get_the_ID();
                        $name = get_field('first_name') . ' ' . get_field('last_name');
                        $title = get_field('title');
                        $gl_title = get_field('gl_area');
                        $cities_acf = get_field('city');
                        $cities = get_the_terms(get_the_id(), 'filter_city');

                        $job_title = get_field('job_title');
                        $featured_image = get_the_post_thumbnail_url(null, 'full');
                        $hide = get_field('team_query_hide');


                  ?>
                        <div id="<?php echo get_field('last_name') . '__' . $id; ?>" class="gl-card <?php if ($hide) {
                                                                                                      // echo 'd-none ';
                                                                                                    } ?>col-sm-6 col-md-4 col-lg-3 <?php echo get_field('last_name') . '__' . $id; ?>">

                          <div class="insight-block bg-lighter-grey">
                            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                              <span role="img"
                                aria-label="<?php echo get_field('first_name') . ' ' . get_field('first_name'); ?>, <?php echo esc_attr($title); ?>,<?php if ($cities_acf) {
                                                                                                                                                      $i = 1;
                                                                                                                                                      foreach ($cities_acf as $city_acf) {
                                                                                                                                                        echo $city_acf; //  Add comma (except after the last theme)
                                                                                                                                                        echo ($i < count($cities_acf)) ? ", " : "";
                                                                                                                                                        // Increment counter
                                                                                                                                                        $i++;
                                                                                                                                                      }
                                                                                                                                                    } else {
                                                                                                                                                      $i = 1;
                                                                                                                                                      foreach ($cities as $city) {
                                                                                                                                                        echo $city->name;  //  Add comma (except after the last theme)
                                                                                                                                                        echo ($i < count($cities)) ? ", " : "";
                                                                                                                                                        // Increment counter
                                                                                                                                                        $i++;
                                                                                                                                                      }
                                                                                                                                                    }
                                                                                                                                                    ?>">
                              </span>


                            </div>
                            <div class="pt-3 px-3 pb-4 d-flex flex-column h-100">
                              <h3 class="global-leaders__name"><?php echo  $name; ?></h3>
                              <ul class="m-0 p-0 global-leaders__list mb-3">
                                <li class="global-leaders__list-item global-leaders__list-item--title">
                                  <?php echo esc_attr($title); ?><?php if ($gl_title) {
                                                                    echo ' <span class="ampersand">&</span> <br>' . esc_attr($gl_title);
                                                                  } ?>
                                </li>
                                <li class="global-leaders__list-item global-leaders__list-item--city"><?php if ($cities_acf) {
                                                                                                        $i = 1;
                                                                                                        foreach ($cities_acf as $city_acf) {
                                                                                                          echo $city_acf;  //  Add comma (except after the last theme)
                                                                                                          echo ($i < count($cities_acf)) ? ", " : "";
                                                                                                          // Increment counter
                                                                                                          $i++;
                                                                                                        }
                                                                                                      } else {
                                                                                                        $i = 1;
                                                                                                        foreach ($cities as $city) {
                                                                                                          echo $city->name;  //  Add comma (except after the last theme)
                                                                                                          echo ($i < count($cities)) ? ", " : "";
                                                                                                          // Increment counter
                                                                                                          $i++;
                                                                                                        }
                                                                                                      }
                                                                                                      ?></li>
                              </ul>
                              <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link'); ?>"
                                target="_blank">View Bio</a>

                            </div>


                          </div>
                        </div>


                      <?php
                      endwhile;
                    endif;

                    $args_team = array(
                      'post_type' => 'team_member',
                      'posts_per_page' => -1,
                      'meta_key' => 'last_name',
                      'orderby' => 'meta_value',
                      'order' => 'ASC',
                      'meta_query'  => array(
                        'relation' => 'OR',
                        array(         // restrict posts based on meta values
                          'key'     => 'global_markets_first_in_line',  // which meta to query
                          'value'   => 0,  // value for comparison
                        ),
                        array(         // restrict posts based on meta values
                          'key'     => 'global_markets_first_in_line',  // which meta to query
                          'compare'   => 'NOT EXISTS',  // value for comparison
                        ),
                      ),
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'filter_country',
                          'terms' => $country,
                        ),

                      )
                    );
                    $country_query_team = new WP_Query($args_team);
                    if ($country_query_team->have_posts()) :
                      while ($country_query_team->have_posts()) :
                        $country_query_team->the_post();

                        $id = get_the_ID();
                        $name = get_field('first_name') . ' ' . get_field('last_name');
                        $title = get_field('title');
                        $gl_title = get_field('gl_area');
                        $cities_acf = get_field('city');
                        $cities = get_the_terms(get_the_id(), 'filter_city');

                        $job_title = get_field('job_title');
                        $featured_image = get_the_post_thumbnail_url(null, 'full');
                        $hide = get_field('team_query_hide');

                      ?>
                        <div id="<?php echo get_field('last_name') . '__' . $id; ?>" class="gl-card <?php if ($hide) {
                                                                                                      // echo 'd-none ';
                                                                                                    } ?>col-sm-6 col-md-4 col-lg-3 <?php echo get_field('last_name') . '__' . $id; ?>">

                          <div class="insight-block bg-lighter-grey">
                            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                              <span role="img"
                                aria-label="<?php echo get_field('first_name') . ' ' . get_field('first_name'); ?>, <?php echo esc_attr($title); ?>,<?php if ($cities_acf) {
                                                                                                                                                      $i = 1;
                                                                                                                                                      foreach ($cities_acf as $city_acf) {
                                                                                                                                                        echo $city_acf; //  Add comma (except after the last theme)
                                                                                                                                                        echo ($i < count($cities_acf)) ? ", " : "";
                                                                                                                                                        // Increment counter
                                                                                                                                                        $i++;
                                                                                                                                                      }
                                                                                                                                                    } else {
                                                                                                                                                      $i = 1;
                                                                                                                                                      foreach ($cities as $city) {
                                                                                                                                                        echo $city->name;  //  Add comma (except after the last theme)
                                                                                                                                                        echo ($i < count($cities)) ? ", " : "";
                                                                                                                                                        // Increment counter
                                                                                                                                                        $i++;
                                                                                                                                                      }
                                                                                                                                                    }
                                                                                                                                                    ?>">
                              </span>


                            </div>
                            <div class="pt-3 px-3 pb-4 d-flex flex-column h-100">
                              <h3 class="global-leaders__name"><?php echo  $name; ?></h3>
                              <ul class="m-0 p-0 global-leaders__list mb-3">
                                <li class="global-leaders__list-item global-leaders__list-item--title">
                                  <?php echo esc_attr($title); ?><?php if ($gl_title) {
                                                                    echo ' <span class="ampersand">&</span> <br>' . esc_attr($gl_title);
                                                                  } ?>
                                </li>
                                <li class="global-leaders__list-item global-leaders__list-item--city"><?php if ($cities_acf) {
                                                                                                        $i = 1;
                                                                                                        foreach ($cities_acf as $city_acf) {
                                                                                                          echo $city_acf;  //  Add comma (except after the last theme)
                                                                                                          echo ($i < count($cities_acf)) ? ", " : "";
                                                                                                          // Increment counter
                                                                                                          $i++;
                                                                                                        }
                                                                                                      } else {
                                                                                                        $i = 1;
                                                                                                        foreach ($cities as $city) {
                                                                                                          echo $city->name;  //  Add comma (except after the last theme)
                                                                                                          echo ($i < count($cities)) ? ", " : "";
                                                                                                          // Increment counter
                                                                                                          $i++;
                                                                                                        }
                                                                                                      }
                                                                                                      ?></li>
                              </ul>
                              <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link'); ?>"
                                target="_blank">View Bio</a>

                            </div>


                          </div>
                        </div>


                <?php
                      endwhile;
                    endif;
                    wp_reset_postdata();
                  }
                }

                ?>




              </div>

            </div>




        <?php
            $team_counter++;
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!--======================================-->

<div id="our-services" class="pepi-row gl__ourservices">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 px-0 col-md-6 order-2 order-md-1 px-md-0">
        <h2 class="section-title pt-4 pt-md-0">Our Services</h2>
        <div class="short-border"></div>
        <ul class="m-0 pl-3 spaced-list">
          <li>Buy-side Financial Due Diligence</li>
          <li>Vendor Due Diligence, Vendor Assistance &amp; Sell-side Support</li>
          <li>Tax Due Diligence</li>
          <li>Operational Due Diligence</li>
          <li>IT Due Diligence</li>
          <li>Carve-Out Services</li>
          <li>Valuation Services</li>
          <li>SPA and Pricing Advisory</li>
        </ul>

      </div>
      <div class="col-12 px-0 col-md-6 order-1 order-md-2 px-md-0">

        <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/services-image.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<!--/-->


<div id="our-differentiators" class="pepi-row gl__ourdiff">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 px-0 col-md-6 order-2 px-md-0">
        <div class="ml-md-5 pl-md-4">

          <h2 class="section-title">Our Differentiators</h2>
          <div class="short-border"></div>
          <ul class="m-0 pl-3 spaced-list">
            <li>Dedicated Global Practice</li>
            <li>Integrated Approach that Combines Transaction Advisory, Tax and Operational Performance
              Improvement Expertise</li>
            <li>Free from Audit-based Conflict</li>
            <li>Client Flexibility with Approach and Fees</li>
          </ul>
        </div>


      </div>
      <div class="col-12 px-0 col-md-6 px-md-0 mb-4 mb-md-0">

        <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/our-differentiators-image.jpg"
          alt="">



      </div>
    </div>
  </div>

</div>
<!--/-->


<!--======================================-->
<div class="container pepi-row">
  <div class="row">
    <div class="col px-0">
      <div id="section-glv7" class="moby tabby tabby2">

        <div class="sglv7-content">
          <h2 class="mb-5">LATEST EMEA DEAL HIGHLIGHT</h2>

          <h3>GLOBAL TRANSACTION ADVISORY GROUP</h3>
          <p class="mb-5">Congratulations to our client, AccorInvest, for its recent acquisition of a 85.8% stake in
            Orbis SA, the owner and operator of 73 hotels in six countries across Eastern Europe…</p>
          <div class="sglv7-btns d-flex flex-wrap justify-content-center align-items-center">
            <a href="https://www.linkedin.com/posts/simon-regad-b3134024_amon-paris-leadership-activity-6615171173837783040-kxPv/"
              target="_blank">
              <div class="glv7l-btn ">read more</div>
            </a><a href="<?php echo site_url(); ?>/deal-highlights/">
              <div class="glv7l-btn ">VIEW MORE DEAL HIGHLIGHTS</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="our-locations" class="pepi-row gl-location gl-location__europe">
  <div class="container">
    <div class="row">
      <div class="col-12 px-0">

        <h2 class="section-title">Our Locations</h2>
        <div class="short-border mb-5"></div>

      </div>
    </div>
    <div class="row row__locations">
      <div class="col-md-5 px-0">
        <h3 class="gl-location gl-location__country">France</h3>
        <address>
          <h4 class="gl-location gl-location__city">Paris</h4>
          24 Rue Royale<br>
          75008 Paris, France<br>
          <a class="gl-location gl-location__link"
            href="https://www.google.com/maps/place/24+Rue+Royale,+75008+Paris,+France/@48.8688982,2.3240159,17z/data=!4m13!1m7!3m6!1s0x47e66e32dbe7db2f:0xa4f52cf8e4db68b6!2s24+Rue+Royale,+75008+Paris,+France!3b1!8m2!3d48.8688552!4d2.3239062!3m4!1s0x47e66e32dbe7db2f:0xa4f52cf8e4db68b6!8m2!3d48.8688552!4d2.3239062"
            target="_blank"><i class="icon-map-marker"><img
                src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">
        <div class="row no-gutters">
          <div class="col-md-7 px-0">
            <h3 class="gl-location gl-location__country">Italy</h3>
            <address>
              <h4 class="gl-location gl-location__city">Milan</h4>
              Via Privata Maria Teresa, 8<br>
              20123 Milan<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/Via+Privata+Maria+Teresa,+8,+20123+Milano+MI,+Italy/@45.4634906,9.1791067,17z/data=!4m13!1m7!3m6!1s0x4786c1549d2399f7:0x10c6be7d480afc6a!2sVia+Privata+Maria+Teresa,+8,+20123+Milano+MI,+Italy!3b1!8m2!3d45.4634869!4d9.1812954!3m4!1s0x4786c1549d2399f7:0x10c6be7d480afc6a!8m2!3d45.4634869!4d9.1812954"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
          <div class="col-md-5 px-0">
            <h3 class="gl-location gl-location__country">Sweden</h3>
            <address>
              <h4 class="gl-location gl-location__city">Stockholm</h4>
              Hamngatan 13, 1st Floor
              <br>
              111 47 Stokholm, Sweden<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/Hamngatan+13,+111+47+Stockholm,+Sweden/@59.3328794,18.070605,17z/data=!3m1!4b1!4m5!3m4!1s0x465f9d5bf1070739:0x9ff0be912d6248c5!8m2!3d59.3328794!4d18.0727937"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="row row__locations">
      <div class="col-md-5 px-0">
        <h3 class="gl-location gl-location__country">Netherlands</h3>
        <address>
          <h4 class="gl-location gl-location__city">Amsterdam</h4>
          WTC H- Tower, 14th Floor<br>
          Zuidplein 118 Amsterdam, 1077 XV<br>
          <a class="gl-location gl-location__link"
            href="https://www.google.com/maps/place/World+Trade+Center+Amsterdam/@52.3402597,4.8717784,17z/data=!3m1!4b1!4m5!3m4!1s0x47c60a0484d397f5:0xd3f97f7271210d53!8m2!3d52.3402597!4d4.8739724"
            target="_blank"><i class="icon-map-marker"><img
                src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">
        <div class="row no-gutters">
          <div class="col-12 px-0">
            <h3 class="gl-location gl-location__country d-block">Switzerland</h3>

          </div>
          <div class="col-md-7 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Zürich</h4>
              Regus Zürich Stauffacher<br>
              Badenerstrasse 47 Zürich, 8004<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/Regus+-+Zurich,+Stauffacher/@47.3731484,8.5283593,15z/data=!4m5!3m4!1s0x0:0xa6eb5531ab0070ac!8m2!3d47.3731484!4d8.5283593"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
          <div class="col-md-5 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Geneva</h4>
              Rue du Rhône, 30<br>
              1204 Geneva<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/Rue+du+Rh%C3%B4ne+30,+1204+Gen%C3%A8ve,+Switzerland/data=!4m2!3m1!1s0x478c652924484cdb:0x8057748e0802ae30?sa=X&ved=2ahUKEwjCtqTF8-f5AhVoKkQIHYbXDJoQ8gF6BAgMEAE"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="row row__locations">
      <div class="col-md-5 px-0">
        <h3 class="gl-location gl-location__country">Spain</h3>
        <address>
          <h4 class="gl-location gl-location__city">Madrid</h4>
          Paseo de la Castellana 95, Planta 18<br>
          Torre Europa 28046 Madrid<br>
          <a class="gl-location gl-location__link"
            href="https://www.google.com/maps/place/Swiss+Re/@40.4516782,-3.6915516,21z/data=!3m1!5s0xd4228e2dddc1537:0xf51f61ee9e3724c0!4m9!1m2!2m1!1sPaseo+de+la+Castellana+95,+Planta+18+Torre+Europa+28046+Madrid!3m5!1s0xd422891b33b778f:0x4a6de0544722f396!8m2!3d40.4516151!4d-3.6913637!15sCj5QYXNlbyBkZSBsYSBDYXN0ZWxsYW5hIDk1LCBQbGFudGEgMTggVG9ycmUgRXVyb3BhIDI4MDQ2IE1hZHJpZJIBEGluc3VyYW5jZV9hZ2VuY3ngAQA"
            target="_blank"><i class="icon-map-marker"><img
                src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">
        <div class="row no-gutters">
          <div class="col-12 px-0">
            <h3 class="gl-location gl-location__country d-block">United Kingdom</h3>

          </div>
          <div class="col-md-7 px-0">
            <address>
              <h4 class="gl-location gl-location__city">London</h4>
              One Finsbury Circus<br>
              London, EC2M 7EB<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/1+Finsbury+Circus,+London+EC2M+7EB,+UK/@51.5182427,-0.0895296,17z/data=!3m1!4b1!4m5!3m4!1s0x48761cac68677595:0x2445bf18f32344b9!8m2!3d51.5182427!4d-0.0873356"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
          <div class="col-md-5 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Birmingham</h4>
              4th Floor, 1 Edmund Gardens<br>
              Edmund Street B3 2HJ UK<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/4th+Floor,+1+Edmund+St,+Birmingham+B3+2HJ,+UK/data=!4m2!3m1!1s0x4870bc8dcc443219:0x13071c20a7562acd?sa=X&ved=2ahUKEwiavpKP9uf5AhVALUQIHZw7Bn8Q8gF6BAgOEAE"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
        </div>
      </div>
    </div>

    <div class="row row__locations">
      <div class="col-12 px-0 pr-md-0">

        <h3 class="gl-location gl-location__country d-block">Germany</h3>

      </div>
      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">Frankfurt</h4>
          Neue Mainzer Strasse 28<br>
          Frankfurt am Main, 60311<br>
          <a class="gl-location gl-location__link"
            href="https://www.google.com/maps/place/Neue+Mainzer+Str.+28,+60311+Frankfurt+am+Main,+Germany/@50.11038,8.671856,17z/data=!3m1!4b1!4m5!3m4!1s0x47bd0eabd8aac919:0x22724db4a8deb2ce!8m2!3d50.11038!4d8.67405"
            target="_blank"><i class="icon-map-marker"><img
                src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">
        <div class="row no-gutters">
          <div class="col-md-7 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Hamburg</h4>
              Ballindamm 27<br>20095 Hamburg Germany<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/Ballindamm+27,+20095+Hamburg,+Germany/@53.5526421,9.9942743,17z/data=!3m1!4b1!4m5!3m4!1s0x47b18f1e81c6e103:0x8fb9344dd32727a1!8m2!3d53.5526421!4d9.996463?shorturl=1"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
          <div class="col-md-5 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Münich</h4>
              Thierschplatz 6<br>München, 80538<br>
              <a class="gl-location gl-location__link"
                href="https://www.google.com/maps/place/Thierschpl.+6,+80538+M%C3%BCnchen,+Germany/@48.1393657,11.5871761,17z/data=!3m1!4b1!4m5!3m4!1s0x479e7585f443fa43:0xb3c9cddc0210b2b6!8m2!3d48.1393657!4d11.5893701"
                target="_blank"><i class="icon-map-marker"><img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
        </div>
      </div>
      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">Düsseldorf</h4>
          Fürstenwall 17240217<br>Düsseldorf Germany<br>
          <a class="gl-location gl-location__link"
            href="https://www.google.com/maps/place/F%C3%BCrstenwall+172,+40217+D%C3%BCsseldorf,+Germany/@51.2140997,6.7748712,17z/data=!3m1!4b1!4m5!3m4!1s0x47b8ca3f630b51e5:0x71b4ff1174674d47!8m2!3d51.2140964!4d6.7770599"
            target="_blank"><i class="icon-map-marker"><img
                src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">

      </div>
    </div>

    <div class="row row__locations">
      <div class="col-12 px-0 pr-md-0">

        <h3 class="gl-location gl-location__country d-block">United Arab Emirates</h3>

      </div>
      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">Dubai</h4>
          Index Tower, Office 2201,<br>Floor 22, Dubai<br>
          <a class="gl-location gl-location__link"
            href="https://www.google.com/maps/place/Alvarez+%26+Marsal+Middle+East+Limited/@25.2076284,55.2759151,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f428cef9e22a1:0x549ddd33c4af7edb!8m2!3d25.2076236!4d55.2781038"
            target="_blank"><i class="icon-map-marker"><img
                src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>

    </div>
  </div>
</div>
</div>
<!--/-->

<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

<script>
  $(document).ready(function() {
    $('.glm-info-slider').slick({
      dots: false,
      arrows: false,
      fade: true,
      speed: 500,
      cssEase: 'ease-in-out',
      adaptiveHeight: true,
    });
    $('.glm-team-slider').slick({
      dots: false,
      arrows: false,
      fade: true,
      speed: 500,
      cssEase: 'ease-in-out',
      adaptiveHeight: true,
    });
    $('.glm-nav-btn').click(function(e) {
      e.preventDefault();

      var index = $(this).data('target');

      $('.glm-info-slider').slick('slickGoTo', parseInt(index));
      $('.glm-team-slider').slick('slickGoTo', parseInt(index));
    });
  });
</script>

<!--======================================-->
<?php get_footer(); ?>