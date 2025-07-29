<?php
/*
 Template Name: Who We Are 2
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
.who-we-are-current a{border-bottom: 4px solid #00355F !important;}
	.sub-menu li a:link, .sub-menu li a {border-bottom: 0px !important;}
.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-whoweare.jpg");
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
	<div class="container"><div class="row"><div class="col-xs-12">
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl">

</section>
</div></div></div>
</div>

<div id="amtx-section-6">
	<div class="container">

<div class="amtx-back">
	<h1>Who We Are</h1>
		</div>

		<div id="amtx-section-6a">
			<iframe src="https://www.youtube.com/embed/kGTiU6QUzmw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
<!--			<img src="<?php bloginfo('template_directory'); ?>/images/temp-vid.jpg" border="0" />-->
</div>

<!--/-->
		</div>
<!--/amtx-section-3a-->
		</div>

<!--
<div id="amtx-section-6c">
		<div class="container">
<h2>ABOUT GLOBAL TRANSACTION ADVISORY GROUP</h2>
			</div>
</div>
-->


<div id="amtx-section-6d">
<div class="container amtxs6d">
	<p>
A&M’s Global Transaction Advisory Group provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues. As the largest global transaction advisory practice outside the Big Four, our global integrated teams help private equity, sovereign wealth funds, family offices and hedge funds as well as corporate acquirers unlock value across the investment lifecycle. </p>
<p>
The firm’s Global Transaction Advisory Group includes close to 700+ professionals in 33 offices throughout the U.S., Latin America, Europe, Middle East, India and South East Asia Our global team has extensive industry knowledge across multiple sectors including, but not limited to, dedicated industry verticals in healthcare, software & technology, energy and financial services. We are free of audit-based conflict and have a flexible approach and pricing.
	</p>


       <div class="amgt-gta-2c">
               <a href="<?php echo get_site_url(); ?>/pdf/Global-Private-Equity-Services-Overview_ Feb2019.pdf" target="_blank">
                      <div class="nb-btn">
            Learn More About A&M’s Global Private Equity Services
                   </div></a>


              </div>


</div>
	</div>

<div id="amtx-section-6e">
	<div class="container">
<div class="row">
<a href="<?php echo get_site_url(); ?>/global-leadership/">
	<div class="col-md-6">
		<div class="amtx-enter wwa-left">
	<h3>Global Leadership</h3>
			</div>
	  </div>
	</a>

	<a href="<?php echo get_site_url(); ?>/team/">
	   <div class="col-md-6">
		   <div class="amtx-enter wwa-right">
		   <h3>Global Team</h3>
			   </div>
	  </div>
	</a>

	</div>
	</div>
    <div id="g-markets"></div>
	</div>


<div id="amtx-section-6h">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Global MarketS</h2>
			</div>

    <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1">

			<div class="amtx-s6h">
			<a href="<?php echo get_site_url(); ?>/global-markets-asia/">	<img class="gm-ico-1" src="<?php bloginfo('template_url'); ?>/images/gm-ico-1.svg"/></a>
					<h3>Asia</h3>
				</div>

			</div>
<!--/-->

    <div class="col-xs-12 col-sm-3 col-md-2">

			<div class="amtx-s6h">
						<a href="<?php echo get_site_url(); ?>/global-leadership-europe/">	<img class="gm-ico-1" src="<?php bloginfo('template_url'); ?>/images/gm-ico-2.svg"/>
				<h3>Europe & Middle East</h3></a>
				</div>

		</div>
<!--/-->

    <div class="col-xs-12 col-sm-3 col-md-2">

			<div class="amtx-s6h">
						<a href="<?php echo get_site_url(); ?>/global-leadership-india/">	<img class="gm-ico-1" src="<?php bloginfo('template_url'); ?>/images/gm-ico-3.svg"/>
			<h3>India</h3></a>
				</div>

		</div>
<!--/-->

    <div class="col-xs-12 col-sm-3 col-md-2">

			<div class="amtx-s6h">
						<a href="<?php echo get_site_url(); ?>/global-markets-latin-america/">	<img class="gm-ico-1" src="<?php bloginfo('template_url'); ?>/images/gm-ico-4.svg"/>
					<h3>Latin America</h3></a>
				</div>

		</div>
<!--/-->

    <div class="col-xs-12 col-sm-3 col-md-2">

			<div class="amtx-s6h">
							<a href="<?php echo get_site_url(); ?>/global-markets-north-america/"><img class="gm-ico-1" src="<?php bloginfo('template_url'); ?>/images/gm-ico-5.svg"/>
			<h3>North America</h3></a>
				</div>

		</div>
<!--/-->
	</div>
</div>

	</div>
<div id="amtx-careers" class=""></div>
<div id="amtx-section-6i">
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<div class="amtax-6i-img">
				<img src="<?php bloginfo('template_url'); ?>/images/who-we-are_careers.jpg" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="amtax-6i-text">

				<h4>Careers</h4>

				<p>Our Alvarez & Marsal Global Transaction Advisory Group is continuously expanding across the world to deliver an integrated approach and give exceptional client service to our clients throughout the entire investment lifecycle. </p>

				<p>Take your Big 4 experience to the next level. If you are looking for an organization — and a culture — that will value, recognize and reward your talent, drive and results, visit our Careers site for opportunities.</p>

				<div class="amgt-gta-2c">
					<a class="nb-btn wwa" href="https://alvarezandmarsal.wd1.myworkdayjobs.com/alvarezandmarsal/3/refreshFacet/318c8bb6f553100021d223d9780d30be" target="_blank">Join Our Team</a>
				</div>

			</div>
		</div>
	</div>
	</div>
</div>


<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>
