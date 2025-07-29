<?php if (is_page('Join Us') || is_page('Campus Recruiting') || is_page('Experienced Hire Recruiting')) { ?>
    <?php get_template_part('includes/general/contact-form'); ?>

    <?php get_template_part('includes/general/cta-banner-intelligence'); ?>

<?php } ?>

<footer class="footer event-footer" role="contentinfo" itemscope itemtype="//schema.org/WPFooter">

    <div class="container">
        <div class="row">
            <div class="col-md-4 flex vcenter">
                <div class="logo-ctn d-flex flex-column">
                    <a href="https://www.alvarezandmarsal.com/" target="_blank">
                        <img class="mb-3 d-block" src="<?php echo get_template_directory_uri(); ?>/images/A&M logo copywhite.svg" alt="Alvarez and Marsal - Global TAG" width="108" /></a>
                </div>
            </div>
            <div class="col-12">
                <div id="bs-example-navbar-collapse-1">
                    <ul id="menu-main-menu" class="nav navbar-nav top-nav cf flex-column flex-md-row mt-4 mb-5">
                        <li id="menu-item-14" class="nav-links news-current menu-item menu-item-type-custom menu-item-object-custom menu-item-14">
                            <a rel="m_PageScroll2id" href="#photo">Photo Gallery</a>
                        </li>

                        <li id="menu-item-17" class="nav-links menu-item menu-item-type-custom menu-item-object-custom menu-item-17">
                            <a rel="m_PageScroll2id" href="#video">video recap</a>
                        </li>

                    </ul>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="copyright text-center event-text">
                    <label>
                        © Copyright <?php echo currentYear(); ?>. Alvarez & Marsal Holdings, LLC. All Rights Reserved.
                    </label>
                </div>
            </div>

        </div>
    </div>

    <script>
        function pauseIframes() {
            console.log('pauseIframes');
            $('iframe').each(function() {
                this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                this.contentWindow.postMessage('{"method":"pause","value":""}', '*');
            });
        }

        function playIframe(frame) {
            console.log('playiframe');
            var parent = $(frame).parent();
            var iframe = $(parent).children('iframe');
            var bgcover = $(parent).children('.video-bg-cover');
            var textctn = $(parent).children('.hero-s-text');
            var player = new Vimeo.Player(iframe);
            $(bgcover).hide();
            $(textctn).hide();
            $(iframe).show();
            player.play();
        }


        $(document).ready(function() {


            jQuery('img.svg').each(function() {
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');

                jQuery.get(imgURL, function(data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = jQuery(data).find('svg');

                    // Add replaced image's ID to the new SVG
                    if (typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if (typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass + ' replaced-svg');
                    }

                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a');

                    // Replace image with new SVG
                    $img.replaceWith($svg);

                }, 'xml');

            });

            var base_url = "<?php echo site_url(); ?>/"; //CHANGE THIS WHEN LIVE
            if ($('#menu-who-we-are li').hasClass('current-menu-item')) {
                $('.t-dropdown').addClass('current-menu-item');
            }
            if ($('#menu-what-we-do li').hasClass('current-menu-item')) {
                $('.s-dropdown').addClass('current-menu-item');
            }
            if ($('#menu-join-us li').hasClass('current-menu-item')) {
                $('.i-dropdown').addClass('current-menu-item');
            }
            if ($('#menu-other-sites li').hasClass('current-menu-item')) {
                $('.o-dropdown').addClass('current-menu-item');
            }

            $(".open-btn").click(function() {
                $(".primary-menu-ctn").addClass("active");
                $("header").addClass("d-none");
                $("body").addClass("overflow-hidden");



            });

            $(".close-btn").click(function() {
                $(".primary-menu-ctn").removeClass("active");
                $(".primary-menu-ctn").removeClass("s-drop");
                $(".primary-menu-ctn").removeClass("o-drop");
                $(".primary-menu-ctn").removeClass("t-drop");
                $(".primary-menu-ctn").removeClass("i-drop");
                $("header").removeClass("d-none");
                $("body").removeClass("overflow-hidden");


            });
            $("#info").click(function() {
                $(".primary-menu-ctn").removeClass("active");
                $(".primary-menu-ctn").removeClass("s-drop");
                $(".primary-menu-ctn").removeClass("o-drop");
                $(".primary-menu-ctn").removeClass("t-drop");
                $(".primary-menu-ctn").removeClass("i-drop");
                $("header").removeClass("d-none");
                $("body").removeClass("overflow-hidden");


            });

            $(".close-btn-s-dropdown").click(function() {
                $(".wwd-sub").removeClass("s-drop");
            });
            $(".close-btn-t-dropdown").click(function() {
                $(".wwd-sub").removeClass("t-drop");
            });
            $(".close-btn-o-dropdown").click(function() {
                $(".wwd-sub").removeClass("o-drop");
            });
            $(".close-btn-i-dropdown").click(function() {
                $(".wwd-sub").removeClass("i-drop");
            });
            $(".close-btn-r-dropdown").click(function() {
                $(".wwd-sub").removeClass("r-drop");
            });

            $(".primary-menu-body .s-dropdown").click(function(e) {
                e.preventDefault();
                $(".primary-menu-ctn").removeClass("t-drop");
                $(".primary-menu-ctn").removeClass("o-drop");
                $(".primary-menu-ctn").removeClass("i-drop");
                $(".primary-menu-ctn").removeClass("r-drop");

                $(".primary-menu-ctn").toggleClass("s-drop");

            });




            $(".primary-menu-body .t-dropdown").click(function(e) {
                e.preventDefault();
                $(".primary-menu-ctn").removeClass("o-drop");
                $(".primary-menu-ctn").removeClass("s-drop");
                $(".primary-menu-ctn").removeClass("i-drop");
                $(".primary-menu-ctn").removeClass("r-drop");
                $(".primary-menu-ctn").toggleClass("t-drop");
            });


            $(".primary-menu-body .o-dropdown").click(function(e) {
                e.preventDefault();
                $(".primary-menu-ctn").removeClass("t-drop");
                $(".primary-menu-ctn").removeClass("s-drop");
                $(".primary-menu-ctn").removeClass("i-drop");
                $(".primary-menu-ctn").removeClass("r-drop");
                $(".primary-menu-ctn").toggleClass("o-drop");
            });

            $(".primary-menu-body .i-dropdown").click(function(e) {
                e.preventDefault();
                $(".primary-menu-ctn").removeClass("t-drop");
                $(".primary-menu-ctn").removeClass("s-drop");
                $(".primary-menu-ctn").removeClass("o-drop");
                $(".primary-menu-ctn").removeClass("r-drop");
                $(".primary-menu-ctn").toggleClass("i-drop");
            });
            $(".primary-menu-body .r-dropdown").click(function(e) {
                e.preventDefault();
                $(".primary-menu-ctn").removeClass("t-drop");
                $(".primary-menu-ctn").removeClass("s-drop");
                $(".primary-menu-ctn").removeClass("o-drop");
                $(".primary-menu-ctn").removeClass("i-drop");
                $(".primary-menu-ctn").toggleClass("r-drop");

            });
            $(".footer .o-dropdown").click(function(e) {
                e.preventDefault();
                $(".primary-menu-ctn").addClass("active");
                $("header").addClass("d-none");
                $(".primary-menu-ctn").toggleClass("o-drop");
            });


            $(document).ready(function() {
                $(".primary-menu-list a").click(function() {
                    $(".primary-menu-ctn").removeClass("active");
                    $(".primary-menu-ctn").removeClass("s-drop o-drop t-drop i-drop r-drop");
                    $("header").removeClass("d-none");
                    $("body").removeClass("overflow-hidden");
                });
            });



            <?php
            if (is_page('who-we-are')): ?>
            console.log('currently on page who we are');
            $("#menu-who-we-are .gm").click(function() {
                $("#close-btn").click();
            });
            <?php endif; ?>

            $(".search .search-btn").click(function(e) {
                console.log('search-btn hit');
                e.preventDefault();
                if ($(this).parent().hasClass('active')) {
                    window.location.href = base_url + "?s=" + $("#search-field").val();
                } else {
                    $(".search").addClass('active');
                }
            });
            $(".search .search-btn-2").click(function(e) {
                console.log('search-btn-2 hit');
                e.preventDefault();
                if ($(this).parent().hasClass('active')) {
                    window.location.href = base_url + "?s=" + $("#search-field-2").val();
                } else {
                    $(".search").addClass('active');
                }
            });
            $("#search-field").on('keyup', function(e) {
                if (e.key === 'Enter' || e.keyCode === 13) {
                    window.location.href = base_url + "?s=" + $(this).val();
                }
            });


            $("#search-field-2").on('keyup', function(e) {
                if (e.key === 'Enter' || e.keyCode === 13) {
                    window.location.href = base_url + "?s=" + $(this).val();
                }
            });
        });
    </script>



</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
</body>

</html> <!-- close that html tag -->