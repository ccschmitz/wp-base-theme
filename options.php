<?php

if ( !function_exists( 'optionsframework_init' ) ) {

	/**
	 * Set the file path based on whether the Options Framework Theme is a parent theme or child theme 
	 */
	if ( get_stylesheet_directory() == get_template_directory() ) {
		define( 'OPTIONS_FRAMEWORK_URL', get_template_directory() . '/functions/options-framework/' );
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo( 'template_directory' ) . '/functions/options-framework/' );
	} else {
		define( 'OPTIONS_FRAMEWORK_URL', get_stylesheet_directory() . '/functions/options-framework/' );
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo( 'stylesheet_directory' ) . '/functions/options-framework/' );
	}

	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');

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