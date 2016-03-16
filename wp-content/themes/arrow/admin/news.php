<?php
if ( ! function_exists('news_themeaxe') ) {

// Register Custom Post Type
function news_themeaxe() {

	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'themeaxe' ),
		'singular_name'         => _x( 'News', 'Post Type Singular Name', 'themeaxe' ),
		'menu_name'             => __( 'News', 'themeaxe' ),
		'name_admin_bar'        => __( 'News', 'themeaxe' ),
		'archives'              => __( 'News Archives', 'themeaxe' ),
		'parent_item_colon'     => __( 'Parent news:', 'themeaxe' ),
		'all_items'             => __( 'All news', 'themeaxe' ),
		'add_new_item'          => __( 'Add New news', 'themeaxe' ),
		'add_new'               => __( 'Add New', 'themeaxe' ),
		'new_item'              => __( 'New news', 'themeaxe' ),
		'edit_item'             => __( 'Edit news', 'themeaxe' ),
		'update_item'           => __( 'Update news', 'themeaxe' ),
		'view_item'             => __( 'View news', 'themeaxe' ),
		'search_items'          => __( 'Search news', 'themeaxe' ),
		'not_found'             => __( 'Not found', 'themeaxe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'themeaxe' ),
		'featured_image'        => __( 'Featured Image', 'themeaxe' ),
		'set_featured_image'    => __( 'Set featured image', 'themeaxe' ),
		'remove_featured_image' => __( 'Remove featured image', 'themeaxe' ),
		'use_featured_image'    => __( 'Use as featured image', 'themeaxe' ),
		'insert_into_item'      => __( 'Insert into news', 'themeaxe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this news', 'themeaxe' ),
		'items_list'            => __( 'News list', 'themeaxe' ),
		'items_list_navigation' => __( 'News list navigation', 'themeaxe' ),
		'filter_items_list'     => __( 'Filter news list', 'themeaxe' ),
	);
	$args = array(
		'label'                 => __( 'News', 'themeaxe' ),
		'description'           => __( 'News Information', 'themeaxe' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news_themeaxe', 0 );

}