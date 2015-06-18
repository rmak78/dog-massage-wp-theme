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
 

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 700;

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );
 

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );
 
if ( ! function_exists( 'sidebar' ) ) {

// Register Sidebar
function sidebar() {

	$args = array(
		'id'            => 'right_sidebar',
		'name'          => __( 'Right Sidebar', 'sutlej' ),
		'description'   => __( 'Sidebar on Right', 'sutlej' ),
		'class'         => 'widget',
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'sidebar' );

}
?>