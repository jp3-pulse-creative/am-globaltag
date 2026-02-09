<div class="container-fluid animate__animated animate__fadeIn">
	<div class="row">
		<div class="col hero-container px-0">
			<style>
				#homeSliderBS blockquote p {
					font-size: 24px;
				}

				#homeSliderBS blockquote figcaption {
					font-size: 15px;
				}

				@media (min-width: 992px) {
					#homeSliderBS blockquote p {
						font-size: 34px;
					}

					#homeSliderBS blockquote figcaption {
						font-size: 22px;
					}
				}
			</style>
			<div id="homeSliderBS" class="carousel slide carousel-fade" data-ride="false" data-interval="false">
				<div class="carousel-arrows-mobile d-md-none"><a class="carousel-control-prev position-static"
						href="#homeSliderBS" role="button" data-slide="prev"><svg xmlns="http://www.w3.org/2000/svg"
							width="31.467" height="59.933" viewBox="0 0 31.467 59.933">
							<path id="Slider_arrow_right" data-name="Slider arrow left"
								d="M35.345,63.19,7.5,35.345,35.345,7.5" transform="translate(-6 -5.379)" fill="none"
								stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
						</svg><span class="sr-only">Previous</span></a><a class="carousel-control-next position-static"
						href="#homeSliderBS" role="button" data-slide="next"><svg xmlns="http://www.w3.org/2000/svg"
							width="31.467" height="59.933" viewBox="0 0 31.467 59.933">
							<path id="Slider_arrow_left" data-name="Path 2428" d="M7.5,63.19,35.345,35.345,7.5,7.5"
								transform="translate(-5.379 -5.379)" fill="none" stroke="#ffffff" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="3" />
						</svg><span class="sr-only">Next</span></a>
				</div>
				<div class="controls mx-0 d-flex justify-content-start align-items-center">
					<ol id="hero-indicators" class="carousel-indicators position-static justify-content-start">
						<li data-target="#homeSliderBS" data-slide-to="0" class="active mx-0 w-100" style="flex: auto;"></li>
						<li data-target="#homeSliderBS" data-slide-to="1" class="mx-0 w-100" style="flex: auto;"></li>
						<li data-target="#homeSliderBS" data-slide-to="3" class="mx-0 w-100" style="flex: auto;"></li>

					</ol>
					<div class="carousel-arrows d-none d-md-block"><a class="carousel-control-prev position-static"
							href="#homeSliderBS" role="button" data-slide="prev"><svg xmlns="http://www.w3.org/2000/svg"
								width="31.467" height="59.933" viewBox="0 0 31.467 59.933">
								<path id="Slider_arrow_right" data-name="Slider arrow left"
									d="M35.345,63.19,7.5,35.345,35.345,7.5" transform="translate(-6 -5.379)" fill="none"
									stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
							</svg><span class="sr-only">Previous</span></a><a
							class="carousel-control-next position-static" href="#homeSliderBS" role="button"
							data-slide="next"><svg xmlns="http://www.w3.org/2000/svg" width="31.467" height="59.933"
								viewBox="0 0 31.467 59.933">
								<path id="Slider_arrow_left" data-name="Path 2428" d="M7.5,63.19,35.345,35.345,7.5,7.5"
									transform="translate(-5.379 -5.379)" fill="none" stroke="#ffffff"
									stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
							</svg><span
								class="sr-only">Next</span></a></div>
				</div>
				<style>
					#homepage #homeSliderBS .carousel-item.carousel-item--1 .hero-s-text span.post-type-category {
						padding: .25rem .5rem;
						font-size: 14px;
						line-height: 19px;
						margin-bottom: 2.5rem;
						max-width: 80%;
					}

					#homeSliderBS .carousel-item.carousel-item--1 .hero-s-text span.post-type-category::after {
						bottom: -1rem;

					}

					#homeSliderBS .carousel-item.carousel-item--1 .hero-s-text h3 {
						font-size: 1.75rem;
					}

					/* #homepage #homeSliderBS .carousel-item.carousel-item--1 .hero-s-text .h1-wrap {
height: 205px;
}
#homepage #homeSliderBS .carousel-item.carousel-item--1.v2 .hero-s-text .h1-wrap {
height: 337px;
} */
					@media (min-width: 768px) {
						#homepage #homeSliderBS .carousel-item.carousel-item--1 {

							background-position: right center !important;

						}

						/* #homepage	#homeSliderBS .carousel-item.carousel-item--1.v2 .hero-s-text .h1-wrap {
height: 210px;
} */

					}

					@media (min-width: 992px) {
						#homeSliderBS .carousel-item.carousel-item--1 .hero-s-text span.post-type-category {
							font-size: 16px;
							line-height: 2rem;
						}

						#homeSliderBS .carousel-item.carousel-item--1 .hero-s-text h3 {
							font-size: 2rem;
						}
					}

					/* @media (min-width: 1024px) {
#homepage	#homeSliderBS .carousel-item.carousel-item--1.v2 .hero-s-text .h1-wrap {
height: 225px;
}
}
@media (min-width: 1200px) {
#homepage	#homeSliderBS .carousel-item.carousel-item--1.v2 .hero-s-text .h1-wrap {
height: 257px;
}
} */
				</style>
				<style>
					/* Hero overlay that fades with preloader - scoped to homepage carousel only */
					#homepage #homeSliderBS .carousel-item:first-child::before {
						content: '';
						position: absolute;
						top: 0;
						left: 0;
						right: 0;
						bottom: 0;
						background-color: #002b49;
						z-index: 1;
						opacity: 1;
						transition: opacity 1000ms ease-in-out 800ms;
					}

					#homepage #homeSliderBS .carousel-item:first-child.fade-overlay::before {
						opacity: 0;
					}

					#homepage #homeSliderBS .carousel-item:first-child .container {
						position: relative;
						z-index: 2;
					}

					#homepage #homeSliderBS .carousel-item:first-child .row .loading-spinner {
						margin-top: 2rem;
						opacity: 1;
						transition: opacity 800ms ease-in-out;
					}

					#homepage #homeSliderBS .carousel-item:first-child.fade-overlay .row .loading-spinner {
						opacity: 0;
					}
				</style>
				<div class="carousel-inner">


					<div class="carousel-item d-block active gradient-2"
						style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/reboot/home/am-globaltag-0.jpg);">
						<span role="img" aria-label="Global Transaction Advisory"></span>
						<div class="container h-100">
							<div class="row h-100 align-items-center justify-content-center flex-column">
								<img
									class="d-none d-lg-block"
									src="<?php echo get_template_directory_uri(); ?>/images/reboot/home/A&MTAG_20thLogo_01.svg" width="325" style="max-width: 325px;"
									border="0">
								<img class="d-lg-none img-fluid" style="max-width: 250px;"
									src="<?php echo get_template_directory_uri(); ?>/images/reboot/home/A&MTAG_20thLogo_01.svg"
									border="0">
								<div class="loading-spinner">
									<div class="spinner-border text-white" role="status">
										<span class="sr-only">Loading...</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item d-block gradient-2"
						style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/home/am-globaltag-1.jpeg);">
						<span role="img" aria-label="Global Transaction Advisory"></span>
						<div class="container h-100">
							<div class="row h-100 align-items-center justify-content-center">
								<img
									class="d-none d-lg-block"
									src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/home/am-globaltag-heading.svg" width="814"
									border="0">
								<img class="d-lg-none"
									src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/home/am-globaltag-heading-mobile.svg"
									border="0">
							</div>
						</div>
					</div>
					<div class="carousel-item d-block gradient-2"
						style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-globaltag-home-hero-1-bg.jpeg);">
						<span role="img" aria-label="Global Transaction Advisory"></span>
						<div class="container h-100">
							<div class="row h-100 align-items-center justify-content-center"><img
									src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/home-hero-its-how-we-hire-and-who-we-hire-that-delivers-results.svg"
									width="580" alt=""></div>
						</div>
					</div>




				</div>
			</div>
		</div>
	</div>
</div>