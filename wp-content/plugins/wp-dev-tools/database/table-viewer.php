<div class="wrap">
    <h2><?php _e('Table viewer','themeaxe'); ?></h2>
    <h3><?php echo $table_name; ?></h3>
    <?php
        global $wpdb;
        $head = "SHOW COLUMNS FROM ".$table_name;
        $columnsth = $wpdb->get_results($head) or die(mysql_error());

        $sql = "SELECT * FROM ".$table_name;
        $columns = $wpdb->get_results($sql);
    ?>
    <div class="tmx-db-tables-list">
        <table class="tmxdbadmin wp-list-table-data widefat striped">
            <thead>
                <tr>
                <?php foreach( $columnsth as $row ): ?>
                    <th><?php echo $row->Field; ?></th>
                <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $columns as $row ): ?>
                <tr>
                    <?php foreach ($row as $key => $value) {
                        echo '<td>'.$value.'</td>';
                    }
                    ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>