<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="inner-nav-ctn">
				<div class="inner-nav02">
				<div class="gb-ctn">
					<a href="<?php echo site_url()?>/our-insights"><i class="fa fa-caret-left" aria-hidden="true"></i> Go Back</a>
				</div>
				<div class="postdata-ctn">
					<div class="pd-date">
						<p>Publish Date</p>
						<p class="bold"><?php echo get_the_date('M d, Y'); ?></p>
					</div>
				</div>
			</div>
			<div class="inner-nav02b">
					<div class="sm-ctn">
						<label>Share:</label>
						<a href="mailto:?subject=AM%20PEPI%20Insight&body=<?php echo get_permalink() ?>" target="_blank" class="normal"><i class="far fa-envelope"></i></a>
		                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
		                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
		                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
			</div>
			</div>
		</div>
	</div>
</div>