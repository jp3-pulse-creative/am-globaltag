<?php
/*
 Template Name: What We Do 2
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: https://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(2); ?>
<style>
.what-we-do-current	a{border-bottom: 4px solid #00355F !important;}		
	.sub-menu li a:link, .sub-menu li a {border-bottom: 0px !important;}
	
.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-what-we-do.jpg");
	overflow: hidden;
height: 570px;
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
and (min-device-width : 320px)
and (max-device-width : 480px)
{
	.tho-top-tl{
	background-size: cover !important;
		height: 364px !important;
}
	.amtx-back h1 {
		margin: 130px 0px 240px 0px;
	font-size: 35px;
	}
	.mobile-hide {
		display: none !important;
	}
	
	#amtx-section-6f {
padding: 60px 20px 30px 20px;
	}
	#amtx-section-6 {
		/* height: 246px; */
	}
/**/
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
	<div class="container"><div class="row"><div class="col-xs-12">
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl"> 
 
</section>
</div></div></div>
</div>

<div id="amtx-section-6">
	<div class="container">
		
<div class="amtx-back">
	<h1>What We Do</h1>
		</div>
	
			
<!--/-->
		</div>
<!--/amtx-section-3a-->
		</div>

<div id="amtx-section-6c" class="mobile-hide">
		<div class="container">
<h2>ABOUT GLOBAL TRANSACTION ADVISORY GROUP</h2>
			</div>
</div>


<div id="amtx-section-6f">
<div class="container">
	<p>
Whether buying, selling or optimizing performance, A&M’s integrated approach delivers value throughout a transaction. Our Global Transaction Advisory Group's integrated due diligence approach goes beyond traditional quality of earnings analyses and focuses on key value drivers for sponsors and lenders. We combine A&M's deep operational, functional and industry expertise with Big-Four quality financial accounting and tax services to drive value throughout the investment lifecycle.  </p>
<p>Our Global Transaction Advisory team operates seamlessly cross-border providing clients consistent and flawless quality service.
	</p>
</div>
    <div id="buy-sell"></div>
	</div>

<div id="amtx-section-6e2" class="blue98">
	<div class="container">
		
<!--		<h2>Our services include</h2>-->


	<div id="wwa-left2" class="col-md-6 amtx-enter2 wwa-left2"> 
		  <div id="wwa-left2-over" class="wwa-left2-over">
			 <ul>
				 <li>Vendor Due Diligence </li>
<li>Capital Markets & Accounting Advisory</li>
<li>IPO Readiness</li>
 <li>Synergy Assessment</li>
<li>Cost Take out planning</li>
				 </u>
			   </div>
	<h3>
		 <img class="" src="<?php bloginfo('template_directory'); ?>/images/what-we-do-ico1.png" border="0" /><br>
		<span class="bs-sider1">Buy-side</span><br>
Due Diligence</h3>
	  </div>  

	  

	   <div id="wwa-right2" class="col-md-6 amtx-enter2 wwa-right2">
		   <div id="wwa-right2-over" class="wwa-right2-over">
			  <ul>
				  <li>Financial Due Diligence</li>
				  <li>Tax Due Diligence</li>
				  <li>Tax Structuring </li>
 <li>Commercial Due Diligence </li>
				  <li>Operational Due Diligence </li>
<li>IT Due Diligence </li>
 <li>Pre PPA Analysis </li>
<li>Pricing Advisory</li>

				  </ul>
			   </div>
		   
		   <h3 class="wwd-up">
			   <img class="" src="<?php bloginfo('template_directory'); ?>/images/what-we-do-ico2.png" border="0" /><br>
			   <span class="bs-sider2">Sell-side</span><br>
Due Diligence</h3>
	  </div> 

	
	
	</div>
	</div>
<!--=========-->

<div id="amgt-gta-3" class="amgt-gta3-down">
      <div class="container">
          
           <div class="amgt-gta-3-block amgt-blue1">
            <div class="col-md-5">
                    <div id="amgt-outer-11">
               <div class="amgt-gta-3-content">
                   
             <p>  
                 CORPORATE M&A SERVICES
                <br><br>
              A&M Corporate M&A Services combines deep financial, tax and operations services necessary for every type of M&A transaction (buy-side, sell-side, carve-out, cross-border, etc.)
                   <br><br>
                    <a href="<?php echo get_site_url(); ?>/corporate-ma-services/">
                      <div class="amgt-gm-5new-btn">
     learn MORE
                   </div></a>
                   
                   </p>
                </div>
               </div>
                 </div>
          
            <div class="col-md-7 amgt-b15">
           
              </div>
          </div>
          
<!--==========-->
             <div class="amgt-gta-3-block amgt-blue2">
            <div class="col-md-7 amgt-b16">
              
                 </div>
          
            <div class="col-md-5">
                <div id="amgt-outer-12">
                   <div class="amgt-gta-3-content">
                 <p>GLOBAL TRANSACTION ANALYTICS<br><br>
                A&M Global Transaction Analytics practice embeds analytics throughout financial due diligence, business due diligence and performance improvement services.      <br><br>
                    <a href="<?php echo get_site_url(); ?>/global-transaction-analytics/">
                      <div class="amgt-gm-5new2-btn">
     learn MORE
                   </div></a>
                     </p>
                 </div>
                 </div>
                 </div>
          </div>

          </div>
    </div>
<!--/-->


















<!--============-->
<script>
	
	$("#wwa-right2").hover(
  function () {
  $("#wwa-left2-over").addClass("over2");
	  $(".bs-sider2").addClass("bs-sider2-b");
  },
  function () {
  $("#wwa-left2-over").removeClass("over2");
	    $(".bs-sider2").removeClass("bs-sider2-b");
  }
);
		$("#wwa-left2").hover(
  function () {
  $("#wwa-right2-over").addClass("over3");
	    $(".bs-sider1").addClass("bs-sider1-b");
  },
  function () {
  $("#wwa-right2-over").removeClass("over3");
	    $(".bs-sider1").removeClass("bs-sider1-b");
  }
);
	
</script>

<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>
