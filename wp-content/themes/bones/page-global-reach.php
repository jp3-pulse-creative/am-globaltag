<?php
/*
 Template Name: Global Reach
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
	#amtx-section-gr {
		position: relative;
		display: inline-block;
		width: 100%;
		margin: 40px auto 0px auto;
padding: 100px 100px 60px 100px;
	}
	#amtx-section-gr-2 {
		position: relative;
		display: inline-block;
		width: 100%;
		margin: 0px auto -6px auto;
	padding: 60px 0px 100px 0px;
		background-color: #4e8abe;
	}
.who-we-are-current a{border-bottom: 4px solid #00355F !important;}	
	.sub-menu li a:link, .sub-menu li a {border-bottom: 0px !important;}
.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/themes/bones/images/am-globaltag-1.jpg");
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
	#amtx-section-gr {
    padding: 40px 0px 40px 0px;

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

<div id="amtx-section-6">
	<div class="container">
		
<div class="amtx-back">
	<h1>	<center><img class="single-header-image-gr" src="<?php bloginfo('template_directory'); ?>/images/global-reach-1.png" border="0" /></center></h1>
		</div>
	
		</div>
<!--/amtx-section-3a-->
		</div>

<div id="amtx-section-gr">
<div class="container">
<h1 style="color: #002b49;">A LEADER IN THE M&A SPACE</h1>
	
	
	<div class="am-sgf-1">
		  <div class="col-md-4 sgf-center"><img class="" src="<?php bloginfo('template_directory'); ?>/images/global-reach-ico-1.png" border="0" />
		<p>A&M’s professionals span across 4 continents and 20+ countries</p>
		</div>
		
		  <div class="col-md-4 sgf-center"><img class="" src="<?php bloginfo('template_directory'); ?>/images/global-reach-ico-2.png" border="0" />
		<p>A&M delivers and maximizes value in every transaction</p>
		</div>
		
		  <div class="col-md-4 sgf-center"><img class="" src="<?php bloginfo('template_directory'); ?>/images/global-reach-ico-3.png" border="0" />
		<p>
			It’s how we hire and who we hire that delivers results delivers results
			</p>
		</div>
		
		</div>
</div>
	</div>

<!--=====-->
<div id="amtx-section-gr-2">
<div class="container">
<h1 style="color: #fff;">THE MEANING BEHIND THE MANTRA</h1>
	<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.
<br><br>
 Looking for the real deal? Every day Alvarez & Marsal professionals roll up their sleeves to solve complex problems and generate value for clients. Companies around the world know our heritage of operational excellence and trust our senior leaders who work by their side. A&M’s hands-on-culture values new insights and innovative thinking. Are you ready to create change? 
		</p>
	
	<div class="gr2-countries">
	 NORTH AMERICA | EUROPE | LATIN AMERICA | MIDDLE EAST | ASIA | INDIA 
	</div>
	
	</div>
	</div>



<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>
