<?php

// See if more than one page exists
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

// Replace the login logo
function cs_login_head() {
	// Make sure there is a logo uploaded before replacing the WP logo
	if ( of_get_option( 'logo_upload' ) ) {
		echo "
		<style>
		body.login #login h1 a {
			background: url('".of_get_option( 'logo_upload' )."') no-repeat scroll center top transparent;
			height: 90px;
			padding-bottom: 0;
			margin-bottom: 20px;
			width: 320px;
		}
		</style>
		";
	}
}

// Load JavaScripts
function cs_load_scripts() {
	// Register and enqueue custom Javascript here (jQuery example)
	// wp_enqueue_script( 'jquery' );

	// Load the comment reply JavaScript
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
