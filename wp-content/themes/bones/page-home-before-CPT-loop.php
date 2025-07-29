<?php
/*
 Template Name: Home Devel
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(2); ?>

<div id="section-1" class="home-slider">
	
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
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
       <img src="<?php bloginfo('template_directory'); ?>/images/slider-1-tag.png" border="0" />
        </hgroup>
      
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
             <img src="<?php bloginfo('template_directory'); ?>/images/slider-1-tag.png" border="0" />
        </hgroup>       
     
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
          <img src="<?php bloginfo('template_directory'); ?>/images/slider-1-tag.png" border="0" />
        </hgroup>
       
      </div>
    </div>
  </div> 
</div>
	
</div>
<!--/section-1-->
			<!--======================================-->
				
	<div id="section-2" class="home-content">
	
	<span class="home-content-title">Transaction Advisory Group:</span>
	
		<div class="two-col-para">
			
			A&M provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues.<br><br>
			
	A&M provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues.
		</div>
		<!--/-->
		
		
		
	
</div>
<!--/section-2-->
<!--======================================-->
			
				
<div id="section-3" class="home-learn-more">
	<p>LEARN MORE ABOUT ALVAREZ & MARSAL GLOBAL <span class="fa fa-chevron-right"></span></p>
	
	
</div>
<!--/section-3-->	
		<!--======================================-->	
			
	<div class="col-md-12 section-grey">				
<div id="section-4" class="home-latest-news row">
	<h2>LATEST NEWS / PRESS:</h2>

	<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->

<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-2.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->

<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-3.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->

<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-4.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->

<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-5.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->

<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-6.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->
	
	
</div>
<!--/section-4-->
</div>
		<!--======================================-->		
			<?php $loop = new WP_Query( array( 'post_type' => 'yourposttypehere', 'posts_per_page' => -3 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
The stuff you want to loop goes in here
<?php endwhile; wp_reset_query(); ?>
		
		
		
		
			
			<div class="col-md-12 section-white">	
	<div id="section-5" class="home-thought-leadership row">
	<h2>Thought leadership:</h2>
		<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->

<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->

<div class="col-md-4">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>
<!--/-->
	
	
</div>
</div>
<!--/section-5-->
	<!--======================================-->				
<!--
		<div class="col-md-12 section-grey">	
		<div id="section-6" class="home-social">
		<h2>LeTS GET SOCIAL:</h2>
		
		<div class="col-md-3">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>


<div class="col-md-3">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>


<div class="col-md-3">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>


<div class="col-md-3">
	<div class="news-block">
		<div class="news-block-feature"><img src="<?php bloginfo('template_url'); ?>/images/new-img-1.jpg"/></div>
		<h3>Financial Services Transaction Advisory
</h3>
		<p>The increasingly complex nature of financial services deals necessitates deep industry, accounting and transaction experience. A&M’s dedicated global financial services deal professionals have executed hundreds of transactions spanning the banking, asset management, insurance and specialty...</p>
	</div>
	</div>

	
	
</div>
</div>
-->
<!--/section-6-->
	<!--======================================-->	
			<div class="col-md-12 section-white">	
		
		<div id="section-7" class="home-global-impact">
			<div class="col-md-6 global-impact-left">
				<h2>Global Practice <br>
Locations</h2>
			
				<a class="btn-learn-more" href="#">learn more</a>
				
			</div>
<!--/-->
			<div class="col-md-6 global-impact-right">
				
				<h2>Global<br>
 Leadership</h2>
				<a class="btn-learn-more" href="#">learn more</a>
			</div>
	<!--/-->
	
	
</div>
<!--/section-7-->
</div>
	<!--======================================-->	
		
		
		
		
		
		
		
		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
				
					

<?php get_footer(8); ?>
