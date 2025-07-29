<?php
/* Single for Insights */
get_header(); ?>
<div id="single-insight" class="wrapper single-insight">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="hero-row">
				<?php include(TEMPLATEPATH . '/includes/general/hero.php'); ?>
			</div>
			<div class="hero-row">
				<?php include(TEMPLATEPATH . '/includes/general/inner-nav02.php'); ?>
			</div>
			<div class="pepi-row">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="insight-title">
								<h2><?php echo get_the_title() ?></h2>
								<p class="authors"><?php echo get_the_field('authors_shortlist') ?></p>
								<div class="short-border"></div>
							</div>
							<div class="insight-content">
								<?php the_content(); ?>
								<div class="source">
									<p><?php echo get_field('source') ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="insight-authors" class="pepi-row">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="ins-author">
								<div class="insa-img" style="background-image:url();">
								</div>
								<div class="insa-content">
									<h4></h4>
									<p></p>
									<div class="insa-links">
										<a href="#" class="cta-btn">Connect</a>
										<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pepi-row">
				<?php include(TEMPLATEPATH . '/includes/general/related-insights.php'); ?>
			</div>

		<?php endwhile;
	else : ?>

		<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
</div>

<script>
	$(document).ready(function() {
		$(".sics-btn").click(function(e) {
			e.preventDefault();
			if (!$(this).parent().hasClass("active")) {
				$(".si-case-study").removeClass("active");
				$(this).parent().addClass("active");
			} else {
				$(".si-case-study").removeClass("active");
			}
		})
	});
</script>
<?php get_footer(); ?>