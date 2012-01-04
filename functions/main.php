<?php

// Load the options framework
if ( !function_exists( 'optionsframework_init' ) ) {
	// Set the file path based on whether the Options Framework Theme is a parent theme or child theme 
	if ( get_stylesheet_directory() == get_template_directory() ) {
		define( 'OPTIONS_FRAMEWORK_URL', get_template_directory() . '/includes/options-framework/' );
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo( 'template_directory' ) . '/includes/options-framework/' );
	} else {
		define( 'OPTIONS_FRAMEWORK_URL', get_stylesheet_directory() . '/includes/options-framework/' );
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo( 'stylesheet_directory' ) . '/includes/options-framework/' );
	}

	require_once ( OPTIONS_FRAMEWORK_URL . 'options-framework.php' );
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
		// Get the image dimensions of the uploaded image
		$image_info = getimagesize( of_get_option( 'logo_upload' ) );

		echo '<style type="text/css">
		body.login #login h1 a {
			background: url("'.of_get_option( 'logo_upload' ).'") no-repeat scroll center top transparent;
			display: block;
			height: '. $image_info[1] .'px;
			max-height: 150px;
			padding-bottom: 0;
			margin: 0 auto 20px;
			width: '. $image_info[0] .'px;
			max-width: 320px;
		}
		</style>';
	}
}

// Load JavaScripts
function cs_load_scripts() {
	// Setup jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'jquery' );

	// Load Modernizr
	$script_src = get_stylesheet_directory_uri() . '/js/libs/modernizr-2.0.6.min.js';
	wp_register_script( 'modernizr', $script_src );
	wp_enqueue_script( 'modernizr' );

	// Load custom JavaScript from 'js/script.src' in the template directory
	$script_src = get_stylesheet_directory_uri() . '/js/script.js';
	wp_register_script( 'custom_script', $script_src, array(), false, true );
	wp_enqueue_script( 'custom_script' );

	// Load the comment reply JavaScript
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}