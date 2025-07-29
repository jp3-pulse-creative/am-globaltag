<?php
/* Template Name: Service - Software & Technology */
get_header(); ?>
<div id="services-template" class="wrapper service-page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="hero-row">
				<?php include(TEMPLATEPATH . '/includes/general/hero.php'); ?>
			</div>
			<div class="hero-row">
				<?php include(TEMPLATEPATH . '/includes/general/inner-nav01.php'); ?>
			</div>
			<div class="pepi-row">
				<?php include(TEMPLATEPATH . '/includes/services/content.php'); ?>
			</div>
			<div class="pepi-row">
				<?php include(TEMPLATEPATH . '/includes/services/studies-software-technology.php'); ?>
			</div>
			<div class="pepi-row">
				<?php include(TEMPLATEPATH . '/includes/services/team-lead.php'); ?>
			</div>
			<div class="pepi-row">
				<?php include(TEMPLATEPATH . '/includes/services/related-insights.php'); ?>
			</div>
			<?php include(TEMPLATEPATH . '/includes/general/join-banner.php'); ?>

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
		});
		/*
		var o3height = 0;
		$(".si-o3").each(function(){
			if($(this).height() > o3height){
				o3height = $(this).height();
			}
		});
		if(o3height > 0){
			var o3t = o3height.toString() + "px";
			$(".si-o3").css("min-height", o3t);
		}
		*/
	});
</script>
<?php get_footer(); ?>