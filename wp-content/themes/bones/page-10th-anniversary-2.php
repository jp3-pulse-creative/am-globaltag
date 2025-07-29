<?php
/*
 Template Name: 10 New
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
    .events-current a {
    border-bottom: 4px solid #00355F !important;
}
</style>
<div id="home" class="home target"></div>
<section id="promo-3" class="content-block promo-3">
  <div class="container text-center title1"> </div>
  <div class="container text-center title-logo"> <img src="<?php echo get_site_url(); ?>/wp-content/themes/bones/anniversary/images/tag-logo.png" border="0" alt="" title="" /> </div>
  <div class="container text-center title2"> A&amp;M Transaction Advisory Group<br>
    Keys to Success<br>
    10th Anniversary Gala </div>
  <div class="container text-center title2 title3">May 11th, 2016<br>
    Tribeca Rooftop  |  New York </div>
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
        <p class="start">On May 11, 2016, the Transaction Advisory Group celebrated 10 years of service in the industry with a night of entertainment among fellow colleagues and friends at Tribeca Rooftop, New York. Thank you to those who made the night a memorable one.</p>
        
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
        <h1 class="white2">10TH ANNIVERSARY EVENT OVERVIEW</h1>
      </div>
  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/im7JtaXDkXo?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
  </div>

				</div>
                
				<div class="col-md-4">
                <div class="video-container">
  <div class="col-md-12 text-center">
        <h1 class="white2">REALIZATION OF OPPORTUNITY</h1>
      </div>
  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/P7Sicbtm_vo?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
  </div>

				</div>
                
				<div class="col-md-4">
					<div class="video-container">
					  <div class="col-md-12 text-center">
							<h1 class="white2">GLOBAL<br>
					 EXPANSION
					</h1>
						  </div>
					  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/kGTiU6QUzmw?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
					  </div>

				</div>
				
				<div class="col-md-4">
					<div class="video-container">
					  <div class="col-md-12 text-center">
							<h1 class="white2">Client’s<br>
					 Perspective
					</h1>
						  </div>
					  <iframe id="tablet-iframe" src="https://www.youtube.com/embed/mxgYtXKpCFI?autoplay=0&autohide=1&showinfo=0&controls=0?modestbranding=1" allowfullscreen></iframe>
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
            
            	<!-- text nav -->
            
			<div class="slider-nav-thumbnails">
						
				<div class="top-slider-nav" id="video1">
                    10TH ANNIVERSARY EVENT OVERVIEW                    
				</div>
				<div class="top-slider-nav2" id="video2"> 
                    REALIZATION OF OPPORTUNITY 
				</div>
				<div class="top-slider-nav3" id="video3"> 
                    GLOBAL EXPANSION
				</div>
				<div class="top-slider-nav4" id="video4"> 
                    CLIENT’S PERSPECTIVE
				</div>
				                
								
			</div>
            
            
		
			<!-- MAIN SLIDES -->
			<div class="slider">
				<div>
									
					<iframe id="youtube1" width="920" height="518" src="https://www.youtube.com/embed/im7JtaXDkXo?rel=0&amp;enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                    
				</div>
                
				<div>
					<iframe id="youtube2" src="https://www.youtube.com/embed/P7Sicbtm_vo?rel=0&amp;api=1" width="920" height="518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <!-- Make sure to enable the API by appending the "&api=1" parameter onto the URL. -->
				</div>
                
				<div>
                    
					<iframe id="youtube3" src="https://www.youtube.com/embed/kGTiU6QUzmw?rel=0&amp;api=1" width="920" height="518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <!-- Make sure to enable the API by appending the "&api=1" parameter onto the URL. -->
				</div>
				<div>
                    
					<iframe id="youtube4" src="https://www.youtube.com/embed/mxgYtXKpCFI?rel=0&amp;api=1" width="920" height="518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <!-- Make sure to enable the API by appending the "&api=1" parameter onto the URL. -->
				</div>
				
				
			</div>
			
		            
		</div>
      
  </div>
  
<?php } ?>
 
</section>


<section id="promo-4" class="content-block promo-4">
  <div class="container">
    <div id="photos" class="photos target"></div>
    <div class="col-md-12 text-center pix">
      <hr style="margin-top:80px;">
      <h1>PHOTOS</h1>
      <hr>
    </div>
  </div>
  <!-- <ul class="filter">
      <li class="active"> <a href="#" data-filter=".friday">Friday</a> </li>
      <li> <a href="#" data-filter=".saturday" >Saturday</a> </li>
    </ul>--> 
  <!-- /.gallery-filter -->
  <div class="row">
    <div class="isotope-gallery-container">
      <div class="col-md-4 gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="http://pulsecreative.zenfolio.com/p23821665" target="_blank">Ambiance</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pix-1.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="http://pulsecreative.zenfolio.com/p23821665" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
      
      <div class="col-md-4 gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="http://pulsecreative.zenfolio.com/p487594719" target="_blank">ENTERTAINMENT</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pix-2.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="http://pulsecreative.zenfolio.com/p487594719" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
      
      <div class="col-md-4 gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="http://pulsecreative.zenfolio.com/p317495673" target="_blank">CELEBRITY
            SPEAKERS</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pix-3.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="http://pulsecreative.zenfolio.com/p317495673" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
      
      <div class="col-md-4 gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="http://pulsecreative.zenfolio.com/p339217846" target="_blank">Guests</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pix-4.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="http://pulsecreative.zenfolio.com/p339217846" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!-- /.gallery-item-wrapper -->
      <div class="col-md-4 gallery-item-wrapper friday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="http://pulsecreative.zenfolio.com/p834459917" target="_blank">STEP & REPEAT</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pix-5.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="http://pulsecreative.zenfolio.com/p834459917" target="_blank">
            <div class="image-overlay"></div>
            </a> </div>
        </div>
      </div>
      <!--================-->
      
      <div class="col-md-4 gallery-item-wrapper saturday">
        <div class="gallery-item">
          <div class="gallery-details"><a href="http://pulsecreative.zenfolio.com/p626898545" target="_blank">SPONSORS</a></div>
          <div class="gallery-thumb"> <img src="<?php bloginfo('template_url'); ?>/images/pix-6.jpg" border="0" alt="" title="" class="img-responsive"/> <a href="http://pulsecreative.zenfolio.com/p626898545" target="_blank">
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

<!--==================-->
<section id="anni-tl-section">


<div class="container">
     <div class="col-md-12 text-center pix">
      <hr style="margin-top:80px;">
      <h1>THOUGHT LEADERSHIP</h1>
     <hr style="margin-bottom:40px;">
    </div>
    
    <div class="row">
        
        <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/china-the-liberalization-of-the-reminbi-and-investing-in-high-risk-offshore-sectors/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/1.jpg"/></div>
        </a>    

        <p>
        China: The Liberalization of the Reminbi, and Investing in High Risk Offshore Sectors
            </p>
        
                <a href="<?php echo get_site_url(); ?>/thought_leadership/china-the-liberalization-of-the-reminbi-and-investing-in-high-risk-offshore-sectors/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a>
        
        </div>
        </div>
<!--========================-->
        
              <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/disruption-and-evolution-financial-services-ma-trends-to-watch/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/2.jpg"/></div>
        </a>    

          <p>
        Disruption and Evolution: Financial Services M&A Trends to Watch
        </p>
        
           <a href="<?php echo get_site_url(); ?>/thought_leadership/disruption-and-evolution-financial-services-ma-trends-to-watch/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a>
        </div>
        </div>
<!--========================-->
        
              <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/ten-years-of-healthcare-industry-investing-dynamic-change-new-opportunities/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/3.jpg"/></div>
        </a>    

          <p>
        Ten Years of Healthcare Industry Investing: Dynamic Change, New Opportunities
</p>
        
        
          <a href="<?php echo get_site_url(); ?>/thought_leadership/ten-years-of-healthcare-industry-investing-dynamic-change-new-opportunities/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a> 
        </div>
        </div>
<!--========================-->
        
              <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/ten-years-investing-in-the-energy-sector-riding-the-wave-of-new-demands-in-a-changing-landscape/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/4.jpg"/></div>
        </a>    

          <p>
        Ten Years Investing In the Energy Sector: Riding the Wave of New Demands in a Changing Landscape
</p>
        
        
           <a href="<?php echo get_site_url(); ?>/thought_leadership/ten-years-investing-in-the-energy-sector-riding-the-wave-of-new-demands-in-a-changing-landscape/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a>
        </div>
        </div>
<!--========================-->
        
        
        
    </div>



 <div class="row">
        
        <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/sell-side-due-diligence-and-ipo-readiness/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/5.jpg"/></div>
        </a>    

        
          <p>
        Sell-Side Due Diligence and IPO Readiness
</p>
        
        
           <a href="<?php echo get_site_url(); ?>/thought_leadership/sell-side-due-diligence-and-ipo-readiness/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a>
        </div>
        </div>
<!--========================-->
        
              <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/ten-years-in-software-technology-ma/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/6.jpg"/></div>
        </a>    

        
          <p>
        Ten Years in Software & Technology M&A
        </p>
        
        
           <a href="<?php echo get_site_url(); ?>/thought_leadership/ten-years-in-software-technology-ma/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a>
        </div>
        </div>
<!--========================-->
        
              <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/10-years-of-turbulence-in-global-private-equity/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/7.png"/></div>
        </a>    

        
          <p>
        10 Years of Turbulence in Global Private Equity
</p>

        
           <a href="<?php echo get_site_url(); ?>/thought_leadership/10-years-of-turbulence-in-global-private-equity/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a>
        </div>
        </div>
<!--========================-->
        
              <!--========================-->
<div class="col-md-3">
	<div class="news-block-2 ms">
        <a href="<?php echo get_site_url(); ?>/thought_leadership/the-10-year-evolution-of-global-private-equity-investing/">
            <div class="news-block-feature"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/8.png"/></div>
        </a>    

          <p>
        The 10 Year Evolution of Global Private Equity Investing
</p>
        
           <a href="<?php echo get_site_url(); ?>/thought_leadership/the-10-year-evolution-of-global-private-equity-investing/">
        <div class="nb2-rm">
        Read More <i class="fas fa-caret-right"></i>
            </div>
                    </a>
        </div>
        </div>
<!--========================-->
        
        
        
    </div>













</div>
</section>
<!--==================-->


<!--special guest-->
<div id="special-guest" class="special-guest target"></div>
<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-12 text-center">
        <hr style="margin-top:60px;">
      <h1>SPECIAL GUESTS</h1>
      <hr>
    </div>
  </div>
</section>
<!--===========-->

<section id="content-3-7" class="content-block content-3-7">
  <div class="container"> 
    
    <!--====-->
    <div class="col-md-12 guests-details">
      <div class="col-md-3"> <img src="<?php bloginfo('template_url'); ?>/images/img-straubel.jpg" border="0" alt="" title="" class="bio-pic"/> </div>
      <div class="col-md-9">
        <h2> JB STRAUBEL</h2>
        <p>As one of the Co-Founders and the Chief Technical Officer of Tesla Motors, JB is today responsible for all software, electronics and propulsion across Tesla’s portfolio with direct operational responsibility for roughly ¼ of the company.  This includes all aspects of powertrain R&D, engineering and production. JB is also the point executive driving OEM partner relationships at Tesla with Toyota, Daimler, Panasonic and others.  From these partnerships have come vehicles such as the new electric Toyota Rav4, the Smart EV from Daimler and the A-class EV from Mercedes.  In addition, JB is managing the creation and construction of the Tesla Supercharge network of fast, free DC chargers making EV travel from coast to coast possible with no loss of convenience. Prior to Tesla, JB was the Chief Technical Officer and Co-Founder of the aerospace firm, Volacom, which designed a specialized high-altitude electric aircraft platform.  At Volacom, he invented and patented a new long-endurance electric propulsion concept that was later licensed to Boeing.  Before Volacom, JB worked at Rosen Motors and Pentadyne as a propulsion engineer developing electric vehicle drivetrains based on a Capstone micro turbine and a high-speed composite flywheel battery.</p>
      </div>
    </div>
    
    <!--====--> 
    
    <!--====-->
    <div class="col-md-12 guests-details">
      <div class="col-md-3"> <img src="<?php bloginfo('template_url'); ?>/images/img-francis.jpg" border="0" alt="" title="" class="bio-pic"/> </div>
      <div class="col-md-9">
        <h2> MELISSA FRANCIS</h2>
        <p>Melissa Francis is an anchor & host on the Fox Business Network & Fox News Channel, and a regular contributor on financial, economic, and political issues on shows such as <em> The O’Reilly Factor, The Five, Outnumbered</em>, and <em>America’s Newsroom</em>, among others. Melissa is also the author of her best-selling memoir, <em>Diary of Stage Mother’s Daughter</em>, which chronicles her life growing up as a Hollywood actress.  As an actress, she appeared in numerous motion pictures, television series, and more than a hundred television commercials, and is best known for her role as Michael Landon’s daughter, Cassandra Cooper Ingalls, on <em>Little House on the Prairie</em>.  As an author, she’s received praise from <em>The Washington Post, USA Today, Entertainment Weekly, People Magazine, The New York Post, Kirkus Reviews, and Publisher’s Weekly.</em></p>
      </div>
    </div>
    
    <!--====--> 
    
    <!--====-->
    <div class="col-md-12 guests-details">
      <div class="col-md-3"> <img src="<?php bloginfo('template_url'); ?>/images/img-harris.jpg" border="0" alt="" title="" class="bio-pic"/> </div>
      <div class="col-md-9">
        <h2> JAY HARRIS</h2>
        <p>Jay Harris’ charming personality lights up your television screen every, his poised presence demands the attention of a room, and his witty delivery is the perfect compliment to fantastic highlights put together for the millions of viewers who tune in to ESPN's Sportscenter. During his tenure at ESPN, Jay has hosted a variety of shows and special broadcasts, the new Sportscenter AM, ESPN Special Reports, Sportscenter Los Angeles, Outside The Lines, NFL Live, Baseball Tonight, Cold Pizza, First Take, Friday Night Fights, and ESPN Sports Saturday on ABC. Jay’s knowledge and longevity in the industry has earned him several honors including: a Silver World Medal from the New York Festivals, a Robert L. Vann Award from the Pittsburgh Black Media Federation, an EXCEL Award from the Hampton Roads Black Media Professionals. He was also part of two Emmy Award-winning Sportscenter shows. </p>
      </div>
    </div>
    
    <!--====--> 
    
    <!--====-->
    <div class="col-md-12 guests-details">
      <div class="col-md-3"> <img src="<?php bloginfo('template_url'); ?>/images/img-leslie.jpg" border="0" alt="" title="" class="bio-pic"/> </div>
      <div class="col-md-9">
        <h2> LISA LESLIE</h2>
        <p>Lisa Leslie – author, sports analyst, motivational speaker, entrepreneur and philanthropist – was a commentator for ESPN in 2004, covering the NCAA Women’s Tournament and has also worked for all major networks including ESPNW, Turner, and Fox Sports Net to name a few. She also had the privilege of covering the 2012 Olympics for NBC. Currently, she’s an in-studio sports analyst for ABC’s SportsZone, and a member of CBS first all -female sports talk show “We Need To Talk.” She was a member of the gold-winning U.S. Olympic teams in 1996, 2000, 2004 and 2008. She is the first team sport athlete to win four consecutive Olympic Gold Medals. In 2001, Leslie was the first WNBA player to win the regular season MVP, the All-Star Game MVP and the playoff MVP in the same season. That year, she also led the Los Angeles Sparks to their first WNBA Championship. In total, she has won three MVP trophies and has led the Los Angeles Sparks to back-to-back Championships. </p>
      </div>
    </div>
    
    <!--====--> 
    
    <!--====-->
    
    <div class="col-md-12 guests-details">
      <div class="col-md-3"> <img src="<?php bloginfo('template_url'); ?>/images/img-mullin.jpg" border="0" alt="" title="" class="bio-pic"/> </div>
      <div class="col-md-9">
        <h2> CHRIS MULLIN</h2>
        <p>A longtime NBA star and front office executive, Mullin is the 20th head coach in St. John University's storied 107-year men's basketball history. Mullin spent the last two seasons working for the Sacramento Kings organization as a senior advisor, and previously served five years as the Executive Vice President of Basketball Operations for the Golden State Warriors. One of the great collegiate and NBA players of all time, Mullin was inducted into both the Naismith Memorial Basketball Hall of Fame and National Collegiate Basketball Hall of Fame in 2011. A two-time gold medalist who ranks seventh all-time on the USA Basketball Olympic scoring list, Mullin was a five-time NBA All-Star for the Warriors (1989-93) and garnered All-NBA honors four times, including a selection to the All-NBA First Team in 1992. Mullin still holds several Warriors franchise records including games played and steals, and is fourth on the team's career scoring list. </p>
      </div>
    </div>
    
    <!--====-->
    <div class="col-md-12 guests-details2">
      <center>
        <h2 class="guests-details"> ENTERTAINMENT BY</h2>
      </center>
      <div class="col-md-6">
        <center>
          <img src="<?php bloginfo('template_url'); ?>/images/img-trace.jpg" border="0" alt="" title="" class="bio-pic2"/>
          <h2> DJ TRACE</h2>
        </center>
      </div>
      <div class="col-md-6">
        <center>
          <img src="<?php bloginfo('template_url'); ?>/images/img-suno.jpg" border="0" alt="" title="" class="bio-pic2"/>
          <h2>SARINA SUNO</h2>
        </center>
      </div>
    </div>
    
    <!--====--> 
    
  </div>
</section>
<!--===========--> 

<!--<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-3">
      <img src="<?php bloginfo('template_url'); ?>/images/img-sonnen.jpg" border="0" alt="" title="" class="bio-pic"/> 
    </div>
    
     <div class="col-md-9">
     <h2>CHAEL SONNEN</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</section>--> 
<!--===========-->


<!--sponsors-->
<div style="height: 50px; width: 100%;"></div>
<div id="sponsors" class="sponsors target"></div>
<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-12 text-center">
      <hr>
      <h1>OUR SPONSORS</h1>
      <hr>
    </div>
  </div>
</section>
<!--===========-->

<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <center>
    <div class="col-md-12 sponsors-details">
      <center>
        <div class="col-md-6"> <img src="<?php bloginfo('template_url'); ?>/images/sponsors-1.jpg" border="0" alt="" title="" class="bio-pic2"/> </div>
        <div class="col-md-6"> <img src="<?php bloginfo('template_url'); ?>/images/sponsors-2.jpg" border="0" alt="" title="" class="bio-pic2"/> </div>
      </center>
      </div>
  </div>
  </center>
</section>
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

<?php get_footer(8); ?>
