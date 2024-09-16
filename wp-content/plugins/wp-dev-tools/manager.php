<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function tmx_file_manager($hook) {
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js' );
    wp_enqueue_script( 'elfinder', plugin_dir_url( __FILE__ ) . '/manager/js/elfinder.min.js' );
    wp_enqueue_script( 'elfinder-ru', plugin_dir_url( __FILE__ ) . '/manager/js/i18n/elfinder.ru.js' );
    
    wp_enqueue_style( 'jquery-ui-css','http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css', false, '1.0.0' );
    wp_enqueue_style( 'elfinder-css',plugin_dir_url( __FILE__ ) .'manager/css/elfinder.min.css', false, '1.0.0' );
    wp_enqueue_style( 'elfinder-theme-css',plugin_dir_url( __FILE__ ) .'manager/themes/windows-10/css/theme.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'tmx_file_manager' );

function tmx_admin_menu() {
	add_menu_page( 'File Manager', 'WP DEV TOOLS', 'manage_options', dirname(__FILE__).'/manager.php', 'wpdevtool_admin_page', 'dashicons-portfolio', 6  );
    add_submenu_page(dirname(__FILE__).'/manager.php', 'Database Manager', 'Database Manager', 'manage_options', dirname(__FILE__).'/db-manager.php');
    add_submenu_page(dirname(__FILE__).'/manager.php', 'Theme Builder', 'Theme Builder', 'manage_options', dirname(__FILE__).'/theme.php');
    add_submenu_page(dirname(__FILE__).'/manager.php', 'Plugin Builder', 'Plugin Builder', 'manage_options', dirname(__FILE__).'/plugin.php');
}

add_action( 'admin_menu', 'tmx_admin_menu' );
function wpdevtool_admin_page(){
	?>
	<div class="wrap">
		<h2>WP DEV TOOLS</h2>
        <h4>SHAHRIAR (c)2016</h4>
	</div>
	<?php
    require_once(dirname(__FILE__).'/manager/elfinder.php');
}