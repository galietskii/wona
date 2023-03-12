<?php

/**
 * Functions
 */

/******************************************************************************
 * Included Functions
 ******************************************************************************/

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',              'print_emoji_detection_script', 7);
remove_action('admin_print_scripts',  'print_emoji_detection_script');
remove_action('wp_print_styles',      'print_emoji_styles');
remove_action('admin_print_styles',   'print_emoji_styles');

remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');

/* Theme Setting Options */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));



}

/* Disable Clasic Editor
*/

// Disable gutenberg
//add_filter('use_block_editor_for_post_type', '__return_false');
// Disables the block editor from managing widgets in the Gutenberg plugin.
//add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
//add_filter( 'use_widgets_block_editor', '__return_false' );


/* ADD Custom Menu */

function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

// CUSTOM WP LOGO

// Custom Logo
add_theme_support( 'custom-logo', array(
    'height'      => '150',
    'flex-height' => true,
    'flex-width'  => true,
) );

function show_custom_logo( $size = 'medium' ) {
    if ( $custom_logo_id = get_theme_mod( 'custom_logo' ) ) {
        $logo_image = wp_get_attachment_image( $custom_logo_id, $size, false, array(
            'class'    => 'custom-logo',
            'itemprop' => 'siteLogo',
            'alt'      => get_bloginfo( 'name' ),
        ) );
    } else {
        $logo_url = get_stylesheet_directory_uri() . '/assets/images/custom-logo.png';
        $w        = 200;
        $h        = 160;
        $logo_image = '<img src="' . $logo_url . '" width="' . $w . '" height="' . $h . '" class="custom-logo" itemprop="siteLogo" alt="' . get_bloginfo( 'name' ) . '">';
    }

    $html       = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="%2$s" itemscope>%3$s</a>', esc_url( home_url( '/' ) ), get_bloginfo( 'name' ), $logo_image );
    echo apply_filters( 'get_custom_logo', $html );
}




