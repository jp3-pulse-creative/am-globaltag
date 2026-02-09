<?php
/*
Template Name: Global Leadership v2
*/
?>
<?php get_header(6); ?>
<style>
  span.gl-learn {
    z-index: 99999 !important;
    position: relative;
  }

  .hamburg {
    margin-top: 60px;
  }
  .pt-60 {
    padding-top: 60px;
    float: right;
  }
  @media (max-width: 992px) {
    .pt-60 {
    float: none;
    clear: both;
  }
  }

  @media (max-width: 768px) {
    .hamburg {

      margin-top: 25px;
    }

    .pt-60 {
    padding-top: 25px;
    float: none;
    clear: both;
  }
  }
</style>
<div id="section-glv3" class="moby tabby tabby2">
  <div class="glv3-map-container">
    <div class="container">
      <h1 class="glv3-title">GLOBAL LeaDERSHIP <br>
        & LOCATIONS:</h1>
    </div>

    <!--desktop-->
    <div class="map-canvas position-relative mx-auto" style="max-width: 100px;">
      <a href="#northamerica"><img class="country glv3-on-northamerica hideme pop" data-toggle="collapse"
          data-target="#content-northamerica"
          src="<?php bloginfo('template_url'); ?>/images/AMTAG_LocationsMap_NorthAmerica-041922@2x.png" /></a>
      <a href="#latinamerica"> <img class="country glv3-on-latinamerica hideme" data-toggle="collapse"
          data-target="#content-lat"
          src="<?php bloginfo('template_url'); ?>/images/AMTAG_LocationsMap_LatinAmerica-041922@2x.png" /></a>
      <a href="#europe"><img class="country glv3-on-europe hideme" data-toggle="collapse" data-target="#content-europe"
          src="<?php bloginfo('template_url'); ?>/images/AMTAG_LocationsMap_Europe-041922@2x.png" /></a>
      <a href="#india"> <img class="country glv3-on-india hideme" data-toggle="collapse" data-target="#content-india"
          src="<?php bloginfo('template_url'); ?>/images/AMTAG_LocationsMap_India-041922@2x.png" /></a>
      <a href="#asia"> <img class="country glv3-on-asia hideme" data-toggle="collapse" data-target="#content-asia"
          src="<?php bloginfo('template_url'); ?>/images/AMTAG_LocationsMap_Asia-041922@2x.png" /></a>
      <img class="glv3-backmap opacityme"
        src="<?php bloginfo('template_url'); ?>/images/AMTAG_LocationsMap_Default-041922@2x.png" />
    </div>
    <!--/desktop-->



    <!--mobile-->
    <img class="country-2 glv3-on-asia-2 hideme" src="<?php bloginfo('template_url'); ?>/images/on-asia-2.svg" />
    <img class="country-2 glv3-on-europe-2 hideme" src="<?php bloginfo('template_url'); ?>/images/AMTAG_LocationsMap_Europe-041922.svg" />
    <img class="country-2 glv3-on-india-2 hideme" src="<?php bloginfo('template_url'); ?>/images/on-india-2.svg" />
    <img class="country-2 glv3-on-latamerica-2 hideme"
      src="<?php bloginfo('template_url'); ?>/images/on-latamerica-2.svg" />
    <img class="country-2 glv3-on-northamerica-2 hideme"
      src="<?php bloginfo('template_url'); ?>/images/on-northamerica-2.svg" />

    <img class="country-2 glv3-backmap-2" src="<?php bloginfo('template_url'); ?>/images/am-tag-map-v3-2.svg" />

    <!--/mobile-->

    <!--desktop nav-->
    <div class="glv3-map-nav">
      <ul>
        <li class="aa glv3-a active" data-toggle="collapse" data-target="#content-global"> <a href="#global">GLOBAL</a>
        </li>
        <li class="bb glv3-b" data-toggle="collapse" data-target="#content-asia"><a href="#asia">ASIA</a></li>
        <li class="cc glv3-c" data-toggle="collapse" data-target="#content-europe"><a href="#europe">EUROPE</a></li>
        <li class="dd glv3-d" data-toggle="collapse" data-target="#content-india"><a href="#india">INDIA</a></li><br>
        <li class="ee glv3-e" data-toggle="collapse" data-target="#content-lat"><a href="#latinamerica">LATIN
            AMERICA</a></li>
        <li class="ff glv3-f" data-toggle="collapse" data-target="#content-northamerica"><a href="#northamerica">NORTH
            AMERICA</a></li>
      </ul>
    </div>
    <!--/desktop nav-->

    <!--/-->
  </div>
