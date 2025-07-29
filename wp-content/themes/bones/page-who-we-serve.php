<?php
/*
 Template Name: Who We Serve
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

<?php get_header(); ?>
					<style>
					.navbar-default a, .navbar-nav > li > a {
	font-size: 14px;
	font-family: 'Didot W01 Bold';
	color: #063a63 !important;
	letter-spacing: 2px;
	display: block; 
/*jeff main nav*/
							
}
						
						.bottomMenu {
    width: 100%;
    float: left;
    margin-bottom: 20px !important;
    display: inline-block;
   
}
						/* Smartphones (portrait and landscape) ----------- */
@media only screen
and (min-width : 320px)
and (max-width : 480px) {
	.container.title2.m-50 h3{
		margin-bottom:10px;
	}
	.container.title2.m-50 p.excerpt2 {
    font-family: Helvetica,Arial,sans-serif;
font-size: 14px;
line-height: 1.1;
		margin-left: 10px;
		margin-top:10px;
	}
/*/*/
						}
</style>

					
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
.tho-top-tl{
	background-image: url('<?php echo $image[0]; ?>');
}
</style>

</div>
<?php endif; ?>
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl page-wws"> 
  
  <div class="container title2 m-50"> 
  <div class="col-md-12">
	    <div class="container">
  <div class="tho-in left-line">

  <h3 class="wws"><?php
								$post_title = get_the_title();
								if ( strlen( $post_title ) > 270 ) {
									echo substr( $post_title, 0, 267 ) . '...';
								} else {
									echo $post_title;
								}
								?></h3>

  
<p class="excerpt2">
	<?php // the_field('header-excerpt'); ?>
We don’t just talk strategy and solutions, we implement them. 
<br><br>
Maximizing your tax benefits while mitigating risk to keep you compliant and well positioned in an ever-changing regulatory environment.
<br><br>
A&M Taxand’s multi-disciplinary tax service teams provide full-service, integrated tax services, from tax planning, to tax compliance and financial reporting. Our professionals provide tax advisory services to mid-market, larger corporate, global and U.S. based clients without audit-based conflicts of interest.
	  </p>
  </div>
	  </div>
  </div>

  </div>

  </div>
<!--    <div class="darkness"></div>-->
  
</section>

<section class="content-block-1 tho-lead wws-ico">
  <div class="container">
    <div id="event-content">
    <div class="col-md-12">	
		<h2>clients</h2>
	<hr class="wws-hr">
		
	    <div class="row">		
			<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-1.png" border="0" alt="" title=""/>
			<p>
				Domestic and Global<br>
Businesses / Corporations /<br>
Multinational Corporations
				</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-2.png" border="0" alt="" title=""/>	
			<p>
				PE Investors and<br>
Portfolio Companies
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-3.png" border="0" alt="" title=""/>	
			<p>
				Distressed<br>
Companies
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-4.png" border="0" alt="" title=""/>	
			<p>
				Professional<br>
Services Firms
					</p>
			</div>
			
		</div>
		 <div class="row">		
			<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-5.png" border="0" alt="" title=""/>	
			 <p>
				Financial<br>
Institutions
					</p>
			 </div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-6.png" border="0" alt="" title=""/>	
			 <p>
				High-net Worth<br>
Individuals and Family Offices
					</p>
			 </div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-7.png" border="0" alt="" title=""/>	
			 <p>
				Emerging<br>
Markets
					</p>
			 </div>
		</div>
	

    </div>
	  </div>
  </div>
	
</section>
<!--==================-->
	<div id="section-wws-2" class="wws-ico">
		<div class="container">
    <div id="event-content">
    <div class="col-md-12">	
			<h2>industries</h2>
		<hr class="wws-hr">
		 <div class="row">		
			<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-8.png" border="0" alt="" title=""/>
			<p>
			High Tech
				</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-9.png" border="0" alt="" title=""/>	
			<p>
			Bio-tech / Life Sciences
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-10.png" border="0" alt="" title=""/>	
			<p>
			Automotive
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-11.png" border="0" alt="" title=""/>	
			<p>
		Business Services
					</p>
			</div>
			
		</div>
<!--/-->
		 <div class="row">		
			<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-12.png" border="0" alt="" title=""/>
			<p>
			Consumer Products
				</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-13.png" border="0" alt="" title=""/>	
			<p>
			Energy
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-14.png" border="0" alt="" title=""/>	
			<p>
			Financial Services
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-15.png" border="0" alt="" title=""/>	
			<p>
		Healthcare
					</p>
			</div>
			
		</div>
		<!--/-->
				 <div class="row">		
			<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-16.png" border="0" alt="" title=""/>
			<p>
			Pharmaceuticals
				</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-17.png" border="0" alt="" title=""/>	
			<p>
			Real Estate
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-18.png" border="0" alt="" title=""/>	
			<p>
			Retail
					</p>
			</div>
				<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-19.png" border="0" alt="" title=""/>	
			<p>
		Technology, Media and<br>
Telecommunications
					</p>
			</div>
			
		</div>
		<!--/-->
				 <div class="row">		
			<div class="col-md-3"><img src="<?php bloginfo('template_url'); ?>/images/wws-20.png" border="0" alt="" title=""/>
			<p>
Transportation and<br>
Logistics
				</p>
			</div>

			
		</div>
		<!--/-->
		
		
<!--/-->
		</div>
			</div>
		</div>
		
	</div>
<!--==================-->





									<div class="comment-body">
         <div class="spacer-am"></div>
						</div>
<?php endwhile; else : ?>
<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

<?php endif; ?>

<?php get_footer(); ?>
