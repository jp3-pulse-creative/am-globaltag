<?php
/*
 Template Name: pes b2b
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php //include('header-4.php'); ?>
<?php get_header(4); ?>
<style>
    body, .title2, #content-3-7 h1, #content-3-7 p, .pix h1 {
        font-family: 'Helvetica Neue LT W01_65 Md' !important;
    }
    .events-current a {
    border-bottom: 4px solid #00355F !important;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
    text-align: center;
}
    .gallery-item .gallery-details {
        left: 15px;
    }
    .title-logo img {
    max-width: 100%;
}
</style>
<div id="home" class="home target"></div>
<section id="promo-3" class="content-block promo-3333">
  <div class="container text-center title1"><br>
<br>
 </div>
    
  <div class="container text-center title-logo"> <img src="<?php echo get_site_url(); ?>/wp-content/themes/bones/anniversary/images/pes-logo.png" border="0" alt="" title="" /> </div>
  <div class="container text-center title2"><br>
<br>
 </div>
<!--
  <div class="container text-center title2 title3">May 11th, 2016<br>
    Tribeca Rooftop  |  New York </div>
-->
  <div class="container text-center"> <!--<a href="http://www.am-tag.com/10thanniversary/rsvp/">
    <div class="btn-rsvp"> RSVP </div>
    </a> --></div>
</section>
<!--===========--> 

<!--start-->
<div id="start" class="start target"></div>
<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-12">
      <div class="spacer-am"></div>
      <div class="col-md-12 text-center">
        <h1>THANK YOU</h1>
      </div>
      <div class="underlined-title">
        <p class="start">
          Thank you all for coming to our A&M Private Equity Services’ Back to Business networking event. Here’s a look back at all the memorable moments through the years. Enjoy!
          </p>
        
        <!--address--> 
        
        <!--<div class="container map-address">
          <div class="col-md-12 text-center-address">
            <h3 style="margin-bottom: 8px !important;"> TRIBECA ROOFTOP</h3>
            May 11, 2016 <span style="text-transform:lowercase; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; font-style:normal !important;">l</span> 7PM – 11PM
            <h3 style="margin-top: 8px !important; text-transform:capitalize !important"> <span style="line-height: 14px;">Business Casual Attire</span> </h3>
          </div>
        </div>--> 
        <!--  <div class="tag-features container">
    <div class="blue-divider"></div>
	<div class="col-md-4">
	<img src="<?php bloginfo('template_url'); ?>/images/cigar_rolling.png" />
	<h2>Cigar<br/>Rolling</h2>
	</div>
	<div class="col-md-4">
	<img src="<?php bloginfo('template_url'); ?>/images/special_guests.png" />
	<h2>Special<br/>Guests</h2>
	</div>
	<div class="col-md-4">
	<img src="<?php bloginfo('template_url'); ?>/images/scotchwhiskey_tasting.png" />
	<h2>Scotch/Whiskey<br/>Tasting</h2>
	</div>
	<div class="blue-divider"></div>
   </div>--> 
      </div>
    </div>
  </div>
</section>
<!--===========-->

<div id="video" class="target"></div>


<section id="content-3-7" class="content-block content-3-7 video">

<?php 
$useragent=$_SERVER['HTTP_USER_AGENT'];

$tablet_browser = 0;
$mobile_browser = 0;

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
 /*
if ($tablet_browser > 0) {
   // do something for tablet devices
   print 'is tablet';
}
else if ($mobile_browser > 0) {
   // do something for mobile devices
   print 'is mobile';
}
else {
   // do something for everything else
   print 'is desktop';
}   
 */


?>

