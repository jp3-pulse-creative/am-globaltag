<?php
/* Template Name: Global Leadership */

?>

<?php get_header(); ?>
<div id="global-leadership-content">
  <div id="section-glv3" class="moby tabby tabby2 pt-5">
    <div class="glv3-map-container pt-5">


      <!--desktop-->
      <div class="map-canvas position-relative mx-auto">
        <a href="#northamerica"><img class="country glv3-on-northamerica hideme pop" data-toggle="collapse"
            data-target="#content-northamerica"
            src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/TAG_Toronto_MapUpdate_Hover_02@2x.png"></a>
        <a href="#latinamerica"> <img class="country glv3-on-latinamerica hideme" data-toggle="collapse"
            data-target="#content-lat"
            src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_LatinAmerica-09082022.png"></a>
        <a href="#europe"><img class="country glv3-on-europe hideme" data-toggle="collapse"
            data-target="#content-europe"
            src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_Europe-09192022.png"></a>
        <a href="#india"> <img class="country glv3-on-india hideme" data-toggle="collapse" data-target="#content-india"
            src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_India-09082022.png"></a>
        <a href="#asia"> <img class="country glv3-on-asia hideme" data-toggle="collapse" data-target="#content-asia"
            src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_Asia-09082022.png"></a>
        <img class="glv3-backmap opacityme"
          src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_Map_081123.png">
      </div>
      <!--/desktop-->



      <!--mobile-->
      <img class="country-2 glv3-on-asia hideme"
        src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_Asia-09082022.png">
      <img class="country-2 glv3-on-europe hideme"
        src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_Europe-09192022.png">
      <img class="country-2 glv3-on-india hideme"
        src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_India-09082022.png">
      <img class="country-2 glv3-on-latinamerica hideme"
        src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_LocationsMap_LatinAmerica-09082022.png">
      <img class="country-2 glv3-on-northamerica hideme"
        src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/TAG_Toronto_MapUpdate_Hover_02@2x.png">

      <img class="country-2 glv3-backmap-2"
        src="<?php echo get_template_directory_uri();?>/library/images/reboot/global-leadership/AMTAG_Map_081123.png">

      <!--/mobile-->

      <!--desktop nav-->
      <div class="glv3-map-nav">
        <ul>
          <li class="aa glv3-a active" data-toggle="collapse" data-target="#content-global"> <a
              href="#global">GLOBAL</a>
          </li>
          <li class="bb glv3-b" data-toggle="collapse" data-target="#content-asia"><a href="#asia">ASIA</a></li>
          <li class="cc glv3-c" data-toggle="collapse" data-target="#content-europe"><a href="#europe">EUROPE & MIDDLE EAST (EMEA)</a>
          </li>
          <li class="dd glv3-d" data-toggle="collapse" data-target="#content-india"><a href="#india">INDIA</a>
          </li><br>
          <li class="ee glv3-e" data-toggle="collapse" data-target="#content-lat"><a href="#latinamerica">LATIN
              AMERICA</a></li>
          <li class="ff glv3-f" data-toggle="collapse" data-target="#content-northamerica"><a href="#northamerica">U.S. &amp; CANADA</a></li>
        </ul>
      </div>
      <!--/desktop nav-->

      <!--/-->
    </div>

  </div>

  <div id="global-leaders" class="pepi-row pepi-row__mt global-leaders">
    <div class="container" style="transition: none!important;">

      <div class="row mx-flush-30">

        <?php



                $posts = get_posts( array(
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
                ) );
                if( $posts ) :?>
                        <?php
                foreach( $posts as $post ):
                // Do something.
