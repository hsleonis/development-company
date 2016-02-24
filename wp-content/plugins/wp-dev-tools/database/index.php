<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function tmx_db_scripts($hook) {
    if($hook=='wp-dev-tools/db-manager.php') {
    
    wp_enqueue_style('data-table-css', plugin_dir_url(__FILE__).'db.css', false, '1.0.0');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'data-tables', plugin_dir_url( __FILE__ ) . 'jquery.dataTables.min.js' );
    
    add_action('admin_footer', 'tmx_dbadmin_footer');
    }
}
add_action( 'admin_enqueue_scripts', 'tmx_db_scripts' );

function tmx_dbadmin_footer($hook) {
?>    
    <script>jQuery(document).ready(function($){
        $(".tmxdbadmin").dynatable();
    });
    </script>
<?php
}