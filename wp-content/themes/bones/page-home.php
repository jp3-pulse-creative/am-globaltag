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
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".nav-links a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<div id="section-1" class="home-slider">
	
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
  <!-- Overlay -->
<!--  <div class="overlay"></div>-->

  <!-- Indicators -->
 
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
       <div class="slide-1-m"></div>
      <div class="hero">
        <hgroup>
       <img class="amt-tag-1" src="<?php bloginfo('template_directory'); ?>/images/slider-1-tag.svg" border="0" />
        </hgroup>
      
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="slide-2-m"></div>
      <div class="hero">        
        <hgroup>
             <img class="amt-tag-2" src="<?php bloginfo('template_directory'); ?>/images/slider-2-tag.svg" border="0" />
        </hgroup>       
     
      </div>
    </div>

  </div> 
</div>
	
</div>
<!--/section-1-->
			<!--======================================-->
				
	<div id="section-2" class="home-content">
	
	<span class="home-content-title">GLOBAL TRANSACTION ADVISORY GROUP</span>
	
		<div class="two-col-para">
			
			A&M provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues.<br><br>
			
	A&M provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues.
		</div>
		<!--/-->
		
		
		
	
</div>
<!--/section-2-->
<!--======================================-->
			
				
<div id="section-3" class="home-learn-more">
	<p><a href="https://www.alvarezandmarsal.com/" target="_blank">LEARN MORE ABOUT ALVAREZ & MARSAL GLOBAL <span class="fa fa-chevron-right"></span></a></p>
	
	
</div>
<!--/section-3-->	
		<!--======================================-->	
			
	<div class="col-sm-12 col-md-12 section-grey">				
<div id="section-4" class="home-latest-news row">
	<h2>PRESS & MEDIA</h2>
<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => -6 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="col-sm-4 col-md-4">
	<div class="news-block">
			<a href="<?php the_field('news-post-source'); ?>" target="_blank"><div class="news-block-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
		<a href="<?php the_field('news-post-source'); ?>" target="_blank"><h3><?php the_field('header-title'); ?></h3></a>
		<p><?php the_field('home-excerpt'); ?><a class="excerpt" href="<?php the_field('news-post-source'); ?>" target="_blank"> Read More <i class="fas fa-caret-right"></i> </a></p>
	</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
<!--/-->

<a class="btn-more" href="http://www.am-tag.com/news">MORE NEWS</a>
	
	
</div>
<!--/section-4-->
</div>
		<!--======================================-->		
	
		
