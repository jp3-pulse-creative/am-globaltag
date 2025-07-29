<div class="container ">
	<div class="row team-lead-row">
		<div class="col">

<?php if( have_rows('team_lead') ): ?>
    <?php while( have_rows('team_lead') ): the_row();

        // Get sub field values.
        $quote = get_sub_field('team_lead_quote');
        $team_member = get_sub_field('team_member');
        $image = get_sub_field('team_lead_image');
        $special_title = get_sub_field('special_title');
        ?>
        <div class="tl-col-ctn">
			<div class="tl-col-img">
				<div class="img-ctn" style="background-image:url(<?php echo $image ?>)">
					<?php if($quote): ?>
					<div class="tl-quotebox">
						<p><?php echo $quote ?></p>
						<div class="short-border"></div>
					</div>
					<?php endif;?>
				</div>
			</div>
			<div class="tl-col-text">
				<div class="meet-team">
					<div class="meet-info">
						<h1 class="section-title"><?php echo get_field('first_name', $team_member) ?> <?php echo get_field('last_name', $team_member)?></h1>
						<div class="short-border"></div>
						<?php if($special_title): ?>
							<p><?php echo $special_title ?></p>
						<?php endif; ?>
						<p><?php $job_title = get_field('job_title', $team_member); echo $job_title['label'] ?></p>
						<p><a href="mailto:<?php echo get_field('email', $team_member)?>"><?php echo get_field('email', $team_member)?></a></p>
					</div>
					<div class="meet-link">
						<h3>Meet Our <br class="desktop-only"/>Practice Leader</h3>
						<a class="spaced-text" href="<?php echo get_field('profile_url', $team_member)?>" target="_blank">LEARN MORE <i class="fas fa-caret-right"></i></a>
					</div>
				</div>
			</div>
		</div>
    <?php endwhile; ?>
<?php endif; ?>
		</div>
	</div>
</div>