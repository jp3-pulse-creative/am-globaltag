jQuery(function ($) {
    $('#filter').submit(function () {
        var filter = $('#filter');
        $.ajax({
            url: filter.attr('action'),
            data: filter.serialize(), // form data
            type: filter.attr('method'), // POST
            beforeSend: function (xhr) {
                filter.find('.button-text').hide();
                filter.find('.spinner-border')
                    .show(); // changing the button label
            },
            success: function (data) {
                filter.find('.button-text')
                    .show(); // changing the button label back
                filter.find('.load-btn__wrapper')
                    .show(); // changing the button label
                filter.find('.spinner-border')
                    .hide(); // changing the button label

                // filter.find('.pagination')
                //     .hide(); // hide pagination controls until they work with response results

                misha_loadmore_button_params.current_page = 1;
                // set the new query parameters
                misha_loadmore_button_params.posts = data.posts;

                // set the new max page parameter
                misha_loadmore_button_params.max_page = data.max_page;
                $('#response').html(data); // insert data
            }
        });
        return false;
    });

});


