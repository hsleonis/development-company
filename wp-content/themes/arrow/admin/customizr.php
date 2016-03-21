<?php

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function tmx_theme_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'social_section',
        array(
            'title' => 'Social Links',
            'description' => 'Social site URL settings.',
            'priority' => 35,
        )
    );
    $wp_customize->add_setting(
        'fb_txt_link',
        array(
            'default' => 'http://facebook.com',
        )
    );
    $wp_customize->add_control(
        'fb_txt_link',
        array(
            'label' => 'Facebook URL',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'tw_txt_link',
        array(
            'default' => 'http://twitter.com',
        )
    );
    $wp_customize->add_control(
        'tw_txt_link',
        array(
            'label' => 'Twitter URL',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'gp_txt_link',
        array(
            'default' => 'http://google.com',
        )
    );
    $wp_customize->add_control(
        'gp_txt_link',
        array(
            'label' => 'Google plus URL',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'yt_txt_link',
        array(
            'default' => 'http://youtube.com',
        )
    );
    $wp_customize->add_control(
        'yt_txt_link',
        array(
            'label' => 'Youtube URL',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
}
add_action( 'customize_register', 'tmx_theme_customizer' );