<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function club100_enqueue_assets() {

    wp_enqueue_style(
        'club100-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'club100-global',
        get_template_directory_uri() . '/assets/css/global.css',
        array( 'club100-style' ),
        wp_get_theme()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'club100_enqueue_assets' );


function club100_register_block_styles() {

    register_block_style(
        'core/button',
        array(
            'name'  => 'secondary',
            'label' => __( 'Secondary', 'club100' ),
        )
    );

    register_block_style(
        'core/button',
        array(
            'name'  => 'light',
            'label' => __( 'Light', 'club100' ),
        )
    );

    register_block_style(
        'core/group',
        array(
            'name'  => 'club100-card',
            'label' => __( 'Club100 Card', 'club100' ),
        )
    );
}

add_action( 'init', 'club100_register_block_styles' );
