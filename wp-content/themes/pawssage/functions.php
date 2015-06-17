<?php
// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'header', 'sidebar','footer'
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'custom_navigation_menus' );



// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );





?>