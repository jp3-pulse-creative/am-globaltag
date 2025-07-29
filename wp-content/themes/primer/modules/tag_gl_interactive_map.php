<style>
    #global-leadership-content #section-glv3 .glv3-backmap {

        opacity: .6;

    }

    .locations-overlay {
        position: absolute;
        top: 6rem;
        right: 10%;
        width: auto;
        height: auto;
        background: #fff;
        z-index: 999;


    }
</style>
<?php if (get_sub_field('recruity_map')) { ?>
    <section id="global-leadership-content" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/reboot/experienced-hire/am-tag-gl-map-bg.jpg); background-size: cover;">
        <div class="container pepi-row__pad-y pb-0" style="margin-bottom: -3rem;">
            <div class="row justify-content-center">
                <div class="col-12 px-0 d-flex flex-column align-items-center">
                    <div class="section-title text-white">Our Office Locations</div>
                    <div class="short-border bg-white"></div>
                </div>
            </div>
        </div>

        <div id="section-glv3" class="moby tabby tabby2 pt-0 bg-transparent">


            <div class="glv3-map-container mt-0 pt-0">
                <div class="locations-overlay">
                    <div class="locations-grid d-flex flex-wrap p-4">
                        <div class="location col-12 col-lg-4">
                            <h3 class="text-left location__name font-53-ex text-uppercase text-size-14 line-height-20 letter-spacing-261 text-bright-blue">
                                Location

                            </h3>
                            <p class="loacation__address text-size-16 line-height-20">
                                Monarch Tower
                                3424 Peachtree Road NE,
                                Suite 1500
                                Atlanta, Georgia, 30326
                            </p>
                        </div>
                    </div>




                </div>

                <!--desktop-->
                <div class="map-canvas position-relative mx-auto">
                    <a href="#northamerica"><img class="country glv3-on-northamerica hideme pop" data-toggle="collapse" data-target="#content-northamerica" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/TAG_Toronto_MapUpdate_Hover_02@2x.png"></a>
                    <a href="#latinamerica"> <img class="country glv3-on-latinamerica hideme" data-toggle="collapse" data-target="#content-lat" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_LatinAmerica-09082022.png"></a>
                    <a href="#europe"><img class="country glv3-on-europe hideme" data-toggle="collapse" data-target="#content-europe" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Europe-09192022.png"></a>
                    <a href="#india"> <img class="country glv3-on-india hideme" data-toggle="collapse" data-target="#content-india" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_India-09082022.png"></a>
                    <a href="#asia"> <img class="country glv3-on-asia hideme" data-toggle="collapse" data-target="#content-asia" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Asia-09082022.png"></a>
                    <a href="#australia"> <img class="country glv3-on-australia hideme" data-toggle="collapse" data-target="#content-asia" src="https://am-globaltag.local/wp-content/themes/primer/images/reboot/global-leadership/AMTAG_MapHover_081123.png"></a>

                    <img class="glv3-backmap opacityme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_Map_081123.png">
                </div>
                <!--/desktop-->



                <!--mobile-->
                <img class="country-2 glv3-on-asia hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Asia-09082022.png">
                <img class="country-2 glv3-on-europe hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Europe-09192022.png">
                <img class="country-2 glv3-on-india hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_India-09082022.png">
                <img class="country-2 glv3-on-latinamerica hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_LatinAmerica-09082022.png">
                <img class="country-2 glv3-on-northamerica hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/TAG_Toronto_MapUpdate_Hover_02@2x.png">
                <img class="country-2 glv3-on-australia hideme" src=" https://am-globaltag.local/wp-content/themes/primer/images/reboot/global-leadership/AMTAG_MapHover_081123.png">
                <img class="country-2 glv3-backmap-2" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_Map_081123.png">


                <!--/mobile-->

                <!--desktop nav-->
                <div class="glv3-map-nav">
                    <ul>
                        <li class="ff glv3-f" data-toggle="collapse" data-target="#content-northamerica"><a href="#northamerica" class="text-size-15 font-bold-cd text-white">North American &amp; CANADA</a></li>

                        <li class="bb glv3-b" data-toggle="collapse" data-target="#content-asia"><a href="#asia" class="text-size-15 font-bold-cd text-white">ASIA</a></li>

                        <li class="cc glv3-c" data-toggle="collapse" data-target="#content-europe"><a href="#europe" class="text-size-15 font-bold-cd text-white">EUROPE &amp; MIDDLE EAST (EMEA)</a>
                        </li>
                        <li class="gg glv3-g" data-toggle="collapse" data-target="#content-australia"><a href="#australia" class="text-size-15 font-bold-cd text-white">AUSTRALIA</a></li>

                        <li class="dd glv3-d" data-toggle="collapse" data-target="#content-india"><a href="#india" class="text-size-15 font-bold-cd text-white">INDIA</a>
                        </li><br>
                        <li class="ee glv3-e" data-toggle="collapse" data-target="#content-lat"><a href="#latinamerica" class="text-size-15 font-bold-cd text-white">LATIN
                                AMERICA</a></li>

                    </ul>
                </div>
                <!--/desktop nav-->

                <!--/-->
            </div>

        </div>

        <script>
            ///////////////////////////map function
            $(document).ready(function() {
                ////////////global ////////////
                $(".glv3-map-nav li").click(function() {

                    $('html, body').animate({
                        scrollTop: $('#global-leaders').offset().top - 280
                    }, 'slow');


                });


                $(".aa").hover(function() {
                    $(".glv3-on-global").removeClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").removeClass("hideme");




                    $(".aa").addClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".aa, .glv3-a").click(function() {
                    $(".glv3-on-global").removeClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");

                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.show().promise().then(function() {
                                return glWrap.animate({
                                    "opacity": "1.0"
                                }, 250);
                            });
                        });


                    }
                    glFiltersGo();

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").removeClass("hideme");

                    $(".aa").addClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").toggleClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                ////////////asia  ////////////
                $(".bb, .glv3-on-asia").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").removeClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");
                    $(".glv3-on-asia").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");


                    $(".aa").removeClass("active");
                    $(".bb").addClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".bb, .glv3-b, .glv3-on-asia").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").removeClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-backmap-2").addClass("hideme");


                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.asia");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").addClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").toggleClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                ////////////europe  ////////////
                $(".cc, .glv3-on-europe").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").removeClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");
                    $(".glv3-on-europe").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").addClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".cc, .glv3-c, .glv3-on-europe").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").removeClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");


                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.europe");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").addClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                });

                ////////////india  ////////////
                $(".dd, .glv3-on-india").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").removeClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-on-india").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").addClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".dd, .glv3-d, .glv3-on-india").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").removeClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.india");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").addClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").toggleClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");


                });

                ////////////latin america  ////////////
                $(".ee, .glv3-on-latinamerica").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").removeClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-on-latinamerica").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").addClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".ee, .glv3-e, .glv3-on-latinamerica").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").removeClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-backmap-2").addClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.latin-america");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").addClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").toggleClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                ////////////north america  ////////////
                $(".ff, .glv3-on-northamerica").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");


                    $(".glv3-on-northamerica").removeClass("hideme");
                    $(".glv3-on-northamerica").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").addClass("active");
                    $(".gg").removeClass("active");

                });

                $(".ff, .glv3-f, .glv3-on-northamerica").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-on-northamerica").removeClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.north-america");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").addClass("active");
                    $(".gg").removeClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").toggleClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                //////////// Australia ////////////
                $(".gg, .glv3-on-australia").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");


                    $(".glv3-on-australia").removeClass("hideme");
                    $(".glv3-on-australia").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").addClass("active");

                });

                $(".gg, .glv3-g, .glv3-on-australia").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");

                    $(".glv3-on-australia").removeClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.australia");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").addClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").toggleClass("collapsed");

                });

                ////
            });

            ///////////////////////////END map function

            ///////////////////////////accordian function
            $(document).ready(function() {
                //global
                $(".glv3-a").click(function() {
                    //close other countries
                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-asia .panel-toggle").toggleClass("collapsed");
                });
                //asia
                $(".glv3-b, .glv3-on-asia").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-asia .panel-toggle").toggleClass("collapsed");
                });
                //europe
                $(".glv3-c, .glv3-on-europe").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });
                //india
                $(".glv3-d, .glv3-on-india").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });
                //latin america
                $(".glv3-e, .glv3-on-latinamerica").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });
                //north america
                $(".glv3-f, .glv3-on-northamerica").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });

                $(".glv3-f, .glv3-on-australia").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });


                ///////////////////////////END accordian function


                ///////////////////////////scroll to ID offset DESKTOP
                $('.aa, .glv3-a').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#global").offset().top - 150
                    }, 100);
                });

                $('.bb, .glv3-b, .glv3-on-asia').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#asia").offset().top - 150
                    }, 100);
                });

                $('.cc, .glv3-c, .glv3-on-europe').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#europe").offset().top - 150
                    }, 100);
                });

                $('.dd, .glv3-d, .glv3-on-india').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#india").offset().top - 150
                    }, 100);
                });

                $('.ee, .glv3-e, .glv3-on-latinamerica').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#latinamerica").offset().top - 150
                    }, 100);
                });

                $('.ff, .glv3-f, .glv3-on-northamerica').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#northamerica").offset().top - 150
                    }, 100);
                });

                $('.gg, .glv3-g, .glv3-on-australia').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#australia").offset().top - 150
                    }, 100);
                });

                ////
            });
            ///////////////////////////END scroll to ID offset DESKTOP

            ///////////////////////////scroll to ID offset MOBILE
            //$(window).resize(function() {
            $(document).ready(function() {
                const mq = window.matchMedia("(min-width: 960px)");
                if (mq.matches) {
                    //DESKTOP--> look up there!

                } else {
                    //MOBILE

                    $('.aa, .glv3-a').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#global").offset().top - 100
                        }, 100);
                    });

                    $('.bb, .glv3-b, .glv3-on-asia').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#asia").offset().top - 100
                        }, 100);
                    });

                    $('.cc, .glv3-c, .glv3-on-europe').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#europe").offset().top - 100
                        }, 100);
                    });

                    $('.dd, .glv3-d, .glv3-on-india').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#india").offset().top - 100
                        }, 100);
                    });

                    $('.ee, .glv3-e, .glv3-on-latinamerica').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#latinamerica").offset().top - 100
                        }, 100);
                    });

                    $('.ff, .glv3-f, .glv3-on-northamerica').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#northamerica").offset().top - 100
                        }, 100);
                    });

                    $('.g, .glv3-g, .glv3-on-australia').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#australia").offset().top - 100
                        }, 100);
                    });


                    ///////////
                    //global
                    $(".glv3-a").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //asia
                    $(".glv3-b").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").removeClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");




                    });

                    //europe
                    $(".glv3-c").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").removeClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //india
                    $(".glv3-d").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").removeClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //latin america
                    $(".glv3-e").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").removeClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //north america
                    $(".glv3-f").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").removeClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });

                    //australia
                    $(".glv3-g").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").removeClass("hideme");

                    });







                    //
                }
                ////
            });





            ///////////////////////////END scroll to ID offset MOBILE
            //tablet landscape

            //$(window).resize(function() {


            //https://stackoverflow.com/questions/7715124/do-something-if-screen-width-is-less-than-960-px

            //www.w3schools.com/howto/tryit.asp?filename=tryhow_js_matchmedia
        </script>
    </section>

