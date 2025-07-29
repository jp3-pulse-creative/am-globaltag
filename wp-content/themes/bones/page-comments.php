<?php /* Template Name: RSVP  */ get_header(); ?>
<!---->
<?php
if (!post_password_required()) {
?>
  <style>
    body {
      font-family: 'Avenir LT W01_35 Light';
    }

    #sliderTop {
      display: none !important;
    }

    .img-cover {
      -webkit-transition: all 0.6s ease;
      transition: all 0.6s ease;
      z-index: 4;
      width: 409px;
      height: 233px;
    }
  </style>


  <div id="mpu-top-navi2">
    <ul class="mpu-sub small-sub">
      <li> <a href="#section-15" rel='m_PageScroll2id'>Event Security</a></li>
      <li> <a href="#section-17" rel='m_PageScroll2id'>Special Operations</a></li>
      <li> <a href="#section-19" rel='m_PageScroll2id'>Live Event Broadcasting</a></li>
      <li> <a href="#section-21" rel='m_PageScroll2id'> Emergency Management</a></li>
      <li> <a href="#section-23" rel='m_PageScroll2id'> Unmanned Sysytems</a></li>
    </ul>
  </div>

  <!--==============================-->
  <div class="wrap-content mpu5-app">
    <div class="gray-mpu">
      <div class="container">
        <div class="pageTitleRight-mpu">
          <?php the_title() ?>
        </div>
        <?php get_template_part('/mpu5-sub.php'); ?>
      </div>
      <!--/container-->

      <div class="container">
        <!--==============================-->
        <div id="section-13" class="row">
          <div class="col-md-7">
            <h2 class="mpu mpu-blue"> A NETWORK THAT GOES WHERE OTHER NETWORKS CAN’T</h2>
            <p class="mpu"> The MPU5 empowers you to succeed in any application - from Live Event Broadcasting to Special Operations - by taking your network further and faster than ever before. Leverage integrated Radio over IP (RoIP) to easily communicate between agencies. Lighten your load while increasing your capability. Stream full HD video across vast geographic areas and customize your device by installing 3rd party Android™ applications directly on the MPU5. Take advantage of all of these capabilities no matter where your network takes you. One Solution. Infinite Possibilities. </p>
          </div>
          <div class="col-md-5"> <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-28.jpg">
            <div class="15 trigger-event"></div>
          </div>
        </div>
        <!--==============================-->
        <div class="row text-align-center">
          <div class="by-5 jump-block"><a href="#section-15" rel='m_PageScroll2id'>
              <img class="btn" src="<?php bloginfo('template_directory'); ?>/images/events.jpg">
            </a>
          </div>
          <div class="by-5 jump-block"> <a href="#section-17" rel='m_PageScroll2id'>
              <img class="btn" src="<?php bloginfo('template_directory'); ?>/images/special-operation.png">
            </a>
          </div>
          <div class="by-5 jump-block"> <a href="#section-19" rel='m_PageScroll2id'>
              <img class="btn" src="<?php bloginfo('template_directory'); ?>/images/live-event.png">
            </a>
          </div>

          <div class="by-5 jump-block"> <a href="#section-21" rel='m_PageScroll2id'>
              <img class="btn" src="<?php bloginfo('template_directory'); ?>/images/emergency.png">
            </a> </div>
          <div class="by-5 jump-block"> <a href="#section-23" rel='m_PageScroll2id'>
              <img class="btn" src="<?php bloginfo('template_directory'); ?>/images/unnamed.png">
            </a> </div>

        </div>

        <!--==============================-->

        <div id="section-15" class="row target">
          <div class="col-md-4"> </div>
          <div class="col-md-8 text-align-right">
            <div class="details">
              <h2>EVENT SECURITY</h2>
              <h3> MONITOR. COORDINATE. PREVENT. RESPOND.</h3>
            </div>
          </div>
        </div>
        <!--==============================-->
        <div id="section-16" class="row">
          <div class="col-md-6 text-align-center">
            <center>
              <div class="vid-link">
                <figure>
                  <video class="rollover-vid" loop autoplay>
                    <source src="<?php bloginfo('template_url'); ?>/video/Event_Security_WEB_v05_AE.mp4" type="video/mp4" width="409" height="233">
                    <source src="<?php bloginfo('template_url'); ?>/video/Event_Security_WEB_v05_AE.ogv" type="video/ogg" width="409" height="233">
                  </video>
                </figure>
              </div>
              <div class="17 trigger-event"></div>
              <table border="0" cellspacing="0" cellpadding="4" style="width: 70%;margin: 10px auto 0 auto;">
                <tbody>
                  <tr>
                    <th align="center" valign="top" scope="row">
                      <center>
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-35.png">
                      </center>
                    </th>
                    <td align="center" valign="top">
                      <center>
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-36.png">
                      </center>
                    </td>
                    <td align="center" valign="top">
                      <center>
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-37.png">
                      </center>
                    </td>
                  </tr>
                  <tr>
                    <td width="120" align="center" valign="top" scope="row">
                      <p class="icon-txt">INTELLIGENT<br> TETHER</p>
                    </td>
                    <td width="120" align="center" valign="top">
                      <p class="icon-txt">INTEGRATED <br>GPS</p>
                    </td>
                    <td width="120" align="center" valign="top">
                      <p class="icon-txt">HD VIDEO <br>STREAMS</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </center>
          </div>
          <div class="col-md-6">
            <h2 class="mpu mpu-grey overview-title"> UNIFIED OPERATIONAL
              PICTURE</h2>
            <p class="mpu mpu-grey"> Integrated Radio over IP tethering allows teams from multiple organizations to coordinate and cooperate seamlessly. Real-time GPS-based position reporting and integrated HD video encoding and distribution provide a common operating picture. Plug-and-play integration of 3rd party sensors and systems enables real-time threat detection. </p>
            <br>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12" style="margin-top:20px;">
            <img class="img-responsive full-img" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-security.jpg">
          </div>

        </div>
        <!--==============================-->

        <div id="section-17" class="row target">
          <div class="col-md-4"> </div>
          <div class="col-md-8 text-align-right">
            <div class="details">
              <h2>SPECIAL OPERATIONS</h2>
              <h3>FIND. FIX. FINISH. EXPLOIT. ANALYZE. DISSEMINATE </h3>
            </div>
          </div>
        </div>
        <!--==============================-->

        <div id="section-18" class="row">
          <div class="col-md-6">
            <h2 class="mpu mpu-grey overview-title">EMPOWERING THE MODERN <br>
              WARFIGHTER</h2>
            <p class="mpu mpu-grey">Ideally suited for body worn applications, the MPU5 is a Smart Radio that brings Voice, Video, Situational Awareness, and powerful Computing to the dismounted user at an optimized Size, Weight, and Power (SWaP). Network your dismount users with land, air, and sea assets to provide a unified operational picture, maximizing soldier safety. Gain a tactical advantage by leveraging information superiority to dominate the operational area.</p>
          </div>
          <div class="col-md-6 text-align-center">
            <figure>
              <video class="rollover-vid" loop autoplay>
                <source src="<?php bloginfo('template_url'); ?>/video/Special_Operations_WEB_v01.mp4" type="video/mp4" width="409" height="233">
                <source src="<?php bloginfo('template_url'); ?>/video/Special_Operations_WEB_v01.ogv" type="video/ogg" width="409" height="233">
              </video>
            </figure>
            <center>
              <table border="0" cellspacing="0" cellpadding="4" style="width: 70%;margin: 10px auto 0 auto;">
                <tbody>
                  <tr>
                    <th align="center" valign="top" scope="row">
                      <center>
                        <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-41.png">
                      </center>
                    </th>
                    <td align="center" valign="top">
                      <center>
                        <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-42.png">
                      </center>
                    </td>
                    <td align="center" valign="top">
                      <center>
                        <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-43.png">
                      </center>
                    </td>
                  </tr>
                  <tr>
                    <td width="120" align="center" valign="top" scope="row">
                      <p class="icon-txt">REDUCED <br>SWaP</p>
                    </td>
                    <td width="120" align="center" valign="top">
                      <p class="icon-txt">INTEGRATED <br>ANDROID™</p><br>
                    </td>
                    <td width="120" align="center" valign="top">
                      <p class="icon-txt">WAVE RELAY<sup>®</sup> <br>MANET</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </center>
          </div>
          <div class="col-md-12">
            <center>
              <img class="img-responsive full-img" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-44.jpg">
            </center>
            <div class="19 trigger-event"></div>
          </div>
        </div>
        <!--==============================-->

        <div id="section-19" class="row target">
          <div class="col-md-12 text-align-right">
            <div class="details">
              <h2>LIVE EVENT BROADCASTING</h2>
              <h3>ENCODE. STREAM. DISTRIBUTE. GO LIVE.</h3>
            </div>
          </div>
        </div>
        <!--==============================-->

        <div id="section-20" class="row">
          <div class="col-md-6 text-align-center margin-25">
            <figure>
              <video class="rollover-vid" loop autoplay>
                <source src="<?php bloginfo('template_url'); ?>/video/Live_Event_Broadcasting_WEB_v01.mp4" type="video/mp4" width="409" height="233">
                <source src="<?php bloginfo('template_url'); ?>/video/Live_Event_Broadcasting_WEB_v01.ogv" type="video/ogg" width="409" height="233">
              </video>
            </figure>
            <table border="0" cellspacing="0" cellpadding="4" class="left-15">
              <tbody>
                <tr>
                  <th align="center" valign="top" scope="row">
                    <center>
                      <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-47.png">
                    </center>
                  </th>
                  <td align="center" valign="top">
                    <center>
                      <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-48.png">
                    </center>
                  </td>
                  <td align="center" valign="top">
                    <center>
                      <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-49.png">
                    </center>
                  </td>
                  <td align="center" valign="top">
                    <center>
                      <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-49b.png">
                    </center>
                  </td>
                </tr>
                <tr>
                  <td width="120" align="center" valign="top" scope="row">
                    <p class="icon-txt">1080P/30FPS <br>720P/60FPS</p>
                  </td>
                  <td width="120" align="center" valign="top">
                    <p class="icon-txt">VIDEO <br>ENCODING</p><br>
                  </td>
                  <td width="120" align="center" valign="top">
                    <p class="icon-txt">THE RANGE</p>
                  </td>
                  <td width="120" align="center" valign="top">
                    <p class="icon-txt">STREAMING</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <h2 class="mpu mpu-grey">STREAM VIDEO FROM ANYWHERE</h2>
            <p class="mpu mpu-grey">Broadcast the action from the most challenging locations with the MPU5’s MANET network and go live. The long range, high throughput MIMO radio system combined with industry leading multi-hop routing capability allows you to capture the action from anywhere. With HD Encoding and the Network integrated into a small wearable Smart Radio, you can achieve extreme point of view shots without interrupting the action.</p>
          </div>
          <div class="col-md-12">
            <img class="img-responsive full-img" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-50.jpg" style="">

            <div class="21 trigger-event"></div>
          </div>
        </div>
        <!--==============================-->

        <div id="section-21" class="row target">
          <div class="col-md-4"> </div>
          <div class="col-md-8 text-align-right">
            <div class="details">
              <h2>EMERGENCY MANAGEMENT</h2>
              <h3>DEPLOY. INTER-OPERATE. LOCATE. PROTECT.</h3>
            </div>
          </div>
        </div>

        <!--==============================-->
        <div id="section-22" class="row">
          <div class="col-md-6">
            <h2 class="mpu mpu-grey">RAPID NETWORK
              DEPLOYMENT</h2>
            <p class="mpu mpu-grey">In any emergency, the first systems to fail are cell towers and fixed infrastructure. Arrive prepared and instantly establish a mobile high speed network anywhere simply by turning the MPU5 on. <br>
              <br>
              Know where your teammates are located and coordinate across agencies seamlessly by leveraging integrated Radio over IP. Your communication does not have to become the second disaster.
            </p>
          </div>
          <div class="col-md-6 text-align-center margin-25">
            <figure>
              <video class="rollover-vid" loop autoplay>
                <source src="<?php bloginfo('template_url'); ?>/video/Emergency_Management_WEB_v01.mp4" type="video/mp4" width="409" height="233">
                <source src="<?php bloginfo('template_url'); ?>/video/Emergency_Management_WEB_v01.mp4.ogv" type="video/ogg" width="409" height="233">
              </video>
            </figure>
            <table border="0" cellspacing="0" cellpadding="4" class="left-30">
              <tbody>
                <tr>
                  <th align="center" valign="top" scope="row">
                    <center>
                      <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-53.png">
                    </center>
                  </th>
                  <td align="center" valign="top">
                    <center>
                      <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-54.png">
                    </center>
                  </td>
                  <td align="center" valign="top">
                    <center>
                      <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-55.png">
                    </center>
                  </td>
                </tr>
                <tr>
                  <td width="120" align="center" valign="top" scope="row">
                    <p class="icon-txt">GPS<br>INTEGRATED</p>
                  </td>
                  <td width="120" align="center" valign="top">
                    <p class="icon-txt">INTELLIGENT<br>TETHER</p><br>
                  </td>
                  <td width="120" align="center" valign="top">
                    <p class="icon-txt">PEER TO PEER<br>ROUTING</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-12"> <img class="img-responsive full-img" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-56.jpg">
            <div class="23 trigger-event"></div>
          </div>
        </div>
        <!--==============================-->
        <div id="section-23" class="row target">
          <div class="col-md-8 text-align-right">
            <div class="details">
              <h2>UNMANNED SYSTEMS </h2>
              <h3>COMMAND. CONTROL. NETWORK. SWARM. </h3>
            </div>
          </div>
          <div class="col-md-4"> </div>
        </div>
        <!--==============================-->

        <div id="section-24" class="row">
          <div class="col-md-6 text-align-center">
            <center>
              <figure>
                <video class="rollover-vid" loop autoplay>
                  <source src="<?php bloginfo('template_url'); ?>/video/Unmanned_Systems_WEB_v01.mp4" type="video/mp4" width="409" height="233">
                  <source src="<?php bloginfo('template_url'); ?>/video/Unmanned_Systems_WEB_v01.ogv" type="video/ogg" width="409" height="233">
                </video>
              </figure>
              <table border="0" cellspacing="0" cellpadding="4">
                <tbody>
                  <tr>
                    <th align="center" valign="top" scope="row">
                      <center>
                        <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-59.png">
                      </center>
                    </th>
                    <td align="center" valign="top">
                      <center>
                        <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-60.png">
                      </center>
                    </td>
                    <td align="center" valign="top">
                      <center>
                        <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-61.png">
                      </center>
                    </td>
                    <td align="center" valign="top">
                      <center>
                        <img src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-62.png">
                      </center>
                    </td>
                  </tr>
                  <tr>
                    <td width="120" align="center" valign="top" scope="row">
                      <p class="icon-txt">INTEGRATED <br>ANDROID<sup style="font-size:6px;">TM</sup></p>
                    </td>
                    <td width="120" align="center" valign="top">
                      <p class="icon-txt">REDUCED <br>SWaP</p><br>
                    </td>
                    <td width="120" align="center" valign="top">
                      <p class="icon-txt">HD VIDEO <br>STREAMS</p>
                    </td>
                    <td width="120" align="center" valign="top">
                      <p class="icon-txt">COMMAND &amp; <br> CONTROL</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </center>
          </div>
          <div class="col-md-6">
            <h2 class="mpu mpu-black overview-title">EXTEND YOUR NETWORK</h2>
            <p class="mpu mpu-black">Easily integrate the MPU5 into your unmanned systems. The MPU5’s fully featured Smart Radio platform provides HD video encoding, Ethernet, RS-232 over IP, extended range, and extremely high throughput. <br>
              <br>
              Replace many systems on your unmanned platform with one MPU5 and save Size, Weight, Power, and Cost. Your Android control application installs directly on the MPU5, enabling a single Smart Radio to fly or drive all of your unmanned systems. Your entire fleet of unmanned systems can now operate and communicate on a common network.
            </p>
          </div>
          <div class="spacer"></div>
          <div class="col-md-12">
            <img class="img-responsive full-img" src="<?php bloginfo('template_directory'); ?>/images/mpu-apps-63.jpg">
            <div class="img63-txt">
              <p>iRobot&reg; 510 PackBot&reg; utilizes the MPU5</p>
            </div>
          </div>
        </div>


        <!--==============================-->
        <div id="section-25" class="row">
          <div class="col-md-12 text-align-right">
            <div class="next">
              <h2 class="mpu-grey"> NEXT</h2>
              <p class="mpu-grey"> Explore the features of the MPU5.</p>
              <a href="http://www.persistentsystems.com/mpu5-capabilities/"><img src="<?php bloginfo('template_directory'); ?>/images/capabilities.png" class="btn"></a>
            </div>
          </div>
        </div>

        <!--end page===================================================================-->

        <div style="clear:both;"></div>
      </div>
    </div>
    <div class="gapImerse"></div>

    <!--  -->
  <?php } else {
  ?>
    <style>
      #slider {
        display: none
      }
    </style>
    <div style="max-width:480px;margin:0 auto;padding:0 10px;">
    <?php
    echo get_the_password_form();
    echo '</div>';
  } ?>
    <?php get_footer(); ?>