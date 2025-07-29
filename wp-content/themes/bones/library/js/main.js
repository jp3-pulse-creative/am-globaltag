 // top header items animate=========================================
$(window).scroll(function() {
	"use strict";
   if ($(this).scrollTop() > 80){  
        $('.navbar-default, .navbar-default2').addClass("sticky");
    }
    else{
        $('.navbar-default, .navbar-default2').removeClass("sticky");
	 }
	 //
	  if ($(this).scrollTop() > 10){  
        $('.title1').addClass("sticky");
    }
    else{
        $('.title1').removeClass("sticky");
	 }

	 //
	 
	   if ($(this).scrollTop() > 60){  
        $('.title-logo, .title-logo2').addClass("sticky");
    }
    else{
        $('.title-logo, .title-logo2').removeClass("sticky");
	 }
	 //
	  if ($(this).scrollTop() > 220){  
        $('.title2').addClass("sticky");
    }
    else{
        $('.title2').removeClass("sticky");
	 }
	 //
	  if ($(this).scrollTop() > 420){  
        $('.btn-rsvp').addClass("sticky");
    }
    else{
        $('.btn-rsvp').removeClass("sticky");
	 }
	 
	//  if ($(this).scrollTop() > 340){  
//        $('.promo-3').addClass("sticky");
//    }
//    else{
//        $('.promo-3').removeClass("sticky");
//	 }
	 
	 
	 
	  if ($(this).scrollTop() > 80){  
        $('.title2a').addClass("sticky");
    }
    else{
        $('.title2a').removeClass("sticky");
	 }
	 
	 //////////////////////////////////////////////////////////
	 
	// $(window).on('scroll', function() {
//	
//    $('.title-logo').each(function() {
//        if($(window).scrollTop() >= $(this).offset().top) {
//          $('#content-3-7').addClass("sticky");
//        }
//		  else{
//        $('#content-3-7').removeClass("sticky");
//		
//	 }
//	    });
//	 	
//});
});



