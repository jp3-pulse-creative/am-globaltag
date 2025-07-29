<?php get_header(2); ?>

					
                                    
    <section id="promo-rsvp" class="content-block promo-rsvp"> 
  
		  <div class="container text-center title1"> 
		  Blog
		  </div>
		  <center>
		   <div class="container rsvp-header">
			<div class="col-md-4 title-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo-sm.png" border="0" alt="" title="" />  </div>
			 <div class="col-md-8 text-left title2a">A&amp;M Transaction Advisory Group<br>
			Keys to Success<br>
		  10th Anniversary Gala <br>
		  
		  </div>
		  
			</div>
		  </center>
  
  
</section>
<!--===========-->
   <section id="content-3-7" class="content-block content-3-7">
		<div class="container blog">
			<div class="col-md-8 text-center">

				 <h1><?php the_title(); ?></h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php echo get_the_post_thumbnail( $_post->ID, 'thumbnail' ); ?>
				<p><?php the_content(); ?></p> 
  
				<p class="postinfo">
				Posted on: <?php the_time('F j, Y'); ?>
				</p>
				<?php endwhile; endif; ?>
			  

			</div>
			<div class="col-md-4">
				<?php get_sidebar( 'flickr1' ); ?>
			</div>
  
		</div>
</section>									
						
<?php get_footer(8); ?>
