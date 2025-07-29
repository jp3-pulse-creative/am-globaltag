<?php get_header(); ?>

			

	 <!-- first section - Home -->
  <div id="home" class="home target">
    <div class="text-vcenter">
    
      <h1>  <img src="<?php bloginfo('template_url'); ?>/images/lopez.png" border="0"/></h1>

    <div class="lopez-more"><a href="#about" rel="m_PageScroll2id"><img src="<?php bloginfo('template_url'); ?>/images/lopez-more.png" border="0"/></a></div>
    </div>
  </div>
  <!-- /first section -->

  <!-- second section - About -->
  
  <div id="about" class="about target">
    <div class="text-right">
<h2 class="music-title1">ABOUT US</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
<a href="#"><div class="read-more0">see more</div></a>
   
    </div>
  </div>
  <!-- /second section -->
  
    <!-- third section - Music -->
  <div id="music" class="music  target">
  <?php query_posts('category_name=music'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
       <?php
$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "");
$img = $img[0];
?>
<div id="" style="<?php if($img){echo 'background: url ('.$img.') no-repeat center center fixed;
display: table;
  height: 100%;
  position: relative;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    -webkit-transition: all 0.8s ease;
	transition: all 0.8s ease;
	top: 0px !important';} ?>">
</div>
     

</div>
  

           

              <?php endwhile; endif; ?>
               
               

   
    </div>
   

  </div>
  <!-- /third section -->
  
     <!-- forth section - Music2 -->
  <div id="music2" class="music2">
      <div class="text-right">
<h2>BOOK OF MORMON</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
<a href="#"><div class="read-more2">see more</div></a>
   
    </div>
  </div>
  <!-- /forth section -->
  
     <!-- fifth section - Music -->
  <div id="music3" class="music3">
    <div class="text-left">
<h2>FINDING NEMO</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
<a href="#"><div class="read-more3">see more</div></a>
   
    </div>
  </div>
  <!-- /fifth section -->
  
<?php get_footer(); ?>
