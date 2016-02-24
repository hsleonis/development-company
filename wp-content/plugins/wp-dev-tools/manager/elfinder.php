<script type="text/javascript" charset="utf-8">
    // Documentation for client options:
    // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
    jQuery(document).ready(function ($) {
        $('#elfinder').elfinder({
            url: '<?php echo plugin_dir_url(__FILE__); ?>php/connector.minimal.php' // connector URL (REQUIRED)
        });
    });
</script>

<div id="elfinder"></div>