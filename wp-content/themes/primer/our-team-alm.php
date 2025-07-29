<?php
/* Template Name: Reboot: Our Team - ALM */
get_header(); ?>
<div id="our-team" class="wrapper our-team-page">
	<div class="hero-row">
		<div class="row">
			<div class="col-sm-12">
				<div class="hero-image"
					style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/our-team-bg.jpg)">
					<h1>Our Team</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="pepi-row">
		<div class="container ">
			<div class="row">
				<div class="col-sm-12">
					<div class="services-info">
						<p>For more than three decades, Alvarez & Marsal has set the standard for helping organizations
							tackle complex business issues, boost performance improvement and maximize stakeholder
							value. A&M’s leadership in the private equity space is about a bias towards action and a
							results-driven approach to problem-solving and value creation for our clients and partners.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pepi-row">

		<div class="container">
			<div class="row">
				<div class="col-12 px-0">
					<?php if (have_posts()): while (have_posts()): the_post();

							the_content();

						endwhile;
					endif; ?>
				</div>
			</div>

		</div>

	</div>
</div>

<?php include(TEMPLATEPATH . '/includes/general/join-banner.php'); ?>

</div>

<?php get_footer(); ?>