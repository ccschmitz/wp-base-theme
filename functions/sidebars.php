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
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));
	
	// About sidebar
	register_sidebar(array(
		'name' => __('About'),
		'id' => 'about',
		'description' => __('This sidebar will be displayed on the about page.'),
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));
	
	// Product sidebar
	register_sidebar(array(
		'name' => __('Product'),
		'id' => 'product',
		'description' => __('This sidebar will be displayed on the product page.'),
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));

	// Contact sidebar
	register_sidebar(array(
		'name' => __('Contact'),
		'id' => 'contact',
		'description' => __('This sidebar will be displayed on the contact page.'),
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));
	
	// Integrations sidebar
	register_sidebar(array(
		'name' => __('Integrations'),
		'id' => 'integrations',
		'description' => __('This sidebar will be displayed on the integrations page.'),
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>'
	));

}