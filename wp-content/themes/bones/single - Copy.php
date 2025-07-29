<?php get_header(2); ?>

					
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
  <h3>Alvarez &amp; Marsal Transaction Advisory Group!</h3>
  <h1><?php the_title(); ?></h1>
  <div class="t-email">
  <?php if(get_field( "author_name_1" ) && get_field("author_name_2")){ ?>
  <div class="col-md-6">
	  <strong><?php echo get_field( "author_name_1" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_1" ) ?></span><br/>
	  <a href="mailto:<?php echo get_field( "author_email_1" ) ?>" target="_blank"><?php echo get_field( "author_email_1" ) ?></a>
  </div>
  <div class="col-md-6">
	  <strong><?php echo get_field( "author_name_2" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_2" ) ?></span><br/>
	  <a href="mailto:<?php echo get_field( "author_email_2" ) ?>" target="_blank"><?php echo get_field( "author_email_2" ) ?></a>
  </div>
  <?php }else if(get_field("author_name_1")){ ?>
  <div class="col-md-12">
	  <strong><?php echo get_field( "author_name_1" ) ?></strong><br/>
	  <span><?php echo get_field( "author_title_1" ) ?></span><br/>
	  <a href="mailto:<?php echo get_field( "author_email_1" ) ?>" target="_blank"><?php echo get_field( "author_email_1" ) ?></a>
  </div>
  <?php }else{ ?>
  <div class="col-md-12">
	  <strong>Paul Aversano</strong><br/>
	  <span>Managing Director and Global Practice Leader, Transaction Advisory</span><br/>
	  <a href="mailto:paversano@alvarezandmarsal.com" target="_blank">paversano@alvarezandmarsal.com</a>
  </div>
  <?php } ?>
  </div>
  <p><?php echo get_field( "post_excerpt" ) ?></p>
  </div>
  </div>
  <div class="col-md-1"></div>
  </div>
  
  
</section>

<section class="content-block tho-lead">
  <div class="container">
  <div class="col-md-1">
  <div class="soc-share">
	<div class="t-divide"></div>
	<ul class="soc-icons">
	<li class="sharetext">Share</li>
	<li><a href="http://www.facebook.com/sharer.php?u=http://www.am-tag.com/10thanniversary/<?php echo $post->post_name; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-fb.png" /></a></li>
	<li><a href="https://twitter.com/home?status=http%3A//www.am-tag.com/10thanniversary/<?php echo $post->post_name; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-tw.png" /></a></li>
	<li><a href="https://plus.google.com/share?url=http%3A//www.am-tag.com/10thanniversary/<?php echo $post->post_name; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-go.png" /></a></li>
	<li><a href="mailto:?&subject=Alvarez & Marsal Transaction Advisory: <?php the_title() ?>&body=Hi,%0A%0AI%20thought%20you%20might%20be%20interested%20in%20this%20article%3A%0A%0Ahttp%3A//www.am-tag.com/10thanniversary/<?php echo $post->post_name; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-mail.png" /></a></li>
	
	</ul>
	<div class="t-divide"></div>
  </div>
  </div>
    <div class="col-md-10">		
	<?php the_content(); ?>
	<hr />
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
