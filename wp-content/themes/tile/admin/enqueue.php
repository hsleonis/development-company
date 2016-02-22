<?php
    function themeaxe_tile_scripts() {
        
        // Styles
        wp_enqueue_style( 'font-awesome-css',  get_template_directory_uri().'/visualizer/css/font-awesome.min.css' );
        wp_enqueue_style( 'viewer-css',  get_template_directory_uri().'/visualizer/viewer.css' );
        wp_enqueue_style( 'sprite-css',  get_template_directory_uri().'/resources/css/sprite.css' );
        wp_enqueue_style( 'engine-css',  get_template_directory_uri().'/visualizer/engine.css' );
        wp_enqueue_style( 'jquery-ui-css',  get_template_directory_uri().'/visualizer/css/jquery-ui.min.css' );
        wp_enqueue_style( 'bootstrap-css',  get_template_directory_uri().'/visualizer/css/bootstrap.min.css' );
        wp_enqueue_style( 'main-style',  get_template_directory_uri().'/visualizer/css/style.css' );
        wp_enqueue_style( 'component-css',  get_template_directory_uri().'/visualizer/css/component.css' );
        wp_enqueue_style( 'super', get_stylesheet_uri() );
        
        // Scripts
        /*wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/resources/js/bootstrap.min.js', array('jquery'), '1.0.0', true );*/

    }

    add_action( 'wp_enqueue_scripts', 'themeaxe_tile_scripts' );