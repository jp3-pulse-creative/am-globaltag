///////////////////////////map function
$(document).ready(function () {
  ////////////global ////////////
  $(".aa").hover(function () {
    $(".glv3-on-global").removeClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");

//        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").addClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");
  });

  $(".aa, .glv3-a").click(function () {
    $(".glv3-on-global").removeClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");

//        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").addClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");

    //+/-
    $("#panel-global .panel-toggle").toggleClass("collapsed");
    $("#panel-asia .panel-toggle").addClass("collapsed");
    $("#panel-europe .panel-toggle").addClass("collapsed");
    $("#panel-india .panel-toggle").addClass("collapsed");
    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
    $("#panel-northamerica .panel-toggle").addClass("collapsed");
  });

  ////////////asia  ////////////
  $(".bb, .glv3-on-asia").hover(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").removeClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");
      $(".glv3-on-asia").toggleClass("flash");

        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").addClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");
  });

  $(".bb, .glv3-b, .glv3-on-asia").click(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").removeClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");

//        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").addClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");

    //+/-
    $("#panel-global .panel-toggle").addClass("collapsed");
    $("#panel-asia .panel-toggle").toggleClass("collapsed");
    $("#panel-europe .panel-toggle").addClass("collapsed");
    $("#panel-india .panel-toggle").addClass("collapsed");
    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
    $("#panel-northamerica .panel-toggle").addClass("collapsed");
  });

  ////////////europe  ////////////
  $(".cc, .glv3-on-europe").hover(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").removeClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");
       $(".glv3-on-europe").toggleClass("flash");

        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").addClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");
  });

  $(".cc, .glv3-c, .glv3-on-europe").click(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").removeClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");

//        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").addClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");

    //+/-
    $("#panel-global .panel-toggle").addClass("collapsed");
    $("#panel-asia .panel-toggle").addClass("collapsed");
    $("#panel-europe .panel-toggle").toggleClass("collapsed");
    $("#panel-india .panel-toggle").addClass("collapsed");
    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
    $("#panel-northamerica .panel-toggle").addClass("collapsed");
  });

  ////////////india  ////////////
  $(".dd, .glv3-on-india").hover(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").removeClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");
         $(".glv3-on-india").toggleClass("flash");

        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").addClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");
  });

  $(".dd, .glv3-d, .glv3-on-india").click(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").removeClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");

//        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").addClass("active");
    $(".ee").removeClass("active");
    $(".ff").removeClass("active");

    //+/-
    $("#panel-global .panel-toggle").addClass("collapsed");
    $("#panel-asia .panel-toggle").addClass("collapsed");
    $("#panel-europe .panel-toggle").addClass("collapsed");
    $("#panel-india .panel-toggle").toggleClass("collapsed");
    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
    $("#panel-northamerica .panel-toggle").addClass("collapsed");

  });

  ////////////latin america  ////////////
  $(".ee, .glv3-on-latinamerica").hover(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").removeClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");
       $(".glv3-on-latinamerica").toggleClass("flash");

        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").addClass("active");
    $(".ff").removeClass("active");
  });

  $(".ee, .glv3-e, .glv3-on-latinamerica").click(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").removeClass("hideme");
    $(".glv3-on-northamerica").addClass("hideme");

//        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").addClass("active");
    $(".ff").removeClass("active");

    //+/-
    $("#panel-global .panel-toggle").addClass("collapsed");
    $("#panel-asia .panel-toggle").addClass("collapsed");
    $("#panel-europe .panel-toggle").addClass("collapsed");
    $("#panel-india .panel-toggle").addClass("collapsed");
    $("#panel-latinamerica .panel-toggle").toggleClass("collapsed");
    $("#panel-northamerica .panel-toggle").addClass("collapsed");
  });

  ////////////north america  ////////////
  $(".ff, .glv3-on-northamerica").hover(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").removeClass("hideme");
        $(".glv3-on-northamerica").toggleClass("flash");

        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").addClass("active");
  });

  $(".ff, .glv3-f, .glv3-on-northamerica").click(function () {
    $(".glv3-on-global").addClass("hideme");
    $(".glv3-on-asia").addClass("hideme");
    $(".glv3-on-europe").addClass("hideme");
    $(".glv3-on-india").addClass("hideme");
    $(".glv3-on-latinamerica").addClass("hideme");
    $(".glv3-on-northamerica").removeClass("hideme");

//        $(".glv3-backmap").toggleClass("opacityme");

    $(".aa").removeClass("active");
    $(".bb").removeClass("active");
    $(".cc").removeClass("active");
    $(".dd").removeClass("active");
    $(".ee").removeClass("active");
    $(".ff").addClass("active");

    //+/-
    $("#panel-global .panel-toggle").addClass("collapsed");
    $("#panel-asia .panel-toggle").addClass("collapsed");
    $("#panel-europe .panel-toggle").addClass("collapsed");
    $("#panel-india .panel-toggle").addClass("collapsed");
    $("#panel-latinamerica .panel-toggle").addClass("collapsed");
    $("#panel-northamerica .panel-toggle").toggleClass("collapsed");
  });

  ////
});

