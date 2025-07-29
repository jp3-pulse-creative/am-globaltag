<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
	<!-- CookiePro Cookies Consent Notice start for am-globaltag.com -->

	<script src="https://cookie-cdn.cookiepro.com/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="4840f98d-37e1-4264-b589-ae196a8e8bfe"></script>
	<script type="text/javascript">
		function OptanonWrapper() {}
	</script>
	<!-- CookiePro Cookies Consent Notice end for am-globaltag.com -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125948570-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-125948570-1');
	</script>


	<!-- GA-4 — Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SE1TPJCW68"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-SE1TPJCW68');
	</script>
	<meta charset="utf-8">
	<?php // force Internet Explorer to use the latest rendering engine available 
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Alvarez & Marsal Transaction Advisory Group
	</title>
	<meta name="keywords" content="">
	<meta name="description" content="">

	<?php // mobile meta (hooray!) 
	?>
	<meta name="HandheldFriendly" content="True">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--<script type="text/javascript" src="//fast.fonts.net/jsapi/7673c079-efb8-4723-b401-8fa995a97c48.js"></script>-->
	<script type="text/javascript" src="//fast.fonts.net/jsapi/7673c079-efb8-4723-b401-8fa995a97c48.js"></script>
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/f5b7cecc-b35b-4e9f-a3c6-0756313b94fe.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/all.css">

	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/blocks.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/carousel.css" />
	<!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/font-awesome.min.css"/>-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/plugins.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/style-library-1.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/slicknav.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style2.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/social.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/scrollto.js"></script>-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery.plusanchor.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/scripts.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/main.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/gen_validatorv4.js" xml:space="preserve"></script>

	<!--linkedIn section tabs-->
	<script>
		$(document).ready(function() {
			$('.nav-tabs > li > a').click(function(event) {
				event.preventDefault(); //stop browser to take action for clicked anchor

				//get displaying tab content jQuery selector
				var active_tab_selector = $('.nav-tabs > li.active > a').attr('href');

				//find actived navigation and remove 'active' css
				var actived_nav = $('.nav-tabs > li.active');
				actived_nav.removeClass('active');

				//add 'active' css into clicked navigation
				$(this).parents('li').addClass('active');

				//hide displaying tab content
				$(active_tab_selector).removeClass('active');
				$(active_tab_selector).addClass('hide');

				//show target tab content
				var target_tab_selector = $(this).attr('href');
				$(target_tab_selector).removeClass('hide');
				$(target_tab_selector).addClass('active');
			});
		});
	</script>
	<script>
		function preloadMyImages() {
			var imageList = [
				"images/amtag-slider-1.jpg",
				"images/amtag-slider-2.jpg",
				"images/amtag-slider-3.jpg"
			];
			for (var i = 0; i < imageList.length; i++) {
				var imageObject = new Image();
				imageObject.src = imageList[i];
			}
			``
		}
	</script>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<a href="http://www.am-tag.com/">
		<div class="logo-link"></div>
	</a>


	<?php get_template_part('/includes/navbar/navbar-0.php'); ?>