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
?>