<?php
/*
 Template Name: Reboot: Who We Are
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

<?php get_header(); ?>
<style>
	#amtx-section-6a {
		width: 100%;
		height: 400px;
		overflow: hidden;
		box-shadow: 0px 0px 11px rgba(0, 0, 0, 0.80);
		position: relative;
		display: block;
		background: url("../../images/amtag-logo-sm9.jpg");
		background-position: center top;
		background-repeat: no-repeat !important;
	}

	#amtx-section-6a iframe {
		width: 100%;
		height: 400px;
	}

	#amtx-section-6e {
		position: relative;
		display: inline-block;
		width: 100%;
		padding: 100px 0px 100px 0px;
	}

	.wwa-left {
		background-image: url("<?php echo get_template_directory_uri(); ?>/library/images/reboot/who-we-are/who-we-are-global-leadership-bg.jpg");
		background-color: rgba(0, 36, 74, .6);
		background-blend-mode: multiply;
		background-position: center center;
		background-size: cover;
		border: solid 0px #f2f2f2;
		height: 300px;
		width: 100%;
		-webkit-transition: all 0.4s ease;
		transition: all 0.4s ease;
		margin: 0px;
		position: relative;
		display: inline-block;
	}

	.wwa-right {
		background-image: url("<?php echo get_template_directory_uri(); ?>/library/images/reboot/who-we-are/who-we-are-global-team-bg.jpg");
		background-color: rgba(0, 36, 74, .6);
		background-blend-mode: multiply;
		background-position: center center;
		background-size: cover;
		border: solid 0px #f2f2f2;
		height: 300px;
		width: 100%;
		-webkit-transition: all 0.4s ease;
		transition: all 0.4s ease;
		margin: 0px;
		position: relative;
		display: inline-block;
	}

	.wwa-left:hover,
	.wwa-right:hover {
		/* border: solid 10px #f2f2f2;
		opacity: .9; */
		transform: scale(95%);
	}

	.amtx-s6h {

		width: 204px;
		height: 167px;
		background: #fff;
		color: #6892ba;
		box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.20);
		border-bottom-right-radius: 0px;
		border-bottom-left-radius: 0px;
		border-top-right-radius: 0px;
		border-top-left-radius: 0px;
		margin: 0;
		padding: .5rem 0;
		-webkit-transition: all 0.4s ease;
		transition: all 0.4s ease;
		display: flex;
		flex-direction: column;
		justify-content: flex-end;
		align-items: center;
	}


	.amtx-s6h:hover {
		background: #b9bdbd;
		color: #002b49;
		cursor: pointer;
		box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.0);
		transform: scale(95%);
	}

	@media (max-width: 1199.9px) {

		.amtx-s6h {

			width: 180px;
			height: 190px;
		}
	}

	@media (max-width: 991.9px) {

		.amtx-s6h {

			width: 204px;
			height: 167px;
		}
	}

	@media (max-width: 767.67px) {
		#amtx-section-6e {
			position: relative;
			display: inline-block;
			width: 100%;
			padding: 70px 0px 70px 0px;
		}

		.amtx-s6h {

			width: 100%;
			height: 167px;

		}
	}
</style>
<div class="hero-row">
	<div class="row">
		<div class="col-sm-12">
			<div class="hero-image"
				style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/who-we-are/who-we-are-hero-bg.jpg), linear-gradient(to right, rgba(0,0,0,.38)38%,rgba(0,0,0,0)100% ); background-blend-mode: multiply;">
				<h1>Who We Are</h1>
			</div>
		</div>
	</div>
</div>


<div id="who-we-are__video" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="videoWrap col-12 px-0">
				<iframe style="box-shadow: 0px 0px 11px rgb(0 0 0 / 20%);" width="560" height="315" src="https://www.youtube.com/embed/kGTiU6QUzmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			</div>
		</div>

	</div>
</div>




<div class="pepi-row pepi-row__mt">
	<div class="container">
		<div class="row">
			<p class="col-md-6 pl-md-0 mb-md-0">
				A&M’s Global Transaction Advisory Group provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues. As the largest global transaction advisory practice outside the Big Four, our global integrated teams help private equity, sovereign wealth funds, family offices and hedge funds as well as corporate acquirers unlock value across the investment lifecycle.</p>
			<p class="col-md-6 last-child pr-md-0">
				The firm’s Global Transaction Advisory Group includes over 1000+ professionals and 40 offices offices worldwide. Our global team has extensive industry knowledge across multiple sectors and is free from audit-based conflicts of interests.</p>

		</div>


	</div>
</div>

<div id="amtx-section-6e" class="bg-lighter-grey pepi-row">
	<div class="container">
		<div class="row">
			<a href="<?php echo get_site_url(); ?>/global-leadership/" class="col-md-6 pl-md-0 mb-4 mb-md-0">
				<div class="wwa-left d-flex justify-content-center align-items-end pb-5">
					<h3 class="text-white font-57-cd font-size-34 line-height-34">Global Leadership</h3>
				</div>
			</a>

			<a href="<?php echo get_site_url(); ?>/team/" class="col-md-6 pr-md-0">
				<div class="wwa-right d-flex justify-content-center align-items-end pb-5">
					<h3 class="text-white font-57-cd font-size-34 line-height-34">Global Team</h3>
				</div>
			</a>

		</div>
	</div>
	<div id="g-markets"></div>
