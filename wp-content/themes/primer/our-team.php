<?php
/* Template Name: Reboot: Our Team  */
get_header(); ?>
<div id="our-team" class="wrapper our-team-page">
	<div class="hero-row">
		<div class="row">
			<div class="col-sm-12">
				<div class="hero-image"
					style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/our-team/our-team-bg.jpg), linear-gradient(to bottom, rgba(0,0,0,.34) 0%, rgba(0,0,0,0) 100%); background-blend-mode: multiply; background-size: cover;">
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
						<p>
							<?php echo get_field('team_intro'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include(TEMPLATEPATH . '/includes/general/cta-banner-meet-paul-aversano.php'); ?>

	<div class="pepi-row">

		<div class="container">
			<div class="row">
				<div class="col-12 px-0 px-0">
					<?php if (have_posts()): while (have_posts()): the_post();
							the_content();



						endwhile;
					endif; ?>
				</div>
			</div>

		</div>

	</div>
</div>

<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

</div>

<?php get_footer(); ?>