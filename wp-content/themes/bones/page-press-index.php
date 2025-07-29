<?php
/*
 Template Name: Press Index
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: https://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(2); ?>
		
<div id="section-0" class="home-slider">
	
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
      
      <div class="slide-news-1"></div>
        <a href="<?php echo get_site_url(); ?>/news/governments-challenge-after-demonetisation-keeping-unaccounted-money-handlers-at-bay/"> 
      <div class="hero-2">
		  <h3>recent press:</h3>
       <h2>Government's challenge after demonetisation: Keeping unaccounted money handlers at bay</h2>
		  <p>February 9th, 2017  |  New York, NY</p>
	</div>
	   </a>
    
    </div>
<!---->
 
  <div class="item slides">
       <div class="slide-news-2"></div>
        <a href="<?php echo get_site_url(); ?>/news/global-regulation-clouded-after-trump-and-brexit/"> 
      <div class="hero-2">
		  <h3>recent press:</h3>
       <h2>Global regulation clouded after Trump and Brexit </h2>
		  <p>February 9th, 2017  |  New York, NY</p>
	</div>
	   </a>
    
    </div>s
<!---->
 
   <div class="item slides">
    <div class="slide-news-3"></div>
  <a href="<?php echo get_site_url(); ?>/news/icici-bank-registers-the-first-case-under-the-bankruptcy-code/"> 
      <div class="hero-2">
		  <h3>recent press:</h3>
       <h2>ICICI Bank registers the first case under the bankruptcy code</h2>
		  <p>February 9th, 2017  |  New York, NY</p>
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
		
		
<!--======================================-->	
		
		<div id="section-filter" class="row">
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

<div class="divider-blue"></div>
		
		
</div>
	
<!--=========================================-->
		

			
	<div class="col-md-12 section-white">				
<div id="section-4" class="row">
	<h2 class="inner">LATEST PRESS:</h2>
		<p class="landing">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<?php $loop = new WP_Query( array( 'post_type' => 'press', 'posts_per_page' => -9999 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="col-sm-6 col-md-4">
	<div class="news-block-2">
		<a href="<?php echo get_permalink($_post->ID);?>"><div class="news-block-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
		<div class="date"><?php echo get_the_date(); ?> / <?php $postcategory = get_the_category(); if ($postcategory) {foreach($postcategory as $category) {echo $category->name . ' ';}} ?>
		</div>
<a href="<?php echo get_permalink($_post->ID);?>"><h3><?php the_field('header-title'); ?></h3></a>
		<p><?php the_field('home-excerpt'); ?><a class="excerpt" href="<?php echo get_permalink($_post->ID);?>"> [...]</a></p>
	</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
<!--/-->
	
</div>
<!--/section-4-->
</div>
		<!--======================================-->		
	
	
<?php get_footer(8); ?>
