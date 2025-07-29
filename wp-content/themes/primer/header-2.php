<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<?php
	$uri = $_SERVER['REQUEST_URI'];

	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

	$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	if (strpos($url, 'am-globaltag.com/') !== false) { ?>
		<!-- OneTrust Cookies Consent Notice start for am-globaltag.com -->
		<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="5e6c31c8-4815-4d94-95d7-61183fa9c536"></script>
		<script type="text/javascript">
			function OptanonWrapper() {}
		</script>
		<!-- OneTrust Cookies Consent Notice end for am-globaltag.com -->

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
	<?php } ?>
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
	<script type="text/javascript" src="//fast.fonts.net/jsapi/8440c163-8d14-4a4a-acf3-d9d4348389b3.js"></script>

	<!-- <link rel="preconnect" href="https://cdn.fonts.net">
	<link href="https://cdn.fonts.net/kit/801d5fb1-86fd-4d7e-aeaf-fb186891cbb9/801d5fb1-86fd-4d7e-aeaf-fb186891cbb9.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/bootstrap.min.css" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/all.css">

	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
	<!--adding versioning via filetime -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/blocks.css?ver=<?php echo filemtime(get_template_directory() . '/library/css/blocks.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/custom.css?ver=<?php echo filemtime(get_template_directory() . '/library/css/custom.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/carousel.css?ver=<?php echo filemtime(get_template_directory() . '/library/css/carousel.css'); ?>" />

	<!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/font-awesome.min.css"/>-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/plugins.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/style-library-1.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/slicknav.css" />

	<!--adding versioning via filetime -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style2.css?ver=<?php echo filemtime(get_template_directory() . '/style2.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/social.css?ver=<?php echo filemtime(get_template_directory() . '/social.css'); ?>" />

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/scrollto.js"></script>-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery.plusanchor.js"></script>

	<!--adding versioning via filetime -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js?ver=<?php echo filemtime(get_template_directory() . '/library/js/scripts.js'); ?>"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery-1.10.2.js"></script>

	<!--adding versioning via filetime -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/main.js?ver=<?php echo filemtime(get_template_directory() . '/library/js/main.js'); ?>"></script>


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


	<?php if (have_posts()) : while (have_posts()) : the_post();
		endwhile;
	endif; ?>
	<!-- the default values -->

	<!-- if page is content page -->
	<?php if (is_single()) { ?>
		<meta property="og:url" content="<?php the_permalink() ?>" />
		<meta property="og:title" content="<?php single_post_title(''); ?>" />
		<meta property="og:description" content="<?php echo strip_tags(get_field('home-excerpt')); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="<?php echo the_field('header-image'); ?>" />


		<meta name="twitter:card" value="summary" />
		<meta name="twitter:url" value="<?php echo the_permalink(); ?>" />
		<meta name="twitter:title" value="<?php echo the_title(); ?>" />
		<meta name="twitter:description" value="<?php echo strip_tags(get_field('home-excerpt')); ?>" />
		<meta name="twitter:image" value="<?php echo the_field('header-image'); ?>" />
		<!-- if page is others -->
	<?php } else { ?>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/tag-default-og.jpg" /> <?php } ?>
	<meta property="og:description" content="A&M’s Global Transaction Advisory Group provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues. As the largest global transaction advisory practice outside the Big Four, our global integrated teams help private equity, sovereign wealth funds, family offices and hedge funds as well as corporate acquirers unlock value across the investment lifecycle." />

	<meta name="twitter:card" value="summary" />
	<meta name="twitter:url" value="<?php echo the_permalink(); ?>" />
	<meta name="twitter:title" value="<?php bloginfo('name'); ?>" />
	<meta name="twitter:description" value="A&M’s Global Transaction Advisory Group provides investors and lenders the answers needed to get the deal done. We combine our firm’s deep operational, industry and functional resources with Big Four-quality financial accounting and tax expertise to assess key deal drivers and focus on the root cause of any critical deal issues. As the largest global transaction advisory practice outside the Big Four, our global integrated teams help private equity, sovereign wealth funds, family offices and hedge funds as well as corporate acquirers unlock value across the investment lifecycle." />
	<meta name="twitter:image" value="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/tag-default-og.jpg" />


	<!--custom styles-->
	<!--adding versioning via filetime -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/scss/primary.css?ver=<?php echo filemtime(get_template_directory() . '/library/scss/primary.css'); ?>" />


	<?php
	$uri = $_SERVER['REQUEST_URI'];

	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

	$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	if (strpos($url, 'pulsecreative-clients.com') !== false) { ?>
		<script>
			window.Userback = window.Userback || {};
			Userback.access_token = '6800|22166|CwgO141js7MVj1ZBJuipKBsFjEhiKQyEzORUR4autPOHMNRgfs';
			(function(d) {
				var s = d.createElement('script');
				s.async = true;
				s.src = 'https://static.userback.io/widget/v1.js';
				(d.head || d.body).appendChild(s);
			})(document);
		</script>
	<?php } ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
	<a href="<?php echo get_site_url(); ?>/">
		<div class="logo-link"></div>
	</a>

	<?php include(get_template_directory() . '/includes/navbar/navbar-pepi.php'); ?>