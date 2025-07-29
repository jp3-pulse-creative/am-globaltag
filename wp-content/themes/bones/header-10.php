<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<?php // force Internet Explorer to use the latest rendering engine available ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
Alvarez & Marsal Transaction Advisory Group
</title>
<meta name="keywords" content="">
<meta name="description" content="">

<?php // mobile meta (hooray!) ?>
<meta name="HandheldFriendly" content="True">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<script type="text/javascript" src="http://fast.fonts.net/jsapi/656221ec-516d-4372-ad4d-dc8f6fcb58f4.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/bootstrap.min.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/blocks.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/custom.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/plugins.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/style-library-1.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/slicknav.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/style2.css"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/scrollto.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/jquery.plusanchor.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/scripts.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/gen_validatorv4.js" xml:space="preserve"></script>
<script type="text/javascript" src="http://fast.fonts.net/jsapi/f5b7cecc-b35b-4e9f-a3c6-0756313b94fe.js"></script>

<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>10/library/css/slick.css"/>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>10/library/js/slick.min.js"></script>
<script type="text/javascript" src="https://www.youtube.com/player_api"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125948570-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125948570-1');
</script>


<!-- GA-4 — Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SE1TPJCW68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SE1TPJCW68');
</script>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
  <div id="inner-header" class="wrap cf">
    <nav role="navigation" class="navbar navbar-default navbar-fixed-top" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <!-- For front page Brand name -->

      <div id="top-navi">
        <div class="container">

        <div class="top-external-nav">
       <a href="http://paulaversano.com/" target="_blank"> WWW.PAULAVERSANO.COM</a> <span style="font-family: Helvetica, Arial, sans-serif; font-size:14px;">l</span> <a href="http://www.alvarezandmarsal.com/" target="_blank">A&M GLOBAL</a>
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
