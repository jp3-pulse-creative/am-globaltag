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

    <title><?php wp_title(' - ', true, 'right'); ?></title>

    <?php // mobile meta (hooray!)
    ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/)
    ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
    <?php // or, set /favicon.ico for IE10 win
    ?>
    <meta name="msapplication-TileColor" content="#b2b2b2">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#abc2c8">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php // wordpress head functions
    ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head
    ?>

    <?php // drop Google Analytics Here
    ?>
    <?php // end analytics
    ?>

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

    <script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/library/js/isotope.pkgd.min.js'></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/lity.js"></script>

    <!--adding versioning via filetime -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/custom-scripts.js?ver=<?php echo filemtime(get_template_directory() . '/library/js/custom-scripts.js'); ?>"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/all.css">
    <!--<link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/lity.css" />
    <script type="text/javascript" src="//fast.fonts.net/jsapi/8440c163-8d14-4a4a-acf3-d9d4348389b3.js"></script>
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

<body>
<header id="sticky-header" class="header bg-white pt-0 header-event">
    <div class="container">
        <div class="row d-none d-md-block">

            <div class="col-sm-12 px-0">
                <div class="d-flex justify-content-between align-items-end">

                    <div class="header-item logo event-logo">
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">

                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-event.svg" alt="Alvarez and Marsal - Global" />

                        </a>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="header-item title d-none d-lg-flex justify-content-end">
                            <a href="https://www.alvarezandmarsal.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-global-logo-event.svg"  alt="Alvarez and Marsal - Global" />

                            </a>
                        </div>
                        <div id="bs-example-navbar-collapse-1">
                            <ul id="menu-main-menu" class="nav navbar-nav top-nav cf flex-row">
                                <li id="menu-item-14" class="nav-links news-current menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a rel="m_PageScroll2id" href="#photo">photo gallery</a></li>
                                <li id="menu-item-17" class="nav-links menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a rel="m_PageScroll2id" href="#video">video recap</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row d-block d-md-none">

            <div class="col-sm-12 px-0">
                <div class="grid grid-header">
                    <div id="open-btn" class="header-item menu-btn open-btn">
                        <div class="menu-brgr">
                            <div class="line line1">
                            </div>
                            <div class="line line2">
                            </div>
                            <div class="line line3">
                            </div>
                        </div>
                    </div>

                    <div class="header-item logo event-logo d-flex">
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">

                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-event.svg" width="220" height="68" alt="Alvarez and Marsal - Global" />

                        </a>
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-global-logo-event.svg"  alt="Alvarez and Marsal - Global" />

                        </a>
                    </div>

                    <div class="header-item title d-none d-lg-block">
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">
                            <svg id="Alvarez_Marsal" data-name="Alvarez &amp; Marsal" xmlns="http://www.w3.org/2000/svg" width="144.179" height="11.528" viewBox="0 0 144.179 11.528">
                                <path id="Path_233" data-name="Path 233" d="M464.3,392.927h2.2l5.1,11.262H469.52l-1.48-3.4h-5.5l-1.538,3.4h-2.012Zm3.205,6.641-2.162-4.974-2.254,4.974Z" transform="translate(-458.991 -392.927)" fill="#fff" />
                                <path id="Path_234" data-name="Path 234" d="M464.678,394.123h1.432v7.367h5.232v.992h-6.663Z" transform="translate(-450.878 -391.221)" fill="#fff" />
                                <path id="Path_235" data-name="Path 235" d="M468.4,394.123l3,7.119,2.977-7.119h1.585l-3.819,8.359h-1.5l-3.8-8.359Z" transform="translate(-447.796 -391.221)" fill="#fff" />
                                <path id="Path_236" data-name="Path 236" d="M473.782,394.123h1.6l3.8,8.359H477.62l-1.1-2.519h-4.089l-1.14,2.519h-1.451Zm2.339,4.923-1.606-3.688-1.667,3.688Z" transform="translate(-443.513 -391.221)" fill="#fff" />
                                <path id="Path_237" data-name="Path 237" d="M474.154,394.123h4.739a5.593,5.593,0,0,1,1.929.279,1.979,1.979,0,0,1,1.441,1.98,1.861,1.861,0,0,1-.388,1.223,2.712,2.712,0,0,1-1.094.772,2.192,2.192,0,0,1,.927.522,1.6,1.6,0,0,1,.347,1.053l.058,1.119a2.827,2.827,0,0,0,.1.711.728.728,0,0,0,.454.51v.192h-1.749a.808.808,0,0,1-.112-.279,4.159,4.159,0,0,1-.065-.653l-.078-1.4a1.152,1.152,0,0,0-.735-1.1,3.487,3.487,0,0,0-1.23-.158h-3.111v3.589h-1.432Zm4.584,3.836a3.043,3.043,0,0,0,1.517-.32,1.381,1.381,0,0,0-.223-2.356,3.038,3.038,0,0,0-1.114-.167h-3.332v2.844Z" transform="translate(-437.36 -391.221)" fill="#fff" />
                                <path id="Path_238" data-name="Path 238" d="M478.108,394.123h6.646v1.012H479.3v2.536h5.04v.992H479.3v2.827h5.518v.992h-6.709Z" transform="translate(-431.72 -391.221)" fill="#fff" />
                                <path id="Path_239" data-name="Path 239" d="M481.417,401.548l6.408-6.433h-5.93v-.992h7.729v.971l-6.426,6.4h6.426v.992h-8.206Z" transform="translate(-427 -391.221)" fill="#fff" />
                                <path id="Path_240" data-name="Path 240" d="M488.91,396.567a2.286,2.286,0,0,1-.306-1.087,2.214,2.214,0,0,1,.92-1.813,3.867,3.867,0,0,1,2.461-.725,3.532,3.532,0,0,1,2.288.672,2.014,2.014,0,0,1,.825,1.6,2.561,2.561,0,0,1-.852,1.9,7.986,7.986,0,0,1-1.665,1.1l2.567,2.448q.237-.615.328-.917a6.928,6.928,0,0,0,.192-.854h1.679a6.9,6.9,0,0,1-.65,2.077c-.325.662-.485.927-.485.8l2.46,2.393h-2.186l-1.32-1.252a6.638,6.638,0,0,1-1.437.975,5.994,5.994,0,0,1-2.621.544,4.516,4.516,0,0,1-3.188-.944,2.868,2.868,0,0,1-.992-2.118,2.7,2.7,0,0,1,.966-2.123,11.052,11.052,0,0,1,2.208-1.3A5.89,5.89,0,0,1,488.91,396.567Zm4.154,6.294a3.706,3.706,0,0,0,1.172-.871l-3.176-3.1a9.406,9.406,0,0,0-1.747,1.1,1.82,1.82,0,0,0-.628,1.4,1.514,1.514,0,0,0,.815,1.378,3.394,3.394,0,0,0,1.742.478A3.96,3.96,0,0,0,493.065,402.862Zm-.136-6.36a1.561,1.561,0,0,0,.563-1.157,1.089,1.089,0,0,0-.41-.857,1.624,1.624,0,0,0-1.111-.362,1.7,1.7,0,0,0-1.473.565,1.046,1.046,0,0,0-.211.633,1.461,1.461,0,0,0,.32.893,9.169,9.169,0,0,0,1.075,1.121A7.453,7.453,0,0,0,492.929,396.5Z" transform="translate(-419.138 -392.906)" fill="#fff" />
                                <path id="Path_241" data-name="Path 241" d="M493.719,392.927h2.7l4.035,9.522,4.043-9.522h2.691v11.262H505.4v-6.651c0-.226.015-.611.041-1.143s.034-1.1.034-1.708l-4.081,9.5H499.5l-4.065-9.5v.347c0,.274.015.7.039,1.262s.039.978.039,1.242v6.651h-1.793Z" transform="translate(-409.451 -392.927)" fill="#fff" />
                                <path id="Path_242" data-name="Path 242" d="M503.666,394.123h1.6l3.8,8.359H507.5l-1.1-2.519h-4.094l-1.138,2.519h-1.453Zm2.341,4.923-1.609-3.688-1.669,3.688Z" transform="translate(-400.886 -391.221)" fill="#fff" />
                                <path id="Path_243" data-name="Path 243" d="M504.076,394.123h4.741a5.6,5.6,0,0,1,1.932.279,1.979,1.979,0,0,1,1.441,1.98,1.849,1.849,0,0,1-.391,1.223,2.7,2.7,0,0,1-1.092.772,2.2,2.2,0,0,1,.925.522,1.6,1.6,0,0,1,.347,1.053l.058,1.119a2.977,2.977,0,0,0,.1.711.737.737,0,0,0,.456.51v.192h-1.752a.857.857,0,0,1-.109-.279,4.887,4.887,0,0,1-.066-.653l-.078-1.4a1.152,1.152,0,0,0-.735-1.1,3.488,3.488,0,0,0-1.23-.158h-3.113v3.589h-1.432Zm4.586,3.836a3.053,3.053,0,0,0,1.519-.32,1.383,1.383,0,0,0-.223-2.356,3.047,3.047,0,0,0-1.114-.167h-3.336v2.844Z" transform="translate(-394.676 -391.221)" fill="#fff" />
                                <path id="Path_244" data-name="Path 244" d="M509.275,399.9a1.98,1.98,0,0,0,.4,1.155,2.925,2.925,0,0,0,2.385.832,4.828,4.828,0,0,0,1.4-.187q1.219-.342,1.218-1.257a1.024,1.024,0,0,0-.519-.973,5.793,5.793,0,0,0-1.638-.493l-1.374-.257a7.1,7.1,0,0,1-1.9-.548,1.681,1.681,0,0,1-.963-1.563,2.228,2.228,0,0,1,.946-1.847,4.355,4.355,0,0,1,2.684-.721,5.434,5.434,0,0,1,2.715.633,2.144,2.144,0,0,1,1.116,2.019H514.4a1.873,1.873,0,0,0-.437-1.026,2.818,2.818,0,0,0-2.1-.653,2.777,2.777,0,0,0-1.723.422,1.24,1.24,0,0,0-.527.98.932.932,0,0,0,.619.893,9.734,9.734,0,0,0,1.842.459l1.419.26a5.2,5.2,0,0,1,1.589.536,1.869,1.869,0,0,1,.966,1.694,2.048,2.048,0,0,1-1.23,1.985,6.519,6.519,0,0,1-2.858.6,4.895,4.895,0,0,1-2.973-.8,2.461,2.461,0,0,1-1.053-2.143Z" transform="translate(-389.171 -391.334)" fill="#fff" />
                                <path id="Path_245" data-name="Path 245" d="M515.406,394.123H517l3.792,8.359h-1.553l-1.1-2.519h-4.091l-1.141,2.519h-1.451Zm2.344,4.923-1.606-3.688-1.674,3.688Z" transform="translate(-384.135 -391.221)" fill="#fff" />
                                <path id="Path_246" data-name="Path 246" d="M515.663,394.123H517.1v7.367h5.229v.992h-6.663Z" transform="translate(-378.147 -391.221)" fill="#fff" />
                            </svg>
                        </a>
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">
                            <span class="header-item title title--global">Global</span>

                        </a>
                    </div>
                    <div class="header-item search">
                        <input type="text" id="search-field" placeholder="Search Insights" name="search-field" /><a class="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header id="sticky-header-2" class="d-lg-block bg-white header header-2 pt-0 header-event">
    <div class="container">
        <div class="row d-none d-md-block">

            <div class="col-sm-12 px-0">
                <div class="d-flex justify-content-between align-items-end">

                    <div class="header-item logo event-logo">
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">

                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-event.svg" alt="Alvarez and Marsal - Global" />

                        </a>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="header-item d-flex justify-content-end">
                            <a href="https://www.alvarezandmarsal.com/" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-global-logo-event.svg"  alt="Alvarez and Marsal - Global" />

                            </a>
                        </div>
                        <div id="bs-example-navbar-collapse-1">
                            <ul id="menu-main-menu" class="nav navbar-nav top-nav cf flex-row">
                                <li id="menu-item-14" class="nav-links news-current menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a rel="m_PageScroll2id" href="#photo">photo gallery</a></li>
                                <li id="menu-item-17" class="nav-links menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a rel="m_PageScroll2id" href="#video">video recap</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row d-block d-md-none">

            <div class="col-sm-12 px-0">
                <div class="grid grid-header">
                    <div id="open-btn" class="header-item menu-btn open-btn">
                        <div class="menu-brgr">
                            <div class="line line1">
                            </div>
                            <div class="line line2">
                            </div>
                            <div class="line line3">
                            </div>
                        </div>
                    </div>

                    <div class="header-item logo event-logo d-flex justify-content-end">
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">

                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-event.svg" width="220" height="68" alt="Alvarez and Marsal - Global" />

                        </a>
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-global-logo-event.svg"  alt="Alvarez and Marsal - Global" />

                        </a>
                    </div>

                    <div class="header-item title d-none d-lg-block">
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">
                            <svg id="Alvarez_Marsal" data-name="Alvarez &amp; Marsal" xmlns="http://www.w3.org/2000/svg" width="144.179" height="11.528" viewBox="0 0 144.179 11.528">
                                <path id="Path_233" data-name="Path 233" d="M464.3,392.927h2.2l5.1,11.262H469.52l-1.48-3.4h-5.5l-1.538,3.4h-2.012Zm3.205,6.641-2.162-4.974-2.254,4.974Z" transform="translate(-458.991 -392.927)" fill="#fff" />
                                <path id="Path_234" data-name="Path 234" d="M464.678,394.123h1.432v7.367h5.232v.992h-6.663Z" transform="translate(-450.878 -391.221)" fill="#fff" />
                                <path id="Path_235" data-name="Path 235" d="M468.4,394.123l3,7.119,2.977-7.119h1.585l-3.819,8.359h-1.5l-3.8-8.359Z" transform="translate(-447.796 -391.221)" fill="#fff" />
                                <path id="Path_236" data-name="Path 236" d="M473.782,394.123h1.6l3.8,8.359H477.62l-1.1-2.519h-4.089l-1.14,2.519h-1.451Zm2.339,4.923-1.606-3.688-1.667,3.688Z" transform="translate(-443.513 -391.221)" fill="#fff" />
                                <path id="Path_237" data-name="Path 237" d="M474.154,394.123h4.739a5.593,5.593,0,0,1,1.929.279,1.979,1.979,0,0,1,1.441,1.98,1.861,1.861,0,0,1-.388,1.223,2.712,2.712,0,0,1-1.094.772,2.192,2.192,0,0,1,.927.522,1.6,1.6,0,0,1,.347,1.053l.058,1.119a2.827,2.827,0,0,0,.1.711.728.728,0,0,0,.454.51v.192h-1.749a.808.808,0,0,1-.112-.279,4.159,4.159,0,0,1-.065-.653l-.078-1.4a1.152,1.152,0,0,0-.735-1.1,3.487,3.487,0,0,0-1.23-.158h-3.111v3.589h-1.432Zm4.584,3.836a3.043,3.043,0,0,0,1.517-.32,1.381,1.381,0,0,0-.223-2.356,3.038,3.038,0,0,0-1.114-.167h-3.332v2.844Z" transform="translate(-437.36 -391.221)" fill="#fff" />
                                <path id="Path_238" data-name="Path 238" d="M478.108,394.123h6.646v1.012H479.3v2.536h5.04v.992H479.3v2.827h5.518v.992h-6.709Z" transform="translate(-431.72 -391.221)" fill="#fff" />
                                <path id="Path_239" data-name="Path 239" d="M481.417,401.548l6.408-6.433h-5.93v-.992h7.729v.971l-6.426,6.4h6.426v.992h-8.206Z" transform="translate(-427 -391.221)" fill="#fff" />
                                <path id="Path_240" data-name="Path 240" d="M488.91,396.567a2.286,2.286,0,0,1-.306-1.087,2.214,2.214,0,0,1,.92-1.813,3.867,3.867,0,0,1,2.461-.725,3.532,3.532,0,0,1,2.288.672,2.014,2.014,0,0,1,.825,1.6,2.561,2.561,0,0,1-.852,1.9,7.986,7.986,0,0,1-1.665,1.1l2.567,2.448q.237-.615.328-.917a6.928,6.928,0,0,0,.192-.854h1.679a6.9,6.9,0,0,1-.65,2.077c-.325.662-.485.927-.485.8l2.46,2.393h-2.186l-1.32-1.252a6.638,6.638,0,0,1-1.437.975,5.994,5.994,0,0,1-2.621.544,4.516,4.516,0,0,1-3.188-.944,2.868,2.868,0,0,1-.992-2.118,2.7,2.7,0,0,1,.966-2.123,11.052,11.052,0,0,1,2.208-1.3A5.89,5.89,0,0,1,488.91,396.567Zm4.154,6.294a3.706,3.706,0,0,0,1.172-.871l-3.176-3.1a9.406,9.406,0,0,0-1.747,1.1,1.82,1.82,0,0,0-.628,1.4,1.514,1.514,0,0,0,.815,1.378,3.394,3.394,0,0,0,1.742.478A3.96,3.96,0,0,0,493.065,402.862Zm-.136-6.36a1.561,1.561,0,0,0,.563-1.157,1.089,1.089,0,0,0-.41-.857,1.624,1.624,0,0,0-1.111-.362,1.7,1.7,0,0,0-1.473.565,1.046,1.046,0,0,0-.211.633,1.461,1.461,0,0,0,.32.893,9.169,9.169,0,0,0,1.075,1.121A7.453,7.453,0,0,0,492.929,396.5Z" transform="translate(-419.138 -392.906)" fill="#fff" />
                                <path id="Path_241" data-name="Path 241" d="M493.719,392.927h2.7l4.035,9.522,4.043-9.522h2.691v11.262H505.4v-6.651c0-.226.015-.611.041-1.143s.034-1.1.034-1.708l-4.081,9.5H499.5l-4.065-9.5v.347c0,.274.015.7.039,1.262s.039.978.039,1.242v6.651h-1.793Z" transform="translate(-409.451 -392.927)" fill="#fff" />
                                <path id="Path_242" data-name="Path 242" d="M503.666,394.123h1.6l3.8,8.359H507.5l-1.1-2.519h-4.094l-1.138,2.519h-1.453Zm2.341,4.923-1.609-3.688-1.669,3.688Z" transform="translate(-400.886 -391.221)" fill="#fff" />
                                <path id="Path_243" data-name="Path 243" d="M504.076,394.123h4.741a5.6,5.6,0,0,1,1.932.279,1.979,1.979,0,0,1,1.441,1.98,1.849,1.849,0,0,1-.391,1.223,2.7,2.7,0,0,1-1.092.772,2.2,2.2,0,0,1,.925.522,1.6,1.6,0,0,1,.347,1.053l.058,1.119a2.977,2.977,0,0,0,.1.711.737.737,0,0,0,.456.51v.192h-1.752a.857.857,0,0,1-.109-.279,4.887,4.887,0,0,1-.066-.653l-.078-1.4a1.152,1.152,0,0,0-.735-1.1,3.488,3.488,0,0,0-1.23-.158h-3.113v3.589h-1.432Zm4.586,3.836a3.053,3.053,0,0,0,1.519-.32,1.383,1.383,0,0,0-.223-2.356,3.047,3.047,0,0,0-1.114-.167h-3.336v2.844Z" transform="translate(-394.676 -391.221)" fill="#fff" />
                                <path id="Path_244" data-name="Path 244" d="M509.275,399.9a1.98,1.98,0,0,0,.4,1.155,2.925,2.925,0,0,0,2.385.832,4.828,4.828,0,0,0,1.4-.187q1.219-.342,1.218-1.257a1.024,1.024,0,0,0-.519-.973,5.793,5.793,0,0,0-1.638-.493l-1.374-.257a7.1,7.1,0,0,1-1.9-.548,1.681,1.681,0,0,1-.963-1.563,2.228,2.228,0,0,1,.946-1.847,4.355,4.355,0,0,1,2.684-.721,5.434,5.434,0,0,1,2.715.633,2.144,2.144,0,0,1,1.116,2.019H514.4a1.873,1.873,0,0,0-.437-1.026,2.818,2.818,0,0,0-2.1-.653,2.777,2.777,0,0,0-1.723.422,1.24,1.24,0,0,0-.527.98.932.932,0,0,0,.619.893,9.734,9.734,0,0,0,1.842.459l1.419.26a5.2,5.2,0,0,1,1.589.536,1.869,1.869,0,0,1,.966,1.694,2.048,2.048,0,0,1-1.23,1.985,6.519,6.519,0,0,1-2.858.6,4.895,4.895,0,0,1-2.973-.8,2.461,2.461,0,0,1-1.053-2.143Z" transform="translate(-389.171 -391.334)" fill="#fff" />
                                <path id="Path_245" data-name="Path 245" d="M515.406,394.123H517l3.792,8.359h-1.553l-1.1-2.519h-4.091l-1.141,2.519h-1.451Zm2.344,4.923-1.606-3.688-1.674,3.688Z" transform="translate(-384.135 -391.221)" fill="#fff" />
                                <path id="Path_246" data-name="Path 246" d="M515.663,394.123H517.1v7.367h5.229v.992h-6.663Z" transform="translate(-378.147 -391.221)" fill="#fff" />
                            </svg>
                        </a>
                        <a href="https://www.alvarezandmarsal.com/" target="_blank">
                            <span class="header-item title title--global">Global</span>

                        </a>
                    </div>
                    <div class="header-item search">
                        <input type="text" id="search-field" placeholder="Search Insights" name="search-field" /><a class="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="primary-menu-ctn wwd-sub">
    <div class="submenu-bg">
    </div>
    <div class="primary-menu-body">
        <div class="primary-menu-head">
            <div id="close-btn" class="menu-btn close-btn">
                <div class="menu-brgr">
                    <div class="line line1">
                    </div>
                    <div class="line line2">
                    </div>
                </div>
            </div>
            <div class="logo d-none">
                <a href="<?php echo site_url() ?>">

                    <img class="" src="<?php echo get_template_directory_uri(); ?>/library/images/reboot/am-tag-logo-white.svg" width="220" height="68" alt="Alvarez and Marsal - Global">
                </a>
            </div>
        </div>
        <div class="primary-menu-list-ctn">
            <div class="primary-menu-list event-list">
                <div id="bs-example-navbar-collapse-1">
                    <ul id="menu-main-menu" class="nav navbar-nav top-nav cf flex-row flex-column">
                        <li id="menu-item-14" class="nav-links news-current menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a rel="m_PageScroll2id" href="#photo">photo gallery</a></li>
                        <li id="menu-item-17" class="nav-links menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a rel="m_PageScroll2id" href="#video">video recap</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>