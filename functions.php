<?php
/**
 * Marketify Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Marketify Child 1.0
 */

function marketify_child_styles() {
    wp_enqueue_style( 'marketify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'marketify_child_styles', 210 );
