<?php

// Create the slider custom post type
function create_slider_post_type() {
	register_post_type( 'slider',
		array(
			'labels' => array(
				'name' => __( 'Slider' ),
				'singular_name' => __( 'Slide' ),
				'all_items' => __( 'View All Slides' ),
				'add_new' => __( 'Add New Slide' ),
				'add_new_item' => __( 'Add New Slide' ),
			),
		'public' => true,
		'publicly_queryable' => false,
		'exclude_from_search' => true,
		'has_archive' => false,
		)
	);
}
add_action( 'init', 'create_slider_post_type' );

// Remove the WYSIWYG editor for the slider publishing page
function remove_slider_wysiwyg() {
	if ( get_post_type() == 'slider' )
		return false;
}
add_filter( 'user_can_richedit', 'remove_slider_wysiwyg' );

// Update the placeholder text for the title of slides
function change_slider_enter_title(  ) {
	if ( get_post_type() == 'slider' )
		return 'Slide Title (not publicly visible)';
}
add_filter( 'enter_title_here', 'change_slider_enter_title' );