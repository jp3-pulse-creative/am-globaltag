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
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2019/01/global-latin.jpg");
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
	<h1>	<center>Latin America</center></h1>
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
           
           
<!--              <div class="amgt-gm-5-head-team amgt-na-50b">-->
              <div class="amgt-gm-5-head-team">
                
                  <div class="col-md-6 amgt-no-pad">
                       <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-pires.jpg" border="0" alt="" title=""/>

                      <h2><span>Fabio </span>
                          <span>Pires</span></h2>
<p>Managing Director & Latin America Practice Leader, Sâo Paulo</p>
                       
                           </div>
                       </div>
                  <!--/end-->
                  
                      <!--<div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                          <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-ara.jpg" border="0" alt="" title=""/>

                      <h2><span>Alvaro</span>
                          <span>Araujo</span></h2>
<p>Managing Director, Mexico City</p>
                               </div>
                       </div>-->
<!--/end-->
                      <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                          <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-agu.jpg" border="0" alt="" title=""/>

                      <h2><span>Rafael</span>
                          <span>Aguirre</span></h2>
<p>Managing Director, Mexico City</p>
                               </div>
                       </div>
<!--/end-->
                     <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                          <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-mota-cardoso.jpg" border="0" alt="" title=""/>

                      <h2><span>Paolo</span>
                          <span>Mota</span></h2>
<p>Managing Director, <br>
Sâo Paulo</p>
                               </div>
                       </div>
<!--/end-->
                  
                    <div class="col-md-6 amgt-no-pad">
                           <div class="amgt-gm-5-ht-wrapper">
                          <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/filler.png" border="0" alt="" title=""/>

<!--
                      <h2><span>Paolo</span>
                          <span>Mota</span></h2>
<p>Managing Director, Sâo Paulo</p>
-->
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
                   <img class="amgt-map-img5" src="<?php bloginfo('template_url'); ?>/images/map-latin.png" border="0" alt="" title=""/>
                     </div>
           </div>    
           
           </div>
    </div>
<!--/-->

<div id="amgt-gta-2">
      <div class="container">
    <h4>OUR PRACTICE</h4>
    
    <p>A&M Latin America Transaction Advisory Group offers seamless transaction advisory to both local and inbound cross-border clients through both the Hispanic and Lusophone countries of the region. We offer the full spectrum of transaction services aimed at providing hands-on and flawless quality support throughout the M&A process, in what can be a challenging regional deal environment. 
<br><br>
We have senior-led teams that are fluent in English in São Paulo and Mexico City that have extensive experience in multiple sectors and throughout the region and the globe. Our team services private equity, sovereign wealth funds, and multi-national corporations to create value throughout the investment lifecycle.</p>
          
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
                    <h5>Two Offices Servicing Latin American Region
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
              
                <a href="<?php echo get_site_url(); ?>/who-we-are/">
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
                 <div class="col-md-7 amgt-b11">
           
              </div>
            <div class="col-md-5">
                    <div id="amgt-outer-6">
               <div class="amgt-gta-3-content">
                   
     <p>OUR SERVICES</p>
                 <ul>
<li>Financial and Accounting Due Diligence</li>
<li>Tax and Labor Due Diligence</li>
<li>Tax Structuring and Consulting</li>
<li>Sell-side Due Diligence</li>
<li>M&A Advisory Services</li>
<li>Pre and Post-transaction Accounting Advisory and Support</li>
<li>Valuation Services (Including Business Modelling and Purchase Price Allocation)</li>
<li>Post-merger Integration</li>
<li>Anti-bribery and Anti-corruption Due Diligence</li>
<li>IT Due Diligence</li>
<li>Operational Due Diligence</li>
</ul>
                </div>
               </div>
                 </div>
          
          
          </div>
          
<!--==========-->
             <div class="amgt-gta-3-block amgt-blue2">
        
          
            <div class="col-md-5">
                <div id="amgt-outer-7">
                   <div class="amgt-gta-3-content uppermx-2">
                 <p>OUR DIFFERENTIATORS</p>
                 <ul>
<li>Seamless Integrated Approach to Due Diligence and Transaction Advisory Across All Work-streams</li>
<li>International Team with Local Approach</li>
<li>Dedicated Global Network and Reach</li>
<li>Free from Audit-based Conflict</li>
<li>Client Flexibility with Approach and Fees</li>
</ul>
                 </div>
                 </div>
                 </div>
                 
                     <div class="col-md-7 amgt-b12">
              
                 </div>
                 
          </div>

          </div>
    </div>
<!--/-->

<!--
<div id="amgt-gta-6">
     <div class="container">
           <h4>Learn More About Our Latin America Practice:</h4>
    
           <div class="col-md-3 amgt-no-pad">
               <a href="<?php echo get_site_url(); ?>/global-leadership-and-locations/">
                  <div class="amgt-gm-5b-btn">
               Healthcare
               </div>
               </a>
               </div>
         
             <div class="col-md-3 amgt-no-pad">
               <a href="<?php echo get_site_url(); ?>/global-leadership-and-locations/">
                  <div class="amgt-gm-5b-btn">
            Financial Services
               </div>
               </a>
               </div>
         
           <div class="col-md-3 amgt-no-pad">
               <a href="<?php echo get_site_url(); ?>/global-leadership-and-locations/">
                  <div class="amgt-gm-5b-btn">
           Software &
Technology
               </div>
               </a>
               </div>
         
            <div class="col-md-3 amgt-no-pad">
               <a href="<?php echo get_site_url(); ?>/global-leadership-and-locations/">
                  <div class="amgt-gm-5b-btn">
            Energy
               </div>
               </a>
               </div>
         
         
         
         
 </div>
    </div>
-->






<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>
