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
	  <center>   <img class="single-header-image" src="<?php the_field ('header-image'); ?>"/></center>
  <h1><?php the_field('header-title'); ?></h1>
   <h2><?php the_field('header-sub-title'); ?></h2>
  
  </div>
  <p><?php echo get_field( "post_excerpt" ) ?></p>
  </div>
  </div>
  <div class="col-md-1"></div>
  </div>
  
  
</section>

<section class="content-block-1 tho-lead">
  <div class="container">
  <div class="col-md-1">
 
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

<?php get_footer(8); ?>
