<?php
/* Template Name: Reboot: Our Team - Custom Filters
these work but pagination and post loading animation is easier with Ajax Load More Pro
- requires ajax function, js, custom taxonomy
 */
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
						<p><?php echo get_field('team_intro'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pepi-row">
		<div class="container">

			<div class="container">
				<div class="row">
					<div class="col-12 px-0">

					</div>
				</div>
			</div>

		</div>
		<div class="container reduced-container2">
			<div class="row">
				<div class="col-sm-12">
					<form class="d-flex flex-wrap justify-content-between"
						action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
						<?php
						$regions = get_terms(array(
							'taxonomy' => 'filter_region',
							'hide_empty' => true
						));
						?>
						<select id="filter-region" name="filter-region" class="form-control custom-select mb-0">
							<option value="677">Region</option>
							<option value="677">All</option>

							<?php foreach ($regions as $region) : ?>
								<option value="<?= $region->term_id; ?>"><?= $region->name; ?></option>
							<?php endforeach; ?>
						</select>

						<?php
						$countries = get_terms(array(
							'taxonomy' => 'filter_country',
							'hide_empty' => true
						));
						?>

						<select id="filter-country" name="filter-country" class="form-control custom-select mb-0">
							<option selected="678" value="678">Country</option>
							<option value="678">All</option>

							<?php foreach ($countries as $country) : ?>
								<option value="<?= $country->term_id; ?>"><?= $country->name; ?></option>
							<?php endforeach; ?>
						</select>




						<button class="bg-bright-blue border-0 text-white outline-none"><span
								class="button-text text-white">APPLY</span>
							<div class="spinner-border text-white" role="status" style="display: none;">
								<span class="sr-only">Loading...</span>
							</div>
						</button>
						<input type="hidden" name="action" value="myfilter">
					</form>
				</div>
			</div>
		</div>

		<div id="response" class="container">
			<?php

			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'team_member', // we will sort posts by date
				'orderby' => 'meta_value', // we will sort posts by date
				'meta_key' => 'last_name',
				'order'	=> 'ASC'
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) : ?>
				<div class="row my-3 post-grid">
					<?php
					while ($query->have_posts()): $query->the_post();
						/* grab the url for the full size featured image */

						$name = get_field('first_name') . ' ' . get_field('last_name');
						$title = get_field('title');
						$gl_title = get_field('gl_area');
						$city = get_field('city');

						$job_title = get_field('job_title');
						$featured_image = get_the_post_thumbnail_url(null, 'full');

					?>
						<div class="member-ctn">

							<a class="member-link <?php echo get_field('location') ?> <?php echo $job_title['value'] ?>"
								<?php if (get_field('external_link')): ?> href="<?php echo get_field('external_link') ?>"
								target="_blank" <?php else: ?> style="pointer-events:none;" <?php endif; ?>>
								<div class="mem-img">
									<img src="<?php if ($featured_image) {
													echo $featured_image;
												} else {
													echo  site_url() . "/wp-content/uploads/2022/01/TAXAND_Redesign_OurTeam_Headshot_Placeholder@2x.jpeg";
												} ?>"
										alt="<?php echo $name; ?>" />
								</div>
								<div class="mem-text">
									<p><strong><?php echo get_the_title(); ?></strong></p>
									<p><?php echo $title; ?></p>
									<p><?php echo implode(' & ', $city); ?></p>
								</div>

							</a>
						</div>
					<?php
					endwhile;
					?>
				</div><!-- end row -->



				<?php
				wp_reset_postdata();
				?>
			<?php else : ?>
				<div class="row">
					<div class="post-grid__col col-12 px-0 m-0">
						<div class="post-card h-100">
							<p>No results found?</p>
						</div>
					</div>
				</div><!-- end row -->



			<?php endif; ?>



		</div><!-- end container -->
	</div>
</div>

<?php include(TEMPLATEPATH . '/includes/general/join-banner.php'); ?>

</div>

<?php get_footer(); ?>