<?php
if ( ! function_exists( 'arrow_navigation_menus' ) ) {

// Register Navigation Menus
function arrow_navigation_menus() {

	$locations = array(
		'main-menu' => __( 'Main menu', 'themeaxe' ),
		'secondary-menu' => __( 'Secondary menu', 'themeaxe' ),
		'footer-menu' => __( 'Footer menu', 'themeaxe' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'arrow_navigation_menus' );

}