jQuery(function($){
    /*
	 * Filter
	 */
$('#filters').submit(function(){

    $.ajax({
        url : misha_loadmore_params.ajaxurl,
        data : $('#filters').serialize(), // form data
        dataType : 'json', // this data type allows us to receive objects from the server
        type : 'POST',
        beforeSend : function(xhr){
            $('#filters').find('button').text('Filtering...');
        },
        success : function( data ){

            // when filter applied:
            // set the current page to 1
            misha_loadmore_params.current_page = 1;

            // set the new query parameters
            misha_loadmore_params.posts = data.posts;

            // set the new max page parameter
            misha_loadmore_params.max_page = data.max_page;

            // change the button label back
            $('#filters').find('button').text('Apply filter');

            // insert the posts to the container
            $('#response').html(data.content);


        }
    });

    // do not submit the form
    return false;

});
});