<?php
/* Template Name: Service Template 2 */
get_header(); ?>
<div id="services-template" class="wrapper service-page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<div class="hero-row">
				<?php include(TEMPLATEPATH . '/includes/services/video-hero03.php'); ?>
			</div>
			<div class="hero-row">
				<?php include(TEMPLATEPATH . '/includes/general/inner-nav04.php'); ?>
			</div>
			<div class="pepi-row">
				<?php include(TEMPLATEPATH . '/includes/services/content.php'); ?>
			</div>
			<div class="pepi-row">
				<div class="container">
					<?php if (get_field('dropdown_title')): ?>
						<div class="row">
							<div class="col">

								<h1 class="section-title"><?php echo get_field('dropdown_title'); ?></h1>
								<div class="short-border"></div>

							</div>
						</div>
					<?php endif; ?>
					<div class="row">
						<div class="col">
							<div class="service-dropdowns">
								<?php
								if (have_rows('service_dropdowns')):
									while (have_rows('service_dropdowns')) : the_row();
								?>
										<div class="sd-bar <?php echo get_sub_field('bg_color') ?>"> <!-- add class for diff color -->
											<div class="sd-title">
												<div class="plus-btn">
													<div class="line line-1"></div>
													<div class="line line-2"></div>
												</div>
												<h3><?php echo get_sub_field('title') ?></h3>
												<img class="sd-icon" src="<?php echo get_sub_field('icon') ?>" alt="<?php echo get_sub_field('title') ?>" />
											</div>
											<div class="sd-content">
												<div class="sd-main">
													<?php echo get_sub_field('main_content'); ?>
												</div>
												<div class="sd-3col">
													<?php if (get_sub_field('3_col_title')): ?>
														<h3 class="sd-3col-title"><?php echo get_sub_field('3_col_title') ?></h3>
													<?php endif; ?>
													<div class="sd-3col-ctn">
														<div class="sd-col sd-col-1">
															<?php echo get_sub_field('column_1'); ?>
														</div>
														<div class="sd-col sd-col-2">
															<?php echo get_sub_field('column_2'); ?>
														</div>
														<div class="sd-col sd-col-3">
															<?php echo get_sub_field('column_3'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
								<?php
									endwhile;
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pepi-row tall-row">
				<?php include(TEMPLATEPATH . '/includes/services/team-lead-v2.php'); ?>
			</div>
			<div class="pepi-row">
				<?php include(TEMPLATEPATH . '/includes/services/related-insights.php'); ?>
			</div>

			<?php include(TEMPLATEPATH . '/includes/general/join-banner02.php'); ?>

		<?php endwhile;
	else : ?>

		<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
</div>

<script src="https://player.vimeo.com/api/player.js"></script>
<script>
	$(document).ready(function() {

		$('.sd-title').click(function() {
			var parent = $(this).parent();
			parent.toggleClass('active');
		});
		$(".hero-image iframe").click(function(e) {
			console.log('hit iframe');
		});
	});
</script>

<?php get_footer(); ?>