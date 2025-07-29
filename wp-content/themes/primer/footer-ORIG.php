<footer class="footer" role="contentinfo" itemscope itemtype="//schema.org/WPFooter">

	<div class="container">
		<div class="row">
			<div class="col-md-4 flex vcenter">
				<div class="logo-ctn">
					<a href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-white.svg" alt="Alvarez and Marsal - Global TAG" /></a>
					<a href="https://www.alvarezandmarsal.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/site-title-white.png" alt="Alvarez and Marsal"></a>
					<!--<div class="mobile-only mrg-t-5"><a href="https://www.alvarezandmarsal.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/site-title-white.png" alt="Alvarez and Marsal" /></a></div>-->
				</div>
			</div>
			<div class="col-md-8">
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
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="white-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<div class="copyright">
					<label>
						© Copyright <?php echo currentYear(); ?>, Alvarez & Marsal Holdings, LLC. All Rights Reserved.<br />
						ALVAREZ & MARSAL<sup>®</sup>, <img src="<?php echo get_template_directory_uri(); ?>/library/images/ampepi-mini-logo.svg" /><sup>®</sup>, <img src="<?php echo get_template_directory_uri(); ?>/library/images/am-mini-logo2.svg" /><sup>®</sup>, A&M<sup>®</sup>, Corporate Logo new - trademark<sup>®</sup>, A&M Corporate Logo old - trademark<sup>®</sup> and A&M<sup>®</sup> are trademarks of Alvarez & Marsal Holdings, LLC.<br />
						Note: Alvarez & Marsal employs CPAs, but is not a licensed CPA firm.
					</label>
				</div>
			</div>

			<div class="col-sm-2">
				<?php include(TEMPLATEPATH . '/includes/footer/sm-links.php'); ?>

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
							$('#homeSliderBS .carousel-indicators li:nth-child(4)').removeClass('bg-gold');
						}, 10);
						setTimeout(function() {
							$('#homeSliderBS .carousel-indicators li:nth-child(3)').removeClass('bg-gold');
						}, 300);
						setTimeout(function() {
							$('#homeSliderBS .carousel-indicators li:nth-child(2)').removeClass('bg-gold');
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
			$(window).on('DOMContentLoaded load resize scroll', function() {
				var twobox = $('.twobox');
				if (isElementInViewport(twobox)) {
					$(twobox).addClass('active');
				}
			});
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

		function isElementInViewport(el) {

			// Special bonus for those using jQuery
			if (typeof jQuery === "function" && el instanceof jQuery) {
				el = el[0];
			}

			var rect = el.getBoundingClientRect();
			var height = rect.bottom - rect.top;

			return (
				rect.top >= 0 &&
				rect.left >= 0 &&
				(rect.bottom - (height / 2)) <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
				rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
			);
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

			var base_url = "https://www.pulsecreative-clients.com/staging/ampepi/"; //CHANGE THIS WHEN LIVE
			$(".open-btn").click(function() {
				$(".primary-menu-ctn").addClass("active");
			});
			$("#close-btn").click(function() {
				$(".primary-menu-ctn").removeClass("active");
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").removeClass("o-drop");
			});
			$(".primary-menu-body .s-dropdown").click(function(e) {
				if ($(window).width() > 1198) {
					e.preventDefault();
					$(".primary-menu-ctn").removeClass("o-drop");
					$(".primary-menu-ctn").toggleClass("s-drop");
				}
			})
			$(".primary-menu-body .o-dropdown").click(function(e) {
				e.preventDefault();
				$(".primary-menu-ctn").removeClass("s-drop");
				$(".primary-menu-ctn").toggleClass("o-drop");
			})


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

</body>

</html> <!-- close that html tag -->