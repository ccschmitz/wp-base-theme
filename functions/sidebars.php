<?php

function cs_register_sidebars() {
	
	// Default sidebar
	register_sidebar(array(
		'name' => 'Default',
		'id' => 'default',
		'description' => 'The default sidebar for the site. If no sidebar is specified, this one will be used.',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));
	
	// Blog sidebar
	register_sidebar(array(
		'name' => __('Blog'),
		'id' => 'blog',
		'description' => __('This sidebar will be displayed on blog posts and other blog-related pages.'),
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));
	
}