<?php
if ( ! function_exists('project_themeaxe') ) {

// Register Custom Post Type
function project_themeaxe() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'themeaxe' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'themeaxe' ),
		'menu_name'             => __( 'Projects', 'themeaxe' ),
		'name_admin_bar'        => __( 'Projects', 'themeaxe' ),
		'archives'              => __( 'Project Archives', 'themeaxe' ),
		'parent_item_colon'     => __( 'Parent Project:', 'themeaxe' ),
		'all_items'             => __( 'All Projects', 'themeaxe' ),
		'add_new_item'          => __( 'Add New Project', 'themeaxe' ),
		'add_new'               => __( 'Add New', 'themeaxe' ),
		'new_item'              => __( 'New Project', 'themeaxe' ),
		'edit_item'             => __( 'Edit Project', 'themeaxe' ),
		'update_item'           => __( 'Update Project', 'themeaxe' ),
		'view_item'             => __( 'View Project', 'themeaxe' ),
		'search_items'          => __( 'Search Project', 'themeaxe' ),
		'not_found'             => __( 'Not found', 'themeaxe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'themeaxe' ),
		'featured_image'        => __( 'Featured Image', 'themeaxe' ),
		'set_featured_image'    => __( 'Set featured image', 'themeaxe' ),
		'remove_featured_image' => __( 'Remove featured image', 'themeaxe' ),
		'use_featured_image'    => __( 'Use as featured image', 'themeaxe' ),
		'insert_into_item'      => __( 'Insert into projects', 'themeaxe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this projects', 'themeaxe' ),
		'items_list'            => __( 'Projects list', 'themeaxe' ),
		'items_list_navigation' => __( 'Projects list navigation', 'themeaxe' ),
		'filter_items_list'     => __( 'Filter projects list', 'themeaxe' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'themeaxe' ),
		'description'           => __( 'Projects Information', 'themeaxe' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'status' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'project_themeaxe', 0 );

}

if ( ! function_exists( 'status_themeaxe' ) ) {

// Register Custom Taxonomy
function status_themeaxe() {

	$labels = array(
		'name'                       => _x( 'All status', 'Taxonomy General Name', 'themeaxe' ),
		'singular_name'              => _x( 'Status', 'Taxonomy Singular Name', 'themeaxe' ),
		'menu_name'                  => __( 'Status', 'themeaxe' ),
		'all_items'                  => __( 'All Status', 'themeaxe' ),
		'parent_item'                => __( 'Parent Status', 'themeaxe' ),
		'parent_item_colon'          => __( 'Parent Status:', 'themeaxe' ),
		'new_item_name'              => __( 'New Status Name', 'themeaxe' ),
		'add_new_item'               => __( 'Add New Status', 'themeaxe' ),
		'edit_item'                  => __( 'Edit Status', 'themeaxe' ),
		'update_item'                => __( 'Update Status', 'themeaxe' ),
		'view_item'                  => __( 'View Status', 'themeaxe' ),
		'separate_items_with_commas' => __( 'Separate each status with commas', 'themeaxe' ),
		'add_or_remove_items'        => __( 'Add or remove status', 'themeaxe' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'themeaxe' ),
		'popular_items'              => __( 'Popular status', 'themeaxe' ),
		'search_items'               => __( 'Search statuss', 'themeaxe' ),
		'not_found'                  => __( 'Not Found', 'themeaxe' ),
		'no_terms'                   => __( 'No items', 'themeaxe' ),
		'items_list'                 => __( 'Status list', 'themeaxe' ),
		'items_list_navigation'      => __( 'Status list navigation', 'themeaxe' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'status', array( 'projects' ), $args );

}
add_action( 'init', 'status_themeaxe', 0 );
}
    
if ( ! function_exists( 'city_themeaxe' ) ) {

// Register Custom Taxonomy
function city_themeaxe() {

	$labels = array(
		'name'                       => _x( 'All city', 'Taxonomy General Name', 'themeaxe' ),
		'singular_name'              => _x( 'City', 'Taxonomy Singular Name', 'themeaxe' ),
		'menu_name'                  => __( 'City', 'themeaxe' ),
		'all_items'                  => __( 'All city', 'themeaxe' ),
		'parent_item'                => __( 'Parent city', 'themeaxe' ),
		'parent_item_colon'          => __( 'Parent city:', 'themeaxe' ),
		'new_item_name'              => __( 'New city Name', 'themeaxe' ),
		'add_new_item'               => __( 'Add New city', 'themeaxe' ),
		'edit_item'                  => __( 'Edit city', 'themeaxe' ),
		'update_item'                => __( 'Update city', 'themeaxe' ),
		'view_item'                  => __( 'View city', 'themeaxe' ),
		'separate_items_with_commas' => __( 'Separate each city with commas', 'themeaxe' ),
		'add_or_remove_items'        => __( 'Add or remove city', 'themeaxe' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'themeaxe' ),
		'popular_items'              => __( 'Popular city', 'themeaxe' ),
		'search_items'               => __( 'Search citys', 'themeaxe' ),
		'not_found'                  => __( 'Not Found', 'themeaxe' ),
		'no_terms'                   => __( 'No items', 'themeaxe' ),
		'items_list'                 => __( 'City list', 'themeaxe' ),
		'items_list_navigation'      => __( 'City list navigation', 'themeaxe' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'city', array( 'projects' ), $args );

}
add_action( 'init', 'city_themeaxe', 0 );

}

if ( ! function_exists( 'size_themeaxe' ) ) {

// Register Custom Taxonomy
function size_themeaxe() {

	$labels = array(
		'name'                       => _x( 'All size', 'Taxonomy General Name', 'themeaxe' ),
		'singular_name'              => _x( 'Size', 'Taxonomy Singular Name', 'themeaxe' ),
		'menu_name'                  => __( 'Size', 'themeaxe' ),
		'all_items'                  => __( 'All size', 'themeaxe' ),
		'parent_item'                => __( 'Parent size', 'themeaxe' ),
		'parent_item_colon'          => __( 'Parent size:', 'themeaxe' ),
		'new_item_name'              => __( 'New size Name', 'themeaxe' ),
		'add_new_item'               => __( 'Add New size', 'Shemeaxe' ),
		'edit_item'                  => __( 'Edit size', 'themeaxe' ),
		'update_item'                => __( 'Update size', 'themeaxe' ),
		'view_item'                  => __( 'View size', 'themeaxe' ),
		'separate_items_with_commas' => __( 'Separate each size with commas', 'themeaxe' ),
		'add_or_remove_items'        => __( 'Add or remove size', 'themeaxe' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'themeaxe' ),
		'popular_items'              => __( 'Popular size', 'themeaxe' ),
		'search_items'               => __( 'Search sizes', 'themeaxe' ),
		'not_found'                  => __( 'Not Found', 'themeaxe' ),
		'no_terms'                   => __( 'No items', 'themeaxe' ),
		'items_list'                 => __( 'Size list', 'themeaxe' ),
		'items_list_navigation'      => __( 'Size list navigation', 'themeaxe' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'size', array( 'projects' ), $args );

}
add_action( 'init', 'size_themeaxe', 0 );

}