</div>
<!--======================================-->

<div class="col-md-12 section-white" style="z-index: 999;">
  <div id="section-gl-acc" class="row">
    <section id="content-3-4" class="content-block-gl content-3-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel-group">
              <div id="global"></div>
              <!--GLOBAL===========================================-->

              <div class="panel panel-default">
                <div class="panel-heading glv3-a">
                  <h4 id="panel-global" class="panel-title"> <a class="panel-toggle" data-toggle="collapse"
                      data-parent="#global" href="#content-global"> <span
                        style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">GLOBAL</span></a>
                  </h4>
                </div>
                <!-- /.panel-heading -->

                <div id="content-global" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <div class="col-md-12">
                      <!--                    <span class="gl-region"><a href="<?php echo get_site_url(); ?>/global-leadership-and-locations">VIEW REGION OVERVIEW</a></span>-->
                      <h1 class="country-title">GLOBAL</h1>
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <h1>New York</h1>
                            <p>600 Madison Avenue<br>
                              New York, NY 10022<br>
                              <a href="https://www.google.com/maps/place/600+Madison+Ave,+New+York,+NY+10022/@40.7629888,-73.9745624,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258faa3107707:0x609ba57cb411f95e!8m2!3d40.7629848!4d-73.9723737"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                          <!--/-->
                          <div class="col-md-6"> </div>
                        </div>
                        <!--/-->
                        <!--ROW 2-->

                        <div class="row">

                        </div>
                        <!--/-->

                        <!--/-->

                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->
                      <div class="col-md-6 gl-profile clearfix">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/gl-aversano.jpg" border="0" /> </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director and Global Practice Leader:</p>
                          <h1>Paul Aversano</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/paul-aversano"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->




                    </div>
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.content -->
              </div>
              <!--===========================================-->

              <div id="asia"></div>
              <!--ASIA===========================================-->
              <div class="panel panel-default">
                <div class="panel-heading glv3-b">
                  <h4 id="panel-asia" class="panel-title"><a class="panel-toggle collapsed" data-toggle="collapse"
                      data-parent="#asia" href="#content-asia"> <span
                        style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">ASIA</span></a>
                  </h4>
                </div>
                <!-- /.panel-heading -->
                <div id="content-asia" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="col-md-12"> <span class="gl-region"><a
                          href="<?php echo get_site_url(); ?>/global-markets-asia/">VIEW REGION OVERVIEW</a></span>
                      <h1 class="country-title">CHINA</h1>
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <h1>Beijing</h1>
                            <p>Unit 2401-11, 24/F<br>
                              China World Office 2<br>
                              1 Jianguomenwai Avenue<br>
                              Chaoyang District<br>
                              Beijing 100004<br>
                              <a href="https://www.google.com/maps/place/China+World+Hotel,+Beijing/@39.909937,116.457038,17z/data=!3m1!4b1!4m5!3m4!1s0x35f1fbddb4536389:0xc0639a3a92a9939d!8m2!3d39.909937!4d116.459232"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                          <!--/-->
                          <div class="col-md-6">
                            <h1>Hong Kong</h1>
                            <p>Rooms 405-7, 4/F<br>
                              St George’s Building<br>
                              2 Ice House Street<br>
                              Central Hong Kong<br>
                              <a href="https://www.google.com/maps/place/St.+George's+Building,+2+Ice+House+St,+Central,+Hong+Kong/@22.2820531,114.1567773,17z/data=!3m1!4b1!4m5!3m4!1s0x340400647d355aff:0xf40f8a8fc24ee988!8m2!3d22.2820864!4d114.1590155"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                        </div>
                        <!--/-->
                        <!--ROW 2-->

                        <div class="row">
                          <div class="col-md-6">
                            <h1>Shanghai</h1>
                            <p>Unit 1704, Level 17<br>
                              Five Corporate Ave<br>
                              150 Hubin Road<br>
                              Huangpu District<br>
                              Shanghai 200021<br>
                              <a href="https://www.google.com/maps/place/One+Corporate+Avenue/@31.2207902,121.4738442,17z/data=!3m1!4b1!4m5!3m4!1s0x35b27071db6f7945:0xdbd66d2b311d5c4c!8m2!3d31.2207902!4d121.4760382"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                          <!--/-->
                          <div class="col-md-6">
                            <h1>Singapore</h1>
                            <p> Unit 74, 39/F Marina Bay Financial Centre, Tower 2<br>
                              10 Marina Boulevard<br>
                              Singapore 018983<br>
                              <a href="https://www.google.com/maps/place/Servcorp/@1.2794239,103.8519933,17z/data=!3m1!4b1!4m5!3m4!1s0x31da191028b94791:0xb8a77e5eef01e3f1!8m2!3d1.2794239!4d103.854182"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                        </div>
                        <!--/-->

                        <!--/-->

                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->
                      <div class="col-md-6 gl-profile">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/gl-asia-profile.jpg" border="0" />
                        </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director and Asia Practice Leader:</p>
                          <h1>Xuong Liu</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/xuong-liu"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.content -->
              </div>
              <!--===========================================-->

              <div id="europe"></div>
              <div class="panel panel-default">
                <div class="panel-heading glv3-c">
                  <h4 id="panel-europe" class="panel-title"><a class="panel-toggle collapsed" data-toggle="collapse"
                      data-parent="#europe" href="#content-europe"> <span
                        style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">EUROPE</span></a>
                  </h4>
                </div>
                <!-- /.panel-heading -->
                <div id="content-europe" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="col-md-12"> <span class="gl-region"><a
                          href="<?php echo get_site_url(); ?>/global-leadership-europe/">VIEW REGION OVERVIEW</a></span>
                      <h1 class="country-title">FRANCE</h1>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <h1>Paris</h1>
                            <p> 24 Rue Royale<br>
                              75008 Paris, France<br>
                              <a href="https://www.google.com/maps/place/24+Rue+Royale,+75008+Paris,+France/@48.8688587,2.3217122,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e32dc3b435f:0x68ecb26ccce01933!8m2!3d48.8688552!4d2.3239062"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                          <!--/-->
                          <div class="col-md-6"> </div>
                        </div>
                        <!--/-->
                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <div class="col-md-6 gl-profile">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/gl-france-th.jpg" border="0" /> </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director:</p>
                          <h1>Jonathan Gibbons</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/jonathan-gibbons"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                    <div class="gl-divider"></div>
                    <div class="col-md-12">
                      <h1 class="country-title">GERMANY</h1>
                    </div>
                    <div class="col-12 clearfix">

                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6">
                            <h1>Frankfurt</h1>
                            <p> Neue Mainzer Strasse 28<br>
                              Frankfurt am Main, 60311<br>
                              <a href="https://www.google.com/maps/place/Neue+Mainzer+Str.+28,+60311+Frankfurt+am+Main,+Germany/@50.11038,8.671856,17z/data=!3m1!4b1!4m5!3m4!1s0x47bd0eabd8aac919:0x22724db4a8deb2ce!8m2!3d50.11038!4d8.67405"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                          <!--/-->
                          <div class="col-md-6">
                            <h1>Münich</h1>
                            <p> Thierschplatz 6<br>
                              München, 80538<br>
                              <a href="https://www.google.com/maps/place/Thierschpl.+6,+80538+M%C3%BCnchen,+Germany/@48.1393657,11.5871761,17z/data=!3m1!4b1!4m5!3m4!1s0x479e7585f443fa43:0xb3c9cddc0210b2b6!8m2!3d48.1393657!4d11.5893701"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>

                        </div>
                        <!--/-->
                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->
                      <div class="col-lg-6 gl-profile">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/gl-eurpoe-profile.jpg" border="0" />
                        </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director and Co-Country Leader:</p>
                          <h1>Jürgen Zapf</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/jurgen-zapf"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                    <div class="col-12 hamburg clearfix">
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">

                          <div class="col-md-6">
                            <h1>HAMBURG</h1>
                            <p> Ballindamm 27 Hamburg<br>
                              Germany, 20095<br>
                              <a href="https://goo.gl/maps/mdjfdSuZTbJ3U4KE9" target="_blank"><span class="gl-map"><span
                                    class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                        </div>
                        <!--/-->
                      </div>
                      <!--END row 1 cities (2 inner rows)-->



                    </div>
                    <!--/col-md-12-->

                    <!--=============================================================================-->
                    <div class="gl-divider"></div>
                    <div class="col-md-12">
                      <h1 class="country-title"> NETHERLANDS</h1>
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <h1>Amsterdam</h1>
                            <p> WTC H- Tower, 14th Floor<br>
                              Zuidplein 118<br>
                              Amsterdam, 1077 XV <br>
                              <a href="https://www.google.com/maps/place/World+Trade+Center+Amsterdam/@52.3402597,4.8717784,17z/data=!3m1!4b1!4m5!3m4!1s0x47c60a0484d397f5:0xd3f97f7271210d53!8m2!3d52.3402597!4d4.8739724"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                        </div>
                        <!--/-->
                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->
                      <div class="col-md-6 gl-profile">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/gl-eurpoe-profile2.jpg" border="0" />
                        </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director and Co-Country Leader:</p>
                          <h1>Age Lindenbergh</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/age-lindenbergh"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                    <!--/col-md-12-->

                    <!--=============================================================================-->

                    <!--=============================================================================-->
                    <div class="gl-divider"></div>
                    <div class="col-md-12">
                      <h1 class="country-title">SWEDEN</h1>
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <h1>Stockholm</h1>
                            <p> Hamngatan 13, 1st Floor<br>
                              111 47 Stokholm, Sweden<br>
                              <a href="https://www.google.com/maps/place/Hamngatan+13,+111+47+Stockholm,+Sweden/@59.3328794,18.070605,17z/data=!3m1!4b1!4m5!3m4!1s0x465f9d5bf1070739:0x9ff0be912d6248c5!8m2!3d59.3328794!4d18.0727937"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                        </div>
                        <!--/-->
                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->
                      <div class="col-md-6 gl-profile">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/wolfsberg-sm.jpg" border="0" /> </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director:</p>
                          <h1>Taus Wolfsberg</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/taus-wolfsberg"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                    <!--/col-md-12-->

                    <!--=============================================================================-->

                    <!--=============================================================================-->
                    <div class="gl-divider"></div>
                    <div class="col-md-12">
                      <h1 class="country-title">SWITZERLAND</h1>
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <h1>Zürich</h1>
                            <p> Regus Zürich Stauffacher<br>
                              Badenerstrasse 47<br>
                              Zürich, 8004
                              <a href="https://www.google.com/maps/place/Regus+-+Zurich,+Stauffacher/@47.3731484,8.5283593,15z/data=!4m5!3m4!1s0x0:0xa6eb5531ab0070ac!8m2!3d47.3731484!4d8.5283593"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                        </div>
                        <!--/-->
                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->
                      <div class="col-md-6 gl-profile">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/s-peyer.jpg" border="0" /> </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director:</p>
                          <h1>Sean Peyer</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/sean-peyer"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                    <!--/col-md-12-->

                    <!--=============================================================================-->

                    <div class="gl-divider"></div>
                    <div class="col-md-12">
                      <h1 class="country-title">UNITED KINGDOM</h1>
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <h1>London</h1>
                            <p> One Finsbury Circus<br>
                              London, EC2M 7EB <br>
                              <a href="https://www.google.com/maps/place/1+Finsbury+Circus,+London+EC2M+7EB,+UK/@51.5182427,-0.0895296,17z/data=!3m1!4b1!4m5!3m4!1s0x48761cac68677595:0x2445bf18f32344b9!8m2!3d51.5182427!4d-0.0873356"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                          <!--/-->
                          <!--
