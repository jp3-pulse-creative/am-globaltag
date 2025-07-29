<?php
/*
 Template Name: Global Transaction Analytics
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
    .what-we-do-current	a{border-bottom: 4px solid #00355F !important;}		
	.sub-menu li a:link, .sub-menu li a {border-bottom: 0px !important;}
	#amtx-section-comingsoon {
		position: relative;
		display: inline-block;
		width: 100%;
		margin: 0px auto 0px auto;
		padding: 100px 100px 100px 100px;
	}

.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2019/01/gta-back.jpg");
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
background-position: center;
	background-size: cover !important;
			height: 364px !important;
	}
	.amtx-back h1 {
		margin: 118px 0px 240px 0px;
font-size: 35px;
line-height: 38px;
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
    
    @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {
    
    
    #amtx-section-6.amgt-gta-height {
    height: 495px;
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
	<h1>	<center> Global Transaction Analytics </center></h1>
		</div>
	
		</div>
<!--/amtx-section-3a-->
		</div>

<div id="amgt-gta-1">
       <div class="container">
           
       <div class="col-sm-6 col-md-5">
             <div class="amgt-gta-1-head">
                 
                    <div class="amgt-gta-1-head-content">
                 <h1>Steven Lee</h1>
<h2>Managing Director</h2>
                        
<p>Global Transaction Analytics</p>
<p>Practice Leader</p>
                 </div>
                 
                 
                 </div>
           </div>    
           
             <div class="col-sm-6 col-md-7">
                 <div class="amgt-gta-1-content">
                 <p>
           A&M provides business analytics services to clients to uncover maximum actionable insights to support their M&A, divestment and investment strategy. Global Transaction Analytics (GTA) is a global team which leverages market leading technology, advanced analytics capabilities, and A&M’s operational, functional and industry expertise to drive relevant business insights. Our global team provides analytics as a service to private equity and corporates across the transaction lifecycle.
           </p>
                     </div>
           </div>    
           
           </div>
    </div>
<!--/-->
<div id="amgt-gta-2">
      <div class="container">
    <h4>SERVICE CAPABILITIES</h4>
    
    <p>A&M Global Transaction Analytics practice embeds analytics throughout financial due diligence, business due diligence, and performance improvement services. Our global team consists of accountants with deep deal advisory experience, industry executives with operational expertise, and data analytics specialists to identify the key deal drivers.</p>
    
    </div>
    </div>
<!--/-->

<div id="amgt-gta-3">
      <div class="container">
          
           <div class="amgt-gta-3-block amgt-blue1">
            <div class="col-md-5">
                    <div id="amgt-outer-1">
               <div class="amgt-gta-3-content">
                   
             <p>  
                 
                 <img class="amgt-logo" src="<?php bloginfo('template_url'); ?>/images/logo-rapid.png" border="0" alt="" title=""/>
                A&M’s proprietary transaction analytics platform Rapid Analytics leverages big data and cutting-edge data analytics tools to provide faster and deeper business insights. The platform combines industry-specific operational know-how with advanced analytics algorithms to uncover the unique deal drivers.</p>
                </div>
               </div>
                 </div>
          
            <div class="col-md-7 amgt-b1">
           
              </div>
          </div>
          
<!--==========-->
             <div class="amgt-gta-3-block amgt-blue2">
            <div class="col-md-7 amgt-b2">
              
                 </div>
          
            <div class="col-md-5">
                <div id="amgt-outer-2">
                   <div class="amgt-gta-3-content">
                 <p>OUR DIFFERENTIATORS</p>
                 <ul>
               <li>Global resources with transaction expertise and data analytics experts within the same team</li>
   <li>Aligned with former C-level operators</li>
   <li>Industry subject matter experts</li>
   <li>Leverage market-leading technology and advanced analytics capabilities for relevant business insights</li>
</ul>
                 </div>
                 </div>
                 </div>
          </div>

          </div>
    </div>
<!--/-->

<div id="amgt-gta-4">
     <div class="container">
             <div class="amgt-gta-4-block">
         
         
            <div class="col-md-6 amgt-gta-4-6">
                 <div class="col-md-3"><a href="https://www.alvarezandmarsal.com/expertise/am-global-transaction-analytics/business-analytics" target="_blank"><img class="gta4-icon" src="<?php bloginfo('template_url'); ?>/images/gta4-a.png" border="0" alt="" title=""/></a></div>
                 <div class="col-md-9">
                <h4>Business Analytics</h4> 
                     
                    <p> In-depth analysis of financial and operational metrics to support better-informed investment decisions.</p>

                </div>
                
                </div>
  <!--===-->
             <div class="col-md-6 amgt-gta-4-6">
                   <div class="col-md-3"><a href="https://www.alvarezandmarsal.com/expertise/am-global-transaction-analytics/visualization-and-dashboarding" target="_blank"><img class="gta4-icon" src="<?php bloginfo('template_url'); ?>/images/gta4-b.png" border="0" alt="" title=""/></a></div>
                 <div class="col-md-9">
                <h4>  Visualization and Dashboarding</h4>
                     
                     <p>  Simple and insightful visualization with interactive dashboards for dynamic data analytics.</p>
                 </div>
                 
                </div>
           <!--===-->
         </div>

         
         
         
         
         
         
         
           <div class="amgt-gta-4-block">
         
         
            <div class="col-md-6 amgt-gta-4-6">
                 <div class="col-md-3"><a href="https://www.alvarezandmarsal.com/expertise/am-global-transaction-analytics/predictive-analytics" target="_blank"><img class="gta4-icon" src="<?php bloginfo('template_url'); ?>/images/gta4-c.png" border="0" alt="" title=""/></a></div>
                 <div class="col-md-9">
                <h4>Predictive Analytics </h4> 
                     
                    <p>Trend analysis and what-if scenarios to assess growth potential and support post acquisition strategy.</p>

                </div>
                
                </div>
  <!--===-->
             <div class="col-md-6 amgt-gta-4-6">
                   <div class="col-md-3"><a href="https://www.alvarezandmarsal.com/expertise/am-global-transaction-analytics/big-data-and-enrichment" target="_blank"><img class="gta4-icon" src="<?php bloginfo('template_url'); ?>/images/gta4-d.png" border="0" alt="" title=""/></a></div>
                 <div class="col-md-9">
                <h4>Big Data and Enrichment</h4>
                     
                     <p>Use of big data and third-party data enrichment for increased insights.</p>
                 </div>
                 
                </div>
           <!--===-->
         
         </div>
         <!--===-->
         
         
         
         
         
         
         
         
         </div>
    </div>









<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>