<?php if($tablet_browser>0 || $mobile_browser>0){
	
?>
<!--this will be mobile fallback once sliders are fixed============================================-->
  <center>
<div class="row video-mobile-section">
		<div class="col-md-12 video-wrapper">
        
			<div class="row">
            
				<div class="col-md-4">
                <div class="video-container">
  <div class="col-md-12 text-center">
        <h1 class="white2">September 2017</h1>
      </div>
  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/3SZaV8zvskk?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
  </div>

				</div>
                
				<div class="col-md-4">
                <div class="video-container">
  <div class="col-md-12 text-center">
        <h1 class="white2">January 2018</h1>
      </div>
  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/UqiabhuQapc?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
  </div>

				</div>
                
				<div class="col-md-4">
					<div class="video-container">
					  <div class="col-md-12 text-center">
							<h1 class="white2">  September 2018</h1>
						  </div>
					  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/Oeo4Akk67SA?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
					  </div>

				</div>
				
				<div class="col-md-4">
					<div class="video-container">
					  <div class="col-md-12 text-center">
							<h1 class="white2">   January 2019
					</h1>
						  </div>
					  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/7hX1efg24sg?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
					  </div>

				</div>
                <div class="col-md-4">
					<div class="video-container">
					  <div class="col-md-12 text-center">
							<h1 class="white2">  September 2019
					</h1>
						  </div>
					  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/eskVOoiOCSQI?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
					  </div>

				</div>
                
</div>
		</div>
	</div>
 </center>
 <!--/this will be mobile fallback once sliders are fixed============================================-->
<?php }
else{
 ?>
 <div class="video-container">
  <!--<iframe src="https://www.youtube.com/embed/im7JtaXDkXo?autoplay=0"></iframe>-->

				
		<div class="container">
             <center><h1>VIDEO GALLERY</h1></center>
            	<!-- text nav -->
            
			<div class="slider-nav-thumbnails">
						
			
				<div class="top-slider-nav2" id="video1"> 
                 September 2017
				</div>
				<div class="top-slider-nav3" id="video2"> 
                 January 2018
				</div>
				<div class="top-slider-nav4" id="video3"> 
             September 2018
				</div>
                <div class="top-slider-nav5" id="video4"> 
             January 2019
				</div>
                <div class="top-slider-nav6" id="video5"> 
              September 2019
				</div>
				                
								
			</div>
            
            
		
			<!-- MAIN SLIDES -->
			<div class="slider">
				<div>
									
					<iframe id="youtube1" width="920" height="518" src="https://www.youtube.com/embed/3SZaV8zvskk?rel=0&amp;enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                    
				</div>
                
				<div>
					<iframe id="youtube2" src="https://www.youtube.com/embed/UqiabhuQapc?rel=0&amp;api=1" width="920" height="518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <!-- Make sure to enable the API by appending the "&api=1" parameter onto the URL. -->
				</div>
                
				<div>
                    
					<iframe id="youtube3" src="https://www.youtube.com/embed/Oeo4Akk67SA?rel=0&amp;api=1" width="920" height="518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <!-- Make sure to enable the API by appending the "&api=1" parameter onto the URL. -->
				</div>
				<div>
                    
					<iframe id="youtube4" src="https://www.youtube.com/embed/7hX1efg24sg?rel=0&amp;api=1" width="920" height="518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <!-- Make sure to enable the API by appending the "&api=1" parameter onto the URL. -->
				</div>
                	<div>
                    
					<iframe id="youtube5" src="https://www.youtube.com/embed/eskVOoiOCSQ?rel=0&amp;api=1" width="920" height="518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <!-- Make sure to enable the API by appending the "&api=1" parameter onto the URL. -->
				</div>
                	
				
				
			</div>
			
		            
		</div>
      
  </div>
  
<?php } ?>
 
</section>