<div class="col-md-6">
<h1>Hong Kong</h1>
<p>Rooms 405-7, 4/F, St George’s Building<br>
2 Ice House Street<br>
Central Hong Kong<br>

<a href="#"><span class="gl-map"><span class="fa fa-map-marker"></span>View In Map</span></a>
</p>
</div>
-->

                        </div>
                        <!--/-->
                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->
                      <div class="col-md-6 gl-profile">
                        <div class="row">
                          <div class="col-xs-6 col-md-3"> <img
                              src="<?php bloginfo('template_directory'); ?>/images/gl-eurpoe-profile3.jpg" border="0" />
                          </div>
                          <div class="col-xs-6 col-md-9">
                            <p>Managing Director and European Practice Leader:</p>
                            <h1>David Evans</h1>
                            <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/david-evans"
                                target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                          </div>
                        </div>

                        <!--
<div class="row">
<div class="col-xs-6 col-md-3">
<img src="<?php bloginfo('template_directory'); ?>/images/gl-eurpoe-profile4.jpg" border="0" />
</div>
<div class="col-xs-6 col-md-9">
<p>Managing Director:</p>
<h1>Adrian Balcombe</h1>
<span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/adrian-balcombe" target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>

</div>
</div>
-->
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                    <!--/col-md-12-->

                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.content -->
              </div>
              <!--===========================================-->

              <div id="india"></div>
              <div class="panel panel-default">
                <div class="panel-heading glv3-d">
                  <h4 id="panel-india" class="panel-title"><a class="panel-toggle collapsed" data-toggle="collapse"
                      data-parent="#india" href="#content-india"> <span
                        style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">INDIA</span></a>
                  </h4>
                </div>
                <!-- /.panel-heading -->
                <div id="content-india" class="panel-collapse collapse" style="margin-top:15px;">
                  <div class="panel-body">
                    <div class="col-md-12">
                      <!--                    <h1 class="country-title"></h1>-->
                      <!--row 1 cities (2 inner rows)-->
                      <div class="col-md-6">
                        <div class="row">
                          <!--jeff-->
                          <div class="col-md-12"> <span class="gl-region2"><a
                                href="<?php echo get_site_url(); ?>/global-leadership-india/">VIEW REGION
                                OVERVIEW</a></span>

                            <h1>Mumbai</h1>
                            <p> Units 703 & 704, <br>
                              7th Floor, Tower A<br>
                              Peninsula Corporate Park <br>
                              Ganpatrao Kadam Marg Lower Parel<br>
                              Mumbai, Maharashtra, 400013 <br>
                              <a href="https://www.google.com/maps/place/Alvarez+%26+Marsal/@18.9986451,72.8239207,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7ce8d45f6fb31:0x1082587e00184079!8m2!3d18.9986451!4d72.8261147"
                                target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                  Map</span></a> </p>
                          </div>
                          <!--/-->

                        </div>
                        <!--/-->
                        <!--ROW 2-->
                        <!--/-->

                        <!--/-->

                      </div>
                      <!--END row 1 cities (2 inner rows)-->

                      <!--row 2 profile pic & learn more-->

                      <div class="col-md-6 gl-profile">
                        <div class="col-xs-6 col-md-3"> <img
                            src="<?php bloginfo('template_directory'); ?>/images/gl-india-profile.jpg" border="0" />
                        </div>
                        <div class="col-xs-6 col-md-9">
                          <p>Managing Director and India Country Leader:</p>
                          <h1>Vikram Utamsingh</h1>
                          <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/vikram-utamsingh"
                              target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                        </div>
                      </div>
                      <!--END row 2 profile pic & learn more-->

                    </div>
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.content -->
              </div>

              <!--===========================================-->

              <div id="latinamerica"></div>
              <div class="panel panel-default">
                <div class="panel-heading glv3-e">
                  <h4 id="panel-latinamerica" class="panel-title"><a class="panel-toggle collapsed"
                      data-toggle="collapse" data-parent="#latinamerica" href="#content-lat"> <span
                        style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">LATIN
                        AMERICA</span></a></h4>
                </div>
                <!-- /.panel-heading -->
                <div id="content-lat" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="col-md-12"> <span class="gl-region"><a
                          href="<?php echo get_site_url(); ?>/global-markets-latin-america/">VIEW REGION
                          OVERVIEW</a></span>
                      <h1 class="country-title">BRASIL</h1>
                      <div class="col-md-12">

                        <!--row 1 cities (2 inner rows)-->
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6">
                              <h1>São Paulo</h1>
                              <p> Ed. Igarassu<br>
                                Rua Surubim, 577 20° andar<br>
                                São Paulo-SP-Brazil, <br>
                                São Paulo, 04571-050 <br>
                                <a href="https://www.google.com/maps/place/R.+Surubim,+577+-+Cidade+Mon%C3%A7%C3%B5es,+S%C3%A3o+Paulo+-+SP,+04571-050,+Brazil/@-23.6008728,-46.6968018,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5736cbd270eb:0x4a099f24588fef2c!8m2!3d-23.6008728!4d-46.6946078"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->

                            <h1 class="country-title">MEXICO</h1>
                            <div class="col-md-6">
                              <h1>Mexico City</h1>
                              <p> Montes Urales 505 PB<br>
                                Lomas de Chapultepec<br>
                                Mexico City, 11000 <br>
                                <a href="https://www.google.com/maps/place/Calle+Montes+Urales+505,+Lomas+-+Virreyes,+Lomas+de+Chapultepec+V+Secc,+11000+Ciudad+de+M%C3%A9xico,+CDMX,+Mexico/@19.4278926,-99.208138,17z/data=!3m1!4b1!4m5!3m4!1s0x85d201f66ea6e8cf:0x8762bc922d7cfd5a!8m2!3d19.4278926!4d-99.205944"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->

                          </div>
                          <!--/-->
                        </div>
                        <!--END row 1 cities (2 inner rows)-->

                        <!--row 2 profile pic & learn more-->
                        <div class="col-md-6 gl-profile">
                          <div class="col-xs-6 col-md-3"> <img
                              src="<?php bloginfo('template_directory'); ?>/images/gl-la-profile.jpg" border="0" />
                          </div>
                          <div class="col-xs-6 col-md-9">
                            <p>Managing Director and Latin America Practice Leader:</p>
                            <h1>Fabio Pires</h1>
                            <span class="gl-learn"><a href="https://www.alvarezandmarsal.com/our-people/fabio-pires"
                                target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                          </div>
                        </div>
                        <!--END row 2 profile pic & learn more-->

                      </div>
                      <!--/col-md-12-->

                      <!--=============================================================================-->

                    </div>
                    <!-- /.panel-body -->
                  </div>
                  <!-- /.content -->
                </div>
                <!--===========================================-->

                <div id="northamerica"></div>
                <div class="panel panel-default">
                  <div class="panel-heading glv3-f">
                    <h4 id="panel-northamerica" class="panel-title"><a class="panel-toggle collapsed"
                        data-toggle="collapse" data-parent="#northamerica" href="#content-northamerica"> <span
                          style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">NORTH
                          AMERICA</span></a></h4>
                  </div>
                  <!-- /.panel-heading -->
                  <div id="content-northamerica" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="col-md-12"> <span class="gl-region"><a
                            href="<?php echo get_site_url(); ?>/global-markets-north-america/">VIEW REGION
                            OVERVIEW</a></span>
                        <h1 class="country-title">UNITED STATES</h1>
                        <!--row 1 cities (2 inner rows)-->
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6">
                              <h1>Atlanta</h1>
                              <p> Monarch Tower<br>
                                3424 Peachtree Road NE, <br>
                                Suite 1500 <br>
                                Atlanta, Georgia, 30326 <br>
                                <a href="https://www.google.com/maps/place/Monarch+Centre/@33.8495105,-84.3696201,17z/data=!4m8!1m2!2m1!1s+Atlanta++Monarch+Tower+3424+Peachtree+Road+NE,+Suite+1500+Atlanta,+Georgia,+30326+!3m4!1s0x88f50f576e477c0b:0xc5098bb29a704424!8m2!3d33.8498075!4d-84.3639455"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->
                            <div class="col-md-6">
                              <h1>Boston</h1>
                              <p> Two International Place<br>
                                100 Oliver Street, 5th Floor<br>
                                Boston, Massachusetts, 02110 <br>
                                <a href="https://www.google.com/maps/place/One+International+Place/@42.3560176,-71.0544438,17z/data=!3m1!4b1!4m5!3m4!1s0x89e37080d3155555:0xc6e16ddc13050b6e!8m2!3d42.3560176!4d-71.0522498"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                          </div>
                          <!--/-->
                          <!--ROW 2-->

                          <div class="row">
                            <div class="col-md-6">
                              <h1>Chicago</h1>
                              <p> 540 W. Madison<br>
                                Suite 1800<br>
                                Chicago, IL 60661 <br>
                                <a href="https://www.google.com/maps/place/540+W+Madison+St+%231800,+Chicago,+IL+60661/@41.8822346,-87.6438657,17z/data=!3m1!4b1!4m5!3m4!1s0x880e2cc6e9205da1:0xcd0e9bf0c3964dd1!8m2!3d41.8822346!4d-87.6416717"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->
                            <div class="col-md-6">
                              <h1>Houston</h1>
                              <p> 700 Louisiana Street<br>
                                Suite 900<br>
                                Houston, Texas, 77002<br>
                                <a href="https://www.google.com/maps/place/700+Louisiana+St+%23900,+Houston,+TX+77002/@29.7606573,-95.3686978,17z/data=!3m1!4b1!4m5!3m4!1s0x8640bf3a0da0132d:0xa4b42e09735f606f!8m2!3d29.7606573!4d-95.3665038"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                          </div>
                          <!--/-->

                          <div class="row">
                            <div class="col-md-6">
                              <h1>Los Angeles</h1>
                              <p> 2029 Century Park East<br>
                                Suite 2060<br>
                                Los Angeles, California, 90067<br>
                                <a href="https://www.google.com/maps/place/2029+Century+Park+E+%232060,+Los+Angeles,+CA+90067/@34.0594689,-118.416138,17z/data=!3m1!4b1!4m5!3m4!1s0x80c2bbf30e5d8b43:0x1d69346106a6e064!8m2!3d34.0594689!4d-118.413944"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->
                            <div class="col-md-6">
                              <h1>Miami</h1>
                              <p> 600 Brickell Avenue<br>
                                Suite 2950<br>
                                Miami, Florida, 33131 <br>
                                <a href="https://www.google.com/maps/place/600+Brickell+Ave+%232950,+Miami,+FL+33131/@25.7675263,-80.1932068,17z/data=!3m1!4b1!4m5!3m4!1s0x88d9b6833ca875f9:0xc7f44fa5dae523ac!8m2!3d25.7675263!4d-80.1910128"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                          </div>
                          <!--/-->

                          <div class="row">
                            <div class="col-md-6">
                              <h1>Nashville</h1>
                              <p> 1600 Division Street<br>
                                Suite 520<br>
                                Nashville, Tennessee, 37203 <br>
                                <a href="https://www.google.com/maps/place/1600+Division+St+%23520,+Nashville,+TN+37203/@36.1524547,-86.7945054,17z/data=!3m1!4b1!4m5!3m4!1s0x886466927d5f385b:0xe8899cd13ede92f4!8m2!3d36.1524547!4d-86.7923114"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->
                            <div class="col-md-6">
                              <h1>New York</h1>
                              <p> 600 Madison Avenue<br>
                                New York, NY 10022<br>
                                <a href="https://www.google.com/maps/place/600+Madison+Ave,+New+York,+NY+10022/@40.7629475,-73.9746152,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258faa3107707:0x609ba57cb411f95e!8m2!3d40.7629475!4d-73.9724212"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                          </div>
                          <!--/-->

                          <div class="row">
                            <div class="col-md-6">
                              <h1>San Francisco</h1>
                              <p> 425 Market Street<br>
                                18th Floor<br>
                                San Francisco, California, 94105 <br>
                                <a href="https://www.google.com/maps/place/425+Market+St,+San+Francisco,+CA+94105/@37.7911923,-122.4003406,17z/data=!3m1!4b1!4m5!3m4!1s0x80858063ae235d45:0x7c1f91eb43df8e8a!8m2!3d37.7911923!4d-122.3981466"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->
                            <div class="col-md-6">
                              <h1>Dallas</h1>
                              <p>2100 Ross Avenue<br>
                                21st Floor<br>
                                Dallas, TX 75201 <br>
                                <a href="https://www.google.com/maps/place/2100+Ross+Ave,+Dallas,+TX+75201/@32.7875067,-96.7997582,17z/data=!3m1!4b1!4m5!3m4!1s0x864e9921557f85ed:0x84785d70b67509db!8m2!3d32.7875067!4d-96.7975695"
                                  target="_blank"><span class="gl-map"><span class="fa fa-map-marker"></span>View In
                                    Map</span></a> </p>
                            </div>
                            <!--/-->
                          </div>
                          <!--/-->

                          <!--/-->

                        </div>
                        <!--END row 1 cities (2 inner rows)-->

                        <!--row 2 profile pic & learn more-->
                        <div class="col-md-6 gl-profile">
                          <div class="col-xs-6 col-md-3"> <img
                              src="<?php bloginfo('template_directory'); ?>/images/gl-na-profile.jpg" border="0" />
                          </div>
                          <div class="col-xs-6 col-md-9">
                            <p>Managing Director and US Practice Leader:</p>
                            <h1>Anthony Caporrino</h1>
                            <span class="gl-learn"><a
                                href="https://www.alvarezandmarsal.com/our-people/anthony-caporrino"
                                target="_blank">LEARN&nbsp;&nbsp;MORE</a></span>
                          </div>
                        </div>
                        <!--END row 2 profile pic & learn more-->



                      </div>
                    </div>
                    <!-- /.panel-body -->
                  </div>
                  <!-- /.content -->
                </div>

                <!--===========================================-->

              </div>
              <!-- /.accordion -->
            </div>
            <!-- /.column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
  </div>
  <!--/section-4-->
</div>
<!--======================================-->
<?php get_footer(8); ?>