<div class="hero-image
<?php if(get_field('hero_video')){ echo 'video-bg'; } ?>
		" style="background-image:url(
		<?php
		if(get_field('hero_image')){
			echo get_field('hero_image');
		}else{
			echo get_the_post_thumbnail_url();
		} ?>
		)">
		<?php if(get_field('hero_video')){
			echo get_field('hero_video');
			?>
			<script src="https://player.vimeo.com/api/player.js"></script>
			<script>
			$( document ).ready(function() {
				var iframe = $('.video-bg iframe');
				var player = new Vimeo.Player(iframe);
				$(".video-bg-cover").click(function(e){
					console.log('hit video-bg-cover');
					$(".vid-hero-ctn").hide();
					$(this).hide();
					player.play();

				});
				$(".vid-hero-ctn").click(function(e){
					console.log('hit video-hero-ctn');
					$(".video-bg-cover").hide();
					$(this).hide();
					player.play();

				});
			});
			</script>
			<div class="video-bg-cover" style="background-image:url(<?php
		if(get_field('hero_image')){
			echo get_field('hero_image');
		}else{
			echo get_the_post_thumbnail_url();
		} ?>)">
		<span role="img" aria-label="<?php echo get_the_title()?>"> </span>
			</div>
		<?php
		}
		?>


</div>
<div class="container">
<div class="row">
	<div class="col-sm-12">
			<?php
			if(get_field('hero_team_member')):
				$team_member = get_field('hero_team_member');
			?>
			<div class="vid-hero-ctn vh-corner">
				<h1><?php echo get_field('hero_title') ?></h1>
				<h4 class="name-title"><?php echo get_field('first_name', $team_member); ?> <?php echo get_field('last_name', $team_member); ?> - <?php echo get_field('job_title', $team_member)['label'] ?></h4>

				<a href="#" class="cta-btn">
					<div class="cta-inner d-flex align-items-center">
						<span class="arrow_carrot-right text-white"></span><span class="btn-label">Play Now</span>
					</div>
				</a>
			</div>
			<?php
			elseif(get_field('hero_subtitle')):
			?>
			<div class="vid-hero-ctn vh-corner">
				<h1><?php echo get_field('hero_title') ?></h1>
				<h4><?php echo get_field('hero_subtitle')?></h4>
				<a href="#" class="cta-btn">
					<div class="cta-inner d-flex align-items-center">
						<span class="arrow_carrot-right text-white"></span><span class="btn-label">Play Now</span>
					</div>
				</a>
			</div>
			<?php
			else:
			?>
			<div class="vid-hero-ctn">
				<?php
					if(get_field('hero_title')){
						echo '<h1>'.get_field('hero_title').'</h1>';
					} 
					if(get_field('hero_subtitle')){
						echo '<h4>'.get_field('hero_subtitle').'</h4>';
					}
				?>

			</div>
		<?php endif; ?>
		</div>
	</div>
</div>