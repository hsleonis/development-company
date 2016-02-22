<?php
    if ( ! function_exists('themeaxe_arrow_features') ) {

    // Register Theme Features
    function themeaxe_arrow_features()  {

        // Add theme support for Automatic Feed Links
        add_theme_support( 'automatic-feed-links' );

        // Add theme support for Featured Images
        add_theme_support( 'post-thumbnails', array( 'post', 'page', 'tiles' ) );

        // Add theme support for Custom Header
        $header_args = array(
            'default-image'          => get_template_directory_uri() . '/resources/img/logo.png',
            'width'                  => 140,
            'height'                 => 40,
            'flex-width'             => false,
            'flex-height'            => false,
            'uploads'                => true,
            'random-default'         => false,
            'header-text'            => true,
            'default-text-color'     => '#FFFFFF',
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-header', $header_args );
    }
    add_action( 'after_setup_theme', 'themeaxe_arrow_features' );

}