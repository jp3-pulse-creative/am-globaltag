<?php
/*
 Template Name: India
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
             
<section id="promo-rsvp" class="content-block promo-survey"> 
  <div class="container text-center title1"> 
  
  </div>
  <center>
   <div class="container rsvp-header">
    <div class="col-md-4 title-logo2"><img src="<?php bloginfo('template_url'); ?>/images/logo-sm.png" border="0" alt="" title="" />  </div>
	<div class="col-md-8 text-left title2a">A&amp;M Transaction Advisory Group<br>Thought Leadership</div>
   </div>
  </center>
</section>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
                       
<!--===========-->


                                    
<section id="tl-index" class="content-block">
<div class="container">

<?php 
$query = new WP_Query( 'cat=6' ); 
$q_count = 0;
$q_clear = '';
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
?>
<?php if($q_count % 2 == 0) {
	$q_clear = 'lclear';
}else{
	$q_clear = '';
} ?>

<div class="col-md-6 text-center <?php echo $q_clear ?>">
<?php if (get_field("thumb_img")): ?>
<a href="<?php the_permalink(); ?>"><img src="<?php echo get_field("thumb_img") ?>" /></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="" /></a>
<?php endif; ?>
<div class="title-ctn">
<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
<a class="title-rm" href="<?php the_permalink(); ?>">READ MORE »</a>
</div>
</div>







<?php $q_count++; ?>
 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
</div>

<center>
<div class="col-md-12 banner">
<a href="http://www.paulaversano.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/pa-banner.jpg" border="0" alt="" title="" /></a>
</div>
</center>
</section>	

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
