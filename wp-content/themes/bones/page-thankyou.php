<?php
/*
 Template Name: thanks
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
                                    
                                    <section id="promo-rsvp" class="content-block promo-rsvp"> 
  
  <div class="container text-center title1"> 
  YOU ARE CORDIALLY INVITED 
  </div>
  <center>
   <div class="container rsvp-header">
    <div class="col-md-4 title-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo-sm.png" border="0" alt="" title="" />  </div>
     <div class="col-md-8 text-left title2a">A&amp;M Transaction Advisory Group<br>
    Keys to Success<br>
  10th Anniversary Gala </div>
  
 </div>
  </center>
  
  
</section>
<!--===========-->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
									<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-12 text-center">		
      <hr>
      <h1>Thank you for your response!</h1>
   
      <hr>
    </div>
  </div>
</section>
									<div class="comment-body">
                                    
                                    <section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-12 text-center">		
   
    </div>
  </div>
</section>
                                     

                                    
                <br><br><br><br><br><br><br><br><br>
                                    
                   
                                    
									<?php
									$lcount=1;
									$count=1;
									foreach (get_comments() as $comment):
									?>

									<?php 
									$count+=1;
									if($count >(5*$lcount)){
										$lcount+=1;
									}
									endforeach;
									?>
									<!--<div class="more-sec">
									<button id="more-button">More</button>
									</div>-->
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
