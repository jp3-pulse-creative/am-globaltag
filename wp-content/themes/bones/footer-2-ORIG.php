<section class="comment-footer footer-wrap-1-2" wp-cz-section="blocks_footer_1_2" wp-cz-section-title="Footer 1-2">
  <div class="container footer-1-2"> 
   <div class="col-md-6 footer-logo">
   <img src="<?php bloginfo('template_directory'); ?>/images/am-logo-footer.svg" border="0" />
   </div>
   
   <div class="col-md-6 footer-sm">
<!--
    <a href="">  <span class=" fa fa-facebook-square"></span></a>
	   <a href="">  <span class=" fa fa-twitter"></span></a>
	   <a href=""><span class=" fa fa-instagram"></span></a>
	  
-->
   	
   </div>
   
   
   <br><br><br><br><br><br>
   
      <div class="bottomMenu">
              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>  
    </div>
   
   
	  <div class="col-md-12 footer-divider"></div>
   

   
   
    <div class="col-md-12 big-social">
		<center>© Copyright 2017 Alvarez & Marsal Holdings, LLC. All Rights Reserved.
</center>
    </div>
  </div>
  <!-- /.container --> 
</section>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/plugins.js"></script> 
<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/bskit-scripts.js"></script>-->


<script type="text/javascript">
$(document).ready(function(){
	$('.mobile-nav').slicknav();
	
	/* rsvp check box */

	// Check un check
	$("#scfp-name").click(function(){
		console.log("name click");	
		document.getElementById("scfp-name").checked = true;
		document.getElementById("scfp-email").checked = false;
	});

	$("#scfp-email").click(function(){
		console.log("email click");
		document.getElementById("scfp-email").checked = true;
		document.getElementById("scfp-name").checked = false;
	});
	
});

</script>
</body></html>
<!-- end of site. what a ride! -->