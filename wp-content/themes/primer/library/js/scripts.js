/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
    var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
    return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
        if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
        if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
        timers[uniqueId] = setTimeout(callback, ms);
    };
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;



/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
    // set the viewport using the function above
    viewport = updateViewportDimensions();
    // if the viewport is tablet or larger, we load in the gravatars
    if (viewport.width >= 768) {
        jQuery('.comment img[data-gravatar]').each(function(){
            jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
        });
    }
} // end function


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

    /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
    loadGravatars();

}); /* end of as page load scripts */

var pathname = window.location.pathname; // Returns path only (/path/example.html)
var url      = window.location.href;     // Returns full URL (https://example.com/path/example.html)
var origin   = window.location.origin;   // Returns base URL (https://example.com)
if(url.indexOf("#")>0){
   url = url.substr(0,url.indexOf("#"));
}
// handle links with @href started with '#' only
$(document).on('click', 'a[href^="'+url+'#"]', function(e) {
    // target element id
    var id = $(this).attr('href');
    id = id.split("#")[1];
    id = "#"+id;

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
    $('.shiftnav').removeClass('shiftnav-open-target');
});
$(document).ready(function(){
    $('.hi-text').slick({
        arrows: false,
        draggable:false,
    });
    $('.hi-img-nav').slick({
        arrows: false,
        draggable:false,
        slidesToShow:2,
        initialSlide:1,
    });
    $('.hi-image').slick({
        arrows: false,
        draggable:false,
    });

    $('.ic-text').slick({
        arrows:false,
        draggable:false,
        swipeToSlide:false,
        touchMove:false,
        swipe:false,
    });
    $("#ic-content .ic-portrait").slick({
        arrows:false,
        draggable:false,
        swipeToSlide:false,
        touchMove:false,
        swipe:false,
    })



    var $gridTeam = $('.team-content').isotope({
        itemSelector: '.team-member',
        layoutMode: 'fitRows',
        filter: '.team-all',
        getSortData: {
            pAll: '.priority-all',
            pCom: '.priority-company'
        },
        sortBy: 'pAll',
        masonry: {
            columnWidth: 100,
            gutter: 0,
            fitWidth: true
        }
    });

    var $grid2 = $('.port-portraits').isotope({
        itemSelector: '.port-portrait',
        layoutMode: 'fitRows',
        masonry: {
            columnWidth: 100,
            gutter: 0,
            fitWidth: true
        }
    });


    function companySwitch(index){


        $('.hi-nav a').removeClass('nav-active')
        $(".tf-btn").removeClass("tf-active");
        $('.portfolio-nav a').removeClass('nav-active')
        $('.ic-nav a').removeClass('nav-active')

        $('.hi-text').slick('slickGoTo',parseInt(index));
        $('.hi-img-nav').slick('slickGoTo',parseInt(index+1));
        $('.hi-image').slick('slickGoTo',parseInt(index));

        $('.ic-text').slick('slickGoTo',parseInt(index));
        $('.ic-portrait').slick('slickGoTo',parseInt(index));

        navTarget = '.hi-nav a:nth-child('+(index+1)+')';
        $(navTarget).addClass('nav-active');

        if(index == 2){ // europe
            $("#hi-euro-btn").addClass('nav-active');
            $("#ic-euro-btn").addClass('nav-active');
            $("#tf-europe").addClass("tf-active");
            $("#po-eur").addClass('nav-active');

            $gridTeam.isotope({ filter: '.team-europe', sortBy: 'pCom'  });
            $grid2.isotope({filter: '.am-europe'});

            $(".tf-selector label").html("A&M Capital Europe");
            $(".pn-selector label").html("A&M Capital Europe");
            $(".ic-selector label").html("A&M Capital Europe");
        }else if(index == 1){ // opportunities
            $("#hi-opp-btn").addClass('nav-active');
            $("#ic-opp-btn").addClass('nav-active');
            $("#tf-opportunities").addClass("tf-active");
            $("#po-opp").addClass('nav-active');

            $(".to-unique").removeClass("toq-on");

            $gridTeam.isotope({ filter: '.team-opportunities', sortBy: 'pCom'  });
            $grid2.isotope({filter: '.am-opportunities'});

            $(".tf-selector label").html("A&M Capital Opportunities");
            $(".pn-selector label").html("A&M Capital Opportunities");
            $(".ic-selector label").html("A&M Capital Opportunities");
        }else if (index == 0){ //partners
            console.log('hit');
            $("#hi-part-btn").addClass('nav-active');
            $("#ic-part-btn").addClass('nav-active');
            $("#tf-partners").addClass("tf-active");
            $("#po-cap").addClass('nav-active');

            $(".to-unique").addClass("toq-on");

            $gridTeam.isotope({ filter: '.team-partners', sortBy: 'pCom' });
            console.log('sort');
            $grid2.isotope({filter: '.am-capital'});

            $(".tf-selector label").html("A&M Capital Partners");
            $(".pn-selector label").html("A&M Capital Partners");
            $(".ic-selector label").html("A&M Capital Partners");
        }else{

        }

    }

    $('.hi-nav a').click(function(e){
        slideIndex = $(this).index();
        companySwitch(slideIndex);
    });

    $('.hi-img-nav a').click(function(e){
        slideIndex = $(this).data('index');
        companySwitch(slideIndex);
    });


    $('.icc-nav a').click(function(e){
        slideIndex = $(this).index();

        companySwitch(slideIndex);

        $('.icc-nav').addClass('ic-off');
        $('.ic-selector').addClass('ics-off');
    });

    //Experts Filtering

    function tfClear(){
        $('.tf-nav').addClass('tfn-off');
        $('.tf-selector').addClass('tfs-off');
    }

    $('#tf-all').click(function(e){
        $(".to-unique").addClass("toq-on");
        //$gridTeam.isotope({ filter: '.team-all' });
        $gridTeam.isotope({ filter: '.team-all', sortBy: 'pAll' });
        $(".tf-btn").removeClass("tf-active");
        $(this).addClass("tf-active");
        $(".tf-selector label").html("All");

        tfClear();
    });


    $('#tf-capital').click(function(e){
        $gridTeam.isotope({ filter: '.team-capital', sortBy: 'pCom'  });
        $(".tf-btn").removeClass("tf-active");
        $(this).addClass("tf-active");
        $(".tf-selector label").html("A&M Capital");

        tfClear();
    });

    $('#tf-partners').click(function(e){
        $gridTeam.isotope({ filter: '.team-partners', sortBy: 'pCom' });
        companySwitch(0);

        tfClear();
    });

    $('#tf-opportunities').click(function(e){
        $gridTeam.isotope({ filter: '.team-opportunities', sortBy: 'pCom' });
        companySwitch(1);
        tfClear();
    });

    $('#tf-europe').click(function(e){
        $gridTeam.isotope({ filter: '.team-europe', sortBy: 'pCom' });
        companySwitch(2);
        tfClear();
    });
    $("#ts-btn").click(function(e){
        var input = $("#tf-input").val().toLowerCase();
        $gridTeam.isotope({ filter: function() {
          if($(this).hasClass('team-all')){
              var name = $(this).find('.tm-titles').text().toLowerCase();
              return name.match( input );
          }
          return null;
        } })

        $(".tf-btn").removeClass("tf-active");
        $("#tf-all").addClass('tf-active');
        tfClear();
    });

    $("#tf-input").on('keyup', function (e) {
        if (e.keyCode == 13) {
            var input = $("#tf-input").val().toLowerCase();
            $gridTeam.isotope({ filter: function() {
              if($(this).hasClass('team-all')){
                  var name = $(this).find('.tm-titles').text().toLowerCase();
                  return name.match( input );
              }
              return null;
            } })

            $(".tf-btn").removeClass("tf-active");
            $("#tf-all").addClass('tf-active');
            tfClear();
        }
    });

    function poClear(){
            $('.port-nav').addClass('pn-off');
            $('.pn-selector').addClass('pns-off');
    }

    $('#po-all').click(function(e){
        $grid2.isotope({ filter: '*' });
        $('.portfolio-nav a').removeClass('nav-active')
        $(this).addClass('nav-active');
        $(".pn-selector label").html("All");
        poClear();
    });

    $('#po-cap').click(function(e){
        $grid2.isotope({ filter: '.am-capital' });

        companySwitch(0);
        poClear();
    });

    $('#po-opp').click(function(e){
        $grid2.isotope({ filter: '.am-opportunities' });
        companySwitch(1);
        poClear();
    });

    $('#po-eur').click(function(e){
        $grid2.isotope({ filter: '.am-europe' });
        companySwitch(2);
        poClear();
    });

});

