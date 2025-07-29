<div class="container">
	<div class="row team-lead-row">
		<div class="col-lg-9 col-md-8">
			<div class="img-ctn" style="background-image:url(<?php echo get_field('team_lead_image'); ?>)"><span role="img" aria-label="Our Team Leader"> </span>
			</div>
		</div>
		<div class="col-lg-3 col-md-4">
			<div class="meet-team">
				<div class="meet-info">
					<h3>Meet Our<br/>Team Lead</h3>
					<h2><?php echo get_field('team_lead'); ?></h2>
					<h2 class="italic"><?php echo get_field('team_lead_title')?></h2>
					<a href="mailto:<?php echo get_field('team_lead_email');?>"><?php echo get_field('team_lead_email');?></a>
				</div>
				<div class="meet-link">
					<a href="<?php echo get_field('team_lead_link');?>" target="_blank"><?php echo get_field('link_text') ?> <i class="fas fa-caret-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>