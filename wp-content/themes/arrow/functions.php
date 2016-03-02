<?php
    require('admin/inc.php');

    function tmx_hack_wp_title_for_home( $title ){
      if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
        $title = __( 'Home', 'themeaxe' ) . ' | ' . get_bloginfo( 'description' );
      }
      return $title;
    }
    add_filter( 'wp_title', 'tmx_hack_wp_title_for_home' );

    if (function_exists( 'add_theme_support' )){
        add_filter('manage_projects_posts_columns', 'posts_columns', 1);
        add_action('manage_projects_posts_custom_column', 'posts_custom_columns', 1, 2);
    }
    function posts_columns($defaults){
        foreach($defaults as $key=>$value) {
            if($key=='title') {                         // when we find the title column
               $new['tmx_post_thumbs'] = __('Thumbs');  // put the thumb column before it
            }    
            $new[$key]=$value;
        }  

        return $new;
    }
    function posts_custom_columns($column_name, $id){
        if($column_name === 'tmx_post_thumbs'){
            if ( !has_post_thumbnail() ) {
                echo '<img height="80" width="80" src="'.trailingslashit( get_stylesheet_directory_uri() ) . 'resources/img/pr-03.jpg" />';
            }
            else {
                echo the_post_thumbnail( array(125,80) );
            }
        }
    }

add_action( 'add_meta_boxes', 'tmx_mb_taxonomy_walkers' );
function tmx_mb_taxonomy_walkers( $post_type ) {
    remove_meta_box( 'statusdiv', 'projects', 'side' );
    remove_meta_box( 'citydiv', 'projects', 'side' );
    remove_meta_box( 'sizediv', 'projects', 'side' );
}

add_action('do_meta_boxes', 'change_image_metabox' );
function change_image_metabox(){
    remove_meta_box( 'postimagediv', 'projects', 'side' );
    add_meta_box('postimagediv', __('Featured Image'), 'post_thumbnail_meta_box', 'projects', 'side', 'high');
}

add_action("login_head", "tmx_login_head");
function tmx_login_head() {
	echo "
	<style>
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: local('Raleway'), url(https://fonts.gstatic.com/s/raleway/v9/0dTEPzkLWceF7z0koJaX1A.woff2) format('woff2');
    }
    html,body{
        background-color: #1F2933;
        color: #FFF;
        font-family: 'Raleway';
    }
    .login form {
        background: rgba(255, 255, 255, 0.01);
    }
	body.login #login h1 a {
		background: url('".get_header_image()."') no-repeat scroll center top transparent;
		height: ".get_custom_header()->height."px;
        width: ".get_custom_header()->width."px;
	}
    .login form .input, .login form input[type=\"checkbox\"], .login input[type=\"text\"] {
        background-color:#323D48;
        border: 1px solid rgba(255,255,255,0.1);
        color: #FFF;
    }
    .wp-core-ui .button, .wp-core-ui .button-primary, .wp-core-ui .button-secondary {
        border-radius: 0;
        font-weight: bold;
        text-transform: uppercase;
    }
    .login #login_error {
        background-color: #4e3838;
    }
    .login .message {
        background-color: #11313b;
    }
	</style>
	";
}

// Change title for login screen
add_filter('login_headertitle', create_function(false,"return get_bloginfo('title');"));

// change url for login screen
add_filter('login_headerurl', create_function(false,"return home_url();"));