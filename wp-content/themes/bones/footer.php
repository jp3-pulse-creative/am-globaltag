<section class="comment-footer footer-wrap-1-2" wp-cz-section="blocks_footer_1_2" wp-cz-section-title="Footer 1-2">
	<div class="container footer-1-2">
		<div class="big-social">
			2016 A&amp;M Transaction Advisory Group
		</div>
	</div>
	<!-- /.container -->
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
	})(jQuery);
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

<?php get_template_part('/includes/navbar/script-navbar.php'); ?>

</body>

</html>
<!-- end of site. what a ride! -->