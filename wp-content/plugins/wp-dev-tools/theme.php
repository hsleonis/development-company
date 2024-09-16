<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require('builder/index.php');

?>

<div class="wrap">
    <h2><?php _e('Theme Builder','themeaxe'); ?></h2>
    <div class="card">
        <h2 class="title">Theme Editor</h2>
        <p><?php _e('The classic WordPress theme editor came with an awesome look. Check out your new <a href="theme-editor.php">Theme Editor</a>','themeaxe'); ?></p>
    </div>
    <div class="card">
        <div class="plugin-card-top">
            <h2 class="title">Theme Builder</h2>
            <p><?php _e('Make a blank WordPress theme instantly! Boost up your development flow. Fill up the form below and Start now.','themeaxe'); ?></p>
        </div>
        <form class="plugin-card-bottom" method="post" name="createtheme" id="createthemer" class="validate" novalidate="novalidate">
        <?php wp_nonce_field('theme_builder_nonce'); ?>
    <table class="form-table">
        <tbody>
            <tr class="">
                <th>
                    <label for="theme_name">Theme Name</label>
                </th>
                <td>
                    <input name="theme_name" id="theme_name" value="<?php echo 'dev_theme_'.date('dmyhis'); ?>" class="regular-text" type="text">
                    <span class="description">Name of your theme.</span></td>
            </tr>


            <tr class="">
                <th>
                    <label for="theme_uri">Theme URI</label>
                </th>
                <td>
                    <input name="theme_uri" id="theme_uri" value="<?php echo bloginfo('url'); ?>" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>

            <tr class="">
                <th>
                    <label for="theme_author">Author</label>
                </th>
                <td>
                    <input name="theme_author" id="theme_author" value="Md. Hasan Shahriar" class="regular-text" type="text">
                    <span class="description">Theme Author's wordpress.org username, or real name.</span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="theme_author_uri">Author URI</label>
                </th>
                <td>
                    <input name="theme_author_uri" id="theme_author_uri" value="http://github.com/hsleonis" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>

            <tr class="">
                <th>
                    <label for="theme_desc">Description</label>
                </th>
                <td>
                    <textarea name="theme_desc" id="theme_desc" class="regular-text"></textarea>
                    <span class="description"></span>
                </td>
            </tr>

            <tr class="">
                <th>
                    <label for="theme_version">Version</label>
                </th>
                <td>
                    <input name="theme_version" id="theme_version" value="1.0" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="theme_license">License</label>
                </th>
                <td>
                    <input name="theme_license" id="theme_license" value="GNU General Public License v2 or later" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="theme_license_uri">License URI</label>
                </th>
                <td>
                    <input name="theme_license_uri" id="theme_license_uri" value="http://www.gnu.org/licenses/gpl-2.0.html" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="theme_tags">Tags</label>
                </th>
                <td>
                    <textarea name="theme_tags" id="theme_tags" class="regular-text"></textarea>
                    <span class="description">Use , (comma) to separate</span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="theme_domain">Text Domain</label>
                </th>
                <td>
                    <input name="theme_domain" id="theme_domain" value="Themeaxe" class="regular-text" type="text">
                    <span class="description"></span>
                </td>
            </tr>
            
            <tr class="">
                <th>
                    <label for="theme_other">Other Information</label>
                </th>
                <td>
                    <textarea name="theme_other" id="theme_other" class="regular-text"></textarea>
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