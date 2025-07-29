<script>
		$( document ).ready(function() {

jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});

			var base_url = "<?php echo site_url();?>"; //CHANGE THIS WHEN LIVE
			$("#open-btn").click(function(){
				$(".primary-menu-ctn").addClass("active");
			});
			$("#close-btn").click(function(){
				$(".primary-menu-ctn").removeClass("active");
				$(".primary-menu-ctn").removeClass("a-drop");
				$(".primary-menu-ctn").removeClass("d-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$(".primary-menu-ctn").removeClass("o-drop");
			});
			$(".primary-menu-body .a-dropdown").click(function(e){
				e.preventDefault();

				$(".primary-menu-ctn").removeClass("d-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$(".primary-menu-ctn").removeClass("o-drop");

				$(".primary-menu-ctn").toggleClass("a-drop");
			});
			$(".primary-menu-body .d-dropdown").click(function(e){
				e.preventDefault();

				$(".primary-menu-ctn").removeClass("a-drop");
				$(".primary-menu-ctn").removeClass("i-drop");
				$(".primary-menu-ctn").removeClass("o-drop");

				$(".primary-menu-ctn").toggleClass("d-drop");
			});
			$(".primary-menu-body .i-dropdown").click(function(e){
				e.preventDefault();

				$(".primary-menu-ctn").removeClass("a-drop");
				$(".primary-menu-ctn").removeClass("d-drop");
				$(".primary-menu-ctn").removeClass("o-drop");

				$(".primary-menu-ctn").toggleClass("i-drop");
			});
			$(".primary-menu-body .o-dropdown").click(function(e){
				e.preventDefault();

				$(".primary-menu-ctn").removeClass("a-drop");
				$(".primary-menu-ctn").removeClass("d-drop");
				$(".primary-menu-ctn").removeClass("i-drop");

				$(".primary-menu-ctn").toggleClass("o-drop");
			});
			/* OBSOLETE WITHOUT SEARCH BAR
			$(".search #search-btn").click(function(e){
				console.log('search-btn hit');
				e.preventDefault();
				if($(this).parent().hasClass('active')){
					window.location.href = base_url + "?s=" + $(this).val();
				}else{
					$(".search").addClass('active');
				}
			});
			$("#search-field").on('keyup', function (e) {
			    if (e.key === 'Enter' || e.keyCode === 13) {
			        window.location.href = base_url + "?s=" + $(this).val();
			    }
			});
			*/
		});
</script>