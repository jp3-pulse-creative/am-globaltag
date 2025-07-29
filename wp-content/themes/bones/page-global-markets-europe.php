<?php
/*
 Template Name: Global Markets Europe
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

<?php get_header(2); ?>
<style>
	#amtx-section-comingsoon {
		position: relative;
		display: inline-block;
		width: 100%;
		margin: 0px auto 0px auto;
		padding: 100px 100px 100px 100px;
	}
.who-we-are-current a{border-bottom: 4px solid #00355F !important;}	
	.sub-menu li a:link, .sub-menu li a {border-bottom: 0px !important;}
.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2019/01/global-europe.jpg");
	overflow: hidden;
height: 670px;
	background-position: center;
		background-attachment: scroll;
	background-size: cover !important;
}
	p {
		color: #000;
	}
	#amtx-section-4 .content-block-1.tho-lead {
    margin-bottom: 0px;
	background-position: center bottom;
		background-repeat: no-repeat;
background-size: cover;
	background-attachment: scroll;
		padding-bottom: 200px;
}
    
	
	@media only screen
and (min-width : 320px)
and (max-width : 480px) {
	.tho-top-tl {
background-position: center 114px;
	background-size: cover !important;
			height: 364px !important;
	}
	.amtx-back h1 {
		margin: 130px 0px 240px 0px;
	font-size: 35px;
	}
	#amtx-section-6f {
padding: 60px 20px 30px 20px;
	}
	#amtx-section-6 {
		height: 246px;
	}
	#amtx-section-6a {
    margin: -190px auto 0px auto !important;
}
	#amtx-section-6d {
margin: 330px 0px 0px 0px !important;
	padding: 60px 20px 30px 20px;
}
		#amtx-section-comingsoon {
		padding: 50px 20px 100px 20px;
	}
	
/*/*/
	}
    
    
   @media only screen  and (min-width : 1500px) and (max-width : 2400px) { 
    .container {
width: 1170px;
	padding:0 30px;
}
/*/*/
    }
</style>

					
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
.tho-top-tl{
	background-image: url('<?php echo $image[0]; ?>');
	overflow: hidden;
/*	background-position: center 352px;*/
}
</style>

</div>
<?php endif; ?>
<div id="amtx-single-header">
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl"> 
  
  <div class="container title2 m-50"> 
  <div class="col-md-12">
	    <div class="container">
  <div class="tho-in left-line">


  </div>
	  </div>
  </div>
  </div>
 
</section>
</div>

<div id="amtx-section-6" class="amgt-gta-height">
	<div class="container">
		
<div class="amtx-back">
	<h1>	<center>Europe</center></h1>
		</div>
	
		</div>
<!--/amtx-section-3a-->
		</div>

<div id="amgt-gm-5">
       <div class="container">
           
       <div class="col-md-5 amgt-no-pad">
             <div class="amgt-gm-5-head">
                    <div class="amgt-gm-5-head-title">
               <h1>OUR LOCATIONS</h1>
                 </div>
                 </div>
           
           
              <div class="amgt-gm-5-head-team">
            
                  
                    <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-evans.jpg" border="0" alt="" title=""/>
                        
                        
                         <h2><span>David</span>
                            <span> Evans</span>
                               </h2>
<p>Managing Director & European Practice Leader, London</p>
                               </div>
                       </div>
<!--/end-->
                  <div class="col-md-6 amgt-no-pad">
                       <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-lindenbergh.jpg" border="0" alt="" title=""/>
                       
                      <h2><span>Age </span>
                          <span>Lindenbergh</span>
                           </h2>
<p>Managing Director & Co-Country Leader, Benelux</p>
                       
                           </div>
                       </div>
                  <!--/end-->
      
                    <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-zapf.jpg" border="0" alt="" title=""/>
                        
                         <h2><span>Jürgen </span>
                             <span>Zapf</span>
                                 </h2>
<p>Managing Director & Co-Country Leader, Germany</p>
                               </div>
                       </div>
<!--/end-->
                    <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-willberg.jpg" border="0" alt="" title=""/>
                        
                         <h2><span>Helene </span>
                             <span>Willberg</span></h2>
<p>Managing Director & Co-Practice Leader, Stockholm</p>
                               </div>
                       </div>
<!--/end-->
                    <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-gibbons.jpg" border="0" alt="" title=""/>
                      
                         <h2><span>Jonathan </span>
                             <span>Gibbons</span></h2>
<p>Managing Director, Paris</p>
                               </div>
                       </div>
<!--/end-->
                  
                  <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/philip-mitchell.jpg" border="0" alt="" title=""/>
                      
                         <h2><span>Philip</span>
                             <span>Mitchell</span></h2>
<p>Managing Director, London</p>
                               </div>
                       </div>
<!--/end-->
                  
                  
                  
                  
<!--=========-->
 <a href="<?php echo get_site_url(); ?>/global-leadership/">
                      <div class="amgt-gm-5-btn">
                  SEE ALL GLOBAL LOCATIONS
                  </div>
                  </a>
           
                  
                  </div>
<!--/-->
           
           
           
           
           
           </div>    
           
             <div class="col-md-7 amgt-no-pad">
                 <div class="amgt-gm-5-map">
                   <img class="amgt-map-img3" src="<?php bloginfo('template_url'); ?>/images/map-europe.png" border="0" alt="" title=""/>
                     </div>
           </div>    
           
           </div>
    </div>
