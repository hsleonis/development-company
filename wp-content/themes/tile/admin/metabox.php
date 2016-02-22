<?php


if ( file_exists( dirname( __FILE__ ) . '/meta/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/meta/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/Meta/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/Meta/init.php';
}

add_action( 'cmb2_admin_init', 'themeaxe_register_repeatable_group_field_metabox' );
function themeaxe_register_repeatable_group_field_metabox() {
	$prefix = '_tmx_';
    
    // Tiles
    $tmx_tiles = new_cmb2_box( array(
		'id'           => $prefix . 'extra',
		'title'        => __( 'Tiles type', 'themeaxe' ),
		'object_types' => array( 'tiles', ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$tmx_tiles->add_field( array(
        'name'             => 'Type',
        'id'               => $prefix.'tile_type',
        'type'             => 'radio',
        'show_option_none' => false,
        'default'          => '1',
        'options'          => array(
            '1' => __( 'Wall', 'themeaxe' ),
            '2'   => __( 'Floor', 'themeaxe' ),
        ),
    ) );
    
    $tmx_tiles->add_field( array(
		'name' => __( 'Price', 'themeaxe' ),
		'id' => $prefix . 'tile_price',
		'type' => 'text_money',
		'default' => '-',
	) );
    
    $tmx_tiles->add_field( array(
		'name' => __( 'Grout Color', 'themeaxe' ),
		'id' => $prefix . 'tile_color',
		'type' => 'colorpicker',
		'default' => '#aeaeae',
	) );
    
    // Rooms
    $tmx_rooms = new_cmb2_box( array(
		'id'           => $prefix . 'rooms',
		'title'        => __( 'Room Information', 'themeaxe' ),
		'object_types' => array( 'rooms', ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );
    
    $tmx_rooms->add_field( array(
		'name' => __( 'Room foreground', 'themeaxe' ),
		'id' => $prefix . 'room_foreground',
		'type' => 'file',
		'desc' => __( 'Use any image of your choice (JPG, JPEG or PNG)', 'themeaxe' ),
	) );
    
    $tmx_rooms->add_field( array(
		'name' => __( 'Room background', 'themeaxe' ),
		'id' => $prefix . 'room_background',
		'type' => 'file',
		'desc' => __( 'Use only transparent image to see tile changes (PNG)', 'themeaxe' ),
	) );

}