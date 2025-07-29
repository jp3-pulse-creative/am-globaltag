<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
  <div id="inner-header" class="wrap cf">
    <nav role="navigation" class="navbar navbar-default2 navbar-fixed-top" itemscope itemtype="http://schema.org/SiteNavigationElement"> 
      <!-- For front page Brand name -->
     
      <div id="top-navi sticky">
        <div class="container-nav" style="text-align:center;">
        
        <div class="top-external-nav">
			<a href="https://www.alvarezandmarsal.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/am-tag-logo-small.svg" border="0" /></a>
        </div>
        
        
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php 
				wp_nav_menu(array(
				 'container' => false,                           // remove nav container
				 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				 'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
				 'menu_class' => 'nav navbar-nav top-nav cf',               // adding custom nav class
				 'theme_location' => 'main-nav',                 // where it's located in the theme
				 'before' => '',                                 // before the menu
				   'after' => '',                                  // after the menu
				   'link_before' => '',                            // before each link
				   'link_after' => '',                             // after each link
				   'depth' => 0,                                   // limit the depth of the nav
				 'fallback_cb' => ''                             // fallback function (if there is one)
				)); 
			?>
          </div>
		  <div class="mobile-menu-sec">
            <?php 
				wp_nav_menu(array(
				 'container' => false,                           // remove nav container
				 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				 'menu' => __( 'Footer Links', 'bonestheme' ),  // nav name
				 'menu_class' => 'mobile-nav',               // adding custom nav class
				 'theme_location' => 'footer-links',                 // where it's located in the theme
				 'before' => '',                                 // before the menu
				   'after' => '',                                  // after the menu
				   'link_before' => '',                            // before each link
				   'link_after' => '',                             // after each link
				   'depth' => 0,                                   // limit the depth of the nav
				 'fallback_cb' => ''                             // fallback function (if there is one)
				)); 
			?>
		  </div>
          <!--END top-navi--> 
        </div>
      </div>
    </nav>
  </div>
</header>
