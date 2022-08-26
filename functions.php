<?php
add_action( 'wp_enqueue_scripts', 'saxon_enqueue_styles' );
function saxon_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'saxon-parent-style', get_template_directory_uri() . '/style.css', array('bootstrap'));
    wp_enqueue_style( 'saxon-child-style', get_stylesheet_directory_uri() . '/style.css', array('bootstrap'));
}

add_image_size( 'saxon-blog-thumb-related-masonry', 700, 0, false);
?>