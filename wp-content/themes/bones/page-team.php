<?php
/*
 Template Name: Team New
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
	#amtx-section-ateamhead {
    padding: 20px 0px 0px 0px;
}
	.tho-in p {
		text-align: left !important;
		font-family: 'Helvetica Neue LT W01_41488878' !important;
		font-style: normal !important;
		font-size: 20px;
line-height: 24px;
		letter-spacing: 0px !important;
	width: 40%;
		margin: 0px 0px 0px 0px;
	}
	.tho-top .title2 h3, .tho-top-tl .title2 h3 {
	font-family: 'Helvetica Neue LT W01_41488878' !important;
		margin: -24px 0px 0px 0px;
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
/*	background-position: -490px 153px;*/
		background-position: -144px 110px;
		top: -95px;
	}
	#amtx-section-1 {
		background-position: -858px top;
	}
	#amtx-section-ateam {
    margin: -120px 0px 0px 0px;
}
	#amtx-section-1 {
		background-image: none;
	}
	#amtx-section-1 p {
		color: #002c49;
	}
	
	#amtx-section-1 {
	padding: 20px;
			text-align: center !important;
	}
	#amtx-section-1 p, #amtx-section-1 p.team-name, #amtx-section-1 p.team-title {
		text-align: center !important;
	}
	
	.team-name-btn, .team-name-btn:hover {
		background-color: #3399cc !important;
		float: none;
		position: relative;
display: block;
	}
	
	#amtx-section-2 .team-thumbnails:hover {
		border: solid 4px #fff;
	}
	#amtx-section-2 .team-thumbnails {
		background-position: -68px top;
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
	  <p>Global Transaction Advisory Group has close to 500 transaction advisory professionals in 24 offices globally. Our professionals are former Big Four CPA/Chartered accountants. We have senior teams throughout United States, Latin America (Brazil and Mexico), Europe (United Kingdom, Germany, Netherlands, Nordics, France, Switzerland), India (Mumbai) and Asia (Hong Kong, Shanghai, Beijing, Singapore).</p>

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
		<p class="team-title">Managing Director and Global Practice Leader </p>
		<a href="https://www.alvarezandmarsal.com/our-people/paul-aversano" target="_blank" class="team-name-btn"><img src="<?php bloginfo('template_url'); ?>/images/btn-back2.jpg" class="amtx-liner" border="0" alt="" title=""/>Meet <strong>Paul Aversano</strong></a>
		
		
	</div>
	<div class="col-md-4"></div>
	
<!--/-->
</div>
<!--=====================================-->



<div id="amtx-section-2">
	<div class="title">
	<h4>MEET OUR TEAM </h4>
<!--	<div class="divider"></div>-->
	</div>

	
 <?php // check if the repeater field has rows of data
			if( have_rows('team') ):

			 	// loop through the rows of data
			    while ( have_rows('team') ) : the_row();
			    ?>
 
<a href="<?php the_sub_field('external_link'); ?>" target="_blank">
	
	
	
	
	
	<div class="col-xs-6 col-md-3 team-thumbnails" style="background-image:url('<?php the_sub_field('thumbnail'); ?>');">
		<div class="team-tag">
		<p class="team-name"><?php the_sub_field('first_name'); ?> <?php the_sub_field('last_name'); ?></p>
		<p class="team-title"><?php the_sub_field('title'); ?><br>
			<span style="color: #cdcdcd !important;"><?php the_sub_field('city'); ?></span>
			</p>
		
		</div>
	</div>
	
	
	
	
	
	</a>

    <?php
			    endwhile;

			else :
			?>
			 
			<?php
			endif;
			?>
	<!--/-->
	</div>


<!--/container-->
</div>
</div>

<?php get_footer(8); ?>