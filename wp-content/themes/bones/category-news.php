<?php get_header(); ?>

			<!-- second section - About -->


<div id="single" class="single">
    <div class="container">
   
   <h1>News</h1>
<?php  else: ?>
   <h1>Category Archive: <?php single_cat_title(); ?> </h1>
<?php endif; ?>
</div>
<?php the_post_thumbnail('single-feature'); ?>
       

    
  <div id="content" role="main">
      
    <div class="container">
<?php 

// Check if there are any posts to display
if ( have_posts() ) : 

echo'<ul>';
// The Loop

while ( have_posts() ) : the_post(); ?>
 
    <li> 
        <div class="news-post">
<!-- For thumb -->
<div class="news-thumb">
    <a href="<?php the_permalink() ?>">
    <?php

if ( has_post_thumbnail() ){
	the_post_thumbnail();
} 
?>
    </a>
</div>
     
 <!-- News Details -->          
<div class="news-details">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?></small>
    <br>
  <p>  
 <?php echo substr(get_the_excerpt(), 0,350); ?>...
   <a href="<?php the_permalink() ?>">Read More</a>
    </p>
</div>
     
<div class="clear"></div>
        </div>
   </li>
     

<?php endwhile; 
echo'</ul>'; 
else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>
        
            </div>
    </div>

    
</div>

<br>
<!-- /second section --> 

<?php get_footer(); ?>