<?php } else { ?>

    <section id="global-leadership-content" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/reboot/experienced-hire/am-tag-gl-map-bg.jpg); background-size: cover;">
        <div class="container pepi-row__pad-y pb-0" style="margin-bottom: -3rem;">
            <div class="row justify-content-center">
                <div class="col-12 px-0 d-flex flex-column align-items-center">
                    <div class="section-title text-white">Our Office Locations</div>
                    <div class="short-border bg-white"></div>
                </div>
            </div>
        </div>

        <div id="section-glv3" class="moby tabby tabby2 pt-0 bg-transparent">
            <div class="glv3-map-container mt-0 pt-0">


                <!--desktop-->
                <div class="map-canvas position-relative mx-auto">
                    <a href="#northamerica"><img class="country glv3-on-northamerica hideme pop" data-toggle="collapse" data-target="#content-northamerica" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/TAG_Toronto_MapUpdate_Hover_02@2x.png"></a>
                    <a href="#latinamerica"> <img class="country glv3-on-latinamerica hideme" data-toggle="collapse" data-target="#content-lat" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_LatinAmerica-09082022.png"></a>
                    <a href="#europe"><img class="country glv3-on-europe hideme" data-toggle="collapse" data-target="#content-europe" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Europe-09192022.png"></a>
                    <a href="#india"> <img class="country glv3-on-india hideme" data-toggle="collapse" data-target="#content-india" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_India-09082022.png"></a>
                    <a href="#asia"> <img class="country glv3-on-asia hideme" data-toggle="collapse" data-target="#content-asia" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Asia-09082022.png"></a>
                    <a href="#australia"> <img class="country glv3-on-australia hideme" data-toggle="collapse" data-target="#content-asia" src="https://am-globaltag.local/wp-content/themes/primer/images/reboot/global-leadership/AMTAG_MapHover_081123.png"></a>

                    <img class="glv3-backmap opacityme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_Map_081123.png">
                </div>
                <!--/desktop-->



                <!--mobile-->
                <img class="country-2 glv3-on-asia hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Asia-09082022.png">
                <img class="country-2 glv3-on-europe hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_Europe-09192022.png">
                <img class="country-2 glv3-on-india hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_India-09082022.png">
                <img class="country-2 glv3-on-latinamerica hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_LocationsMap_LatinAmerica-09082022.png">
                <img class="country-2 glv3-on-northamerica hideme" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/TAG_Toronto_MapUpdate_Hover_02@2x.png">
                <img class="country-2 glv3-on-australia hideme" src=" https://am-globaltag.local/wp-content/themes/primer/images/reboot/global-leadership/AMTAG_MapHover_081123.png">
                <img class="country-2 glv3-backmap-2" src="https://am-globaltag.local/wp-content/themes/primer/library/images/reboot/global-leadership/AMTAG_Map_081123.png">


                <!--/mobile-->

                <!--desktop nav-->
                <div class="glv3-map-nav">
                    <ul>
                        <li class="aa glv3-a active" data-toggle="collapse" data-target="#content-global"> <a href="#global">GLOBAL</a>
                        </li>
                        <li class="bb glv3-b" data-toggle="collapse" data-target="#content-asia"><a href="#asia">ASIA</a></li>
                        <li class="gg glv3-g" data-toggle="collapse" data-target="#content-australia"><a href="#australia">AUSTRALIA</a></li>

                        <li class="cc glv3-c" data-toggle="collapse" data-target="#content-europe"><a href="#europe">EUROPE &amp; MIDDLE EAST (EMEA)</a>
                        </li>
                        <li class="dd glv3-d" data-toggle="collapse" data-target="#content-india"><a href="#india">INDIA</a>
                        </li><br>
                        <li class="ee glv3-e" data-toggle="collapse" data-target="#content-lat"><a href="#latinamerica">LATIN
                                AMERICA</a></li>
                        <li class="ff glv3-f" data-toggle="collapse" data-target="#content-northamerica"><a href="#northamerica">U.S. &amp; CANADA</a></li>

                    </ul>
                </div>
                <!--/desktop nav-->

                <!--/-->
            </div>

        </div>

        <script>
            ///////////////////////////map function
            $(document).ready(function() {
                ////////////global ////////////
                $(".glv3-map-nav li").click(function() {

                    $('html, body').animate({
                        scrollTop: $('#global-leaders').offset().top - 280
                    }, 'slow');


                });


                $(".aa").hover(function() {
                    $(".glv3-on-global").removeClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").removeClass("hideme");




                    $(".aa").addClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".aa, .glv3-a").click(function() {
                    $(".glv3-on-global").removeClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");

                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.show().promise().then(function() {
                                return glWrap.animate({
                                    "opacity": "1.0"
                                }, 250);
                            });
                        });


                    }
                    glFiltersGo();

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").removeClass("hideme");

                    $(".aa").addClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").toggleClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                ////////////asia  ////////////
                $(".bb, .glv3-on-asia").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").removeClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");
                    $(".glv3-on-asia").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");


                    $(".aa").removeClass("active");
                    $(".bb").addClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".bb, .glv3-b, .glv3-on-asia").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").removeClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-backmap-2").addClass("hideme");


                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.asia");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").addClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").toggleClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                ////////////europe  ////////////
                $(".cc, .glv3-on-europe").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").removeClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");
                    $(".glv3-on-europe").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").addClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".cc, .glv3-c, .glv3-on-europe").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").removeClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");


                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.europe");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();

                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").addClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                });

                ////////////india  ////////////
                $(".dd, .glv3-on-india").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").removeClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-on-india").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").addClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".dd, .glv3-d, .glv3-on-india").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").removeClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.india");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").addClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").toggleClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");


                });

                ////////////latin america  ////////////
                $(".ee, .glv3-on-latinamerica").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").removeClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-on-latinamerica").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").addClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                });

                $(".ee, .glv3-e, .glv3-on-latinamerica").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").removeClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-backmap-2").addClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.latin-america");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").addClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").removeClass("active");

                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").toggleClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                ////////////north america  ////////////
                $(".ff, .glv3-on-northamerica").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");


                    $(".glv3-on-northamerica").removeClass("hideme");
                    $(".glv3-on-northamerica").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").addClass("active");
                    $(".gg").removeClass("active");

                });

                $(".ff, .glv3-f, .glv3-on-northamerica").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-australia").addClass("hideme");

                    $(".glv3-on-northamerica").removeClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.north-america");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").addClass("active");
                    $(".gg").removeClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").toggleClass("collapsed");
                    $("#panel-australia .panel-toggle").addClass("collapsed");

                });

                //////////// Australia ////////////
                $(".gg, .glv3-on-australia").hover(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");


                    $(".glv3-on-australia").removeClass("hideme");
                    $(".glv3-on-australia").toggleClass("flash");

                    $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").addClass("active");

                });

                $(".gg, .glv3-g, .glv3-on-australia").click(function() {
                    $(".glv3-on-global").addClass("hideme");
                    $(".glv3-on-asia").addClass("hideme");
                    $(".glv3-on-europe").addClass("hideme");
                    $(".glv3-on-india").addClass("hideme");
                    $(".glv3-on-latinamerica").addClass("hideme");
                    $(".glv3-on-northamerica").addClass("hideme");

                    $(".glv3-on-australia").removeClass("hideme");

                    var glWrap = $(".global-leaders .container");
                    var card = $(".gl-card");
                    var cardsActive = $(".gl-card.australia");


                    function glFiltersGo() {

                        glWrap.animate({
                            "opacity": "0"
                        }, 250).promise().then(function() {

                            return card.hide().promise().then(function() {
                                return cardsActive.show().promise().then(function() {
                                    return glWrap.animate({
                                        "opacity": "1.0"
                                    }, 250);
                                });
                            });
                        });


                    }
                    glFiltersGo();


                    //        $(".glv3-backmap").toggleClass("opacityme");
                    $(".glv3-backmap-2").addClass("hideme");

                    $(".aa").removeClass("active");
                    $(".bb").removeClass("active");
                    $(".cc").removeClass("active");
                    $(".dd").removeClass("active");
                    $(".ee").removeClass("active");
                    $(".ff").removeClass("active");
                    $(".gg").addClass("active");


                    //+/-
                    $("#panel-global .panel-toggle").addClass("collapsed");
                    $("#panel-asia .panel-toggle").addClass("collapsed");
                    $("#panel-europe .panel-toggle").addClass("collapsed");
                    $("#panel-india .panel-toggle").addClass("collapsed");
                    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
                    $("#panel-northamerica .panel-toggle").addClass("collapsed");
                    $("#panel-australia .panel-toggle").toggleClass("collapsed");

                });

                ////
            });

            ///////////////////////////END map function

            ///////////////////////////accordian function
            $(document).ready(function() {
                //global
                $(".glv3-a").click(function() {
                    //close other countries
                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-asia .panel-toggle").toggleClass("collapsed");
                });
                //asia
                $(".glv3-b, .glv3-on-asia").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-asia .panel-toggle").toggleClass("collapsed");
                });
                //europe
                $(".glv3-c, .glv3-on-europe").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });
                //india
                $(".glv3-d, .glv3-on-india").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });
                //latin america
                $(".glv3-e, .glv3-on-latinamerica").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });
                //north america
                $(".glv3-f, .glv3-on-northamerica").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-australia").removeAttr("style", "height: auto");
                    $("#content-australia").removeClass("in");
                    $("#content-australia").addClass("collapsing");
                    $("#content-australia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });

                $(".glv3-f, .glv3-on-australia").click(function() {
                    //close other countries
                    $("#content-global").removeAttr("style", "height: auto");
                    $("#content-global").removeClass("in");
                    $("#content-global").addClass("collapsing");
                    $("#content-global").addClass("collapse");

                    $("#content-asia").removeAttr("style", "height: auto");
                    $("#content-asia").removeClass("in");
                    $("#content-asia").addClass("collapsing");
                    $("#content-asia").addClass("collapse");

                    $("#content-europe").removeAttr("style", "height: auto");
                    $("#content-europe").removeClass("in");
                    $("#content-europe").addClass("collapsing");
                    $("#content-europe").addClass("collapse");

                    $("#content-india").removeAttr("style", "height: auto");
                    $("#content-india").removeClass("in");
                    $("#content-india").addClass("collapsing");
                    $("#content-india").addClass("collapse");

                    $("#content-lat").removeAttr("style", "height: auto");
                    $("#content-lat").removeClass("in");
                    $("#content-lat").addClass("collapsing");
                    $("#content-lat").addClass("collapse");

                    $("#content-northamerica").removeAttr("style", "height: auto");
                    $("#content-northamerica").removeClass("in");
                    $("#content-northamerica").addClass("collapsing");
                    $("#content-northamerica").addClass("collapse");

                    //+/-
                    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
                });


                ///////////////////////////END accordian function


                ///////////////////////////scroll to ID offset DESKTOP
                $('.aa, .glv3-a').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#global").offset().top - 150
                    }, 100);
                });

                $('.bb, .glv3-b, .glv3-on-asia').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#asia").offset().top - 150
                    }, 100);
                });

                $('.cc, .glv3-c, .glv3-on-europe').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#europe").offset().top - 150
                    }, 100);
                });

                $('.dd, .glv3-d, .glv3-on-india').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#india").offset().top - 150
                    }, 100);
                });

                $('.ee, .glv3-e, .glv3-on-latinamerica').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#latinamerica").offset().top - 150
                    }, 100);
                });

                $('.ff, .glv3-f, .glv3-on-northamerica').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#northamerica").offset().top - 150
                    }, 100);
                });

                $('.gg, .glv3-g, .glv3-on-australia').click(function() {
                    $('html, body').animate({
                        scrollTop: $("#australia").offset().top - 150
                    }, 100);
                });

                ////
            });
            ///////////////////////////END scroll to ID offset DESKTOP

            ///////////////////////////scroll to ID offset MOBILE
            //$(window).resize(function() {
            $(document).ready(function() {
                const mq = window.matchMedia("(min-width: 960px)");
                if (mq.matches) {
                    //DESKTOP--> look up there!

                } else {
                    //MOBILE

                    $('.aa, .glv3-a').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#global").offset().top - 100
                        }, 100);
                    });

                    $('.bb, .glv3-b, .glv3-on-asia').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#asia").offset().top - 100
                        }, 100);
                    });

                    $('.cc, .glv3-c, .glv3-on-europe').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#europe").offset().top - 100
                        }, 100);
                    });

                    $('.dd, .glv3-d, .glv3-on-india').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#india").offset().top - 100
                        }, 100);
                    });

                    $('.ee, .glv3-e, .glv3-on-latinamerica').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#latinamerica").offset().top - 100
                        }, 100);
                    });

                    $('.ff, .glv3-f, .glv3-on-northamerica').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#northamerica").offset().top - 100
                        }, 100);
                    });

                    $('.g, .glv3-g, .glv3-on-australia').click(function() {
                        $('html, body').animate({
                            scrollTop: $("#australia").offset().top - 100
                        }, 100);
                    });


                    ///////////
                    //global
                    $(".glv3-a").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //asia
                    $(".glv3-b").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").removeClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");




                    });

                    //europe
                    $(".glv3-c").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").removeClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //india
                    $(".glv3-d").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").removeClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //latin america
                    $(".glv3-e").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").removeClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });
                    //north america
                    $(".glv3-f").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").removeClass("hideme");
                        $(".glv3-on-australia-2").addClass("hideme");

                    });

                    //australia
                    $(".glv3-g").click(function() {
                        //close other countries
                        $(".glv3-backmap-2").addClass("hideme");
                        $(".glv3-on-asia-2").addClass("hideme");
                        $(".glv3-on-europe-2").addClass("hideme");
                        $(".glv3-on-india-2").addClass("hideme");
                        $(".glv3-on-latamerica-2").addClass("hideme");
                        $(".glv3-on-northamerica-2").addClass("hideme");
                        $(".glv3-on-australia-2").removeClass("hideme");

                    });







                    //
                }
                ////
            });





            ///////////////////////////END scroll to ID offset MOBILE
            //tablet landscape

            //$(window).resize(function() {


            //https://stackoverflow.com/questions/7715124/do-something-if-screen-width-is-less-than-960-px

            //www.w3schools.com/howto/tryit.asp?filename=tryhow_js_matchmedia
        </script>
    </section>


<?php } ?>