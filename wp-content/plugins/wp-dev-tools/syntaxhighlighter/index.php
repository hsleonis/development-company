<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function tmx_syntaxt_scripts($hook) {
    if($hook!=='theme-editor.php' && $hook!=='plugin-editor.php')
        return;
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'syntax', plugin_dir_url( __FILE__ ) . 'edit_area/edit_area_full.js' );
    
    wp_enqueue_style( 'syntax-css',plugin_dir_url( __FILE__ ) .'edit_area/syntax.css', false, '1.0.0' );
    
    add_action('admin_footer', 'tmx_admin_footer');
}
add_action( 'admin_enqueue_scripts', 'tmx_syntaxt_scripts' );

function tmx_admin_footer($hook) {
    
	echo '<script>jQuery(document).ready(function($){
        editAreaLoader.init({
            id : "newcontent"		     // textarea id
            ,syntax: "php"			       // syntax to be uses for highgliting
            ,start_highlight: true		// to display with highlight mode on start-up
        });
    });
    </script>';
}