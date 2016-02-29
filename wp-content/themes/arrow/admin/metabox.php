<?php


if ( file_exists( dirname( __FILE__ ) . '/meta/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/meta/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/Meta/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/Meta/init.php';
}

add_action( 'cmb2_admin_init', 'themeaxe_register_metabox' );
function themeaxe_register_metabox() {

	$prefix = '_themeaxe_';
    $cmb_meta = new_cmb2_box( array(
		'id'           => $prefix . 'projects_meta',
		'title'        => __( 'Project options', 'cmb2' ),
		'object_types' => array( 'projects', ),
		'context'      => 'side',
		'priority'     => 'high',
	) );
    
    $cmb_meta->add_field( array(
        'name'             => __('Make project featured','themeaxe'),
        'id'               => $prefix . 'featured',
        'type'             => 'radio',
        'show_option_none' => false,
        'default'          => '0',
        'options'          => array(
            '0' => __( 'No', 'themeaxe' ),
            '1'   => __( 'Yes', 'themeaxe' ),
        ),
    ) );
    
    $cmb_meta->add_field( array(
        'name'     => __('Project Status','themeaxe'),
        'desc'     => __('Current status of the project','themeaxe'),
        'id'       => $prefix.'status',
        'taxonomy' => 'status',
        'type'     => 'taxonomy_radio',
        // Optional:
        'options' => array(
            'no_terms_text' => __('Sorry, no status could be found.','themeaxe')
        ),
    ) );
    
    $cmb_meta->add_field( array(
        'name'     => __('City','themeaxe'),
        'desc'     => __('Location of the project','themeaxe'),
        'id'       => $prefix.'city',
        'taxonomy' => 'city',
        'type'     => 'taxonomy_radio',
        // Optional:
        'options' => array(
            'no_terms_text' => __('Sorry, no location could be found.','themeaxe')
        ),
    ) );
    
    $cmb_meta->add_field( array(
        'name'     => __('Size','themeaxe'),
        'desc'     => __('Project floor size','themeaxe'),
        'id'       => $prefix.'size',
        'taxonomy' => 'size',
        'type'     => 'taxonomy_radio',
        // Optional:
        'options' => array(
            'no_terms_text' => __('Sorry, no size could be found.','themeaxe')
        ),
    ) );
}

add_action( 'cmb2_admin_init', 'themeaxe_register_repeatable_group_field_metabox' );
function themeaxe_register_repeatable_group_field_metabox() {
	$prefix = '_themeaxe_group_';
    
    $cmb_about_page = new_cmb2_box( array(
		'id'           => $prefix . 'extra',
		'title'        => __( 'Project additional information', 'cmb2' ),
		'object_types' => array( 'projects', ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb_about_page->add_field( array(
		'name' => __( 'Location', 'cmb2' ),
		'desc' => __( 'Project location', 'cmb2' ),
		'id'   => $prefix . 'location',
		'type' => 'text',
	) );

	$cmb_about_page->add_field( array(
		'name' => __( 'Specification', 'cmb2' ),
		'desc' => __( 'Project specification', 'cmb2' ),
		'id'   => $prefix . 'specification',
		'type' => 'wysiwyg',
	) );
    
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'gallery',
		'title'        => __( 'Gallery Images', 'cmb2' ),
		'object_types' => array( 'projects', ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'gallery_image',
		'type'        => 'group',
		'description' => __( 'Images', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Gallery Image {#}', 'cmb2' ),
			'add_button'    => __( 'Add Another Image to gallery', 'cmb2' ),
			'remove_button' => __( 'Remove Image from gallery', 'cmb2' ),
			'sortable'      => true,
			// 'closed'     => true,
		),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Image Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Description', 'cmb2' ),
		'description' => __( 'Write a short description for this image', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Entry Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image Caption', 'cmb2' ),
		'id'   => 'image_caption',
		'type' => 'text',
	) );
    
    $cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'floor',
		'title'        => __( 'Floor plan Images', 'cmb2' ),
		'object_types' => array( 'projects', ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'floor_image',
		'type'        => 'group',
		'description' => __( 'Images', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Floor Plan Image {#}', 'cmb2' ),
			'add_button'    => __( 'Add Another Image to Floor plan', 'cmb2' ),
			'remove_button' => __( 'Remove Image from Floor plan', 'cmb2' ),
			'sortable'      => true,
			// 'closed'     => true,
		),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Image Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Description', 'cmb2' ),
		'description' => __( 'Write a short description for this image', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Entry Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image Caption', 'cmb2' ),
		'id'   => 'image_caption',
		'type' => 'text',
	) );

}

add_action( 'cmb2_admin_init', 'themeaxe_register_user_profile_metabox' );
function themeaxe_register_user_profile_metabox() {
	$prefix = '_themeaxe_user_';

    $cmb_user = new_cmb2_box( array(
		'id'               => $prefix . 'edit',
		'title'            => __( 'User Profile Metabox', 'cmb2' ),
		'object_types'     => array( 'user' ),
		'show_names'       => true,
		'new_user_section' => 'add-new-user',
	) );

	$cmb_user->add_field( array(
		'name'     => __( 'Extra Info', 'cmb2' ),
		'desc'     => __( 'field description (optional)', 'cmb2' ),
		'id'       => $prefix . 'extra_info',
		'type'     => 'title',
		'on_front' => false,
	) );

	$cmb_user->add_field( array(
		'name'    => __( 'Avatar', 'cmb2' ),
		'desc'    => __( 'Change avatar image', 'cmb2' ),
		'id'      => $prefix . 'avatar',
		'type'    => 'file',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Facebook URL', 'cmb2' ),
		'desc' => __( 'Facebook profile link', 'cmb2' ),
		'id'   => $prefix . 'facebookurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Twitter URL', 'cmb2' ),
		'desc' => __( 'Twitter profile link', 'cmb2' ),
		'id'   => $prefix . 'twitterurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Google+ URL', 'cmb2' ),
		'desc' => __( 'Google+ profile link', 'cmb2' ),
		'id'   => $prefix . 'googleplusurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => __( 'Linkedin URL', 'cmb2' ),
		'desc' => __( 'Linkedin profile link', 'cmb2' ),
		'id'   => $prefix . 'linkedinurl',
		'type' => 'text_url',
	) );

}

add_action( 'cmb2_admin_init', 'themeaxe_register_theme_options_metabox' );
function themeaxe_register_theme_options_metabox() {
	$option_key = '_themeaxe_theme_options';
    
	$cmb_options = new_cmb2_box( array(
		'id'      => $option_key . 'page',
		'title'   => __( 'Arrow options', 'cmb2' ),
		'hookup'  => false,
		'show_on' => array(
			'key'   => 'options-page',
			'value' => array( $option_key )
		),
	) );

	$cmb_options->add_field( array(
		'name'    => __( 'Site theme color', 'cmb2' ),
		'desc'    => __( 'This will be used on panel backgrounds', 'cmb2' ),
		'id'      => 'bg_color',
		'type'    => 'colorpicker',
		'default' => '#222D3A',
	) );

}
