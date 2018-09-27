<?php
/**
 * @author KEA
 * @copyright 2018
 */

add_action( 'wp_enqueue_scripts', 'eoi_enqueue_parent' );
function eoi_enqueue_parent() {
    wp_enqueue_style( 'eoi-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'eoi-slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_style( 'eoi-fa-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

    wp_enqueue_script( 'eoi-slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', false, null, true);
    wp_enqueue_script( 'eoi-main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', false, null, true);
}


// Add specific CSS class to body tag.
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'eoi-theme' ) );
} );