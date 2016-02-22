<?php
require_once('admin/inc.php');

add_filter('manage_projects_posts_columns', 'posts_columns', 1);
add_action('manage_projects_posts_custom_column', 'posts_custom_columns', 1, 2);

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
            echo 'No Image';
        }
        else {
            echo the_post_thumbnail( array(125,80) );
        }
    }
}

add_action('do_meta_boxes', 'tmx_image_box');
function tmx_image_box() {

	remove_meta_box( 'postimagediv', 'tiles', 'side' );

	add_meta_box('postimagediv', __('Tile Image'), 'post_thumbnail_meta_box', 'tiles', 'normal', 'high');

}