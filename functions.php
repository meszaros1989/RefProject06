<?php

// SETUP


// INCLUDES

include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/setup.php'));


// HOOKS

add_action('wp_enqueue_scripts', 'rp6_enqueue');
add_action('after_setup_theme', 'rp6_setup');
add_action('init', 'add_menus');
add_action('widgets_init', 'rp6_side_widget');
add_action('widgets_init', 'rp6_top_widget');
add_action('after_setup_theme', 'woocommerce_support');

add_filter('excerpt_length', 'set_excerpt_length');
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );


// SHORTCODES