setup_postdata();


                ?>

        <?php

                  $name = get_field('first_name').' '.get_field('last_name');

                  $title = get_field( 'title' );
                  $gl_title = get_field( 'gl_area' );
                  $cities_acf = get_field( 'city' );
                  $featured_image = get_the_post_thumbnail_url( null, 'full' );?>
        <div class="gl-card col-sm-6 col-md-4 col-lg-3 north-america">

          <div class="insight-block bg-lighter-grey">
            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

              <span role="img"
                aria-label="<?php echo get_field('first_name').' '.get_field('first_name'); ?>, <?php echo esc_attr($title);?>,<?php echo $city[0];?>">
              </span>


            </div>
            <div class="pt-3 pr-2 pb-4 pl-3 d-flex flex-column h-100">
              <h3 class="global-leaders__name"><?php echo  $name;?></h3>
              <ul class="m-0 p-0 global-leaders__list mb-3">
                <li class="global-leaders__list-item global-leaders__list-item--title"><?php echo esc_attr($title);?> &
                  <br><?php echo esc_attr($gl_title);?>
                </li>
                <li class="global-leaders__list-item global-leaders__list-item--city"><?php echo $cities_acf[0];?></li>
              </ul>
              <?php if (get_field('external_link', )):?>

              <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link');?>" target="_blank">View Bio</a>
              <?php endif;?>
            </div>

          </div>
        </div>

        <?php  endforeach;
endif;
wp_reset_postdata();
?>

        <?php



        $posts = get_posts( array(
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
      ) );
      if( $posts ) :?>
        <?php
    foreach( $posts as $post ):
  // Do something.



?>

        <?php
  $name = get_field('first_name').' '.get_field('last_name');
  $title = get_field( 'title' );
  $gl_title = get_field( 'gl_area' );    $city = get_field( 'city' );
    $featured_image = get_the_post_thumbnail_url( null, 'full' );
$region = get_field( 'region')[0];
    $filter_class = str_replace(' ', '-', strtolower($region));
    $cities_acf2 = get_field( 'city' );

      $cities = get_the_terms( get_the_ID(), 'filter_city');

?>
        <div class="gl-card col-sm-6 col-md-4 col-lg-3 <?php echo $filter_class.' team__'.$post->ID;?>">

          <div class="insight-block bg-lighter-grey">
            <div class="insight-img" style="background-image:url(<?php echo $featured_image; ?>)">

              <span role="img"
                aria-label="<?php echo get_field('first_name').' '.get_field('first_name'); ?>, <?php echo esc_attr($title);?>,<?php echo $city[0];?>">
              </span>


            </div>
            <div class="pt-3 pr-2 pb-4 pl-3 d-flex flex-column h-100">
              <h3 class="global-leaders__name"><?php echo  $name;?></h3>
              <ul class="m-0 p-0 global-leaders__list mb-3">
                <li class="global-leaders__list-item global-leaders__list-item--title"><?php echo esc_attr($title);?> &
                  <br><?php echo esc_attr($gl_title);?>
                </li>
                <li class="global-leaders__list-item global-leaders__list-item--city"><?php if($cities_acf2){$i = 1;
                    foreach ( $cities_acf2 as $city_acf2 ){echo $city_acf2;
                      //  Add comma (except after the last theme)
                      echo ($i < count($cities_acf2))? ", " : "";
                      // Increment counter
                      $i++;}}else {$i = 1; foreach ( $cities as $city ){echo $city->name;
                        //  Add comma (except after the last theme)
                        echo ($i < count($cities))? ", " : "";
                        // Increment counter
                        $i++;}}
        ?></li>
              </ul>
              <?php if ( get_field('external_link')):?>
              <a class="plain-btn mt-auto" href="<?php echo  get_field('external_link');?>" target="_blank">View Bio</a>
              <?php endif;?>
            </div>


          </div>
        </div>

        <?php  endforeach;
      endif;
      wp_reset_postdata();
      ?>



      </div>
    </div>
  </div>
</div>

