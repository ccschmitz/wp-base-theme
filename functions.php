<?php

// Theme constants
define( 'CS_FUNCTIONS', get_template_directory() . '/functions/' );
define( 'CS_INCLUDES', get_template_directory() . '/includes/' );

// Require function files
require_once( CS_FUNCTIONS . 'main.php' );
require_once( CS_FUNCTIONS . 'menus.php' );
require_once( CS_FUNCTIONS . 'sidebars.php' );

// Require other included files
require_once( CS_INCLUDES . 'lessc.inc.php' );

// Setup the theme
add_action( 'after_setup_theme', 'cs_theme_setup' );

function cs_theme_setup() {
	// Add theme support for WP features
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	
	// Setup menus (functions/menus.php)
	add_action( 'init', 'cs_register_menus' );
	
	// Setup sidebars (functions/sidebars.php)
	add_action( 'widgets_init', 'cs_register_sidebars' );
	
	// Setup custom scripts (functions/main.php)
	add_action( 'wp_enqueue_scripts', 'cs_load_scripts' );
	
	// Replace the login logo (functions/main.php)
	add_action( 'login_head', 'cs_login_head' );

	// Increase the default memory limit
	@ini_set('memory_limit', '128M');
}

// Compile LESS files automatically
lessc::ccompile( dirname(__FILE__) . '/css/less/base.less', dirname(__FILE__) . '/css/base.css' );
lessc::ccompile( dirname(__FILE__) . '/css/less/layout.less', dirname(__FILE__) . '/css/layout.css' );
lessc::ccompile( dirname(__FILE__) . '/css/less/module.less', dirname(__FILE__) . '/css/module.css' );
lessc::ccompile( dirname(__FILE__) . '/css/less/state.less', dirname(__FILE__) . '/css/state.css' );