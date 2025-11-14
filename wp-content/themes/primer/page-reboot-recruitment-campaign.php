<?php
/*
 Template Name: Reboot: Recruitment Campaign
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<style>

	#amtx-section-6e {
		margin-bottom: 0;
		padding-bottom: 100px;
		padding-top: 100px;
	}
	#amtax-careers .container {
		background-color: #0084C7;
	}

	#amtax-careers .content-left h2 {
		color: #fff;
	}

	#amtax-careers .content-left .short-border {
		background: #fff;
	}

	#amtax-careers .content-left p {
		color: #fff;
	}

	/* Video Modal Styles */
	.campaign-video-modal {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 999999;
		background: rgba(0, 0, 0, 0.9);
	}

	.modal-overlay {
		display: flex;
		align-items: center;
		justify-content: center;
		width: 100%;
		height: 100%;
		padding: 20px;
		position: relative;
	}

	.modal-content {
		position: relative;
		width: 70%;
		max-width: 900px;
		background: #000;
		border-radius: 8px;
		overflow: hidden;
	}

	.modal-close {
		position: absolute;
		top: 20px;
		right: 20px;
		background: rgba(0, 0, 0, 0.7);
		border: none;
		color: white;
		width: 50px;
		height: 50px;
		border-radius: 50%;
		cursor: pointer;
		z-index: 10000;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: background-color 0.3s ease, transform 0.2s ease;
	}

	.modal-close:hover {
		background: rgba(0, 0, 0, 0.9);
		transform: scale(1.1);
	}

	.modal-close svg {
		width: 24px;
		height: 24px;
	}

	.video-container {
		position: relative;
		width: 100%;
		height: 0;
		padding-bottom: 56.25%; /* 16:9 aspect ratio */
		padding-top: 0;
	}

	.video-container iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

	/* Responsive adjustments */
	@media (max-width: 768px) {
		.modal-content {
			width: 85%;
		}
		
		.modal-close {
			top: 15px;
			right: 15px;
			width: 45px;
			height: 45px;
		}
		
		.modal-close svg {
			width: 22px;
			height: 22px;
		}
	}

	@media (max-width: 990px) {
		#amtx-section-6e {
			padding-bottom: 70px;
			padding-top: 70px;
		}
	}
</style>

<div class="hero-row">
	<div class="row">
		<div class="col-sm-12">
			<div class="hero-image"
				style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/recruitment-campaign/recruitment-campaign-hero.jpg), linear-gradient(to right, rgba(0,0,0,.38)38%,rgba(0,0,0,0)100% ); background-blend-mode: multiply;">
				<h1>The People Behind A&M’s Global Impact</h1>
			</div>
		</div>
	</div>
</div>

<div class="pepi-row pepi-row__mt">
	<div class="container">
		<div class="row">
			<div class="col-md-3 pl-md-0 mb-md-0">
				<h2 class="section-title">Our Leaders. <br>Our Vision. <br>Our Future.</h2>
				<div class="short-border"></div>
			</div>
			<div class="col-md-9 pr-md-0 pl-md-5">
				<p class="mt-2">Welcome to our new series, “Why A&M,” where we delve into the stories and perspectives that make Alvarez & Marsal (A&M) a truly distinctive professional services firm. Through the voices of Managing Directors from our Global Transaction Advisory Group and Corporate Transactions Group, we explore their unique journeys to A&M, the values that shape our culture, and how our entrepreneurial spirit sets us apart. Discover why A&M is more than a workplace—it’s a community committed to client success and personal career growth.</p>
			</div>
		</div>
	</div>
</div>