///////////////////////////END map function

///////////////////////////accordian function
$(document).ready(function () {
  //global
  $(".glv3-a").click(function () {
    //close other countries
    $("#content-asia").removeAttr("style", "height: auto");
    $("#content-asia").removeClass("in");
    $("#content-asia").addClass("collapsing");
    $("#content-asia").addClass("collapse");

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
  $(".glv3-b, .glv3-on-asia").click(function () {
    //close other countries
    $("#content-global").removeAttr("style", "height: auto");
    $("#content-global").removeClass("in");
    $("#content-global").addClass("collapsing");
    $("#content-global").addClass("collapse");

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
  $(".glv3-c, .glv3-on-europe").click(function () {
    //close other countries
    $("#content-global").removeAttr("style", "height: auto");
    $("#content-global").removeClass("in");
    $("#content-global").addClass("collapsing");
    $("#content-global").addClass("collapse");

    $("#content-asia").removeAttr("style", "height: auto");
    $("#content-asia").removeClass("in");
    $("#content-asia").addClass("collapsing");
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
    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
  });
  //india
  $(".glv3-d, .glv3-on-india").click(function () {
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
  $(".glv3-e, .glv3-on-latinamerica").click(function () {
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

    $("#content-northamerica").removeAttr("style", "height: auto");
    $("#content-northamerica").removeClass("in");
    $("#content-northamerica").addClass("collapsing");
    $("#content-northamerica").addClass("collapse");

    //+/-
    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
  });
  //north america
  $(".glv3-f, .glv3-on-northamerica").click(function () {
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

    //+/-
    //    $("#panel-europe .panel-toggle").toggleClass("collapsed");
  });
  ///////////////////////////END accordian function


  ///////////////////////////scroll to ID offset DESKTOP
  $('.aa, .glv3-a').click(function () {
    $('html, body').animate({
      scrollTop: $("#global").offset().top - 150
    }, 100);
  });

  $('.bb, .glv3-b, .glv3-on-asia').click(function () {
    $('html, body').animate({
      scrollTop: $("#asia").offset().top - 150
    }, 100);
  });

  $('.cc, .glv3-c, .glv3-on-europe').click(function () {
    $('html, body').animate({
      scrollTop: $("#europe").offset().top - 150
    }, 100);
  });

  $('.dd, .glv3-d, .glv3-on-india').click(function () {
    $('html, body').animate({
      scrollTop: $("#india").offset().top - 150
    }, 100);
  });

  $('.ee, .glv3-e, .glv3-on-latinamerica').click(function () {
    $('html, body').animate({
      scrollTop: $("#latinamerica").offset().top - 150
    }, 100);
  });

  $('.ff, .glv3-f, .glv3-on-northamerica').click(function () {
    $('html, body').animate({
      scrollTop: $("#northamerica").offset().top - 150
    }, 100);
  });

  ////
});
///////////////////////////END scroll to ID offset DESKTOP

  ///////////////////////////scroll to ID offset MOBILE
//$(window).resize(function() {
$(document).ready(function () {
const mq = window.matchMedia( "(min-width: 960px)" );
if (mq.matches) {
    //DESKTOP--> look up there!

} else {
    //MOBILE

     $('.aa, .glv3-a').click(function () {
    $('html, body').animate({
      scrollTop: $("#global").offset().top - 100
    }, 100);
  });

     $('.bb, .glv3-b, .glv3-on-asia').click(function () {
    $('html, body').animate({
      scrollTop: $("#asia").offset().top - 100
    }, 100);
  });

    $('.cc, .glv3-c, .glv3-on-europe').click(function () {
    $('html, body').animate({
      scrollTop: $("#europe").offset().top - 100
    }, 100);
  });

  $('.dd, .glv3-d, .glv3-on-india').click(function () {
    $('html, body').animate({
      scrollTop: $("#india").offset().top - 100
    }, 100);
  });

  $('.ee, .glv3-e, .glv3-on-latinamerica').click(function () {
    $('html, body').animate({
      scrollTop: $("#latinamerica").offset().top - 100
    }, 100);
  });

  $('.ff, .glv3-f, .glv3-on-northamerica').click(function () {
    $('html, body').animate({
      scrollTop: $("#northamerica").offset().top - 100
    }, 100);
  });


    ///////////
     //global
    $(".glv3-a").click(function () {
    //close other countries
         $(".glv3-backmap-2").removeClass("hideme");
          $(".glv3-on-asia-2").addClass("hideme");
    $(".glv3-on-europe-2").addClass("hideme");
          $(".glv3-on-india-2").addClass("hideme");
          $(".glv3-on-latamerica-2").addClass("hideme");
         $(".glv3-on-northamerica-2").addClass("hideme");
  });
      //asia
    $(".glv3-b").click(function () {
    //close other countries
  $(".glv3-backmap-2").addClass("hideme");
          $(".glv3-on-asia-2").removeClass("hideme");
    $(".glv3-on-europe-2").addClass("hideme");
          $(".glv3-on-india-2").addClass("hideme");
          $(".glv3-on-latamerica-2").addClass("hideme");
         $(".glv3-on-northamerica-2").addClass("hideme");

  });

    //europe
    $(".glv3-c").click(function () {
    //close other countries
  $(".glv3-backmap-2").addClass("hideme");
          $(".glv3-on-asia-2").addClass("hideme");
    $(".glv3-on-europe-2").removeClass("hideme");
          $(".glv3-on-india-2").addClass("hideme");
          $(".glv3-on-latamerica-2").addClass("hideme");
         $(".glv3-on-northamerica-2").addClass("hideme");

  });
     //india
    $(".glv3-d").click(function () {
    //close other countries
  $(".glv3-backmap-2").addClass("hideme");
          $(".glv3-on-asia-2").addClass("hideme");
    $(".glv3-on-europe-2").addClass("hideme");
          $(".glv3-on-india-2").removeClass("hideme");
          $(".glv3-on-latamerica-2").addClass("hideme");
         $(".glv3-on-northamerica-2").addClass("hideme");

  });
      //latin america
    $(".glv3-e").click(function () {
    //close other countries
  $(".glv3-backmap-2").addClass("hideme");
          $(".glv3-on-asia-2").addClass("hideme");
    $(".glv3-on-europe-2").addClass("hideme");
          $(".glv3-on-india-2").addClass("hideme");
          $(".glv3-on-latamerica-2").removeClass("hideme");
         $(".glv3-on-northamerica-2").addClass("hideme");

  });
      //north america
    $(".glv3-f").click(function () {
    //close other countries
  $(".glv3-backmap-2").addClass("hideme");
          $(".glv3-on-asia-2").addClass("hideme");
    $(".glv3-on-europe-2").addClass("hideme");
          $(".glv3-on-india-2").addClass("hideme");
          $(".glv3-on-latamerica-2").addClass("hideme");
         $(".glv3-on-northamerica-2").removeClass("hideme");

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
