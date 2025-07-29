<?php
/*
 Template Name: Events
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
</style>


					
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
.tho-top{
	background-image: url('<?php echo $image[0]; ?>');
}
</style>

</div>
<?php endif; ?>
<section id="promo-rsvp" class="content-block promo-rsvp tho-top"> 
  
  <div class="container title2"> 
  <div class="col-md-1"></div>
  <div class="col-md-10">
  <div class="tho-in">
	  <center>   <img class="single-header-image" src="<?php the_field ('header-image'); ?>"/></center>
  <h1><?php the_field('header-title'); ?></h1>
   <h2><?php the_field('header-sub-title'); ?></h2>
  
  </div>
  </div>
  </div>
  <div class="col-md-1"></div>
  </div>
  
   <div class="darkness"></div>
</section>

<section class="content-block-1 tho-lead">
  <div class="container">
  <div class="col-md-1">
 
  </div>
    <div class="col-md-10">		
    <h2 class="post-header"><?php the_field('event-post-header'); ?></h2>
 <p><?php the_field('event-post-content'); ?></p>
	
	<?php
	//echo get_the_tag_list('<label class="t-endline">',', ','</label>');
	if(get_the_tags($post_id)){
		$tags = get_the_tags($post_id);
		$html = '<label class="t-endline">';
		foreach ( $tags as $tag ) {
			$html .= " {$tag->name},";
		}
		$html = substr($html,0,-1);
		$html .= '</label>';
		echo $html;
	}
	?>
        <!--address-->
    </div>
	<div class="col-md-1"></div>
  </div>
   
    <h2 class="post-header2"><?php the_field('event-post-content-header'); ?></h2>
    
  <div id="section-2">
	  <center>
	  <a href="<?php the_field('event-post-content-image-url'); ?>">
	  <img src="<?php the_field('event-post-content-image'); ?>"/>
		  </a>
	  </center>
	  <div>
</div>
	
  

  
	</div>
  
  
  
  
  
</section>
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

<?php get_footer(8); ?>
