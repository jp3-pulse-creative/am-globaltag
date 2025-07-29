<?php
/*
 Template Name: Home Twitter
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
  <ol class="carousel-indicators hc-1">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
 
  
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
       <div class="item slides">
      <div class="slide-3"></div>
      <div class="slide-3-m"></div>
      <div class="hero">        
        <hgroup>
             <img class="amt-tag-3" src="<?php bloginfo('template_directory'); ?>/images/slider-3-tag.svg" border="0" />
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
	<div id="section-5" class="home-thought-leadership row">
	<h2>Thought leadership</h2>
	<?php $loop = new WP_Query( array( 'post_type' => 'thought_leadership', 'posts_per_page' => -3 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-sm-4 col-md-4">
	<div class="news-block-j bot-20">
		<a href="<?php echo get_permalink($_post->ID);?>"><div class="news-block-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
		<a href="<?php echo get_permalink($_post->ID);?>"><h3><?php the_field('header-title'); ?></h3></a>
		<p><?php the_field('home-excerpt'); ?>
		<br>
		<a class="excerpt" href="<?php echo get_permalink($_post->ID);?>"> Read More <i class="fas fa-caret-right"></i> </a></p>
	</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
<!--/-->

	<a class="btn-more2" href="http://www.am-tag.com/thought-leadership">MORE thought leadership</a>
</div>

</div>

<!--/section-5-->
	<!--======================================-->		
		<!--======================================-->	
			
	<div class="col-sm-12 col-md-12 section-white">				
<div id="section-4" class="home-latest-news row">
	<h2>PRESS & MEDIA</h2>
<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => -6 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="col-xs-12 col-sm-4 col-md-4">
	<div class="news-block">
			<a href="<?php the_field('news-post-source'); ?>" target="_blank"><div class="news-block-feature mhp-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
<!--/-->
		<div class="desktop-nht"><a href="<?php the_field('news-post-source'); ?>" target="_blank"><h3><?php the_field('header-title'); ?></h3></a></div>
		
		<div class="mobile-nht"><a href="<?php the_field('news-post-source'); ?>" target="_blank"><h3><?php the_field('mobile-header-title'); ?></h3></a></div>
		<!--/-->
		
		<!--/-->
		<div class="desktop-nhe"><p><?php the_field('home-excerpt'); ?>
		<br>
		<a class="excerpt" href="<?php the_field('news-post-source'); ?>" target="_blank"> Read More <i class="fas fa-caret-right"></i> </a></p>
		</div>
		
<!--
		<div class="mobile-nhe"><p><?php the_field('mobile-excerpt'); ?>
		<br>
		<a class="excerpt" href="<?php the_field('news-post-source'); ?>" target="_blank"> Read More <i class="fas fa-caret-right"></i> </a></p>
		</div>
-->
		<!--/-->
		
		
	</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
<!--/-->

<a class="btn-more" href="http://www.am-tag.com/news">MORE NEWS</a>
	<div id="home-linkedin"></div>
	
</div>
<!--/section-4-->
</div>

	
	
	
			<div class="col-sm-12 col-md-12 section-grey-2">		
			<div id="section-8" class="home-linkedin row">
			<h2>LeTS GET SOCIAL</h2>
			
				<div class="col-sm-12 col-md-12 linkedin-nav">
			<ul class="nav-tabs">
				<li class="active">
					<a href="#all">all</a><br>
						<span class="sm-title"></span>
				</li>
				<li>
					<a href="#nick-alvarez">NICK ALVAREZ</a><br>
						<span class="sm-title">National Practice Leader, Private Equity Operations Group</span>

					
					
					
				</li>
				<li>
					<a href="#paul-aversano">paul aversano </a><br>
					 <span class="sm-title">Global Practice Leader, Transaction Advisory Group</span>
					
						
				
				</li>
				<li>
					<a href="#ernie-perez">ERNIE PEREZ</a><br>
						<span class="sm-title">Global Practice Leader, Taxand </span>
					
							
					
				</li>
				
			</ul>	
				</div>
				
		<div class="col-sm-12 col-md-12 linkedin-content">
		
		
		<!--=========================================================-->
		<section id="all" class="tab-content active">
		</section>
			<section id="nick-alvarez" class="tab-content hide">
		</section>	
		<!--=========================================================-->
<!--=========================================================-->
		<section id="paul-aversano" class="tab-content hide">
		</section>
		<!--=========================================================-->
		<section id="ernie-perez" class="tab-content hide">
		</section>
		<!--=========================================================-->
			
</div>						
			
</div>						
					
													
<!--/-->
																													
					<div class="col-sm-12 col-md-12 section-white">		
					<div id="section-twitter" class="am-twitter">
						
							<div class="col-xs-12 col-md-4">
								<h1><div class="fa fa-twitter"></div><span class="twitter-upp">Paul Aversano</span> <a href="https://twitter.com/paulaversano?lang=en" target="_blank">@PaulAversano</a></h1>
					<?php echo do_shortcode("[custom-twitter-feeds screenname=PaulAversano include=date exclude=media,avatar,author,retweeter]"); ?>
						<a class="btn-more-tweet" href="https://twitter.com/paulaversano?lang=en" target="_blank">ALL TWEETS</a>
							</div>	
							<div class="col-xs-12 col-md-4">
								<h1 class="m-h1"><div class="fa fa-twitter"></div><span class="twitter-upp">NIck Alvarez</span> <a href="https://twitter.com/nick_alvarez67?lang=en" target="_blank">@NIck_Alvarez67</a></h1>
					<?php echo do_shortcode("[custom-twitter-feeds screenname=NIck_Alvarez67 include=date exclude=media,avatar,author,retweeter]"); ?>
						<a class="btn-more-tweet" href="https://twitter.com/nick_alvarez67?lang=en" target="_blank">ALL TWEETS</a>
							</div>	
							<div class="col-xs-12 col-md-4">
						<h1 class="m-h1"><div class="fa fa-twitter"></div><span class="twitter-upp">Ernie Perez</span> <a href="https://twitter.com/ernie_r_perez?lang=en" target="_blank">@Ernie_R_Perez</a></h1>
					<?php echo do_shortcode("[custom-twitter-feeds screenname=Ernie_R_Perez include=date exclude=media,avatar,author,retweeter]"); ?>
						<a class="btn-more-tweet" href="https://twitter.com/ernie_r_perez?lang=en" target="_blank">ALL TWEETS</a>
							</div>				
</div>																																		
</div>																																	
																																													
	
																																																													
			</div>														
																	
																			
			<!--/section-8-->
	<!--======================================-->																			
																							
<!--
<div class="col-sm-12 col-md-12 section-white">	
		
		<div id="section-7" class="home-global-impact">
			<div class="col-sm-6 col-md-6 global-impact-left">
				<h2>Global Practice <br>
Locations</h2>
			
				<a class="btn-learn-more" href="#">learn more</a>
				
			</div>

			<div class="col-sm-6 col-md-6 global-impact-right">
				
				<h2>Global<br>
 Leadership</h2>
				<a class="btn-learn-more" href="#">learn more</a>
			</div>

	
	
</div>
-->
<!--/section-7-->
</div>
	<!--======================================-->	
		
		
			
<script src='<?php bloginfo('template_directory'); ?>/scripts/social.js' type="text/javascript"></script>
<?php get_footer(8); ?>
