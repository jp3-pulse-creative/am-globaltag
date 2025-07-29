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
	<div class="container"><div class="row"><div class="col-xs-12">
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel">
  <!-- Overlay -->
<!--  <div class="overlay"></div>-->

 <!-- Indicators -->
  <ol class="carousel-indicators hc-1">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
         <li data-target="#bs-carousel" data-slide-to="3"></li>
  </ol>


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
        <div class="item slides active">
      <div class="slide-1bunk"></div>
       <div class="slide-1bunk-m"></div>
      <div class="hero">
        <hgroup>
               <span class="s1bunker">VIDEO SERIES
          </span>

       <img class="amt-tag-1a desktop-only" src="<?php bloginfo('template_directory'); ?>/images/inthebunker-1.png" border="0" />
			 <img class="amt-tag-1a mobile-only" src="<?php bloginfo('template_directory'); ?>/images/inthebunker-1.png" border="0" />
            <a  style="position: relative; display: inline-block; width: auto; background: transparent; padding: 10px 15px; border: solid 2px #fff; color: #fff; font-size: 12px; margin-top: 0px; font-family: 'Helvetica Neue LT W01_65 Md'; text-align: center;" href="<?php echo get_site_url(); ?>/in-the-bunker/">WATCH NOW</a>

        </hgroup>

      </div>
    </div>

    <div class="item slides">
      <div class="slide-1"></div>
       <div class="slide-1-m"></div>
      <div class="hero">
        <hgroup>
       <img class="amt-tag-1a desktop-only" src="<?php bloginfo('template_directory'); ?>/images/am-globaltag-1over.svg" border="0" />
			 <img class="amt-tag-1a mobile-only" src="<?php bloginfo('template_directory'); ?>/images/am-globaltag-1over-m.svg" border="0" />
        </hgroup>

      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="slide-2-m"></div>
      <div class="hero">
        <hgroup>
             <img class="amt-tag-2a" src="<?php bloginfo('template_directory'); ?>/images/am-globaltag-2over.svg" border="0" />
        </hgroup>

      </div>
    </div>
       <div class="item slides">
      <div class="slide-3"></div>
      <div class="slide-3-m"></div>
      <div class="hero">
        <hgroup>
			  <img class="amt-tag-3a" src="<?php bloginfo('template_directory'); ?>/images/alm-logo-blue.png" border="0" /><br>
			  <img class="amt-tag-4a desktop-only" src="<?php bloginfo('template_directory'); ?>/images/am-globaltag-3over.svg" border="0" />
			  <img class="amt-tag-4a mobile-only" src="<?php bloginfo('template_directory'); ?>/images/am-globaltag-3over-m.svg" border="0" />
			<br>
			 <a href="https://www.alvarezandmarsal.com/insights/am-named-leader-within-transactions-acquisitions-consulting-industry-alm-intelligence" target="_blank"><img class="amt-tag-5a" src="<?php bloginfo('template_directory'); ?>/images/am-globaltag-3over-btn.svg" border="0" /></a>

        </hgroup>

      </div>
    </div>


  </div>
</div>
</div></div></div>
</div>
<!--/section-1-->
			<!--======================================-->

	<div id="section-2" class="home-content">
		<div class="container"><div class="row"><div class="col-xs-12">

<h1 class="s2-header">GLOBAL TRANSACTION ADVISORY GROUP</h1>

		<div class="two-col-para">
		A&M’s Global Transaction Advisory Group provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues. As the largest global transaction advisory practice outside the Big Four, our global integrated teams help private equity, sovereign wealth funds, family offices and hedge funds as well as corporate acquirers unlock value across the investment lifecycle.<br><br>
			We have extensive industry knowledge across multiple sectors including, but not limited to, dedicated industry verticals in healthcare, software & technology, energy and financial services. We are free of audit-based conflict and have a flexible approach and pricing. Our Global Transaction Advisory Group includes close to 700+ professionals in 33 offices through the U.S., Latin America, Europe, Middle East, India and South East Asia Because with our global team, A&M is M&A.

			<br><br>
		</div>
		<!--/-->


		</div></div></div>