<script>
  ///////////////////////////map function
  $(document).ready(function () {
    ////////////global ////////////
    $(".glv3-map-nav li").click(function () {

      $('html, body').animate({
        scrollTop: $('#global-leaders').offset().top - 280
      }, 'slow');


    });


    $(".aa").hover(function () {
      $(".glv3-on-global").removeClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");

      //        $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").removeClass("hideme");




      $(".aa").addClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");
    });

    $(".aa, .glv3-a").click(function () {
      $(".glv3-on-global").removeClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");

      var glWrap = $(".global-leaders .container");
      var card = $(".gl-card");

      function glFiltersGo() {

        glWrap.animate({
          "opacity": "0"
        }, 250).promise().then(function () {

          return card.show().promise().then(function () {
              return glWrap.animate({
                "opacity": "1.0"
              }, 250);
          });
        });


      }
      glFiltersGo();

      //        $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").removeClass("hideme");

      $(".aa").addClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");

      //+/-
      $("#panel-global .panel-toggle").toggleClass("collapsed");
      $("#panel-asia .panel-toggle").addClass("collapsed");
      $("#panel-europe .panel-toggle").addClass("collapsed");
      $("#panel-india .panel-toggle").addClass("collapsed");
      $("#panel-latinamerica .panel-toggle").addClass("collapsed");
      $("#panel-northamerica .panel-toggle").addClass("collapsed");
    });

    ////////////asia  ////////////
    $(".bb, .glv3-on-asia").hover(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").removeClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");
      $(".glv3-on-asia").toggleClass("flash");

      $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");


      $(".aa").removeClass("active");
      $(".bb").addClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");
    });

    $(".bb, .glv3-b, .glv3-on-asia").click(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").removeClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");

      $(".glv3-backmap-2").addClass("hideme");


      var glWrap = $(".global-leaders .container");
      var card = $(".gl-card");
      var cardsActive = $(".gl-card.asia");


      function glFiltersGo() {

        glWrap.animate({
          "opacity": "0"
        }, 250).promise().then(function () {

          return card.hide().promise().then(function () {
            return cardsActive.show().promise().then(function () {
              return glWrap.animate({
                "opacity": "1.0"
              }, 250);
            });
          });
        });


      }
      glFiltersGo();

      //        $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").addClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");

      //+/-
      $("#panel-global .panel-toggle").addClass("collapsed");
      $("#panel-asia .panel-toggle").toggleClass("collapsed");
      $("#panel-europe .panel-toggle").addClass("collapsed");
      $("#panel-india .panel-toggle").addClass("collapsed");
      $("#panel-latinamerica .panel-toggle").addClass("collapsed");
      $("#panel-northamerica .panel-toggle").addClass("collapsed");
    });

    ////////////europe  ////////////
    $(".cc, .glv3-on-europe").hover(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").removeClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");
      $(".glv3-on-europe").toggleClass("flash");

      $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").addClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");
    });

    $(".cc, .glv3-c, .glv3-on-europe").click(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").removeClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");



      var glWrap = $(".global-leaders .container");
      var card = $(".gl-card");
      var cardsActive = $(".gl-card.europe");


      function glFiltersGo() {

        glWrap.animate({
          "opacity": "0"
        }, 250).promise().then(function () {

          return card.hide().promise().then(function () {
            return cardsActive.show().promise().then(function () {
              return glWrap.animate({
                "opacity": "1.0"
              }, 250);
            });
          });
        });


      }
      glFiltersGo();

      //        $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").addClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");

      //+/-
      $("#panel-global .panel-toggle").addClass("collapsed");
      $("#panel-asia .panel-toggle").addClass("collapsed");
      $("#panel-europe .panel-toggle").toggleClass("collapsed");
      $("#panel-india .panel-toggle").addClass("collapsed");
      $("#panel-latinamerica .panel-toggle").addClass("collapsed");
      $("#panel-northamerica .panel-toggle").addClass("collapsed");
    });

    ////////////india  ////////////
    $(".dd, .glv3-on-india").hover(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").removeClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");
      $(".glv3-on-india").toggleClass("flash");

      $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").addClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");
    });

    $(".dd, .glv3-d, .glv3-on-india").click(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").removeClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");

      var glWrap = $(".global-leaders .container");
      var card = $(".gl-card");
      var cardsActive = $(".gl-card.india");


      function glFiltersGo() {

        glWrap.animate({
          "opacity": "0"
        }, 250).promise().then(function () {

          return card.hide().promise().then(function () {
            return cardsActive.show().promise().then(function () {
              return glWrap.animate({
                "opacity": "1.0"
              }, 250);
            });
          });
        });


      }
      glFiltersGo();


      //        $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").addClass("active");
      $(".ee").removeClass("active");
      $(".ff").removeClass("active");

      //+/-
      $("#panel-global .panel-toggle").addClass("collapsed");
      $("#panel-asia .panel-toggle").addClass("collapsed");
      $("#panel-europe .panel-toggle").addClass("collapsed");
      $("#panel-india .panel-toggle").toggleClass("collapsed");
      $("#panel-latinamerica .panel-toggle").addClass("collapsed");
      $("#panel-northamerica .panel-toggle").addClass("collapsed");

    });

    ////////////latin america  ////////////
    $(".ee, .glv3-on-latinamerica").hover(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").removeClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");
      $(".glv3-on-latinamerica").toggleClass("flash");

      $(".glv3-backmap").toggleClass("opacityme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").addClass("active");
      $(".ff").removeClass("active");
    });

    $(".ee, .glv3-e, .glv3-on-latinamerica").click(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").removeClass("hideme");
      $(".glv3-on-northamerica").addClass("hideme");
      $(".glv3-backmap-2").addClass("hideme");

      var glWrap = $(".global-leaders .container");
      var card = $(".gl-card");
      var cardsActive = $(".gl-card.latin-america");


      function glFiltersGo() {

        glWrap.animate({
          "opacity": "0"
        }, 250).promise().then(function () {

          return card.hide().promise().then(function () {
            return cardsActive.show().promise().then(function () {
              return glWrap.animate({
                "opacity": "1.0"
              }, 250);
            });
          });
        });


      }
      glFiltersGo();


      //        $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").addClass("active");
      $(".ff").removeClass("active");

      //+/-
      $("#panel-global .panel-toggle").addClass("collapsed");
      $("#panel-asia .panel-toggle").addClass("collapsed");
      $("#panel-europe .panel-toggle").addClass("collapsed");
      $("#panel-india .panel-toggle").addClass("collapsed");
      $("#panel-latinamerica .panel-toggle").toggleClass("collapsed");
      $("#panel-northamerica .panel-toggle").addClass("collapsed");
    });

    ////////////north america  ////////////
    $(".ff, .glv3-on-northamerica").hover(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").removeClass("hideme");
      $(".glv3-on-northamerica").toggleClass("flash");

      $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").addClass("active");
    });

    $(".ff, .glv3-f, .glv3-on-northamerica").click(function () {
      $(".glv3-on-global").addClass("hideme");
      $(".glv3-on-asia").addClass("hideme");
      $(".glv3-on-europe").addClass("hideme");
      $(".glv3-on-india").addClass("hideme");
      $(".glv3-on-latinamerica").addClass("hideme");
      $(".glv3-on-northamerica").removeClass("hideme");

      var glWrap = $(".global-leaders .container");
      var card = $(".gl-card");
      var cardsActive = $(".gl-card.north-america");


      function glFiltersGo() {

        glWrap.animate({
          "opacity": "0"
        }, 250).promise().then(function () {

          return card.hide().promise().then(function () {
            return cardsActive.show().promise().then(function () {
              return glWrap.animate({
                "opacity": "1.0"
              }, 250);
            });
          });
        });


      }
      glFiltersGo();


      //        $(".glv3-backmap").toggleClass("opacityme");
      $(".glv3-backmap-2").addClass("hideme");

      $(".aa").removeClass("active");
      $(".bb").removeClass("active");
      $(".cc").removeClass("active");
      $(".dd").removeClass("active");
      $(".ee").removeClass("active");
      $(".ff").addClass("active");

      //+/-
      $("#panel-global .panel-toggle").addClass("collapsed");
      $("#panel-asia .panel-toggle").addClass("collapsed");
      $("#panel-europe .panel-toggle").addClass("collapsed");
      $("#panel-india .panel-toggle").addClass("collapsed");
      $("#panel-latinamerica .panel-toggle").addClass("collapsed");
      $("#panel-northamerica .panel-toggle").toggleClass("collapsed");
    });

    ////
  });

  ///////////////////////////END map function

  ///////////////////////////accordian function
  $(document).ready(function () {
    //global
    $(".glv3-a").click(function () {
      //close other countries
      $("#content-asia").removeAttr("style", "height: auto");
      $("#content-asia").removeClass("in");
      $("#content-asia").addClass("collapsing");
      $("#content-asia").addClass("collapse");

      $("#content-europe").removeAttr("style", "height: auto");
      $("#content-europe").removeClass("in");
      $("#content-europe").addClass("collapsing");
      $("#content-asia").addClass("collapse");

      $("#content-india").removeAttr("style", "height: auto");
      $("#content-india").removeClass("in");
      $("#content-india").addClass("collapsing");
      $("#content-india").addClass("collapse");

      $("#content-lat").removeAttr("style", "height: auto");
      $("#content-lat").removeClass("in");
      $("#content-lat").addClass("collapsing");
      $("#content-lat").addClass("collapse");

      $("#content-northamerica").removeAttr("style", "height: auto");
      $("#content-northamerica").removeClass("in");
      $("#content-northamerica").addClass("collapsing");
      $("#content-northamerica").addClass("collapse");

      //+/-
      //    $("#panel-asia .panel-toggle").toggleClass("collapsed");
    });
    //asia
    $(".glv3-b, .glv3-on-asia").click(function () {
      //close other countries
      $("#content-global").removeAttr("style", "height: auto");
      $("#content-global").removeClass("in");
      $("#content-global").addClass("collapsing");
      $("#content-global").addClass("collapse");

      $("#content-europe").removeAttr("style", "height: auto");
      $("#content-europe").removeClass("in");
      $("#content-europe").addClass("collapsing");
      $("#content-europe").addClass("collapse");

      $("#content-india").removeAttr("style", "height: auto");
      $("#content-india").removeClass("in");
      $("#content-india").addClass("collapsing");
      $("#content-india").addClass("collapse");

      $("#content-lat").removeAttr("style", "height: auto");
      $("#content-lat").removeClass("in");
      $("#content-lat").addClass("collapsing");
      $("#content-lat").addClass("collapse");

      $("#content-northamerica").removeAttr("style", "height: auto");
      $("#content-northamerica").removeClass("in");
      $("#content-northamerica").addClass("collapsing");
      $("#content-northamerica").addClass("collapse");

      //+/-
      //    $("#panel-asia .panel-toggle").toggleClass("collapsed");
    });
    //europe
    $(".glv3-c, .glv3-on-europe").click(function () {
      //close other countries
      $("#content-global").removeAttr("style", "height: auto");
      $("#content-global").removeClass("in");
      $("#content-global").addClass("collapsing");
      $("#content-global").addClass("collapse");

      $("#content-asia").removeAttr("style", "height: auto");
      $("#content-asia").removeClass("in");
      $("#content-asia").addClass("collapsing");
      $("#content-asia").addClass("collapse");

      $("#content-india").removeAttr("style", "height: auto");
      $("#content-india").removeClass("in");
      $("#content-india").addClass("collapsing");
      $("#content-india").addClass("collapse");

      $("#content-lat").removeAttr("style", "height: auto");
      $("#content-lat").removeClass("in");
      $("#content-lat").addClass("collapsing");
      $("#content-lat").addClass("collapse");

      $("#content-northamerica").removeAttr("style", "height: auto");
      $("#content-northamerica").removeClass("in");
      $("#content-northamerica").addClass("collapsing");
      $("#content-northamerica").addClass("collapse");

      //+/-
      //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
    });
    //india
    $(".glv3-d, .glv3-on-india").click(function () {
      //close other countries
      $("#content-global").removeAttr("style", "height: auto");
      $("#content-global").removeClass("in");
      $("#content-global").addClass("collapsing");
      $("#content-global").addClass("collapse");

      $("#content-asia").removeAttr("style", "height: auto");
      $("#content-asia").removeClass("in");
      $("#content-asia").addClass("collapsing");
      $("#content-asia").addClass("collapse");

      $("#content-europe").removeAttr("style", "height: auto");
      $("#content-europe").removeClass("in");
      $("#content-europe").addClass("collapsing");
      $("#content-europe").addClass("collapse");

      $("#content-lat").removeAttr("style", "height: auto");
      $("#content-lat").removeClass("in");
      $("#content-lat").addClass("collapsing");
      $("#content-lat").addClass("collapse");

      $("#content-northamerica").removeAttr("style", "height: auto");
      $("#content-northamerica").removeClass("in");
      $("#content-northamerica").addClass("collapsing");
      $("#content-northamerica").addClass("collapse");

      //+/-
      //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
    });
    //latin america
    $(".glv3-e, .glv3-on-latinamerica").click(function () {
      //close other countries
      $("#content-global").removeAttr("style", "height: auto");
      $("#content-global").removeClass("in");
      $("#content-global").addClass("collapsing");
      $("#content-global").addClass("collapse");

      $("#content-asia").removeAttr("style", "height: auto");
      $("#content-asia").removeClass("in");
      $("#content-asia").addClass("collapsing");
      $("#content-asia").addClass("collapse");

      $("#content-europe").removeAttr("style", "height: auto");
      $("#content-europe").removeClass("in");
      $("#content-europe").addClass("collapsing");
      $("#content-europe").addClass("collapse");

      $("#content-india").removeAttr("style", "height: auto");
      $("#content-india").removeClass("in");
      $("#content-india").addClass("collapsing");
      $("#content-india").addClass("collapse");

      $("#content-northamerica").removeAttr("style", "height: auto");
      $("#content-northamerica").removeClass("in");
      $("#content-northamerica").addClass("collapsing");
      $("#content-northamerica").addClass("collapse");

      //+/-
      //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
    });
    //north america
    $(".glv3-f, .glv3-on-northamerica").click(function () {
      //close other countries
      $("#content-global").removeAttr("style", "height: auto");
      $("#content-global").removeClass("in");
      $("#content-global").addClass("collapsing");
      $("#content-global").addClass("collapse");

      $("#content-asia").removeAttr("style", "height: auto");
      $("#content-asia").removeClass("in");
      $("#content-asia").addClass("collapsing");
      $("#content-asia").addClass("collapse");

      $("#content-europe").removeAttr("style", "height: auto");
      $("#content-europe").removeClass("in");
      $("#content-europe").addClass("collapsing");
      $("#content-europe").addClass("collapse");

      $("#content-india").removeAttr("style", "height: auto");
      $("#content-india").removeClass("in");
      $("#content-india").addClass("collapsing");
      $("#content-india").addClass("collapse");

      $("#content-lat").removeAttr("style", "height: auto");
      $("#content-lat").removeClass("in");
      $("#content-lat").addClass("collapsing");
      $("#content-lat").addClass("collapse");

      //+/-
      //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
    });
    ///////////////////////////END accordian function


    ///////////////////////////scroll to ID offset DESKTOP
    $('.aa, .glv3-a').click(function () {
      $('html, body').animate({
        scrollTop: $("#global").offset().top - 150
      }, 100);
    });

    $('.bb, .glv3-b, .glv3-on-asia').click(function () {
      $('html, body').animate({
        scrollTop: $("#asia").offset().top - 150
      }, 100);
    });

    $('.cc, .glv3-c, .glv3-on-europe').click(function () {
      $('html, body').animate({
        scrollTop: $("#europe").offset().top - 150
      }, 100);
    });

    $('.dd, .glv3-d, .glv3-on-india').click(function () {
      $('html, body').animate({
        scrollTop: $("#india").offset().top - 150
      }, 100);
    });

    $('.ee, .glv3-e, .glv3-on-latinamerica').click(function () {
      $('html, body').animate({
        scrollTop: $("#latinamerica").offset().top - 150
      }, 100);
    });

    $('.ff, .glv3-f, .glv3-on-northamerica').click(function () {
      $('html, body').animate({
        scrollTop: $("#northamerica").offset().top - 150
      }, 100);
    });

    ////
  });
  ///////////////////////////END scroll to ID offset DESKTOP

  ///////////////////////////scroll to ID offset MOBILE
  //$(window).resize(function() {
  $(document).ready(function () {
    const mq = window.matchMedia("(min-width: 960px)");
    if (mq.matches) {
      //DESKTOP--> look up there!

    } else {
      //MOBILE

      $('.aa, .glv3-a').click(function () {
        $('html, body').animate({
          scrollTop: $("#global").offset().top - 100
        }, 100);
      });

      $('.bb, .glv3-b, .glv3-on-asia').click(function () {
        $('html, body').animate({
          scrollTop: $("#asia").offset().top - 100
        }, 100);
      });

      $('.cc, .glv3-c, .glv3-on-europe').click(function () {
        $('html, body').animate({
          scrollTop: $("#europe").offset().top - 100
        }, 100);
      });

      $('.dd, .glv3-d, .glv3-on-india').click(function () {
        $('html, body').animate({
          scrollTop: $("#india").offset().top - 100
        }, 100);
      });

      $('.ee, .glv3-e, .glv3-on-latinamerica').click(function () {
        $('html, body').animate({
          scrollTop: $("#latinamerica").offset().top - 100
        }, 100);
      });

      $('.ff, .glv3-f, .glv3-on-northamerica').click(function () {
        $('html, body').animate({
          scrollTop: $("#northamerica").offset().top - 100
        }, 100);
      });


      ///////////
      //global
      $(".glv3-a").click(function () {
        //close other countries
        $(".glv3-backmap-2").addClass("hideme");
        $(".glv3-on-asia-2").addClass("hideme");
        $(".glv3-on-europe-2").addClass("hideme");
        $(".glv3-on-india-2").addClass("hideme");
        $(".glv3-on-latamerica-2").addClass("hideme");
        $(".glv3-on-northamerica-2").addClass("hideme");
      });
      //asia
      $(".glv3-b").click(function () {
        //close other countries
        $(".glv3-backmap-2").addClass("hideme");
        $(".glv3-on-asia-2").removeClass("hideme");
        $(".glv3-on-europe-2").addClass("hideme");
        $(".glv3-on-india-2").addClass("hideme");
        $(".glv3-on-latamerica-2").addClass("hideme");
        $(".glv3-on-northamerica-2").addClass("hideme");




      });

      //europe
      $(".glv3-c").click(function () {
        //close other countries
        $(".glv3-backmap-2").addClass("hideme");
        $(".glv3-on-asia-2").addClass("hideme");
        $(".glv3-on-europe-2").removeClass("hideme");
        $(".glv3-on-india-2").addClass("hideme");
        $(".glv3-on-latamerica-2").addClass("hideme");
        $(".glv3-on-northamerica-2").addClass("hideme");

      });
      //india
      $(".glv3-d").click(function () {
        //close other countries
        $(".glv3-backmap-2").addClass("hideme");
        $(".glv3-on-asia-2").addClass("hideme");
        $(".glv3-on-europe-2").addClass("hideme");
        $(".glv3-on-india-2").removeClass("hideme");
        $(".glv3-on-latamerica-2").addClass("hideme");
        $(".glv3-on-northamerica-2").addClass("hideme");

      });
      //latin america
      $(".glv3-e").click(function () {
        //close other countries
        $(".glv3-backmap-2").addClass("hideme");
        $(".glv3-on-asia-2").addClass("hideme");
        $(".glv3-on-europe-2").addClass("hideme");
        $(".glv3-on-india-2").addClass("hideme");
        $(".glv3-on-latamerica-2").removeClass("hideme");
        $(".glv3-on-northamerica-2").addClass("hideme");

      });
      //north america
      $(".glv3-f").click(function () {
        //close other countries
        $(".glv3-backmap-2").addClass("hideme");
        $(".glv3-on-asia-2").addClass("hideme");
        $(".glv3-on-europe-2").addClass("hideme");
        $(".glv3-on-india-2").addClass("hideme");
        $(".glv3-on-latamerica-2").addClass("hideme");
        $(".glv3-on-northamerica-2").removeClass("hideme");

      });







      //
    }
    ////
  });





  ///////////////////////////END scroll to ID offset MOBILE
  //tablet landscape

  //$(window).resize(function() {


  //https://stackoverflow.com/questions/7715124/do-something-if-screen-width-is-less-than-960-px

  //www.w3schools.com/howto/tryit.asp?filename=tryhow_js_matchmedia
</script>


<?php get_footer(); ?>