<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(2); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/trends.css"/>
<div id="section-5" class="page-headers">
	<h1><span class="whitey">OSTEO</span>BLOG</h1>
</div>

<!--======================================-->	

<div id="section-6">
			<div class="container">
	<div class="col-md-12">
		<div class="s6-title">
			<h2><span class="black">Lifestyle</span>Strong</h2>
			<div id="osteostrong"></div>
		<h3>	At OsteoStrong, it doesn’t end with strengthening your skeletal system. It’s about improving on your lifestyle. Read more about how you can live the Bonehead life.  </h3>
		</div>
				</div>
	</div>
</div>
<!--/section-6-->
	<!--======================================-->	

		<div id="section-7">
			<div class="container">
	<div class="col-md-12">			
<!--===-->
		
		<div class="s7-blog">	
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
'posts_per_page' => 10,
'paged' => $paged,
'post_type' => 'blog'
);
$cpt_query = new WP_Query($args);
?>
 
<?php if ($cpt_query->have_posts()) : while ($cpt_query->have_posts()) : $cpt_query->the_post();?>
			
		<div class="row">
			
			<div class="col-md-5">		
				<a href="<?php echo get_permalink( $post->ID ); ?>"><div id="s7-img" style="background-image:url('<?php the_field('home-thumb'); ?>');"></div></a>
		</div>
		
			<div class="col-md-7">		
				<div class="s7-content">
					<div class="s7-content-data">
						by <span class="s7-author"><?php echo get_the_author_meta('display_name', $author_id); ?></span> l 
						<?php the_time( get_option( 'date_format' ) ); ?>
					</div>
					
					
					
					<div id="s7-content-title">
		
						<a href="<?php echo get_permalink( $post->ID ); ?>">	<h3>
								<?php
								$post_title = get_the_title();
								if ( strlen( $post_title ) > 57 ) {
									echo substr( $post_title, 0, 54 ) . '...';
								} else {
									echo $post_title;
								}
								?>
							</h3>
						</a>
		</div>
					<!--/s7-content-title-->
					
					<div id="s7-content-excerpt">
				<p>	
					<?php $summary = get_field('excerpt');
         if ( strlen( $summary ) > 280 ) {
									echo substr( $summary, 0, 277 ) . '...';
								} else {
									echo $summary;
								}
								?>
			</p>
		</div>
<!--/s7-content-excerpt-->
					
<a href="<?php echo get_permalink( $post->ID ); ?>"><div class="blog-btn">read more</div></a>

				</div>
				<!--/s7-content-->
		</div>
		</div>
	<?php endwhile; endif; ?>
		</div>
<!--s7-blog-->
		
<!--===-->		

	</div>
	</div>
			<div id="os-pagination">
<?php bones_paging_nav(); ?>
			</div>	
</div>
<!--/section-7-->
	<!--======================================-->	

<!--set pagination anchors-->
				<script type="text/javascript">
$(document).ready(function() {
    $('#os-pagination .navigation li a').each(function(i,a){$(a).attr('href',$(a).attr('href')+'#osteostrong')});
});
</script>		
<?php get_footer(8); ?>
