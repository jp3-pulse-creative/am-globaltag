<?php
add_action( 'wp_enqueue_scripts', 'misha_script_and_styles');

function misha_script_and_styles() {
	// absolutely need it, because we will get $wp_query->query_vars and $wp_query->max_num_pages from it.
	global $wp_query;

	// when you use wp_localize_script(), do not enqueue the target script immediately
	wp_register_script( 'misha_scripts', get_stylesheet_directory_uri() . '/library/js/filter-paging.js', array('jquery') );

	// passing parameters here
	// actually the <script> tag will be created and the object "misha_loadmore_params" will be inside it
	wp_localize_script( 'misha_scripts', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );

 	wp_enqueue_script( 'misha_scripts' );
}