</div>
<!--/section-2-->
<!--======================================-->
<div id="home-learnmore">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="hln-ctn" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/home-learnmore.png)">
					<h3>Learn More About Who We Are</h3>
					<a href="https://www.alvarezandmarsal.com/" target="_blank">READ MORE <i class="fa fa-caret-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/section-3-->




			<!--======================================-->


	<div id="section-5" class="home-thought-leadership">
		<div class="container"><div class="row">
			<div class="col-xs-12">
				<h2>Thought leadership</h2>
			</div>
	<?php $loop = new WP_Query( array( 'post_type' => 'thought_leadership', 'posts_per_page' => -3 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-sm-4 col-md-4">
	<div class="news-block bot-20">
		<a href="<?php echo get_permalink($_post->ID);?>"><div class="news-block-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
		<a href="<?php echo get_permalink($_post->ID);?>"><h3><?php the_field('header-title'); ?></h3></a>
		<p><?php echo substr(get_field('home-excerpt'),0,145); ?>...</p>
		<a class="excerpt" href="<?php echo get_permalink($_post->ID);?>"> Read More <i class="fas fa-caret-right"></i> </a>
	</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
<!--/-->

	<div class="col-xs-12 text-center floatleft"><a class="btn-more2" href="<?php echo get_site_url(); ?>/thought-leadership">MORE thought leadership</a></div>
</div>
</div>
</div>


<!--/section-5-->
	<!--======================================-->
		<!--======================================-->

<div id="section-4" class="home-latest-news">
	<div class="container"><div class="row">
		<div class="col-xs-12">
			<h2>PRESS & MEDIA</h2>
		</div>
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
		<div class="desktop-nhe"><p><?php echo substr(get_field('home-excerpt'),0,145); ?>...</p>
		</div>
		<a class="excerpt" href="<?php the_field('news-post-source'); ?>" target="_blank"> Read More <i class="fas fa-caret-right"></i> </a>

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

<div class="col-xs-12 text-center floatleft"><a class="btn-more" href="<?php echo get_site_url(); ?>/news">MORE NEWS</a></div>
	<div id="home-linkedin"></div>

</div></div></div>
<!--/section-4-->
</div>

<!--
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



		<section id="all" class="tab-content active">
		</section>
			<section id="nick-alvarez" class="tab-content hide">
		</section>
		<section id="paul-aversano" class="tab-content hide">
		</section>
		<section id="ernie-perez" class="tab-content hide">
		</section>
</div>

</div>

</div>
-->


					<div id="section-twitter" class="am-twitter">
					<div class="container">
						<div class="row">

						<div class="col-xs-12 col-sm-4 col-md-4">
								<h1><i class="fab fa-twitter"></i><span class="twitter-upp">NIck Alvarez</span> <a href="https://twitter.com/nick_alvarez67?lang=en" target="_blank">@NIck_Alvarez67</a></h1>
					<?php echo do_shortcode("[custom-twitter-feeds screenname=NIck_Alvarez67 exclude=media,avatar,author,retweeter]"); ?>
						<a class="btn-more-tweet" href="https://twitter.com/nick_alvarez67?lang=en" target="_blank">ALL TWEETS</a>
							</div>

							<div class="col-xs-12 col-sm-4 col-md-4">
								<h1 class="m-h1"><i class="fab fa-twitter"></i><span class="twitter-upp">Paul Aversano</span> <a href="https://twitter.com/paulaversano?lang=en" target="_blank">@PaulAversano</a></h1>
					<?php echo do_shortcode("[custom-twitter-feeds screenname=PaulAversano exclude=media,avatar,author,retweeter]"); ?>
						<a class="btn-more-tweet" href="https://twitter.com/paulaversano?lang=en" target="_blank">ALL TWEETS</a>
							</div>

							<div class="col-xs-12 col-sm-4 col-md-4">
						<h1 class="m-h1"><i class="fab fa-twitter"></i><span class="twitter-upp">Ernie Perez</span> <a href="https://twitter.com/ernie_r_perez?lang=en" target="_blank">@Ernie_R_Perez</a></h1>
					<?php echo do_shortcode("[custom-twitter-feeds screenname=Ernie_R_Perez exclude=media,avatar,author,retweeter]"); ?>
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
