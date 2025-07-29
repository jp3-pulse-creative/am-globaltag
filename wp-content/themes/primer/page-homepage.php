<?php
/* Template Name: Homepage  */
get_header("loader"); ?>
<div id="homepage" class="wrapper">

	<?php include(TEMPLATEPATH . '/includes/homepage/hero-slider-2.php'); ?>

	<?php include(TEMPLATEPATH . '/includes/homepage/about.php'); ?>

	<?php include(TEMPLATEPATH . '/includes/general/cta-banner-meet-our-global-leaders.php'); ?>

	<?php include(TEMPLATEPATH . '/includes/homepage/insights.php'); ?>

	<?php include(TEMPLATEPATH . '/includes/homepage/news.php'); ?>

	<?php
	// include (TEMPLATEPATH . '/includes/general/twitter-feeds.php');
	?>

	<?php get_template_part('includes/general/cta-banner-intelligence'); ?>


	<?php //include (TEMPLATEPATH . '/includes/general/contact-form02.php'); 
	?>

</div>

<script>
	//Homepage specific scripts
	$(document).ready(function() {
		$(".hero-slider").slick({
			arrows: false,
			autoplay: false,
			draggable: false,
			infinite: false,
			responsive: [{
				breakpoint: 1024,
				settings: {
					draggable: true
				}
			}]
		});

		$(".services-slider").slick({
			arrows: false,
			autoplay: false,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					centerMode: true
				}
			}]
		});
		if ($(window).width() < 768) {
			$('.industry-slider').slick({
				arrows: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				centerMode: true
			});
		} else {
			$('.industry-slider').slick();
			$('.industry-slider').slick('unslick');
		};
		$(window).resize(function() {
			if ($(window).width() < 768) {
				$('.industry-slider').slick({
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					centerMode: true
				});
			} else {
				$('.industry-slider').slick();
				$('.industry-slider').slick('unslick');
			}
		});
		console.log('here');
		$(".sm-slider").slick({
			dots: false,
			arrows: false,
			slidesToShow: 3,
			responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					centerMode: true
				}
			}]
		});
		console.log('here2');
		$("#sms-prev").click(function() {
			$(".sm-slider").slick("slickPrev");
		});
		$("#sms-next").click(function() {
			$(".sm-slider").slick("slickNext");
		});

	});

	// jQuery
	$(window).on('DOMContentLoaded load resize scroll', function() {
		var twobox = $('.twobox');
		if (isElementInViewport(twobox)) {
			$(twobox).addClass('active');
		}
	});
</script>
<?php get_footer(); ?>