<!--/-->

<div id="amgt-gta-2">
      <div class="container">
    <h4>OUR PRACTICE</h4>
    
    <p>A&M Europe Transaction Advisory Group supports investors in finding the answers that enable them to get the deal done. We combine our firm’s operational, industry and functional expertise with Big Four quality transaction services expertise to assess the key drivers and focus on the root cause of critical deal issues. Our pan-European team operates seamlessly cross-border providing clients consistent and flawless quality service. We have senior led teams in United Kingdom, France, Germany, Netherlands, Sweden and Switzerland that have extensive experience in supporting transactions across Europe in multiple sectors.
<br><br>
Our integrated global teams service private equity, sovereign wealth funds, hedge funds, distress funds, multi-national corporations, investment banks and law firms to create value throughout the investment lifecycle.</p>
          
       <div class="amgt-gta-2b">
           
           <div class="col-md-4">
               <div class="amgt-gta-2b-wrapper">
             <img class="amgt-gta-2b-img" src="<?php bloginfo('template_url'); ?>/images/amgt-gta-ico-1.png" border="0" alt="" title=""/>
               <h5>Ex-Big Four CPA and Chartered Accountants</h5>
                   </div>
           </div>
           
               <div class="col-md-4">
                    <div class="amgt-gta-2b-wrapper">
             <img class="amgt-gta-2b-img" src="<?php bloginfo('template_url'); ?>/images/amgt-gta-ico-2.png" border="0" alt="" title=""/>
                    <h5>Seven Offices Serving All of Europe
 </h5>
                        </div>
           </div>
           
               <div class="col-md-4">
                    <div class="amgt-gta-2b-wrapper">
             <img class="amgt-gta-2b-img" src="<?php bloginfo('template_url'); ?>/images/amgt-gta-ico-3.png" border="0" alt="" title=""/>
                      <h5 class="amgt-gta-2b-downer">Senior Led Teams</h5>
           </div>
           </div>
           </div>
          
         <div class="amgt-gta-2c">
               <a href="<?php echo get_site_url(); ?>/team/">
                      <div class="amgt-gm-5a-btn">
              MEET OUR TEAM
                   </div></a>
              
                <a href="<?php echo get_site_url(); ?>/what-we-do/">
                      <div class="amgt-gm-5a-btn">
              MORE ON OUR GLOBAL PRACTICE
                            </div></a>
              
              </div>
          
          
          
          
          
          
    
    </div>
    </div>
<!--/-->

<div id="amgt-gta-3">
      <div class="container">
          
           <div class="amgt-gta-3-block amgt-blue1">
                 <div class="col-md-7 amgt-b7">
           
              </div>
            <div class="col-md-5">
                    <div id="amgt-outer-4">
               <div class="amgt-gta-3-content">
                   
     <p>OUR SERVICES</p>
                 <ul>
           <li>Buy-side Financial Due Diligence</li>
                     <li>Vendor Due Diligence, Vendor Assistance and Sell Side Support</li>
<li>Tax Due Diligence</li>
<li>Operational Due Diligence</li>
<li> IT Due Diligence</li>
<li>Carve-Out Services</li>
<li> Valuation Services</li>
<li>SPA and Pricing Advisory</li>
</ul>
                </div>
               </div>
                 </div>
          
          
          </div>
          
<!--==========-->
             <div class="amgt-gta-3-block amgt-blue2">
        
          
            <div class="col-md-5">
                <div id="amgt-outer-2">
                   <div class="amgt-gta-3-content">
                 <p>OUR DIFFERENTIATORS</p>
                 <ul>
<li>Dedicated Global Practice</li>
<li>Integrated Approach That Combines Transaction Advisory, Tax and Operational Performance Improvement Expertise</li>
<li>Free from Audit-based Conflict</li>
<li>Client Flexibility with Approach and Fees</li>
</ul>
                 </div>
                 </div>
                 </div>
                 
                     <div class="col-md-7 amgt-b8">
              
                 </div>
                 
          </div>

          </div>
    </div>
<!--/-->
<!--
<div id="amgt-gta-6">
     <div class="container">
           <h4>Learn More About Our Pan European Practice:</h4>
    
           <div class="col-md-3 amgt-no-pad">
           <a href="<?php echo get_site_url(); ?>/pdf/europe/AMTAG_PanEuropean_Coverage.pdf" target="_blank">
                  <div class="amgt-gm-5b-btn">
           Pan European Team
               </div>
               </a>
               </div>
         
             <div class="col-md-3 amgt-no-pad">
                <a href="<?php echo get_site_url(); ?>/global-leadership-and-locations/">
                  <div class="amgt-gm-5b-btn">
           Private Equity
               </div>
               </a>
               </div>
         
           <div class="col-md-3 amgt-no-pad">
               <a href="<?php echo get_site_url(); ?>/global-leadership-and-locations/">
                  <div class="amgt-gm-5b-btn">
         Corporate
               </div>
               </a>
               </div>
         
            <div class="col-md-3 amgt-no-pad">
             <a href="<?php echo get_site_url(); ?>/global-leadership-and-locations/">
                  <div class="amgt-gm-5b-btn">
           Pricing Advisory Services
               </div>
               </a>
               </div>
 </div>
    </div>
  -->







<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>
