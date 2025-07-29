<?php // include 'protect.php';?>
<?php
/*
Template Name: Global Leadership Template
*/
?>
<?php get_header(6); ?>
<div class="container">
  <div class="row">
    <div class="col">
<div id="section-glv5" class="moby tabby tabby2" style="background-image: url(<?php echo get_field('banner_image') ?>)">
  <h1><?php echo get_field('banner_text')?></h1>
</div>
</div>
</div>
</div>

<div class="gl-main">
    <div class="container">
      <div class="row">
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
      <div class="row">
        <div class="glm-team-slider">
          <?php
          $team_ctn = get_field('region_info');
          if($team_ctn){
            foreach($team_ctn as $teams){
              the_row();
              $marker = $teams['info_designation'];
              $marker = strtolower($marker);
              $marker = str_replace(' ', '_', $marker);
              ?>

              <div id="glmt-<?php echo $marker ?>" class="glm-team-slide">
                <div class="glm-team-head">
                  <h1><?php echo $teams['team_title']; ?><?php // echo $teams['info_designation']; ?></h1>
                </div>
                <div class="glm-team-list">
                  <?php
                  $team = $teams['team_members'];
                  if($team){
                    foreach($team as $tm){
                      ?>

                  <div class="col-xs-6 col-sm-4 col-md-3 glm-profile">
                    <div class="profile-ctn">
                      <img class="profile-img" src="<?php if($tm['profile_image']){echo $tm['profile_image'];}else{echo site_url().'/wp-content/uploads/2022/04/leadership-placeholder.jpg';}?>"/>
                      <div class="profile-text">
                        <p class="profile-name"><?php echo $tm['name'] ?></p>
                        <p class="profile-title"><strong><?php echo $tm['location'] ?></strong><br>
                          <?php echo $tm['job_title'] ?></p>

                        <a  href="<?php echo $tm['bio_link'] ?>" target="_blank"><div class="glv4l-btn" <?php if(!$tm['bio_link']){echo 'style="visibility: hidden;"';}?>>view bio</div></a>
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
