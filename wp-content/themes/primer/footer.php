<?php if (is_page('Join Us') || is_page('Campus Recruiting') || is_page('Experienced Hire Recruiting')) { ?>
	<?php get_template_part('includes/general/contact-form'); ?>

	<?php get_template_part('includes/general/cta-banner-intelligence'); ?>

<?php } ?>

<footer class="footer" role="contentinfo" itemscope itemtype="//schema.org/WPFooter">

	<div class="container">
		<div class="row">
			<div class="col-md-4 flex vcenter">
				<div class="logo-ctn d-flex flex-column">
					<a href="<?php echo site_url() ?>"><img class="mb-3 d-block"
							src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-white.svg"
							alt="Alvarez and Marsal - Global TAG" width="190" /></a>
					<a href="https://www.alvarezandmarsal.com/" target="_blank"><img
							src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/logos/am-logo-white-footer.svg"
							alt="Alvarez and Marsal"></a>
					<!--<div class="mobile-only mrg-t-5"><a href="https://www.alvarezandmarsal.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/site-title-white.png" alt="Alvarez and Marsal" /></a></div>-->
				</div>
			</div>
			<div class="col-md-6">
				<div class="menu-ctn">
					<?php wp_nav_menu(array(
						'container' => false,                           // remove nav container
						'theme_location' => 'footer',                 // where it's located in the theme
						'before' => '',                                 // before the menu
						'after' => '',                                  // after the menu
						'link_before' => '',                            // before each link
						'link_after' => '',                             // after each link
						'depth' => 0,                                   // limit the depth of the nav
						'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>

				</div>

			</div>
			<?php include(TEMPLATEPATH . '/includes/footer/sm-links.php'); ?>


		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="white-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-9">
				<div class="copyright">
					<label>
						© Copyright <?php echo currentYear(); ?>, Alvarez & Marsal Holdings, LLC. All Rights
						Reserved.<br />
						ALVAREZ & MARSAL<sup>®</sup>, <img
							src="<?php echo get_template_directory_uri(); ?>/library/images/ampepi-mini-logo.svg" /><sup>®</sup>,
						<img
							src="<?php echo get_template_directory_uri(); ?>/library/images/am-mini-logo2.svg" /><sup>®</sup>,
						A&M<sup>®</sup>, Corporate Logo new - trademark<sup>®</sup>, A&M Corporate Logo old -
						trademark<sup>®</sup> and A&M<sup>®</sup> are trademarks of Alvarez & Marsal Holdings,
						LLC.<br />
						Note: Alvarez & Marsal employs CPAs, but is not a licensed CPA firm.
					</label>
				</div>
			</div>

			<div class="col-sm-3 text-white d-flex align-items-center justify-content-end font-65-medium">
				<span class="small text-white" style="font-size: 10px;">A&M GLOBAL</span><span
					class="mx-3 text-white">|</span><a class="text-white" style="font-size: 10px;"
					ref="https://paulaversano.com" target="_blank">PAULAVERSANO.COM</a>
			</div>
		</div>
	</div>

	<?php if (is_front_page()): ?>
		<script>
			//Homepage specific scripts
			$(document).ready(function() {




				$("#homeSliderBS").on('slide.bs.carousel', function(event) {
					if (event.to == 0 && event.direction == "right") {
						$('#homeSliderBS .carousel-indicators li').removeClass('bg-gold');
						$('#homeSliderBS .carousel-indicators li:nth-child(4)').addClass('bg-gold-none');

						// $("#homeSliderBS .carousel-indicators-bar").animate({
						// 	left: '-75%'
						// }, 500);


					}
					if (event.to == 0 && event.direction == "left") {

						setTimeout(function() {
							$('#homeSliderBS .carousel-indicators li:nth-child(4)').removeClass(
								'bg-gold');
						}, 10);
						setTimeout(function() {
							$('#homeSliderBS .carousel-indicators li:nth-child(3)').removeClass(
								'bg-gold');
						}, 300);
						setTimeout(function() {
							$('#homeSliderBS .carousel-indicators li:nth-child(2)').removeClass(
								'bg-gold');
						}, 600);




					}




					if (event.to == 1) {
						$('#homeSliderBS .carousel-indicators li:nth-child(2)').prevAll().addClass('bg-gold');
						$('#homeSliderBS .carousel-indicators li:nth-child(2)').nextAll().removeClass('bg-gold');

					}
					if (event.to == 2) {
						$('#homeSliderBS .carousel-indicators li:nth-child(3)').prevAll().addClass('bg-gold');
						$('#homeSliderBS .carousel-indicators li:nth-child(3)').nextAll().removeClass('bg-gold');

						$("#homeSliderBS .carousel-indicators-bar").animate({
							left: '-25%'
						}, 300);

					}
					if (event.to == 3) {
						$('#homeSliderBS .carousel-indicators li:nth-child(4)').prevAll().addClass('bg-gold');
						$('#homeSliderBS .carousel-indicators li:nth-child(4)').removeClass('bg-gold-none');

						// $("#homeSliderBS .carousel-indicators-bar").animate({
						// 	left: '0'
						// }, 500);

					}




				});

				$("#insights-slider").on('slide.bs.carousel', function(event) {
					if (event.to == 0) {
						$('#insights-slider .carousel-indicators li').removeClass('bg-gold');
					}
					// if(event.to > 0) {
					// 	$('#homeSliderBS .carousel-indicators li[data-slide-to="'event.from'"]').prevAll().addClass('bg-gold');
					// }
					if (event.to > 0) {
						$('#insights-slider .carousel-indicators li:first-child').addClass('bg-gold');
					}


				});



				// 	$("#myCarousel").on('slide.bs.carousel', function(event){
				//     alert("The index number I am about to slide to is : " + event.to);
				//   });
			});
			// jQuery

			$(window).on('resize orientationchange', function() {
				$('.hero-slider').slick('resize');
			});
		</script>
	<?php endif; ?>

	<script>
		function pauseIframes() {
			console.log('pauseIframes');
			$('iframe').each(function() {
				this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
				this.contentWindow.postMessage('{"method":"pause","value":""}', '*');
			});
		}

		function playIframe(frame) {
			console.log('playiframe');
			var parent = $(frame).parent();
			var iframe = $(parent).children('iframe');
			var bgcover = $(parent).children('.video-bg-cover');
			var textctn = $(parent).children('.hero-s-text');
			var player = new Vimeo.Player(iframe);
			$(bgcover).hide();
			$(textctn).hide();
			$(iframe).show();
			player.play();
		}


		$(document).ready(function() {


			jQuery('img.svg').each(function() {
				var $img = jQuery(this);
				var imgID = $img.attr('id');
				var imgClass = $img.attr('class');
				var imgURL = $img.attr('src');

				jQuery.get(imgURL, function(data) {
					// Get the SVG tag, ignore the rest
					var $svg = jQuery(data).find('svg');

					// Add replaced image's ID to the new SVG
					if (typeof imgID !== 'undefined') {
						$svg = $svg.attr('id', imgID);
					}
					// Add replaced image's classes to the new SVG
					if (typeof imgClass !== 'undefined') {
						$svg = $svg.attr('class', imgClass + ' replaced-svg');
					}

					// Remove any invalid XML tags as per http://validator.w3.org
					$svg = $svg.removeAttr('xmlns:a');

					// Replace image with new SVG
					$img.replaceWith($svg);

				}, 'xml');

			});

			var base_url = "<?php echo site_url(); ?>/"; //CHANGE THIS WHEN LIVE
			if ($('#menu-who-we-are li').hasClass('current-menu-item')) {
				$('.t-dropdown').addClass('current-menu-item');
			}
			if ($('#menu-what-we-do li').hasClass('current-menu-item')) {
				$('.s-dropdown').addClass('current-menu-item');
			}
			if ($('#menu-join-us li').hasClass('current-menu-item')) {
				$('.i-dropdown').addClass('current-menu-item');
			}
			if ($('#menu-other-sites li').hasClass('current-menu-item')) {
				$('.o-dropdown').addClass('current-menu-item');
			}

			$(".open-btn").click(function() {
				$(".primary-menu-ctn").addClass("active");
				$("header").addClass("d-none");
				$("body").addClass("overflow-hidden");



			});

			$(".close-btn").click(function() {
				$(".primary-menu-ctn").removeClass("active");
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").removeClass("o-drop");
				$(".primary-menu-ctn").removeClass("t-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$("header").removeClass("d-none");
				$("body").removeClass("overflow-hidden");


			});
			$("#info").click(function() {
				$(".primary-menu-ctn").removeClass("active");
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").removeClass("o-drop");
				$(".primary-menu-ctn").removeClass("t-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$("header").removeClass("d-none");
				$("body").removeClass("overflow-hidden");


			});

			$(".close-btn-s-dropdown").click(function() {
				$(".wwd-sub").removeClass("s-drop");
			});
			$(".close-btn-t-dropdown").click(function() {
				$(".wwd-sub").removeClass("t-drop");
			});
			$(".close-btn-o-dropdown").click(function() {
				$(".wwd-sub").removeClass("o-drop");
			});
			$(".close-btn-i-dropdown").click(function() {
				$(".wwd-sub").removeClass("i-drop");
			});
			$(".close-btn-r-dropdown").click(function() {
				$(".wwd-sub").removeClass("r-drop");
			});

			$(".primary-menu-body .s-dropdown").click(function(e) {
				e.preventDefault();
				$(".primary-menu-ctn").removeClass("t-drop");
				$(".primary-menu-ctn").removeClass("o-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$(".primary-menu-ctn").removeClass("r-drop");

				$(".primary-menu-ctn").toggleClass("s-drop");

			});




			$(".primary-menu-body .t-dropdown").click(function(e) {
				e.preventDefault();
				$(".primary-menu-ctn").removeClass("o-drop");
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$(".primary-menu-ctn").removeClass("r-drop");
				$(".primary-menu-ctn").toggleClass("t-drop");
			});


			$(".primary-menu-body .o-dropdown").click(function(e) {
				e.preventDefault();
				$(".primary-menu-ctn").removeClass("t-drop");
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$(".primary-menu-ctn").removeClass("r-drop");
				$(".primary-menu-ctn").toggleClass("o-drop");
			});

			$(".primary-menu-body .i-dropdown").click(function(e) {
				e.preventDefault();
				$(".primary-menu-ctn").removeClass("t-drop");
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").removeClass("o-drop");
				$(".primary-menu-ctn").removeClass("r-drop");
				$(".primary-menu-ctn").toggleClass("i-drop");
			});
			$(".primary-menu-body .r-dropdown").click(function(e) {
				e.preventDefault();
				$(".primary-menu-ctn").removeClass("t-drop");
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").removeClass("o-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$(".primary-menu-ctn").toggleClass("r-drop");

			});
			$(".footer .o-dropdown").click(function(e) {
				e.preventDefault();
				$(".primary-menu-ctn").addClass("active");
				$("header").addClass("d-none");
				$(".primary-menu-ctn").toggleClass("o-drop");
			});





			<?php
			if (is_page('who-we-are')): ?>
				console.log('currently on page who we are');
				$("#menu-who-we-are .gm").click(function() {
					$("#close-btn").click();
				});
			<?php endif; ?>

			$(".search .search-btn").click(function(e) {
				console.log('search-btn hit');
				e.preventDefault();
				if ($(this).parent().hasClass('active')) {
					window.location.href = base_url + "?s=" + $("#search-field").val();
				} else {
					$(".search").addClass('active');
				}
			});
			$(".search .search-btn-2").click(function(e) {
				console.log('search-btn-2 hit');
				e.preventDefault();
				if ($(this).parent().hasClass('active')) {
					window.location.href = base_url + "?s=" + $("#search-field-2").val();
				} else {
					$(".search").addClass('active');
				}
			});
			$("#search-field").on('keyup', function(e) {
				if (e.key === 'Enter' || e.keyCode === 13) {
					window.location.href = base_url + "?s=" + $(this).val();
				}
			});


			$("#search-field-2").on('keyup', function(e) {
				if (e.key === 'Enter' || e.keyCode === 13) {
					window.location.href = base_url + "?s=" + $(this).val();
				}
			});
		});
	</script>



</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
</body>

</html> <!-- close that html tag -->