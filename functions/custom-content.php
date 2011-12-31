<?php

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

function slider_enter_title( $input ) {
	global $post_type;

	if ( get_post_type() == 'slider' ) {
		return 'Slide Title (not publicly visible)';
	}

	return $input;
}
add_filter( 'enter_title_here', 'slider_enter_title' );