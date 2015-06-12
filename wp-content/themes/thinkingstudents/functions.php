<?php 

// Load CSS
function thinkingStudents_resources () {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'thinkingStudents_resources' );



function thinkingStudents_setup () {

	// Navigation Menus
	register_nav_menus( array(
		'primary'	=> __( 'Primary Menu' ),
		'footer'	=> __( 'Footer Menu' )
	) );


	// Add featured image support
	add_theme_support ( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 120, 120, false );
	add_image_size( 'banner-image', 400, 210, true );

}
add_action( 'after_setup_theme', 'thinkingStudents_setup' );