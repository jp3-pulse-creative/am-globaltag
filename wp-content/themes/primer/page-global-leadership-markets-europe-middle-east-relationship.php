<?php
/* Template Name: Reboot: GL-Markets (relationship): Europe & Middle East (EMEA) */
get_header(); ?>
<?php // include 'protect.php';?>


<div id="section-glv5" class="moby tabby tabby2" style="background-image: url(<?php echo get_field('banner_image') ?>)">
  <h1><?php echo get_field('banner_text')?></h1>
</div>


<div class="gl-main">
    <div class="container">
      <div class="row d-block">
        <div class="glm-info-ctn">
          <div class="glm-info-slider">
              <?php
              $region_info = get_field('region_info');
              $reg_counter = 0;
              if($region_info){
                foreach($region_info as $info){
                    $marker = $info['info_designation'];
                    $marker = strtolower($marker);
                                                                 $marker = str_replace(' ', '_', $marker);
                                              $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                  if($info['side_text_box']){
                    ?>
                  <div id="glms-<?php echo $marker ?>" class="glm-info-slide" style="background-image:url(<?php echo $info['background_image']?>)">
                    <div class="col-md-9">
                      <?php echo $info['main_text_box']; ?>
                    </div>
                    <div class="col-md-3">
                      <?php echo $info['side_text_box']; ?>
                    </div>
                    <div class="col-xs-12">
                        <div class="glm-info-nav" style="margin-top:0;">
                            <?php
                            $counter = 0;
                            $region_list = get_field('region_info');
                            if($region_list){
                            foreach($region_list as $region){
                                $marker = $region['info_designation'];
                                $marker = strtolower($marker);
                                                                             $marker = str_replace(' ', '_', $marker);
                                              $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                                ?>
                                <a href="#glms-<?php echo $marker ?>" class="glm-nav-btn <?php if($counter == $reg_counter){ echo 'active'; } ?>" data-target="<?php echo $counter ?>"><?php echo $region['info_designation'] ?></a>
                                <?php
                                $counter++;
                            }
                            }
                            ?>
                        </div>
                    </div>
                  </div>
                    <?php
                  }else{
                    ?>
                  <div id="glms-<?php echo $marker ?>" class="glm-info-slide" style="background-image:url(<?php echo $info['background_image']?>)">
                    <div class="col-xs-12">
                      <div class="glm-text-ctn">
                      <?php echo $info['main_text_box']; ?>
                            <div class="glm-info-nav">
                                <?php
                                $counter = 0;
                                $region_list = get_field('region_info');
                                if($region_list){
                                foreach($region_list as $region){
                                    $marker = $region['info_designation'];
                                    $marker = strtolower($marker);
                                                                                 $marker = str_replace(' ', '_', $marker);
                                              $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
                                    ?>
                                    <a href="#glms-<?php echo $marker ?>" class="glm-nav-btn <?php if($counter == $reg_counter){ echo 'active'; } ?>" data-target="<?php echo $counter ?>"><?php echo $region['info_designation'] ?></a>
                                    <?php
                                    $counter++;
                                }
                                }
                                ?>
                            </div>

                      </div>
                    </div>
                  </div>
                    <?php
                  }
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
          if($team_ctn){
            foreach($team_ctn as $teams){
              the_row();
              $marker = $teams['info_designation'];
              $marker = strtolower($marker);
                                                           $marker = str_replace(' ', '_', $marker);
                                              $marker = preg_replace('/[^A-Za-z0-9\-]/', '', $marker);
              ?>

              <div id="glmt-<?php echo $marker ?>" class="glm-team-slide global-leaders">
                <div class="glm-team-head">
                  <h1><?php echo $teams['team_title']; ?><?php // echo $teams['info_designation']; ?></h1>
                </div>
                <div class="glm-team-list">
                  <?php
                  $team = $teams['team_members_post_relationship'];
                  if($team){
                    foreach($team as $tm){
                      ?>

                        <?php
                        $name = get_field('first_name', $tm->ID).' '.get_field('last_name', $tm->ID);
                        $title = get_field( 'title', $tm->ID );
                        $gl_title = get_field( 'gl_area', $tm->ID );
                        $city = get_field( 'city', $tm->ID );
                        $featured_image = get_the_post_thumbnail_url( $tm->ID, 'full');
                        $hide = get_field( 'team_query_hide' );
                        ?>
                            <div class="gl-card <?php if($hide){echo 'd-none ';}?>col-sm-6 col-md-4 col-lg-3">

                            <div class="insight-block bg-lighter-grey">
                                <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

                                <span role="img"
                                    aria-label="<?php echo get_field('first_name', $tm->ID).' '.get_field('first_name', $tm->ID); ?>, <?php echo esc_attr($title);?>,<?php echo $city[0];?>">
                                </span>


                                </div>
                                <div class="pt-3 pr-2 pb-4 pl-3 d-flex flex-column h-100">
                                <h3 class="global-leaders__name"><?php echo  $name;?></h3>
                                <ul class="m-0 p-0 global-leaders__list mb-3">
                                    <li class="global-leaders__list-item global-leaders__list-item--title"><?php echo esc_attr($title);?><?php if($gl_title) {echo ' <span class="ampersand">&</span> <br>'.esc_attr($gl_title);}?>
                                    </li>
                                    <li class="global-leaders__list-item global-leaders__list-item--city"><?php echo $city[0];?></li>
                                </ul>
                                <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link', $tm->ID);?>" target="_blank">View Bio</a>

                                </div>


                            </div>
                            </div>
                      <?php
                    }
                  }
                  ?>
                </div>
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
</div>

<!--======================================-->

<div id="section-glv6" class="moby tabby tabby2">
  <div class="container">
    <div class="row">
      <div class="serviceline">
        <div class="col-xs-12 col-sm-12 col-md-7 serviceline-img" style="background-image:url(<?php echo get_field('service_img')?>)"></div>

        <div class="col-xs-12 col-sm-12 col-md-5 bluer">
          <div class="serviceline-content">
            <div class="serviceline-ctn">
            <h2>OUR SERVICES</h2>
            <ul>
            <?php
            if(have_rows('service_list')){
              while(have_rows('service_list')){
                the_row();
                ?>
                <li><?php echo get_sub_field('service_text'); ?></li>
                <?php
              }
            }
                ?>
            </ul>
            </div>
          </div>
        </div>
        <!--/-->
      </div>
    </div>
    <div class="row">
      <div class="serviceline">
        <div class="col-xs-12 col-sm-12 col-md-5 bluerer">
          <div class="serviceline-content">
            <div class="serviceline-ctn">
            <h2>OUR DIFFERENTIATORS</h2>
            <ul>
            <?php
            if(have_rows('differentiator_list')){
              while(have_rows('differentiator_list')){
                the_row();
                ?>
                <li><?php echo get_sub_field('diff_text'); ?></li>
                <?php
              }
            }
                ?>
            </ul>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7 serviceline-img" style="background-image:url(<?php echo get_field('differentiator_img')?>)"></div>
      </div>
    </div>
  </div>
</div>

<!--======================================-->
<div class="container">
  <div class="row">
    <div class="col">
      <?php
      echo get_field('code_block');
      ?>
</div>
</div>
</div>

<script>
  $( document ).ready(function() {
    $('.glm-info-slider').slick({
      dots:false,
      arrows:false,
      fade: true,
      speed: 500,
      cssEase: 'ease-in-out',
      adaptiveHeight:true,
    });
    $('.glm-team-slider').slick({
      dots:false,
      arrows:false,
      fade: true,
      speed: 500,
      cssEase: 'ease-in-out',
      adaptiveHeight:true,
    });
    $('.glm-nav-btn').click(function(e){
      e.preventDefault();

      var index = $(this).data('target');

      $('.glm-info-slider').slick('slickGoTo',parseInt(index));
      $('.glm-team-slider').slick('slickGoTo',parseInt(index));
    });
  });
</script>

<!--======================================-->
<?php get_footer(8); ?>