/* man why */
//FUNCTION FOR TEXT IN PORTFOLIO HOVER STATES
function insertCompany(theElement, company, realized){
    theElement.hover(
        function() {
            $( this ).prepend( $( "<div class='hoverPortfolio'><p>"+realized+"</p><h5>" + company + "</h5><label>Read More</label></div>" ) );
        }, function() {
            $( this ).find( "div:last" ).remove();
        });
}

var ironHillPort = $('.ironhillPort');
var dutchlandPort = $('.dutchlandPort');
var championPort = $('.championPort');
var classicPort = $('.classicPort');
var gabrielPort = $('.gabrielPort');
var purestarPort = $('.purestarPort');
var centerraPort = $('.centerraPort');
var whcPort = $('.whcPort');
var proampacPort = $('.proampacPort');
var talusPort = $('.talusPort');
var cnsiPort = $('.cnsiPort');
var patientPort = $('.patientPort');
var silverPort = $('.silverPort');
var bollePort = $('.bollePort');
var pricPort = $('.pricPort');
var bradyPort = $('.bradyPort');
var patriaPort = $('.patriaPort');
var crashPort = $('.crashPort');
var ettainPort = $('.ettainPort');
var gsfoodPort = $('.gsfoodPort');

insertCompany(ironHillPort, 'Iron Hill Brewery & Restaurant', 'CURRENT');
insertCompany(dutchlandPort, 'Dutchland Plastics', 'CURRENT');
insertCompany(championPort, 'Champion One', 'CURRENT');
insertCompany(classicPort, 'Classic Brands', 'CURRENT');
insertCompany(gabrielPort, 'Gabriel Bothers', 'REALIZED');
insertCompany(purestarPort, 'PureStar Linen Group', 'REALIZED');
insertCompany(centerraPort, 'Centerra Services, LLC', 'REALIZED');
insertCompany(whcPort, 'WHC Energy Services, LLC', 'CURRENT');
insertCompany(proampacPort, 'ProAmpac', 'REALIZED');
insertCompany(talusPort, 'Talus Payments', 'CURRENT');
insertCompany(cnsiPort, 'CNSI', 'CURRENT');
insertCompany(patientPort, 'Patient Care Logistics Solutions', 'CURRENT');
insertCompany(silverPort, 'Silver Falls Dermatology', 'CURRENT');
insertCompany(bollePort, 'Bollé Brands', 'CURRENT');
insertCompany(pricPort, 'Pritchard Industries','CURRENT');
insertCompany(bradyPort, 'Brady Industries', 'CURRENT');
insertCompany(patriaPort, 'La Patria', 'CURRENT');
insertCompany(crashPort, 'Crash Champions', 'CURRENT');
insertCompany(ettainPort, 'ettain group', 'CURRENT');
insertCompany(gsfoodPort, 'GS Foods Group', 'CURRENT');