</div>


<div id="global-markets">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 px-md-0">
				<h1 class="section-title mt-mn-md-3">Global Markets</h1>
				<div class="short-border"></div>
			</div>
		</div>
		<style>
			@media (min-width: 768px) {
				#global-markets .amtx-s6h {
					width: 100%;
					height: auto;
					aspect-ratio: 204 / 167;
					max-width: 100%;
				}
			}

			@media (min-width: 991px) {
				#global-markets .amtx-s6h {
					width: 204px;
					height: 167px;
					aspect-ratio: 204/167;
					max-width: 100%;
				}
			}
		</style>
		<div class="row justify-content-center justify-content-lg-between ">
			<div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
				<a href="<?php echo get_site_url(); ?>/global-leadership-asia/">

					<div class="amtx-s6h">
						<img class="gm-ico-1"
							src="<?php bloginfo('template_url'); ?>/library/images/reboot/who-we-are/global-resources/gm-ico-1.svg"
							width="118" />
						<h3>Asia</h3>
					</div>
				</a>
			</div>
			<!--/-->
			<div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
				<a href="<?php echo get_site_url(); ?>/global-leadership-australia/">

					<div class="amtx-s6h">
						<img class="gm-ico-1 mb-2"
							src="<?php bloginfo('template_url'); ?>/images/reboot/who-we-are/global-resources/AMTAG_GlobalMarket_Australia_081123.png"
							width="118" style="width: 100px;
							height: auto; max-width: 100%;" />
						<h3>Australia</h3>
					</div>
				</a>
			</div>
			<!--/-->

			<div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
				<a href="<?php echo get_site_url(); ?>/global-leadership-europe/">
					<div class="amtx-s6h mx-md-auto">
						<img class="gm-ico-1"
							src="<?php bloginfo('template_url'); ?>/library/images/reboot/who-we-are/global-resources/gm-ico-2.svg"
							width="93" />
						<h3>Europe & Middle East (EMEA)</h3>

					</div>
				</a>
			</div>
			<!--/-->

			<div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
				<a href="<?php echo get_site_url(); ?>/global-leadership-india/">

					<div class="amtx-s6h ml-md-auto">
						<img class="gm-ico-1"
							src="<?php bloginfo('template_url'); ?>/library/images/reboot/who-we-are/global-resources/gm-ico-3.svg"
							width="118" />
						<h3>India</h3>
					</div>
				</a>

			</div>
			<!--/-->

			<div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4 mb-sm-0">
				<a href="<?php echo get_site_url(); ?>/global-leadership-latin-america/">

					<div class="amtx-s6h mx-md-auto">
						<img class="gm-ico-1"
							src="<?php bloginfo('template_url'); ?>/library/images/reboot/who-we-are/global-resources/gm-ico-4.svg"
							width="85" />
						<h3>Latin America</h3>

					</div>
				</a>
			</div>
			<!--/-->

			<div class="col-12 col-sm-6 col-md-4 col-lg-2">
				<a href="<?php echo get_site_url(); ?>/global-leadership-us-canada/">
					<div class="amtx-s6h mx-md-auto">
						<img class="gm-ico-1"
							src="<?php bloginfo('template_url'); ?>/library/images/reboot/who-we-are/global-resources/gm-ico-5.svg"
							width="90" />
						<h3>U.S. & Canada</h3>

					</div>
				</a>
			</div>
			<!--/-->
		</div>
	</div>

</div>
<div id="amtax-careers" class="pepi-row pepi-row__mt">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6 px-md-0 overflow-hidden mb-4 mb-lg-0">
				<img src="<?php bloginfo('template_url'); ?>/library/images/reboot/who-we-are/who-we-are_careers.jpeg"
					class="img-fluid w-100 scale-120" />
			</div>
			<div class="col-lg-5 px-lg-0 forty-two">
				<h1 class="section-title mt-mn-lg-3">Careers</h1>
				<div class="short-border"></div>

				<p>Our Alvarez & Marsal Global Transaction Advisory Group is continuously expanding across the world to deliver an integrated approach and give exceptional client service to our clients throughout the entire investment lifecycle.</p>
				<p>
					Take your Big 4 experience to the next level. If you are looking for an organization — and a culture — that will value, recognize and reward your talent, drive and results, visit our Careers site for opportunities.</p>

				<a href="https://careers.alvarezandmarsal.com/search/category/consulting-transaction-advisory/jobs/in/country/united-states" target="_blank" class="cta-btn mt-2">
					<div class="cta-inner cta-inner d-flex align-items-center"><span
							class="arrow_carrot-right"></span><span class="btn-label amblue">Join Our Team</span>
					</div>
				</a>

			</div>
		</div>
	</div>
</div>





<?php get_footer(); ?>