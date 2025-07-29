<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/bones/library/scss/navbar/navbar.css"/>

<header id="pepi-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 flex">
                <div class="grid-header">
                    <div id="open-btn" class="header-item menu-btn">
                        <div class="menu-brgr">
                            <div class="line line1">
                            </div>
                            <div class="line line2">
                            </div>
                            <div class="line line3">
                            </div>
                        </div>
                    </div>
                    <div class="header-item logo">
                        <a href="<?php echo site_url() ?>"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/library/images/navbar/logo-amglobaltag.svg" alt="Alvarez and Marsal - Global TAG" /></a>
                    </div>
                    <div class="header-item title">
                        <a href="https://www.alvarezandmarsal.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/navbar/site-title.png" alt="Alvarez and Marsal" /></a>
                    </div>
                    <div class="header-item search">
                        <!--<input type="text" id="search-field" placeholder="Search Insights" name="search-field" /><a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="primary-menu-ctn">
    <div class="submenu-bg">
    </div>
    <div class="whoweare-submenu-ctn submenu-ctn">
        <div class="primary-menu-body">
            <div class="primary-menu-head">
            </div>
            <div class="primary-menu-list-ctn">
            <div class="primary-menu-list">
            <?php 
                wp_nav_menu(array(
         'container' => false,                           // remove nav container
         'menu' => __( 'Who We Are Submenu', 'bonestheme' ),  // nav name
         'before' => '',                                 // before the menu
           'after' => '',                                  // after the menu
           'link_before' => '',                            // before each link
           'link_after' => '',                             // after each link
           'depth' => 0,                                   // limit the depth of the nav
         'fallback_cb' => ''                             // fallback function (if there is one)
                )); 
            ?>
            </div>
            </div>
        </div>
    </div>
    <div class="whatwedo-submenu-ctn submenu-ctn">
        <div class="primary-menu-body">
            <div class="primary-menu-head">
            </div>
            <div class="primary-menu-list-ctn">
            <div class="primary-menu-list">
            <?php 
                wp_nav_menu(array(
         'container' => false,                           // remove nav container
         'menu' => __( 'What We Do Submenu', 'bonestheme' ),  // nav name
         'before' => '',                                 // before the menu
           'after' => '',                                  // after the menu
           'link_before' => '',                            // before each link
           'link_after' => '',                             // after each link
           'depth' => 0,                                   // limit the depth of the nav
         'fallback_cb' => ''                             // fallback function (if there is one)
                )); 
            ?>
            </div>
            </div>
        </div>
    </div>
    <div class="industryinsights-submenu-ctn submenu-ctn">
        <div class="primary-menu-body">
            <div class="primary-menu-head">
            </div>
            <div class="primary-menu-list-ctn">
            <div class="primary-menu-list">
            <?php 
                wp_nav_menu(array(
         'container' => false,                           // remove nav container
         'menu' => __( 'Industry Insights Submenu', 'bonestheme' ),  // nav name
         'before' => '',                                 // before the menu
           'after' => '',                                  // after the menu
           'link_before' => '',                            // before each link
           'link_after' => '',                             // after each link
           'depth' => 0,                                   // limit the depth of the nav
         'fallback_cb' => ''                             // fallback function (if there is one)
                )); 
            ?>
            </div>
            </div>
        </div>
    </div>
    <div class="othersites-submenu-ctn submenu-ctn">
        <div class="primary-menu-body">
            <div class="primary-menu-head">
            </div>
            <div class="primary-menu-list-ctn">
            <div class="primary-menu-list">
            <?php 
                wp_nav_menu(array(
         'container' => false,                           // remove nav container
         'menu' => __( 'Other Sites Submenu', 'bonestheme' ),  // nav name
         'before' => '',                                 // before the menu
           'after' => '',                                  // after the menu
           'link_before' => '',                            // before each link
           'link_after' => '',                             // after each link
           'depth' => 0,                                   // limit the depth of the nav
         'fallback_cb' => ''                             // fallback function (if there is one)
                )); 
            ?>
            </div>
            </div>
        </div>
    </div>
    <div class="primary-menu-body">
        <div class="primary-menu-head">
            <div id="close-btn" class="menu-btn">
                <div class="menu-brgr">
                    <div class="line line1">
                    </div>
                    <div class="line line2">
                    </div>
                </div>
            </div>
            <div class="logo white-logo">
                <a href="<?php echo site_url() ?>"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/library/images/navbar/logo-amglobaltag.svg" alt="Alvarez and Marsal - Global TAG" /></a>
            </div>
        </div>
        <div class="primary-menu-list-ctn">
        <div class="primary-menu-list">
    <?php /* wp_nav_menu(array(
    'container' => false,                           // remove nav container
    'menu' => __( 'Primary Menu', 'primer' ),  // nav name
    'theme_location' => 'primary',                 // where it's located in the theme
    'before' => '',                                 // before the menu
    'after' => '',                                  // after the menu
    'link_before' => '',                            // before each link
    'link_after' => '',                             // after each link
    'depth' => 0,                                   // limit the depth of the nav
    'fallback_cb' => ''                             // fallback function (if there is one)
    ));  */?>

    <?php 
        wp_nav_menu(array(
         'container' => false,                           // remove nav container
         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
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
        </div>

    </div>
</div>