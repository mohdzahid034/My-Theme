<?php
function mytheme_scripts() {
    // WordPress default stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());

    // Your custom CSS
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css');

    // Your custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

