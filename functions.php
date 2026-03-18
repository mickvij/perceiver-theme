<?php
/**
 * Perceiver Theme — functions.php
 *
 * Enqueues alle assets (fonts, CSS, JS).
 * Dit is de ENIGE plek waar assets worden ingeladen.
 */

function perceiver_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'perceiver-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap',
        array(),
        null
    );

    // Main CSS — jouw enige stylesheet
    wp_enqueue_style(
        'perceiver-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('perceiver-fonts'),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    // Main JS
    wp_enqueue_script(
        'perceiver-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'perceiver_enqueue_assets');

/**
 * Theme setup
 */
function perceiver_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'perceiver_theme_setup');
