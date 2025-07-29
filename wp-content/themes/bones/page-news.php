<?php
/*
 Template Name: News
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
					
					<style>
						.navbar-default a, .navbar-nav > li > a {
	font-size: 14px;
	font-family: 'Didot W01 Bold';
	color: #063a63 !important;
	letter-spacing: 2px;
	display: none; 
/*jeff main nav*/
							
}
						
						.bottomMenu {
    width: 100%;
    float: left;
    margin-bottom: 20px !important;
    display: inline-block;
    display: none;
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
  <div class="soc-share">
	<div class="t-divide"></div>
	<ul class="soc-icons">
	<li class="sharetext">Share</li>
	<li><a href="https://www.facebook.com/sharer.php?u=<?php echo get_site_url(); ?>/<?php echo $post->post_name; ?>" target="_blank"><span class="fa fa-facebook-square"> </span></a></li>
	<li><a href="https://twitter.com/home?status=http%3A//www.am-globaltag.com/<?php echo $post->post_name; ?>" target="_blank"><span class="fa fa-twitter"> </span></a></li>
	<li><a href="https://plus.google.com/share?url=http%3A//www.am-globaltag.com/<?php echo $post->post_name; ?>" target="_blank"><span class="fa gp fa-google-plus"> </span></a></li>
	<li><a href="mailto:?&subject=Alvarez & Marsal Transaction Advisory: <?php the_title() ?>&body=Hi,%0A%0AI%20thought%20you%20might%20be%20interested%20in%20this%20article%3A%0A%0Ahttp%3A//www.am-globaltag.com/10thanniversary/<?php echo $post->post_name; ?>" target="_blank"><span class="fa fa-envelope"> </span></a></li>
	
	</ul>
	<div class="t-divide"></div>
  </div>
  </div>
   <div id="event-content">
    <div class="col-md-11">		
    <span class="news-src"><?php the_field('news-post-source'); ?></span>
    <h2 class="post-header"><?php the_field('news-post-header'); ?></h2>
 <p><?php the_field('news-post-content'); ?></p>
	
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
	  </div>
	  
	<div class="col-md-1"></div>
  </div>
   
    <h2 class="post-header2"><?php the_field('news-post-content-header'); ?></h2>
    
  <div id="section-2">
	  <center>
	  <a href="<?php the_field('news-post-content-image-url'); ?>">
	  <img src="<?php the_field('news-post-content-image'); ?>"/>
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
<script>
var msie6 = $.browser == 'msie' && $.browser.version < 7;
if (!msie6) {
    var _height = $('.soc-share').height();
	var top2 = $('.soc-share').offset().top;
	console.log(_height);
	console.log(top2);
    $(window).scroll(function(event) {
        var y = $(this).scrollTop();
		console.log(y);
        var z = $('.comment-footer').offset().top;
        if ((y+90) >= top2 && (y+_height) < z) {
            $('.soc-share').addClass('fixed');
        } else {
            $('.soc-share').removeClass('fixed');
        }
    });
}
</script>
<?php get_footer(8); ?>
