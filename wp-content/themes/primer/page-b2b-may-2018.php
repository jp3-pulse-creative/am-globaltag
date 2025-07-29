<?php
/*
 Template Name: Events B2B May 2018
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
		.events-current a{border-bottom: 4px solid #00355F !important;}
.bottomMenu .events-current a{border: none !important;}
			@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {

	.events-current a{border-top: 4px solid #00355f !important;background:black;}
	.bottomMenu .events-current a{{background:none;}

		}
		</style>
<!--
						<style>
				.navbar-default a, .navbar-nav > li > a {
	font-size: 14px;
	font-family: 'Didot W01 Bold';
	color: #063a63 !important;
	letter-spacing: 2px;
	display: block;

}

						.bottomMenu {
    width: 100%;
    float: left;
    margin-bottom: 20px !important;
    display: inline-block;

}
</style>
-->



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
<div class="row">
<div class="col-md-1"></div>
  <div class="col-md-10">
  <div class="tho-in">
	  <center>  <img class="single-header-image-2" src="<?php bloginfo('template_url'); ?>/images/back-may-2018-2.png" />  </center>
   <h2></h2>

  </div>
  </div>
  </div>
  <div class="col-md-1"></div>
</div>
  </div>


</section>

<section class="content-block-1 tho-lead">
  <div class="container">
<div class="row">
<div class="col-md-1">

</div>
  <div class="col-md-10" style="margin-bottom: 30px;">
  <h2 class="post-header-3">Thank You</h2>
<p style="font-size: 18px; line-height: 22px;">Thank you all for coming to A&M Asia’s Back to Business networking event. <br>
Here are a few photos from the evening. Enjoy!</p>

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
  </div>

    <h2 class="post-header2">Photo Gallery</h2>

  <div id="section-reconnect2">
  <center>
  <a href="http://pulsecreative.zenfolio.com/p547597114" target="_blank"><img class="" src="<?php bloginfo('template_url'); ?>/images/back-may-2018-th1.png"/></a>
 <a href="http://pulsecreative.zenfolio.com/p545886669" target="_blank"><img class="" src="<?php bloginfo('template_url'); ?>/images/back-may-2018-th2.png"/></a>

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