<section id="promo-4" class="content-block promo-44">
  <div class="container">
    <div id="photos" class="photos target"></div>
    <div class="col-md-12 text-center pix">

      <h1 style="margin-top:80px;">PHOTO GALLERY</h1>

    </div>
  </div>
  <!-- <ul class="filter">
      <li class="active"> <a href="#" data-filter=".friday">Friday</a> </li>
      <li> <a href="#" data-filter=".saturday" >Saturday</a> </li>
    </ul>--> 
  <!-- /.gallery-filter -->
  <div class="row" style="text-align:center;">
    <div class="isotope-gallery-container">
     <div class="col-md-4 col-centered gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="https://pulsecreative.zenfolio.com/p456597658/hd9aa30ca#hd9aa30ca" target="_blank">JANuary 2017</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pes-0.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="https://pulsecreative.zenfolio.com/p456597658/hd9aa30ca#hd9aa30ca" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
        
      
      <div class="col-md-4 col-centered gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="https://pulsecreative.zenfolio.com/p343855086/hd9ab343c#hd9ab789a" target="_blank">September 2017</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pes-1.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="https://pulsecreative.zenfolio.com/p343855086/hd9ab343c#hd9ab789a" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
      
      <div class="col-md-4 col-centered gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="https://pulsecreative.zenfolio.com/p442012902/hd9aba617#hd9aba5f1" target="_blank">January 2018</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pes-2.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="https://pulsecreative.zenfolio.com/p442012902/hd9aba617#hd9aba5f1" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
      
      <div class="col-md-4 col-centered gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="https://pulsecreative.zenfolio.com/p436551436/hd9abb126#hd9abb126" target="_blank">SEPTember 2018</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pes-3.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="https://pulsecreative.zenfolio.com/p436551436/hd9abb126#hd9abb126" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
      <div class="col-md-4 col-centered gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="https://pulsecreative.zenfolio.com/p217763895/hd9abfa8e#hd9abfa8e" target="_blank">January 2019</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pes-4.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="https://pulsecreative.zenfolio.com/p217763895/hd9abfa8e#hd9abfa8e" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!--================-->
      
      <div class="col-md-4 col-centered gallery-item-wrapper saturday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="https://pulsecreative.zenfolio.com/p805380758" target="_blank">September 2019</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pes-5.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="https://pulsecreative.zenfolio.com/p805380758" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      
      <!--================--> 
      
      <!-- /.gallery-item-wrapper --> 
      
    </div>
    <!-- /.isotope-gallery-container --> 
  </div>
  <!-- /.row -->
  <div class="spacer"></div>
  </div>
</section>
<!--===========--> 




<div style="height: 0px; width: 100%;"></div>

<!--<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-6">
      <img src="<?php bloginfo('template_url'); ?>/images/sponsor-1.jpg" border="0" alt="" title="" class="img-responsive"/> 
    </div>
    
     <div class="col-md-6">
         <img src="<?php bloginfo('template_url'); ?>/images/sponsor-2.jpg" border="0" alt="" title="" class="img-responsive"/> 
    </div>
  </div>
</section>--> 
<!--===========--> 

<!--map--> 
<!--<div id="map" class="map target"></div>
<div class="col-md-12 text-center google-maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.7533132263898!2d-74.01053778495562!3d40.72344674485272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259f490b789f3%3A0x445fa1c6e4aa5a38!2sTribeca+Rooftop+(Apogee+Events)!5e0!3m2!1sen!2sus!4v1457629533301" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>--> 

<!--===========--> 

<!--address--> 
<!--<div id="address" class="address target"></div>
<section id="content-3-7" class="content-block content-3-7">
  <div class="container map-address">
    <div class="col-md-6 text-right-address">
      <h3> TRIBECA ROOFTOP</h3>
      2 Desbrosses St<br>
      New York, NY 10013 <br>
      <br>
    </div>
    <div class="col-md-6 text-left-address">
      <h3>Wednesday</h3>
      May 11, 2016<br>
      7PM – 11PM <br>
      <br>
    </div>
  </div>
</section>--> 
<!--<div class="spacer-am"></div>--> 
<!--===========--> 

<!--===========-->

<?php get_footer(7); ?>
