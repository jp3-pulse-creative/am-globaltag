<?php
$related_insights = get_field('related_insights');
if($related_insights){?>
<div class="container">
<div class="row">
	<div class="col-sm-12">
		<h1 class="section-title">Related Insights</h1>
		<div class="short-border"></div>
	</div>
<?php
	foreach($related_insights as $insight){
?>	

  <div class="col-sm-6 col-md-4">
    <div class="insight-block">
        <a href="<?php echo get_permalink($insight)?>"><div class="insight-img" style="background-image:url(<?php echo get_the_post_thumbnail_url($insight,'post-thumbnail'); ?>)"><span role="img" aria-label="<?php echo get_the_title($insight) ?>"> </span></div></a>
        <a href="<?php echo get_permalink($insight)?>"><h3><?php echo mb_strimwidth(get_the_title($insight), 0, 50, '...'); ?></h3></a>
        <div class="short-border"></div>
    </div>
 </div>
<?php
	}?>
</div>
</div>
	<?php
}?>