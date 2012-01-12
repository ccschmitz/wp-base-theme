<?php

// Setup the name of the options framework
function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data( STYLESHEETPATH . '/style.css' );
	$themename = $themename['Name'];
	$themename = preg_replace( "/\W/", "", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );

}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */
function optionsframework_options() {
	
	$options = array();
	
	$options[] = array(
		'name' => 'Theme Settings',
		'type' => 'heading'
	);

		// Logo upload
		$options[] = array(
			'name' => 'Logo',
			'desc' => 'Upload a logo to be displayed on the login screen and throughout the site.',
			'id' => 'logo_upload',
			'type' => 'upload'
		);

		// Favicon upload
		$options[] = array(
			'name' => 'Favicon',
			'desc' => 'Upload favicon to be used in the browser tab.',
			'id' => 'favicon_upload',
			'type' => 'upload'
		);

		// Footer copyright
		$options[] = array(
			'name' => 'Footer Copyright',
			'desc' => 'The copyright information for the footer.',
			'id' => 'footer_copyright',
			'type' => 'text'
		);

		// Google Analytics
		$options[] = array(
			'name' => 'Analytics',
			'desc' => 'Insert your analytics tracking code here. Not the full script, just the identifier <strong>("UA-12345678-9")</strong>.',
			'id' => 'google_analytics',
			'type' => 'text'
		);
	
	return $options;

}