<div id="amtx-section-6e" class="pepi-row" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/recruitment-campaign/recruitment-campaign-bg.jpg); background-size: 100% auto; background-position: bottom; background-repeat: no-repeat; background-color: #fff">
	<div class="container">
		<div class="row">
			<?php
			// Custom query for recruitment campaigns
			$recruitment_campaigns = new WP_Query(array(
				'post_type' => 'recruitmentcampaigns',
				'posts_per_page' => -1, // Get all posts
				'post_status' => 'publish'
			));

			if ($recruitment_campaigns->have_posts()) :
				while ($recruitment_campaigns->have_posts()) : $recruitment_campaigns->the_post();
				$recruitment_campaign_fields = get_field('recruitment_campaign_fields');
				$excerpt = $recruitment_campaign_fields['excerpt'];
				$video_embed = $recruitment_campaign_fields['video_embed']; ?>
				<div class="col-md-6 pl-md-0 mb-4 mb-md-0">
					<div class="recruitment-campaign-item" style="background-color: #fff; height: 100%; display: flex; flex-direction: column;">
						<?php if (has_post_thumbnail()) : ?>
							<div class="campaign-thumbnail mb-3">
								<?php the_post_thumbnail('medium', array('class' => 'img-fluid w-100')); ?>
							</div>
						<?php endif; ?>
						
						<div class="campaign-content p-5" style="height: 100%; display: flex; flex-direction: row; flex-wrap: wrap;">
							<div>
								<h2 class="section-title mb-3"><?php the_title(); ?></h2>
								<div class="short-border"></div>
							</div>
							<?php if ($excerpt) : ?>
								<p class="mt-3 mb-4"><?php echo $excerpt; ?></p>
							<?php endif; ?>

							<!-- click here -->
							<a href="#" class="cta-btn watch-video-trigger mt-4" data-video-id="<?php echo get_the_ID(); ?>" style="align-self: flex-end; margin-top: auto;">
								<div class="cta-inner d-flex align-items-center">
									<span class="arrow_carrot-right"></span>
									<span class="btn-label amblue">Watch Video</span>
								</div>
							</a>
						</div>
					</div>
					
					<!-- fixed screen take over video modal -->
					<div class="campaign-video-modal" id="video-modal-<?php echo get_the_ID(); ?>" style="display: none;">
						<div class="modal-overlay">
							<button class="modal-close" aria-label="Close modal">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</button>
							<div class="modal-content">
								<?php if ($video_embed) : ?>
									<div class="video-container">
										<?php echo $video_embed; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php
				endwhile;
				wp_reset_postdata();
			else :
			?>
				<div class="col-md-12">
					<p>No recruitment campaigns found.</p>
				</div>
			<?php endif; ?>

		</div>
	</div>
	<div id="g-markets"></div>
</div>

<div id="amtax-careers" class="pepi-row pepi-row__mt">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			
			<div class="col-lg-7 p-5 forty-two content-left">
				<h2 class="section-title mt-mn-lg-3">Careers</h2>
				<div class="short-border"></div>
				<p>Contact us today to learn more about how our team can provide tailored SPA services to help you achieve your transaction objectives.</p>
				<a href="https://am-globaltag.com/join-us/" target="_blank" class="cta-btn mt-4">
					<div class="cta-inner cta-inner--white d-flex align-items-center"><span
							class="arrow_carrot-right"></span><span class="btn-label">Join Our Team</span>
					</div>
				</a>
			</div>

			<div class="col-lg-5 px-md-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/recruitment-campaign/careers.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
				<img src="<?php bloginfo('template_url'); ?>/library/images/reboot/recruitment-campaign/careers.jpg" alt="Careers at Alvarez & Marsal"
					class="img-fluid w-100 scale-120" style="visibility: hidden;" />
			</div>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	// Get all watch video triggers
	const videoTriggers = document.querySelectorAll('.watch-video-trigger');
	
	videoTriggers.forEach(function(trigger) {
		trigger.addEventListener('click', function(e) {
			e.preventDefault();
			
			const videoId = this.getAttribute('data-video-id');
			const modal = document.getElementById('video-modal-' + videoId);
			
			if (modal) {
				modal.style.display = 'block';
				document.body.style.overflow = 'hidden'; // Prevent background scrolling
				
				// Auto-play Vimeo video
				const iframe = modal.querySelector('iframe');
				if (iframe && iframe.src.includes('vimeo.com')) {
					// Add autoplay parameter to Vimeo iframe
					let src = iframe.src;
					if (src.includes('?')) {
						src += '&autoplay=1';
					} else {
						src += '?autoplay=1';
					}
					iframe.src = src;
				}
			}
		});
	});
	
	// Get all modal close buttons
	const closeButtons = document.querySelectorAll('.modal-close');
	
	closeButtons.forEach(function(button) {
		button.addEventListener('click', function() {
			const modal = this.closest('.campaign-video-modal');
			if (modal) {
				modal.style.display = 'none';
				document.body.style.overflow = 'auto'; // Restore scrolling
				
				// Stop Vimeo video playback
				const iframe = modal.querySelector('iframe');
				if (iframe && iframe.src.includes('vimeo.com')) {
					// Remove autoplay parameter and reload iframe to stop video
					let src = iframe.src;
					src = src.replace(/[?&]autoplay=1/g, '');
					iframe.src = '';
					setTimeout(() => {
						iframe.src = src;
					}, 100);
				} else if (iframe) {
					// Fallback for other video types
					const src = iframe.src;
					iframe.src = '';
					iframe.src = src;
				}
			}
		});
	});
});
</script>

<?php get_footer(); ?>