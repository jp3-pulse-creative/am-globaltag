//scroll to id
jQuery(document).ready(function($){
			$('body').plusAnchor({
				easing: 'easeInOutExpo',
				offsetTop: -140,
				speed: 1000,
				onInit: function( base ) {
				} // onInit
			});
			
//scroll to top
			 $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup, .scrollup2').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup, .scrollup2').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
	
	
		});