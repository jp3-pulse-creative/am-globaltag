<?php get_header(2); ?>

			<!-- second section - About -->


<div id="single" class="single">
<div class="container">  <h1><?php the_title(); ?></h1></div>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
   
    <div class="container">  
      
    </div>
       
       
   
   
   <div class="single-content">
       <div class="container">
       <p><?php the_content(); ?></p>
       </div>
    </div>
 
 
 
 
 
     
      <?php endwhile; endif; ?>
    

</div>
<br>
<!-- /second section --> 

<?php get_footer(); ?>
