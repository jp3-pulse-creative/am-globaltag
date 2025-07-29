<?php get_header(); ?>

<section id="promo-3" class="content-block promo-3 min-height-600px bg-deepocean" wp-cz-section="blocks_promo3" wp-cz-section-title="Promo 3" wp-cz-control="blocks_promo3_bck" wp-cz-control-label="Background image" wp-cz-control-type="media" wp-cz-control-mime-type="image" wp-cz-control-section="blocks_promo3" wp-attachment-bck wp-attachment-bck-theme-mod="blocks_promo3_bck" wp-attachment-bck-size="large">

<!--gail + tony-->
  <div class="container text-center">
   <img src="<?php bloginfo('template_url'); ?>/images/gailtony-1a.png" border="0" alt="" title="" class="block1-image gt1a"/>
    <img src="<?php bloginfo('template_url'); ?>/images/gailtony-1b.png" border="0" alt="" title="" class="block1-image gt1b"/>
     <img src="<?php bloginfo('template_url'); ?>/images/gailtony-1c.png" border="0" alt="" title="" class="block1-image gt1c"/>
    </div>
    <!--/gail + tony-->
    
  <!--logo-->
  <div class="container text-center"> 
  <img src="<?php bloginfo('template_url'); ?>/images/gailtony-2.png" border="0" alt="" title="" class="block1-image gt2"/> 
  </div>
    <!--/logo-->
    
      <!--date and gotham hall-->
  <div class="container text-center"> 
  <img src="<?php bloginfo('template_url'); ?>/images/gailtony-3a.png" border="0" alt="" title="" class="block1-image gt3a"/><br>
 <img src="<?php bloginfo('template_url'); ?>/images/gailtony-3b.png" border="0" alt="" title="" class="block1-image gt3b"/><br>
    <a href="#thankyou" rel="m_PageScroll2id" data-ps2id-offset="100"> <img src="<?php bloginfo('template_url'); ?>/images/arrow-down.png" border="0" alt="" title="" class="block1-image gt3c"/></a>
   </div>
    <!--/date and gotham hall-->
   
</div>
</section>


<!--thanks-->
<div id="thankyou" class="thankyou target"></div>
<section id="content-3-7" class="content-block content-3-7" wp-cz-section="blocks_content_3_7" wp-cz-section-title="Content 3-7">
  <div class="container">
    <div class="col-sm-12">
    <div class="spacer"></div>
      <div class="underlined-title">
        <h1 wp-cz-control="blocks_content_3_7_title" wp-cz-control-label="Title" wp-cz-control-section="blocks_content_3_7" wp-cz-theme-mod="blocks_content_3_7_title">THANK YOU</h1>
    
        <p wp-cz-control="blocks_content_3_7_subtitle" wp-cz-control-label="Subtitle" wp-cz-control-type="textarea" wp-cz-control-section="blocks_content_3_7" wp-cz-theme-mod="blocks_content_3_7_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="spacer"></div>
      </div>
    </div>
  </div>
</section>

<!--video-->

<!--photos-->
<section id="promo-4" class="content-block promo-4 min-height-600px bg-deepocean" wp-cz-section="blocks_promo3" wp-cz-section-title="Promo 3" wp-cz-control="blocks_promo3_bck" wp-cz-control-label="Background image" wp-cz-control-type="media" wp-cz-control-mime-type="image" wp-cz-control-section="blocks_promo3" wp-attachment-bck wp-attachment-bck-theme-mod="blocks_promo3_bck" wp-attachment-bck-size="large">
<div class="container">
<div class="spacer"></div>
    <div class="underlined-title">
        <h1>PHOTOS</h1>
   
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <ul class="filter">
        <li class="active">
            <a href="#" data-filter="*">All</a>
        </li>
        <li>
            <a href="#" data-filter=".events">Events</a>
        </li>
        <li>
            <a href="#" data-filter=".photobooth">Photo Booth</a>
        </li>
        
    </ul>
    <!-- /.gallery-filter -->
    <div class="row">
        <div class="isotope-gallery-container">
            <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper events">
                <div class="gallery-item">
                   <div class="gallery-thumb">
                
                <?php get_sidebar() ?>
                </div>
              </div>
            </div>
            <!-- /.gallery-item-wrapper -->
           
        
        </div>
        <!-- /.isotope-gallery-container -->
    </div>
    <!-- /.row -->
    
       <div class="row">
        <div class="isotope-gallery-container">
            <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper photobooth">
                <div class="gallery-item">
                   <div class="gallery-thumb">
                
                <?php get_sidebar(2) ?>
                </div>
              </div>
            </div>
            <!-- /.gallery-item-wrapper -->
           
        
        </div>
        <!-- /.isotope-gallery-container -->
    </div>
    <!-- /.row -->
    <div class="spacer"></div>
</div>
</section>



<br><br><br><br><br><br><br><br><br><br><br><br><br>


<!--===========-->

<?php get_footer(); ?>
