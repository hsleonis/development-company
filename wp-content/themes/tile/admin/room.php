<?php
if ( ! function_exists('room_themeaxe') ) {

// Register Custom Post Type
function room_themeaxe() {

	$labels = array(
		'name'                  => _x( 'Rooms', 'Post Type General Name', 'themeaxe' ),
		'singular_name'         => _x( 'Room', 'Post Type Singular Name', 'themeaxe' ),
		'menu_name'             => __( 'Rooms', 'themeaxe' ),
		'name_admin_bar'        => __( 'Rooms', 'themeaxe' ),
		'archives'              => __( 'Room Archives', 'themeaxe' ),
		'parent_item_colon'     => __( 'Parent room:', 'themeaxe' ),
		'all_items'             => __( 'All rooms', 'themeaxe' ),
		'add_new_item'          => __( 'Add New room', 'themeaxe' ),
		'add_new'               => __( 'Add New', 'themeaxe' ),
		'new_item'              => __( 'New room', 'themeaxe' ),
		'edit_item'             => __( 'Edit room', 'themeaxe' ),
		'update_item'           => __( 'Update room', 'themeaxe' ),
		'view_item'             => __( 'View room', 'themeaxe' ),
		'search_items'          => __( 'Search room', 'themeaxe' ),
		'not_found'             => __( 'Not found', 'themeaxe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'themeaxe' ),
		'featured_image'        => __( 'Featured Image', 'themeaxe' ),
		'set_featured_image'    => __( 'Set featured image', 'themeaxe' ),
		'remove_featured_image' => __( 'Remove featured image', 'themeaxe' ),
		'use_featured_image'    => __( 'Use as featured image', 'themeaxe' ),
		'insert_into_item'      => __( 'Insert into rooms', 'themeaxe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this rooms', 'themeaxe' ),
		'items_list'            => __( 'Room list', 'themeaxe' ),
		'items_list_navigation' => __( 'Room list navigation', 'themeaxe' ),
		'filter_items_list'     => __( 'Filter room list', 'themeaxe' ),
	);
	$args = array(
		'label'                 => __( 'Room', 'themeaxe' ),
		'description'           => __( 'Room Information', 'themeaxe' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 2,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'rooms', $args );

}
add_action( 'init', 'room_themeaxe', 0 );

}