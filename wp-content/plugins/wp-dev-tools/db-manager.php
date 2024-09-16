<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

global $wpdb;
$sql = "SHOW TABLES FROM ".$wpdb->dbname;
$tables = $wpdb->get_results($sql) or die(mysql_error());

if(isset($_GET['t'])):
    $table_name=$_GET['t'];
    require('database/table-viewer.php');

else:
?>
<div class="wrap">
    <h2><?php _e('Database Manager','themeaxe'); ?></h2>
    
    <div class="tmx-db-tables-list">
        <table class="tmxdbadmin wp-list-table widefat striped">
            <thead>
                <tr>
                    <th>Table</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach( $tables as $row ):
                ?>
                <tr>
                    <td><a href='<?php echo admin_url( 'admin.php?page=wp-dev-tools/db-manager.php&t='.$row->Tables_in_doreendev); ?>'><?php echo $row->Tables_in_doreendev; ?></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php endif; ?>