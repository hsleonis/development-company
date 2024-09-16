<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if(isset($_POST['theme_name'])):
    
    $theme_dir = WP_CONTENT_DIR.'/themes/'.$_POST['theme_name'];
    $is_dir = mkdir(WP_CONTENT_DIR.'/themes/'.$_POST['theme_name']);
    if($is_dir) {
        
        $style = fopen($theme_dir."/style.css", "w") or _e('Unable to create file: style.css','themeaxe');
        $txt = "/*\nTheme Name: ".$_POST['theme_name'];
        $txt .= "\nTheme URI: ".(isset($_POST['theme_uri'])?$_POST['theme_uri']:"");
        $txt .= "\nAuthor: ".(isset($_POST['theme_author'])?$_POST['theme_author']:"");
        $txt .= "\nAuthor URI: ".(isset($_POST['theme_author_uri'])?$_POST['theme_author_uri']:"");
        $txt .= "\nDescription: ".(isset($_POST['theme_desc'])?$_POST['theme_desc']:"");
        $txt .= "\nVersion: ".(isset($_POST['theme_version'])?$_POST['theme_version']:"");
        $txt .= "\nLicense: ".(isset($_POST['theme_license'])?$_POST['theme_license']:"");
        $txt .= "\nLicense URI: ".(isset($_POST['theme_license_uri'])?$_POST['theme_license_uri']:"");
        $txt .= "\nTags: ".(isset($_POST['theme_tags'])?$_POST['theme_tags']:"");
        $txt .= "\nText Domain: ".(isset($_POST['theme_domain'])?$_POST['theme_domain']:"");
        $txt .= "\n".(isset($_POST['theme_other'])?$_POST['theme_other']:"")."\n*/";
        fwrite($style, $txt);
        fclose($style);
        
        // Create recommended files
        // Codex: https://codex.wordpress.org/Theme_Development
        $file = fopen($theme_dir."/index.php", "w") or _e('Unable to create file: index.php','themeaxe');
        $file = fopen($theme_dir."/functions.php", "w") or _e('Unable to create file: functions.php','themeaxe');
        $file = fopen($theme_dir."/header.php", "w") or _e('Unable to create file: header.php','themeaxe');
        $file = fopen($theme_dir."/footer.php", "w") or _e('Unable to create file: footer.php','themeaxe');
        $file = fopen($theme_dir."/sidebar.php", "w") or _e('Unable to create file: footer.php','themeaxe');
        $file = fopen($theme_dir."/rtl.css", "w") or _e('Unable to create file: rtl.css','themeaxe');
        $file = fopen($theme_dir."/comments.php", "w") or _e('Unable to create file: comments.php','themeaxe');
        $file = fopen($theme_dir."/front-page.php", "w") or _e('Unable to create file: front-page.php','themeaxe');
        $file = fopen($theme_dir."/home.php", "w") or _e('Unable to create file: home.php','themeaxe');
        $file = fopen($theme_dir."/single.php", "w") or _e('Unable to create file: single.php','themeaxe');
        $file = fopen($theme_dir."/page.php", "w") or _e('Unable to create file: page.php','themeaxe');
        $file = fopen($theme_dir."/category.php", "w") or _e('Unable to create file: category.php','themeaxe');
        $file = fopen($theme_dir."/tag.php", "w") or _e('Unable to create file: tag.php','themeaxe');
        $file = fopen($theme_dir."/taxonomy.php", "w") or _e('Unable to create file: taxonomy.php','themeaxe');
        $file = fopen($theme_dir."/author.php", "w") or _e('Unable to create file: author.php','themeaxe');
        $file = fopen($theme_dir."/date.php", "w") or _e('Unable to create file: date.php','themeaxe');
        $file = fopen($theme_dir."/archive.php", "w") or _e('Unable to create file: archive.php','themeaxe');
        $file = fopen($theme_dir."/search.php", "w") or _e('Unable to create file: search.php','themeaxe');
        $file = fopen($theme_dir."/attachment.php", "w") or _e('Unable to create file: attachment.php','themeaxe');
        $file = fopen($theme_dir."/image.php", "w") or _e('Unable to create file: image.php','themeaxe');
        $file = fopen($theme_dir."/404.php", "w") or _e('Unable to create file: 404.php','themeaxe');
        
        // Create resource folders
        $is_dir = mkdir($theme_dir.'/resources');
        $is_dir = mkdir($theme_dir.'/resources/css');
        $is_dir = mkdir($theme_dir.'/resources/js');
        $is_dir = mkdir($theme_dir.'/resources/img');
        $is_dir = mkdir($theme_dir.'/resources/fonts');
        
         // Create admin folders
        $is_dir = mkdir($theme_dir.'/admin');
        $is_dir = mkdir($theme_dir.'/admin/meta');
        $is_dir = mkdir($theme_dir.'/admin/theme-option');
        $is_dir = mkdir($theme_dir.'/admin/theme-support');
        $is_dir = mkdir($theme_dir.'/admin/custom-posts');
    }
    else _e('Theme directory creation failed!','themeaxe');

endif;