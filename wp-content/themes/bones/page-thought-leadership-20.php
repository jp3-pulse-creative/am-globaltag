<?php
/*
 Template Name: Thought Leadership (ugh)
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
<?php the_field('css'); ?>
</style>
					<style>
					.navbar-default a, .navbar-nav > li > a {
	font-size: 14px;
/*	font-family: 'Didot W01 Bold';*/
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
.tho-top-tl{
	background-image: url('<?php echo $image[0]; ?>');
}
</style>

</div>
<?php endif; ?>
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl"> 
  
  <div class="container title2 m-50"> 
  <div class="col-md-1"></div>
  <div class="col-md-10">
  <div class="tho-in left-line">
<!--	  <center>   <img class="single-header-image" src="<?php the_field ('header-image'); ?>"/></center>-->
	  <div class="t-email"><strong>A&M Global Transaction Advisory Group</strong></div>
  <h3><?php the_field('header-title'); ?></h3>
  
  
  <div class="t-email">
  <?php if(get_field( "author_name_1" ) && get_field("author_name_2")){ ?>
  <div class="col-md-6">
	  <strong><?php echo get_field( "author_name_1" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_1" ) ?></span><br/>
         <?php if( get_field('author_email_1') ): ?>
	  <a href="mailto:<?php echo get_field( "author_email_1" ) ?>" target="_blank"><?php echo get_field( "author_email_1" ) ?></a><br>
      <?php endif; ?>
       <?php if( get_field('author_link_1') ): ?>
      <a href="<?php echo get_field( "author_link_1" ) ?>" target="_blank">View Bio &#8250;&#8250; </a><br><br>
      <?php endif; ?>
  </div>
  <div class="col-md-6">
	  <strong><?php echo get_field( "author_name_2" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_2" ) ?></span><br/>
      
	   <?php if( get_field('author_email_2') ): ?>
	  <a href="mailto:<?php echo get_field( "author_email_2" ) ?>" target="_blank"><?php echo get_field( "author_email_2" ) ?></a><br>
      <?php endif; ?>
         <?php if( get_field('author_link_2') ): ?>
      <a href="<?php echo get_field( "author_link_2" ) ?>" target="_blank">View Bio &#8250;&#8250; </a><br><br>
      <?php endif; ?>
  </div>
       <div class="col-md-6">
	  <strong><?php echo get_field( "author_name_3" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_3" ) ?></span><br/>
      
	   <?php if( get_field('author_email_3') ): ?>
	  <a href="mailto:<?php echo get_field( "author_email_3" ) ?>" target="_blank"><?php echo get_field( "author_email_3" ) ?></a><br>
      <?php endif; ?>
         <?php if( get_field('author_link_3') ): ?>
      <a href="<?php echo get_field( "author_link_3" ) ?>" target="_blank">View Bio &#8250;&#8250; </a><br><br>
      <?php endif; ?>
  </div>
       <div class="col-md-6">
	  <strong><?php echo get_field( "author_name_4" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_4" ) ?></span><br/>
      
	   <?php if( get_field('author_email_4') ): ?>
	  <a href="mailto:<?php echo get_field( "author_email_4" ) ?>" target="_blank"><?php echo get_field( "author_email_4" ) ?></a><br>
      <?php endif; ?>
         <?php if( get_field('author_link_4') ): ?>
      <a href="<?php echo get_field( "author_link_4" ) ?>" target="_blank">View Bio &#8250;&#8250; </a><br><br>
      <?php endif; ?>
  </div>
      
      
      
      
      
  <?php }else if(get_field("author_name_1")){ ?>
  <div class="col-md-12">
	  <strong><?php echo get_field( "author_name_1" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_1" ) ?></span><br/>
	  <a href="mailto:<?php echo get_field( "author_email_1" ) ?>" target="_blank"><?php echo get_field( "author_email_1" ) ?></a><br>
          <?php if( get_field('author_link_1') ): ?>
      <a href="<?php echo get_field( "author_link_1" ) ?>" target="_blank">View Bio &#8250;&#8250; </a>
      <?php endif; ?>
  </div>
  <?php }else{ ?>
  <div class="col-md-12">
	  <strong>Paul Aversano</strong><br/>
	  <span>Managing Director and Global Practice Leader, Transaction Advisory</span><br/>
	  <a href="mailto:paversano@alvarezandmarsal.com" target="_blank">paversano@alvarezandmarsal.com</a>
  </div>
  <?php } ?>
  </div>
  
  
  
  
  
  
  
  
   <h4><?php the_field('header-sub-title'); ?></h4>
   
	  
  
  </div>
  </div>

  
  
  
  </div>
  <div class="col-md-1"></div>
  </div>
<!--    <div class="darkness"></div>-->
  
</section>

<section class="content-block-1 tho-lead">
  <div class="container">
 <div class="col-md-1">
  <div class="soc-share">
	<div class="t-divide"></div>
	<ul class="soc-icons">
	<li class="sharetext">Share</li>
	<li><a href="https://www.facebook.com/sharer.php?u=<?php echo get_site_url(); ?>/<?php echo $post->post_name; ?>" target="_blank"><span class="fab fa-facebook-square"> </span></a></li>
	<li><a href="https://twitter.com/home?status=https%3A//www.am-globaltag.com/<?php echo $post->post_name; ?>" target="_blank"><span class="fab fa-twitter"> </span></a></li>
	<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank"><span class="fab fa-linkedin"></span></a></li>
	<li><a href="mailto:?&subject=AM Global Transaction Advisory Group Insights&body=Hi,%0A%0AI%20thought%20you%20might%20be%20interested%20in%20this%20article%3A%0A%0Ahttps%3A//www.am-globaltag.com/10thanniversary/<?php echo $post->post_name; ?>" target="_blank"><span class="fa fa-envelope"> </span></a></li>
	</ul>
	<div class="t-divide"></div>
  </div>
  </div>
    <div id="event-content">
    <div class="col-md-11">	
    <h2 class="post-header"><?php the_field('tl-post-header'); ?></h2>
    <div class="tl-p">
 <p><?php the_field('tl-post-content'); ?></p>
		
		</div>
		
		
			<div class="top-40">
				
						<div class="news-src">
			Source: <?php the_field('tl-post-source'); ?></div>
			
		</div>
	
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
   
    <h2 class="post-header2"><?php the_field('event-post-content-header'); ?></h2>
    
  
  
  
  
  
  
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
