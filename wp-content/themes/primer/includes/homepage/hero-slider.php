<div class="container">
	<div class="row">
	<div class="col">
		<div id="home-hero" class="hero-slider">
			<div class="hero-slide" data-index="0">
				<iframe mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" src="https://player.vimeo.com/video/473182391?"  width="1024" height="768" frameborder="0"></iframe>
				<div class="video-bg-cover" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/pepi-slide01.jpg);"><span role="img" aria-label="We Create Value"> </span></div>
				<div class="hero-s-text">
					<h1 class="bigger">Value creation is what we do</h1>
					<h4>We are a passionate & experienced team that is focused on unlocking value within the investment portfolio of our private equity clients.</h4>
				</div>

			</div>
			<div class="hero-slide" data-index="1">
				<iframe mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" src="https://player.vimeo.com/video/465569604?"  width="1024" height="768" frameborder="0"></iframe>
				<div class="video-bg-cover" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/pepi-slide02.jpg);"><span role="img" aria-label="We Are Hands On"> </span></div>
				<div class="hero-s-text">
					<h1 class="bigger">On the ground With pepi</h1>
					<h4>At A&M, we bring a collaborative approach with an operational edge to every engagement.</h4>
				</div>

			</div>
			<div class="hero-slide"data-index="2">
				<iframe mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" src="https://player.vimeo.com/video/519165415?"  width="1024" height="768" frameborder="0"></iframe>
				<div class="video-bg-cover" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/pepi-slide03.jpg);"><span role="img" aria-label="Like what you do and who you do it with."> </span></div>
				<div class="hero-s-text">
					<h1 class="bigger">Why PEPI?</h1>
					<h4>We couple industry expertise with a heritage of operational excellence to deliver best-in-class results for our clients. We are a team that likes what we do & who we do it with.</h4>
				</div>

			</div>
	</div>
				<div class="hero-slide-ind slide-ind">
					<ul>
						<li data-index="0" class="active"></li>
						<li data-index="1"></li>
						<li data-index="2"></li>
					</ul>
				</div>
	</div>
</div>
</div>

<script src="https://player.vimeo.com/api/player.js"></script>
<script>
$( document ).ready(function() {
    $(".hero-slide-ind li").click(function(){
    	var index = $(this).index();
    	$(".hero-slide-ind li").removeClass("active");
    	$(this).addClass("active");
    	$(".hero-slider").slick('slickGoTo', parseInt(index));

		pauseIframes();
    	
    });
    $(".hero-slide .video-bg-cover").click(function(){
    	console.log('video-bg-cover');
		pauseIframes();
		playIframe(this);
    });
    $(".hero-slide .hero-s-text").click(function(){
    	console.log('hero-s-text');
		pauseIframes();
		playIframe(this);
    });
	    // On before slide change
	$('.hero-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	  	var target = nextSlide;
	  	console.log(target);
		$( ".hero-slide-ind li" ).each(function() {
			console.log(this);
		  if($(this).data('index') == target){
		  	$(this).addClass('active');
		  }else{
		  	$(this).removeClass('active');
		  }
		});

		pauseIframes();
	});
});
</script>