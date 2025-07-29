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
 * For more info: https://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(2); ?>
	<style>
		.events-current a{border-bottom: 4px solid #00355F !important;}
.bottomMenu .events-current a{border: none !important;}
			@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
	
	.events-current a{border-top: 4px solid #00355F !important;}
	
		}
		</style>
		
<div id="section-0" class="home-slider">
<div class="darkness"></div>
	
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
  <!-- Overlay -->
<!--  <div class="overlay"></div>-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
   <div class="carousel-inner">
   
  

    <div class="item slides active">
      
            <div class="slide-events-1"></div>
        <a href="<?php echo get_site_url(); ?>/events/re-energized-re-engaged-2017/"> 
      <div class="hero-2">
		  <h3 style="color:#000 !important;">recent events:</h3>
       <h2 style="color:#000 !important;">Re-Energized & Re-Engaged 2017</h2>
		  <p style="color:#000 !important;">September 26th, 2017  |  New York, NY</p>
	</div>
	   </a>
    
    </div>
<!---->
 
  <div class="item slides">
      <div class="slide-events-2"></div>
       <a href="<?php echo get_site_url(); ?>/events/am-nyc-back2business-1302017/"> 
      <div class="hero-2">
		  <h3 style="color:#000 !important;">recent events:</h3>
       <h2 style="color:#000 !important;">A&M NYC Back2Business 2017</h2>
		  <p style="color:#000 !important;">January 30th, 2017  |  New York, NY</p>
	</div>
	   </a>
    
    </div>
<!---->
 
   <div class="item slides">
   <div class="slide-events-3"></div>
  <a href="<?php echo get_site_url(); ?>/events/am-india-113016/"> 
      <div class="hero-2">
		  <h3 style="color:#000 !important;">recent events:</h3>
       <h2 style="color:#000 !important;">India Annual Private Equity Dinner </h2>
		  <p style="color:#000 !important;">November 30th, 2017  |  New York, NY</p>
	</div>
	   </a>
    
    </div>
<!---->
</div>
  <a class="left carousel-control" href=".carousel" role="button" data-slide="prev"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.png" border="0" /></span>
 </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.png" border="0" /></span>
 </a>
</div>


</div>	

<!--======================================-->	
<div id="section-filter" class="row">
<div id="news-top"></div>
<!--
			<div class="filter-table">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="123px" align="center" valign="middle">FILTER BY:</td>
      <td width="140px" align="left" valign="middle"> 
   <select>
    <option value="" disabled="disabled" selected="selected">Region</option>
    <option value="1"> North America</option>
    <option value="2"> United Kingdom</option>
    <option value="3">Europe</option>
    <option value="4"> Latin America</option>
    <option value="5">Asia</option>
    <option value="6">  India</option>
</select>
     </td>
      <td width="140px" align="left" valign="middle">
      <select>
    <option value="" disabled="disabled" selected="selected">Year</option>
    <option value="1">2016</option>
    <option value="2">2017</option>   
</select></td>
		<td width="105px" align="left" valign="top">
			<a href="#">APPLY</a>
			
		</td>
    </tr>
  </tbody>
</table>
		</div>
-->

<div class="divider-blue"></div>

</div>
	<!--======================================-->	

					
	<div class="col-md-12 section-white">				
<div id="section-4" class="row">
<h2 class="inner">All events:</h2>
	<p class="landing">Join us for one of our upcoming events, or view past events A&M TAG hosted.</p>
	<div class="pagination-top"><?php bones_page_navi(); ?></div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-sm-6 col-md-4">
	<div class="news-block-events">
		<a href="<?php echo get_permalink($_post->ID);?>"><div class="news-block-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
		<div class="date"><?php echo get_the_date(); ?> / <?php $postcategory = get_the_category(); if ($postcategory) {foreach($postcategory as $category) {echo $category->name . ' ';}} ?>
		</div>
<a href="<?php echo get_permalink($_post->ID);?>"><h3><?php the_field('header-title'); ?></h3></a>
		<p><?php the_field('home-excerpt'); ?><a class="excerpt" href="<?php echo get_permalink($_post->ID);?>"> Read More <i class="fas fa-caret-right"></i> </a></p>
	</div>
	</div>

<!--/-->


		<?php endwhile; ?>
</div>
<!--/section-4-->
</div>
		
<div class="pagination-bottom"><?php bones_page_navi(); ?></div>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

<!--set pagination anchors below carousel-->
				<script type="text/javascript">
$(document).ready(function() {
    $('.pagination li a').each(function(i,a){$(a).attr('href',$(a).attr('href')+'#news-top')});
});
</script>		


<?php get_footer(8); ?>
