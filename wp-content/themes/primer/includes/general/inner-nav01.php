<?php $actual_link = "https:////$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="inner-nav-ctn inner-nav01">
				<div class="gb-ctn">
					<a href="<?php echo site_url()?>/services"><i class="fa fa-caret-left" aria-hidden="true"></i> Back to Services</a>
				</div>
				<div class="sm-ctn">
	                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link ?>" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link ?>','popup','width=600,height=600'); return false;"><i class="fab fa-facebook-f"></i></a>
	                <a href="https:////twitter.com/share?text=&url=<?php echo $actual_link ?>" target="popup" onclick="window.open('https:////twitter.com/share?text=&url=<?php echo $actual_link ?>','popup','width=600,height=600'); return false;" ><i class="fab fa-twitter"></i></a>
	                <a href="https:////www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link ?>" target="popup" onclick="window.open('https:////www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link ?>','popup','width=600,height=600'); return false;" ><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>