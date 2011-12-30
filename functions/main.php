<?php

// Load the options framework
function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

}

// See if more than one page exists
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

// Replace the login logo
function cs_login_head() {
	// Make sure there is a logo uploaded before replacing the WP logo
	if ( of_get_option( 'logo_upload' ) ) {
		echo '<style type="text/css">
		body.login #login h1 a {
			background: url("'.of_get_option( 'login_logo' ).'") no-repeat scroll center top transparent;
			height: 90px;
			padding-bottom: 0;
			margin-bottom: 20px;
			width: 320px;
		}
		</style>';
	}
}

// Load JavaScripts
function cs_load_scripts() {
	// 
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'jquery' );

	// Load custom JavaScript from 'js/script.src' in the template directory
	$script_src = get_stylesheet_directory_uri() . '/js/script.js';
	wp_register_script( 'custom_script', $script_src, array(), false, true );
	wp_enqueue_script( 'custom_script' );

	// Load the comment reply JavaScript
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}