<?php
    function themeaxe_arrow_scripts() {
        
        // Styles
        wp_enqueue_style( 'bootstrap-css',  get_template_directory_uri().'/resources/css/bootstrap.min.css' );
        wp_enqueue_style( 'normalize',  get_template_directory_uri().'/resources/css/normalize.min.css' );
        wp_enqueue_style( 'sprite',  get_template_directory_uri().'/resources/css/sprite.css' );
        wp_enqueue_style( 'slick',  get_template_directory_uri().'/resources/css/slick.css' );
        wp_enqueue_style( 'lightgallery',  get_template_directory_uri().'/resources/dist/css/lightgallery.min.css' );
        wp_enqueue_style( 'perfect-scroller',  get_template_directory_uri().'/resources/css/perfect-scrollbar.min.css' );
        wp_enqueue_style( 'main-style',  get_template_directory_uri().'/resources/css/main.css' );
        wp_enqueue_style( 'super', get_stylesheet_uri() );
        
        // Scripts
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/resources/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/resources/js/slick.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/resources/dist/js/lightgallery-all.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'perfect-js', get_template_directory_uri() . '/resources/js/perfect-scrollbar.jquery.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'angular', get_template_directory_uri() . '/resources/js/angular.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'angular-controller', get_template_directory_uri() . '/resources/js/angular.controllers.js', array('angular'), '1.0.0', true );
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/resources/js/main.js', array('jquery'), '1.0.0', true );

    }

    add_action( 'wp_enqueue_scripts', 'themeaxe_arrow_scripts' );