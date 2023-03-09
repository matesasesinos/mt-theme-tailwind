<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if (!defined('_MT_VERSION')) {
    define('_MT_VERSION', '1.0.0');
}


function mt_theme_setup()
{

    load_theme_textdomain('mt-theme', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'mt-theme'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support(
        'custom-background',
        apply_filters(
            'mt_theme_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'mt_theme_setup');

function mt_theme_content_width()
{
    $GLOBALS['content_width'] = apply_filters('mt_theme_content_width', 640);
}
add_action('after_setup_theme', 'mt_theme_content_width', 0);


function mt_theme_scripts()
{
    wp_enqueue_style('mt-theme-style', get_stylesheet_uri(), array(), _MT_VERSION);
    wp_enqueue_style('mt-style', get_stylesheet_directory_uri() . '/dist/css/front.css', [], _MT_VERSION);
    wp_style_add_data('mt-theme-style', 'rtl', 'replace');
}
add_action('wp_enqueue_scripts', 'mt_theme_scripts');
