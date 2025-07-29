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
<style>
		.trends-current a{border-bottom: 4px solid #00355F !important;}
	.sub-menu li a:link, .sub-menu li a {border-bottom: 0px !important;}
.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/background-trends.jpg");
	overflow: hidden;
height: 670px;
	background-position: center;
		background-attachment: scroll;
}
	p {
		color: #000;
	}
	#amtx-section-4 .content-block-1.tho-lead {
    margin-bottom: 0px;
	background-position: center bottom;
		background-repeat: no-repeat;
background-size: cover;
	background-attachment: scroll;
		padding-bottom: 200px;
}
	.tho-top-tl{
	overflow: hidden;
/*	background-position: center 352px;*/
}
@media only screen
and (min-width : 320px)
and (max-width : 480px) {
	
	#amtx-single-header .tho-top-tl {
background-position: center 0px;
	background-size: cover !important;
		height: 364px !important;
	}
	#amtx-section-6 {
	height: 120px;
	}
.amtx-back-trends h1 {
		margin: 130px 0px 240px 0px;
		font-size: 35px;
	}
	#section-7amtagtrends {
  margin: 190px 0px 0px 0px;
}
	.trends-logo {
		margin: 170px 0px 20px 0px;
    width: 42%;
}
	
	.s7-content-data {
		text-align: left;
	}
	#s7-content-excerpt {
		padding: 0px 20px 0px 0px;
		bottom: inherit !important;
	}
	.s7-content {
  height: 350px;
    padding: 10px 0px 10px 0px;
  
}
	
/**/
	}
	
</style>


</div>

<div id="amtx-single-header">
	<div class="container"><div class="row"><div class="col-xs-12">
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl"> 
 
</section>
</div></div></div>
</div>

<div id="amtx-section-6">
	<div class="container">
			 <center><img class="trends-logo" src="<?php bloginfo('template_directory'); ?>/images/logo-trends.png" border="0" /></center>
<div class="amtx-back-trends">
	<h1>Trends & Highlights</h1>
		</div>
	
			
<!--/-->
		</div>
<!--/amtx-section-3a-->
		</div>

<!--============================================================-->
<div id="trends"></div>
		<div id="section-7amtagtrends">
			<div class="container">		
<!--===-->
		
		<div class="s7-blog">	
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
'posts_per_page' => 5,
'paged' => $paged,
'post_type' => 'trends'
);
$cpt_query = new WP_Query($args);
?>
 
<?php if ($cpt_query->have_posts()) : while ($cpt_query->have_posts()) : $cpt_query->the_post();?>
			
		<div class="row">
			
			<div class="col-md-5">	
				<div id="s7-content-title">
		
						<a href="<?php the_field('external_link'); ?>" target="_blank">	<h3>
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
				
				<a href="<?php the_field('external_link'); ?>" target="_blank"><div id="s7-img" style="background-image:url('<?php the_field('home-thumb'); ?>');"></div></a>
		</div>
		
			<div class="col-md-7">		
				<div class="s7-content">
					<div class="s7-content-data"> 
						<?php the_time( get_option( 'date_format' ) ); ?><br>
						
	<?php if( get_field('trend_author1') ): ?>
 <span class="s7-author"><?php the_field('trend_author1'); ?></span> 
 <i><span class="s7-author" style="text-transform: none !important; color: #808080 !important; font-weight: 100;"><?php the_field('trend_author1-title'); ?></span></i>
<?php endif; ?>
					<br>
	
<?php if( get_field('trend_author2') ): ?>
 <span class="s7-author"><?php the_field('trend_author2'); ?></span> 
  <i><span class="s7-author" style="text-transform: none !important; color: #808080 !important; font-weight: 100;"><?php the_field('trend_author2-title'); ?></span></i>
<?php endif; ?>
                        <br>
                        <?php if( get_field('trend_author3') ): ?>
 <span class="s7-author"><?php the_field('trend_author3'); ?></span> 
  <i><span class="s7-author" style="text-transform: none !important; color: #808080 !important; font-weight: 100;"><?php the_field('trend_author3-title'); ?></span></i>
<?php endif; ?>
                        <br>
                        <?php if( get_field('trend_author4') ): ?>
 <span class="s7-author"><?php the_field('trend_author4'); ?></span> 
  <i><span class="s7-author" style="text-transform: none !important; color: #808080 !important; font-weight: 100;"><?php the_field('trend_author4-title'); ?></span></i>
<?php endif; ?>


					</div>
					

					<div id="s7-content-excerpt">
				<h1>	
					<?php $summary = get_field('excerpt');
         if ( strlen( $summary ) > 280 ) {
									echo substr( $summary, 0, 277 ) . '...';
								} else {
									echo $summary;
								}
								?>
			</h1>
						<a href="<?php the_field('external_link'); ?>" target="_blank"><div class="blog-btn">read more <span class="fa fa-chevron-right "></span></div></a>
		</div>
<!--/s7-content-excerpt-->
					

				</div>
				<!--/s7-content-->
		</div>
		</div>
	<?php endwhile; endif; ?>
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
    $('#os-pagination .navigation li a').each(function(i,a){$(a).attr('href',$(a).attr('href')+'#trends')});
});
</script>		
<?php get_footer(8); ?>
