<?php
/*
 Template Name: Team Results
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
.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-team.jpg");
	overflow: hidden;
height: 670px;
	background-position: center;
		background-attachment: scroll;
}
	.tho-in p {
		text-align: left !important;
		font-family: 'Helvetica Neue LT W01_41488878' !important;
		font-style: normal !important;
		font-size: 20px;
line-height: 24px;
		letter-spacing: 0px !important;
	width: 40%;
	}
	.tho-top .title2 h3, .tho-top-tl .title2 h3 {
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif !important;
	}
	.tho-in {
    margin: 80px 0px 0px 0px;
}
	@media only screen
and (min-width : 320px)
and (max-width : 480px) {
.tho-in p {
width: 100%;
}
	.tho-top-tl {
		background-position: -985px 152px;
	}
	#amtx-section-1 {
		background-position: -858px top;
	}
/*/*/
}
</style>
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl tl-archive"> 
  
  <div class="container title2 m-50"> 
  <div class="col-md-12">
	  <div id="amtx-section-ateamhead">
	    <div class="container">
  <div class="tho-in">
	  <h4>WHO WE ARE</h4>
    <h3>MEET OUR TEAM</h3>
	  <p>Global Transaction Advisory Group has over 350 transaction advisory professionals in 23 offices globally. Our professionals are former Big Four CPA/Chartered accountants. We have senior teams throughout US, LatAm (Brazil and Mexico), Europe (UK, Germany, Netherlands, Nordics, France), India (Mumbai) and Asia (HK, Shanghai, Beijing, Singapore)</p>

  </div>
	  </div>
	  </div>
  </div>
  </div>
  </div>  
</section>
<!--/-->

<div id="amtx-section-ateam">
<div class="container">
<div id="amtx-section-1">
	<div class="col-md-8">
	<p>“Anywhere around the world, A&M is M&A. Our Alvarez & Marsal Global Transaction Advisory Group is constantly at the forefront of cross-border deal making delivering maximum value to our clients and partners across the investment lifecycle.”</p>
		
		<p class="team-name">Paul Aversano</p>
		<p class="team-title">Global Practice Leader & Managing Director </p>
		<a href="https://www.alvarezandmarsal.com/our-people/paul-aversano" target="_blank" class="team-name-btn"><img src="<?php bloginfo('template_url'); ?>/images/btn-back2.jpg" class="amtx-liner" border="0" alt="" title=""/>Meet <strong>Paul Aversano</strong></a>
		
		
	</div>
	<div class="col-md-4"></div>
	
<!--/-->
</div>
<!--=====================================-->



<div id="amtx-section-2">
	<div class="title">
	<h4>MEET OUR TEAM </h4>
	<div class="divider"></div>
	</div>
	
	<center>
		<?php echo do_shortcode('[searchandfilter slug="team"]'); ?>
		
		<?php echo do_shortcode('[searchandfilter id="1076"]'); ?>
		<?php echo do_shortcode('[searchandfilter id="1076" show="results"]'); ?>
		

		

		</center>
	

	<!--/-->
	</div>


<!--/container-->
</div>
</div>

<?php get_footer(8); ?>