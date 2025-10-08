<?php
function mytheme_enqueue() {
    // main root style.css
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );

    // your assets css/js (if you keep them in assets/)
    wp_enqueue_style( 'mytheme-assets', get_template_directory_uri() . '/assets/css/style.css', array('mytheme-style') );
    wp_enqueue_script( 'mytheme-js', get_template_directory_uri() . '/assets/js/functions.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );

function mytheme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery' ) );
    register_nav_menus( array(
        'main-menu' => __( 'Main Menu', 'mytheme' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}
add_action( 'widgets_init', 'mytheme_widgets_init' );



