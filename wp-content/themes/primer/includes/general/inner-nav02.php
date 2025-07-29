<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="inner-nav-ctn">
				<div class="inner-nav02">
				<div class="gb-ctn">
					<a href="<?php echo site_url()?>/thought-leadership"><i class="fa fa-caret-left" aria-hidden="true"></i> Go Back</a>
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
						<a href="mailto:?subject=Read%20this%20Alvarez%20and%20Marsal%20TAG%20Article: <?php echo get_the_title();?>&body=<?php echo get_permalink() ?>" class="normal"><i class="far fa-envelope"></i></a>
		                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link ?>" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link ?>','popup','width=600,height=600'); return false;" ><i class="fab fa-facebook-f"></i></a>
		                <a href="https:////twitter.com/share?text=&url=<?php echo $actual_link ?>" target="popup" onclick="window.open('https:////twitter.com/share?text=&url=<?php echo $actual_link ?>','popup','width=600,height=600'); return false;" ><i class="fab fa-twitter"></i></a>
		                <a href="https:////www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link ?>" target="popup" onclick="window.open('https:////www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link ?>','popup','width=600,height=600'); return false;" ><i class="fab fa-linkedin-in"></i></a>
					</div>
			</div>
			</div>
		</div>
	</div>
</div>