<div class="col-sm-12 col-md-12 section-white">	
	<div id="section-5" class="home-thought-leadership row">
	<h2>Thought leadership</h2>
	<?php $loop = new WP_Query( array( 'post_type' => 'thought_leadership', 'posts_per_page' => -3 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-sm-4 col-md-4">
	<div class="news-block bot-20">
		<a href="<?php echo get_permalink($_post->ID);?>"><div class="news-block-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
		<a href="<?php echo get_permalink($_post->ID);?>"><h3><?php the_field('header-title'); ?></h3></a>
		<p><?php the_field('home-excerpt'); ?><a class="excerpt" href="<?php echo get_permalink($_post->ID);?>"> Read More <i class="fas fa-caret-right"></i> </a></p>
	</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
<!--/-->

	<a class="btn-more2" href="http://www.am-tag.com/thought-leadership">MORE thought leadership</a>
	<div id="home-linkedin"></div>
</div>

</div>

<!--/section-5-->
	<!--======================================-->		
	
	
	
			<div class="col-sm-12 col-md-12 section-grey-2">		
			<div id="section-8" class="home-linkedin row">
			<h2>LeTS GET SOCIAL:</h2>
			
				<div class="col-sm-12 col-md-12 linkedin-nav">
			<ul class="nav-tabs">
				<li class="active">
					<a href="#all">all</a>
				</li>
				<li>
					<a href="#nick-alvarez">NICK ALVAREZ</a>
				</li>
				<li>
					<a href="#paul-aversano">paul aversano</a>
				</li>
				<li>
					<a href="#ernie-perez">ERNIE PEREZ</a>
				</li>
				
			</ul>	
				</div>
				
		<div class="col-sm-12 col-md-12 linkedin-content">
		
		
		<!--=========================================================-->
		<section id="all" class="tab-content active">
			<div>
		<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-1.jpg"/></div>
		
	</div>
	</div>
<!--/-->
		
		<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature">
			<p>
			
			Until September 2017, China's M&A transactions will be quiet due to restrictions given by Chinese authorities. What type of deals are being barred? @Bloomberg discusses this here: https://www.bloomberg.com/gadfly/articles/2016-11-29/beijing-says-goodbye-to-crazy
			</p>
			
			
		</div>
		
	</div>
	</div>
			<!--/-->
				<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-3.jpg"/></div>
		
	</div>
	</div>
			<!--/-->
				<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-5.jpg"/></div>
		
	</div>
	</div>
			<!--/-->
			
<!--row-->
				<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-4.jpg"/></div>
		
	</div>
	</div>
<!--/-->
		
		<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-6.jpg"/></div>
		
	</div>
	</div>
			<!--/-->
				<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature">
			<p>
			What does a winning pitch entail? Relationship management and valuation. The culture of working together pushes forth the opportunity to broaden expertise and increase distribution channels. I'm grateful to have been featured in @The M&A Advisor's "Best Practices of Best Dealmakers 2015" Chapter 3, as it is soon to become a published book! To read more of my insights on [ ... ] dealmaking, click here: http://www.paulaversano.com/2016/03/best-practices-of-the-best-dealmakers-2015/
			</p>
			
			
		</div>
		
	</div>
	</div>
			<!--/-->
				<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-7.jpg"/></div>
		
	</div>
	</div>
			<!--/-->
<!--row-->
			<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-1.jpg"/></div>
		
	</div>
	</div>
<!--/-->
		
		<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature">
			<p>
			
			Until September 2017, China's M&A transactions will be quiet due to restrictions given by Chinese authorities. What type of deals are being barred? @Bloomberg discusses this here: https://www.bloomberg.com/gadfly/articles/2016-11-29/beijing-says-goodbye-to-crazy
			</p>
			
			
		</div>
		
	</div>
	</div>
			<!--/-->
				<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-3.jpg"/></div>
		
	</div>
	</div>
			<!--/-->
				<div class="col-sm-3 col-md-3">
	<div class="news-block-3">
<span class="fa fa-google-plus"></span>
		<div class="linked-in-feature"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-5.jpg"/></div>
		
	</div>
	</div>
			<!--/-->

			</div>
		</section>
			<section id="nick-alvarez" class="tab-content hide">
			<div>
				<p>Nick Alvarez</p><span class="fa fa-google-plus"></span>
			</div>
		</section>	
		<!--=========================================================-->
<!--=========================================================-->
		<section id="paul-aversano" class="tab-content hide">
			<div>
				<p>Paul Aversano</p><span class="fa fa-google-plus"></span>
			</div>
		</section>
		<!--=========================================================-->
		<section id="ernie-perez" class="tab-content hide">
			<div>
				<p>Ernie Perez</p><span class="fa fa-google-plus"></span>
			</div>
		</section>
		<!--=========================================================-->
			
</div>						
			
</div>						
													
			</div>														
																	
																			
			<!--/section-8-->
	<!--======================================-->																			
																							
<div class="col-sm-12 col-md-12 section-white">	
		
		<div id="section-7" class="home-global-impact">
			<div class="col-sm-6 col-md-6 global-impact-left">
				<h2>Global Practice <br>
Locations</h2>
			
				<a class="btn-learn-more" href="#">learn more</a>
				
			</div>
<!--/-->
			<div class="col-sm-6 col-md-6 global-impact-right">
				
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
