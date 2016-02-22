<?php
if ( ! function_exists('tile_themeaxe') ) {

// Register Custom Post Type
function tile_themeaxe() {

	$labels = array(
		'name'                  => _x( 'Tiles', 'Post Type General Name', 'themeaxe' ),
		'singular_name'         => _x( 'Tile', 'Post Type Singular Name', 'themeaxe' ),
		'menu_name'             => __( 'Tiles', 'themeaxe' ),
		'name_admin_bar'        => __( 'Tiles', 'themeaxe' ),
		'archives'              => __( 'Tile Archives', 'themeaxe' ),
		'parent_item_colon'     => __( 'Parent tile:', 'themeaxe' ),
		'all_items'             => __( 'All tiles', 'themeaxe' ),
		'add_new_item'          => __( 'Add New tile', 'themeaxe' ),
		'add_new'               => __( 'Add New', 'themeaxe' ),
		'new_item'              => __( 'New tile', 'themeaxe' ),
		'edit_item'             => __( 'Edit tile', 'themeaxe' ),
		'update_item'           => __( 'Update tile', 'themeaxe' ),
		'view_item'             => __( 'View tile', 'themeaxe' ),
		'search_items'          => __( 'Search tile', 'themeaxe' ),
		'not_found'             => __( 'Not found', 'themeaxe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'themeaxe' ),
		'featured_image'        => __( 'Featured Image', 'themeaxe' ),
		'set_featured_image'    => __( 'Set featured image', 'themeaxe' ),
		'remove_featured_image' => __( 'Remove featured image', 'themeaxe' ),
		'use_featured_image'    => __( 'Use as featured image', 'themeaxe' ),
		'insert_into_item'      => __( 'Insert into tiles', 'themeaxe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this tiles', 'themeaxe' ),
		'items_list'            => __( 'tiles list', 'themeaxe' ),
		'items_list_navigation' => __( 'tiles list navigation', 'themeaxe' ),
		'filter_items_list'     => __( 'Filter tiles list', 'themeaxe' ),
	);
	$args = array(
		'label'                 => __( 'Tile', 'themeaxe' ),
		'description'           => __( 'Tiles Information', 'themeaxe' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-tagcloud',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'tiles', $args );

}
add_action( 'init', 'tile_themeaxe', 0 );

}