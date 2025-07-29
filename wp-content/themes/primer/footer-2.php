<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

<section id="nb-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="nb-footer-top">
					<div class="logo-ctn d-flex flex-column">
						<a href="<?php echo site_url() ?>"><img class="mb-3 d-block"
								src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-white.svg"
								alt="Alvarez and Marsal - Global TAG" width="190" /></a>
						<a href="https://www.alvarezandmarsal.com/" target="_blank"><img
								src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/logos/am-logo-white-footer.svg"
								alt="Alvarez and Marsal"></a>
						<!--<div class="mobile-only mrg-t-5"><a href="https://www.alvarezandmarsal.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/site-title-white.png" alt="Alvarez and Marsal" /></a></div>-->
					</div>
					<div class="nb-footer-menu">
						<?php
						wp_nav_menu(array(
							'container' => false,                           // remove nav container
							'menu' => __('The Main Menu', 'bonestheme'),  // nav name
							'theme_location' => 'main-nav',                 // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => ''                             // fallback function (if there is one)
						));
						?>
					</div>
					<div class="nb-footer-sm">
						<a href="https://www.facebook.com/alvarezandmarsal" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/alvarezmarsal" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.linkedin.com/company/162399" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://www.youtube.com/user/AlvarezMarsal" target="_blank"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
				<div class="nb-footer-bottom">
					<div class="nb-footer-copyright">
						<span>© Copyright <?php echo date("Y") ?> Alvarez &amp; Marsal Holdings, LLC. All Rights Reserved.</span>
					</div>
					<div class="nb-footer-outlinks">
						<?php
						wp_nav_menu(array(
							'container' => false,                           // remove nav container
							'menu' => __('Other Sites Submenu', 'bonestheme'),  // nav name
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => ''                             // fallback function (if there is one)
						));
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/plugins.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/bskit-scripts.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery.slicknav.js"></script>



<script type="text/javascript">
	$(document).ready(function() {
		$('.mobile-nav').slicknav();


		$('.slicknav_nav li a, .top-nav li a').on("click", function(e) {
			var t = $(this.hash);
			var t = t.length && t || $('[name=' + this.hash.slice(1) + ']');
			if (t.length) {
				var tOffset = t.offset().top;
				$('html,body').animate({
					scrollTop: tOffset - 60
				}, 'slow');
				e.preventDefault();
			}
		});



	});


	/* slick slider */

	(function($) {
		jQuery(document).ready(function($) {


			$('.slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				fade: false,
				speed: 1000,
				asNavFor: '.slider-nav-thumbnails',

			});

			$('.slider-nav-thumbnails').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				asNavFor: '.slider',
				dots: false,
				//	centerMode: true,
				focusOnSelect: true
			});


			//remove active class from all thumbnail slides
			$('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

			//set active class to first thumbnail slides
			$('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

			// On before slide change match active thumbnail to current slide
			$('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
				var mySlideNumber = nextSlide;
				$('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
				$('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
			});


		});
	})
</script>

<script>
	$(document).ready(function($) {

		$('#video1').click(function() {
			console.log('hiiii');
			$('#youtube2').attr('src', $('#youtube2').attr('src'));
			$('#youtube3').attr('src', $('#youtube3').attr('src'));
			$('#youtube4').attr('src', $('#youtube4').attr('src'));
		});
		$('#video2').click(function() {
			console.log('hiiii');
			$('#youtube1').attr('src', $('#youtube1').attr('src'));
			$('##youtube3').attr('src', $('#youtube3').attr('src'));
			$('##youtube4').attr('src', $('#youtube4').attr('src'));

		});
		$('#video3').click(function() {
			console.log('hiiii');
			$('#youtube1').attr('src', $('#youtube1').attr('src'));
			$('#youtube2').attr('src', $('#youtube2').attr('src'));
			$('#youtube4').attr('src', $('#youtube4').attr('src'));
		});

		$('#video4').click(function() {
			console.log('hiiii');
			$('#youtube1').attr('src', $('#youtube1').attr('src'));
			$('#youtube2').attr('src', $('#youtube2').attr('src'));
			$('#youtube3').attr('src', $('#youtube3').attr('src'));
		});



		$('.slick-prev, .slick-next').click(function() {
			//$('#youtube1').get(0).stopVideo();
			//$('#youtube2').get(0).stopVideo();
			//$('#youtube3').get(0).stopVideo();

			console.log('hiiii');
			$('#youtube1').attr('src', $('#youtube1').attr('src'));
			$('#youtube2').attr('src', $('#youtube2').attr('src'));
			$('#youtube3').attr('src', $('#youtube3').attr('src'));
			$('#youtube4').attr('src', $('#youtube4').attr('src'));

			// https://developers.google.com/youtube/iframe_api_reference
			/*
			// global variable for the player
			var player1;
			var player2;
			var player3;

			// this function gets called when API is ready to use
			function onYouTubePlayerAPIReady(){
			  // create the global player from the specific iframe (#video)
			  player1 = new YT.Player('youtube1', {
				events: {
				  // call this function when player is ready to use
				  'onReady': onPlayerReady
				}
			  });
			   player2 = new YT.Player('youtube2', {
				events: {
				  // call this function when player is ready to use
				  'onReady': onPlayerReady
				}
			  });
			   player3 = new YT.Player('youtube3', {
				events:{
				  // call this function when player is ready to use
				  'onReady': onPlayerReady
				}
			  });
			}

			function onPlayerReady(event) {

			  // bind events
			  var nextButton = document.getElementByClassName("slick-next");
			  nextButton.addEventListener("click", function() {
				  console.log('youtube click');
					if(player1.playVideo()==true){
						player1.pauseVideo();
					}
					else if(player2.playVideo()==true){
						player2.pauseVideo();
					}
					else if(player3.playVideo()==true){
						player3.pauseVideo();
					}
					else{
						return false;
					}
			  });

			var prevButton = document.getElementByClassName("slick-prev");
			  prevButton.addEventListener("click", function(){
				  console.log('youtube prev');
					if(player1.playVideo()==true){
						  player1.pauseVideo();
					}
					else if(player2.playVideo()==true){
						  player2.pauseVideo();
					}
					else if(player3.playVideo()==true){
						  player3.pauseVideo();
					}
					else{
						return false;
					}
			  });

			}
			*/
			//to stop player.stopVideo();

		});

		/* pause video when next and previous button clicked.
		$('.slick-prev, .slick-next').on('click', function(){

				console.log('clicked.....');
				 $('iframe').attr('src', $('iframe').attr('src'));

			});
			$('.slick-next').click(function(){
				console.log('hiiii');
		        $('iframe').attr('src', $('iframe').attr('src'));
		    });
		   */

	});
</script>

<?php include(TEMPLATEPATH . '/includes/navbar/script-navbar.php'); ?>

</body>

</html>
<!-- end of site. what a ride! -->