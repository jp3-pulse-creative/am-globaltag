/*
 * Custom Scripts
 * Author: Jeffrey Chang
 *
 *
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



/*
 * Put all your regular jQuery in here.
*/
// jQuery(document).ready(function($) {
//         $(window).scroll(function() {

//           if ($(document).scrollTop() > 550) {
//             $("#sticky-header").addClass("nav-shift");
//           } else {
//               $("#sticky-header").removeClass("nav-shift");

//           }
//         });



//     // When the user scrolls down 20px from the top of the document, slide down the navbar
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {




//   if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
//     document.getElementById("sticky-header").style.top = "0";
//     document.getElementById("sticky-header").style.position = "fixed";

//   }
//   else if ((document.body.scrollTop < 550) && (document.body.scrollTop > 0) || (document.documentElement.scrollTop < 550) && (document.documentElement.scrollTop > 0))
//     {
//     document.getElementById("sticky-header").style.top = "-150px";
//     document.getElementById("sticky-header").style.position = "fixed";
//     document.getElementById("sticky-header").style.opacity = "1.0";

//   }
//   else
//   {
//     document.getElementById("sticky-header").style.top = "0";
//     document.getElementById("sticky-header").style.position = "absolute";
//     document.getElementById("sticky-header").style.background = "#fffffftran";

//   }


// }

// }); /* end of as page load scripts */

// When the user scrolls down 20px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 840 || document.documentElement.scrollTop > 840) {
    document.getElementById("sticky-header-2").style.top = "0";
  } else {
    document.getElementById("sticky-header-2").style.top = "-250px";
  }
}


$(window).scroll(function() {
  if ($(this).scrollTop() > 220){
      console.log('> 220');
      $('.event-page h1').addClass('hide');
  }
  else{
      console.log('< 220');
      $('.event-page h1').removeClass('hide');
 }
  });