<?php
if ( ! function_exists('career_themeaxe') ) {

// Register Custom Post Type
function career_themeaxe() {

	$labels = array(
		'name'                  => _x( 'Career', 'Post Type General Name', 'themeaxe' ),
		'singular_name'         => _x( 'Career', 'Post Type Singular Name', 'themeaxe' ),
		'menu_name'             => __( 'Career', 'themeaxe' ),
		'name_admin_bar'        => __( 'Career', 'themeaxe' ),
		'archives'              => __( 'Career Archives', 'themeaxe' ),
		'parent_item_colon'     => __( 'Parent career:', 'themeaxe' ),
		'all_items'             => __( 'All career', 'themeaxe' ),
		'add_new_item'          => __( 'Add New career', 'themeaxe' ),
		'add_new'               => __( 'Add New', 'themeaxe' ),
		'new_item'              => __( 'New career', 'themeaxe' ),
		'edit_item'             => __( 'Edit career', 'themeaxe' ),
		'update_item'           => __( 'Update career', 'themeaxe' ),
		'view_item'             => __( 'View career', 'themeaxe' ),
		'search_items'          => __( 'Search career', 'themeaxe' ),
		'not_found'             => __( 'Not found', 'themeaxe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'themeaxe' ),
		'featured_image'        => __( 'Featured Image', 'themeaxe' ),
		'set_featured_image'    => __( 'Set featured image', 'themeaxe' ),
		'remove_featured_image' => __( 'Remove featured image', 'themeaxe' ),
		'use_featured_image'    => __( 'Use as featured image', 'themeaxe' ),
		'insert_into_item'      => __( 'Insert into career', 'themeaxe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this career', 'themeaxe' ),
		'items_list'            => __( 'Career list', 'themeaxe' ),
		'items_list_navigation' => __( 'Career list navigation', 'themeaxe' ),
		'filter_items_list'     => __( 'Filter career list', 'themeaxe' ),
	);
	$args = array(
		'label'                 => __( 'Career', 'themeaxe' ),
		'description'           => __( 'Career Information', 'themeaxe' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'career', $args );

}
add_action( 'init', 'career_themeaxe', 0 );

}