<?php
$related_insights = get_field('related_insights');
if($related_insights){ ?>

<div class="pepi-row tall-row">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3>RELATED INSIGHTS</h3>
		</div>
<?php
	foreach($related_insights as $insight){
?>			
		<div class="col-md-4">
			<div class="related-insight">	
				<a href="<?php echo get_permalink($insight)?>"><div class="ri-img" style="background-image:url(<?php echo get_the_post_thumbnail_url($insight,'post-thumbnail'); ?>)">
				</div></a>
				<div class="ri-text">
					<a href="<?php echo get_permalink($insight)?>"><?php echo mb_strimwidth(get_the_title($insight), 0, 65, '...'); ?></a>
				</div>
			</div>
		</div>
<?php
	}
?>
	</div>
</div>
</div>
	<?php
}
?>