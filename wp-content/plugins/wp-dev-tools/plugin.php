<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require('builder/plugin-builder.php');

?>

<div class="wrap">
    <h2><?php _e('Plugin Builder','themeaxe'); ?></h2>
    <div class="card">
        <h2 class="title">Plugin Editor</h2>
        <p><?php _e('The classic WordPress plugin editor came with an awesome look. Check out your new <a href="plugin-editor.php">Plugin Editor</a>','themeaxe'); ?></p>
    </div>
    <div class="card">
        <div class="plugin-card-top">
            <h2 class="title">Pluign Builder</h2>
            <p><?php _e('Make a blank WordPress plugin instantly! Boost up your development flow. Fill up the form below and Start now.','themeaxe'); ?></p>
        </div>
        <form class="plugin-card-bottom" method="post" name="createtheme" id="createthemer" class="validate" novalidate="novalidate">
        <?php wp_nonce_field('plugin_builder_nonce'); ?>
    <table class="form-table">
        <tbody>
            <tr class="">
                <th>
                    <label for="plugin_name">Plugin Name</label>
                </th>
                <td>
                    <input name="plugin_name" id="plugin_name" value="<?php echo 'dev_plugin_'.date('dmyhis'); ?>" class="regular-text" type="text">
                    <span class="description">Name of your plugin.</span></td>
            </tr>


            <tr class="">
                <th>
                    <label for="plugin_uri">Theme URI</label>
                </th>
                <td>
                    <input name="plugin_uri" id="plugin_uri" value="<?php echo bloginfo('url'); ?>" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>

            <tr class="">
                <th>
                    <label for="plugin_author">Author</label>
                </th>
                <td>
                    <input name="plugin_author" id="plugin_author" value="Md. Hasan Shahriar" class="regular-text" type="text">
                    <span class="description">Theme Author's wordpress.org username, or real name.</span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="plugin_author_uri">Author URI</label>
                </th>
                <td>
                    <input name="plugin_author_uri" id="plugin_author_uri" value="http://github.com/hsleonis" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>

            <tr class="">
                <th>
                    <label for="plugin_desc">Description</label>
                </th>
                <td>
                    <textarea name="plugin_desc" id="plugin_desc" class="regular-text"></textarea>
                    <span class="description"></span>
                </td>
            </tr>

            <tr class="">
                <th>
                    <label for="plugin_version">Version</label>
                </th>
                <td>
                    <input name="plugin_version" id="plugin_version" value="1.0" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="plugin_license">License</label>
                </th>
                <td>
                    <input name="plugin_license" id="plugin_license" value="GNU General Public License v2 or later" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="plugin_license_uri">License URI</label>
                </th>
                <td>
                    <input name="plugin_license_uri" id="plugin_license_uri" value="http://www.gnu.org/licenses/gpl-2.0.html" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="plugin_tags">Tags</label>
                </th>
                <td>
                    <textarea name="plugin_tags" id="plugin_tags" class="regular-text"></textarea>
                    <span class="description">Use , (comma) to separate</span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="plugin_domain">Text Domain</label>
                </th>
                <td>
                    <input name="plugin_domain" id="plugin_domain" value="Themeaxe" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="plugin_other">Other Information</label>
                </th>
                <td>
                    <textarea name="plugin_other" id="plugin_other" class="regular-text"></textarea>
                    <span class="description"></span>
                </td>
            </tr>
        </tbody>
    </table>
    
    <p class="submit">
        <input name="createtheme" id="createthemesub" class="button button-primary" value="Create Blank Theme" type="submit">
    </p>
</form>
    </div>
    
</div>