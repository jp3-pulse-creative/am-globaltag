<?php
/* Template Name: Reboot: Query: GL-Markets - North America
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
                    <?php if ($info['main_text_box']): ?>
                      <?php echo '<div class="main-text">' . $info['main_text_box'] . '</div>'; ?>


                    <?php elseif ($reg_counter == 0): ?>
                      <div class="main-text">

                        <p>A&M Transaction Advisory United States practice serves clients throughout the United States and
                          Canada. Our integrated due diligence approach combines our deep operational, functional and industry
                          expertise with Big Four quality financial accounting and tax services to drive value throughout the
                          investment lifecycle. Our dedicated US-based industry vertical teams in Healthcare, Software &
                          Technology, Energy & Infrastructure and Financial Services provide our clients with greater
                          insights. We have deep subject matter experience across numerous sectors (i.e. Restaurants, Food &
                          Beverage, Education, Retail, Consumer Good & Services, Leisure & Fitness, Industrials and more)
                          leveraging our firm’s operational heritage to provide more value.</p>

                        <p>Our local integrated due diligence approach combined with our global mindset enables our
                          professionals to operate seamlessly cross-border providing clients consistent and flawless quality
                          service. We service private equity, sovereign wealth funds, hedge funds, distress funds,
                          multi-national corporations, investment banks and law firms to create value throughout the
                          investment lifecycle.
                        </p>
                      </div>
                    <?php else: ?>
                      <div class="main-text">
                        <p>Our Global Transaction Advisory team works with private equity firms, hedge funds and corporate
                          acquirers. We provide integrated financial, operational, commercial and accounting due diligence
                          services to help our clients make informed investment decisions and improve the performance of
                          current assets.</p>
                      </div>


                    <?php endif; ?>



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
            $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker)

        ?>

            <div id="glmt-<?php echo $marker ?>" class="glm-team-slide global-leaders">


              <?php if (is_page(1618) &&  $team_counter == 0): ?>
                <div class="glm-team-head col-12 px-0 px-0">
                  <h2 class="section-title"><?php echo 'United States Leadership'; ?></h2>
                  <div class="short-border"></div>
                </div>

                <?php $team_us = $teams['team_members_post_relationship_us'];
                if ($team_us): ?>

                  <div class="glm-team-list">
                    <?php foreach ($team_us as $tm_us): ?>


                      <?php
                      $name = get_field('first_name', $tm_us->ID) . ' ' . get_field('last_name', $tm_us->ID);
                      $title = get_field('title', $tm_us->ID);
                      $gl_title = get_field('gl_area', $tm_us->ID);
                      $cities_acf = get_field('city', $tm_us->ID);
                      $cities = get_the_terms($tm_us->ID, 'filter_city');


                      $featured_image = get_the_post_thumbnail_url($tm_us->ID, 'full');
                      $hide = get_field('team_query_hide');

                      ?>
                      <div class="gl-card <?php if ($hide) {
                                            // echo 'd-none ';
                                          } ?>col-sm-6 col-md-4 col-lg-3">

                        <div class="insight-block bg-lighter-grey">
                          <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                            <span role="img" aria-label="<?php echo get_field('first_name', $tm_us->ID) . ' ' . get_field('first_name', $tm_us->ID); ?>, <?php echo esc_attr($title); ?>,<?php if ($cities_acf) {
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
                            <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link', $tm_us->ID); ?>"
                              target="_blank">View Bio</a>

                          </div>


                        </div>
                      </div>
                    <?php endforeach; ?>

                  </div><!--===============   /glm-team-list =======================-->

                <?php endif; ?>

                <?php $team_canada = $teams['team_members_post_relationship_canada'];
                if ($team_canada): ?>
                  <div class="glm-team-head col-12 px-0 px-0">
                    <h2 class="section-title"><?php echo 'Canada Leadership'; ?></h2>
                    <div class="short-border"></div>
                  </div>
                  <div class="glm-team-list">

                    <?php foreach ($team_canada as $tm_canada): ?>


                      <?php
                      $name = get_field('first_name', $tm_canada->ID) . ' ' . get_field('last_name', $tm_canada->ID);
                      $title = get_field('title', $tm_canada->ID);
                      $gl_title = get_field('gl_area', $tm_canada->ID);
                      $cities_acf = get_field('city', $tm_canada->ID);
                      $cities = get_the_terms($tm_canada->ID, 'filter_city');


                      $featured_image = get_the_post_thumbnail_url($tm_canada->ID, 'full');
                      $hide = get_field('team_query_hide');

                      ?>
                      <div class="gl-card <?php if ($hide) {
                                            // echo 'd-none ';
                                          } ?>col-sm-6 col-md-4 col-lg-3">

                        <div class="insight-block bg-lighter-grey">
                          <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                            <span role="img" aria-label="<?php echo get_field('first_name', $tm_canada->ID) . ' ' . get_field('first_name', $tm_canada->ID); ?>, <?php echo esc_attr($title); ?>,<?php if ($cities_acf) {
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
                                                                                                                                                                                                  } ?>">
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
                            <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link', $tm_canada->ID); ?>"
                              target="_blank">View Bio</a>

                          </div>


                        </div>
                      </div>
                    <?php endforeach; ?>

                  </div><!--===============   /glm-team-list =======================-->
                <?php endif; ?>




              <?php else: ?>
                <?php $city = $teams['info_designation'];
                if ($city) : ?>
                  <div class="glm-team-head col-12 px-0 px-0">
                    <h2 class="section-title"><?php echo $teams['info_designation']; ?></h2>
                    <div class="short-border"></div>
                  </div>
                  <div class="glm-team-list">


                    <?php $args_leader = array(
                      'post_type' => 'team_member',
                      'posts_per_page' => -1,
                      'meta_key' => 'last_name',
                      'orderby' => 'meta_value',
                      'order' => 'ASC',
                      'post_status' => 'publish',
                      'meta_query'  => array(
                        array(         // restrict posts based on meta values
                          'key'     => 'global_markets_first_in_line',  // which meta to query
                          'value'   => 1,  // value for comparison
                        ),
                      ),
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'filter_city',
                          'field' => 'name',
                          'terms' => $city,
                        ),

                      )
                    );
                    $city_query_leader = new WP_Query($args_leader);


                    $city_query_leader = new WP_Query($args_leader);
                    if ($city_query_leader->have_posts()) : while ($city_query_leader->have_posts()) :
                        $city_query_leader->the_post();

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
                        <div id="<?php echo get_field('last_name') . '__' . $id; ?>"
                          class="gl-card <?php if ($hide) {
                                            // echo 'd-none ';
                                          } ?>col-sm-6 col-md-4 col-lg-3 <?php echo get_field('last_name') . '__' . $id; ?>">

                          <div class="insight-block bg-lighter-grey">
                            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                              <span role="img" aria-label="<?php echo get_field('first_name') . ' ' . get_field('first_name'); ?>, <?php echo esc_attr($title); ?>,<?php if ($cities_acf) {
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
                              <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link'); ?>" target="_blank">View
                                Bio</a>

                            </div>


                          </div>
                        </div>
                      <?php endwhile;
                    endif;

                    $args_team = array(
                      'post_type' => 'team_member',
                      'posts_per_page' => -1,
                      'meta_key' => 'last_name',
                      'orderby' => 'meta_value',
                      'order' => 'ASC',
                      'post_status' => 'publish',
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
                          'taxonomy' => 'filter_city',
                          'field' => 'name',
                          'terms' => $city,
                        ),

                      )
                    );
                    $city_query_team = new WP_Query($args_team);
                    if ($city_query_team->have_posts()) :
                      while ($city_query_team->have_posts()) :
                        $city_query_team->the_post();

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
                        <div id="<?php echo get_field('last_name') . '__' . $id; ?>"
                          class="gl-card <?php if ($hide) {
                                            // echo 'd-none ';
                                          } ?>col-sm-6 col-md-4 col-lg-3 <?php echo get_field('last_name') . '__' . $id; ?>">

                          <div class="insight-block bg-lighter-grey">
                            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                              <span role="img" aria-label="<?php echo get_field('first_name') . ' ' . get_field('first_name'); ?>, <?php echo esc_attr($title); ?>,<?php if ($cities_acf) {
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
                              <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link'); ?>" target="_blank">View
                                Bio</a>

                            </div>


                          </div>
                        </div>


                    <?php endwhile;
                    endif; ?>
                  </div>

                <?php

                endif;

                wp_reset_postdata(); ?>
              <?php endif; ?>

            </div><!--===============   /glm-team-slide =======================-->
        <?php
            $team_counter++;
          }
        }
        ?>
      </div><!--===============   /glm-team-slider =======================-->

    </div>
  </div>
</div>

<!--======================================-->

<div id="our-services" class="pepi-row gl__ourservices">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 px-0 col-md-6 order-2 order-md-1 px-md-0">
        <h2 class="section-title pt-4 pt-md-4">Our Services</h2>
        <div class="short-border"></div>
        <ul class="m-0 pl-3 spaced-list">
          <li>Financial Accounting Buy-Side Due Diligence</li>
          <li>Sell Side Due Diligence</li>
          <li>Post Transaction Accounting Support</li>
          <li>Dedicated industry verticals: Healthcare, Financial Services, <br class="d-none d-md-inline">Software
            &amp; Technology, Energy &amp; Infrastructure</li>
          <li>Capital Markets &amp; Accounting Advisory</li>
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
            <li>Integrated Approach That Combines Transaction Advisory, Tax and Operational Performance
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




<div id="our-locations" class="pepi-row gl-location gl-location__north-america">
  <div class="container">
    <div class="row">
      <div class="col-12 px-0">

        <h2 class="section-title">Our Locations</h2>
        <div class="short-border mb-5"></div>

      </div>
    </div>
    <div class="row row__locations">
      <div class="col-12 px-0 pr-md-0">
        <h3 class="gl-location gl-location__country">United States</h3>
      </div>

      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">Atlanta</h4>
          Monarch Tower<br>
          3424 Peachtree Road NE, Suite 1500<br>
          Atlanta, Georgia, 30326<br>
          <a class="gl-location gl-location__link" href="https://goo.gl/maps/pgNruBXh3AYncmGaA" target="_blank"><i
              class="icon-map-marker">
              <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">
        <div class="row no-gutters">
          <div class="col-md-7 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Boston</h4>

              Two International Place<br>
              100 Oliver Street, 5th Floor<br>
              Boston, Massachusetts, 02110<br>
              <a class="gl-location gl-location__link" href="https://goo.gl/maps/HQd6MsVG9nifJxcb6">
                <i class="icon-map-marker">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
          <div class="col-md-5 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Chicago</h4>

              540 W. Madison<br>
              Suite 1800<br>
              Chicago, IL 60661<br>
              <a class="gl-location gl-location__link" href="https://goo.gl/maps/KXCN2h2bDgZtNcNn6">
                <i class="icon-map-marker">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
        </div>
      </div>



      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">Dallas</h4>
          2100 Ross Avenue<br>
          21st Floor<br>
          Dallas, TX 75201<br>
          <a class="gl-location gl-location__link" href="https://goo.gl/maps/tACkeXYKguLV6QDC7" target="_blank"><i
              class="icon-map-marker">
              <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">
        <div class="row no-gutters">
          <div class="col-md-7 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Houston</h4>

              700 Louisiana Street<br>
              Suite 900<br>
              Houston, Texas, 77002<br>
              <a class="gl-location gl-location__link" href="https://goo.gl/maps/UVL1dkDD1xpaWMNx6">
                <i class="icon-map-marker">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
          <div class="col-md-5 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Los Angeles</h4>

              2029 Century Park East<br>
              Suite 2060<br>
              Los Angeles, California, 90067<br>
              <a class="gl-location gl-location__link" href="https://goo.gl/maps/L61gyTy6LTmQavGU8">
                <i class="icon-map-marker">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
        </div>
      </div>



      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">Miami</h4>
          600 Brickell Avenue<br>
          Suite 2950<br>
          Miami, Florida, 33131<br>
          <a class="gl-location gl-location__link" href="https://goo.gl/maps/C6bkhMc2CuWuZCbg6" target="_blank"><i
              class="icon-map-marker">
              <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">
        <div class="row no-gutters">
          <div class="col-md-7 px-0">
            <address>
              <h4 class="gl-location gl-location__city">Nashville</h4>

              1600 Division Street<br>
              Suite 520<br>
              Nashville, Tennessee, 37203<br>
              <a class="gl-location gl-location__link" href="https://goo.gl/maps/EhxwweX4dxo1m9WZ8">
                <i class="icon-map-marker">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
          <div class="col-md-5 px-0">
            <address>
              <h4 class="gl-location gl-location__city">New York</h4>

              600 Madison Avenue<br>
              New York, NY 10022<br><br>
              <a class="gl-location gl-location__link" href="https://goo.gl/maps/rLi7TaYbzyLiLici6">
                <i class="icon-map-marker">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                    alt=""></i> <span>View in Map</span></a>
            </address>
          </div>
        </div>
      </div>



      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">San Francisco</h4>
          425 Market Street<br>
          18th Floor<br>
          San Francisco, California, 94105<br>
          <a class="gl-location gl-location__link" href="https://goo.gl/maps/mmbiZct4xWRr7sPa8" target="_blank"><i
              class="icon-map-marker">
              <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">

      </div>

    </div>


    <div class="row row__locations">
      <div class="col-12 px-0 pr-md-0">
        <h3 class="gl-location gl-location__country">Canada</h3>
      </div>

      <div class="col-md-5 px-0">
        <address>
          <h4 class="gl-location gl-location__city">Toronto</h4>
          Royal Bank Plaza, South Tower<br>200 Bay Street, Suite 2900<br>P.O. Box 22<br>Toronto ON M5J 2J1<br>Canada<br>
          <a class="gl-location gl-location__link" href="https://goo.gl/maps/pgNruBXh3AYncmGaA" target="_blank"><i
              class="icon-map-marker">
              <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/icons/icon-map-marker.svg"
                alt=""></i> <span>View in Map</span></a>
        </address>


      </div>
      <div class="col-md-7 px-0 px-md-0">

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